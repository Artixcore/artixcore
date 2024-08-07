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
        Schema::create('sub__sub_menus', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('submenu_id');
            $table->string('subsubmenu');
            $table->string('subsubmenu_link');
            $table->string('subsubmenu_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub__sub_menus');
    }
};
