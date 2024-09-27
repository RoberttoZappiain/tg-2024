@include('welcome')

<div class="container">
    <div class="row d-flex ">
        <div class="col-12 col-lg-3 mt-3">
            <h3 class="fs-4 fw-regular text-start">SERVICIOS TOTALGROUND</h3>
            <div class="list-group custom-list-group gap-1 mt-3" id="list-tab" role="tablist">
                <a class="list-group-item custom-list-group-item rounded-3 {{ request('tab') == 'list-lev' ? 'active' : '' }}" id="list-lev-list" data-bs-toggle="list" href="#list-lev"
                    role="tab" aria-controls="list-lev"><i class="fa-solid fa-map-location-dot"></i>Acompañamiento
                    en Levantamientos</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-proyect-list" data-bs-toggle="list"
                    href="#list-proyect" role="tab" aria-controls="list-proyect"><i class="fa-solid fa-compass-drafting"></i>Diseño
                    de Proyectos</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-calcu-list" data-bs-toggle="list"
                    href="#list-calcu" role="tab" aria-controls="list-calcu"><i class="fa-solid fa-square-root-variable"></i>Elaboración de justificación técnicas y cálculos de proyectos</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-medicion-list" data-bs-toggle="list"
                    href="#list-medicion" role="tab" aria-controls="list-medicion"><i class="fa-solid fa-ruler-combined"></i>Toma de
                    mediciones de entrega de obra</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-resis-list" data-bs-toggle="list"
                    href="#list-resis" role="tab" aria-controls="list-resis"><i class="fa-solid fa-earth-americas"></i>Estudios de
                    Resistividad de Terreno</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-inst-list" data-bs-toggle="list"
                    href="#list-inst" role="tab" aria-controls="list-inst"><i class="fa-solid fa-circle-exclamation"></i></i>Análisis
                    de Puntos de Riesgo en Una Instalación Eléctrica</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-energy-list" data-bs-toggle="list"
                    href="#list-energy" role="tab" aria-controls="list-energy"><i class="fa-solid fa-solar-panel"></i>Elaboración de Proyectos de Ahorro de Energía</a>
                <a class="list-group-item custom-list-group-item rounded-3" id="list-ec-list" data-bs-toggle="list"
                    href="#list-ec" role="tab" aria-controls="list-ec"><i class="fa-solid fa-bolt"></i>Estudios de Calidad
                    de Energía</a>
            </div>
        </div>
        <div class="col-12 col-lg-9 mt-3 bg-secondary-subtle  rounded-3 p-3">
            <div class="tab-content" id="nav-tabContent">
                <x-tab-pane id="list-lev" title="Acompañamiento en Levantamientos"
                    content="Se tendrá el apoyo en todo momento de un Ingeniero especialista de la marca con amplio conocimiento de los productos Total Ground, además contará con la información de las normas vigentes con referencia a normas Nacionales (NOM- 001-SEDE -2015, NOM-022, STPS-2012, NMX-J-549-ANSE-2005) e internacionales (NFPA 780, UNE.21186, ANSIJ-607-STD, EIA/TIA 942, IEEE 142, IEEE 1100), y podrá ayudar a definir los alcances del proyecto."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-map-location-dot"/>

                <x-tab-pane id="list-proyect" title="Diseño de Proyectos"
                    content="Contamos con un departamento de proyectos quienes podrán apoyarles en el cálculo y diseño de la solución más optima considerando los requerimientos y necesidades de cada sitio y aplicación tecnológica en particular."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-compass-drafting"/>

                    <x-tab-pane id="list-calcu" title="Elaboración de justificación técnicas y cálculos de proyectos"
                    content="Se podrá obtener información técnica de los productos o en su defecto se podrá entregar memorias de cálculo relacionado a cada proyecto en particular."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-square-root-variable"/>

                    <x-tab-pane id="list-medicion" title="Toma de mediciones de entrega de obra"
                    content="Finalizando la instalación de un sistema Total Ground, se sugiere la revisión para realizar una medición y así poder validar el funcionamiento del sistema, con la finalidad de que cumpla con las especificaciones y normativas el cual se entregará en un reporte con las observaciones y mejoras de las instalaciones para en su defecto poder emitir nuestra garantía."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-ruler-combined"/>

                    <x-tab-pane id="list-resis" title="Estudios de resistividad de terreno"
                    content="Contamos con personal capacitado y especialistas en campo quienes podran realizar los estudios de resistividad de terreno y diseñar la solución más adecuada considerando las condiciones ambientales y los requerimientos especificos del proyecto."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-earth-americas" />

                    <x-tab-pane id="list-inst" title="Análisis de Puntos de Riesgo en Una Instalación Eléctrica"
                    content="Es de suma importancia realizar periódicamente una revisión a las instalaciones electricas con el fin de detectar los puntos de riesgo o áreas críticas que puedan originar un problema mayor, para ello contamos con el personal especializado en diversas áreas quiénes podrán ir al sitio y realizar un estudio de los puntos de riesgo de la instalación, entregando un reporte por escrito con el resultado de lo encontrado y las posibles solución en cada punto."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-circle-exclamation" />
                    <x-tab-pane id="list-energy" title="Elaboración de Proyectos de Ahorro de Energía"
                    content="Contamos con personal especializado en el desarrollo de soluciones no solo de proyección electrica si no también de ahorro de energía entendiendo, los requerimientos particulares y la necesidad de disminuir los gastos energéticos de todo tipo de usuarios."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-solar-panel" />
                    <x-tab-pane id="list-ec" title="Estudios de Calidad de Energía"
                    content="En nuestro departamento de ingeniería desarrollamos uno de los equipos de medición más completos del mercado, con el cual podemos acudir a cada instalación y realizar un ánalisis detallado de las condiciones particulares y los parametros electricos propios. Con la información recabada se podrán detectar las areas de oportunidad, puntos de riesgo y mejoras que se puedan realizar para tener instalaciones aún más eficientes, protegidas y con el menor nivel de riesgo."
                    mainImg="media/services_img/Diseno_de_proyectos.webp" :carouselImgs="[
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Innovación'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Seguridad'],
                        ['src' => 'media/services_img/Diseno_de_proyectos.webp', 'caption' => 'Capacidad'],
                    ]"
                    icon="fa-solid fa-bolt" />

            </div>
        </div>
    </div>
    <div class="row bg-secondary-subtle mt-5 rounded-4">
        <div class="d-lg-flex">
            <div class="col-12 col-lg-6">
                @if (count($logos) >= 5)
                    <div class="row d-flex gap-3 justify-content-center my-3">
                        <div class="col-5 bg-grid-logos offset-lg-1 d-flex align-items-center justify-content-center mt-3"
                            style="height:  200px; ">
                            <img src="{{ asset($logos[7]->logo_path) }}" alt="Logo 1" class="img-fluid">
                        </div>
                        <div class="col-4 bg-grid-logos d-flex align-items-center justify-content-center">
                            <img src="{{ asset($logos[12]->logo_path) }}" alt="Logo 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="row d-flex gap-3 justify-content-center my-1">
                        <div class="col-5 bg-grid-logos d-flex align-items-center justify-content-center">
                            <img src="{{ asset($logos[10]->logo_path) }}" alt="Logo 3" class="img-fluid"
                                style="height:  100px; ">
                        </div>
                        <div class="col-5 bg-grid-logos d-flex align-items-center justify-content-center">
                            <img src="{{ asset($logos[11]->logo_path) }}" alt="Logo 4" class="img-fluid">
                        </div>
                    </div>
                    <div class="row d-flex gap-3 justify-content-center my-3">
                        <div class="col-7 offset-lg-3 bg-grid-logos d-flex align-items-center justify-content-center">
                            <img src="{{ asset($logos[4]->logo_path) }}" alt="Logo 5" class="img-fluid">
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-12 col-lg-6 p-5">
                <h2 class="text-center fw-regular ">CONOCE LA FAMILIA TOTALGROUND</h2>
                <p class="text-center fs-5 fw-light">¡SOMOS TOTALGROUND, SOMOS INGENIERIA!</p>
                <hr class="border border-primary border-3 opacity-75 mx-5">
                <span class="fw-regular lh-sm fs-5">
                    Con más de 20 años en el mercado, nuestra filosofía es ofrecer valores agregador a nuestros clientes
                    no solamente con productos y soluciones, sino dándoles una amplia gama de servicios que sean un
                    respaldo directo.
                </span> <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end m-3">
                    <button class="btn btn-outline-danger btn-sm me-md-2">CONCTACTA A UN ASESOR AQUÍ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        @include('carousel', ['logos' => $logos])
    </div>
