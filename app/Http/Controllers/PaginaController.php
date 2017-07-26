<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function bienvenido()
    {
        return view('plantilla');
    }

}


