<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Persona;
use App\Models\Distrito;
use App\Http\Requests\PersonaRequest;


class PersonaController extends Controller
{
    public function crear()
    {
        $distritos=Distrito::all()->pluck('nombre','id');
        return view('persona.crear',compact('distritos'));

    }


    public function grabar(PersonaRequest $request)
    {
        $this->validar($request);
        Persona::create($request->all());
        Session::flash('success','El trabajador se a registrado satisfactoriamente');
        return redirect(route('persona.crear'));
    }

    public function validar(Request $request)
    {
        $this->validate($request,
            [
                'nombre'=>'required',
            ],
            [
                'required'=>'El nombre es obligatorio',
            ]

        );
    }


    public function listar()
    {
        $personas=Persona::paginate(10);
        return view('persona.lista',compact('personas'));
    }



    public function modificar($id)
    {
        $persona=Persona::find($id);
        $distritos=Distrito::all()->pluck('nombre','id');
        return view('persona.modificar',compact('persona','distritos'));
    }

    public function actualizar($id,PersonaRequest $request)
    {
        $persona=Persona::find($id);
        $persona->nombre=$request->nombre;
        $persona->distrito_id=$request->distrito_id;
        $persona->apellido_paterno=$request->apellido_paterno;
        $persona->apellido_materno=$request->apellido_materno;
        $persona->dni=$request->dni;
        $persona->save();
        Session::flash('success','El trabajador se ha modificado satisfactoriamente');
        return redirect(route('persona.listar'));
    }


    public function detallar($id)
    {
        $persona=Persona::find($id);
        return view('persona.detallar')->with('persona',$persona);
    }


    public function eliminar($id)
    {
        Persona::destroy($id);
        Session::flash('success','El trabajador se a eliminado satisfactoriamente');
        return redirect(route('persona.listar'));
    }


}
