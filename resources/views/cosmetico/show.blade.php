@extends('layouts.app')

@section('template_title')
    {{ $cosmetico->name ?? 'Show Cosmetico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del prodúcto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cosmeticos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $cosmetico->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $cosmetico->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $cosmetico->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                              <img height="400" src="/public/img/{{$cosmetico->imagen }}" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $cosmetico->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
