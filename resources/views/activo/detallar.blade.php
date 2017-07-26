@extends('plantilla')

@section('titulo','ACTIVO')

@section('subtitulo','DETALLE DEL ACTIVO')

@section('contenido')

    <div class="col-md-5">

    <p>Código: {{ $activo->id }}</p>
    <p>Nombre: {{ $activo->nombre }}</p>
    <p>Documento: {{ $activo->documento->nombre }}</p>
    <p>Nro. Documento: {{ $activo->n_documento }}</p>
    <p>Estado: {{ $activo->estado->nombre }}</p>
    <p>Responsable: {{ $activo->responsable }}</p>
    <p>Descripcion: {{ $activo->descripcion }}</p>
    <p>Oficina: {{ $activo->oficina->nombre }}</p>
    <p>Categoria: {{ $activo->categoria->nombre }}</p>
    <p>Unidad: {{ $activo->unidad->nombre }}</p>
    <p>Marca: {{ $activo->marca->nombre }}</p>
    <p>Serie: {{ $activo->serie }}</p>
    <p>Destino: {{ $activo->destino }}</p>



        <a href="{!! route('activo.listar') !!}"><button class="btn btn-warning">Regresar a lista</button></a>




@endsection