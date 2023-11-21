<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\SetController;
use App\Http\Controllers\ExerciseController;
use Illuminate\Http\Request;

Route::resource('users', UserController::class);

Route::resource('workouts', WorkoutController::class);

Route::resource('sets', SetController::class);

Route::resource('exercises', ExerciseController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::post('/login', [AuthController::class, 'login']);

