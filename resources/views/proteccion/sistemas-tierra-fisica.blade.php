@extends('welcome')
@php
    function getCategoriaRoute($table, $categoria)
    {
        return route('categoria.show', ['table' => $table, 'categoria' => \Str::slug($categoria, '-')]);
    }
@endphp
@section('title', 'Categorias')
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('media/proteccion-web-lg.webp') }}" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div>
                    <h1 class="text-start text-dark">Sistemas de Tierra Física</h1>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="bread-a">Protección</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sistemas de Tierra Fisica</li>
                        </ol>
                    </nav>
                    <hr class="rounded border-secondary border-4 opacity-75">
                </div>

                <div class="row ms-2 my-3">
                    @if ($tierras_fisicas->isEmpty())
                        <p>No hay datos disponibles.</p>
                    @else
                        @foreach ($tierras_fisicas as $item)
                            <div class="card bgs mx-1 my-2" style="max-width: 640px;">
                                <a href="{{ getCategoriaRoute('tierras_fisicas', $item->categoria) }}"
                                    class="text-decoration-none zoom-img-category">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <img class="img-fluid rounded p-2 " src="{{ $item->url_img_1 }}"
                                                alt="{{ $item->categoria }}">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body">
                                                <p class="card-text  badge btn-tg m-0"><small
                                                        class="text-white">{{ $item->badge }}</small></p>
                                                <h5 class="card-title">{{ $item->categoria }}</h5>
                                                <p class="card-text fw-light">{{ $item->caracteristicas }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div> <!-- row -->
                @include('carousel', ['logos' => $logos])
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    @include('footer')
@endsection
