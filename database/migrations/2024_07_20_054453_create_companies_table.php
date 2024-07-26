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
            $table->string('client_id_from_company');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_amount_of_employees');
            $table->string('company_country');
            $table->string('company_code');
            $table->string('company_logo');
            $table->string('company_short_desc');
            $table->string('company_geoip');
            $table->string('company_founder');
            $table->string('company_founed');
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
