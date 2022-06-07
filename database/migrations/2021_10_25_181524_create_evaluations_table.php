<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('is_expert')->nullable();
            $table->integer('ignore')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('project_id');
            $table->foreignId('period_id');
            $table->foreignId('completed')->default(0);
            $table->text('comment')->nullable();
            $table->integer('total')->nullable();
            $table->json('criterions')->nullable();
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
        Schema::dropIfExists('evaluations');
    }
}
