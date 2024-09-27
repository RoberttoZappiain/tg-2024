    @extends('welcome')

    @section('content')
        @php
            $categoriaSinSlug = str_replace('-', ' ', $categoria->nombre_categoria);
            $activeSubcategoria = request('subcategoria'); // Obtener la subcategoría activa del query string
            $subcategoriasOrdenadas = $subcategorias->sortBy('nombre_subcategoria');

        @endphp
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h1 class="text-start text-dark fw-semibold my-3">Sistemas de {{$categoriaSinSlug}}</h1>

                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item d-flex"><a href="{{ route('categorias.index') }}">Productos</a></li>
                            <li class="breadcrumb-item d-flex"><a href="{{ route('categorias.index') }}">Protección</a></li>
                            <li class="breadcrumb-item active text-uppercase" aria-current="page"> Sistemas
                                {{ $categoria->nombre_categoria }}</li>
                        </ol>

                    </nav>
                    <!-- Fin del Breadcrumb -->

                    <hr class="rounded border-secondary border-4 opacity-75">
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-lg-3 min-vh-80 bg-secondary-subtle rounded-3">


                            <ul class="list-group mt-3">
                                <div class="d-flex align-items-center p-3 rounded bg-light">
                                    <div class="me-3">
                                        <img src="{{ 'media/icons/Luminarias.png' }}" alt="Protección"
                                        class="img-container_s">

                                    </div>
                                    <div>
                                        <h6 class="fs-5 mb-0">Filtrar Por Categoria:</h6>
                                    </div>
                                </div>
                                <div class="input-group p-2">
                                    <span class="input-group-text bg-body-secondary border-0 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20" width="20">
                                            <path
                                                d="M505 442.7L405.3 343c28.4-34.8 45.7-79.4 45.7-128C451 96.5 354.5 0 234.5 0S18 96.5 18 215.1s96.5 215.1 215.1 215.1c48.6 0 93.2-17.3 128-45.7l99.7 99.7c4.7 4.7 10.9 7 17.1 7s12.4-2.3 17.1-7c9.5-9.4 9.5-24.7 0-34.3zM234.5 360.2c-79.9 0-145.1-65.1-145.1-145.1S154.6 70 234.5 70s145.1 65.1 145.1 145.1-65.1 145.1-145.1 145.1z" />
                                        </svg>
                                    </span>
                                    <input type="text" id="searchInput" class="form-control border-0 shadow-sm" placeholder="Encuentra cualquier producto, familia o categoría..." aria-label="Encuentra cualquier producto, familia o categoría">
                                </div>
                                <hr class="mx-3">
                                @foreach ($subcategoriasOrdenadas as $subcategoria)
                                    <li class="list-group-items-menu d-flex justify-content-between align-items-center p-2 rounded-2 m-1">
                                        <a href="?subcategoria={{ $subcategoria->slug }}"
                                            class="text-decoration-none {{ $activeSubcategoria == $subcategoria->slug ? 'active-filter' : '' }}">
                                            {{ $subcategoria->nombre_subcategoria }}
                                        </a>
                                        <span class="badge justify-content-between p-2"
                                            style="background-color: var(--tg-color-rojo-oscuro)">{{ $subcategoria->productos_count }}</span>
                                    </li>
                                @endforeach
                                <hr class="mx-3">
                                <li class="list-group-items-menu d-flex justify-content-between align-items-center p-2 rounded-2 m-1"><a href="" class="text-decoration-none">Pararrayos</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="row productos-list">
                                @foreach ($productos as $producto)
                                    <div class="card bgs mx-1 my-2" style="max-width:480px;">
                                        <a href="{{ route('proteccion.show', ['categoria_slug' => $categoria->slug, 'subcategoria_slug' => $producto->subcategoria_slug, 'slug' => $producto->slug]) }}"
                                            class="text-decoration-none zoom-img-category">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img class="img-fluid rounded p-2" src="{{ asset($producto->url_img_1) }}"
                                                        alt="{{ $producto->slug }}">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <p class="card-text badge btn-tg m-0" style="background-color: var(--tg-color-rojo-oscuro)"> <small class="text-white">{{ $producto->nombre_subcategoria }}</small></p>
                                                        <h5 class="card-title mt-3">{{ $producto->nombre_kit }}</h5>

                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <!-- Paginación -->
                        <div class="d-flex justify-content-center">
                            {{ $productos->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
            @include('carousel')

        </div>
        @include('footer')

        <script>
            function filterBySubcategory(subcategoriaSlug) {
                $('.list-group-items-menu a').removeClass('active-filter'); // Remover la clase de todos los enlaces
                $("a[onclick=\"filterBySubcategory('" + subcategoriaSlug + "'); return false;\"]").addClass(
                    'active-filter'); // Agregar la clase al enlace activo

                $.ajax({
                    url: window.location.href.split('?')[0], // Tomar la URL actual sin parámetros
                    type: 'GET',
                    data: {
                        subcategoria: subcategoriaSlug
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
