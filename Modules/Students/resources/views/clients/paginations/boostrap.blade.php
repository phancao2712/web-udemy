<div class="row justify-center pt-30">
    <div class="col-auto">
        <div class="pagination -buttons">

            @if ($paginator->onFirstPage())
                <button class="pagination__button -prev" disabled aria-disabled="true">
                    <i class="icon icon-chevron-left"></i>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination__button -prev" disabled
                    aria-disabled="true">
                    <i class="icon icon-chevron-left"></i>
                </a>
            @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span
                            class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    <div class="pagination__count">
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="-count-is-active" aria-current="page">{{ $page }}</a>
                            @else
                                <li class=""><a class="" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a rel="next" href="{{ $paginator->nextPageUrl() }}" class="pagination__button -next">
                    <i class="icon icon-chevron-right"></i>
                </a>
            @else
                <button class="pagination__button -next" disabled aria-disabled="true">
                    <i class="icon icon-chevron-right"></i>
                </button>
            @endif
        </div>
    </div>
</div>
