@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" action="{{ route('categoria.store') }}">
@include('categoria._form', ['btn'=>'Guardar'])
</form>

@endsection