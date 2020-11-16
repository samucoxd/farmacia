@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" action="{{ route('categoria.update', $categoria) }}">
    
    @method('PATCH')
    
    @include('categoria._form', ['btn'=>'Actualizar'])

</form>

@endsection