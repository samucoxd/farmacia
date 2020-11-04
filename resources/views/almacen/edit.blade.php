@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" action="{{ route('almacen.update', $almacen) }}">
    
    @method('PATCH')
    
    @include('almacen._form', ['btn'=>'Actualizar'])

</form>

@endsection