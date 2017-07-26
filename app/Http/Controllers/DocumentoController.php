<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DocumentoRequest;
use  App\Models\Documento;

class DocumentoController extends Controller
{
    public function crear()
    {
        return view ('documento.crear');
    }

    public function grabar(DocumentoRequest $request)
    {
        $documento=new Documento;
        $documento->nombre=$request->get('nombre');
        $documento->save();
        Session::flash('success','El documento ha sido registrada satisfactoriamente');
        return view ('documento.crear'); // es activo.listar para que me muestre la vista
    }
    public function listar()
    {
        $documentos=Documento::paginate(10);
        return view('documento.listar',compact('documentos'));
    }


    public function modificar($id)
    {
        $documento=Documento::find($id);
        return view('documento.modificar',compact('documento'));
    }

    public function actualizar($id,DocumentoRequest $request)
    {
        $documento=Documento::find($id);
        $documento->nombre=$request->nombre;
        $documento->save();
        Session::flash('success','El documento ha sido actualizado satisfactoriamente');
        return redirect(route('documento.listar'));
    }
    public function eliminar($id)
    {
        Documento::destroy($id);
        Session::flash('success','El documento ha sido eliminada satisfactoriamente');
        return redirect(route('documento.listar'));
    }



    public function detallar($id)
    {
        $documento=Documento::find($id);//select * from trabajadors where id=$id
        return view('documento.detallar')->with('documento',$documento);
    }


}
