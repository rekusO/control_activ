<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Activo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ActivoRequest;
use App\Models\Oficina;
use App\Models\Estado;
use App\Models\Categoria;
use App\Models\Unidad;
use App\Models\Marca;
use App\Models\Documento;


class ActivoController extends Controller
{


    public function buscar(Request $request)
    {
        $criterio = $request->criterio;
        $activos = Activo::where('nombre', 'like', "%$criterio%")->paginate(6);
        return view('activo.buscar', compact('activos'));
    }

    public function crear()
    {
        $documentos = Documento::all()->pluck('nombre', 'id');
        $estados = Estado::all()->pluck('nombre', 'id');
        $oficinas = Oficina::all()->pluck('nombre', 'id');
        $categorias = Categoria::all()->pluck('nombre', 'id');
        $unidads = Unidad::all()->pluck('nombre', 'id');
        $marcas = Marca::all()->pluck('nombre', 'id');
        return view('activo.crear', compact('estados','oficinas','documentos','categorias','unidads','marcas'));
    }

    public function grabar(ActivoRequest $request)
    {
        $this->validar($request);
        Activo::create($request->all());
        Session::flash('success', 'El activo se a registrado satisfactoriamente');
        return redirect(route('activo.crear'));
    }

    public function validar(Request $request)
    {
        $this->validate($request,
            [
                'nombre' => 'required',
            ],
            [
                'required' => 'El nombre es obligatorio',
            ]
        );
    }


    public function listar()
    {
        $activos = Activo::paginate(10);
        return view('activo.listar', compact('activos'));
    }


    public function modificar($id)
    {
        $activo = Activo::find($id);
        $documentos = Documento::all()->pluck('nombre', 'id');
        $estados = Estado::all()->pluck('nombre', 'id');
        $oficinas = Oficina::all()->pluck('nombre', 'id');
        $categorias = Categoria::all()->pluck('nombre', 'id');
        $unidads = Unidad::all()->pluck('nombre', 'id');
        $marcas = Marca::all()->pluck('nombre', 'id');
        return view('activo.modificar', compact('activo','estados','oficinas','documentos','categorias','unidads','marcas'));
    }

    public function actualizar($id, ActivoRequest $request)
    {
        $activo = Activo::find($id);
        $activo->nombre = $request->nombre;
        $activo->documento_id = $request->documento_id;
        $activo->n_documento = $request->n_documento;
        $activo->estado_id = $request->estado_id;
        $activo->responsable = $request->responsable;
        $activo->descripcion = $request->descripcion;
        $activo->oficina_id = $request->oficina_id;
        $activo->unidad_id = $request->unidad_id;
        $activo->marca_id = $request->marca_id;
        $activo->serie = $request->serie;
        $activo->destino = $request->destino;


        $activo->save();
        Session::flash('success', 'El activo ha sido actualizado satisfactoriamente');
        return redirect(route('activo.listar'));
    }


    public function eliminar($id)
    {
        Activo::destroy($id);
        Session::flash('success', 'La activo ha sido eliminada satisfactoriamente');
        return redirect(route('activo.listar'));
    }


    public function detallar($id)
    {
        $activo = Activo::find($id);//select * from trabajadors where id=$id
        return view('activo.detallar')->with('activo', $activo);
    }


    public function compact()
    {
        return view('activo.compact');
    }

}
