<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Files;
use App\Classes\Filter;
use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{

    public function index(Request $request)
    {
        $items = Photo::orderBy('sort', 'asc')->orderBy('id', 'desc');

        $items = Filter::apply([
            'file', 'sort', 'date', 'is_home'
        ], $request, $items);

        return [
            'paginate' => $items->paginate(50)
        ];
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpeg,png,jpg|max:50000',
            'date' => 'nullable|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $photo = Photo::create($request->all());

        Files::$convert_to_webp = false;
        $file = Files::upload($request, 'file', 'photo', Photo::$thumbs, 0);
        if ($file) {
            $photo->file = $file;
            $photo->save();
        }

        return ['success' => $this->edit($photo->id)];
    }

    public function edit($id)
    {
        return Photo::find($id);
    }

    public function update(Request $request, photo $photo)
    {
        $validator_arr = [];

        foreach ([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:50000',
            'date' => 'nullable|date_format:Y-m-d',
        ] as $key => $val) {
            if ($request->has($key)) {
                $validator_arr[$key] = $val;
            }
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $photo->update($request->all());

        Files::$convert_to_webp = false;
        $file = Files::upload($request, 'file', 'photo', Photo::$thumbs, 0);
        if ($file) {
            Files::delete($photo->file, Photo::$thumbs);
            $photo->file = $file;
            $photo->save();
        }

        return ['success' => $this->edit($photo->id)];
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        Files::delete($photo->file, Photo::$thumbs);
        Photo::destroy($photo->id);
        return ['success' => true];
    }
}
