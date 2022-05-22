<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use Illuminate\Console\Command;

class EvalTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'EvalTest';

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
        $Evaluations = Evaluation::with('project', 'user')->get();

        $map = [];

        foreach ($Evaluations as $Evaluation) {
            if (!isset($map[$Evaluation->user->id . '_' . $Evaluation->user->name])) {
                $map[$Evaluation->user->id . '_' . $Evaluation->user->name] = [];
            }

            $map[$Evaluation->user->id . '_' . $Evaluation->user->name][] = $Evaluation->project->name_nominate;
        }

        dd($map);
    }
}
