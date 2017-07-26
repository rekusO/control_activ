<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{


    protected $fillable = ['nombre','documento_id','n_documento','estado_id','descripcion','responsable','oficina_id','categoria_id','unidad_id','marca_id','serie','destino'];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = mb_strtoupper($value);
    }

    public function setN_documentoAttribute($value)
    {
        $this->attributes['n_documento'] = mb_strtoupper($value);
    }

    public function setDescripcionAttribute($value)
    {
        $this->attributes['descripcion'] = mb_strtoupper($value);
    }

    public function setResponsableAttribute($value)
    {
        $this->attributes['responsable'] = mb_strtoupper($value);
    }

    public function setSerieAttribute($value)
    {
        $this->attributes['serie'] = mb_strtoupper($value);
    }

    public function setDestinoAttribute($value)
    {
        $this->attributes['destino'] = mb_strtoupper($value);
    }












    public function oficina()
    {
        return $this->belongsto(Oficina::class);
    }


    public function documento()
    {
        return $this->belongsto(Documento::class);
    }
    public function categoria()
    {
        return $this->belongsto(Categoria::class);
    }
    public function unidad()
    {
        return $this->belongsto(Unidad::class);
    }

    public function marca()
    {
        return $this->belongsto(Marca::class);
    }
    public function estado()
    {
        return $this->belongsto(Estado::class);
    }

}