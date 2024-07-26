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
        Schema::create('case__studies', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('title');
            $table->string('author');
            $table->string('subject');
            $table->string('primary_image');
            $table->string('primary_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case__studies');
    }
};
