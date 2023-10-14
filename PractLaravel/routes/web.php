<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
 
Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoinicio');

Route::get('/form', [diarioController::class, 'metodoFormulario'])->name('apodoformulario');

Route::get('/memories', [diarioController::class, 'metodoRecuerdos'])->name('apodorecuerdos');










//RUTAS TIPO PETICIÓN
/*Route::get('/', function () {
   return view('welcome');
});

Route::get('/form', function () {
    return view('formulario');
 });

 Route::get('/memories', function () {
    return view('recuerdos');
 });


//RUTAS TIPO VIEW

route::view('/', 'welcome')->name('apodoinicio');
route::view('/form', 'formulario')->name('apodoformulario');
route::view('/memories', 'recuerdos')->name('apodorecuerdos');*/