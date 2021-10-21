

@extends('layouts.app')

@section('template_title')
    Update Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Producto</span>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('productos.update', $producto->id) }}" >

                            @csrf

                            @method('PUT')

                            @include('producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
