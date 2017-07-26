@extends('plantilla')

@section('titulo','LISTA DE CATEGORIA')


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
                    <a href="{!! route('categoria.crear') !!}"><button class="btn btn-warning btn active">NUEVO CATEGORIA</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('subtitulo','LISTA DE CATEGORIAS')


@section('contenido')

    <table class="table table-hover">
        <thead>
        <tr class="bg-primary">
            <th>Código</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        </thead>

        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id}}</td>
                <td>{{ $categoria->nombre}}</td>
                <td>
                    <a href="{!! route('categoria.modificar',$categoria->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                    <a href="{!! route('categoria.detallar',$categoria->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                    <a href="{!! route('categoria.eliminar',$categoria->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach


    </table>


    {{ $categorias->render() }}

@endsection