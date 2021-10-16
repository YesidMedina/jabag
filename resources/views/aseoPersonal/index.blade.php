@extends('layouts.app')

@section('template_title')
    Aseo Personal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aseo Personal') }}
                            </span>



                         <form action="{{route('aseoPersonal.index')}}" method="get">

                            <div class="form-row">

                            <div class="col-sm-6">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                            </div>
                            <div class="col-auto">
                            <input type="submit" class="btn btn-primary" value="Buscar">


                            </div>
                            </div>

                            </form>

                             <div class="float-right">
                                <a href="{{ route('aseoPersonal.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                    @foreach ($aseoPersonal as $aseopersonal)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $aseopersonal->nombreProducto }}</td>
											<td>{{ $aseopersonal->descripcion }}</td>
											<td>{{ $aseopersonal->precio }}</td>
											<td>{{ $aseopersonal->imagen }}</td>
											<td>{{ $aseopersonal->codigo }}</td>

                                            <td>
                                                <form action="{{ route('aseopersonal.destroy',$aseopersonal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aseopersonal.show',$aseoPersonal->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aseopersonal.edit',$aseoPersonal->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $aseoPersonal->links() !!}
            </div>
        </div>
    </div>
@endsection
