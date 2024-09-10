@extends('welcome')

@section('title', 'Eventos')
@section('content')
<div class="container-fluid p-0 m-0">
    <div class="col-12">
        <img class="img-fluid w-100" src="{{ asset('media/Eventos.webp') }}" alt="Image 1">
    </div>
</div>
    <div class="container mt-3">
        <div class="row d-flex">
            <div class="col-md-5">
                <h1 class="text-shadow">Eventos Disponibles</h1>
                <h5 class="text-secondary fw-regular lh-1">Consulta la agenda de las siguientes capacitaciones.</h5>
                <hr class="border border-primary border-1 opacity-75 me-5 rounded-4">
                <span>Para brindarte un mejor servicio y permanecer a la vaguardia, aquí puedes mantenerte enterado de <span
                        class="fw-bold">participaciones en expos, eventos importantes de nuestro sector, certificaciones y
                        capacitaciones a través de nuestra plataforma CCAD</span> (Centro de Capacitación a
                    Distancia).</span>
                <table id="events-list" class="table table-dark table-striped mt-3 mb-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Evento</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Filas dinámicas se añadirán aquí -->
                    </tbody>
                </table>
                <!-- Contenedor para la lista de eventos -->                
            </div>
            <div class="col-md-7 p-2 mt-3">
                <div id= "calendar" class="mx-5 shadow-lg p-3 mb-2 bg-white rounded"></div>
            </div>
        </div>
        <div class="row mb-3">
            <span class="text-dark fw-regular fs-6 lh-1">Para participar en <span class="fw-bolder">CCAD – Centro de
                Capacitación a Distancia</span> es necesario enviar un correo
            electrónico a <span class="fw-bolder">mercadotecnia@totalground.com </span> el tema o módulo de su
            interés.</span>
        </div>
        @include('carousel')
    </div>
    @include('footer')

@endsection
