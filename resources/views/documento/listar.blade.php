@extends('plantilla')

@section('titulo','LISTA DE DOCUMENTO')

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
                    <a href="{!! route('documento.crear') !!}"><button class="btn btn-warning btn active">NUEVO DOCUMENTO</button></a>
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

        @foreach ($documentos as $documento)
            <tr>
                <td>{{ $documento->id}}</td>
                <td>{{ $documento->nombre}}</td>
                <td>
                    <a href="{!! route('documento.modificar',$documento->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                    <a href="{!! route('documento.detallar',$documento->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                    <a href="{!! route('documento.eliminar',$documento->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach


    </table>
    {{ $documentos->render() }}

@endsection