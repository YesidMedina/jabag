@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Página principal de administrador.') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('El estado de ánimo que tengas en tu día, se reflejarán en tus ventas') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
