@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Página principal de administrador.') }}</div>

                <a class="navbar-brand" href=""><img class="logo"src="img/admin.png" style="height:400px "/></a>

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
