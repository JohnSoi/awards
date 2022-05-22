<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use App\Models\Project;
use App\Models\User;
use Illuminate\Console\Command;

class EvalsDistribute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:distribute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $projects = Project::withCount('evaluations')->where([
            ['is_accept', 1],
            ['deleted_at', null]
        ])->get();

        foreach ($projects as $project) {
            // if ($project->evaluations_count > 3) {
            //     $this->info($project->id . ': ' . $project->evaluations_count);
            // }

            if ($project->evaluations_count < 3) {
                $users_counts = 3 - $project->evaluations_count;

                $users = User::withCount([
                    'evaluations',
                    'evaluations as evaluations_completed_count' => function ($query) {
                        $query->where('completed', 1);
                    },
                    'evaluations as evaluations_project_count' => function ($query) use ($project) {
                        $query->where('project_id', $project->id);
                    }
                ])
                    ->having('evaluations_project_count', 0)
                    ->having('evaluations_completed_count', 0)
                    ->having('evaluations_count', 22)
                    ->where([
                        ['group_id', 3],
                        ['email', '!=', $project->email_nominee]
                    ])
                    ->limit($users_counts)
                    ->get();

                foreach ($users as $user) {
                    $Evaluation = new Evaluation();
                    $Evaluation->user_id = $user->id;
                    $Evaluation->project_id = $project->id;
                    $Evaluation->period_id = 1;
                    $Evaluation->is_expert = 1;
                    $Evaluation->save();
                }
            }
        }

        $evals = Evaluation::all();
        $map = [];
        foreach ($evals as $eval) {
            if (!isset($map[$eval->user_id])) {
                $map[$eval->user_id] = [];
            }

            if (in_array($eval->project_id, $map[$eval->user_id])) {
                $this->info($eval->user_id);
            }

            $map[$eval->user_id][] = $eval->project_id;
        }

        $this->info('ok');
    }
}
