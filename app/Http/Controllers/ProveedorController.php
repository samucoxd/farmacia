<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = new Proveedor;
        $proveedores = Proveedor::with('country')->get();
       
       //dd($proveedores);
        //$proveedores = Proveedor::with('country')->get();

        //dd($proveedores);
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Country::all();

        return view('proveedor.create', [
            'proveedor' => new Proveedor,
            'paises' => $paises
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
        $proveedor = new Proveedor($request->all());
        $proveedor->save();

        return redirect()->route('proveedor.index')
            ->with('success', 'Proveedor Creado Sastifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $paises = Country::all();

        return view('proveedor.edit', [
            'proveedor' => $proveedor,
            'paises' => $paises
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());

        return redirect()->route('proveedor.index')
            ->with('success', 'Proveedor Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return redirect()->route('proveedor.index')
            ->with('success', 'Proveedor Eliminado Correctamente');
    }
}
