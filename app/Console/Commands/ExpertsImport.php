<?php

namespace App\Console\Commands;

use App\Imports\ExpertsImport as ImportsExpertsImport;
use Illuminate\Console\Command;
use Excel;

class ExpertsImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'experts:import';

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
        $Import = new ImportsExpertsImport();

        $Import->onlySheets('Подтвержденные эксперты');

        Excel::import($Import, public_path() . '/users.xlsx');

        $this->info('Готово');
    }
}
