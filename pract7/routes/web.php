<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerR;

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
//Rutas individuales

Route::get('/', [controllerR::class, 'metodoInicio'])->name('apodoinicio');

Route::get('/form', [controllerR::class, 'metodoForm'])->name('apodoformulario');

Route::post('/guardarLibro', [controllerR::class, 'guardarLibro'])->name('guardar');