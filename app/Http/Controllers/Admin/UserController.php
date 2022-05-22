<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Files;
use App\Classes\Filter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $items = User::latest();

        $items = Filter::apply([
            'id', 'name', 'email', 'group_id', 'created_at', 'photo'
        ], $request, $items);

        if ($request->search) {
            $items->where('name', 'like', "%$request->search%")
                ->orWhere('email', 'like', "%$request->search%");
        }

        return [
            'paginate' => $items->paginate(20),
            'group' => UserGroup::all()
        ];
    }

    public function store(Request $request)
    {
        if (!$request->email) {
            $request['email'] = Str::random(12) . '@example.com';
        }

        if (!$request->password || $request->password == '') {
            $request['password'] = Str::random(8);
            $request['password_confirmation'] = $request['password'];
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'group_id' => 'required|exists:user_groups,id',
            'password' => 'required|min:8|confirmed',
            'photo' => 'image|mimes:jpeg,png,jpg|max:10048',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $user = User::create($request->all());

        $this->after($user, $request);

        return ['success' => $this->edit($user->id)];
    }

    public function edit($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $validator_arr = [];

        foreach ([
            'name' => 'required',
            'group_id' => 'required|exists:user_groups,id',
            'photo' => 'image|mimes:jpeg,png,jpg|max:10048',
        ] as $key => $valid) {
            if ($request->has($key)) {
                $validator_arr[$key] = $valid;
            }
        }

        if ($request->email && $request->email != $user->email) {
            $validator_arr['email'] = 'required|email|unique:users';
        }

        if ($request->has('email') && !$request->email) {
            $request['email'] = Str::random(12) . '@example.com';
        }

        if ($request->password) {
            $validator_arr['password'] = 'required|min:8|confirmed';
        } else {
            unset($request['password']);
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $user->update($request->all());

        $this->after($user, $request);

        return ['success' => $this->edit($user->id)];
    }

    public function after($user, $request)
    {
        if ($request->group_id) {
            $user->group_id = $request->group_id;
            $user->save();
        }

        Files::$convert_to_webp = false;
        $photo = Files::upload($request, 'photo', 'user', User::$thumbs, 0);
        if ($photo) {
            $user->photo = $photo;
            $user->save();
        }

        if (isset($request['password']) && $request['password']) {
            if (in_array($user->group_id, [3, 4])) {
                $user->password_view = $request['password'];
            }

            $user->password = Hash::make($request['password']);
            $user->save();
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);

        Files::delete($user->photo, User::$thumbs);
        User::destroy($id);

        return ['success' => true];
    }
}
