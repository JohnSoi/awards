<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Nomination;
use App\Models\Region;

class CompetitionController extends Controller
{
    public function Competition()
    {
        return view('competition', [
            'nominations' => Nomination::all(),
            'industries' => Industry::all(),
            'regions' => Region::all()->sortBy('name')
        ]);
    }
}
