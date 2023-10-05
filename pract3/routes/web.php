<?php

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

//RUTAS TIPO PETICIÓN
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