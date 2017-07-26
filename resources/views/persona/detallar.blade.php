@extends('plantilla')

@section('titulo','TRABAJADOR')

@section('subtitulo','DETALLAR TRABAJADOR')

@section('contenido')

    <div class="col-md-5">

    <p>Código: {{ $persona->id }}</p>
    <p>Nombre: {{ $persona->nombre }}</p>
    <p>Distrito: {{ $persona->distrito->nombre }}</p>
    <p>Apellido Paterno: {{ $persona->apellido_paterno }}</p>
    <p>Apellido Materno: {{ $persona->apellido_materno }}</p>
    <p>DNI: {{ $persona->dni }}</p>

    <a href="{!! route('persona.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>
    </div>

@endsection