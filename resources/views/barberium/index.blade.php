@extends('layouts.app')

@section('template_title')
    Barberium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Barberium') }}
                            </span>

                            <form action="{{route('barberium.index')}}" method="get">

                            <div class="form-row">

                            <div class="col-sm-6">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                            </div>
                            <div class="col-auto">
                            <input type="submit" class="btn btn-primary" value="Buscar">


                            </div>
                            </div>

                            </form

                             <div class="float-right">
                                <a href="{{ route('barberium.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @if(count($barberia)<=0)
                                    <tr>
                                        <td colspan="5">No se encontraron resultados</td>
                                    </tr>

                                    @else
                                    @foreach ($barberia as $barberium)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $barberium->nombreProducto }}</td>
											<td>{{ $barberium->descripcion }}</td>
											<td>{{ $barberium->precio }}</td>
											<td><img height="50" src="/public/img/{{$barberium->imagen }}" alt="image"></td>
											<td>{{ $barberium->codigo }}</td>

                                            <td>
                                                <form action="{{ route('barberium.destroy',$barberium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('barberium.show',$barberium->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('barberium.edit',$barberium->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('??Seguro desea eliminar el registro?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $barberia->links() !!}
            </div>
        </div>
    </div>
@endsection
