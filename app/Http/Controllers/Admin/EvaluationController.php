<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Filter;
use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\EvaluationPeriod;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index(Request $request)
    {
        $period = EvaluationPeriod::latest()->first();

        $items = Evaluation::with('user', 'project')->latest();

        if ($period) {
            $items->where('period_id', $period->id);
        }

        $items = Filter::apply([
            'comment', 'total', 'updated_at'
        ], $request, $items);

        if ($request->has('user_name') && $request->user_name) {
            $items->whereHas('user', function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->user_name . '%');
            });
        }

        if ($request->has('project_name_nominate') && $request->project_name_nominate) {
            $items->whereHas('project', function ($query) use ($request) {
                return $query->where('name_nominate', 'like', '%' . $request->project_name_nominate . '%');
            });
        }

        return [
            'paginate' => $items->paginate(50)
        ];
    }
}
