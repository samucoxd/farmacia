@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" action="{{ route('articulo.update', $articulo) }}">
    
    @method('PATCH')
    
    @include('inicio._form', ['btn'=>'Actualizar'])

</form>

@endsection