<?php

namespace App\Http\Controllers;

use App\Models\Detection;
use App\Http\Requests\StoreDetectionRequest;
use App\Http\Requests\UpdateDetectionRequest;

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
    public function store(StoreDetectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Detection $detection)
    {
        //
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
    public function update(UpdateDetectionRequest $request, Detection $detection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detection $detection)
    {
        //
    }
}
