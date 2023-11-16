<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return response()->json($exercises);
    }

    public function store(Request $request)
    {
        $exercise = Exercise::create($request->all());
        return response()->json($exercise, 201);
    }

    public function show(Exercise $exercise)
    {
        return response()->json($exercise);
    }

    public function update(Request $request, Exercise $exercise)
    {
        $exercise->update($request->all());
        return response()->json($exercise);
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return response()->json(null, 204);
    }
}