<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\MallaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\Malla\UniDidacticaController;
use App\Http\Controllers\Malla\ComponenteController;
use App\Http\Controllers\Malla\EstandarController;
use App\Http\Controllers\Malla\CompetenciaController;
use App\Http\Controllers\Malla\DesempeñoController;
use App\Http\Controllers\Malla\IndicadorDesempeñoController;
use App\Models\entidad;
use App\Models\malla;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('entidad', EntidadController::class);
    Route::resource('malla', MallaController::class);
    Route::resource('grado', GradoController::class);
    Route::resource('area', AreaController::class);
    Route::resource('unidad', UniDidacticaController::class);
    Route::resource('componente', ComponenteController::class);
    Route::resource('estandar', EstandarController::class);
    Route::resource('competencia', CompetenciaController::class);
    Route::resource('desempeño', DesempeñoController::class);
    Route::resource('indicadorDesempeño', IndicadorDesempeñoController::class);
});
Route::post('/guardarComponente', [ComponenteController::class,'store'])->name('componente.stores');
Route::post('/guardarEstandar', [EstandarController::class,'store'])->name('estandar.stores');
Route::post('/guardarCompetencia', [CompetenciaController::class,'store'])->name('competencia.stores');
Route::post('/guardarDesempeño', [DesempeñoController::class,'store'])->name('desempeño.stores');
Route::post('/guardarIndicadorDesempeño', [IndicadorDesempeñoController::class,'store'])->name('indicadorDesempeño.stores');

