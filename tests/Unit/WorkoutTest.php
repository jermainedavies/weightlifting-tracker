<?php

namespace Tests\Unit;

use App\Models\Workout;
use PHPUnit\Framework\TestCase;

class WorkoutTest extends TestCase
{
    private $workout;

    public function setUp(): void
    {
        parent::setUp();
        $this->workout = new Workout();
        $this->workout->user_id = 1;
        $this->workout->date = '2023-11-22';
    }

    public function testCanCreateAWorkout()
    {
        $this->assertEquals(1, $this->workout->user_id);
        $this->assertEquals('2023-11-22', $this->workout->date);
        $this->assertIsInt($this->workout->user_id);
        $this->assertIsString($this->workout->date);
    }

    public function testCanUpdateAWorkout()
    {
        $this->workout->user_id = 2;
        $this->workout->date = '2023-11-23';

        $this->assertEquals(2, $this->workout->user_id);
        $this->assertEquals('2023-11-23', $this->workout->date);
        $this->assertIsInt($this->workout->user_id);
        $this->assertIsString($this->workout->date);
    }
}