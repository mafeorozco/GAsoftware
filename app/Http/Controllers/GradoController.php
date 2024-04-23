<?php

namespace App\Http\Controllers;

use App\Models\grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grado = grado::all();
        return view('admin.grados.grados', compact('grado'));
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
        grado::create($request->all());
        return redirect()->route('grado.index')->with('success', 'grado creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(grado $grado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $grado = grado::find($id);
        return view('admin.grados.edit', compact('grado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $grado = grado::find($id);
        $grado->name = $request->input('name');
        // Actualiza más campos si es necesario
        $grado->save();

        return redirect()->route('grado.index')->with('success', 'El grado se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grado $grado)
    {
        $grado->delete();

        return redirect()->route('grado.index')->with('error', 'Grado eliminado correctamente.');
    }
}
