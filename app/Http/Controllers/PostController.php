<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paginate' => 'nullable|min:0|max:20',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $items = Post::where('published', 1)->latest();

        if ($request->recommend) {
            $items->where('id', '!=', $request->recommend);
        }

        $items = $items->paginate($request->has('paginate') ? $request->paginate : 8);

        $items = PaginateCollection($items, 'PostResource');

        return $request->ajax()
            ? $items
            : view('post.index', [
                'items' => $items
            ]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        return view('post.show', [
            'post' => $post
        ]);
    }
}
