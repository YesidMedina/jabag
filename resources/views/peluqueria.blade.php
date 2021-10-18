@extends('layouts.template')


@section('content')

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/negro.jpg">
    <form action="{{route('peluqueria')}}" method="get" class="d-flex tm-search-form">
        <input type="text" class="form-control" name="texto" value="">
        <input type="submit" class="btn btn-primary" value="Buscar">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>
<div class="container-fluid tm-container-content tm-mt-60">
    <div class="mb-4 text-center">
        <h2 class="tm-text-primary">
            Catálogo peluquería
        </h2>
        <div>
            <form action="" class="tm-text-primary">

            </form>
            <br>
        </div>
    </div>




    <div class="row d-flex justify-content-center">
        @foreach ($peluqueria as $peluquerium)

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 " style=" width: auto;">
            <figure class="effect-ming tm-video-item">
                <img src="/public/img/{{$peluquerium->imagen }}" alt="Image" class="img-fluid d-flex justify-content-center">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Details</h2>
                    <a href="photo-detail.html">Ver mas</a>
                </figcaption>
            </figure>

            <div class="display-6" style="border-bottom: solid 1px #1A1919;">

                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light px-1 text-dark ">{{ $peluquerium->nombreProducto }}</span>

                </div>
                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light px-1 text-dark">Codigo: {{ $peluquerium->codigo }}</span>
                </div>

                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light px-1 text-dark">Precio: {{ $peluquerium->precio }}</span>
                </div>

            </div><br><br><br>

        </div>

        @endforeach
    </div>

    <div class="tm-paging d-flex">
        <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col " >
         <a class=" tm-btn-prev mb-2 disabled"></a>


      <nav aria-label="">
      <ul class="pagination" value="{{$peluqueria}}"></ul>
      </nav>

    </div>



    @endsection
