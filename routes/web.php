<?php

use App\Http\Controllers\controladorEjercicio1;
use App\Http\Controllers\controladorEjercicio2;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ej1', [controladorEjercicio1::class, 'ej1Parametro']);

Route::get('/ej12/{ej12}', [controladorEjercicio1::class, 'ej1Parametro2']);

Route::get('/ej123/{ej123}',[controladorEjercicio1::class, 'ej1Parametro3']);

// Route::get('/ej2/{uno}/{dos}/{tres}/{cuatro}', [controladorEjercicio2::class, 'ej2tres']);