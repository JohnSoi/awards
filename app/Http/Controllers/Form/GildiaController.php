<?php

namespace App\Http\Controllers\Form;

use App\Classes\Files;
use App\Http\Controllers\Controller;
use App\Mail\GildiaMail;
use App\Models\Gildia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class GildiaController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'deposit' => 'required|max:3000',
            'geography' => 'required|max:255',
            'phone_nominee' => 'required|max:255',
            'email_nominee' => 'required|email|max:255',
            'unique' => 'required|max:2000',
            'phone_nominate' => 'required|max:255',
            'email_nominate' => 'required|email|max:255',
            'name_nominate' => 'required|max:255',
            'why_worthy' => 'required|max:5000',
            'industry_id' => 'required',
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $Gildia = Gildia::create($request->all());

        $presentation = Files::upload($request, 'presentation', 'presentation');
        if ($presentation) {
            $Gildia->presentation = $presentation;
            $Gildia->save();
        }

        try {
            // Mail::to('kindstrannik@yandex.ru')->send(new GildiaMail($request));
            Mail::to('award@creativityweek.ru')->send(new GildiaMail($request));
        } catch (Exception $e) {
        }

        return ['success' => true];
    }
}
