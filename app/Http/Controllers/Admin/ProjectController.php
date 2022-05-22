<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Classes\Files;
use App\Classes\Filter;
use App\Exports\ProjectExport;
use App\Models\Industry;
use App\Models\Nomination;
use App\Models\Project;
use Excel;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $items = Project::with('industry', 'nomination', 'evaluations')->latest();

        $items = Filter::apply([
            'name', 'inn', 'kpp', 'director',
            'deposit', 'geography', 'phone_nominee', 'email_nominee',
            'unique', 'phone_nominate', 'email_nominate', 'name_nominate',
            'why_worthy', 'industry_id', 'nomination_id', 'presentation', 'is_top', 'is_winner'
        ], $request, $items);

        if ($request->has('trashed')) {
            $items->withTrashed();
        }

        if ($request->has('excel')) {
            return Excel::download(new ProjectExport($items->paginate(999999)->items()), 'result.xlsx');
        }

        return [
            'paginate' => $items->paginate(20),
            'industry' => Industry::all(),
            'nomination' => Nomination::all(),
        ];
    }

    public function after($Project, $request)
    {
        $presentation = Files::upload($request, 'presentation', 'presentation');

        if ($presentation) {
            $Project->presentation = $presentation;
            $Project->save();
        }

        Files::$convert_to_webp = false;

        $image = Files::upload($request, 'image', 'project_image', Project::$thumbs);

        if ($image) {
            $Project->image = $image;
            $Project->save();
        }

        $shortlist_image = Files::upload($request, 'shortlist_image', 'project_shortlist_image', Project::$shortlist_image_thumbs);

        if ($shortlist_image) {
            $Project->shortlist_image = $shortlist_image;
            $Project->save();
        }

        if ($request->has('is_winner')) {
            $Project->is_winner = $request->is_winner;
            $Project->save();
        }
    }

    public function before($request)
    {
        foreach (['shortlist_texts'] as $item) {
            if ($request->has($item)) {
                $request[$item] = getHtmlArray($request[$item]);
            }
        }

        return $request;
    }

    public function store(Request $request)
    {
        $request = $this->before($request);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'inn' => 'required',
            'kpp' => 'nullable',
            'director' => 'required',
            'name_nominate' => 'required',
            'deposit' => 'required|max:3000',
            'unique' => 'required|max:2000',
            'why_worthy' => 'required|max:5000',
            'geography' => 'required',
            'phone_nominee' => 'required',
            'email_nominee' => 'required|email',
            'phone_nominate' => 'required',
            'email_nominate' => 'required|email',
            'industry_id' => 'required',
            'nomination_id' => 'nullable',
            'shortlist_image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000'
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $project = Project::create($request->all());

        $this->after($project, $request);

        return ['success' => $this->edit($project->id)];
    }

    public function edit($id)
    {
        return Project::with('industry', 'nomination')->find($id);
    }

    public function update(Request $request, $id)
    {
        $request = $this->before($request);

        $validator_arr = [];

        foreach ([
            'name' => 'required',
            'inn' => 'nullable',
            'kpp' => 'nullable',
            'director' => 'nullable',
            'name_nominate' => 'required',
            // 'deposit' => 'nullable|max:3000',
            // 'unique' => 'nullable|max:2000',
            // 'why_worthy' => 'nullable|max:5000',
            'geography' => 'nullable',
            'phone_nominee' => 'nullable',
            'email_nominee' => 'nullable|email',
            'phone_nominate' => 'nullable',
            'email_nominate' => 'nullable|email',
            'industry_id' => 'nullable',
            'nomination_id' => 'nullable',
            'shortlist_image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000'
        ] as $key => $val) {
            if ($request->has($key)) {
                $validator_arr[$key] = $val;
            }
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $project = Project::find($id);

        $project->update($request->all());

        $this->after($project, $request);

        return ['success' => $this->edit($project->id)];
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        // Files::delete($project->presentation);
        // Files::delete($project->image);
        // Files::delete($project->shortlist_image);

        $project->delete();

        return ['success' => true];
    }
}
