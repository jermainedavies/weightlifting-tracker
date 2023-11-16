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
        Schema::table('sets', function (Blueprint $table) {
            $table->foreign('workout_id')
                ->references('id')
                ->on('workouts')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('sets', function (Blueprint $table) {
            $table->dropForeign(['workout_id']); // Drop the existing foreign key constraint if needed
            $table->foreign('workout_id')
                ->references('id')
                ->on('workouts');
        });
    }
};
