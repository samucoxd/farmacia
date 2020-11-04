@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" action="{{ route('almacen.store') }}">
@include('almacen._form', ['btn'=>'Guardar'])
</form>

@endsection