<?php

namespace App\Console\Commands;

use App\Models\BlockUser;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ExpertsDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'experts:delete';

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
        $users = User::where('group_id', 3)->get();

        foreach ($users as $user) {
            $isBlock = BlockUser::where('user_id', $user->id)->count();

            if ($isBlock) {
                $user->email = 'block_' . Str::random(10) . '@rc-awards.ru';
                $user->group_id = 1;
                $user->save();
            } else {
                $user->delete();
            }
        }

        $this->info('Готово');
    }
}
