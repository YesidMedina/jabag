@extends('layouts.app')

@section('template_title')
    {{ $aseoPersonal->name ?? 'Show Aseo Personal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Aseo Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aseo-personals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $aseoPersonal->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $aseoPersonal->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $aseoPersonal->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $aseoPersonal->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $aseoPersonal->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
