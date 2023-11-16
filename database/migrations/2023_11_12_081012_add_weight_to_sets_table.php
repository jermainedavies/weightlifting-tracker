<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sets', function (Blueprint $table) {
            $table->decimal('weight', 8, 2);
        });
    }

    public function down()
    {
        Schema::table('sets', function (Blueprint $table) {
            $table->dropColumn('weight');
        });
    }
};
