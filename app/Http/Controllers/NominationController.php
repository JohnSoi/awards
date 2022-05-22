<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nomination;
use App\Models\Project;

class NominationController extends Controller
{
    public function show($id)
    {
        $nomination = Nomination::find($id);

        if (!$nomination) {
            abort(404);
        }

        $projects = Project::where([
            ['is_top', 1],
            ['nomination_id', $nomination->id]
        ])->orderBy('is_winner', 'desc')->get();

        return view('nomination.show', [
            'nomination' => $nomination,
            'projects' => $projects
        ]);
    }
}
