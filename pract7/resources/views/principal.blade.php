
@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('Contenido')

<h1 class="display-3 text-center text-info">Principal</h1>

<div class="container">
    <h1 class="mt-5">Noticias</h1>
    <div class="card mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Literatura y su proyección en la inteligencia artificial</h5>
                    <p class="card-text">En la literatura en línea, los algoritmos de IA se utilizan 
                        para personalizar las recomendaciones de contenido a los usuarios.
                        Esto ayuda a los lectores a descubrir nuevos libros o artículos relevantes. La IA ha 
                        mejorado significativamente la traducción automática, lo que permite a los 
                        escritores llegar a audiencias globales más fácilmente. En cuanto a la corrección de textos,
                        existen herramientas de IA, como correctores ortográficos y gramaticales, que ayudan a los
                        escritores a mejorar la calidad de sus textos. Si bien todavía es un área en desarrollo, 
                        la IA también se está utilizando para crear obras literarias y generación de contenido 
                        creativo. Estos sistemas pueden producir poemas, historias cortas e incluso libros 
                        completos. Sin embargo, la calidad y la autenticidad de estas creaciones son temas de 
                        debate.
                    </p>
                    <p class="card-text"><small class="text-muted">Fecha de Publicación: 9 de septiembre de 2023 por Antonio Rodríguez Jiménez</small></p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('imagenes/imagen.jpg') }}" style="width: 330px; height: 260px;" class="img-thumbnail">
            </div>
        </div>
    </div>
</div>


<br>

@endsection
