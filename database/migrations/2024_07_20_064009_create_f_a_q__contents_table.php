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
        Schema::create('f_a_q__contents', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('faq_number')->nullable();
            $table->string('project_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('question');
            $table->string('answer');
            $table->string('answer_image')->nullable();
            $table->string('answer_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_a_q__contents');
    }
};
