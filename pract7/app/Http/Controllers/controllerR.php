<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibros;

class controllerR extends Controller
{
    public function metodoInicio() {
        return view('principal');
    }

    public function metodoForm() {
        return view('registro');
    }

    public function guardarLibro(validadorLibros $request){
    $nombreLibro = $request->input('txtTitulo');
    session()->flash('confirmacion', $nombreLibro);
    return redirect('/form');
}


}
