@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" enctype="multipart/form-data" action="{{ route('persona.update', $persona) }}">
    
    @method('PATCH')
    
    @include('persona._form', ['btn'=>'Actualizar'])

</form>

@endsection