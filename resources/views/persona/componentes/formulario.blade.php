<div class="container">
    <div class="row">
        <div class="col-md-5">

            <div class="form-group">
                {{ Form::label('Nombre') }}
                {{Form::text('nombre',null,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{ Form::label('Apellido_paterno') }}
                {{Form::text('apellido_paterno',null,['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{ Form::label('Apellido_materno') }}
                {{Form::text('apellido_materno',null,['class'=>'form-control'])}}
            </div>

            </div>

            <div class="col-md-5">
                <div class="form-group">
                {{ Form::label('Distrito') }}
                {{ Form::select('distrito_id',$distritos,null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('DNI') }}
                {{Form::text('dni',null,['class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
