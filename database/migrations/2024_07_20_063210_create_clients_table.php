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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('client_number');
            $table->string('client_name');
            $table->string('article_number')->nullable();
            $table->string('client_designation');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('client_company');
            $table->string('client_city');
            $table->string('client_state');
            $table->string('client_country');
            $table->string('client_geoip');
            $table->string('client_accuire_from');
            $table->string('client_image');
            $table->string('client_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
