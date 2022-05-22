<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Filter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlockUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BlockUserController extends Controller
{
    public function index(Request $request)
    {
        $items = BlockUser::with('user')->latest();

        $items = Filter::apply([
            'id', 'user_id', 'block_id', 'sort', 'created_at'
        ], $request, $items);

        return [
            'paginate' => $items->paginate(20),
            'block' => BlockUser::$blocks,
            'user' => User::latest()->limit(150)->get()
        ];
    }

    public function before($request)
    {
        if ($request->has('created_at')) {
            $request['created_at'] = Carbon::parse($request->created_at)->format('Y-m-d H:i:s');
        }

        if ($request->has('sort') && !$request->sort) {
            $request['sort'] = 500;
        }

        return $request;
    }

    public function store(Request $request)
    {
        $request = $this->before($request);

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'block_id' => 'required|integer',
            'sort' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $BlockUser = BlockUser::create($request->all());

        return ['success' => $this->edit($BlockUser->id)];
    }

    public function edit($id)
    {
        return BlockUser::find($id);
    }

    public function update(Request $request, $id)
    {
        $BlockUser = BlockUser::find($id);

        $validator_arr = [];

        foreach ([
            'user_id' => 'required|exists:users,id',
            'block_id' => 'required|integer',
            'sort' => 'required|integer',
            'created_at' => 'required',
        ] as $key => $valid) {
            if ($request->has($key)) {
                $validator_arr[$key] = $valid;
            }
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $BlockUser->update($request->all());

        return ['success' => $this->edit($BlockUser->id)];
    }

    public function destroy($id)
    {
        BlockUser::destroy($id);

        return ['success' => true];
    }
}
