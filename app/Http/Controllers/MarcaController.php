<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MarcaRequest;
use  App\Models\Marca;


class MarcaController extends Controller
{
    public function crear()
    {
        return view('marca.crear');
    }
    public function grabar(MarcaRequest $request)
    {
        $marca=new Marca;
        $marca->nombre=$request->get('nombre');
        $marca->save();
        Session::flash('success','La marca ha sido registrada satisfactoriamente');
        return view ('marca.crear');
    }

    public function listar()
    {
        $marcas=Marca::paginate(10);
        return view ('marca.listar',compact('marcas'));
    }


    public function modificar($id)
    {
        $marca=Marca::find($id);
        return view('marca.modificar',compact('marca'));
    }

    public function actualizar($id,MarcaRequest $request)
    {
        $marca=Marca::find($id);
        $marca->nombre=$request->nombre;
        $marca->save();
        Session::flash('success','La marca ha sido actualizado satisfactoriamente');
        return redirect(route('marca.listar'));
    }

    public function eliminar($id)
    {
        Marca::destroy($id);
        Session::flash('success','La unidad ha sido eliminada satisfactoriamente');
        return redirect(route('marca.listar'));
    }



    public function detallar($id)
    {
        $marca=Marca::find($id);//select * from trabajadors where id=$id
        return view('marca.detallar')->with('marca',$marca);
    }




}
