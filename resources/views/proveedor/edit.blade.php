@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" action="{{ route('proveedor.update', $proveedor) }}">
    
    @method('PATCH')
    
    @include('proveedor._form', ['btn'=>'Actualizar'])

</form>

@endsection