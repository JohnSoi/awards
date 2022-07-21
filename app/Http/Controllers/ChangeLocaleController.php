<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChangeLocaleController extends Controller
{

    public function index($locale){
        session(['locale'=>$locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
