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
        Schema::create('artixcore_videos', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('video_from');
            $table->string('video_title');
            $table->string('user_id')->nullable();
            $table->string('video_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artixcore_videos');
    }
};
