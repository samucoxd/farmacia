@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Articulos</h1>
            <a href="{{ route('articulo.create') }}" class="btn btn-primary">Nuevo Articulo</a>
            @if ($productos->isEmpty())
                <div>No hay Datos</div>
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Lote</th>
                        <th scope="col">Vencimiento</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Almacen</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($productos as $producto)

                    <tr>
                        <th scope="row">{!! $producto->id !!}</th>
                        <td>{!! $producto->codigo !!}</td>
                        <td>{!! $producto->descripcion !!}</td>
                        <td>{!! $producto->lote !!}</td>
                        <td>{!! $producto->vencimiento !!}</td>
                        <td>{!! $producto->stock !!}</td>
                        <td><img src="{{ asset('./img/articulo/'.$producto->foto) }}" width="30" height="30"></td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>{{ $producto->almacen->nombre }}</td>
                        <td>{{ $producto->proveedor->nombre }}</td>
                        <td>
                            <a href="{{ route('articulo.edit', $producto->id) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('articulo.destroy', $producto) }}">
                                @csrf @method('DELETE')
                                <button class="btn btn-warning" type="submit" >Eliminar</button>   
                            </form>
                        </td>

                    </tr>
                @endforeach    
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection