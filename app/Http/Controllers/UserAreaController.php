<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAreaController extends Controller
{
    public function index(){
        return view('lk');
    }
}
