@extends('plantilla')

@section('titulo','LISTA DE DISTRITOS')

@section('subtitulo')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="navbar-right">
                    <a href="{!! route('distrito.crear') !!}"><button class="btn btn-warning btn active">NUEVO DISTRITO</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('contenido')


    <table class="table table-hover">
        <thead>
        <tr class="bg-primary">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        </thead>

        @foreach ($distritos as $distrito)
            <tr>
                <td>{{ $distrito->id}}</td>
                <td>{{ $distrito->nombre}}</td>
                <td>
                    <a href="{!! route('distrito.modificar',$distrito->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                    <a href="{!! route('distrito.detallar',$distrito->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                    <a href="{!! route('distrito.eliminar',$distrito->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach


    </table>
    {{ $distritos->render() }}

@endsection