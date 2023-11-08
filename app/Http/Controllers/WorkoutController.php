<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::all();
        return response()->json(['workouts' => $workouts], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'workout_date' => 'required|date',
            'exercise_name' => 'required|string',
            'weight_lifted' => 'required|integer',
            'max_percentage' => 'required|integer',
            'is_successful' => 'required|boolean',
        ]);

        $workout = Workout::create($request->all());

        return response()->json(['workout' => $workout], 201);
    }

    public function show($id)
    {
        $workout = Workout::find($id);

        if (!$workout) {
            return response()->json(['message' => 'Workout not found'], 404);
        }

        return response()->json(['workout' => $workout], 200);
    }

    public function update(Request $request, $id)
    {
        $workout = Workout::find($id);

        if (!$workout) {
            return response()->json(['message' => 'Workout not found'], 404);
        }

        $request->validate([
            'workout_date' => 'required|date',
            'exercise_name' => 'required|string',
            'weight_lifted' => 'required|integer',
            'max_percentage' => 'required|integer',
            'is_successful' => 'required|boolean',
        ]);

        $workout->update($request->all());

        return response()->json(['message' => 'Workout updated successfully'], 200);
    }

    public function destroy($id)
    {
        $workout = Workout::find($id);

        if (!$workout) {
            return response()->json(['message' => 'Workout not found'], 404);
        }

        $workout->delete();

        return response()->json(['message' => 'Workout deleted successfully'], 200);
    }
}
