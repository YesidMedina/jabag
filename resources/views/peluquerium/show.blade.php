@extends('layouts.app')

@section('template_title')
    {{ $peluquerium->name ?? 'Show Peluquerium' }}
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
                            <a class="btn btn-primary" href="{{ route('peluqueria.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $peluquerium->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $peluquerium->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $peluquerium->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $peluquerium->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $peluquerium->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
