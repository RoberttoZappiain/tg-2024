@extends('welcome')
@section('title', 'Categorias - Pararrayos')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-start text-dark">Sistemas de Pararrayos</h1>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="bread-a">Protección</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sistemas de Pararrayos</li>
                        </ol>
                    </nav>
                <hr class="rounded border-secondary border-4 opacity-75">
        </div>
        <div class="row ms-2 my-3">
            @if ($categorias->isEmpty())
                <p>No hay datos disponibles.</p>
            @else
                @foreach ($categorias as $item)
                    <div class="card bgs mx-1 my-2" style="max-width: 640px;">
                           <div class="text-decoration-none zoom-img-category">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img class="img-fluid rounded p-2 " src=""
                                        alt="">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <p class="card-text badge btn-tg m-0"><small
                                                class="text-white"></small></p>
                                        <h5 class="card-title">{{ $item->categoria }}</h5>
                                        <p class="card-text fw-light">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                @endforeach
            @endif
        </div> <!-- row -->
    </div>
</div>
@endsection