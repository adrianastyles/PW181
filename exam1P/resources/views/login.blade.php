
    @extends('layouts.plantilla')

    @section('titulo', 'Login')

    @section('Contenido')

    <h1 class="display-1 text-center text-danger">Login</h1>

    <label for="u">Usuario:</label>
    <input type="text" class="form-control" id="u" placeholder="Ingresa tu usuario">


    <label for="c" class="form-label">Contraseña:</label>
    <input type="text" id="c" class="form-control" placeholder="Ingresa tu contraseña">

    <button class="btn btn-primary" >Ingresar</button>

    @endsection