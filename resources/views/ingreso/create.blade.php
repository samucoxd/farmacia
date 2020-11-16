@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" action="{{ route('ingreso.store') }}">
@include('ingreso._form', ['btn'=>'Guardar'])
</form>

@endsection