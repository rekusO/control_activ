@extends('plantilla')

@section('titulo','TRABAJADOR')

@section('subtitulo','LISTA DE TRABAJADORES')

@section('contenido')

    @if(count($errors)>0)

        <div class="alert alert-danger">
            <h4>Error</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($persona,['route'=>['persona.actualizar',$persona->id]]) }}

    @include('persona.componentes.formulario')

    {{Form::button('Actualizar',['type'=>'submit','class'=>'btn btn-lg btn-warning'])}}

    {{ Form::close() }}

@endsection