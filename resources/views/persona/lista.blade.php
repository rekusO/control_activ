@extends('plantilla')

@section('titulo','LISTA DE TRABAJADORES')

@section('subtitulo')

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="navbar-right">
                            <a href="{!! route('persona.crear') !!}"><button class="btn btn-warning btn active">NUEVO TRABAJADOR</button></a>
                        </div>
                    </div>
                </div>
            </div>
@endsection



@section('contenido')


    <table class="table table-hover" >

        <thead>


        <tr class="bg-primary">

            <th>codigo</th>
            <th>Nombre</th>
            <th>Distrito</th>
            <th>Distrito</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>DNI</th>
            <th>Opciones</th>

        </tr>
        </thead>

        @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->id}}</td>
                <td>{{ $persona->nombre}}</td>
                <td>{!! $persona->distrito->nombre !!}</td>
                <td>{{ $persona->apellido_paterno}}</td>
                <td>{{ $persona->apellido_materno}}</td>
                <td>{{ $persona->dni}}</td>
                <td>
                <a href="{!! route('persona.modificar',$persona->id) !!}" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                <a href="{!! route('persona.detallar',$persona->id) !!}" class="btn btn-info"><i class="fa fa-book"></i></a>

                <a href="{!! route('persona.eliminar',$persona->id) !!}" class="btn btn-danger"><i class="fa fa-trash"></i></a>


                </td>
            </tr>
        @endforeach

    </table>

    {{ $personas->render() }}
@endsection