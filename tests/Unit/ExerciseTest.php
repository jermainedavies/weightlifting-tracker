<?php

namespace Tests\Unit;

use App\Models\Workout;
use PHPUnit\Framework\TestCase;


//im not using refresh database here as I belive that would make it a functional test
class ExerciseTest extends TestCase
{
    public function testCanCreateAWorkout()
    {
        $workout = new Workout();
        $workout->user_id = 1;
        $workout->date = '2023-11-22';

        $this->assertEquals(1, $workout->user_id);
        $this->assertEquals('2023-11-22', $workout->date);
    }

    public function testCanUpdateAWorkout()
    {
        $workout = new Workout();
        $workout->user_id = 2;
        $workout->date = '2023-11-23';

        $this->assertEquals(2, $workout->user_id);
        $this->assertEquals('2023-11-23', $workout->date);
    }
}