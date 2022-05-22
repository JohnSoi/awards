<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;

class FormPageController extends Controller
{
    public function index()
    {
        return view('form', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
        ]);
    }
}
