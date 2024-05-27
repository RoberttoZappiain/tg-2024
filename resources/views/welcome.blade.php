<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Título de la página -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Enlace al archivo CSS compilado -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div id="app">
        @include('navbar')
    </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
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
