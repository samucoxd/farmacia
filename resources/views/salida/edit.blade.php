@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" action="{{ route('salida.update', $salida) }}">
    
    @method('PATCH')
    
    @include('salida._form', ['btn'=>'Actualizar'])

</form>

@endsection