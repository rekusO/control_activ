@extends('plantilla')

@section('titulo','DISTRITO')

@section('subtitulo','DETALLAR DISTRITO')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">

                    <tr>
                        <td>Codigo:</td>
                        <td>{{ $distrito->id }}</td>
                    </tr>

                    <tr>
                        <th>Nombre:</th>
                        <th>{{ $distrito->nombre }}</th>
                    </tr>
                </table>

                <a href="{!! route('distrito.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>

            </div>
        </div>
    </div>

@endsection