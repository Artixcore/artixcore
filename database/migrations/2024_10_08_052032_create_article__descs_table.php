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
        Schema::create('article__descs', function (Blueprint $table) {
            $table->id();
            $table->string('article_id');
            $table->string('article_image')->nullable();
            $table->string('article_video')->nullable();
            $table->string('article_file')->nullable();
            $table->string('article_desc')->nullable();
            $table->string('article_referance')->nullable();
            $table->string('article_referance_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article__descs');
    }
};
