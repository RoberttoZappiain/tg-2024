@extends('welcome')

@section('content')
    @php
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-uppercase text-start text-dark fw-semibold my-3">{{ $familia->nombre }}</h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <!-- Enlace al índice de familias -->
                        <li class="breadcrumb-item">
                            <a href="{{ route('home.show') }}">Inicio</a>
                        </li>
                        <!-- Enlace a la familia actual -->
                        @if (isset($familia))
                            <li class="breadcrumb-item active d-flex" aria-current="page">
                                <a href="{{ route('familias.showFamilia', ['slug' => $familia->slug]) }}">
                                    {{ $familia->nombre }}
                                </a>
                            </li>
                        @endif
                    </ol>
                </nav>
                <!-- Fin del Breadcrumb -->

                <hr class="rounded border-secondary border-4 opacity-75">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-lg-3 min-vh-80 bg-secondary-subtle rounded-3">
                        <ul class="list-group mt-3">
                            <div class="input-group my-2">
                                <span class="input-group-text bg-body-secondary border-0 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20"
                                        width="20">
                                        <path
                                            d="M505 442.7L405.3 343c28.4-34.8 45.7-79.4 45.7-128C451 96.5 354.5 0 234.5 0S18 96.5 18 215.1s96.5 215.1 215.1 215.1c48.6 0 93.2-17.3 128-45.7l99.7 99.7c4.7 4.7 10.9 7 17.1 7s12.4-2.3 17.1-7c9.5-9.4 9.5-24.7 0-34.3zM234.5 360.2c-79.9 0-145.1-65.1-145.1-145.1S154.6 70 234.5 70s145.1 65.1 145.1 145.1-65.1 145.1-145.1 145.1z" />
                                    </svg>
                                </span>
                                <input type="text" id="searchInput" class="form-control border-0 shadow-sm"
                                    placeholder="Encuentra cualquier producto, familia o categoría..."
                                    aria-label="Encuentra cualquier producto, familia o categoría">
                            </div>
                            <div class="d-flex align-items-center p-3 rounded bg-light">
                                <div class="me-3">
                                    <img src="{{ 'media/icons/Luminarias.png' }}" alt="Protección" class="img-container_s">

                                </div>
                                <div>
                                    <h6 class="fs-6 mb-0">Categorias</h6>
                                </div>
                            </div>

                            <hr class="mx-3">
                            <ul class="list-group">
                                @foreach ($subcategorias as $subcategoria)
                                    <li
                                        class="list-group-items-menu d-flex justify-content-between align-items-center p-2 rounded-2 m-1">
                                        <!-- Enlace a la subcategoría utilizando su slug -->
                                        @if ($subcategoria->productos_count == 0)
                                            <!-- Redirigir a la nueva ruta familias.showWithoutSlug cuando productos_count es 0 -->
                                            <a href="{{ route('familias.showSubcategoria', [
                                                'categoria_slug' => $subcategoria->categoria_slug,
                                                'subcategoria_slug' => $subcategoria->slug
                                            ]) }}"
                                           class="text-decoration-none zoom-img-category">
                                           {{ $subcategoria->nombre }} <!-- Muestra el nombre de la subcategoría -->
                                        </a>
                                        @else
                                            <!-- Redirigir al enlace original si productos_count es mayor que 0 -->
                                            <a href="?subcategoria={{ $subcategoria->slug }}"
                                                class="text-decoration-none {{ $activeSubcategoria == $subcategoria->slug ? 'active-filter' : '' }} zoom-img-category">
                                                {{ $subcategoria->nombre }} <!-- Muestra el nombre de la subcategoría -->
                                            </a>
                                        @endif

                                        @if ($subcategoria->productos_count == 0)
                                            <span class="badge justify-content-between p-2 bg-white"
                                                style="background-color: var(--tg-color-rojo-oscuro);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="10"
                                                    height="10">
                                                    <!-- Ícono de Font Awesome -->
                                                    <path
                                                        d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z"
                                                        fill="#8e0000" />
                                                </svg>
                                                <!-- Muestra el icono rayo si el contador es 0 de productos -->
                                            </span>
                                        @else
                                            <!-- Mostrar la categoría a la que pertenece la subcategoría -->
                                            <span class="badge justify-content-between p-2 "
                                                style="background-color: var(--tg-color-rojo-oscuro)">
                                                {{ $subcategoria->productos_count }}
                                                <!-- Muestra la cantidad de productos -->
                                            </span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>


                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="row productos-list">
                            <!-- Mostrar productos si están disponibles -->
                            @forelse ($productos as $producto)
                                <div class="card bgs mx-1 my-2" style="max-width:480px;">
                                    <a href="{{ route('familias.show', ['categoria_slug' => $producto->categoria_slug, 'subcategoria_slug' => $producto->subcategoria_slug, 'slug' => $producto->slug]) }}"
                                        class="text-decoration-none zoom-img-category">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <img class="img-fluid rounded p-2"
                                                    src="http://127.0.0.1:8000/storage/{{ $producto->url_img_1 ?? 'ruta/por/defecto.jpg' }}"
                                                    alt="{{ $producto->slug }}">
                                            </div>
                                            <div class="col-8">
                                                <div class="card-body">
                                                    <p class="card-text badge btn-tg m-0"
                                                        style="background-color: var(--tg-color-rojo-oscuro)">
                                                        <small
                                                            class="text-white">{{ $producto->nombre_subcategoria }}</small>
                                                    </p>
                                                    <h5 class="card-title mt-3">{{ $producto->nombre }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <!-- Si no hay productos, mostrar subcategorías en su lugar -->
                                @foreach ($subcategorias as $subcategoria)
                                    <div class="card bgs mx-1 my-2" style="max-width:480px;">
                                        <a href="{{ route('familias.showSubcategoria', [
                                                'categoria_slug' => $subcategoria->categoria_slug,
                                                'subcategoria_slug' => $subcategoria->slug]) }}"
                                           class="text-decoration-none zoom-img-category">
                                           {{ $subcategoria->nombre }} <!-- Muestra el nombre de la subcategoría -->
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img class="img-fluid rounded p-2"
                                                        src="http://127.0.0.1:8000/storage/{{ $subcategoria->icono ?? 'ruta/por/defecto.jpg' }}"
                                                        alt="{{ $subcategoria->slug }}">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <p class="card-text badge btn-tg m-0"
                                                            style="background-color: var(--tg-color-rojo-oscuro)">
                                                            <small class="text-white">{{ $subcategoria->nombre }}</small>
                                                        </p>
                                                        <h5 class="card-title mt-3">{{ $subcategoria->nombre }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endforelse
                        </div>
                    </div>
                    <div class="row">
                        <!-- Paginación -->
                        <div class="d-flex justify-content-center">
                            {{ $productos->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
                @include('carousel')
            </div>
        </div>

    </div>
    @include('footer')

    <script>
        function filterBySubcategory(subcategorias) {
            $('.list-group-items-menu a').removeClass('active-filter'); // Remover la clase de todos los enlaces
            $("a[onclick=\"filterBySubcategory('" + subcategorias + "'); return false;\"]").addClass(
                'active-filter'); // Agregar la clase al enlace activo

            $.ajax({
                url: window.location.href.split('?')[0], // Tomar la URL actual sin parámetros
                type: 'GET',
                data: {
                    subcategoria: subcategorias
                },
                success: function(data) {
                    // Si es exitoso, reemplaza la parte del DOM donde se muestran los productos
                    $('.productos-list').html($(data).find('.productos-list').html());
                },
                error: function(xhr, status, error) {
                    console.error("Error en la solicitud AJAX: ", error); // Muestra un error en la consola
                }
            });
        }
    </script>
@endsection
