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
        Schema::create('artixcore_photos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('number');
            $table->string('image_for');
            $table->string('image_from');
            $table->string('image_title');
            $table->string('image_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artixcore_photos');
    }
};
