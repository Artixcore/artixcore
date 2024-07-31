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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('page')->nullable();
            $table->string('product')->nullable();
            $table->string('blog')->nullable();
            $table->string('article')->nullable();
            $table->string('case_study')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('scripts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
