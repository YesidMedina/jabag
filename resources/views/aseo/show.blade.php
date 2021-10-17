@extends('layouts.app')

@section('template_title')
    {{ $aseo->name ?? 'Show Aseo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Aseo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aseo.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $aseo->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $aseo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $aseo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img height="400" src="/public/img/{{$aseo->imagen }}" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $aseo->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
