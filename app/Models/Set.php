<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'workout_id', 'exercise_id', 'is_successful', 'reps', 'max_percentage', 'weight'
    ];
}
