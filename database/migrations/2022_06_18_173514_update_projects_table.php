<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'region_id',
                'organization_name',
                'project_name',
                'project_description',
                'media_doc',
                'name_organizer',
                'organization_site',
                'video_nominate',
                'photo_director',
                'presentation_file'
            ]);
        });
    }
}
