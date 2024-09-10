@extends('welcome')

@section('content')
@php
    $categoriaSinSlug = str_replace('-', ' ', $categoria->nombre_categoria);
    $subcategoriaSinSlug = str_replace('-', ' ', $subcategoria->nombre_subcategoria);
@endphp
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-start">Productos de {{ $subcategoriaSinSlug }}</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categorías</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('proteccion.index', ['categoria_slug' => $categoria->slug]) }}">{{ $categoriaSinSlug }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $subcategoriaSinSlug }}</li>
                </ol>
            </nav>
            <!-- Fin del Breadcrumb -->

            <hr class="rounded border-secondary border-4 opacity-75">

            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-6 col-md-6 col-lg-3">
                        <a href="{{ route('proteccion.show', ['categoria_slug' => \Str::slug($categoria->slug), 'subcategoria_slug' => \Str::slug($subcategoria->slug), 'slug' => \Str::slug($producto->slug)]) }}" class="text-decoration-none">
                            <div class="mb-4 shadow-img card border-0 position-relative">
                                <img class="img-fluid rounded p-3 zoom-img" src="{{ asset($producto->url_img_1) }}" alt="">
                                <div class="card-body bg-white p-2">
                                    <span class="card-title fw-bolder text-dark text-uppercase">{{ $producto->nombre_kit }}</span>
                                    <hr>
                                    <span class="fw-light text-dark card-text">{{ $producto->contenido }}</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <span class="badge bg-secondary">{{ $producto->subcategoria->nombre_subcategoria }}</span>
                                    <button type="button" class="btn btn-sm text-secondary">Mostrar más detalles</button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
