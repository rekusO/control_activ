@extends('plantilla')

@section('titulo','LISTA DE OFICINA')

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
                    <a href="{!! route('oficina.crear') !!}"><button class="btn btn-warning btn active">NUEVO TRABAJADOR</button></a>
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

        @foreach ($oficinas as $oficina)
            <tr>
                <td>{{ $oficina->id}}</td>
                <td>{{ $oficina->nombre}}</td>
                <td>
                    <a href="{!! route('oficina.modificar',$oficina->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                    <a href="{!! route('oficina.detallar',$oficina->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                    <a href="{!! route('oficina.eliminar',$oficina->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach


    </table>
    {{ $oficinas->render() }}

@endsection