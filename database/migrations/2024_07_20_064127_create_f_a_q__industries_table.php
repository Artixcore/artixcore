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
        Schema::create('f_a_q__industries', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('number');
            $table->string('industry_name');
            $table->string('industry_type');
            $table->string('industry_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_a_q__industries');
    }
};
