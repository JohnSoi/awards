<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Constants\Status;

class StatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(['id' => Status::$IN_WORK, 'name' => Status::getStatusText(Status::$IN_WORK)]);
        DB::table('status')->insert(['id' => Status::$DECLINE, 'name' => Status::getStatusText(Status::$DECLINE)]);
        DB::table('status')->insert(['id' => Status::$IN_WORK_EXPERT, 'name' => Status::getStatusText(Status::$IN_WORK_EXPERT)]);
        DB::table('status')->insert(['id' => Status::$DECLINE_IN_FINAL, 'name' => Status::getStatusText(Status::$DECLINE_IN_FINAL)]);
        DB::table('status')->insert(['id' => Status::$IN_FINAL, 'name' => Status::getStatusText(Status::$IN_FINAL)]);
    }
}
