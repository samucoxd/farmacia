<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Ingreso;
use App\Models\Persona;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = new Ingreso();
        $ingresos = Ingreso::with('persona')->get();
       
        return view('ingreso.index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = new Articulo;
        $personas = new Persona;
        return view('ingreso.create', [
            'ingreso' => new Ingreso,
            'articulos' => $articulos->all(),
            'articulo' => new Articulo,
            'personas' => $personas->all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Actualizacion de Stock tabla Articulos
        $id_articulo = Articulo::findOrFail($request->articulo_id);
        $articulo = Articulo::findOrFail($request->articulo_id);
        $articulo->stock = $articulo->stock + $request->stock;
        $articulo->save();


        //Ingreso en la tabla Ingresos
        $ingreso = new Ingreso();

        $ingreso->glosa = $request->glosa;
        $ingreso->proveedor = $request->proveedor;
        $ingreso->fecha = $request->fecha;
        $ingreso->persona_id = $request->persona_id;
        $ingreso->save();
        $id_ingreso = Ingreso::findOrFail($ingreso->id);
        //ingreso en la tabla articulo_ingreso

        $id_articulo->ingresos()->attach($id_ingreso);
//dd($id_articulo);


        return redirect()->route('ingreso.index')
            ->with('success', 'Ingresi Creado Sastifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        $ingreso->delete();

        return redirect()->route('ingreso.index')
            ->with('success', 'Ingreso Eliminado Correctamente');
    }
}
