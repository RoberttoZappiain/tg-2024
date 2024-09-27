<div class="tab-pane fade" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}-list">
    <div class="d-flex">
        <div class="p-2 w-100">
            <h2 class="fs-2 fw-light text-dark tracking-in-expand">{{ $title }}</h2>
        </div>
        <div class="p-2 flex-shrink-1"><i class="{{ $icon }}" style="background-color: transparent !important;"></i></div>
    </div>
    <hr class="btn-contact border-2  ">
    <p class="fs-6 fw-regular text-dark">{{ $content }}</p>
    <div class="col-12 ">
        <img src="{{ asset($mainImg) }}"
            class="img-fluid rounded mx-auto d-block shadow p-3 mb-2 bg-body-tertiary scale-up-center" alt="..."
            style="height: 200px">
    </div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carouselImgs->chunk(3) as $index => $chunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="d-flex text-center justify-content-center gap-2 p-3">
                        @foreach ($chunk as $img)
                            <div class="col-4">
                                <figure class="figure">
                                    <img src="{{ asset($img['src']) }}"
                                        class="figure-img img-fluid rounded h-100 slide-in-fwd-bottom" alt="...">
                                    <figcaption class="figure-caption text-end badge text-bg-light">
                                        {{ $img['caption'] }}</figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
