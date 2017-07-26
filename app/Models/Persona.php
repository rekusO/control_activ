<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable=
        [
            'nombre',
            'distrito_id',
            'apellido_paterno',
            'apellido_materno',
            'dni',
        ];

    public function getNombreCompletoAttribute()
    {
        return
            $this->attributes['nombre'] . ' ' .
            $this->attributes['apellido_paterno'] . ' ' .
            $this->attributes['apellido_materno'];
    }


    public function setNombreAttribute($valor)
    {
        $this->attributes['nombre'] = mb_strtoupper($valor);
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }


    public function setApellidoPaternoAttribute($valor)
    {
        $this->attributes['apellido_paterno'] = mb_strtoupper($valor);
    }

    public function setApellidoMaternoAttribute($valor)
    {
        $this->attributes['apellido_materno'] = mb_strtoupper($valor);
    }

    public function activos()
    {
        return $this->hasMany(Activo::class);
    }
}
