@extends('plantilla')

@section('titulo','OFICINA')

@section('subtitulo','MODIFICAR OFICINA')

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

    {{ Form::model($oficina,['route'=>['oficina.actualizar',$oficina->id]]) }}

    <div class="form-group">
        <label>Nombre</label>
        {{Form::text('nombre',null,['class'=>'form-control'])}}
    </div>

    {{Form::button('Actualizar',['type'=>'submit','class'=>'btn btn-lg btn-warning'])}}

    {{ Form::close() }}
@endsection