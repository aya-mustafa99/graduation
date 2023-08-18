<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\plant;


class planttApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plants = Plant::all();
        return response()->json($plants);


        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plant = plant::find($id);

        if (!$plant) {
            return response()->json(['message' => 'Plant not found'], 404);
        }

        return response()->json($plant);
    }


    public function getByCategoryId($categoryId)
    {
        $plants = plant::where('cat_id', $categoryId)->get();

        if ($plants->isEmpty()) {
            return response()->json(['message' => 'No plants found for the given category ID'], 404);
        }

        return response()->json($plants);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
