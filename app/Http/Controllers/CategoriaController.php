<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function crear()
    {
        return view('categoria.crear');
    }

    public function grabar(CategoriaRequest $request)
    {
        $categoria=new Categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->save();
        Session::flash('success','La Categoria ha sido registrada satisfactoriamente');
        return view('categoria.crear');
    }

    public function listar()
    {
        $categorias=Categoria::paginate(10);
        return view('categoria.listar',compact('categorias'));
    }


    public function modificar($id)
    {
        $categoria=Categoria::find($id);
        return view('categoria.modificar',compact('categoria'));
    }

    public function actualizar($id,CategoriaRequest $request)
    {
        $categoria=Categoria::find($id);
        $categoria->nombre=$request->nombre;
        $categoria->save();
        Session::flash('success','La Categoria ha sido actualizado satisfactoriamente');
        return redirect(route('categoria.listar'));
    }

    public function eliminar($id)
    {
        Categoria::destroy($id);
        Session::flash('success','La Categoria ha sido eliminada satisfactoriamente');
        return redirect(route('categoria.listar'));
    }

    public function detallar($id)
    {
        $categoria=Categoria::find($id);//select * from trabajadors where id=$id
        return view('categoria.detallar')->with('categoria',$categoria);
    }



}
