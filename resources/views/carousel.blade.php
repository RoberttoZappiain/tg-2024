
<div id="carouselMarcasExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner carrousel_family mb-5">
        @foreach($logos as $index => $logo)
            @if($index % 5 == 0)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="carousel-marcas-inner">
            @endif

            <div class="carousel-marcas-item">
                <img src="{{ asset($logo->logo_path) }}" class="d-block w-100 p-5" alt="Logo">
            </div>

            @if(($index + 1) % 5 == 0 || $index + 1 == count($logos))
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
