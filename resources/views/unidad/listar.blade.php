@extends('plantilla')

@section('titulo','NUEVA UNIDAD')

@section('subtitulo')

    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <a href="{!! route('activo.compact') !!}"><button class="btn btn-success btn active">RETORNAR A COMPLEMENTO </button></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="navbar-right">
                    <a href="{!! route('unidad.crear') !!}"><button class="btn btn-warning btn active">NUEVO UNIDAD</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('subtitulo','LISTA DE UNIDAD')


@section('contenido')

    <table class="table table-hover">
        <thead>
        <tr class="bg-primary">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        </thead>

        @foreach ($unidads as $unidad)
            <tr>
                <td>{{ $unidad->id}}</td>
                <td>{{ $unidad->nombre}}</td>
                <td>
                    <a href="{!! route('unidad.modificar',$unidad->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                    <a href="{!! route('unidad.detallar',$unidad->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                    <a href="{!! route('unidad.eliminar',$unidad->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach


    </table>
    {{ $unidads->render() }}

@endsection