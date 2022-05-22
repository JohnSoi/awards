<?php

namespace App\Console\Commands;

use App\Imports\ProjectNominationImportSheets;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ProjectsNominationsImport extends Command
{

    protected $signature = 'projects_nominations:import';

    protected $description = 'Импорт номинаций из excel в таблицу projects';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $Import = new ProjectNominationImportSheets();

        $Import->onlySheets(['Подача на сайтФИН']);

        Excel::import($Import, public_path() . '/projects.xlsx');

        $this->info('Готово');
    }
}
