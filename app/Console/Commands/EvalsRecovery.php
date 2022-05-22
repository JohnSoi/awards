<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use App\Models\RecoveryEvaluation;
use Illuminate\Console\Command;

class EvalsRecovery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:recovery';

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
        $evals = RecoveryEvaluation::all();

        foreach ($evals as $eval) {
            Evaluation::where([
                ['user_id', $eval->user_id],
                ['project_id', $eval->project_id]
            ])->delete();

            continue;

            $evaluation = new Evaluation();

            $evaluation->user_id = $eval->user_id;
            $evaluation->is_expert = $eval->is_expert;
            $evaluation->project_id = $eval->project_id;
            $evaluation->period_id = $eval->period_id;
            $evaluation->completed = $eval->completed;
            $evaluation->comment = $eval->comment;
            $evaluation->total = $eval->total;
            $evaluation->criterions = $eval->criterions;
            $evaluation->created_at = $eval->created_at;
            $evaluation->updated_at = $eval->updated_at;

            $evaluation->save();
        }

        $this->info('ок');
    }
}
