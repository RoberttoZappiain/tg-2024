@extends('welcome')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
@section('title', 'Inicio - Total Ground')

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="col-12" style="background-color: black">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($imagenes as $index => $imagen)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img class="" src="http://127.0.0.1:8000/storage/{{ $imagen->ruta_imagen }}"
                                alt="{{ $imagen->titulo }}" />
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="fw-bold fs-1">{{ $imagen->titulo }}</h3>
                                <p>{{ $imagen->descripcion }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="carousel-indicators">
                    @foreach ($imagenes as $index => $imagen)
                        <button type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container bg-transparent">
        <div class="row px-3 grid">
            <div class="col-12">
                <h1 class="fw-bolder fs-1 my-2 text-center text-dark">Familia Total Ground</h1>
                <p class="fw-light fs-6 text-center text-dark">Encuentra la familia de Total Ground que más convenga para tu
                    proyecto.</p>
                <hr class="rounded border-4 opacity-75 w-50 mx-auto border-danger">
                    <!-- Primera Fila -->
                <ul class="row list-unstyled justify-content-center">
                    @foreach ($familiasFirst as $familia)
                        <li class="col-6 col-md-6 col-lg-2 my-3">
                            <a href="{{ route('familias.showFamilia', ['slug' => $familia->slug]) }}"
                                class="text-decoration-none">
                                <div class="menu-item_s bg-body-tertiary text-center">
                                    <div class="menu-content">
                                        <!-- Usando la columna 'icono' para la ruta de la imagen -->
                                        <img src="http://127.0.0.1:8000/storage/{{ $familia->icono }}"
                                            alt="{{ $familia->nombre }}" class="img-container_s">
                                        <span class="menu-text">{{ $familia->nombre }}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul class="row list-unstyled justify-content-center">
                    @foreach ($familiasLast as $familia)
                    <li class="col-6 col-md-6 col-lg-2 my-3">
                        <a href="{{ route('familias.showFamilia', ['slug' => $familia->slug]) }}" class="text-decoration-none">
                            <div class="menu-item_s bg-body-tertiary text-center">
                                <div class="menu-content">
                                    <img src="http://127.0.0.1:8000/storage/{{ $familia->icono }}"
                                        alt="{{ $familia->nombre }}" class="img-container_s">
                                    <span class="menu-text">{{ $familia->nombre }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="row p-3 rounded-3 my-5 bg-litle-white">
            <div class="col-12 ">
                <div class="line-text">
                    <hr>
                    <span class="fs-5 fw-medium h3_s">Destacados</span>
                </div>
                <h2 class="fw-bolder fs-2 my-2 text-start text-dark text-uppercase">La linea más top del mercado</h2>
                <p class="fw-regular fs-5 text-dark">Contamos con una gran cantidad de soluciones.</p>
                <div class="row justify-content-between py-4">
                    @php
                        $destacados = [
                            [
                                'image' => 'Proteccion.webp',
                                'title' => 'Protección',
                                'alt' => 'Protección de equipos',
                                'slug' => 'sistemas-de-puesta-a-tierra', // Slug para la URL
                            ],
                            [
                                'image' => 'tgone.jpg',
                                'title' => 'Regulación y respaldo',
                                'alt' => 'Regulación y respaldo de energía',
                                'slug' => 'iiot-tgone', // Slug para la URL
                            ],
                            [
                                'image' => 'Telemetria y control.webp',
                                'title' => 'Telemetría y control',
                                'alt' => 'Telemetría y control de dispositivos',
                                'slug' => 'telemetria-y-control', // Slug para la URL

                            ],
                        ];
                    @endphp

                    @foreach ($destacados as $destacado)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <article class="card text-bg-dark p-0">
                                <img src="{{ asset('media/' . $destacado['image']) }}" class="card-img"
                                    alt="{{ $destacado['alt'] }}">
                                <div class="card-img-overlay d-flex justify-content-end align-items-end">
                                    <a href="{{ route('familias.showFamilia', ['slug' => $destacado['slug']]) }}" class="btn btn-light text-dark stretched-link">ver más</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row p-3 bg-secondary-subtle rounded-3">
            <div class="col-12 col-lg-6 faq-left">
                <div class="line-text">
                    <hr>
                    <span class="fs-5 fw-medium h3_s">Capacitaciones</span>
                </div>
                <h2 class="fw-bold fs-2 text-dark text-uppercase">¡Nos vemos en las siguientes capacitaciones!</h2>
                <p class="fw-regular fs-5 text-dark">Consulta a un asesor para conocer los costos y beneficios que tu orgnizacion puede lograr
                    al capacitarse y certificarse de la mano de nuestro gran equipo de ingenieros
                    <b>Totalground.</b>
                </p>
                <div class="d-grid">
                    <a class="btn btn-dark mx-3" href="{{ route('CCAD.show') }}" >Da click aqui para ver más informacion</a>
                </div>
                <p class="fw-regular fs-6 text-dark text-center my-3">Comunicate con un ejecutivo para revisar <b>disponibilidad.</b></p>
            </div>
            <div class="col-12 col-lg-6 py-3">
                <div class="card shadow-lg d-flex flex-row overflow-hidden rounded-4">
                    <!-- Left Section -->
                    <div class="d-flex flex-column justify-content-between p-4 text-white btn-contact"
                        style="min-width: 150px;">
                        <div>
                            <h6 class="text-uppercase">Capacitacion</h6>
                            <h4 class="fw-bold">Protección Avanzada para Transformadores de Subestación</h4>
                        </div>
                        <a href="#" class="text-white text-end text-bolder">acceso limitado</a>

                    </div>

                    <!-- Right Section -->
                    <div class="p-4 flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="">Duracion <p class="text-danger m-0 p-0">6</p> horas</h6>

                        </div>
                        <h3>Inscribirse Ahora</h3>
                        <a href="#" class="text-uppercase btn mt-3 btn-contact text-white">Continuar</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row p-3 mt-5 custom-grid">
            <div class="col-12 col-lg-5">
                <div class="line-text">
                    <hr>
                    <span class="fs-5 fw-medium h3_s">¿Quienes Somos?</span>
                </div>
                <h2 class="fw-bold fs-2 text-uppercase">¿QUE HACEMOS?</h2>
                <p class="fw-regular fs-5">Nos dedicamos al desarrollo y fabricación de soluciones integrales para 5 de los
                    sectores más importantes de la industria</p>
                <hr class="border border-primary border-3 opacity-75 ">
            </div>
            <div class="col-12 col-lg-7 ">
                <div id="customHorizontalCarousel" class="custom-horizontal-carousel">
                    <div class="custom-horizontal-carousel-inner">
                        <div class="custom-carousel-item col-12 col-sm-12">
                            <img src="media/que-hacemos/automat_control.jpg" alt="Refrigeracion" class="img-fluid">
                        </div>
                        <div class="custom-carousel-item mx-2 col-12 col-sm-12">
                            <img src="media/que-hacemos/electrico_.jpg" alt="Telemetriaycontrol" class="img-fluid">
                        </div>
                        <div class="custom-carousel-item col-12 col-sm-12">
                            <img src="media/que-hacemos/refrig_.jpg" alt="Refrigeracion" class="img-fluid">
                        </div>
                        <div class="custom-carousel-item mx-2 col-12 col-sm-12">
                            <img src="media/que-hacemos/telecom_.jpg" alt="Telecomunicaciones" class="img-fluid">
                        </div>
                        <div class="custom-carousel-item col-12 col-sm-12">
                            <img src="media/que-hacemos/electrico_.jpg" alt="Electrico" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn rounded-1 p-2 mt-1" onclick="prevCustomSlide()"
                        style="background-color: transparent; border: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24" height="24">
                            <path class="icon-bg-arrow"
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </button>
                    <button class="btn rounded-1 p-2 mt-1 ms-1" onclick="nextCustomSlide()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24" height="24">
                            <path class="icon-bg-arrow"
                                d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-md-12 ">
                <p class="fw-regular fs-5">Diseñamos soluciones innovadoras con respaldo tecnológico que fabricamos cuidando los más estrictos
                    estándares de calidad, entre nuestras líneas de productos contamos con:</p>
            </div>
            <div class="col-md-6">
                <ul class="custom-list fs-5">
                    <li>Sistemas de tierras físicas.</li>
                    <li>Sistemas de pararrayos.</li>
                    <li>Supresores de picos transitorios.</li>
                    <li>Equipos de medición y analizadores de calidad de energía.</li>
                    <li>Equipos de automatización y control.</li>
                    <li>Bancos de capacitores.</li>
                    <li>Filtros de armónicas.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="custom-list fs-5">
                    <li>UPS (Uninterruptible Power Supply).</li>
                    <li>Torres arriostradas.</li>
                    <li>Torres de iluminación.</li>
                    <li>Luminarias ahorradoras para uso interior y exterior.</li>
                    <li>Unidades condensadoras de refrigeración.</li>
                    <li>Shelters.</li>
                    <li>Aires acondicionados tipo mochila.</li>
                </ul>
            </div>
        </div>

        <div class="row my-5">
            <div class="parallax"></div>

            <div class="parallax"></div>
        </div>
        <div class="row p-3 rounded-3 my-5 bg-secondary-subtle">
            <div class="col-12 col-md-6 ">
                <div class="faq-left">
                    <div class="line-text">
                        <hr>
                        <span class="fs-5 fw-medium h3_s">Preguntas frecuentes</span>
                    </div>
                    <h2 class="fw-bold fs-2 text-dark text-uppercase">¿Tienes alguna pregunta en mente?</h2>
                    <p class="fw-regular fs-5">Accede a nuestra sección de preguntas frecuentes, posiblemente
                        podamos ayudarte rápidamente.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="faq-section">
                    <div class="faq-content">
                        <div class="custom-accordion accordion" id="customAccordionExample">
                            <div class="custom-accordion-item">
                                <h2 class="custom-accordion-header">
                                    <button class="custom-accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#customCollapseOne"
                                        aria-expanded="false" aria-controls="customCollapseOne">
                                        ¿Cuentan los equipos de Total Ground con Certificados?
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24"
                                            height="24">
                                            <path class="icon-bg-arrow"
                                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                            </path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="customCollapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#customAccordionExample">
                                    <div class="custom-accordion-body">
                                        Nuestros equipos pueden contar con certificados ANCE, Lapem, UL.
                                        Consulta con tu ejecutivo de cuenta los certificados que aplican para cada
                                        producto.
                                    </div>
                                </div>
                            </div>
                            <div class="custom-accordion-item">
                                <h2 class="custom-accordion-header">
                                    <button class="custom-accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#customCollapseTwo"
                                        aria-expanded="false" aria-controls="customCollapseTwo">
                                        ¿Dónde puedo adquirir sus productos?
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24"
                                            height="24">
                                            <path class="icon-bg-arrow"
                                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                            </path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="customCollapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#customAccordionExample">
                                    <div class="custom-accordion-body">
                                        Tenemos una amplia red de mas de 220 puntos de venta con diversos distribuidores a lo largo de todo el territorio nacional, así como en Latinoamérica, Estados Unidos y Canadá.
                                    </div>
                                </div>
                            </div>
                            <div class="custom-accordion-item">
                                <h2 class="custom-accordion-header">
                                    <button class="custom-accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#customCollapseThree"
                                        aria-expanded="false" aria-controls="customCollapseThree">
                                        ¿Cuál es el tiempo de vida de los electrodos Total Ground?
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24"
                                            height="24">
                                            <path class="icon-bg-arrow"
                                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                            </path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="customCollapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#customAccordionExample">
                                    <div class="custom-accordion-body">
                                        Nuestros electrodos magneto activos tienen una garantía por 20 años, se sugiere valorar el tipo de terreno, para verificar si es más adecuado utilizar Acero Inoxidable o Cobre.
                                    </div>
                                </div>
                            </div>
                            <div class="custom-accordion-item">
                                <h2 class="custom-accordion-header">
                                    <a class="custom-accordion-button collapsed" type="button"
                                        href="{{ route('quienes-somos.show') }}">
                                        Resuelve todas tus dudas aquí
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="24"
                                            height="24">
                                            <path class="icon-bg-arrow"
                                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                            </path>
                                        </svg>
                                    </a>
                                </h2>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0 position-relative mt-3">
                <img src="{{ 'media/services_img/Presencia-Internacional.jpg' }}" alt=""
                    class="object-fit-cover" style="height: 500px; width:100%">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 end-0 text-white fw-bold  overlay-content"
                    style="width: 100%;">
                    <div class="d-grid gap-2 my-5">
                        <img src="{{asset('media/logo-tg-w-sm.png')}}" alt="" srcset="" class="img-fluid mx-auto d-block w-50 h-100">
                        <h6 class="h2 text-white fw-bold text-md-center mt-5">PRESENCIA DE MARCA Y NUESTRA FILOSOFÍA DE NEGOCIO</h6>
                        <a href="{{ route('quienes-somos.show') . '#presencia-marca' }}" class="btn btn-dark mx-3">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3 rounded-3 my-5 bg-litle-white">
            <div class="col-12">
                <div class="line-text mt-2">
                    <hr>
                    <span class="fs-5 fw-medium h3_s">Catalogo y Manuales</span>
                </div>
                <h2 class="fw-bold fs-2 text-dark text-uppercase">Nuestro archivo para tus soluciones favoritas</h2>
                <div id="customCarouselLg" class="carousel slide d-none d-lg-block al" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center" id="carouselItemsLg">
                                <div class="col-lg-3 item">
                                    <div class="carousel-image"
                                        style="background-image: url('{{ asset('media/manuales/9.webp') }}');">
                                        <div class="carousel-content">
                                            <span class="badge bg-danger">2024</span>
                                            <h2>Catalogo</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 item">
                                    <div class="carousel-image"
                                        style="background-image: url('{{ asset('media/manuales/fichas.jpeg') }}');">
                                        <div class="carousel-content">
                                            <h2>Fichas Técnicas</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 item">
                                    <div class="carousel-image"
                                        style="background-image: url('{{ asset('media/manuales/manuales.jpeg') }}');">
                                        <div class="carousel-content">
                                            <h2>Manuales</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 item">
                                    <div class="carousel-image"
                                        style="background-image: url('{{ asset('media/manuales/diagrama.jpeg') }}');">
                                        <div class="carousel-content">
                                            <h2>Diagramas de Conexión</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 item">
                                    <div class="carousel-image"
                                        style="background-image: url('{{ asset('media/manuales/seleccion.jpeg') }}');">
                                        <div class="carousel-content">
                                            <h2>Tablas de Selección</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="customCarouselSm" class="carousel slide d-lg-none" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image"
                                style="background-image: url('{{ asset('media/manuales/9.webp') }}');">
                                <div class="carousel-content">
                                    <span class="badge bg-danger">2024</span>
                                    <h2>Catalogo</h2>
                                    <p>Encuentra toda la familia totalground</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image"
                                style="background-image: url('{{ asset('media/manuales/fichas.jpeg') }}');">
                                <div class="carousel-content">
                                    <h2>Fichas Técnicas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image"
                                style="background-image: url('{{ asset('media/manuales/manuales.jpeg') }}');">
                                <div class="carousel-content">
                                    <h2>Manuales</h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image"
                                style="background-image: url('{{ asset('media/manuales/diagrama.jpeg') }}');">
                                <div class="carousel-content">
                                    <h2>Diagramas de Conexión</h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image"
                                style="background-image: url('{{ asset('media/manuales/seleccion.jpeg') }}');">
                                <div class="carousel-content">
                                    <h2>Tablas de Selección</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controles del carrusel pequeño -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#customCarouselSm"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#customCarouselSm"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row p-3 bg-litle-white my-5 rounded-3 bg-secondary-subtle">
            <div class="col-12 col-lg-4">
                <div class="line-text mt-2">
                    <hr>
                    <span class="fs-5 fw-medium h3_s">Multimedia</span>
                </div>
                <h2 class="fw-bold fs-2 text-dark text-uppercase">Total Ground</h2>
                <p class="fw-regular fs-5">Conoce más acerca de nuestra empresa y productos a través del
                    canal de video Total Ground en Youtube. <br>

                    En estos videos, podrás ver temas relacionados como:</p>
                <ul class="custom-list fs-5">
                    <li class="my-2">Tierras Fisicas</li>
                    <li class="my-2">Pararrayos</li>
                    <li class="my-2">Telemetria y Control Total View</li>
                    <li class="my-2">Regulacion y respaldo</li>
                </ul>
                <h4 class="fs-4 text-center text-uppercase">¡Siguenos en nuestros canales oficiales!</h4>
                <div class="col-12 d-flex justify-content-around">

                    <div class="px-4 py-2 bg-primary rounded-2 text-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 448 512" width="20px"
                            height="20px" class="">
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                        </svg>
                        <p class="fs-6 text-white">1.5K <br> Fans </p>
                    </div>
                    <div class="px-2 py-2 gradient-ig rounded-2 text-center mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 448 512" width="20px"
                            height="20px" class="">
                            <path
                                d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z" />
                        </svg>
                        <p class="fs-6 text-white">1.5K <br> Followers </p>
                    </div>
                    <div class="p-2 px-4 py-2 bg-danger rounded-2 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 576 512" width="20px"
                            height="20px" class="">
                            <path
                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                        <p class="fs-6 text-white">1.5K <br> Subs </p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-8 p-3">
                <iframe width="100%" height="550"
                    src="https://www.youtube-nocookie.com/embed/clXnUzGZIx4?si=5TIdNgGxjLVmNHyh&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="rounded-4"></iframe>
            </div>

        </div>
        @include('carousel')

    </div>
    @include('footer')
    <script>
        let currentIndex = 0;

        function updateCustomCarousel() {
            const carouselInner = document.querySelector('.custom-horizontal-carousel-inner');
            const itemWidth = document.querySelector('.custom-carousel-item').offsetWidth;
            carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }

        function prevCustomSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCustomCarousel();
            }
        }

        function nextCustomSlide() {
            const carouselInner = document.querySelector('.custom-horizontal-carousel-inner');
            const totalItems = document.querySelectorAll('.custom-carousel-item').length;
            if (currentIndex < totalItems - 3) {
                currentIndex++;
                updateCustomCarousel();
            } else {
                currentIndex = 0;
                updateCustomCarousel();
            }
        }

        function autoSlide() {
            nextCustomSlide();
        }

        // Automatically move to the next slide every 3 seconds
        setInterval(autoSlide, 3000);
    </script>

@endsection
