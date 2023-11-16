<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;
use App\Http\Requests\StoreWorkoutRequest;

class WorkoutController extends Controller
{
    public function index()
    {
        return Workout::all();
    }

    public function store(StoreWorkoutRequest $request)
    {
        return Workout::create($request->all());
    }

    public function show(Workout $workout)
    {
        return response()->json($workout);
    }

    public function update(Request $request, Workout $workout)
    {
        $workout->update($request->all());
        return response()->json($workout);
    }

    public function destroy(Workout $workout)
    {
        $workout->delete();
        return response()->json(null, 204);
    }
}