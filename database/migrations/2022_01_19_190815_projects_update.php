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
            $table->text('bio')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job')->nullable();
            $table->text('achievements')->nullable();
            $table->text('media')->nullable();
            $table->text('awards')->nullable();
            $table->integer('status')->default(0);
            $table->integer('user_id');
            $table->integer('region_id')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('project_name')->nullable();
            $table->text('project_description')->nullable();
            $table->text('media_doc')->nullable();
            $table->text('name_organizer')->nullable();
            $table->text('organization_site')->nullable();
            $table->text('video_nominate')->nullable();
            $table->text('photo_director')->nullable();
            $table->text('presentation_file')->nullable();

        });
    }
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['shortlist_texts', 'shortlist_image', 'shortlist_video']);
        });
    }
}
