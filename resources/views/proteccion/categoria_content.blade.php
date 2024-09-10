@include('welcome')
@php
    $categoriaSinSlug = str_replace('-', ' ', $categoria);
@endphp
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div>
                <h1 class="text-start">{{ $categoriaSinSlug }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="bread-a">Protección</a></li>
                        <li class="breadcrumb-item bread-a"><a href="{{ route('categorias.index') }}"> Sistemas de Tierra Fisica </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $categoriaSinSlug }}</li>
                    </ol>
                </nav>
                <hr class="rounded border-secondary border-4 opacity-75">
                <div class="row">
                    @foreach ($items as $item)
                        <div class="col-6 col-md-6 col-lg-3">
                            <a href="{{ route('kit.detail', ['table' => $table, 'categoria' => \Str::slug($categoria, '-'), 'nombre_kit' => \Str::slug($item->nombre_kit, '-')]) }}"
                                class="text-decoration-none">
                                <div class="mb-4 shadow-img card border-0 position-relative" style="min-height: 500px">
                                    <img class="img-fluid rounded p-3 zoom-img" src="{{ asset($item->url_img_1) }}" alt="">
                                    <div class="card-body bg-white p-2">
                                        <span class="card-title fw-bolder text-dark text-uppercase">{{ $item->nombre_kit }}</span>
                                        <hr>
                                        <span class="fw-light text-dark card-text">{{ $item->contenido }}</span>
                                    </div>
                                    <div class="d-flex aling-items-end">
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
</div>