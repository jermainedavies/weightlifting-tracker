<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetsTable extends Migration
{
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('workout_id');
            $table->uuid('exercise_id');
            $table->boolean('is_successful');
            $table->integer('reps');
            $table->integer('max_percentage');
            $table->integer('weight');
            $table->timestamps();

            // Foreign key relationships
            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->foreign('exercise_id')->references('id')->on('exercises');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sets');
    }
}