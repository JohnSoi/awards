<?php

namespace App\Console\Commands;

use App\Models\Evaluation;
use Illuminate\Console\Command;

class EvalsMove extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evals:move';

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
        $dels = [
            244 => [
                0 => 77207,
                1 => 77208,
                2 => 77209,
                3 => 77210,
                4 => 77211,
                5 => 77212,
                6 => 77213,
                7 => 77214,
                8 => 77215,
                9 => 77216,
                10 => 77217,
                11 => 77218,
                12 => 77219,
                13 => 77220,
                14 => 77221,
                15 => 77222,
                16 => 77223,
                17 => 77224,
                18 => 77225,
                19 => 77226,
                20 => 77227,
                21 => 77228,
            ],
            262 => [
                0 => 77617,
            ],
            272 => [
                0 => 77837,
                1 => 77838,
                2 => 77839,
                3 => 77840,
                4 => 77841,
                5 => 77842,
                6 => 77843,
                7 => 77844,
                8 => 77845,
                9 => 77846,
                10 => 77847,
                11 => 77848,
                12 => 77849,
                13 => 77852,
            ],
            273 => [
                0 => 77859,
                1 => 77860,
                2 => 77861,
                3 => 77862,
                4 => 77863,
                5 => 77864,
                6 => 77865,
                7 => 77866,
                8 => 77867,
                9 => 77870,
            ],
            274 => [
                0 => 77881,
                1 => 77882,
                2 => 77883,
                3 => 77884,
                4 => 77885,
                5 => 77886,
                6 => 77888,
            ],
            299 => [
                0 => 78431,
                1 => 78432,
            ],
            300 => [
                0 => 78453,
                1 => 78455,
                2 => 78458,
            ],
            249 => [
                0 => 77328,
                1 => 77330,
                2 => 77331,
                3 => 77332,
                4 => 77335,
                5 => 77336,
                6 => 77338,
                7 => 77339,
                8 => 77340,
                9 => 77341,
                10 => 77342,
                11 => 77343,
            ]
        ];

        // Изъятие
        foreach ($dels as $user_id => $ids) {
            Evaluation::where([
                ['user_id', $user_id],
                ['completed', 0]
            ])->limit(count($ids))->delete();
        }

        $this->info('ок');
    }
}
