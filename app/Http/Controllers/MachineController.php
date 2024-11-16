<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Http\Requests\StoreMachineRequest;
use App\Http\Requests\UpdateMachineRequest;
use Inertia\Inertia;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machines = Machine::all();
        return inertia('Machines/Index', compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Machines/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMachineRequest $request)
    {
        Machine::create($request->validated());
        return redirect()->route('machines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMachineRequest $request, Machine $machine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        $machine->delete();
        return redirect()->route('machines.index');
    }
}
