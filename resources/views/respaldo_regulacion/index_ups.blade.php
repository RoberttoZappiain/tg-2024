@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-start text-dark fw-semibold">
                    @if ($productos->isNotEmpty())
                        {{ $productos->first()->categoria }}
                    @endif
                </h1>
            </div>
        </div>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Productos</a></li>
                <li class="breadcrumb-item d-flex"><a href="#">Respaldo y Regulación</a></li>

                @if (Route::currentRouteName() == 'respaldo_regulacion.ups.index' || Route::currentRouteName() == 'respaldo_regulacion.ups.show')
                    <li class="breadcrumb-item d-flex"><a href="{{ route('respaldo_regulacion.ups.index') }}">UPS</a></li>
                @elseif(Route::currentRouteName() == 'respaldo_regulacion.reguladores.index' || Route::currentRouteName() == 'respaldo_regulacion.reguladores.show')
                    <li class="breadcrumb-item d-flex"><a href="{{ route('respaldo_regulacion.reguladores.index') }}">Reguladores</a></li>
                @endif

                @if (Route::currentRouteName() == 'respaldo_regulacion.ups.show' || Route::currentRouteName() == 'respaldo_regulacion.reguladores.show')
                    <li class="breadcrumb-item d-flex active" aria-current="page">{{ $producto->nombre_kit }}</li>
                @endif
            </ol>
        </nav>
        <hr class="rounded border-secondary border-4 opacity-75">

        <!-- Productos -->
        <div class="row">
             <!-- Filtro de Subtítulos -->
             <div class="col-lg-2 min-vh-100 bg-secondary-subtle rounded-3">
                <ul class="list-group mt-3">
                    <div class="d-flex align-items-center p-3 rounded bg-light">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="28"
                                width="28">
                                <path
                                    d="M3.9 54.9C10.5 40.9 24.5 32 40 32l432 0c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9 320 448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6l0-79.1L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" />
                            </svg>
                        </div>
                        <div>
                            <h6 class="fs-5 mb-0">Filtrar Por Categoria:</h6>
                        </div>
                    </div>
                    <hr class="mx-3">
                    @foreach ($subtitulos as $subtitulo)
                        <li class="list-group-items-menu d-flex justify-content-between align-items-center p-2 rounded-2 m-1">
                            <a href="?subtitulo={{ urlencode($subtitulo) }}"
                               class="text-decoration-none {{ request('subtitulo') == $subtitulo ? 'active-filter' : '' }}">
                                {{ $subtitulo }}
                            </a>
                            <span class="badge justify-content-between p-2"
                                  style="background-color: var(--tg-color-rojo-oscuro)">
                                {{ $productos->where('subtitulo', $subtitulo)->count() }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-10">
                <div class="row productos-list">
                    @foreach ($productos as $producto)
                        <div class="card bgs mx-1 my-2" style="max-width:540px;">
                            <a href="{{ route('respaldo_regulacion.ups.show', ['slug' => $producto->slug]) }}" class="text-decoration-none zoom-img-category">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img class="img-fluid rounded p-2" src="{{ asset($producto->url_img_1) }}" alt="{{ $producto->slug }}">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <p class="card-text badge btn-tg m-0" style="background-color: var(--tg-color-rojo-oscuro)">
                                                <small class="text-white">{{ $producto->nombre_subcategoria }}</small>
                                            </p>
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

        <!-- Paginación -->

    </div>
@endsection
