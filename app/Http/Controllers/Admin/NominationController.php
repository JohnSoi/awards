<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Filter;
use App\Http\Controllers\Controller;
use App\Models\Nomination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NominationController extends Controller
{
    public function index(Request $request)
    {
        $items = Nomination::latest();

        $items = Filter::apply([
            'name', 'description', 'title', 'about', 'name_en', 'description_en', 'title_en', 'about_en'
        ], $request, $items);

        return [
            'paginate' => $items->paginate(50)
        ];
    }

    public function edit($id)
    {
        return Nomination::find($id);
    }

    public function update(Request $request, Nomination $nomination)
    {
        $validator_arr = [];

        foreach ([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'tile' => 'nullable|max:255',
        ] as $key => $valid) {
            if ($request->has($key)) {
                $validator_arr[$key] = $valid;
            }
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $nomination->update($request->all());

        return ['success' => $this->edit($nomination->id)];
    }
}
