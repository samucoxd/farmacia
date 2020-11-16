@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
            <h1>Listado de Categoria</h1>
            <a href="{{ route('categoria.create') }}" class="btn btn-primary">Nuevo Categoria</a>
            @if ($categorias->isEmpty())
                <div>No hay Datos</div>
            @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categorias as $categoria)

                    <tr>
                        <th scope="row">{!! $categoria->id !!}</th>
                        <td>{!! $categoria->nombre !!}</td>
                        <td>
                            <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form class="form-inline" method="POST" action="{{ route('categoria.destroy', $categoria) }}">
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