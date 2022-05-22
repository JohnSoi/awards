<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;

class FormTwoPageController extends Controller
{
    public function index()
    {
        return view('form2', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
        ]);
    }
}
