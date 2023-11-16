<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutsTable extends Migration
{
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->date('date');
            $table->timestamps();

            // Foreign key relationship
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('workouts');
    }
}