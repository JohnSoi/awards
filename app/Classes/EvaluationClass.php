<?php

namespace App\Classes;

use App\Models\Evaluation;
use App\Models\EvaluationPeriod;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class EvaluationClass
{
    public static function projectsForExpert($user, $period)
    {
        // Кол-во экспертов
        $users = User::where('group_id', 3)->get();
        $experts_count = count($users);
        if ($experts_count == 0) return false;
        $users_ids = Arr::pluck($users, 'id');

        // Кол-во всех проектов
        $projects_count = Project::where([
            ['period_id', $period->id],
            ['is_accept', 1],
            ['deleted_at', null]
        ])->count();
        if ($projects_count == 0) return false;

        // Кол-во моих оценок
        $evaluations_me_count = Evaluation::where([
            ['user_id', $user->id],
            ['period_id', $period->id]
        ])->count();
        // if ($evaluations_me_count > 0) return false;

        // Кол-во оценок для данного эксперта нужно прикрепить
        $map = [];
        $count_completed = 0;
        $projects_evals_count = $projects_count * 3; // Сколько оценок нужно

        // Проверяем как нужно округлять
        $round_count = ceil($projects_evals_count / $experts_count);
        $isCeil = $round_count * $projects_count > $projects_evals_count ? false : true;

        foreach ($users_ids as $id) {
            $this_count = $isCeil
                ? ceil($projects_evals_count / $experts_count)
                : floor($projects_evals_count / $experts_count);

            $count_completed += $this_count;
            $map[$id] = $this_count;
        }

        // Излишки
        $eval_count_more = $projects_evals_count - $count_completed;
        if ($eval_count_more) {
            $forCount = $eval_count_more > $experts_count ? ceil($eval_count_more / $experts_count) : 1;

            for ($i = 0; $i < $forCount; $i++) {
                foreach ($users_ids as $id) {
                    $map[$id] += 1;
                    $eval_count_more--;

                    if ($eval_count_more == 0) {
                        break;
                    }
                }

                if ($eval_count_more == 0) {
                    break;
                }
            }
        }

        $evaluations_me_future_count = $evaluations_me_count ? $map[$user->id] - $evaluations_me_count : $map[$user->id];

        // Если нужно прикреплять
        if ($evaluations_me_future_count) {
            // Проекты которые у меня есть
            $evalsMe = Evaluation::where([
                ['user_id', $user->id],
                ['period_id', $period->id]
            ])->get();

            $evalsMeProjectsId = Arr::pluck($evalsMe, 'project_id');

            // Заявки у которых меньше всего оценок и котрых у меня нет
            $projects = Project::withCount('evaluations')
                ->whereNotIn('id', $evalsMeProjectsId)
                ->where([
                    ['projects.email_nominee', '!=', $user->email],
                    ['projects.period_id', $period->id],
                    ['projects.is_accept', 1],
                    ['projects.deleted_at', null]
                ])
                ->limit($evaluations_me_future_count)
                ->orderBy('evaluations_count', 'asc')
                ->get();

            if (count($projects)) {
                foreach ($projects as $project) {
                    $Evaluation = new Evaluation();
                    $Evaluation->user_id = $user->id;
                    $Evaluation->project_id = $project->id;
                    $Evaluation->period_id = $period->id;
                    $Evaluation->is_expert = 1;
                    $Evaluation->save();
                }
            }
        }
    }

    public static function projectsForJury($user, $period)
    {
        // Кол-во моих оценок
        $evaluations_me_count = Evaluation::where([
            ['user_id', $user->id],
            ['period_id', $period->id]
        ])->count();

        // Если нужно прикреплять
        if ($evaluations_me_count == 0) {
            $projects = Project::where([
                ['period_id', $period->id],
                ['is_accept', 1],
                ['is_top', 1],
                ['deleted_at', null]
            ])->get();

            if (count($projects)) {
                foreach ($projects as $project) {
                    $Evaluation = new Evaluation();
                    $Evaluation->user_id = $user->id;
                    $Evaluation->project_id = $project->id;
                    $Evaluation->period_id = $period->id;
                    $Evaluation->save();
                }
            }
        }
    }

    public static function isAccessEvaluation($user = false, $period = false)
    {
        if (!$user) {
            $user = request()->user();
        }

        if (!$period) {
            $period = EvaluationPeriod::latest()->first();
        }

        if ($period && $user) {
            if ($user->group_id == 3) {
                return !Carbon::now('Europe/Moscow')->isAfter($period->evaluation_stop_at);
            }

            if ($user->group_id == 4) {
                return !Carbon::now('Europe/Moscow')->isAfter($period->evaluation_jury_stop_at);
            }
        }

        return false;
    }
}
