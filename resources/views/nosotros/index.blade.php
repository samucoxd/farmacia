@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xl">
            <div class="h1">Misión</div>
            Contribuimos al éxito del tratamiento para mejorar la salud de los Bolivianos, a través de medicamentos con altos estándares de calidad, distribuidos responsablemente.

            <div class="h1">Nuestra Visión</div>
            Ser una de las mejores Empresas del rubro Farmacéutico Boliviano.

            <div class="text-center mt-5">
                <img src="{{ asset('./img/med2.jpg') }}" class="img-thumbnail" alt="Responsive image">
            </div>
        </div>
    </div>
</div>


@endsection