<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserData extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo')->nullable();
            $table->text('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('contacts')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['position', 'phone', 'contacts']);
        });
    }
}
