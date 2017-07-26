@extends('plantilla')

@section('titulo','DOCUMENTO')

@section('subtitulo','DETALLAR DOCUMENTO')

@section('contenido')

    <div class="col-md-5">

        <p>Código: {{ $documento->id }}</p>
        <p>Nombre: {{ $documento->nombre }}</p>

        <a href="{!! route('documento.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>
    </div>

@endsection