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
        echo "<pre>";
        dump($_GET);
        echo "</pre>";
        $user_id = auth()->user()->id;
        $name_nom = $_GET['name_nominate'];
        $job_nom = $_GET['job_nominate'];
        $job_name_nom = $_GET['job_title_nominate'];
        $bio_nom = $_GET['bio'];
        $achievements_nom = $_GET['achievements'];
        $media_nom = $_GET['media_nom'];
        $why_worthy = $_GET['why_worthy'];
        $email_nominee = $_GET['email_nominee'];
        $awards_nom = $_GET['awards_nom'];
        $social_url = $_GET['social_url'];
        $photo_nom = $_GET['photo_nom'];
        $presentation = $_GET['presentation'];
        Project::create(
           [
               'name' =>"$name_nom",
               'nomination_id' =>'1',
               'industry_id' =>'1',
               'job' =>"$job_nom",
               'job_title' =>"$job_name_nom",
               'location' =>'1',
               'bio' =>"$bio_nom",
               'achievements' =>"$achievements_nom",
               'media' =>"$media_nom",
               'why_worthy' =>"$why_worthy",
               'presentation' =>"$presentation",
               'awards' =>"$awards_nom",
               'email' =>"$email_nominee",
               'photo' =>"$photo_nom",
               'social_network' =>"$social_url",
               'user_id' =>"$user_id",
           ]
        );
//        return view('index');
    }
}
