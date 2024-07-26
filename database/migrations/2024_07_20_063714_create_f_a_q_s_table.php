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
        Schema::create('f_a_q_s', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('user_id');
            $table->string('page')->nullable();
            $table->string('project_id')->nullable();
            $table->string('product_id')->nullable();
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
        Schema::dropIfExists('f_a_q_s');
    }
};
