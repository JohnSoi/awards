<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class ExpertsNotLastOnline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'experts:not_online';

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
        $users = User::where([
            ['group_id', 3],
            ['last_online_at', null]
        ])->get();

        $arr = Arr::pluck($users, 'id');

        $this->info('id[]=' . implode('&id[]=', $arr));
    }
}
