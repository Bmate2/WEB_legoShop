<style>
    .paginator {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .paginator ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .paginator li {
        margin-right: 10px;
    }

    .paginator a, .paginator span {
        color: #D53A2E;
        padding: 6px 10px;
        text-decoration: none;
        border-radius: 3px;
    }

    .paginator a:hover {
        background-color: #D53A2E;
        color: #FFF;
    }

    .paginator .active span {
        background-color: #D53A2E;
        color: #FFF;
    }

    .paginator .disabled span {
        color: #AAA;
        cursor: not-allowed;
    }

    .paginator i {
        font-size: 14px;
        margin-right: 5px;
    }
</style>

<span class="d-none d-lg-block"> 
@if ($paginator->hasPages())
    <nav class="paginator">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><span><i class="fas fa-angle-double-left"></i><</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-angle-double-left"></i><</a></li>
            @endif

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
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-angle-double-right">></i></a></li>
            @else
                <li class="disabled"><span><i class="fas fa-angle-double-right"></i></span></li>
            @endif
        </ul>
    </nav>
@endif
</span>

<div class="d-flex justify-content-center">
    <p class="small text-muted ">
        {!! __('Showing') !!}
        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
        {!! __('to') !!}
        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
        {!! __('of') !!}
        <span class="fw-semibold">{{ $paginator->total() }}</span>
        {!! __('results') !!}
    </p>
</div>