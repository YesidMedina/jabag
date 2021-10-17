@extends('layouts.app')

@section('template_title')
    Aseo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aseo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aseo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombreproducto</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Imagen</th>
										<th>Codigo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aseos as $aseo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $aseo->nombreProducto }}</td>
											<td>{{ $aseo->descripcion }}</td>
											<td>{{ $aseo->precio }}</td>
											<td><img height="80" src="/public/img/{{$aseo->imagen }}" alt=""></td>
											<td>{{ $aseo->codigo }}</td>

                                            <td>
                                                <form action="{{ route('aseo.destroy',$aseo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aseo.show',$aseo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aseo.edit',$aseo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('¿Seguro desea eliminar el registro?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $aseos->links() !!}
            </div>
        </div>
    </div>
@endsection
