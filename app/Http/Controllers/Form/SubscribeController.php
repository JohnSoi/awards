<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'type' => 'nullable|integer'
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $Subscribe = Subscribe::where([
            ['email', $request->email],
            ['type', 1]
        ])->first();

        if (!$Subscribe) {
            Subscribe::create($request->all());
        }

        return ['success' => true];
    }
}
