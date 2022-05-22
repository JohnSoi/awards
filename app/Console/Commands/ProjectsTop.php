<?php

namespace App\Console\Commands;

use App\Models\Nomination;
use Illuminate\Console\Command;

class ProjectsTop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects:top';

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
        $nominations = Nomination::with([
            'projects' => function ($query) {
                $query->where('is_top', 1);
            }
        ])->get();

        foreach ($nominations as $nomination) {
            $this->error($nomination->name);
            foreach ($nomination->projects as $index => $project) {
                $this->info($index + 1 . '. ' . $project->name_nominate);
            }
        }

        $this->info('Готово');
    }
}
