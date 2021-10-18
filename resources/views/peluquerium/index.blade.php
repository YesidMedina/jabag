@extends('layouts.app')

@section('template_title')
    Peluquerium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Peluqueria') }}
                            </span>

                            <form action="{{route('peluquerium.index')}}" method="get">

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
                                <a href="{{ route('peluquerium.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                    @if(count($peluqueria)<=0)
                                    <tr>
                                        <td colspan="5">No se encontraron resultados</td>
                                    </tr>

                                    @else
                                    @foreach ($peluqueria as $peluquerium)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $peluquerium->nombreProducto }}</td>
											<td>{{ $peluquerium->descripcion }}</td>
											<td>{{ $peluquerium->precio }}</td>
											 <td> <img height="50" src="/public/img/{{$peluquerium->imagen}}" alt="Image" > </td>
											<td>{{ $peluquerium->codigo }}</td>

                                            <td>
                                                <form action="{{ route('peluquerium.destroy',$peluquerium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('peluquerium.show',$peluquerium->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('peluquerium.edit',$peluquerium->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('¿Seguro desea eliminar el registro?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
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
                {!! $peluqueria->links() !!}
            </div>
        </div>
    </div>
@endsection
