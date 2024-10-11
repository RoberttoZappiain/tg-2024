@extends('welcome')
@section('content')
    <style>
        .carousel-image {
            position: relative;
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
        }

        .carousel-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
        }

        .carousel-content .badge {
            font-size: 1rem;
            padding: 10px;
            background-color: rgba(255, 0, 0, 0.7);
        }

        .carousel-content h2 {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .carousel-content p {
            font-size: 1.2rem;
        }

        /* Contenedor del flipbook */
        #flipbook {
            width: 100%;
            height: 100%;
            max-width: 800px;
            max-height: 600px;
            margin: 20px auto;
            border: 2px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        /* Estilos de la página */
        .page {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* Estilos del canvas */
        canvas {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* Estilos de los botones */
        .controls {
            text-align: center;
            margin: 10px 0;
        }

        .controls button {
            background-color: white;
            border: 2px solid #000;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            margin: 5px;
            font-size: 18px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .controls button i {
            color: black;
        }

        .controls button:hover {
            background-color: #f0f0f0;
            transform: scale(1.1);
        }

        /* Responsividad para pantallas pequeñas */
        @media (max-width: 768px) {
            #flipbook {
                max-width: 100%;
                max-height: 500px;
            }

            .controls button {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            #flipbook {
                max-width: 100%;
                max-height: 400px;
            }

            .controls button {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-dark fs-1 fw-semibold my-3">INFORMACIÓN TÉCNICA Y DESCARGAS</h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home.show') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active d-flex" aria-current="page">Manuales</li>
                    </ol>
                </nav>
                <!-- Carrusel -->
                <!-- Carrusel para pantallas grandes -->
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
                                            <p>Encuentra toda la familia totalground</p>
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

                <!-- Carrusel para pantallas pequeñas -->
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
        <div class="row bg-white rounded-3 my-3 p-3">
            <div class="col-12 text-start ">
                <h3>CATALOGO DE PRODUCTOS TOTALGROUND 2024</h3>
                <hr class="rounded border-secondary border-4 opacity-75">

            </div>
            <div class="col-12 d-flex">
                <div class="col-12">
                    <p class="text-start text-center">
                        Nuestra seccion de los <b>mejores</b> productos encuentra todos nuestros productos, familias y categorias y las
                        caracterisitcas e informacion relevante.</p>
                        <p class="text-center"><b>Para más información consulta a un asesor.</b></p>
                    <div id="flipbook"></div>

                    <div class="controls">
                        <button id="prevPage"><i class="fas fa-chevron-left"></i></button>
                        <button id="nextPage"><i class="fas fa-chevron-right"></i></button>
                        <button id="downloadPDF"><i class="fas fa-print"></i></button>
                        <button id="maximize"><i class="fas fa-expand"></i></button>
                    </div>
                </div>
                {{-- <div class="col-4 p-3" style="border: 3px solid var(--tg-color-marron-rojizo-oscuro)">
                    <h5>Unete a nuestro boletín informativo</h5>
                    <p class="fs-6 fw-light">No te pierdas de nuestros eventos, suscribete y recibe a tu correo nuestras
                        noticias más relevantes, guias e informacion exclusiva sobre nuevos eventos y capacitaciones.</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark">Subscribirme</button>
                    </div>
                </div> --}}
            </div>
        </div>
        @include('carousel')

    </div>
    @include('footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const flipbook = document.getElementById('flipbook');
            const pdfPath = "{{ asset('media/manuales/Catalogo-WEB-LR-B.pdf') }}"; // Ruta del PDF

            // Botones de navegación
            const nextPageBtn = document.getElementById('nextPage');
            const prevPageBtn = document.getElementById('prevPage');
            const downloadBtn = document.getElementById('downloadPDF');
            const maximizeBtn = document.getElementById('maximize');
            let currentPage = 1;

            // Evento para descargar el PDF
            downloadBtn.addEventListener('click', function() {
                window.open(pdfPath, '_blank');
            });

            // Evento para maximizar el flipbook
            maximizeBtn.addEventListener('click', function() {
                flipbook.requestFullscreen();
            });

            if (nextPageBtn && prevPageBtn) {
                // Añadir eventos de clic a los botones
                nextPageBtn.addEventListener('click', function() {
                    $('#flipbook').turn('next');
                });

                prevPageBtn.addEventListener('click', function() {
                    $('#flipbook').turn('previous');
                });
            } else {
                console.error("Botones de navegación no encontrados");
            }

            // Inicializar PDF.js
            const loadingTask = pdfjsLib.getDocument(pdfPath);
            loadingTask.promise.then(function(pdf) {
                const totalPages = pdf.numPages;

                for (let page = 1; page <= totalPages; page++) {
                    const pageDiv = document.createElement('div');
                    pageDiv.classList.add('page');
                    flipbook.appendChild(pageDiv);

                    pdf.getPage(page).then(function(pageData) {
                        const viewport = pageData.getViewport({
                            scale: 1
                        }); // Ajuste sin zoom
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;
                        pageDiv.appendChild(canvas);

                        const renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        pageData.render(renderContext).promise.then(function() {
                            $('#flipbook').turn('addPage', pageDiv, page);
                        });
                    });
                }

                // Inicializar Turn.js una vez que todas las páginas están cargadas
                setTimeout(function() {
                    $('#flipbook').turn({
                        width: 1200,
                        height: 800,
                        autoCenter: true
                    });
                }, 1000);
            });
            let currentIndex = 0;
            const items = document.querySelectorAll('#carouselItemsLg .item');
            const totalItems = items.length;

            // Mostrar los primeros 5 ítems en pantallas grandes
            function showVisibleItemsLg() {
                items.forEach((el, index) => {
                    if (index >= currentIndex && index < currentIndex + 5) {
                        el.classList.add('active');
                    } else {
                        el.classList.remove('active');
                    }
                });
            }

            // Mostrar los primeros ítems al cargar
            showVisibleItemsLg();

        });
    </script>
@endsection
