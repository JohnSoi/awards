<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class PasswordsView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'passwords:view';

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
        $users = User::where('group_id', 4)->get();

        foreach ($users as $user) {
            $password = Str::random(8);

            $user->password = Hash::make($password);
            $user->password_view = $password;
            $user->save();
        }

        $this->info('ok');
    }
}
