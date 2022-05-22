<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectWinner extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->integer('is_winner')->nullable();
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['is_winner']);
        });
    }
}
