@extends('plantilla')

@section('contenido')

    <div class="container-fluid"><!-- INICIO CONTAINER -->
        <div class="row"> <!-- INICIO PRIMERA FILA -->
            <div class="col-md-5"> <!-- INICIA COLUMNA DE 6 -->

                <h3>SALIDA DE ACTIVOS</h3>

                <div class="form-group">
                    <label for="codigo"> CODIGO </label>
                    <input name="codigo" class="form-control" type="text" placeholder="Ingrese el codigo nuevo">
                </div>

                <div class="form-group">
                    <label for=" descripcion"> DESCRIPCION </label>
                    <input name=" descripcion" class="form-control" type="text" placeholder="Ingrese la descripcion del activo ">
                </div>

                <div class="form-group">
                    <label for="fecha"> FECHA </label>
                    <input name="fecha" class="form-control" type="text" placeholder=" --------------">

                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8">
                            <label for=" estado"> ESTADO DEL BIEN </label>
                            <select name=" estado" class="form-control"></div>
                        <option values=+"0">SELECCCIONAR</option>
                        <option values=+"0">BUENO</option>
                        <option values=+"0">REGULAR</option>
                        <option values=+"0">MALO</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for=" procedencia"> PROCEDENCIA </label>
                    <input name=" procedencia" class="form-control" type="text" placeholder=" procedencia ">
                </div>

                <div class="form-group">
                    <label for="destino"> DESTINO DEL ACTIVO </label>
                    <input name="destino" class="form-control" type="text" placeholder="Ingrese el destino del activo">
                </div>
                <div class="form-group">
                    <label for=" salida"> MOTIVO DE SALIDA </label>
                    <input name=" salida" class="form-control" type="text" placeholder="Ingrese el motivo de salida del activo">
                </div>





                <div class="form-group">
                    <label for=" oficina"> OFICINA SOLICITANTE </label>
                    <input name=" oficina" class="form-control" type="text" placeholder="-----------">
                </div>

                <div class="form-group">
                    <label for=" fecha"> FECHA DE RETORNO </label>
                    <input name=" fecha" class="form-control" type="text" placeholder="-------------">
                </div>

                <div class="form-group">
                    <label for=" responsable"> RESPONSABLE DEL ACTIVO </label>
                    <input name=" responsable" class="form-control" type="text" placeholder="Ingrese el responsable">
                </div>




                <button type="submit" class="btn btn-info btn-lg">
                    Registrar
                </button>
            </div> <!-- FIN COLUMNA DE 6 -->

        </div> <!-- FIN PRIMERA FILA -->
    </div>

@endsection
