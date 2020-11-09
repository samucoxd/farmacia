<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Productos = new Articulo;
        $Productos = $Productos->all();
        //dd($Productos);

        //return View("inicio.index", compact('Productos'));
        return View('inicio.index')->with('productos', $Productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('inicio.create', ['articulo' => new Articulo]);
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
            'codigo' => 'required',
            'descripcion' => 'required',
            'lote' => 'required',
            'vencimiento' => 'required',
            'stock' => 'required',
            'foto' => 'required'
        ]);
       
        $Articulo =new Articulo($request->all());
        if ($request->hasFile('foto')){
            $file = $request->file("foto");
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/articulo/"),$nombrearchivo);
            $Articulo->foto = $nombrearchivo;
        }
        $Articulo->save();

        return redirect()->route('articulo.index')
            ->with('success', 'Articulo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        return View('inicio.edit', ['articulo' => $articulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'codigo' => 'required',
            'descripcion' => 'required',
            'lote' => 'required',
            'vencimiento' => 'required',
            'stock' => 'required',
            'foto' => 'required'
        ]);

        $Articulo =new Articulo($request->all());
        $nombrearchivo = "";
        if ($request->hasFile('foto')){
            $file = $request->file("foto");
            //$nombrearchivo  = str_slug($request->slug).".".$file->getClientOriginalExtension();
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/articulo/"),$nombrearchivo);
            $Articulo->foto = $nombrearchivo;
        }
        //$Articulo->update($request->all());
        $Articulo->where('id' ,$articulo->id)->update([
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'lote' => $request->lote,
            'vencimiento' => $request->vencimiento,
            'stock' => $request->stock,
            'foto' => $nombrearchivo
            
        ]);
       

        return redirect()->route('articulo.index')
            ->with('success', 'Project Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();

        return redirect()->route('articulo.index');
    }
}
