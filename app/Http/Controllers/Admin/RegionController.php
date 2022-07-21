<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Files;
use App\Classes\Filter;
use App\Events\ItemUpdate;
use App\Http\Controllers\Controller;
use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegionController extends Controller
{
    public function index(Request $request)
    {
        $items = Region::latest();

        $items = Filter::apply([
            'name'
        ], $request, $items);

        return [
            'paginate' => $items->paginate(20)
        ];
    }

    public function before($request)
    {
        if ($request->has('created_at')) {
            $request['created_at'] = Carbon::parse($request->created_at)->format('Y-m-d H:i:s');
        }

        return $request;
    }

    public function store(Request $request)
    {
        $request = $this->before($request);

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $post = Region::create($request->all());

        return ['success' => $this->edit($post->id)];
    }

    public function edit($id)
    {
        return Region::find($id);
    }

    public function update(Request $request, Region $post)
    {
        $request = $this->before($request);

        $validator_arr = [];

        foreach ([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20048',
            'name' => 'required',
            'description' => 'nullable|max:255',
            'text' => 'required',
            'published' => 'numeric',
            'created_at' => 'required'
        ] as $key => $valid) {
            if ($request->has($key)) {
                $validator_arr[$key] = $valid;
            }
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $post->update($request->all());

        return ['success' => $this->edit($post->id)];
    }

    public function destroy($id)
    {
        $post = Region::find($id);

        if ($post) {
            Region::destroy($post->id);
        }

        return ['success' => true];
    }
}
