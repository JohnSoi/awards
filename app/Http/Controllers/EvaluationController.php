<?php

namespace App\Http\Controllers;

use App\Classes\EvaluationClass;
use App\Classes\Files;
use App\Models\Evaluation;
use App\Models\EvaluationCriterion;
use App\Models\EvaluationPeriod;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EvaluationController extends Controller
{
    public function delete($project_id)
    {
        $project = Project::find($project_id);

        if (!$project) {
            return ['error' => 'Проект не найден'];
        }

        $project->delete();

        return ['success' => true];
    }

    public function top_toggle($project_id)
    {
        $project = Project::find($project_id);

        if (!$project) {
            return ['error' => 'Проект не найден'];
        }

        if ($project->is_top) {
            $project->is_top = null;
            $project->save();

            return ['remove' => true];
        }

        if (!$project->is_top) {
            $project->is_top = 1;
            $project->save();

            return ['add' => true];
        }
    }

    public function accept_toggle($project_id)
    {
        $project = Project::find($project_id);

        if (!$project) {
            return ['error' => 'Проект не найден'];
        }

        if ($project->is_accept) {
            $project->is_accept = null;
            $project->save();

            return ['remove' => true];
        }

        if (!$project->is_accept) {
            $project->is_accept = 1;
            $project->save();

            return ['add' => true];
        }
    }

    public function photoChange(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'image|mimes:jpeg,png,jpg|max:10048',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $user = $request->user();
        $photo = '';

        if ($request->hasFile('photo')) {
            Files::$convert_to_webp = false;
            $photo = Files::upload($request, 'photo', 'user', User::$thumbs, 0);
        }

        Files::delete($user->photo, User::$thumbs);
        $user->photo = $photo;
        $user->save();

        return ['success' => true];
    }

    public function index(Request $request)
    {
        $user = $request->user();
        $period = EvaluationPeriod::latest()->first();

        // if ($period) {
        //     if ($user->group_id == 3) {
        //         EvaluationClass::projectsForExpert($user, $period);
        //     }

        //     if ($user->group_id == 4) {
        //         EvaluationClass::projectsForJury($user, $period);
        //     }
        // }

        $period ? $evaluation_completed_count = Evaluation::where([
            ['user_id', $user->id],
            ['period_id', $period->id],
            ['completed', 1]
        ])->count() : 0;

        $evaluation_count = Evaluation::where([
            ['user_id', $user->id],
            ['period_id', $period->id]
        ])->count();

        $isEvaluationCompleted = $evaluation_completed_count >= $evaluation_count;

        $evaluation_stop_at = false;
        if ($period && $user) {
            $evaluation_stop_at = $user->group_id == 3
                ? $period->evaluation_stop_at
                : $period->evaluation_jury_stop_at;
        }

        return view('evaluation.index', [
            'user' => $user,
            'period' => $period,
            'evaluation_completed_count' => $evaluation_completed_count,
            'evaluation_count' => $evaluation_count,
            'isEvaluationCompleted' => $isEvaluationCompleted,
            'evaluation_stop_at' => $evaluation_stop_at,
            'evaluations' => Evaluation::with('project.nomination')->where([
                ['user_id', $user->id],
                ['period_id', $period->id]
            ])->limit(10)->orderBy('completed', 'asc')->get()
        ]);
    }

    public function process(Request $request)
    {
        $user = $request->user();
        $period = EvaluationPeriod::latest()->first();

        if ($request->has('project_id') && $request->project_id) {
            $evaluation = Evaluation::with('project')->where([
                ['project_id', $request->project_id],
                ['user_id', $user->id],
                ['period_id', $period->id]
            ])->first();

            if (!$evaluation) {
                return redirect(Route('evaluation.process'));
            }
        } else {
            $evaluation = Evaluation::with('project')->where([
                ['user_id', $user->id],
                ['period_id', $period->id]
            ])->orderBy('completed', 'asc')->first();

            if ($evaluation) {
                if ($evaluation->completed) {
                    return redirect(Route('evaluation.index'));
                }
            }

            return $evaluation
                ? redirect(Route('evaluation.process') . '?project_id=' . $evaluation->project->id)
                : redirect(Route('evaluation.index'));
        }

        $url_previous = url()->previous();

        if ($url_previous) {
            if (strpos($url_previous, 'process') === false) {
                $request->session()->now('url_previous', $url_previous);
            } else {
                $url_previous = $url_previous = $request->session()->get('url_previous');
            }
        } else {
            $url_previous = $request->session()->get('url_previous');
        }

        if (!$url_previous) {
            $url_previous = Route('evaluation.index');
        }

        return view('evaluation.process', [
            'url_previous' => $url_previous,
            'project' => $evaluation->project,
            'evaluation' => $evaluation,
            'criterions' => EvaluationCriterion::where('period_id', $period->id)->get()
        ]);
    }

    public function managerProjects($request)
    {
        $user = $request->user();
        $period = EvaluationPeriod::latest()->first();

        $projects = Project::select('projects.*', 'evaluations.completed as completed', 'evaluations.comment as comment', 'nominations.name as nomination_name')
            ->selectRaw('sum(evaluations.total) as total')
            ->selectRaw('count(evaluations.id) as evaluations_count')
            ->leftJoin('nominations', 'projects.nomination_id', '=', 'nominations.id')
            ->leftJoin('evaluations', function ($join) {
                $join->on('projects.id', '=', 'evaluations.project_id')
                    ->where([
                        ['evaluations.completed', 1],
                        ['ignore', null]
                    ]);
            })
            ->where('projects.period_id', $period->id)
            ->groupBy('projects.id');

        // Фильтр
        if ($request->has('nomination_id') && $request->nomination_id) {
            $projects->whereIn('nomination_id', $request->nomination_id);
        }

        if ($request->has('is_organization')) {
            if ($request->is_organization) {
                $projects->where('is_organization', 1);
            } else {
                $projects->where('is_organization', null);
            }
        } else {
            // $projects->where('is_organization', null);
        }

        // Сортировка
        $sort_validator = Validator::make($request->all(), [
            'sort_key' => 'required', Rule::in(['id', 'name_nominate', 'nomination_id', 'completed', 'total', 'comment', 'is_top', 'is_accept']),
            'sort_val' => 'required', Rule::in(['asc', 'desc'])
        ]);

        if ($sort_validator->fails()) {
            $projects->orderBy('evaluations_count', 'desc');
        } else {
            if (in_array($request->sort_key, ['id', 'name_nominate', 'nomination_id', 'is_top', 'is_accept'])) {
                $projects->orderBy('projects.' . $request->sort_key, $request->sort_val);
            } else {
                if ($request->sort_key == 'completed') {
                    $projects->orderBy('evaluations_count', $request->sort_val);
                } else {
                    $projects->orderBy($request->sort_key, $request->sort_val);
                }
            }
        }

        $items = PaginateCollection($projects->paginate(20), 'Evaluation\ManagerProjectResource');

        return $request->ajax()
            ? $items
            : view('evaluation.projects', [
                'isAccessEvaluation' => EvaluationClass::isAccessEvaluation($user, $period)
            ]);
    }

    public function show($project_id)
    {
        $project = Project::find($project_id);

        if (!$project) {
            return ['error' => 'Проект не найден'];
        }

        $evaluations = Evaluation::with('user:id,name')->where([
            ['project_id', $project->id],
            ['completed', 1]
        ])->get();

        $total = 0;

        foreach ($evaluations as $evaluation) {
            $total += $evaluation->total;
        }

        $evaluations_count = count($evaluations);

        return [
            'project' => $project,
            'nomination' => $project->nomination ? [
                'name' => $project->nomination->name
            ] : null,
            'total' => $total,
            'evaluations_count' => $evaluations_count,
            'evaluations_count_text' => NumberWord($evaluations_count, ['оценка', 'оценки', 'оценок']),
            'evaluations' => $evaluations
        ];
    }

    public function projects(Request $request)
    {
        $user = $request->user();
        $period = EvaluationPeriod::latest()->first();

        if ($user->group_id == 5 || $user->group_id == 2) {
            return $this->managerProjects($request);
        }

        $evaluations = Evaluation::with('project.nomination')->where([
            ['user_id', $user->id],
            ['period_id', $period->id]
        ]);

        // Фильтр
        if ($request->has('nomination_id') && $request->nomination_id) {
            $evaluations->whereHas('project', function ($query) use ($request) {
                $query->whereIn('nomination_id', $request->nomination_id);
            });
        }

        // Сортировка
        $sort_validator = Validator::make($request->all(), [
            'sort_key' => 'required', Rule::in(['id', 'name_nominate', 'nomination_id', 'completed', 'total', 'comment']),
            'sort_val' => 'required', Rule::in(['asc', 'desc'])
        ]);

        if ($sort_validator->fails()) {
            $evaluations->orderBy('completed', 'asc');
        } else {
            if ($request->sort_key == 'name_nominate') {
                $evaluations->whereHas('project', function ($query) use ($request) {
                    $query->orderBy('name_nominate', $request->sort_val);
                });
            } else {
                $evaluations->orderBy($request->sort_key, $request->sort_val);
            }
        }

        $items = PaginateCollection($evaluations->paginate(20), 'Evaluation\ProjectResource');

        return $request->ajax()
            ? $items
            : view('evaluation.projects', [
                'isAccessEvaluation' => EvaluationClass::isAccessEvaluation($user, $period)
            ]);
    }

    public function update(Request $request, $project_id)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'nullable|max:65535',
            'criterions' => 'required|array',
            'criterions.*' => 'required'
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $user = $request->user();
        $period = EvaluationPeriod::latest()->first();

        $evaluation = Evaluation::where([
            ['project_id', $project_id],
            ['user_id', $user->id],
            ['period_id', $period->id]
        ])->first();

        if (!$evaluation) {
            return ['error' => 'Проект не найден, обновите страницу'];
        }

        if (!EvaluationClass::isAccessEvaluation($user, $period)) {
            return ['error' => 'Доступ к оценке запрещен!'];
        }

        if ($evaluation) {
            $criterions_ids = array_keys($request->criterions);
            $criterionsCount = EvaluationCriterion::whereIn('id', $criterions_ids)->count();

            if ($criterionsCount != count($criterions_ids)) {
                return ['error' => 'Список критерий не совпадает'];
            }

            $total = 0;

            foreach ($request->criterions as $val) {
                $val = explode('/', $val);
                $total += (int) $val[0];
            }

            $type = $evaluation->completed;

            $evaluation->criterions = $request->criterions;
            $evaluation->total = $total;
            $evaluation->comment = $request->comment;
            $evaluation->completed = 1;
            $evaluation->save();

            return [
                'success' => true,
                'type' => $type ? 2 : 1
            ];
        } else {
            return ['error' => 'Проект не найден'];
        }
    }
}
