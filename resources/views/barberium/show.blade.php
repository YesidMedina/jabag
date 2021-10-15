@extends('layouts.app')

@section('template_title')
    {{ $barberium->name ?? 'Show Barberium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('barberia.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $barberium->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $barberium->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $barberium->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $barberium->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $barberium->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
