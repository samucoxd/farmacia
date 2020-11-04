@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Personas</h1>
            <a href="{{ route('persona.create') }}" class="btn btn-primary">Nuevo Articulo</a>
            @if ($personas->isEmpty())
                <div>No hay Datos</div>
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Carnet</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($personas as $persona)

                    <tr>
                        <th scope="row">{!! $persona->id !!}</th>
                        <td>{!! $persona->nombre !!}</td>
                        <td>{!! $persona->apellido !!}</td>
                        <td>{!! $persona->fnacimiento !!}</td>
                        <td>{!! $persona->carnet !!}</td>
                        <td>
                            <a href="{{ route('persona.edit', $persona) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('persona.destroy', $persona) }}">
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