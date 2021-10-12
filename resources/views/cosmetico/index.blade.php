@extends('layouts.app')

@section('template_title')
    Cosmetico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cosmetico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cosmeticos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($cosmeticos as $cosmetico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cosmetico->nombreProducto }}</td>
											<td>{{ $cosmetico->descripcion }}</td>
											<td>{{ $cosmetico->precio }}</td>
											<td>{{ $cosmetico->imagen }}</td>
											<td>{{ $cosmetico->codigo }}</td>

                                            <td>
                                                <form action="{{ route('cosmeticos.destroy',$cosmetico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cosmeticos.show',$cosmetico->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cosmeticos.edit',$cosmetico->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cosmeticos->links() !!}
            </div>
        </div>
    </div>
@endsection