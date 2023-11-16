<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigIncrements('id')->change(); // Update 'id' column to auto-incrementing
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('id')->change(); // Reverse the changes made in the 'up' method
        });
    }
};