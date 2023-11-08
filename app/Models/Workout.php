<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = [
        'workout_date', 'exercise_name', 'weight_lifted', 'max_percentage', 'is_successful',
    ];
}
