<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.14/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.14/main.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Título de la página -->
    <title>@yield('title', 'Total Ground')</title>

</head>

<body style="">

    @include('navbar')
    <div id="app">

        <div class="content">
            @yield('content')
        </div>
        <div id="preloader">
            <div class="spinner"></div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <!-- Three.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <!-- FBXLoader CDN -->
    <script src="https://cdn.jsdelivr.net/gh/mrdoob/three.js@r128/examples/js/loaders/FBXLoader.js"></script>
    <!-- fflate.min.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/fflate@0.8.2/umd/index.min.js"></script>
     <!-- OrbitControls CDN -->
     <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

    <script>
        // JavaScript para ocultar el preloader una vez que la página ha cargado
        window.addEventListener('load', function() {
            var preloader = document.getElementById('preloader');
            preloader.style.display = 'none';
        });
    </script>
    <script>
        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation(); // Evita que el menú desplegable se cierre

                const icon = this.querySelector('.dropdown-icon');
                const allIcons = document.querySelectorAll('.accordion-button .dropdown-icon');

                allIcons.forEach(i => {
                    if (i !== icon) {
                        i.classList.remove('open');
                    }
                });

                icon.classList.toggle('open');

                // Colapsar otros elementos del acordeón
                document.querySelectorAll('.accordion-collapse').forEach(collapse => {
                    if (collapse !== document.querySelector(this.getAttribute('data-bs-target'))) {
                        collapse.classList.remove('show');
                    }
                });
            });
        });

        // Evita que el menú se cierre cuando se hace clic dentro del acordeón
        document.querySelectorAll('.accordion-collapse').forEach(collapse => {
            collapse.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        // Evita que el menú se cierre cuando se hace clic en cualquier parte del acordeón
        document.querySelectorAll('.accordion-body').forEach(body => {
            body.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>

</body>

</html>
