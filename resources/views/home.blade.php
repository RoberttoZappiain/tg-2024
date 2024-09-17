@extends('welcome')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
@section('title', 'Quienes Somos')

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
        <div class="row">

            <div class="row px-3 grid bg-items-menu">
                <div class="col-12">
                    <h1 class="fw-bolder fs-1 my-2 text-center text-dark">Familia Total Ground</h1>
                    <p class="fw-light fs-6 text-center text-dark">Encuentra la familia de Total Ground que más convenga para tu proyecto.</p>

                    <!-- Primera Fila -->
                    <ul class="row list-unstyled justify-content-center">
                        @foreach($familias as $familia)
                        <li class="col-6 col-md-6 col-lg-{{ $loop->last ? '6' : '2' }} my-3">
                            <a href="{{ route('familias.showFamilia', ['slug' => $familia->slug]) }}" class="text-decoration-none">
                                <div class="menu-item_s bg-body-tertiary text-center">
                                    <div class="menu-content">
                                        <!-- Usando la columna 'icono' para la ruta de la imagen -->
                                        <img src="http://127.0.0.1:8000/storage/{{ $familia->icono }}" alt="{{ $familia->nombre }}" class="img-container_s">
                                        <span class="menu-text">{{ $familia->nombre }}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="row py-5 mt-5">
                <div class="col-12 ">
                    <h2 class="fw-bolder fs-2 my-2 text-start text-dark">Productos Destacados</h2>
                    <span class="fw-light fs-6 text-start text-dark">Contamos con una gran cantidad de soluciones.</span>
                    <div class="row justify-content-between py-4">
                        @php
                            $destacados = [
                                [
                                    'image' => 'Proteccion.webp',
                                    'title' => 'Protección',
                                    'alt' => 'Protección de equipos',
                                ],
                                [
                                    'image' => 'Regulacion y respaldo.webp',
                                    'title' => 'Regulación y respaldo',
                                    'alt' => 'Regulación y respaldo de energía',
                                ],
                                [
                                    'image' => 'Telemetria y control.webp',
                                    'title' => 'Telemetría y control',
                                    'alt' => 'Telemetría y control de dispositivos',
                                ],
                            ];
                        @endphp

                        @foreach ($destacados as $destacado)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <article class="card text-bg-dark p-0">
                                    <img src="{{ asset('media/' . $destacado['image']) }}" class="card-img"
                                        alt="{{ $destacado['alt'] }}">
                                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                                        <a href="#" class="btn btn-light text-dark stretched-link">ver más</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row py-5 mt-5 bg-secondary-subtle rounded-3">
                <div class="col-12 col-md-6 ">
                    <div class="faq-left">
                        <div class="line-text">
                            <hr>
                            <span class="fs-5 fw-medium h3_s">Capacitaciones</span>
                        </div>
                        <h2 class="fw-bold fs-2 text-dark">¡Nos vemos en las siguientes capacitaciones!</h2>
                        <p class=" fw-regular text-dark">Comunicate con nosotros para revisar la <b>disponibilidad.</b>
                            <br> Consulta a un asesor para conocer los costos y beneficios que tu orgnizacion puede lograr
                            al capacitarse y certificarse de la mano de nuestro gran equipo de ingenieros
                            <b>Totalground.</b></p>
                        <div class="d-grid">
                            <button class="btn btn-secondary btn-block">Da click aqui para ver más informacion</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card shadow-lg d-flex flex-row overflow-hidden" style="border-radius: 20px;">
                        <!-- Left Section -->
                        <div class="d-flex flex-column justify-content-between p-4 text-white bg-red-intenso"
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
                            <a href="#" class="text-uppercase btn mt-3 bg-red-intenso text-white">Continuar</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row px-2 py-5 mt-5 custom-grid">
                <div class="col-12 col-lg-5">
                    <h2 class="fw-bold fs-2">¿QUE HACEMOS?</h2>
                    <span>Nos dedicamos al desarrollo y fabricación de soluciones integrales para 5 de los sectores más
                        importantes de la industria</span>
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
                    <h3>Diseñamos soluciones innovadoras con respaldo tecnológico que fabricamos cuidando los más estrictos
                        estándares de calidad, entre nuestras líneas de productos contamos con:</h3>
                </div>
                <div class="col-md-6">
                    <ul class="custom-list">
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
                    <ul class="custom-list">
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
            <div class="row px-5 py-5 d-flex justify-content-center bg-items-menu-rows">
                <div class="col-12 col-md-6 ">
                    <div class="faq-left">
                        <div class="line-text">
                            <hr>
                            <span class="fs-5 fw-medium h3_s">Preguntas frecuentes</span>
                        </div>
                        <h2 class="fw-bold fs-2 text-dark">¿Tienes alguna pregunta en mente?</h2>
                        <p class="lh-sm fw-bold text-dark">Accede a nuestra sección de preguntas frecuentes, posiblemente
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
                                            Placeholder content for this accordion, which is intended to demonstrate the
                                            <code>.custom-accordion-flush</code> class. This is the second item's accordion
                                            body. Let's imagine this being filled with some actual content.
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
                                            Placeholder content for this accordion, which is intended to demonstrate the
                                            <code>.custom-accordion-flush</code> class. This is the third item's accordion
                                            body. Nothing more exciting happening here in terms of content, but just filling
                                            up the space to make it look, at least at first glance, a bit more
                                            representative of how this would look in a real-world application.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-items-menu bg-white my-3">
                <div class="parallax"></div>
                <div class="d-flex flex-column flex-md-row justify-content-center p-0">

                    {{-- <div class="col-12 col-md-4">
                    <div class="image-container invisible-toggle-img">
                        <img src="{{ 'media/mision.webp' }}" alt="" class="img-fluid object-fit-cover ">
                        <div class="position-absolute text-white text-center">
                            <h1 class="fw-bold text-white">MISIÓN</h1>
                            <span class="lh-normal fw-normal text-start invisible-toggle">Expandir nuestro mercado de
                                distribución
                                Nacional e
                                Internacional para consolidarnos como fabricantes líderes en el mercado eléctrico, de
                                telecomunicaciones y automatización.
                            </span>
                            <hr class="border border-secondary border-3 opacity-75 rounded-4 mx-5">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="image-container invisible-toggle-img">
                        <img src="{{ 'media/Visión.webp' }}" alt="" class="img-fluid object-fit-cover">
                        <div class="position-absolute text-white text-center">
                            <h1 class="fw-bold text-white">VISIÓN</h1>
                            <span class="lh-normal fw-normal text-start invisible-toggle">
                                Diseñar, fabricar, desarrollar, comercializar equipos y tecnología de calidad para la
                                protección y calidad de energía eléctrica, cubriendo las necesidades de nuestros
                                clientes y del mercado.
                            </span>
                            <hr class="border border-secondary border-3 opacity-75 rounded-4 mx-5">
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="image-container invisible-toggle-img">
                        <img src="{{ 'media/Valores.webp' }}" alt="" class="img-fluid object-fit-cover">
                        <div class="position-absolute text-white text-center mt-5">
                            <h1 class="fw-bold text-white ">VALORES</h1>
                            <div class="row invisible-toggle">
                                <span class="lh-normal fw-normal text-start">Nos caracterizan nueve valores
                                    fundamentales que son:</span>
                                <div class="col-6">
                                    <ul class="lh-sm lh-md-normal fw-normal text-start fs-6 text-shadow-paralax">
                                        <li>Compromiso</li>
                                        <li>Satisfacer las expectativas y necesidades de nuestros clientes.</li>
                                        <li>Mejora continua.</li>
                                        <li>Calidad</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="lh-sm lh-md-normal fw-normal text-start fs-6 text-shadow-paralax">
                                        <li>Responsabilidad</li>
                                        <li>Ética.</li>
                                        <li>Desarrollo de personal</li>
                                        <li>Trabajo en equipo</li>
                                        <li>Responsabilidad ambiental</li>
                                    </ul>
                                </div>
                                <hr class="border border-secondary border-3 opacity-75 rounded-4 mx-5">
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
                <div class="parallax"></div>
            </div>
            <div class="row p-0 m-0">
                <div class="col-12 p-0 position-relative">
                    <img src="{{ 'media/services_img/Presencia-Internacional.jpg' }}" alt=""
                        class="object-fit-cover" style="height: 650px; width:100%">
                    <div class="d-flex align-items-center justify-content-end position-absolute top-0 end-0 text-white fw-bold p-3 overlay-content"
                        style="width: 100%;">
                        <div class="me-5">
                            <h6 class="h2 text-white fw-bold text-md-start">PRESENCIA DE MARCA</h6>
                            <span class="fs-6 fw-light lh-sm">
                                Con oficinas corporativas, planta de producción en Zapopan, Jalisco, oficinas de atención de
                                CDMX y especialistas técnicos en las principales ciudades del país mediante lo cual damos
                                atención a lo largo y ancho de la república mexicana.
                                <span class="">Contamos con cobertura en todo el país mediante nuestros
                                    distribuidores autorizados
                                    quienes
                                    nos ayudan a llevar nuestras soluciones hasta donde sean requeridos.
                                    Exportamos nuestras soluciones a más de 12 países del centro y Sudamérica así como a
                                    Estados
                                    Unidos y Canadá.</span> <br> <br>
                            </span>
                            <h2 class="text-white fw-bold text-md-start d-none d-lg-block">NUESTRA FILOSOFÍA DE NEGOCIO
                            </h2>
                            <span class="fs-6 fw-light lh-sm text-start d-none d-lg-block">
                                En Total Ground suministramos productos y servicios de alta calidad elaborados bajo los
                                parámetros de ingeniería más estrictos y avanzados, estamos comprometidos con el cambio
                                permanente que implica innovar, y con la creación de valor que buscamos al ofrecer mejores
                                productos y servicios a nuestros clientes que satisfagan sus necesidades y excedan sus
                                expectativas. <br>
                                ▸ Creamos relaciones de negocio a largo plazo, productivas para ambas partes basadas en la
                                lealtad al canal. <br>
                                ▸ Apoyamos a nuestros canales de distribución quienes facilitan la llegada de nuestros
                                productos al usuario final. <br>
                                ▸ Nos comprometemos a entregar lo mejor de nuestros productos, con el mejor tiempo de
                                entrega al mejor costo.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 p-0 m-3 ratio-21x9">

                    <iframe width="100%" height="550"
                        src="https://www.youtube.com/embed/clXnUzGZIx4?si=5TIdNgGxjLVmNHyh&amp;controls=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="rounded-4"></iframe>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="line-text mt-2">
                        <hr>
                        <span class="fs-3 fw-medium h3_s">Multimedia</span>
                    </div>
                    <h2 class="fw-bold fs-2 text-secondary">Total Ground</h2>
                    <span class="fw-medium fs-4 text-dark">Conoce más acerca de nuestra empresa y productos a través del
                        canal de video Total Ground en Youtube. <br>

                        En estos videos, podrás ver temas relacionados como:</span>
                    <ul class="custom-list fs-5 my-5 text-dark fw-medium">
                        <li class="my-2">Tierras Fisicas</li>
                        <li class="my-2">Pararrayos</li>
                        <li class="my-2">Telemetria y Control Total View</li>
                        <li class="my-2">Regulacion y respaldo</li>
                    </ul>
                    <div class="d-grid gap-2 col-6 my-3">
                        <button class="btn btn-red-darks btn-sm fs-5 rounded-2">Conoce Más <svg
                                xmlns="http://www.w3.org/2000/svg" height="15px" fill="white"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
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
    <script>
        var captions = [{
                title: "IoT",
                text: "Descubre las soluciones que tenemos para la industria tecnologia 4.0"
            },
            {
                title: "Second slide label",
                text: "Imagenes de caracter ilustrativo, para mas informacion consulte a un asesor."
            },
            {
                title: "Third slide label",
                text: "Imagenes de caracter ilustrativo, para mas informacion consulte a un asesor."
            }
        ];

        var currentCaption = 0;

        function changeCaption(index) {
            currentCaption = index;
            document.getElementById('carouselCaption1').classList.add('d-none');
            document.getElementById('carouselCaption2').classList.add('d-none');
            document.getElementById('carouselCaption3').classList.add('d-none');

            document.getElementById('carouselCaption' + (index + 1)).classList.remove('d-none');
            document.getElementById('carouselText').innerText = captions[index].text;
            var indicators = document.querySelectorAll('.carousel-indicators button');
            indicators.forEach(function(indicator, idx) {
                indicator.classList.toggle('active', idx === index);
            });
        }

        function prevCaption() {
            currentCaption = (currentCaption === 0) ? captions.length - 1 : currentCaption - 1;
            changeCaption(currentCaption);
        }

        function nextCaption() {
            currentCaption = (currentCaption === captions.length - 1) ? 0 : currentCaption + 1;
            changeCaption(currentCaption);
        }

        // Initialize the first caption
        changeCaption(0);

        // Automatically cycle through captions
        setInterval(function() {
            nextCaption();
        }, 5000); // Change caption every 3 seconds
    </script>

@endsection
