<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;

class Projects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects:test';

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
        $arr = [];

        $projects = Project::where([
            ['is_accept', 1],
            ['deleted_at', null]
        ])->get();

        if ($projects) {
            foreach ($projects as $project) {
                if (isset($arr[$project->name_nominate])) {
                    $arr[$project->name_nominate]++;
                } else {
                    $arr[$project->name_nominate] = 1;
                }
            }
        }

        foreach ($arr as $name => $val) {
            if ($val > 1) {
                $this->info($name . ' => ' . $val);
            }
        }

        $this->info('Готово');
    }
}
