@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination">
        <div >
            @if ($paginator->onFirstPage())
                <span >
                    Anterior
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}">
                    Anterior
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" >
                    Siguiente
                </a>
            @else
                <span >
                    Siguiente
                </span>
            @endif
        </div>

        <div class="pag">
            <div>
                <p>
                    Registros
                    @if ($paginator->firstItem())
                        <span>{{ $paginator->firstItem() }}</span>
                        a
                        <span>{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    de
                    <span>{{ $paginator->total() }}</span>
                    resultados
                </p>
            </div>
        </div>
    </nav>
@endif
