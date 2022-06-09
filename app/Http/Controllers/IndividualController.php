<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class IndividualController extends Controller
{
    public function index(){
        return view('individual');
    }

    public function create(){
        Project::create(
           [
               'name' => $_GET['name_nominate'],
               'nomination_id' =>'1',
               'industry_id' =>'1',
               'job' => $_GET['job_nominate'],
               'job_title' => $_GET['job_title_nominate'],
               'location' =>'1',
               'bio' => $_GET['bio'],
               'achievements' => $_GET['achievements'],
               'media' => $_GET['media_nom'],
               'why_worthy' => $_GET['why_worthy'],
               'presentation' => $_GET['presentation'],
               'awards' => $_GET['awards_nom'],
               'email' => $_GET['email_nominee'],
               'photo' => $_GET['photo_nom'],
               'social_network' => $_GET['social_url'],
               'user_id' => auth()->user()->id,
           ]
        );
//        return view('index');
    }
}
