<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NominationUpdate extends Migration
{
    public function up()
    {
        Schema::table('nominations', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->text('about')->nullable();
        });
    }

    public function down()
    {
        Schema::table('nominations', function (Blueprint $table) {
            $table->dropColumn(['title', 'about']);
        });
    }
}
