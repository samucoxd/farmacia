@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Almacen</h1>
            <a href="{{ route('almacen.create') }}" class="btn btn-primary">Nuevo Articulo</a>
            @if ($almacenes->isEmpty())
                <div>No hay Datos</div>
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($almacenes as $almacen)

                    <tr>
                        <th scope="row">{!! $almacen->id !!}</th>
                        <td>{!! $almacen->codigo !!}</td>
                        <td>{!! $almacen->nombre !!}</td>
                        <td>{!! $almacen->ubicacion !!}</td>
                        <td>
                            <a href="{{ route('almacen.edit', $almacen) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('almacen.destroy', $almacen) }}">
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