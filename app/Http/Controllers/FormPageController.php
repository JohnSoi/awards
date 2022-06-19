<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;
use App\Models\Region;

class FormPageController extends Controller
{
    public function show(){
        return view('form-new', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
            'regions' => Region::all()->sortBy('name'),
        ]);
    }
    public function index()
    {
        return view('form', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
        ]);
    }
}
