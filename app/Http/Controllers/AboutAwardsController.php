<?php

namespace App\Http\Controllers;

use App\Models\AboutAwards;

class AboutAwardsController extends Controller
{
    public function index(){
        return view('about', [
            'items' => AboutAwards::all()
        ]);
    }
}
