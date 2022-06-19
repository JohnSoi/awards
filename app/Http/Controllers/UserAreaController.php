<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\project;
use http\Env\Request;

class UserAreaController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $request = project::where("user_id", $user->id)->get();
        if ((!empty( $_GET['column'])) and !empty( ($_GET['direction']))){
            if ($_GET['column'] == 'date' and $_GET['direction'] == 'down'){
                $request = project::where("user_id", $user->id)->orderBy('created_at'  , 'DESC')->get();
            }
            if ($_GET['column'] == 'date' and $_GET['direction'] == 'up'){
                $request = project::where("user_id", $user->id)->orderBy('created_at')->get();
            }
            if ($_GET['column'] == 'status' and $_GET['direction'] == 'up'){
                $request = project::where("user_id", $user->id)->orderBy('status')->get();
            }
            if ($_GET['column'] == 'status' and $_GET['direction'] == 'down'){
                $request = project::where("user_id", $user->id)->orderBy('status', 'DESC')->get();
            }

        }
        return view('lk', ['request' => $request]);
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



}
