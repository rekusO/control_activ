<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UnidadRequest;
use  App\Models\Unidad;
class UnidadController extends Controller
{
    public function crear()
    {
        return view('unidad.crear');
    }

    public function grabar(UnidadRequest $request)
    {
        $unidad=new Unidad;
        $unidad->nombre=$request->get('nombre');
        $unidad->save();
        Session::flash('success','La unidad ha sido registrada satisfactoriamente');
        return view ('unidad.crear');
    }
    public function listar()
    {
        $unidads=Unidad::paginate(10);
        return view ('unidad.listar',compact('unidads'));
    }



    public function modificar($id)
    {
        $unidad=Unidad::find($id);
        return view('unidad.modificar',compact('unidad'));
    }

    public function actualizar($id,UnidadRequest $request)
    {
        $unidad=Unidad::find($id);
        $unidad->nombre=$request->nombre;
        $unidad->save();
        Session::flash('success','La unidad ha sido actualizado satisfactoriamente');
        return redirect(route('unidad.listar'));
    }

    public function eliminar($id)
    {
        Unidad::destroy($id);
        Session::flash('success','La unidad ha sido eliminada satisfactoriamente');
        return redirect(route('unidad.listar'));
    }



    public function detallar($id)
    {
        $unidad=Unidad::find($id);//select * from trabajadors where id=$id
        return view('unidad.detallar')->with('unidad',$unidad);
    }



}
