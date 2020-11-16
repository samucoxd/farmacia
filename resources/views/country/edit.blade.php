@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

@include('partials.validation-errors')

<form method="POST" action="{{ route('country.update', $country) }}">
    
    @method('PATCH')
    
    @include('country._form', ['btn'=>'Actualizar'])

</form>

@endsection