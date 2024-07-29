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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('title');
            $table->string('article_type'); // service, hero, etc
            $table->string('primary_image');
            $table->string('author_id');
            $table->string('article_image')->nullable();
            $table->string('article_video')->nullable();
            $table->string('article_url')->nullable();
            $table->string('subject');
            $table->string('short_desc');
            $table->string('page_article');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
