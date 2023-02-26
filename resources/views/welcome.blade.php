@extends('layouts.landing')

@section('content')
<section class="container-fluid primarysection">
    <div class="row">
        <div class="col-6 mt-5" id="seccionquees">
            <h2 class="titulos mt-5 ps-5"> ¿Qué es <br> Misión Sabor?</h2> 
            <p class="px-5 pt-5 parrafo">
            Es una plataforma de clases de cocina virtuales que se emitirán tres veces por semana, dos clases por día, del 10 de noviembre al 8 de diciembre de 2021 y contará con los chefs nacionales e internacionales de los mejores restaurantes del mundo. Además, nos permitirá recaudar fondos para los proyectos de ayuda a familias que viven en estado de extrema pobreza en la Sierra del Perú.
            </p>
             <a class="btn btn-primary btn-lg ms-5 botonprincipal" href="">Descubre Más</a>
        </div>
        <div class="col-6">
            <figure>
                <img class="img-fluid" id="imagechefs" src="\img\chefs-landing.jpg" alt="">
            </figure>
        </div>
    </div>
</section>

<section class="container mt-5 mb-5">
    <div class="row justify-content-center">
            <div class="col-md-4 align-self-center">
                <div class="d-grid gap-2">
                    <a href="{{route('home')}}" class="btn btn-primary btn-lg align-self-center"> COMPRAR ENTRADAS </a>
                </div>
            </div>

    </div>
</section>
@endsection