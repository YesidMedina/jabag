@extends('layouts.app')

@section('template_title')
    Update Barberium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Barberium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('barberium.update', $barberium->id) }}">

                            @csrf

                            @method('PUT')

                            @include('barberium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
