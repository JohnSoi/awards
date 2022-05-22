<?php

namespace App\Console\Commands;

use App\Imports\ProjectImportSheets;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ProjectsImport extends Command
{

    protected $signature = 'projects:import';

    protected $description = 'Импорт проектов из excel в таблицу projects';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $Import = new ProjectImportSheets();

        $Import->onlySheets(['Подача на сайтФИН', 'Проектный отдел', 'Владислав', 'На сайт остались 12_11']);

        Excel::import($Import, public_path() . '/projects.xlsx');

        $this->info('Готово');
    }
}
