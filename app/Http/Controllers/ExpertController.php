<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpertController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paginate' => 'nullable|min:0|max:20',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $items = User::with('group')->where('group_id', 3)->orderBy('name', 'asc');

        $items = $items->paginate($request->has('paginate') ? $request->paginate : 12);

        return $request->ajax()
            ? $items
            : view('expert.index');
    }

    public function show($id)
    {
        return User::with('group')->where([
            ['id', $id],
            ['group_id', 3]
        ])->first();
    }
}
