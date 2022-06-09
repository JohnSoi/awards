<?php

namespace App\Http\Controllers\Form;

use App\Classes\Files;
use App\Http\Controllers\Controller;
use App\Mail\ProjectMail;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function store($request)
    {
        $validator_arr = [
            'nomination_id' => 'required',
            'industry_id' => 'required',
            'region_id' => 'required',
            'user_id' => 'required',
            'name_nominate' => 'required|max:255',
            'job' => 'required|max:255',
            'job_title' => 'required|max:255',
            'bio' => 'required|max:2500',
            'achievements' => 'required|min:500',
            'media' => 'required|max:5000',
            'why_worthy' => 'required|max:5000',
            'awards' => 'required|max:5000',
            'email_nominee' => 'required|email|max:191',
            'social_url' => 'required|max:5000',
            'photo' => 'required|max:191',
            'presentation' => 'max:30720',

        ];

//        if ($request->has('is_form2')) {
//            $validator_arr['phone_nominee'] = 'nullable|max:255';
//        } else {
//            $validator_arr['name'] = 'required|max:255';
//            $validator_arr['industry_id'] = 'required';
//            $validator_arr['phone_nominate'] = 'required|max:255';
//            $validator_arr['email_nominate'] = 'required|email|max:255';
//        }

        if ($request->has('is_organization') && $request['is_organization']) {
            $validator_arr['inn'] = 'required|max:255';
            $validator_arr['kpp'] = 'nullable|max:255';
            $validator_arr['director'] = 'required|max:255';
            $validator_arr['director_photo'] = 'required|max:255';
        }

        $validator = Validator::make($request->all(), $validator_arr);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $Project = Project::create($request->all());

        $presentation = Files::upload($request, 'presentation', 'presentation');
        if ($presentation) {
            $Project->presentation = $presentation;
            $Project->save();
        }

        try {
            Mail::to('award@creativityweek.ru')->send(new ProjectMail($request));
        } catch (Exception $e) {
        }

        return ['success' => true];
    }

    public function gildia(Request $request)
    {
        return $this->store($request);
    }

    public function organization(Request $request)
    {
        $request['is_organization'] = 1;
        $request['name'] = $request['organization'];

        return $this->store($request);
    }
}
