<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SalidaActivoController extends Controller
{
    public function crear()
    {
        return view ('salidactivos.crear');
    }

}
