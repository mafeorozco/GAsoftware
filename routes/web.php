<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\MallaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\AreaController;
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
});


