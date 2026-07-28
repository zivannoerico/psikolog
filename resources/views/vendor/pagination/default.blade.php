@if ($paginator->hasPages())
    <nav class="pagination-nav" role="navigation" aria-label="Navigasi halaman">

        {{-- Results info --}}
        <p class="pagination-info">
            Menampilkan
            @if ($paginator->firstItem())
                <strong>{{ $paginator->firstItem() }}</strong> — <strong>{{ $paginator->lastItem() }}</strong>
            @else
                {{ $paginator->count() }}
            @endif
            dari <strong>{{ $paginator->total() }}</strong> artikel
        </p>

        {{-- Page buttons --}}
        <ul class="pagination-list">

            {{-- Previous --}}
            <li>
                @if ($paginator->onFirstPage())
                    <span class="pagination-btn pagination-btn--disabled" aria-disabled="true" aria-label="Halaman sebelumnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination-btn" rel="prev" aria-label="Halaman sebelumnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
                    </a>
                @endif
            </li>

            {{-- Page numbers --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <span class="pagination-btn pagination-btn--dots" aria-disabled="true">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            @if ($page == $paginator->currentPage())
                                <span class="pagination-btn pagination-btn--active" aria-current="page">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="pagination-btn" aria-label="Halaman {{ $page }}">{{ $page }}</a>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            <li>
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-btn" rel="next" aria-label="Halaman berikutnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                @else
                    <span class="pagination-btn pagination-btn--disabled" aria-disabled="true" aria-label="Halaman berikutnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
                    </span>
                @endif
            </li>
        </ul>
    </nav>
@endif
