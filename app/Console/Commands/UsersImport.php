<?php

namespace App\Console\Commands;

use App\Imports\UserImport;
use Illuminate\Console\Command;
use Excel;

class UsersImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:import';

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
        $Import = new UserImport;

        $file = public_path() . '/users.xlsx';

        Excel::import($Import, $file);

        $this->info('Готово');
    }
}
