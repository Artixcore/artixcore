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
        Schema::create('descs', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('blog_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('case_study_id')->nullable();
            $table->string('article_id')->nullable();
            $table->string('services_id')->nullable();
            $table->string('company_id')->nullable();
            $table->string('industry_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('our_company_id')->nullable();
            $table->string('part')->nullable();
            $table->string('desc')->nullable();
            $table->string('referance')->nullable();
            $table->string('referance_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descs');
    }
};
