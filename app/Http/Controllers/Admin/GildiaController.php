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

class GildiaController extends Controller
{

    public function index(Request $request)
    {
        $items = Project::with('industry', 'nomination')->where([
            ['is_organization', null],
            ['is_form2', null]
        ])->latest();

        $items = Filter::apply([
            'name', 'deposit', 'geography', 'phone_nominee',
            'email_nominee', 'unique', 'phone_nominate',
            'email_nominate', 'name_nominate', 'why_worthy',
            'industry_id', 'nomination_id', 'presentation',
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
            'deposit' => 'required|max:3000',
            'geography' => 'required',
            'phone_nominee' => 'required',
            'email_nominee' => 'required|email',
            'unique' => 'required|max:2000',
            'phone_nominate' => 'required',
            'email_nominate' => 'required|email',
            'name_nominate' => 'required',
            'why_worthy' => 'required|max:5000',
            'industry_id' => 'required',
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
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
            'name' => 'required',
            'deposit' => 'required|max:3000',
            'geography' => 'required',
            'phone_nominee' => 'required',
            'email_nominee' => 'required|email',
            'unique' => 'required|max:2000',
            'phone_nominate' => 'required',
            'email_nominate' => 'required|email',
            'name_nominate' => 'required',
            'why_worthy' => 'required|max:5000',
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

        $gildia = Project::find($id);

        $gildia->update($request->all());

        $this->after($gildia, $request);

        return ['success' => $this->edit($gildia->id)];
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        // Files::delete($gildia->presentation);
        $project->delete();

        return ['success' => true];
    }
}
