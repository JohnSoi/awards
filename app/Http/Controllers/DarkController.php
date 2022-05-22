<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;

class DarkController extends Controller
{
    public function index()
    {
        return view('dark', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
        ]);
    }
}
