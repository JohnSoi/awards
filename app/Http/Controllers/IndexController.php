<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
        ]);
    }
}
