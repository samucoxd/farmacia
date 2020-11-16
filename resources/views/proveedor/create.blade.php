@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" action="{{ route('proveedor.store') }}">
@include('proveedor._form', ['btn'=>'Guardar'])
</form>

@endsection