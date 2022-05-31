<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Industries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('genitive_name')->nullable()->default(null);
            $table->integer('sort')->default(100);
            $table->integer('sort_cards')->default(100);
            $table->string('color')->nullable()->default(null);
            $table->text('description');
            $table->bigInteger('roscongress_id')->default(null);
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->text('svg');
            $table->integer('sort_filter')->default(100);
            $table->text('figure');
            $table->text('brief');
            $table->longText('advantages');
            $table->longText('quote');
            $table->longText('problems');
            $table->longText('number');
            $table->longText('articles');
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
