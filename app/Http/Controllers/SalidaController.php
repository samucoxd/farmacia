<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use App\Models\Persona;
use App\Models\Articulo;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salidas = new Salida();
        $salidas = Salida::with('persona')->get();
       
        return view('salida.index', compact('salidas'));
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
        return view('salida.create', [
            'salida' => new Salida,
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
        $articulo->stock = $articulo->stock - $request->stock;
        $articulo->save();


        //Ingreso en la tabla Ingresos
        $salida = new Salida();

        $salida->glosa = $request->glosa;
        $salida->proveedor = $request->proveedor;
        $salida->fecha = $request->fecha;
        $salida->persona_id = $request->persona_id;
        $salida->save();
        $id_salida = Salida::findOrFail($salida->id);
        //ingreso en la tabla articulo_ingreso

        $id_articulo->salidas()->attach($id_salida);
//dd($id_articulo);


        return redirect()->route('salida.index')
            ->with('success', 'Ingresi Creado Sastifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function show(Salida $salida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function edit(Salida $salida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salida $salida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salida $salida)
    {
        $salida->delete();

        return redirect()->route('salida.index')
            ->with('success', 'Ingreso Eliminado Correctamente');
    }
}
