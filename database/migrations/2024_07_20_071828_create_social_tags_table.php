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
        Schema::create('social_tags', function (Blueprint $table) {
            $table->id();
            $table->string('social_name');
            $table->string('social_icon');
            $table->string('user_id');
            $table->string('social_image');
            $table->string('social_script');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_tags');
    }
};
