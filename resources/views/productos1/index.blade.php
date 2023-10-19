@extends('layouts.app')

@section('template_title')
    Productos1
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos1') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos1s.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Precio</th>
										<th>Categoria</th>
										<th>Proveedor</th>
										<th>Existencias</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos1s as $productos1)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productos1->nombre }}</td>
											<td>{{ $productos1->precio }}</td>
											<td>{{ $productos1->categoria }}</td>
											<td>{{ $productos1->proveedor }}</td>
											<td>{{ $productos1->existencias }}</td>
											<td>{{ $productos1->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('productos1s.destroy',$productos1->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos1s.show',$productos1->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos1s.edit',$productos1->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos1s->links() !!}
            </div>
        </div>
    </div>
@endsection
