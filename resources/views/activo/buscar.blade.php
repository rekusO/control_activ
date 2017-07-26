@extends('plantilla')

@section('titulo','BUSQUEDA DE ACTIVO')

@section('subtitulo')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="navbar-right">
                    <a href="{!! route('activo.listar') !!}"><button class="btn btn-success btn active">Lista de Activo</button></a>
                </div>
            </div>
        </div>
    </div>




@endsection


@section('contenido')
    <div class="row">
        <div class="col-md-5">
            @include('componentes.buscador')
        </div>

    </div>

    <br>
    <table class="table">
        <thead>

        <tr class="info">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Responsable</th>
            <th>descripcion</th>
            <th>Opciones</th>
        </tr>
        </thead>

        @foreach ($activos as $activo)
            <tr>
                <td>{{ $activo->id}}</td>
                <td>{{ $activo->nombre}}</td>
                <td>{{ $activo->responsable}}</td>
                <td>{{ $activo->descripcion}}</td>
                <td>
                    <a href="{!! route('activo.modificar',$activo->id) !!}" class="btn btn-warning">Modificar</a>

                    <a href="{!! route('activo.detallar',$activo->id) !!}"><button class="btn btn-info">Detallar</button></a>

                    <a href="{!! route('activo.eliminar',$activo->id) !!}"><button class="btn btn-danger">Eliminar</button></a>


                </td>
            </tr>
        @endforeach


    </table>
    {{ $activos->links() }}

@endsection