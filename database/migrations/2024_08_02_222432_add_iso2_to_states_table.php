<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('states', function (Blueprint $table) {
            $table->string('iso2')->after('name'); // Add this line to add the iso2 column
        });
    }

    public function down()
    {
        Schema::table('states', function (Blueprint $table) {
            $table->dropColumn('iso2');
        });
    }

};
