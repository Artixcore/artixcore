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
        Schema::create('referances', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('blog_id')->nullable();
            $table->string('article_id')->nullable();
            $table->string('case_study_id')->nullable();
            $table->string('service_id')->nullable();
            $table->string('referance')->nullable();
            $table->string('from')->nullable();
            $table->string('referance_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referances');
    }
};
