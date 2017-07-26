<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DistritoRequest;
use  App\Models\Distrito;

class DistritoController extends Controller
{
    public function crear()
    {
        return view('distrito.crear');
    }


    public function grabar(DistritoRequest $request)
    {
        $distrito=new Distrito;
        $distrito->nombre=$request->get('nombre');
        $distrito->save();
        Session::flash('success','El distrito ha sido registrada satisfactoriamente');
        return view ('distrito.crear'); // es activo.listar para que me muestre la vista
    }

    public function listar()
    {
        $distritos=Distrito::paginate(10);
        return view('distrito.listar',compact('distritos'));
    }


    public function modificar($id)
    {
        $distrito=Distrito::find($id);
        return view('distrito.modificar',compact('distrito'));
    }

    public function actualizar($id,DistritoRequest $request)
    {
        $distrito=Distrito::find($id);
        $distrito->nombre=$request->nombre;
        $distrito->save();
        Session::flash('success','El Distrito ha sido actualizado satisfactoriamente');
        return redirect(route('distrito.listar'));
    }

    public function eliminar($id)
    {
        Distrito::destroy($id);
        Session::flash('success','El Distrito ha sido eliminada satisfactoriamente');
        return redirect(route('distrito.listar'));
    }

    public function detallar($id)
    {
        $distrito=Distrito::find($id);//select * from trabajadors where id=$id
        return view('distrito.detallar')->with('distrito',$distrito);
    }



}
