<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\plant;
use Illuminate\Http\Request;

class plantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.plant.add');
         $plants = Plant::all();
         return response()->json($plants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=category::all();
        return view('admin.plant.add',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plant=new plant();
        //        dd($request);$request
        $plant->name=$request->name;
        $plant->care_details=$request->care_details;
        $plant->season=$request->season;
        $plant->medical_benefit=$request->medical_benefit;
        $plant->short_description=$request->short_description;
        $plant->last_update=$request->last_update;
        $plant->category_id=$request->category_id;
    
        // $plant_image = $request->file('post_image');
        //         $file_name = $post->title.time().'.'.$plant_image->extension();
        //         $plant_image->move('plant_Image' ,$file_name);
               
                $plant->save();
                return redirect()->route('plant.index');
    }

    /**
     * Display the specified resource.
     */
   


    public function show($id)
    {
        $plant = Plant::find($id);

        if (!$plant) {
            return response()->json(['message' => 'Plant not found'], 404);
        }

        return response()->json($plant);
    }

    public function getByCategoryId($categoryId)
    {
        $plants = Plant::where('cat_id', $categoryId)->get();

        if ($plants->isEmpty()) {
            return response()->json(['message' => 'No plants found for the given category ID'], 404);
        }

        return response()->json($plants);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plant $plant)
    {
        $plant->delete();
        return redirect()->route('plant.index');
    }
}
