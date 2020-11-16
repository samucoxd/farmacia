@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Proveedores</h1>
            <a href="{{ route('proveedor.create') }}" class="btn btn-primary">Nuevo Proveedor</a>
            @if ($proveedores->isEmpty())
                <div>No hay Datos</div>
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($proveedores as $proveedor)
                    <tr>
                        <th scope="row">{{ $proveedor->id }}</th>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>
                            {{ $proveedor->country->nombre }}
                        </td>
                        <td>
                            <a href="{{ route('proveedor.edit', $proveedor->id) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('proveedor.destroy', $proveedor) }}">
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