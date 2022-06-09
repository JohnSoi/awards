<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('is_organization')->nullable()->default(null);
            $table->integer('is_import')->nullable()->default(null);
            $table->integer('is_accept')->nullable()->default(null);
            $table->integer('is_form2')->nullable()->default(null);
            $table->integer('is_top')->nullable()->default(null);
            $table->integer('period_id')->default(1);
            $table->string('social_url')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('inn')->nullable()->default(null);
            $table->string('kpp')->nullable()->default(null);
            $table->string('director')->nullable()->default(null);
            $table->string('name_nominate')->nullable()->default(null);
            $table->text('deposit')->nullable()->default(null);
            $table->text('unique')->nullable()->default(null);
            $table->text('why_worthy')->nullable()->default(null);
            $table->string('geography')->nullable()->default(null);
            $table->string('phone_nominee')->nullable()->default(null);
            $table->string('email_nominee')->nullable()->default(null);
            $table->string('phone_nominate')->nullable()->default(null);
            $table->string('email_nominate')->nullable()->default(null);
            $table->bigInteger('industry_id')->nullable()->default(null);
            $table->bigInteger('nomination_id')->nullable()->default(null);
            $table->string('presentation')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
