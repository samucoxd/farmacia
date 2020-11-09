<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = new Persona;
        $personas = $personas->all();
        return View('persona.index')->with('personas', $personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('persona.create', ['persona' => new Persona]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fnacimiento' => 'required',
            'carnet' => 'required',
            'urlfoto' => 'required',
            'sexo' => 'required',
            'nacionalidad' => 'required'
        ]);
       
        $Persona =new Persona($request->all());
        if ($request->hasFile('urlfoto')){
            $file = $request->file("urlfoto");
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/persona/"),$nombrearchivo);
            $Persona->foto = $nombrearchivo;
        }
        $Persona->save();

        return redirect()->route('persona.index')
            ->with('success', 'Persona created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return View('persona.edit', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fnacimiento' => 'required',
            'carnet' => 'required',
            'urlfoto' => 'required',
            'sexo' => 'required',
            'nacionalidad' => 'required'
        ]);

        $Persona =new Persona($request->all());
        $nombrearchivo = "";
        if ($request->hasFile('urlfoto')){
            $file = $request->file("urlfoto");
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/persona/"),$nombrearchivo);
            $Persona->foto = $nombrearchivo;
        }

        $Persona->where('id' ,$persona->id)->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fnacimiento' => $request->fnacimiento,
            'carnet' => $request->carnet,
            'foto' => $nombrearchivo,
            'sexo' => $request->sexo,
            'nacionalidad' => $request->nacionalidad
        ]);

        //$persona->update($request->all());

        return redirect()->route('persona.index')
            ->with('success', 'Persona Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return redirect()->route('persona.index');
    }
}
