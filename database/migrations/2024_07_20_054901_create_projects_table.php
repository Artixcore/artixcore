<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('user_id');
            $table->string('project_name');
            $table->string('project_type');
            $table->string('project_admin_id');
            $table->string('project_other_users_id');
            $table->string('project_start');
            $table->string('project_end');
            $table->string('project_client_id');
            $table->string('project_running')->nullable();
            $table->string('project_image');
            $table->string('project_short_desc');
            $table->string('project_desc');
            $table->string('project_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
