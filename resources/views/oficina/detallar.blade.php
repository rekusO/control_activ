@extends('plantilla')

@section('titulo','OFICINA')

@section('subtitulo','DETALLAR OFICINA')

@section('contenido')

    <div class="col-md-5">

    <p>Código: {{ $oficina->id }}</p>
    <p>Nombre: {{ $oficina->nombre }}</p>

    <a href="{!! route('oficina.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>
    </div>

@endsection