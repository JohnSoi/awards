<?php

namespace App\Console\Commands;

use App\Imports\ProjectImport;
use Illuminate\Console\Command;
use Excel;

class ProjectsExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects_excel';

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
        $Import = new ProjectImport;

        $file = public_path() . '/projects.xlsx';

        Excel::import($Import, $file);

        $this->info('Готово');
    }
}
