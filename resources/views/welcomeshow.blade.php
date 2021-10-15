@extends('layouts.template')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection


@section('content')


<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('welcome') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $producto->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">

                        <img src="/uploads/{{$producto->imagen }}" alt="">
                            <strong>Imagen:</strong>
                            

                        </div>

                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $producto->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection