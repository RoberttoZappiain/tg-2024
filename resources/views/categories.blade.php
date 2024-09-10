@include('welcome')
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

                <h1 class="text-start text-shadow">Sistemas de Tierra Física</h1>

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#" class="bread-a">Protección</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Sistemas de Tierra Fisica</li>

                    </ol>

                </nav>
                <hr class="rounded border-secondary border-4 opacity-75">

            </div>

            <div class="row ">
                @if ($tierras_fisicas->isEmpty())
                    <p>No hay datos disponibles.</p>
                @else
                    @foreach ($tierras_fisicas as $item)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="mb-4 shadow-img card text-bg-dark border-0 position-relative bg-imgs">
                                <img class="img-fluid rounded p-5 zoom-img" src="{{ $item->url_img_1 }}"
                                    alt="">
                                <div class="card-img-overlay-bottom rounded">
                                    <div class="content">
                                        <div class="d-flex flex-row">
                                            <span class="badge text-bg-danger fw-normal">Sistema Tierras Fisicas</span>
                                        </div>
                                        <span class="card-title fw-bolder text-white">{{ $item->categoria }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div> <!-- row -->

            @include('carousel', ['logos' => $logos])
        </div> <!-- row -->

    </div> <!-- container -->
</div>
    @include('footer')
