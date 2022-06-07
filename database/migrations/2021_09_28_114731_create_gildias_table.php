<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGildiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gildias', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('deposit')->nullable();
            $table->string('geography')->nullable();
            $table->string('phone_nominee')->nullable();
            $table->string('email_nominee')->nullable();
            $table->text('unique')->nullable();
            $table->string('phone_nominate')->nullable();
            $table->string('email_nominate')->nullable();
            $table->string('name_nominate')->nullable();
            $table->text('why_worthy')->nullable();
            $table->foreignId('industry_id')->nullable();
            $table->foreignId('nomination_id')->nullable();
            $table->string('presentation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gildias');
    }
}
