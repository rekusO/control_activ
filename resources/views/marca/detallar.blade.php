@extends('plantilla')

@section('titulo','MARCA')

@section('subtitulo','DETALLAR MARCA')

@section('contenido')

    <div class="col-md-5">

    <p>Código: {{ $marca->id }}</p>
    <p>Nombre: {{ $marca->nombre }}</p>

    <a href="{!! route('marca.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>
    </div>

@endsection