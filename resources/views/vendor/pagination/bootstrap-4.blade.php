@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <div class="d-flex justify-content-between">

            <ul class="pagination ">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link text-dark">Anterior</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><span class="page-link border-0 text-white-50" style="background-color: var(--tg-color-rojo-oscuro)">{{ $page }}</span></li>
                            @else
                                <li class="page-item" ><a class="page-link border-0 text-white" style="background-color: var(--tg-color-rojo-oscuro)" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link text-dark" href="{{ $paginator->nextPageUrl() }}" rel="next">Sig.</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link text-dark">Sig.</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

@endif
