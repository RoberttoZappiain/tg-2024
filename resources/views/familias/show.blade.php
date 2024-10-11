@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-uppercase text-start text-dark fw-semibold my-3">{{ $producto->nombre }}</h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home.show') }}">Inicio</a>
                        </li>
                        <!-- Enlace a la familia -->
                        <li class="breadcrumb-item d-flex">
                            <a href="{{ route('familias.showFamilia', ['slug' => $producto->familia_slug]) }}">
                                {{ $producto->nombre_familia }}
                            </a>
                        </li>
                        <!-- Enlace a la categoría -->
                        <li class="breadcrumb-item d-flex">
                            <a href="{{ route('familias.showFamilia', ['slug' => $producto->familia_slug]) }}">
                                {{ $producto->nombre_categoria }}
                            </a>
                        </li>
                        <!-- Enlace a la subcategoría -->
                        <li class="breadcrumb-item d-flex">
                            <a href="{{ route('familias.showFamilia', ['slug' => $producto->familia_slug]) }}">
                                {{ $producto->nombre_subcategoria }}
                            </a>
                        </li>
                        <!-- Producto actual (breadcrumb activo) -->
                        <li class="breadcrumb-item active d-flex" aria-current="page">
                            {{ $producto->nombre }}
                        </li>
                    </ol>
                </nav>
                <!-- Fin del Breadcrumb -->

                <hr class="rounded border-secondary border-4 opacity-75">

                <!-- Detalles del producto -->
                <div class="row bg-white">
                    <div class="col-lg-2 order-2 p-3">
                        <div class="accordion" id="menuAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button id="toggle1" class="accordion-button collapsed btn-red-darks-accordion"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" fill="gray"
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                        </svg>
                                        <span class="m-3">Características del producto</span>
                                    </button>
                                </h2>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="id_ficha_tecnica">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" fill="gray"
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
                                        </svg>
                                        <span class="m-3">Ficha Técnica</span>
                                    </button>
                                </h2>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="id_manual_tecnico">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" fill="gray"
                                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z" />
                                        </svg>
                                        <span class="m-3">Manual de Instalación</span>
                                    </button>
                                </h2>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="id_ficha_3d">
                                    <button id="toggle2" class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" fill="gray"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M243.6 91.6L323.7 138.4C326.6 140 326.7 144.6 323.7 146.2L228.5 201.9C225.6 203.6 222.2 203.4 219.5 201.9L124.4 146.2C121.4 144.6 121.4 140 124.4 138.4L204.4 91.6V0L0 119.4V358.3L78.4 312.5V218.9C78.3 215.6 82.2 213.2 85.1 215L180.3 270.6C183.2 272.3 184.8 275.3 184.8 278.5V389.7C184.8 393 181 395.4 178.1 393.6L98 346.8L19.6 392.6L224 512L428.4 392.6L350 346.8L269.9 393.6C267.1 395.3 263.1 393.1 263.2 389.7V278.5C263.2 275.1 265.1 272.2 267.7 270.6L362.9 215C365.7 213.2 369.7 215.5 369.6 218.9V312.5L448 358.3V119.4L243.6 0V91.6z" />
                                        </svg>
                                        <span class="m-3">Ver en 3D</span>
                                    </button>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-0 ">
                        <div id="content1">
                            <figure class="figure">
                                <!-- Imagen principal -->
                                <div class="main-image m-3 bg-secondary-subtle rounded-3 position-relative"
                                    style="border: 3px solid var(--tg-color-gris)">
                                    <img id="mainImage" src="http://127.0.0.1:8001/storage/{{ $producto->url_img_1 }}"
                                        class="figure-img img-fluid rounded p-5 zoom-img " alt="Imagen principal">

                                    <!-- Botón de ampliar en la esquina inferior derecha -->
                                    <button class="btn btn-light position-absolute" style="bottom: 10px; right: 10px;"
                                        onclick="openImageInModal()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                            class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 1h5v1H2v4H1V1z" />
                                            <path fill-rule="evenodd" d="M10 1h5v5h-1V2h-4V1z" />
                                            <path fill-rule="evenodd" d="M10 14h5v-5h-1v4h-4v1z" />
                                            <path fill-rule="evenodd" d="M1 10h1v4h4v1H1v-5z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="row d-flex justify-content-around">
                                    <!-- Primer item -->

                                    <!-- Segundo item -->
                                    <div class="col-3 col-md-3 bg-secondary-subtle rounded-2">
                                        <div class="item">
                                            <a href="#"
                                                onclick="changeMainImage('http://127.0.0.1:8001/storage/{{ $producto->url_img_1 }}')">
                                                <img src="http://127.0.0.1:8001/storage/{{ $producto->url_img_1 }}"
                                                    class="img-fluid w-100" alt="Imagen 2">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Tercer item -->
                                    <div class="col-3 col-md-3 bg-secondary-subtle rounded-2">
                                        <div class="item">
                                            <a href="#"
                                                onclick="changeMainImage('http://127.0.0.1:8001/storage/{{ $producto->url_img_1 }}')">
                                                <img src="http://127.0.0.1:8001/storage/{{ $producto->url_img_1 }}"
                                                    class="img-fluid w-100" alt="Imagen 3">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Cuarto item -->
                                    <div class="col-3 col-md-3 bg-secondary-subtle rounded-2">
                                        <div class="item">
                                            <a href="#"
                                                onclick="changeMainImage('http://127.0.0.1:8001/storage/{{ $producto->url_img_2 }}')">
                                                <img src="http://127.0.0.1:8001/storage/{{ $producto->url_img_2 }}"
                                                    class="img-fluid w-100" alt="Imagen 4">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <figcaption class="figure-caption text-end"> <span class="text-uppercase"></span> <br>
                                    Medidas
                                    del empaque:
                                    {{ $producto->medida_empaq }}.
                                </figcaption> --}}
                            </figure>
                            <!-- Modal para mostrar la imagen ampliada -->
                            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Cerrar"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modalImage" src="" class="img-fluid rounded"
                                                alt="Imagen ampliada">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="content2" style="display:none; height:100%"">
                            <div id="3d-viewer" class="mx-auto rounded-4 position-relative "
                                style="width: 80%; height:100%">
                                <div id="controls" class="position-absolute d-flex" style="bottom: 10px; right: 10px;">
                                    <button id="rotateLeft" class="btn btn-light me-2 rounded-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="black" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 1 1 .908-.418A6 6 0 1 1 8 2v1z" />
                                            <path d="M8 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0v-4A.5.5 0 0 1 8 1z" />
                                            <path
                                                d="M8 4.5a.5.5 0 0 1 .5.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v4z" />
                                        </svg>
                                    </button>

                                    <button id="rotateRight" class="btn btn-light me-2 rounded-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="black" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 1 0-.908-.418A6 6 0 1 0 8 2v1z" />
                                            <path d="M8 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0v-4A.5.5 0 0 1 8 1z" />
                                            <path
                                                d="M8 4.5a.5.5 0 0 1 .5.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v4z" />
                                        </svg>
                                    </button>
                                    <button id="toggleRotation" class="btn btn-light me-2 rounded-4">
                                        <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="black" class="bi bi-play-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11.596 8.697l-6.363 4.692C4.05 13.713 3 13.264 3 12.43V3.57c0-.835 1.05-1.283 1.233-.96l6.363 4.692a1 1 0 0 1 0 1.394z" />
                                        </svg>
                                        <svg id="stopIcon" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="black" class="bi bi-stop-fill" viewBox="0 0 16 16"
                                            style="display: none;">
                                            <path
                                                d="M5.5 3.5A.5.5 0 0 1 6 3h4a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5H6a.5.5 0 0 1-.5-.5v-9z" />
                                        </svg>
                                    </button>
                                    <!-- Botón para ampliar el visor 3D en un modal -->
                                    <button id="expandModel" class="btn btn-light me-2 rounded-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="black" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 1h5v1H2v4H1V1z" />
                                            <path fill-rule="evenodd" d="M10 1h5v5h-1V2h-4V1z" />
                                            <path fill-rule="evenodd" d="M10 14h5v-5h-1v4h-4v1z" />
                                            <path fill-rule="evenodd" d="M1 10h1v4h4v1H1v-5z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal de Bootstrap para mostrar el modelo 3D en pantalla completa -->
                    <div class="modal fade" id="model3DModal" tabindex="-1" aria-labelledby="model3DModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Contenedor para el visor 3D dentro del modal -->
                                    <div id="3d-viewer-modal" style="width: 100%; height: 500px;">
                                        <!-- Controles para el modelo 3D dentro del modal -->
                                        <div id="modal-controls" class="position-absolute d-flex"
                                            style="bottom: 10px; right: 10px;">
                                            <button id="modalRotateLeft" class="btn btn-light me-2 rounded-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="black" class="bi bi-arrow-counterclockwise"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 1 1 .908-.418A6 6 0 1 1 8 2v1z" />
                                                    <path d="M8 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0v-4A.5.5 0 0 1 8 1z" />
                                                    <path
                                                        d="M8 4.5a.5.5 0 0 1 .5.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v4z" />
                                                </svg>
                                            </button>

                                            <button id="modalRotateRight" class="btn btn-light me-2 rounded-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="black" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 1 0-.908-.418A6 6 0 1 0 8 2v1z" />
                                                    <path d="M8 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0v-4A.5.5 0 0 1 8 1z" />
                                                    <path
                                                        d="M8 4.5a.5.5 0 0 1 .5.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v4z" />
                                                </svg>
                                            </button>

                                            <button id="modalToggleRotation" class="btn btn-light rounded-4">
                                                <svg id="modalPlayIcon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="black" class="bi bi-play-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.596 8.697l-6.363 4.692C4.05 13.713 3 13.264 3 12.43V3.57c0-.835 1.05-1.283 1.233-.96l6.363 4.692a1 1 0 0 1 0 1.394z" />
                                                </svg>
                                                <svg id="modalStopIcon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="black" class="bi bi-stop-fill"
                                                    viewBox="0 0 16 16" style="display: none;">
                                                    <path
                                                        d="M5.5 3.5A.5.5 0 0 1 6 3h4a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5H6a.5.5 0 0 1-.5-.5v-9z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-white rounded-3 order-1 align-self-stretch d-flex p-3">

                        <table id="table_details"
                            class="custom-table custom-table-bordered custom-table-striped custom-table-responsive "
                            summary="Details of the kit including name, subtitle, category, description, characteristics, content, type, weight per piece, packaged weight, and package dimensions.">
                            <caption class="text-center">Descripcion general del producto. <br> Para más informacion,
                                <b>consulte a un asesor.</b>
                            </caption>
                            <thead>
                                <tr class="table-header">
                                    <th scope="col" colspan="2">DESCRIPCION GENERAL DEL PRODUCTO </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-regular"><strong class="fw-bolder text-center">Rango:</strong></td>
                                    <td class="text-uppercase">{{ $producto->rango }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-regular"><strong class="fw-bolder">Alimentacion:</strong></td>
                                    <td>{{ $producto->alimentacion }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Dimensiones:</strong></td>
                                    <td>{{ $producto->dimensiones }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Material:</strong></td>
                                    <td>{{ $producto->material }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Caracteristicas:</strong></td>
                                    <td>{{ $producto->caracteristicas }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Garantía:</strong></td>
                                    <td>{{ $producto->garantia }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">De la familia:</strong></td>
                                    <td>{{ $producto->nombre_familia }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="togle_ficha_tecnica" class="row">

                        </div>
                        <div id="togle_manual_tecnico" class="row d-none">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div id="flush-collapseOne" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div id="pdf-container">
                                                <object data="{{ $producto->url_manual }}" type="application/pdf"
                                                    width="100%" height="100%">
                                                    <p>Tu navegador no soporta PDFs. Descarga el PDF para verlo: <a
                                                            href="{{ $producto->url_manual }}">Descargar PDF</a>.</p>
                                                </object>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="togle_model_3d" class="row d-none">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div id="flush-collapseOne" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div id="modelViewer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin de Detalles del producto -->
                <hr class="rounded border-secondary border-4 opacity-75">
                <div class="row rounded-3 p-3 my-2 bg-light">
                    <h2 class="fs-2 fw-normal mb-4">Productos relacionados con <span
                            class="text-lowercase">{{ $producto->nombre_subcategoria }}</span></h2>

                    @foreach ($productosRelacionados as $relacionado)
                        <div class="col-md-3 col-sm-6 mb-4 d-flex align-items-stretch">
                            <div class="card shadow-sm h-100 border-0 rounded-3">
                                <!-- Imagen del producto -->
                                <img src="http://127.0.0.1:8000/storage/{{ $relacionado->url_img_1 }}"
                                    class="card-img-top img-fluid rounded-top" alt="{{ $relacionado->nombre }}"
                                    style="max-height: 200px; object-fit: cover;">

                                <div class="card-body d-flex flex-column">
                                    <!-- Título del producto -->
                                    <h5 class="card-title text-center fw-bold">{{ $relacionado->nombre }}</h5>

                                    <!-- Descripción del producto -->
                                    @if (!empty($relacionado->descripcion))
                                        <p class="card-text text-muted text-center">
                                            {{ Str::limit($relacionado->descripcion, 80, '...') }}</p>
                                    @else
                                        <p class="card-text text-muted text-center">Descripción no disponible.</p>
                                    @endif

                                    <!-- Características o información adicional del producto -->
                                    @if (!empty($relacionado->caracteristicas))
                                        <p class="card-text text-muted text-center"><strong>Características:</strong>
                                            {{ Str::limit($relacionado->caracteristicas, 50, '...') }}</p>
                                    @endif

                                    <!-- Precio o cualquier otro campo adicional -->
                                    @if (!empty($relacionado->precio))
                                        <p class="card-text text-success text-center fw-bold">{{ $relacionado->precio }}
                                            USD</p>
                                    @else
                                        <p class="card-text text-muted text-center">Precio no disponible.</p>
                                    @endif

                                    <!-- Botón Ver Producto respetando el diseño original -->
                                    <a href="{{ route('familias.show', [
                                        'categoria_slug' => $relacionado->categoria_slug,
                                        'subcategoria_slug' => $relacionado->subcategoria_slug,
                                        'slug' => $relacionado->slug,
                                    ]) }}"
                                        class="btn btn-contact mt-auto align-self-center w-100 p-2 rounded-pill text-uppercase"
                                        style="background-color: var(--tg-color-rojo-oscuro); color: white;">Ver
                                        Producto</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="table my-4">
                    <table class="table table-borderless align-middle text-center">
                        <thead class=" text-white">
                            <!-- Imagen del producto -->
                            <tr>
                                <td></td>
                                <td class="bg-light">
                                    <img src="http://127.0.0.1:8000/storage/{{ $producto->url_img_1 ?? 'ruta/por/defecto.jpg' }}"
                                        alt="{{ $producto->nombre }}" class="img-thumbnail"
                                        style="width: 100px; height: auto;">
                                </td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td>
                                        <img src="http://127.0.0.1:8000/storage/{{ $comparar->url_img_1 ?? 'ruta/por/defecto.jpg' }}"
                                            alt="{{ $comparar->nombre }}" class="img-thumbnail"
                                            style="width: 100px; height: auto;">
                                    </td>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="py-5">
                                <th></th>
                                <!-- Producto que se está consultando, resaltado -->
                                <th class="text-dark fw-bold fs-5">{{ $producto->nombre }} <br> <span
                                        class="badge rounded-pill"
                                        style="background-color: var(--tg-color-rojo-oscuro)">(Producto Principal)</span>
                                </th>
                                <!-- Productos relacionados para comparar -->
                                @foreach ($productosParaComparar as $comparar)
                                    <th class="fw-normal align-middle">{{ $comparar->nombre }}</th>
                                @endforeach
                            </tr>
                            <!-- Comparar Descripción -->
                            <tr class="">
                                <td><strong>Descripción</strong></td>
                                <td class="bg-light">{{ $producto->descripcion ?? 'N/A' }}</td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td>{{ $comparar->descripcion ?? 'N/A' }}</td>
                                @endforeach
                            </tr>

                            <!-- Comparar Características -->
                            <tr>
                                <td><strong>Características</strong></td>
                                <td class="bg-light">{{ $producto->caracteristicas ?? 'N/A' }}</td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td>{{ $comparar->caracteristicas ?? 'N/A' }}</td>
                                @endforeach
                            </tr>

                            <!-- Comparar Precio -->
                            <tr>
                                <td><strong>Precio</strong></td>
                                <td class="bg-light text-success fw-bold">{{ $producto->precio ?? 'N/A' }}</td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td class="text-success">{{ $comparar->precio ?? 'N/A' }}</td>
                                @endforeach
                            </tr>

                            <!-- Comparar Peso -->
                            <tr>
                                <td><strong>Peso</strong></td>
                                <td class="bg-light">{{ $producto->peso_pza ?? 'N/A' }}</td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td>{{ $comparar->peso_pza ?? 'N/A' }}</td>
                                @endforeach
                            </tr>

                            <!-- Comparar Medida Empaque -->
                            <tr>
                                <td><strong>Medida Empaque</strong></td>
                                <td class="bg-light">{{ $producto->medida_empaq ?? 'N/A' }}</td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td>{{ $comparar->medida_empaq ?? 'N/A' }}</td>
                                @endforeach
                            </tr>

                            <!-- Comparar Ficha Técnica -->
                            <tr>
                                <td><strong>Ficha Técnica</strong></td>
                                <td class="bg-light">
                                    @if ($producto->url_ficha_tecnica)
                                        <a href="{{ $producto->url_ficha_tecnica }}" target="_blank"
                                            class="btn btn-info btn-sm">Ver Ficha</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                @foreach ($productosParaComparar as $comparar)
                                    <td>
                                        @if ($comparar->url_ficha_tecnica)
                                            <a href="{{ $comparar->url_ficha_tecnica }}" target="_blank"
                                                class="btn btn-info btn-sm">Ver Ficha</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @include('carousel')
        </div>
    </div>
    @include('footer')
    <script>
        var viewerInitialized = false;
        var modalInitialized = false;
        var renderer, scene, camera, controls;
        var modalRenderer, modalScene, modalCamera, modalControls;
        var model, modalModel;
        var isAutoRotating = false; // Rotación automática del visor normal
        var isAutoRotatingModal = false; // Rotación automática del visor modal

        // Controlar el toggle entre content1 y content2
        document.getElementById('toggle1').addEventListener('click', function() {
            var content1 = document.getElementById('content1');
            var content2 = document.getElementById('content2');

            if (content1.style.display === "none") {
                content1.style.display = "block";
                content2.style.display = "none";
            } else {
                content1.style.display = "none";
            }
        });

        document.getElementById('toggle2').addEventListener('click', function() {
            var content1 = document.getElementById('content1');
            var content2 = document.getElementById('content2');

            if (content2.style.display === "none") {
                content2.style.display = "block";
                content1.style.display = "none";

                // Inicializar el visor 3D solo la primera vez
                if (!viewerInitialized) {
                    load3DModel('/models/chemground.glb');
                    viewerInitialized = true;
                }
            } else {
                content2.style.display = "none";
            }
        });

        // Función para cargar el modelo en el visor normal (div)
        function load3DModel(modelPath) {
            var container = document.getElementById('3d-viewer');

            if (!renderer) {
                // Crear el renderizador para el visor normal
                renderer = new THREE.WebGLRenderer({
                    antialias: true
                });
                renderer.setSize(container.clientWidth, container.clientHeight);
                renderer.setClearColor(0xffffff, 1); // Fondo blanco
                container.appendChild(renderer.domElement);

                // Crear la escena y la cámara
                scene = new THREE.Scene();
                camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
                camera.position.set(0, 2, 5);
                scene.add(new THREE.DirectionalLight(0xffffff, 1)); // Agregar luz

                // Añadir controles de rotación (OrbitControls)
                controls = new THREE.OrbitControls(camera, renderer.domElement);
                controls.enableDamping = true;
                controls.dampingFactor = 0.25;
                controls.enableZoom = true; // Permitir zoom

                // Pausar rotación automática al arrastrar el modelo
                controls.addEventListener('start', function() {
                    isAutoRotating = false;
                });

                // Reiniciar rotación automática después de arrastrar el modelo
                controls.addEventListener('end', function() {
                    setTimeout(function() {
                        isAutoRotating = true;
                    }, 1000);
                });
            }

            // Cargar el archivo .glb
            var loader = new THREE.GLTFLoader();
            loader.load(modelPath, function(gltf) {
                model = gltf.scene;
                scene.add(model);

                // Animar el modelo dentro del visor normal
                function animate() {
                    requestAnimationFrame(animate);
                    controls.update();

                    // Rotación automática si está habilitada
                    if (isAutoRotating) {
                        model.rotation.y += 0.01;
                    }

                    renderer.render(scene, camera);
                }
                animate();

                // Controlar la rotación manual del modelo con los botones
                document.getElementById('rotateLeft').addEventListener('click', function() {
                    model.rotation.y -= 0.1; // Rotar a la izquierda
                    isAutoRotating = false; // Pausar la rotación automática
                });

                document.getElementById('rotateRight').addEventListener('click', function() {
                    model.rotation.y += 0.1; // Rotar a la derecha
                    isAutoRotating = false; // Pausar la rotación automática
                });

                // Botón de Play/Stop para la rotación automática en el visor normal
                document.getElementById('toggleRotation').addEventListener('click', function() {
                    isAutoRotating = !isAutoRotating; // Cambiar el estado de la rotación automática

                    document.getElementById('playIcon').style.display = isAutoRotating ? 'none' : 'inline';
                    document.getElementById('stopIcon').style.display = isAutoRotating ? 'inline' : 'none';
                });

            }, undefined, function(error) {
                console.error('Error al cargar el modelo en el visor normal:', error);
            });

            // Ajustar el tamaño del renderizador y la cámara cuando se redimensiona el contenedor o la ventana
            window.addEventListener('resize', function() {
                var width = container.clientWidth;
                var height = container.clientHeight;
                renderer.setSize(width, height);
                camera.aspect = width / height;
                camera.updateProjectionMatrix();
            });
        }

        // Función para cargar el modelo en el modal
        function load3DModelInModal(modelPath) {
            var container = document.getElementById('3d-viewer-modal');

            if (!modalRenderer) {
                modalRenderer = new THREE.WebGLRenderer({
                    antialias: true
                });
                modalRenderer.setSize(container.clientWidth, container.clientHeight);
                modalRenderer.setClearColor(0xffffff, 1); // Fondo blanco
                container.appendChild(modalRenderer.domElement);

                modalScene = new THREE.Scene();
                modalCamera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
                modalCamera.position.set(0, 2, 5); // Posición de la cámara
                modalScene.add(new THREE.DirectionalLight(0xffffff, 1)); // Agregar luz

                modalControls = new THREE.OrbitControls(modalCamera, modalRenderer.domElement);
                modalControls.enableDamping = true;
                modalControls.dampingFactor = 0.25;
                modalControls.enableZoom = true;

                modalControls.addEventListener('start', function() {
                    isAutoRotatingModal = false; // Detener la rotación automática cuando se arrastra
                });

                modalControls.addEventListener('end', function() {
                    setTimeout(function() {
                        isAutoRotatingModal = true; // Reiniciar la rotación automática después del arrastre
                    }, 1000);
                });
            }

            // Cargar el archivo .glb en el modal
            var loader = new THREE.GLTFLoader();
            loader.load(modelPath, function(gltf) {
                modalModel = gltf.scene;
                modalScene.add(modalModel);

                // Animar el modelo dentro del modal
                function animateModal() {
                    requestAnimationFrame(animateModal);

                    if (isAutoRotatingModal) {
                        modalModel.rotation.y += 0.01;
                    }

                    modalControls.update();
                    modalRenderer.render(modalScene, modalCamera);
                }
                animateModal();

                // Controlar la rotación manual del modelo en el modal con los botones
                document.getElementById('modalRotateLeft').addEventListener('click', function() {
                    modalModel.rotation.y -= 0.1; // Rotar a la izquierda
                    isAutoRotatingModal = false; // Pausar la rotación automática
                });

                document.getElementById('modalRotateRight').addEventListener('click', function() {
                    modalModel.rotation.y += 0.1; // Rotar a la derecha
                    isAutoRotatingModal = false; // Pausar la rotación automática
                });

                // Botón de Play/Stop para la rotación automática en el modal
                document.getElementById('modalToggleRotation').addEventListener('click', function() {
                    isAutoRotatingModal = !isAutoRotatingModal;

                    document.getElementById('modalPlayIcon').style.display = isAutoRotatingModal ? 'none' :
                        'inline';
                    document.getElementById('modalStopIcon').style.display = isAutoRotatingModal ?
                        'inline' : 'none';
                });

            }, undefined, function(error) {
                console.error('Error al cargar el modelo en el modal:', error);
            });

            // Ajustar el tamaño del renderizador y la cámara cuando se redimensiona el contenedor o la ventana
            window.addEventListener('resize', function() {
                var width = container.clientWidth;
                var height = container.clientHeight;
                modalRenderer.setSize(width, height);
                modalCamera.aspect = width / height;
                modalCamera.updateProjectionMatrix();
            });
        }

        // Evento para abrir el modal y cargar el modelo en él
        document.getElementById('expandModel').addEventListener('click', function() {
            var modal = new bootstrap.Modal(document.getElementById('model3DModal'));
            modal.show();

            if (!modalInitialized) {
                setTimeout(function() {
                    load3DModelInModal('/models/chemground.glb');
                }, 500); // Esperar a que el modal termine de abrirse

                modalInitialized = true; // Marcar como inicializado
            }
        });

        // Limpiar el contenido del modal cuando se cierra
        document.getElementById('model3DModal').addEventListener('hidden.bs.modal', function() {
            modalScene.remove(modalModel); // Remover el modelo de la escena
            modalInitialized = false; // Reiniciar el estado de inicialización
        });

        // Agregar un evento de clic a los botones del acordeón para cambiar el fondo activo
        var buttons = document.querySelectorAll('.accordion-button');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                buttons.forEach(function(btn) {
                    btn.classList.remove('btn-red-darks-accordion');
                });
                this.classList.add('btn-red-darks-accordion');
            });
        });
        // Función para cambiar la imagen principal
        function changeMainImage(newSrc) {
            var mainImage = document.getElementById('mainImage');
            if (mainImage) {
                mainImage.src = newSrc; // Cambia la fuente de la imagen principal
            }
        }
        // Función para abrir el modal con la imagen principal
        function openImageInModal() {
            var mainImageSrc = document.getElementById('mainImage').src; // Obtener la ruta de la imagen principal
            document.getElementById('modalImage').src = mainImageSrc; // Pasar la ruta al modal

            var modal = new bootstrap.Modal(document.getElementById('imageModal')); // Inicializar el modal
            modal.show(); // Mostrar el modal
        }
    </script>
@endsection
