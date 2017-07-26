@extends('plantilla')

@section('titulo','LISTA DE ACTIVO')

@section('subtitulo')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="navbar-right">
                    <a href="{!! route('activo.crear') !!}"><button class="btn btn-warning btn active">Nuevo Activo</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('contenido')
    <div class="row">
        <div class="navbar-right">
        <div class="col-md-6">
            @include('componentes.buscador')
        </div>
        </div>
    </div><br>
    <table class="table table-hover">
        <thead>
        <tr class="bg-primary">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Oficina</th>
            <th>Responsable</th>
            <th>Destino</th>
            <th>Serie</th>

            <th>Opciones</th>
        </tr>
        </thead>

        @foreach ($activos as $activo)

            <tr>
                <td>{{ $activo->id}}</td>
                <td>{{ $activo->nombre}}</td>
                <td>{!! $activo->Oficina->nombre !!}</td>
                <td>{{ $activo->responsable}}</td>
                <td>{{ $activo->destino}}</td>
                <td>{{ $activo->serie}}</td>

                <td>

                    <a href="{!! route('activo.modificar',$activo->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                    <a href="{!! route('activo.detallar',$activo->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                    <a href="{!! route('activo.eliminar',$activo->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                </td>
            </tr>
        @endforeach


    </table>
    {{ $activos->render() }}

@endsection