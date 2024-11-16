<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Http\Requests\StoreComponentRequest;
use App\Http\Requests\UpdateComponentRequest;
use App\Models\Machine;
use Illuminate\Http\Request;


class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $components = Component::all();
        return inertia('Components/Index', compact('components'));
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
    public function store(Request $request, Component $machine)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        $component = $machine->components()->create($request->only('name', 'description', 'quantity'));

        return response()->json($component, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(Machine $machine, Component $component)
    {
        return response()->json($component);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Component $component)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine, Component $component)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        $component->update($request->only('name', 'description', 'quantity'));

        return response()->json($component);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine, Component $component)
    {
        $component->delete();

        return response()->json(null, 204);
    }
}
