@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" enctype="multipart/form-data" action="{{ route('articulo.store') }}">
@include('inicio._form', ['btn'=>'Guardar'])
</form>

@endsection