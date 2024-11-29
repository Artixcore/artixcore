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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('user_id');
            $table->string('company_name');
            $table->string('company_website')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_tiktok')->nullable();
            $table->string('company_pinterest')->nullable();
            $table->string('company_snapchat')->nullable();
            $table->string('company_whatsapp')->nullable();
            $table->string('company_telegram')->nullable();
            // $table->string('company_linkedin')->nullable();
            $table->string('client_id_from_company')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_state')->nullable();
            $table->string('company_amount_of_employees')->nullable();
            $table->string('company_country')->nullable();
            $table->string('company_code')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_short_desc')->nullable();
            $table->string('company_geoip')->nullable();
            $table->string('company_founder')->nullable();
            $table->string('company_founed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
