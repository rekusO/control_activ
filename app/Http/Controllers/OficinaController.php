<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\OficinaRequest;
use  App\Models\Oficina;

class OficinaController extends Controller
{
    public function crear()
    {
        return view ('oficina.crear');
    }


    public function grabar(OficinaRequest $request)
    {
        $oficina=new Oficina;
        $oficina->nombre=$request->get('nombre');
        $oficina->save();
        Session::flash('success','La Oficina ha sido registrada satisfactoriamente');
        return view ('oficina.crear'); // es activo.listar para que me muestre la vista
    }


    public function listar()
    {
        $oficinas=Oficina::paginate(10);
        return view('oficina.listar',compact('oficinas'));
    }

    public function modificar($id)
    {
        $oficina=Oficina::find($id);
        return view('oficina.modificar',compact('oficina'));
    }

    public function actualizar($id,OficinaRequest $request)
    {
        $oficina=Oficina::find($id);
        $oficina->nombre=$request->nombre;
        $oficina->save();
        Session::flash('success','La oficina ha sido actualizado satisfactoriamente');
        return redirect(route('oficina.listar'));
    }

    public function eliminar($id)
    {
        Oficina::destroy($id);
        Session::flash('success','La oficina ha sido eliminada satisfactoriamente');
        return redirect(route('oficina.listar'));
    }



    public function detallar($id)
    {
        $oficina=Oficina::find($id);//select * from trabajadors where id=$id
        return view('oficina.detallar')->with('oficina',$oficina);
    }

}
