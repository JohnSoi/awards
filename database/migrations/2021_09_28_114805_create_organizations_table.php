<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('organization')->nullable();
            $table->string('inn')->nullable();
            $table->string('kpp')->nullable();
            $table->string('director')->nullable();
            $table->string('name_nominate')->nullable();
            $table->text('deposit')->nullable();
            $table->text('unique')->nullable();
            $table->text('why_worthy')->nullable();
            $table->string('geography')->nullable();
            $table->string('phone_nominee')->nullable();
            $table->string('email_nominee')->nullable();
            $table->string('phone_nominate')->nullable();
            $table->string('email_nominate')->nullable();
            $table->foreignId('industry_id')->nullable();
            $table->foreignId('nomination_id')->nullable();
            $table->string('presentation')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('organizations');
    }
}
