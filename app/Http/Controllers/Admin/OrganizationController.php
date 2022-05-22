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

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $items = Project::with('industry', 'nomination')->where('is_organization', 1)->latest();

        $items = Filter::apply([
            'name', 'inn', 'kpp', 'director',
            'deposit', 'geography', 'phone_nominee', 'email_nominee',
            'unique', 'phone_nominate', 'email_nominate', 'name_nominate',
            'why_worthy', 'industry_id', 'nomination_id',
        ], $request, $items);

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
    }

    public function store(Request $request)
    {
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
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
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
        $validator_arr = [];

        foreach ([
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
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
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
        $project->delete();

        return ['success' => true];
    }
}
