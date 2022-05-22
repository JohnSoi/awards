<?php

namespace App\Http\Controllers\Form;

use App\Classes\Files;
use App\Http\Controllers\Controller;
use App\Mail\OrganizationMail;
use App\Models\Organization;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'organization' => 'required|max:255',
            'inn' => 'required|max:255',
            'director' => 'required|max:255',
            'deposit' => 'required|max:3000',
            'unique' => 'required|max:2000',
            'why_worthy' => 'required|max:5000',
            'geography' => 'required|max:255',
            'phone_nominee' => 'required|max:255',
            'name_nominate' => 'required|max:255',
            'email_nominee' => 'required|email|max:255',
            'phone_nominate' => 'required|max:255',
            'email_nominate' => 'required|email|max:255',
            'industry_id' => 'required',
            'nomination_id' => 'required',
            'presentation' => 'max:30720',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $Organization = Organization::create($request->all());

        $presentation = Files::upload($request, 'presentation', 'presentation');
        if ($presentation) {
            $Organization->presentation = $presentation;
            $Organization->save();
        }

        try {
            // Mail::to('kindstrannik@yandex.ru')->send(new OrganizationMail($request));
            Mail::to('award@creativityweek.ru')->send(new OrganizationMail($request));
        } catch (Exception $e) {
        }

        return ['success' => true];
    }
}
