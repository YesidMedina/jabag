@extends('layouts.template')


@section('content')


<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/negro.jpg">
    <form action="{{Route('producto.store')}}" method="POST" class="d-flex tm-search-form">
        @csrf
        <input type="text" class="form-control" name="texto" >
        <input type="submit" class="btn btn-primary" value="Buscar">


    </form>
</div>
<div class="container-fluid tm-container-content tm-mt-60">
    <div class="mb-4 text-center">
        <h2 class="tm-text-primary">
            Catálogo Spa de uñas
        </h2>
        <div>

        </div>
        <br>
    </div>

</div>


<div class="row d-flex justify-content-center" >


    @foreach ($productos as $producto)

    <div  class="col-xl-4 col-lg-4 col-md-6 col-sm-6 " style=" width: auto" >
        <figure class="effect-ming tm-video-item">
            <img src="/public/img/{{$producto->imagen }}" alt="Image" class="img-fluid d-flex justify-content-center">
            <figcaption class="d-flex align-items-center justify-content-center">
                <h2>Details</h2>
                <a href="{{ action('App\Http\Controllers\CatalogoController@detailproductos',['id' => $producto->id]) }}">Ver mas</a>
            </figcaption>
        </figure>

        <div class="display-6" style="border-bottom: solid 1px #1A1919;">

            <div class="d-flex justify-content-center tm-text-gray">
                <span class="tm-text-gray-light px-1 text-dark ">{{ $producto->nombreProducto }}</span>

            </div>
            <div class="d-flex justify-content-center tm-text-gray">
                <span class="tm-text-gray-light px-1 text-dark"><a style="color:rgb(25, 173, 218)">Código:</a> {{ $producto->codigo }}</span>
            </div>

            <div class="d-flex justify-content-center tm-text-gray">
                <span class="tm-text-gray-light px-1 text-dark"><a style="color:rgb(25, 173, 218)">Precio:</a> {{ $producto->precio }}<sup> COP</sup></span>
            </div>

        </div><br><br><br>





    </div >

    @endforeach

</div>


<div class="tm-paging d-flex">
    <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col " >
     <a class=" tm-btn-prev mb-2 disabled"></a>


  <nav aria-label="">
  <ul class="pagination" value="{{$productos}}"></ul>
  </nav>




</div>




{{--
            <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0 1 2 3 4 5);" class="btn btn-primary tm-btn-prev mb-2 disabled">Anterior</a>
                <div class="tm-paging d-flex"    value="{{$productos}}">
                    <a href="javascript:void();" class="active tm-paging-link">1</a>
                    <a href="javascript:void(1);" class="tm-paging-link">2</a>
                    <a href="javascript:void(2);" class="tm-paging-link">3</a>
                    <a href="javascript:void(3);" class="tm-paging-link">4</a>
                </div>


                <a href="javascript:void(1);" class="btn btn-primary tm-btn-next">Siguiente página</a>
            </div>
        </div>  --}}




@endsection
