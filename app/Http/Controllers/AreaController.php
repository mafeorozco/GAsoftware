<?php

namespace App\Http\Controllers;

use App\Models\area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $area = area::all();
        return view('admin.area.area', compact('area'));
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        area::create($request->all());
        return redirect()->route('area.index')->with('success', 'area creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $area = area::find($id);
        return view('admin.area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $area = area::find($id);
        $area->name = $request->input('name');
        // Actualiza más campos si es necesario
        $area->save();

        return redirect()->route('area.index')->with('success', 'El area se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(area $area)
    {
        $area->delete();

        return redirect()->route('area.index')->with('error', 'area eliminada correctamente.');
    }
}
