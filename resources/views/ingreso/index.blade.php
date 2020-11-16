@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Ingresos</h1>
            <a href="{{ route('ingreso.create') }}" class="btn btn-primary">Nuevo Ingresos</a>
            @if ($ingresos->isEmpty())
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
                @foreach ($ingresos as $ingreso)

                    <tr>
                        <th scope="row">{!! $ingreso->id !!}</th>
                        <td>{!! $ingreso->fecha !!}</td>
                        <td>{!! $ingreso->persona->nombre !!}</td>
                        <td>{!! $ingreso->proveedor !!}</td>
                        <td>
                            <a href="{{ route('ingreso.edit', $ingreso->id) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('ingreso.destroy', $ingreso) }}">
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