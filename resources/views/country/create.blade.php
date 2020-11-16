@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form method="POST" action="{{ route('country.store') }}">
@include('country._form', ['btn'=>'Guardar'])
</form>

@endsection