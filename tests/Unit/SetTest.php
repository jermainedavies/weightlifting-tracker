<?php

namespace Tests\Unit;

use App\Models\Set;
use PHPUnit\Framework\TestCase;


//im not using refresh database here as I belive that would make it a functional test
class SetTest extends TestCase
{
    private $set;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->set = new Set();
        $this->set->workout_id = 1;
        $this->set->exercise_id = 1;
        $this->set->is_successful = 1;
        $this->set->reps = 1;
        $this->set->max_percentage = 1;
        $this->set->weight = 1;
    
    }
    public function testCanCreateASet()
    {
        $this->assertEquals(1, $this->set->workout_id);
        $this->assertEquals(1, $this->set->exercise_id);
        $this->assertEquals(1, $this->set->is_successful);
        $this->assertEquals(1, $this->set->reps);
        $this->assertEquals(1, $this->set->max_percentage);
        $this->assertEquals(1, $this->set->weight);
        $this->assertIsInt(1, $this->set->workout_id);
        $this->assertIsBool(1, $this->set->exercise_id);
        $this->assertIsInt(1, $this->set->is_successful);
        $this->assertIsInt(1, $this->set->reps);
        $this->assertIsInt(1, $this->set->max_percentage);
        $this->assertIsInt(1, $this->set->weight);


    }
        public function testCanUpdateASet()
        {
            $this->workout->user_id = 2;
            $this->workout->date = '2023-11-23';
    
            $this->assertEquals(2, $this->workout->user_id);
            $this->assertEquals('2023-11-23', $this->workout->date);
            $this->assertIsInt($this->workout->user_id);
            $this->assertIsString($this->workout->date);
        }
    }