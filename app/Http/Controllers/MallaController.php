<?php

namespace App\Http\Controllers;

use App\Models\malla;
use App\Models\grado;
use App\Models\unididactica;
use App\Models\area;
use App\Models\componentes;
use Illuminate\Http\Request;

class MallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grado = grado::all();
        $area = area::all();
        return view('admin.malla.unididactica', compact('grado', 'area'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unididactica = unididactica::all()->last();
        $id=$unididactica->id;
        return view('admin.malla.componente', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        unididactica::create($request->all());
        return redirect()->route('malla.create')->with('success', 'Entidad creada correctamente.');
        
        // dd($request->all);
    }

    public function storeComponents(Request $request)
    {
        componentes::create($request->all());     
    }

    /**
     * Display the specified resource.
     */
    public function show(malla $malla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(malla $malla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, malla $malla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(malla $malla)
    {
        //
    }
}
