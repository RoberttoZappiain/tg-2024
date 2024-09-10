@include('welcome')
@php
    $categoriaSinSlug = str_replace('-', ' ', $kit->categoria);
    $nombreSinSlug = str_replace('-', ' ', $kit->nombre_kit);
@endphp
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div>
                <h1 class="text-start text-dark fw-regular text-uppercase">{{ $nombreSinSlug }}</h1>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="bread-a">Protección</a></li>
                        <li class="breadcrumb-item bread-a"><a href="{{ route('categorias.index') }}"> Sistemas de
                                Tierra Fisica </a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('categoria.show', ['table' => 'tierras_fisicas', 'categoria' => \Str::slug($kit->categoria, '-')]) }}">{{ $categoriaSinSlug }}</a>
                        </li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page">{{ $nombreSinSlug }}</li>
                    </ol>
                </nav>
                <hr class="rounded border-secondary border-4 opacity-75">
                <div class="row">
                    <div class="col-lg-2 ">
                        <div class="accordion" id="menuAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed btn-red-darks-accordion" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px"
                                            fill="gray"
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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px"
                                            fill="gray"
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
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px"
                                            fill="gray"
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
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" width="15px"
                                        fill="gray"
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
                            <img src="{{ asset($kit->url_img_1) }}" class="figure-img img-fluid rounded p-5 zoom-img"
                                alt="...">
                            <figcaption class="figure-caption text-end"> <span
                                    class="text-uppercase">{{ $nombreSinSlug }}</span> <br> Medidas del empaque:
                                {{ $kit->MEDIDA_EMPAQUE }}.
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-12 col-lg-6 text-white rounded-3">
                        <table id="table_details"
                            class="custom-table custom-table-bordered custom-table-striped custom-table-responsive"
                            summary="Details of the kit including name, subtitle, category, description, characteristics, content, type, weight per piece, packaged weight, and package dimensions.">
                            <caption class="text-center">Descripcion general del producto {{ $nombreSinSlug }}. Para más informacion,
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
                                    <td class="text-uppercase">{{ $kit->nombre_kit }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-regular"><strong class="fw-bolder">Subtitulo:</strong></td>
                                    <td>{{ $kit->subtitulo }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Categoría:</strong></td>
                                    <td>{{ $kit->categoria }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Descripción:</strong></td>
                                    <td>{{ $kit->descripcion }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Características:</strong></td>
                                    <td>{{ $kit->caracteristicas }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Contenido:</strong></td>
                                    <td>{{ $kit->contenido }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Peso por pieza:</strong></td>
                                    <td>{{ $kit->PESO_PZA_5u }}</td>
                                </tr>
                                <tr>
                                    <td><strong class="fw-bolder">Peso con empaque:</strong></td>
                                    <td>{{ $kit->PESO_CON_EMPAQUE_5u }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="togle_ficha_tecnica" class="row d-none">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <div id="flush-collapseOne" class="accordion-collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="flip-book-container" src="{{ $pdfPath }}">

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
                                                <object data="{{ $pdfPathManual }}" type="application/pdf"
                                                    width="100%" height="100%">
                                                    <p>Tu navegador no soporta PDFs. Descarga el PDF para verlo: <a
                                                            href="{{ $pdfPathManual }}">Descargar PDF</a>.</p>
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
                <div class="row">
                    <div class="col-12">
                        <h2>Productos Relacionados</h2>
                        <hr class="">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Mantener el primer ítem con la clase activada por defecto
        $('#headingOne button').addClass('btn-red-darks-accordion');

        $('#headingOne button').click(function() {
            $('#table_details').removeClass('d-none');
            $('#togle_ficha_tecnica').addClass('d-none');
            $('#togle_manual_tecnico').addClass('d-none');
            $('.accordion-button').removeClass('btn-red-darks-accordion');
            $(this).addClass('btn-red-darks-accordion');
        });

        $('#id_ficha_tecnica button').click(function() {
            $('#togle_ficha_tecnica').removeClass('d-none');
            $('#table_details').addClass('d-none');
            $('#togle_manual_tecnico').addClass('d-none');
            $('.accordion-button').removeClass('btn-red-darks-accordion');
            $(this).addClass('btn-red-darks-accordion');
        });

        $('#id_manual_tecnico button').click(function() {
            $('#togle_manual_tecnico').removeClass('d-none');
            $('#table_details').addClass('d-none');
            $('#togle_ficha_tecnica').addClass('d-none');
            $('.accordion-button').removeClass('btn-red-darks-accordion');
            $(this).addClass('btn-red-darks-accordion');
        });
        $('#id_ficha_3d button').click(function() {
            $('#togle_model_3d').removeClass('d-none');
            $('#table_details').addClass('d-none');
            $('#togle_ficha_tecnica').addClass('d-none');
            $('#togle_manual_tecnico').addClass('d-none');
            $('.accordion-button').removeClass('btn-red-darks-accordion');
            $(this).addClass('btn-red-darks-accordion');
        });
    });
</script>  
<script>
    // Scene setup
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, 500 / 500, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true }); // Enable transparency and antialiasing
    renderer.setSize(500, 500);
    renderer.setPixelRatio(window.devicePixelRatio); // Improve resolution on high-DPI devices
    renderer.setClearColor(0x000000, 0); // Set the background color to transparent
    document.getElementById('modelViewer').appendChild(renderer.domElement);

    // Lighting
    const ambientLight = new THREE.AmbientLight(0x404040); // soft white light
    scene.add(ambientLight);
    const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
    directionalLight.position.set(5, 10, 7.5).normalize();
    scene.add(directionalLight);

    // OrbitControls
    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true; // an animation loop is required when either damping or auto-rotation are enabled
    controls.dampingFactor = 0.25;
    controls.screenSpacePanning = false;
    controls.maxPolarAngle = Math.PI / 2;

    // Load FBX model
const loader = new THREE.FBXLoader();
loader.load("{{ $url_model_3d }}", function(object) {
    // Adjust the position and rotation of the model
    object.position.set(0, -2, 0); // Lower the model on the Y-axis
    object.rotation.y = -80 * (Math.PI / 180); // Rotate the model 10 degrees to the left
    object.scale.set(0.01, 0.01, 0.01); // Adjust scale if needed
    scene.add(object);

    // Center the camera
    const box = new THREE.Box3().setFromObject(object);
    const center = box.getCenter(new THREE.Vector3());
    const size = box.getSize(new THREE.Vector3());

    const maxDim = Math.max(size.x, size.y, size.z);
    const fov = camera.fov * (Math.PI / 180);
    let cameraZ = Math.abs(maxDim / 2 * Math.tan(fov * 2)); // Adjust this value to control the zoom level
    cameraZ *= 2.5; // Add some space around the object

    // Set camera position and point it at the front of the model
    camera.position.set(center.x, center.y, cameraZ);
    camera.lookAt(center);

    const minZ = box.min.z;
    const cameraToFarEdge = minZ < 0 ? -minZ + cameraZ : cameraZ;

    camera.far = cameraToFarEdge * 3;
    camera.updateProjectionMatrix();
}, undefined, function(error) {
    console.error(error);
});

    // Animation loop
    function animate() {
        requestAnimationFrame(animate);
        controls.update(); // only required if controls.enableDamping = true, or if controls.autoRotate = true
        renderer.render(scene, camera);
    }
    animate();

    // Handle window resize
    window.addEventListener('resize', function() {
        const width = 500;
        const height = 500;
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    });
</script>