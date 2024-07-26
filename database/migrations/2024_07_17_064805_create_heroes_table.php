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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('user_id');
            $table->string('title');
            $table->string('short_desc');
            $table->string('video_image');
            $table->string('keywords');
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->string('1stword');
            $table->string('2ndword');
            $table->string('3rdword');
            $table->string('status');
            $table->string('video_or_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
