@if ($paginator->hasPages())
<div class="pagination2-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
    <ul class="pagination2">
        {{-- Previous Page Link --}}
        <li class="pagination2-item--wide first {{ $paginator->onFirstPage() ? 'disabled' : '' }}"> <a href="{{ $paginator->previousPageUrl() }}" class="pagination2-link--wide first" href="#">Previous</a> </li>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination2-item is-active"> <a class="pagination2-link">{{ $page }}</a> </li>
                    @else
                        <li class="pagination2-item"> <a class="pagination2-link" href="{{ $url }}">{{ $page }}</a> </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        <li class="pagination2-item--wide last {{ $paginator->hasMorePages() ? '' : 'disabled'}}"> <a href="{{ $paginator->nextPageUrl() }}" class="pagination2-link--wide last" href="#">Next</a> </li>

    </ul>
</div>

@endif
