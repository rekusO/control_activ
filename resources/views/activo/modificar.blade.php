@extends('plantilla')

@section('titulo','ACTIVO')

@section('subtitulo','MODIFICAR EL ACTIVO')

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

    {{ Form::model($activo,['route'=>['activo.actualizar',$activo->id]]) }}

    @include('activo.componentes.formulario')


    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <div class="navbar-left">

                    {{Form::button('Actualizar',['type'=>'submit','class'=>'btn btn-warning btn active'])}}

                </div>
            </div>
        </div>
    </div>





    {{ Form::close() }}

@endsection