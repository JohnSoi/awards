<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use App\Models\RecoveryEvaluation;
use Illuminate\Console\Command;

class EvalsDel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:del';

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
        $evals = Evaluation::all();

        $map = [];

        foreach ($evals as $eval) {
            if (!isset($map[$eval->project_id])) {
                $map[$eval->project_id] = 0;
            }

            $map[$eval->project_id]++;
        }

        $dels = [];

        foreach ($map as $id => $count) {
            if ($count > 3) {
                $del_count = $count - 3;

                if ($del_count) {
                    $evalsDel = Evaluation::where([
                        ['project_id', $id]
                    ])->orderBy('comment', 'asc')->limit($del_count)->get();

                    foreach ($evalsDel as $item) {
                        if (!isset($dels[$item->user_id])) {
                            $dels[$item->user_id] = [];
                        }

                        $dels[$item->user_id][] = $item->id;

                        RecoveryEvaluation::create($item->toArray());

                        Evaluation::destroy($item->id);
                    }
                }
            }
        }

        // dd($dels);

        // $evals_suc = Evaluation::all();
        // dd(Arr::pluck($evals_suc, 'id'));

        $this->info('Готово');
    }
}
