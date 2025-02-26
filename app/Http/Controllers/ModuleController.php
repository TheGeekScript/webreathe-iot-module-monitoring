<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);
    
        Module::create([
            'name' => $request->name,
            'type' => $request->type,
            'status' => 'active',
        ]);
    
        return redirect()->route('modules.index')->with('success', 'Module registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $module = Module::findOrFail($id);
        $moduleData = $module->data()->orderBy('created_at')->get();
    
        // Simulate additional data
        $temperatureData = $moduleData->map(function ($item) {
            return rand(20, 40);
        });
    
        $speedData = $moduleData->map(function ($item) {
            return rand(0, 100);
        });
    
        return view('modules.show', compact('module', 'moduleData', 'temperatureData', 'speedData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
