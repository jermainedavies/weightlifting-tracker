<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Set;

class SetController extends Controller
{
    public function index()
    {
        $sets = Set::all();
        return response()->json($sets);
    }

    public function store(Request $request)
    {
        $set = Set::create($request->all());
        return response()->json($set, 201);
    }

    public function show(Set $set)
    {
        return response()->json($set);
    }

    public function update(Request $request, Set $set)
    {
        $set->update($request->all());
        return response()->json($set);
    }

    public function destroy(Set $set)
    {
        $set->delete();
        return response()->json(null, 204);
    }
}