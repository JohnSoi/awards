<?php

namespace App\Http\Controllers;

use App\Classes\Filter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paginate' => 'nullable|min:0|max:20',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $items = Photo::orderBy('sort', 'asc')->latest();

        $items = Filter::apply([
            'date', 'is_home'
        ], $request, $items);

        if (!$request->date && $request->year) {
            $items->where('date', 'like', $request->year . '-%');
        }

        $items = $items->paginate($request->has('paginate') ? $request->paginate : 18);

        $items = PaginateCollection($items, 'PhotoResource');

        return $request->ajax()
            ? $items
            : view('photos.index');
    }
}