</div>
@include('footer')

<style>
    .bg-grid-logos {
        border: 5px solid white;
        border-radius: 7px;
    }

    .scale-up-center {
        -webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
        animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
    }

    @-webkit-keyframes scale-up-center {
        0% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes scale-up-center {
        0% {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .tracking-in-expand {
        -webkit-animation: tracking-in-expand 0.7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
        animation: tracking-in-expand 0.7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
    }

    @-webkit-keyframes tracking-in-expand {
        0% {
            letter-spacing: -0.5em;
            opacity: 0;
        }

        40% {
            opacity: 0.6;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes tracking-in-expand {
        0% {
            letter-spacing: -0.5em;
            opacity: 0;
        }

        40% {
            opacity: 0.6;
        }

        100% {
            opacity: 1;
        }
    }

    .slide-in-fwd-bottom {
        -webkit-animation: slide-in-fwd-bottom 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: slide-in-fwd-bottom 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    @-webkit-keyframes slide-in-fwd-bottom {
        0% {
            -webkit-transform: translateZ(-1400px) translateY(800px);
            transform: translateZ(-1400px) translateY(800px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateZ(0) translateY(0);
            transform: translateZ(0) translateY(0);
            opacity: 1;
        }
    }

    @keyframes slide-in-fwd-bottom {
        0% {
            -webkit-transform: translateZ(-1400px) translateY(800px);
            transform: translateZ(-1400px) translateY(800px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateZ(0) translateY(0);
            transform: translateZ(0) translateY(0);
            opacity: 1;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab');

        if (tab) {
            const tabPane = document.getElementById(tab);
            const tabLink = document.querySelector(`[href="#${tab}"]`);

            if (tabPane && tabLink) {
                // Activar el tab-pane correspondiente
                tabPane.classList.add('show', 'active');

                // Activar el enlace correspondiente en la lista de tabs
                tabLink.classList.add('active');
            }
        }
    });
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
