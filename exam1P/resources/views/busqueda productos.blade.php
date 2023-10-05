
@extends('layouts.plantilla')

@section('titulo', 'Búsqueda')

@section('Contenido')

<h1 class="display-1 text-center text-danger">Búsqueda de productos</h1>

<label for="usuario">Busca un producto por nombre:</label>
<input type="text" class="form-control" id="n" placeholder="Ingresa el nombre">

<button class="btn btn-primary">Buscar</button>

@include('partials.card')

@endsection