 <div class="container">
     <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{Form::text('nombre',null,['class'=>'form-control'])}}
                </div>


                <div class="form-group">
                    {{ Form::label('Documento') }}
                    {{ Form::select('documento_id',$documentos,null,['class'=>'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Nº de Documento') }}
                    {{Form::text('n_documento',null,['class'=>'form-control'])}}
                </div>

                    <div class="form-group">
                        {{ Form::label('Estado') }}
                        {{ Form::select('estado_id',$estados,null,['class'=>'form-control']) }}
                    </div>

                <div class="form-group">
                    {{ Form::label('Responsable') }}
                    {{Form::text('responsable',null,['class'=>'form-control'])}}
                </div>

                <div class="form-group">
                    {{ Form::label('Descripcion') }}
                    {{Form::textarea('descripcion',null,['class'=>'form-control','rows'=>'5'])}}
                </div>
            </div>


            <div class="row">
                <div class="col-md-5">

                    <div class="form-group">
                        {{ Form::label('Oficina') }}
                        {{ Form::select('oficina_id',$oficinas,null,['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Categoria') }}
                        {{ Form::select('categoria_id',$categorias,null,['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Unidad') }}
                        {{ Form::select('unidad_id',$unidads,null,['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Marca') }}
                        {{ Form::select('marca_id',$marcas,null,['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Serie') }}
                        {{Form::text('serie',null,['class'=>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Destino') }}
                        {{Form::text('destino',null,['class'=>'form-control'])}}
                    </div>

                    <div class="form-group">
                        <label for=" procedencia"> Costo </label>
                        <input name=" procedencia" class="form-control" type="text">
                    </div>
                </div>
            </div>
        </div>
 </div>