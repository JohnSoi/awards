<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use App\Models\RecoveryEvaluation;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class EvalsIgnore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:ignore';

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
        $RecoveryEvaluation = RecoveryEvaluation::all();

        $ids = Arr::pluck($RecoveryEvaluation, 'id');

        Evaluation::whereIn('id', $ids)->update([
            'ignore' => 1
        ]);

        $this->info('Готово');
    }
}
