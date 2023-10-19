@extends('layouts.app')

@section('template_title')
    {{ $productos1->name ?? "{{ __('Show') Productos1" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Productos1</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos1s.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $productos1->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $productos1->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $productos1->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $productos1->proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Existencias:</strong>
                            {{ $productos1->existencias }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $productos1->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
