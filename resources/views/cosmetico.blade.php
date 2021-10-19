@extends('layouts.template')


@section('content')

<<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/negro.jpg">
    <form action="{{Route('cosmetico.store')}}" method="POST" class="d-flex tm-search-form">
        @csrf
        <input type="text" class="form-control" name="texto" >
        <input type="submit" class="btn btn-primary" value="Buscar">


    </form>
</div>
<div class="container-fluid tm-container-content tm-mt-60">
    <div class="mb-4 text-center">
        <h2 class=" tm-text-primary">
            Catálogo Cosmeticos
        </h2>
        <div>
            <form action="" class="tm-text-primary">

            </form>
            <br>
        </div>
    </div>


    <div class="row d-flex justify-content-center">
        @foreach ($cosmeticos as $cosmetico)

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 " style=" width: auto;">
            <figure class="effect-ming tm-video-item">
                <img src="/public/img/{{$cosmetico->imagen }}" alt="Image" class="img-fluid d-flex justify-content-center">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Details</h2>
                    <a href="{{ action('App\Http\Controllers\CatalogocosmeController@detailcosmetico',['id' => $cosmetico->id]) }}" ></a>
                </figcaption>
            </figure>

            <div class="display-6" style="border-bottom: solid 1px #1A1919;">

                <div class="d-flex justify-content-center tm-text-gray"  style="border-bottom: solid 1px #1A1919;">
                    <span class="tm-text-gray-light px-2 text-dark ">{{ $cosmetico->nombreProducto }}</span>

                </div>
                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light px-2 text-dark"><a style="color:rgb(218, 25, 170)">Codigo:</a>{{ $cosmetico->codigo }}</span>
                </div>

                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light px-2 text-dark"><a style="color:rgb(218, 25, 170)">Precio:</a> {{ $cosmetico->precio }}</span>
                </div>

            </div><br><br><br>


        </div>

        @endforeach
    </div>

    <div class="tm-paging d-flex">
        <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col " >
         <a class=" tm-btn-prev mb-2 disabled"></a>


      <nav aria-label="">
      <ul class="pagination" value="{{$cosmeticos}}"></ul>
      </nav>

    </div>



    @endsection
