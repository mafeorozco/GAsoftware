<?php

namespace App\Http\Controllers\Malla;

use App\Http\Controllers\Controller;
use App\Models\malla;
use App\Models\unididactica;
use App\Models\componentes;
use App\Models\competencia;
use App\Models\estandar;
use App\Models\desempeño;
use App\Models\indicadorDesempeño;
use Illuminate\Http\Request;

class IndicadorDesempeñoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        indicadorDesempeño::create($request->all());
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
