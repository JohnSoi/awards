<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use App\Models\Project;
use Illuminate\Console\Command;

class EvalsRandom extends Command
{
    protected $signature = 'evals:random';

    protected $description = 'Проставка рандомных оценок';

    public function __construct()
    {
        parent::__construct();
    }

    public function random_evals($max, $count)
    {
        $path = intval($max / 3);

        for ($i = 0; $i < $count; $i++) {
            $temp[$i] = rand(1, $path);
        }

        return $temp;
    }

    public function handle()
    {
        $minimum_total = false;

        $top50_projects = Project::with('evaluations')->where('is_top', 1)->get();

        foreach ($top50_projects as $top50_project) {
            if ($top50_project->evaluations) {
                $sum = 0;

                foreach ($top50_project->evaluations as $evaluation) {
                    if ($evaluation->is_expert && $evaluation->completed) {
                        $sum += $evaluation->total;
                    }
                }

                if ($sum) {
                    if ($minimum_total === false) {
                        $minimum_total = $sum;
                    } else if ($sum < $minimum_total) {
                        $minimum_total = $sum;
                    }
                }
            }
        }

        $minimum_total--;

        $projects = Project::with('evaluations')->withTrashed()->get();

        foreach ($projects as $project) {
            if (count($project->evaluations) > 1) {
                continue;
            }

            for ($i = 0; $i < 3; $i++) {
                $minimum_total_one = rand(3, intval($minimum_total / 3));
                $evals = $this->random_evals($minimum_total_one, 3);
                $total = array_sum($evals);

                $criterions = [];
                foreach ($evals as $key => $eval) {
                    $criterions[$key + 1] = $eval . '/10';
                }

                $evaluation = new Evaluation();
                $evaluation->forceFill([
                    'total' => $total,
                    'criterions' => $criterions,
                    'completed' => 1,
                    'project_id' => $project->id,
                    'is_expert' => 1
                ]);
                $evaluation->save();
            }
        }

        $this->info('Готово');
    }
}
