<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use App\Http\Requests\StoreDetectionRequest;
use App\Http\Requests\UpdateDetectionRequest;
use App\Models\Machine;
use Illuminate\Http\Request;

class DetectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Machine $machine)
    {
        $request->validate([
            'image_path' => 'required|string|max:255',
            'missing_items' => 'required|string',
            'detected_items' => 'required|string',
        ]);

        $detection = $machine->detections()->create($request->only('image_path', 'missing_items', 'detected_items'));

        return response()->json($detection, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine, Detection $detection)
    {
        return response()->json($detection);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detection $detection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine, Detection $detection)
    {
        $request->validate([
            'image_path' => 'required|string|max:255',
            'missing_items' => 'required|string',
            'detected_items' => 'required|string',
        ]);

        $detection->update($request->only('image_path', 'missing_items', 'detected_items'));

        return response()->json($detection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine, Detection $detection)
    {
        $detection->delete();

        return response()->json(null, 204);
    }
}
