<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
 

//Rutas individuales

Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoinicio');

Route::get('/form', [diarioController::class, 'metodoFormulario'])->name('apodoformulario');

Route::get('/memories', [diarioController::class, 'metodoRecuerdos'])->name('apodorecuerdos');


Route::post('/guardarRecuerdo', [diarioController::class, 'guardarRecuerdo'])->name('guardar');











//Agrupación por controladores
/*Route::controller(diarioController::class)->group(function(){
   Route::get('/', 'metodoInicio')->name('apodoinicio');
   Route::get('/form', 'metodoFormulario')->name('apodoformulario');
   Route::get('/memories', 'metodoRecuerdos')->name('apodorecuerdos');
});
*/










/*
RUTAS TIPO PETICIÓN
Route::get('/', function () {
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
route::view('/memories', 'recuerdos')->name('apodorecuerdos');
*/