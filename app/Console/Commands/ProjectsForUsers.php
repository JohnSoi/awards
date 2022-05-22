<?php

namespace App\Console\Commands;

use App\Classes\EvaluationClass;
use App\Models\EvaluationPeriod;
use App\Models\User;
use Illuminate\Console\Command;

class ProjectsForUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects_for_users';

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

        $period = EvaluationPeriod::latest()->first();

        foreach ($users as $user) {
            if ($user->group_id == 3) {
                // EvaluationClass::projectsForExpert($user, $period);
            } else if ($user->group_id == 4) {
                EvaluationClass::projectsForJury($user, $period);
            }
        }

        $this->info('Готово');
    }
}
