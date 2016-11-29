<?php

namespace TiendaEnLinea\Http\Controllers;

use Faker\Provider\lv_LV\Person;
use Illuminate\Http\Request;

use TiendaEnLinea\Http\Requests;
use TiendaEnLinea\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Esto es nuevo
        $this->validate($request, [
            'nombre'     => 'required|min:3',
            'apellido'     => 'required|min:3',
            'correo'     => 'required|unique:personas|email',
            'direccion'     => 'required',
            'telefono'     => 'required|numeric',
            'fecha_nacimiento' => 'required'
        ]);
        //Fin Nuevo

        $datos = $request->all();
        Persona::create($datos);
        return redirect('personas')->with('creado', 'El usuario fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre'     => 'required|min:3',
            'apellido'     => 'required|min:3',
            'direccion'     => 'required',
            'telefono'     => 'required|numeric',
            'fecha_nacimiento' => 'required'
        ]);
        $persona = Persona::findOrFail($id);
        $persona->fill($request->all());
        $persona->save();
        return redirect('personas')->with('actualizado', 'El usuario fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect('personas')->with('eliminado', 'El usuario fue eliminado con exito');
    }
}
