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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('number');
            $table->string('page_name')->nullable();
            $table->string('project_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('social_name');
            $table->string('social_icon');
            $table->string('social_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
