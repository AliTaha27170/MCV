@if ($paginator->hasPages())
    <ul class="pagenation-parent" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pre-btn disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                {{-- <span class="page-link" aria-hidden="true">&lsaquo;</span> --}}
                <a class="fa fa-angle-left" aria-hidden="true"></a>
            </li>
        @else
            <li class="pre-btn">
                <a class="fa fa-angle-left" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                    @else
                        <li class=""><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="nxt-btn">
                <a class="fa fa-angle-right" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"></a>
            </li>
        @else
            <li class="nxt-btn disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <a class="fa fa-angle-right" aria-hidden="true"></a>
            </li>
        @endif
    </ul>
@endif
