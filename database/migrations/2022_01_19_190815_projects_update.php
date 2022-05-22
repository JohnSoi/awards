<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectsUpdate extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->json('shortlist_texts')->nullable();
            $table->string('shortlist_image')->nullable();
            $table->text('shortlist_video')->nullable();
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['shortlist_texts', 'shortlist_image', 'shortlist_video']);
        });
    }
}
