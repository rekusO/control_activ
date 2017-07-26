{{ Form::open(['route'=>'activo.buscar','class'=>'navbar-form-rigth'])}}
<div class="input-group">
    {{ Form::text('criterio',null,['class'=>'form-control']) }}
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-info btn active">Buscar..</i>
                </button>
            </span>
</div>
{{ Form::close() }}
