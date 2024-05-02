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

    public function createEstandar()
    {        
        $componentes=componentes::where('unididactica_id',9)->get();
        return view('admin.malla.estandar', compact('componentes'));
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
        $component= new componentes();
        $component->redirect=$request->redirect;
        if($component->redirect==true){
            return redirect()->route('malla.createEstandar')->with('success', 'Componentes creados correctamente.');              
        }else{
            componentes::create($request->all());
        }       
        // dd($name,$unididacticaId);
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
