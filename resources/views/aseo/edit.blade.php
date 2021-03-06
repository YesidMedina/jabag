@extends('layouts.app')

@section('template_title')
    Update Aseo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Aseo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aseo.update', $aseo->id) }}">

                            @csrf

                            @method('PUT')

                            @include('aseo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
