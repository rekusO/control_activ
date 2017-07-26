@extends('plantilla')

@section('titulo','CREAR TRABAJADOR')
@section('subtitulo')
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="navbar-right">
            <a href="{!! route('persona.listar') !!}"><button class="btn btn-warning">LISTA DE TRABAJADORES</button></a>
        </div>
    </div>
    </div>
    </div>

@endsection



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

    {!! Form::open(['route'=>('persona.grabar'),'method'=>'POST']) !!}
    {{csrf_field()}}

    @include('persona.componentes.formulario')

    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <div class="navbar-left">

                    {{Form::button('Guardar',['type'=>'submit','class'=>'btn btn-success btn active'])}}

                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@endsection