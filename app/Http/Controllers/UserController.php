<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create($validatedData);
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:users,email,' . $user->id,
            // Add other validation rules as needed
        ]);

        $user->update($validatedData);
        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }

    /**
     * Quick and dirty way to bounce the user over to our frontend project. This is not
     * the right way of solving this problem completely properly!
     */
    public function redirectToFrontend()
    {
        // Delete the users existing tokens
        Auth::user()->tokens()->delete();

        // And create a new API token. This is used in the HTTP Authorization header:
        // Authorization: Bearer {token here}
        $token = Auth::user()->createToken('api')->plainTextToken;
        return redirect(config('app.frontend_url') . "/auth/$token");
    }
}
