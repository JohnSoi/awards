<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Files;
use App\Classes\Filter;
use App\Events\ItemUpdate;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $items = Post::latest();

        $items = Filter::apply([
            'name', 'description', 'text', 'published', 'created_at', 'image'
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

    public function after($post, $request)
    {
        if ($request->has('image')) {
            Files::$convert_to_webp = false;
            $image = Files::upload($request, 'image', 'post', Post::$thumbs, 0);

            if ($image) {
                $post->image = $image;
                $post->save();
            }
        }

        ItemUpdate::dispatch(Post::where('published', 1), 'posts');
    }

    public function store(Request $request)
    {
        $request = $this->before($request);

        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20048',
            'name' => 'required',
            'description' => 'nullable|max:255',
            'text' => 'required',
            'published' => 'numeric',
            'created_at' => 'required'
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $post = Post::create($request->all());

        $this->after($post, $request);

        return ['success' => $this->edit($post->id)];
    }

    public function edit($id)
    {
        return Post::find($id);
    }

    public function update(Request $request, Post $post)
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

        $this->after($post, $request);

        return ['success' => $this->edit($post->id)];
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post) {
            Files::delete($post->image, Post::$thumbs);
            Post::destroy($post->id);
        }

        return ['success' => true];
    }
}
