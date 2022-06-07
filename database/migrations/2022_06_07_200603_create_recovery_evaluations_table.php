<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecoveryEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recovery_evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('is_expert')->nullable()->default(null);
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('completed')->default(0);
            $table->text('comment');
            $table->integer('total')->nullable()->default(null);
            $table->json('criterions')->default(null);
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
        Schema::dropIfExists('recovery_evaluations');
    }
}
