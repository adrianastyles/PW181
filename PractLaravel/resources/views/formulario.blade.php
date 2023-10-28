
@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('Contenido')

    <h1 class="display-1 text-center text-info">Form</h1>

    <div class = "container at-5 col-md-6">

        @if(session()->has('Confirmacion'))

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong> {{session('Confirmacion')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif


       {{--  @if($errors->any())
        @foreach ($errors->all() as $error)

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endforeach
        @endif --}}
        
        <div class="card">
            <div class="card-header text-center text-primary">
            Introduce aquí tus memorias...
            </div>


            <div class="card-body">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Titulo:</label>
                      <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
                      <p class = "text-danger fw-bold">{{$errors->first('txtTitulo')}}</p>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label>
                        <input type="text" name="txtRecuerdo" class="form-control" value="{{old('txtRecuerdo')}}">
                        <p class = "text-danger fw-bold">{{$errors->first('txtRecuerdo')}}</p>
                    </div>
            </div>


            <div class="card-footer text-muted">
                <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-info">Guardar</button>
                </div>
                </form>
            </div>
        </div>

    </div>

@endsection