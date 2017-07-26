@extends('plantilla')


@section('titulo','NUEVO DISTRITO')
@section('subtitulo')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="navbar-right">
                    <a href="{!! route('distrito.listar') !!}"><button class="btn btn-warning">LISTA DE DISTRITOS</button></a>
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


    {!! Form::open(['route'=>('distrito.grabar'),'method'=>'POST']) !!}


    @include('componentes.formulariogeneral')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {{Form::button('Guardar',['type'=>'submit','class'=>'btn btn-success btn active'])}}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection



