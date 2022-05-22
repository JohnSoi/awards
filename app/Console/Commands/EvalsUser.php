<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use App\Models\RecoveryEvaluation;
use Illuminate\Console\Command;

class EvalsUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:user';

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
        $evals = Evaluation::with('user', 'project')->get();

        foreach ($evals as $eval) {
            if ($eval->project->email_nominee == $eval->user->email) {
                $this->info('Совпадение: ' . $eval->id);
            }
        }
    }
}
