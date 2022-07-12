<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LocalizationNominations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nominations', function (Blueprint $table) {
            $table->string('name_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('title_en')->nullable();
            $table->string('about_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nominations', function (Blueprint $table) {
            //
        });
    }
}
