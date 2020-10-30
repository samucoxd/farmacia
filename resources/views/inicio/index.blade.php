@extends('plantilla.plantilla')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl">
        <h1>Prindipales productos</h1>

            <div class="card-columns mt-5">
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Parecetamol 500mg.</h5>
                        <p class="card-text">El paracetamol pertenece al grupo de medicamentos llamados analgésicos y antipiréticos. Paracetamol se utiliza para el tratamiento del dolor de intensidad leve a moderada y estados febriles en adultos y niños a partir de 12 años (o peso corporal superior a 40 kg).</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ibuprofeno</h5>
                        <p class="card-text">El ibuprofeno (ácido isobutilfenil propiónico) es un fármaco sintético que, como el ácido acetilsalicílico, la indometacina y el naproxeno, tiene propiedades analgésicas, antiinflamatorias y antipiréticas, efectos que se atribuyen a su capacidad para interferir en la biosíntesis de prostaglandinas, tromboxano y prostaciclinas por inhibición de la sintetasa de prostaglandinas (ciclooxigenasa). También inhibe la agregación plaquetaria y prolonga el tiempo de protrombina.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-primary text-white p-3">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Acetilsalicílico ácido</h5>
                        <p class="card-text">Tto. sintomático del dolor (de cabeza, dental, menstrual, muscular, lumbalgia). Fiebre. Tto. de la inflamación no reumática. Tto. de artritis reumatoide, artritis juvenil, osteoartritis y fiebre reumática.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-primary text-white p-3">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Diclofenaco 100mg</h5>
                        <p class="card-text">Derivado del ácido fenilacético con propiedades analgésicas, antiinflamatorias y antipiréticas que parecen estar relacionadas con su capacidad para bloquear la biosíntesis de prostaglandinas, acción que depende de la inhibición de la ciclooxigenasa; su potencia es sustancialmente mayor que la observada en otros agentes antiinflamatorios no esteroideos.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ibuprofeno</h5>
                        <p class="card-text">El ibuprofeno (ácido isobutilfenil propiónico) es un fármaco sintético que, como el ácido acetilsalicílico, la indometacina y el naproxeno, tiene propiedades analgésicas, antiinflamatorias y antipiréticas, efectos que se atribuyen a su capacidad para interferir en la biosíntesis de prostaglandinas, tromboxano y prostaciclinas por inhibición de la sintetasa de prostaglandinas (ciclooxigenasa). También inhibe la agregación plaquetaria y prolonga el tiempo de protrombina.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">IBUFLAMAR-P</h5>
                        <p class="card-text">Está indicado para el tratamiento de procesos inflamatorios que afectan a tejidos blandos, articulaciones o huesos que en general se acompañan de dolor y cuadros febriles. En general, procesos inflamatorios que afectan a partes blandas, articulaciones o huesos y que generalmente se acompañan de dolor.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Albendazol</h5>
                        <p class="card-text">No se recomienda en niños < 6 años; mujeres edad fértil: descartar embarazo, tomar medidas contraceptivas durante y 1 mes después. Realizar recuentos sanguíneos y pruebas función hepática al comienzo y cada 2 sem. Ancianos. Evidencia de I.R., I.H. Administrar tto. anticonvulsivante y corticostiteroideo en neurocisticercosis. Se debe vigilar si hay lesiones en la retina antes de iniciar tto. de neurocisticercosis..</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ATM – 500</h5>
                        <p class="card-text">Enfermedad pulmonar obstructiva.
                            Neumonía, Faringitis, Amigdalitis.
                            Infecciones no complicadas de la piel.
                            Uretritis, Cervicitis.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">KARVOL PLUS CÁPSULA</h5>
                        <p class="card-text">Rapidez en su inicio de acción.
                            Posibilidad de ajuste a la dosis de acuerdo a las necesidades de cada paciente.
                            Eliminación de la degradación a nivel gástrico de los principios activos.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('./img/med.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CIPRIND – 500 TABLETAS</h5>
                        <p class="card-text">Rápido efecto terapéutico.
                            Cómoda posología.
                            Menor riesgo de toxicidad.
                            Buena tolerancia.
                            Tabletas ranuradas..</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection