
@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('Contenido')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<h1 class="display-3 text-center text-info">Registro</h1>

<div class = "container at-5 col-md-6">

      <script>
        @if(session()->has('confirmacion'))
        
          Swal.fire({
            icon:'success',
            title: 'El libro "{{ session('confirmacion') }}" se guardó', // Agrega el nombre del libro aquí
            showConfirmButton: false,
            timer: 1500
        })

        @php
            session()->forget('confirmacion');
        @endphp

        @endif
      </script>

<div class="container my-5 p-4" style="max-width: 700px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <form method="POST" action="/guardarLibro">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputISBN4">ISBN</label>
          <input type="text" class="form-control" name="txtISBN" placeholder="Ingresa ISBN"  value="{{old('txtISBN')}}">
          <p class = "text-danger fw-bold">{{$errors->first('txtISBN')}}</p>
        </div>
        <div class="form-group">
          <label for="inputTitulo4">Título</label>
          <input type="text" class="form-control" name="txtTitulo" placeholder="Título del libro"  value="{{old('txtTitulo')}}">
          <p class = "text-danger fw-bold">{{$errors->first('txtTitulo')}}</p>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAutor">Autor</label>
        <input type="text" class="form-control" name="txtAutor" placeholder="Autor del libro"  value="{{old('txtAutor')}}">
        <p class = "text-danger fw-bold">{{$errors->first('txtAutor')}}</p>
      </div>
      <div class="form-group col-md-4">
        <label for="inputPaginas">Páginas</label>
        <input type="text" class="form-control" name="txtPaginas" placeholder="Páginas"  value="{{old('txtPaginas')}}">
        <p class = "text-danger fw-bold">{{$errors->first('txtPaginas')}}</p>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="inputEditorial">Editorial</label>
          <input type="text" class="form-control" name="txtEditorial" placeholder="Editorial del libro"  value="{{old('txtEditorial')}}">
          <p class = "text-danger fw-bold">{{$errors->first('txtEditorial')}}</p>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="inputEmail">Email de editorial</label>
          <input type="text" class="form-control" name="txtEmail" placeholder="Email"  value="{{old('txtEmail')}}">
          <p class = "text-danger fw-bold">{{$errors->first('txtEmail')}}</p>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

</div>
  

@endsection
