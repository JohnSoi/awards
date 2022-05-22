<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Classes\Files;
use App\Classes\Filter;
use App\Exports\ProjectExport;
use App\Models\Project;
use App\Models\Industry;
use App\Models\Nomination;
use Excel;

class Form2Controller extends Controller
{

    public function index(Request $request)
    {
        $items = Project::with('industry', 'nomination')->where('is_form2', 1)->latest();

        $items = Filter::apply([
            'name_nominate', 'deposit', 'geography', 'social_url',
            'nomination_id', 'presentation', 'phone_nominee', 'email_nominee',
            'unique',  'why_worthy',
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
            'name_nominate' => 'required',
            'deposit' => 'required|max:3000',
            'geography' => 'required',
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
            'email_nominee' => 'required|email',
            'unique' => 'required|max:2000',
            'why_worthy' => 'required|max:5000',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $gildia = Project::create($request->all());

        $this->after($gildia, $request);

        return ['success' => $this->edit($gildia->id)];
    }

    public function edit($id)
    {
        return Project::with('industry', 'nomination')->find($id);
    }

    public function update(Request $request, $id)
    {
        $validator_arr = [];

        foreach ([
            'name_nominate' => 'required',
            'deposit' => 'required|max:3000',
            'geography' => 'required',
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
            'email_nominee' => 'required|email',
            'unique' => 'required|max:2000',
            'why_worthy' => 'required|max:5000',
        ] as $key => $val) {
            if ($request->has($key)) {
                $validator_arr[$key] = $val;
            }
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $gildia = Project::find($id);

        $gildia->update($request->all());

        $this->after($gildia, $request);

        return ['success' => $this->edit($gildia->id)];
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        // Files::delete($project->presentation);
        $project->delete();

        return ['success' => true];
    }
}
