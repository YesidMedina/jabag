@extends('layouts.template')


@section('content')






  @foreach ($productos as $producto)
   <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ $producto->imagen }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Clocks</h2>
                        <a href="photo-detail.html">Ver mas</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{ $producto->nombreProducto }}</span>
                    <span>{{ $producto->precio }}</span>
                </div>
            </div>
 @endforeach
@endsection
