@extends('welcome')

@section('title', 'CCAD')
@section('content')
    <div class="container text-center p-2">


    </div>
    <div class="container-fluid p-0 m-0">
        <div class="row g-0">
            <div class=" text-center position-relative">
                <img class="img-fluid w-100" src="{{ asset('media/CCAD/CCAD_Banner_1024x2837.webp') }}" alt="Image 1">
                <!-- Botones centrados sobre la imagen -->
                <div class="position-absolute w-100 d-flex justify-content-center"
                    style="top: 80%; transform: translateY(-50%);">
                    <a data-bs-toggle="modal"
                    data-bs-target="#exampleModal" class="btn btn-outline-light mx-2">
                        <i class="fas fa-info-circle"></i> Más informacion
                    </a>
                    <a href="{{ route('Eventos.show') }}" class="btn btn-outline-light mx-2">
                        <i class="fas fa-calendar-alt"></i> Ver calendario de eventos
                    </a>
                </div>

            </div>
        </div>
        <div class="container mt-3">
            <div class="row p-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home.show') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active d-flex" aria-current="page">CCAD</li>
                    </ol>
                </nav>
                <h1 class="text-dark fs-1 fw-bold">CENTRO DE CAPACITACIÓN A DISTANCIA</h1>
                <span class="lh-normal fs-5 ">Nuestro <span class="fw-bolder">Centro de Capacitación a Distancia</span>
                ofrece
                mayores oportunidades competitivas y brinda diferenciales importantes para nuestros canales, es por
                ello que para <span class="fw-bolder">Total Ground</span> la preparación constante es la base del
                crecimiento profesional.</span>
                <hr class="border border-1 opacity-50 rounded-4 w-75 mx-auto my-3">
            </div>
            <div class="row">
                <div class="col-md-4 custom-grid-item">
                    <img class="img-fluid grayscale rounded-3" src="{{ asset('media/CCAD/IMG_0703_.webp') }}"
                        alt="Image 1">
                </div>
                <div class="col-md-4 custom-grid-item d-flex flex-column justify-content-between text-start">
                    <div>
                        <h3 class="fs-3">¿Qué es CCAD?</h3>
                        <p class="lh-normal fs-6">Es una plataforma amigable que facilita el acceso a la información sobre nuestros productos,
                            actulización servicios y nuevas tecnologías. Una vez que usted ingrese podra interactuar con
                            nuestros ponentes quienes tendrán el gusto de poder asesorarles y resolver sus dudas, teniendo
                            una grata experiencia de aprendizaje.</p>
                        <hr class="border border-2 opacity-50">
                    </div>
                </div>
                <div class="col-md-4 custom-grid-item">
                    <img class="img-fluid grayscale rounded-3" src="{{ asset('media/CCAD/IMG_0675_.webp') }}"
                        alt="Image 2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 custom-grid-item text-start">
                    <h3 class="fs-3">¿A quién se dirige CCAD?</h3>
                    <p class="lh-normal fs-6">Este servicio va dirigido a empresas, profesionales y público en general interesados en adquirir
                        conocimientos sobre nuestras soluciones, servicios y lineas de productos.</p>
                    <hr class="border border-2 opacity-50">
                    <p class="fw-bolder">NOTA: El uso de audífonos es necesario para seguir la capacitación.</p>
                </div>
                <div class="col-md-4 custom-grid-item">
                    <img class="img-fluid grayscale rounded-3" src="{{ asset('media/CCAD/IMG_0682_.webp') }}"
                        alt="Image 4">
                </div>
                <div class="col-md-4 custom-grid-item text-start">
                    <h3 class="fs-3">¿CÓMO PARTICIPAR?</h3>
                    <p class="lh-normal fs-6">Para participar en CCAD – Centro de Capacitación a Distancia es necesario enviar un correo
                        electrónico a mercadotecnia@totalground.com indicando el tema o módulo de su interés.</p>
                    <p class="fw-bolder">Registrate aquí:</p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-red-darks btn-sm shadow-lg" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Registrarme</a>
                    </div>
                    <hr class="border border-2 opacity-50">
                    <p class="fw-bolder lh-normal fs-6">IMPORTANTE: Se recomienda iniciar con la descarga del programa media hora antes del
                        inicio de la capacitación para realizar pruebas y si existen problemas resolverlos antes de que ésta
                        comience.</p>
                </div>
                <p class="fw-bolder m-2">Para conocer la programación de los temas que tenemos calendarizada consulte nuestra
                    sección de EVENTOS.</p>
            </div>
            @include('carousel', ['logos' => $logos])
        </div>
    </div>
    @include('footer')
    <!-- Vertically centered modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h1 class="modal-title fs-4 fw-bold text-dark" id="exampleModalLabel">REGISTRATE EN LA
                            SIGUIENTE CCAD</h1> <br>
                        <p class="m-0 p-0">Ingresa los datos para continuar con la inscripción.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="g-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-bottom border-0 rounded-0"
                                id="floatingInputValue2" placeholder="Nombre Completo">
                            <label for="floatingInputValue2">Nombre Completo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border-bottom border-0 rounded-0 "
                                id="floatingInputValue" placeholder="name@example.com">
                            <label for="floatingInputValue">Correo Electrónico</label>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-6 form-floating">
                                <input type="date" class="form-control border-bottom border-0 rounded-0"
                                    id="floatingDate" placeholder="Fecha">
                                <label for="floatingDate">Fecha</label>
                            </div>
                            <div class="col-12 col-md-6 form-floating">
                                <input type="time" class="form-control border-bottom border-0 rounded-0"
                                    id="floatingTime" placeholder="Hora">
                                <label for="floatingTime">Hora</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-bottom border-0 rounded-0" id="floatingSubject"
                                placeholder="Asunto">
                            <label for="floatingSubject">Asunto</label>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-secondary btn-sm shadow-lg">Completar Registro</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
