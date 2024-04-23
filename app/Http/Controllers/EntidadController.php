<?php

namespace App\Http\Controllers;

use App\Models\entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entidades = entidad::all();
        return view('admin.entidad.entidades', compact('entidades'));
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
        entidad::create($request->all());
        return redirect()->route('entidad.index')->with('success', 'Entidad creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(entidad $entidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entidad = Entidad::find($id);
        return view('admin.entidad.edit', compact('entidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $entidad = Entidad::find($id);
        $entidad->name = $request->input('name');
        // Actualiza más campos si es necesario
        $entidad->save();

        return redirect()->route('entidad.index')->with('success', 'La entidad se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entidad $entidad)
    {
        $entidad->delete();

        return redirect()->route('entidad.index')->with('error', 'Entidad eliminada correctamente.');
    }
}
