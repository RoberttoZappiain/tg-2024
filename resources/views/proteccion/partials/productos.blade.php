@foreach ($productos as $producto)
<div class="col-6 col-md-6 col-lg-3">
    <a href="{{ route('proteccion.show', ['categoria_slug' => $categoria->slug, 'subcategoria_slug' => $producto->subcategoria_slug, 'slug' => $producto->slug]) }}" class="text-decoration-none">
        <div class="mb-4 shadow-img card border-0 position-relative">
            <img class="img-fluid rounded p-3 zoom-img" src="{{ asset($producto->url_img_1) }}" alt="">
            <div class="card-body bg-white p-2">
                <span class="card-title fw-bolder text-dark text-uppercase">{{ $producto->nombre_kit }}</span>
                <span class="badge bg-secondary text-white">{{ $producto->nombre_subcategoria }}</span> <!-- Badge gris -->
                <hr>
                <span class="fw-light text-dark card-text">{{ $producto->contenido }}</span>
            </div>
            <div class="d-flex align-items-end">
                <button type="button" class="btn btn-sm text-secondary">Mostrar más detalles</button>
            </div>
        </div>
    </a>
</div>
@endforeach
