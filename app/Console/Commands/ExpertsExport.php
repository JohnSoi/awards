<?php

namespace App\Console\Commands;

use App\Exports\ExpertsExport as ExportsExpertsExport;
use App\Models\User;
use Illuminate\Console\Command;
use Excel;

class ExpertsExport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'experts:export';

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

        Excel::store(new ExportsExpertsExport($users), 'exports.xlsx', 'private');

        $this->info('Готово');
    }
}
