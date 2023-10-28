<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;

class diarioController extends Controller
{
    public function metodoInicio() {
        return view('welcome');
    }

    public function metodoFormulario() {
        return view('formulario');
    }

    public function metodoRecuerdos() {
        return view('recuerdos');
    }

    public function guardarRecuerdo(validadorFormRecuerdos $req){
        
       /*  $validated = $req->validate([
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:4',
        ]); */

        // with: dos parametros, llave o identificador y mensaje

        return redirect('/form')->with('Confirmacion', 'Tu recuerdo llegó al controlador');

        /* #MUESTRAME LA IP QUE UTILIZA ESA RUTA
        echo "<p>";
        echo $req->ip();
        echo " - "; 
        echo $req->path();
        echo " - "; 
        echo $req->method();
        echo " - "; 
        echo $req->input('txtTitulo');
        echo "</p>"; */

    }
}
