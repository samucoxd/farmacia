@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Salidas</h1>
            <a href="{{ route('salida.create') }}" class="btn btn-primary">Nuevo Salida</a>
            @if ($salidas->isEmpty())
                <div>No hay Datos</div>
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($salidas as $salida)

                    <tr>
                        <th scope="row">{!! $salida->id !!}</th>
                        <td>{!! $salida->fecha !!}</td>
                        <td>{!! $salida->persona->nombre !!}</td>
                        <td>{!! $salida->proveedor !!}</td>
                        <td>
                            <a href="{{ route('salida.edit', $salida->id) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('salida.destroy', $salida) }}">
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