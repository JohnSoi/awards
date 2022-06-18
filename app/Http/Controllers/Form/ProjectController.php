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
        if ($request->has('is_organization') && $request['is_organization']) {
            $validator_arr['organization_name'] = 'required|max:255';
            $validator_arr['name_nominate'] = 'required|max:255';
            $validator_arr['phone_nominee'] = 'required|max:20';
            $validator_arr['project_name'] = 'required|max:255';
            $validator_arr['project_description'] = 'required|min:500';
            $validator_arr['media_doc'] = 'mimes: pdf,mp4,doc,docx|max:30720';
            $validator_arr['name_organizer'] = 'required|max:255';
            $validator_arr['organization_site'] = 'max:2000';
            $validator_arr['region_id'] = 'required';
            $validator_arr['video_nominate'] = 'required|max:5000';
            $validator_arr['photo_director'] = 'mimes:jpg,jpeg,png|min:100 |dimensions:min_width=600,min_height=600';
            $validator_arr['industry_id'] = 'required';
            $validator_arr['nomination_id'] = 'required';
            $validator_arr['user_id'] = 'required';
            $validator_arr['job_title'] = 'required|max:255';
            $validator_arr['achievements'] = 'required|min:500';
            $validator_arr['media'] = 'required|max:2500';
            $validator_arr['social_url'] = 'required|max:5000';
            $validator_arr['why_worthy'] = 'required|min:500';
            $validator_arr['email_nominee'] = 'required|email|max:191';
            $validator_arr['presentation_file'] = 'required|mimes: pdf,mp4,doc,docx| max:30720';
        } else {
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
                'awards' => 'max:5000',
                'email_nominee' => 'required|email|max:191',
                'social_url' => 'required|max:5000',
                'image' => 'mimes:jpg,jpeg,png|min:100 |dimensions:min_width=600,min_height=600',
                'presentation' => 'max:5000',
            ];
        }

        $validator = Validator::make($request->all(), $validator_arr);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $Project = Project::create($request->all());

        $presentation = Files::upload($request, 'presentation_file', 'presentation');
        if ($presentation) {
            $Project->presentation_file = $presentation;
        }

        $image = Files::upload($request, 'image', 'image');
        if ($image) {
            $Project->image = $image;
        }

        $photo_director = Files::upload($request, 'photo_director', 'image');
        if ($photo_director) {
            $Project->photo_director = $photo_director;
        }

        $media_doc = Files::upload($request, 'media_doc', 'media');
        if ($media_doc) {
            $Project->media_doc = $media_doc;
        }

        $Project->save();

        try {
            Mail::to('award@creativityweek.ru')->send(new ProjectMail($request));
        } catch (Exception $e) {
        }

        return ['success' => true];
    }
    public function edit($id)
    {
        $individual = project::find($id);
        return view('edit_individual', compact('individual'));
    }


    public function update($id)
    {
        $individual = project::find($id);
        $individual -> name = $_GET['name_nominate'];
        $individual -> nomination_id = '1';
        $individual -> industry_id = '1';
        $individual -> job = $_GET['job_nominate'];
        $individual -> job_title = $_GET['job_title_nominate'];
        $individual -> location = '1';
        $individual -> bio = $_GET['bio'];
        $individual -> achievements = $_GET['achievements'];
        $individual -> media = $_GET['media_nom'];
        $individual -> why_worthy = $_GET['why_worthy'];
        $individual -> presentation = $_GET['presentation'];
        $individual -> awards = $_GET['awards_nom'];
        $individual -> email = $_GET['email_nominee'];
        $individual -> photo = $_GET['photo_nom'];
        $individual -> social_network = $_GET['social_url'];
        $individual -> update();
        return redirect('lk');
    }



    public function gildia(Request $request)
    {
        return $this->store($request);
    }

    public function organization(Request $request)
    {
        $request['is_organization'] = 1;
        return $this->store($request);
    }
}