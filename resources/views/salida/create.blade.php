@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" action="{{ route('salida.store') }}">
@include('salida._form', ['btn'=>'Guardar'])
</form>

@endsection