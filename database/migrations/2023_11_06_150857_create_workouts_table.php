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
    Schema::create('workouts', function (Blueprint $table) {
        $table->id();
        // TODO? name: date
        $table->date('workout_date');
        $table->string('exercise_name');
        $table->integer('weight_lifted');
        $table->integer('max_percentage');
        $table->boolean('is_successful');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workouts');
    }
};
