@extends('plantilla')

@section('titulo','UNIDAD')

@section('subtitulo','DETALLAR UNIDAD')

@section('contenido')

    <div class="col-md-5">

    <p>Código: {{ $unidad->id }}</p>
    <p>Nombre: {{ $unidad->nombre }}</p>

    <a href="{!! route('unidad.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>
    </div>

@endsection