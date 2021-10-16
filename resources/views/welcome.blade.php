@extends('layouts.template')


@section('content')


<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/negro.jpg">
    <form class="d-flex tm-search-form">
        <input class="form-control tm-search-input" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>
<div class="container-fluid tm-container-content tm-mt-60">
    <div class="mb-4 text-center">
        <h2 class="tm-text-primary">
            Catálogo de prodúctos
        </h2>
        <div>
            <form action="" class="tm-text-primary">
                Página <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> de 200
            </form>
        </div>
    </div>


</div>



<div class="row d-flex justify-content-center">
    @foreach ($productos as $producto)

    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 " style=" width: auto;">
        <figure class="effect-ming tm-video-item">
            <img src="/public/img/{{$producto->imagen }}" alt="Image" class="img-fluid d-flex justify-content-center">
            <figcaption class="d-flex align-items-center justify-content-center">
                <h2>Details</h2>
                <a href="photo-detail.html">Ver mas</a>
            </figcaption>
        </figure>

        <div>

            <div class="d-flex justify-content-center tm-text-gray" >
                <span class="tm-text-gray-light px-2 text-dark ">{{ $producto->nombreProducto }}</span>

            </div>
            <div class="d-flex justify-content-center tm-text-gray">
                <span class="tm-text-gray-light px-2 text-dark">Codigo: {{ $producto->codigo }}</span>
            </div>

            <div class="d-flex justify-content-center tm-text-gray">
                <span class="tm-text-gray-light px-2 text-dark">Precio: {{ $producto->precio }}</span>
            </div>

        </div>

    </div>

    @endforeach
</div>

@endsection