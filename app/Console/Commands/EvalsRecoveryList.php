<?php

namespace App\Console\Commands;

use App\Models\RecoveryEvaluation;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class EvalsRecoveryList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:recovery_list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Список id удаленных оценок';

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

        $ids = Arr::pluck($evals, 'id');

        dd($ids);
    }
}
