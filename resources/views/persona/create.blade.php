@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')


<form enctype="multipart/form-data" method="POST" action="{{ route('persona.store') }}" >
@include('persona._form', ['btn'=>'Guardar'])
</form>

@endsection