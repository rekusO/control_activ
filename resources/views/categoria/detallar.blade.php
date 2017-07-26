@extends('plantilla')

@section('titulo','CATEGORIA')

@section('subtitulo','DETALLAR LA CATEGORIA')

@section('contenido')

    <div class="col-md-5">

    <p>Código: {{ $categoria->id }}</p>
    <p>Nombre: {{ $categoria->nombre }}</p>


        <a href="{!! route('categoria.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>
    </div>

@endsection