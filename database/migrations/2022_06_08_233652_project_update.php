<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('job')->nullable();
            $table->string('job_title')->nullable();
            $table->text('bio')->nullable();
            $table->text('achievements')->nullable();
            $table->text('media')->nullable();
            $table->text('awards')->nullable();
            $table->integer('status')->default(0);
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
