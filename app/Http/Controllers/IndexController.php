<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;
use App\Models\Region;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
            'regions' => Region::all()->sortBy('name')
        ]);
    }
}
