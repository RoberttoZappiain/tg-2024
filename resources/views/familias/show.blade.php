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
                <div class="row">
                    <div class="col-lg-2 ">
                        <div class="accordion" id="menuAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed btn-red-darks-accordion" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px" fill="gray"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M243.6 91.6L323.7 138.4C326.6 140 326.7 144.6 323.7 146.2L228.5 201.9C225.6 203.6 222.2 203.4 219.5 201.9L124.4 146.2C121.4 144.6 121.4 140 124.4 138.4L204.4 91.6V0L0 119.4V358.3L78.4 312.5V218.9C78.3 215.6 82.2 213.2 85.1 215L180.3 270.6C183.2 272.3 184.8 275.3 184.8 278.5V389.7C184.8 393 181 395.4 178.1 393.6L98 346.8L19.6 392.6L224 512L428.4 392.6L350 346.8L269.9 393.6C267.1 395.3 263.1 393.1 263.2 389.7V278.5C263.2 275.1 265.1 272.2 267.7 270.6L362.9 215C365.7 213.2 369.7 215.5 369.6 218.9V312.5L448 358.3V119.4L243.6 0V91.6z" />
                                        </svg>
                                        <span class="m-3">Ver en 3D</span>
                                    </button>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <figure class="figure">
                            <img src="http://127.0.0.1:8000/storage/{{ $producto->url_img_1 }}"
                                class="figure-img img-fluid rounded p-5 zoom-img" alt="...">
                            <figcaption class="figure-caption text-end"> <span class="text-uppercase"></span> <br> Medidas
                                del empaque:
                                {{ $producto->medida_empaq }}.
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-12 col-lg-6 text-white rounded-3">
                        <table id="table_details"
                            class="custom-table custom-table-bordered custom-table-striped custom-table-responsive"
                            summary="Details of the kit including name, subtitle, category, description, characteristics, content, type, weight per piece, packaged weight, and package dimensions.">
                            <caption class="text-center">Descripcion general del producto. Para más informacion,
                                <b>consulte a un asesor.</b>
                            </caption>
                            <thead>
                                <tr class="table-header">
                                    <th scope="col" colspan="2">DESCRIPCION GENERAL DEL PRODUCTO </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-regular"><strong class="fw-bolder text-center">Nombre del
                                            kit:</strong></td>
                                    <td class="text-uppercase">{{ $producto->nombre }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-regular"><strong class="fw-bolder">Subtitulo:</strong></td>
                                    <td>{{ $producto->subtitulo }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Categoría:</strong></td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Descripción:</strong></td>
                                    <td>{{ $producto->descripcion }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Características:</strong></td>
                                    <td>{{ $producto->caracteristicas }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Contenido:</strong></td>
                                    <td>{{ $producto->contenido }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Peso por pieza:</strong></td>
                                    <td>{{ $producto->peso_pza }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Peso con empaque:</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="togle_ficha_tecnica" class="row d-none">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div id="flush-collapseOne" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="flip-book-container" src="{{ $producto->url_ficha_tecnica }}">

                                            </div>
                                            {{-- <div id="pdf-container">
                                            <object data="{{ $pdfPath }}" type="application/pdf"
                                                width="100%" height="100%">
                                                <p>Tu navegador no soporta PDFs. Descarga el PDF para verlo: <a
                                                        href="{{ $pdfPath }}">Descargar PDF</a>.</p>
                                            </object>
                                        </div> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection
