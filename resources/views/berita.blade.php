@extends('layouts.frontend')

@section('title', 'Artikel — An Moerty Psikologi Banyuwangi')
@section('description', 'Baca artikel informatif seputar psikologi, konseling, tips kesehatan mental, dan pengembangan diri dari tim psikolog An Moerty.')

@section('content')

<section class="page-hero" aria-labelledby="artikel-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Artikel</span>
      </nav>
      <div class="section-label">Wawasan Psikologi</div>
      <h1 class="page-hero-title" id="artikel-heading">Artikel & Informasi</h1>
      <p class="page-hero-subtitle">Temukan artikel informatif seputar psikologi, konseling, dan pengembangan diri dari tim psikolog An Moerty.</p>
    </div>
  </div>
</section>

<section class="section" aria-label="Daftar artikel">
  <div class="container" style="max-width: 1060px;">

    {{-- Search & Filter --}}
    <div class="artikel-search-bar">
      <form action="{{ route('artikel.index') }}" method="GET" role="search" style="flex:1; min-width:240px;">
        <div class="search-input-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input
            type="search"
            name="q"
            id="search-artikel"
            placeholder="Cari artikel..."
            value="{{ request('q') }}"
            aria-label="Cari artikel">
        </div>
      </form>
      @if($kategori->count())
        <div style="display:flex; gap:var(--space-2); flex-wrap:wrap;" role="group" aria-label="Filter kategori">
          <a href="{{ route('artikel.index') }}" class="badge {{ !request('kategori') ? 'badge--pink' : 'badge--gray' }}" style="padding:6px 14px; font-size:0.8125rem;">Semua</a>
          @foreach($kategori as $kat)
            <a href="{{ route('artikel.index', ['kategori' => $kat->slug]) }}" class="badge {{ request('kategori') == $kat->slug ? 'badge--pink' : 'badge--gray' }}" style="padding:6px 14px; font-size:0.8125rem;">
              {{ $kat->nama }}
            </a>
          @endforeach
        </div>
      @endif
    </div>

    {{-- Artikel Grid --}}
    @if($artikel->count())
      <div class="grid-auto-3">
        @foreach($artikel as $i => $art)
          <article class="card reveal reveal-delay-{{ ($i % 3) + 1 }}" aria-labelledby="art-{{ $art->id }}">
            <a href="{{ route('artikel.show', $art->slug) }}" tabindex="-1" aria-hidden="true" style="display: block; width: 100%; aspect-ratio: 16/9; overflow: hidden; background-color: var(--clr-bg-alt);">
              <img
                src="{{ $art->gambar_utama ? asset('storage/' . $art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80' }}"
                alt="{{ $art->alt_gambar ?? $art->judul }}"
                class="card-img"
                loading="lazy"
                style="width: 100%; height: 100%; object-fit: cover;"
                width="600"
                height="338">
            </a>
            <div class="card-body" style="padding: var(--space-5);">
              <h2 class="card-title" id="art-{{ $art->id }}" style="margin-bottom: var(--space-4); font-size: 1.125rem; line-height: 1.5;">
                <a href="{{ route('artikel.show', $art->slug) }}">{{ $art->judul }}</a>
              </h2>
              
              <div style="font-size: 0.8125rem; color: var(--clr-text-3); margin-bottom: var(--space-4);">
                <div style="margin-bottom: var(--space-3);">
                  <time datetime="{{ $art->published_at?->format('Y-m-d') }}">{{ $art->published_at?->translatedFormat('d M Y') }}</time>
                </div>
                @if($art->penulis)
                  <div style="font-weight: 600; color: var(--clr-text); font-size: 0.875rem;">{{ $art->penulis }}</div>
                @endif
              </div>

              <p class="card-text" style="font-size: 0.875rem; color: var(--clr-text-3); line-height: 1.7;">{{ Str::limit($art->excerpt, 120) }}</p>
            </div>
          </article>
        @endforeach
      </div>
      @if($artikel->hasPages())
          {{ $artikel->withQueryString()->links('vendor.pagination.default') }}
      @endif
    @else
      <div class="text-center" style="padding:var(--space-16) 0;">
        <p class="text-muted">@if(request('q'))Tidak ditemukan artikel untuk "{{ request('q') }}".@else Artikel belum tersedia.@endif</p>
        @if(request('q'))
          <a href="{{ route('artikel.index') }}" class="btn btn--outline" style="margin-top:var(--space-4);">Lihat Semua Artikel</a>
        @endif
      </div>
    @endif

  </div>
</section>

@endsection
