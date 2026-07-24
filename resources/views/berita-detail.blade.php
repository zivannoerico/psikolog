@extends('layouts.frontend')

@section('title', ($artikel->meta_title ?? $artikel->judul . ' — An Moerty Psikologi'))
@section('description', $artikel->meta_description ?? $artikel->excerpt)

@section('content')

<article aria-labelledby="artikel-heading">

  {{-- Hero --}}
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-content" style="max-width:800px;">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Beranda</a>
          <span class="breadcrumb-sep" aria-hidden="true">›</span>
          <a href="{{ route('artikel.index') }}">Artikel</a>
          <span class="breadcrumb-sep" aria-hidden="true">›</span>
          <span aria-current="page">{{ Str::limit($artikel->judul, 40) }}</span>
        </nav>
        @if($artikel->kategori)
          <a href="{{ route('artikel.index', ['kategori' => $artikel->kategori->slug]) }}" class="card-badge" style="margin-bottom:var(--space-4);">{{ $artikel->kategori->nama }}</a>
        @endif
        <h1 class="page-hero-title" id="artikel-heading">{{ $artikel->judul }}</h1>
        <div class="card-meta" style="margin-top:var(--space-4);">
          @if($artikel->penulis)<span>{{ $artikel->penulis }}</span>@endif
          <time datetime="{{ $artikel->published_at?->format('Y-m-d') }}">{{ $artikel->published_at?->translatedFormat('d F Y') }}</time>
          @if($artikel->reading_time)<span>· {{ $artikel->reading_time }} menit baca</span>@endif
          <span>· {{ number_format($artikel->views) }} kali dilihat</span>
        </div>
      </div>
    </div>
  </section>

  {{-- Gambar Utama --}}
  @if($artikel->gambar_utama)
    <div style="max-width:860px; margin:0 auto; padding:0 var(--space-8);">
      <img
        src="{{ asset('storage/' . $artikel->gambar_utama) }}"
        alt="{{ $artikel->alt_gambar ?? $artikel->judul }}"
        style="width:100%; aspect-ratio:16/9; object-fit:cover; border-radius:var(--radius-lg); margin-bottom:var(--space-12);"
        loading="eager">
    </div>
  @endif

  {{-- Konten --}}
  <section class="section--sm" aria-label="Isi artikel">
    <div class="container--narrow">
      <div class="prose" style="font-size:1.0625rem; line-height:1.9; color:var(--clr-text-2);">
        {!! $artikel->konten !!}
      </div>

      {{-- Tags --}}
      @if($artikel->tags)
        <div style="display:flex; gap:var(--space-2); flex-wrap:wrap; margin-top:var(--space-8); padding-top:var(--space-8); border-top:1px solid var(--clr-divider);" aria-label="Tags artikel">
          <span style="font-size:0.875rem; font-weight:600; color:var(--clr-text-3);">Tag:</span>
          @foreach($artikel->tags as $tag)
            <span class="badge badge--gray">{{ $tag }}</span>
          @endforeach
        </div>
      @endif

      {{-- Share --}}
      <div style="margin-top:var(--space-8); padding:var(--space-6) var(--space-8); background:var(--clr-bg-alt); border-radius:var(--radius-md); border:1px solid var(--clr-border);">
        <p style="font-weight:700; font-size:0.9375rem; color:var(--clr-text); margin-bottom:var(--space-4);">Bagikan Artikel Ini</p>
        <div style="display:flex; gap:var(--space-3); flex-wrap:wrap;">
          <a href="https://wa.me/?text={{ urlencode($artikel->judul . ' - ' . url()->current()) }}" class="btn btn--outline btn--sm" target="_blank" rel="noopener noreferrer" aria-label="Share via WhatsApp">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" class="btn btn--outline btn--sm" target="_blank" rel="noopener noreferrer" aria-label="Share via Facebook">Facebook</a>
          <a href="https://twitter.com/intent/tweet?text={{ urlencode($artikel->judul) }}&url={{ urlencode(url()->current()) }}" class="btn btn--outline btn--sm" target="_blank" rel="noopener noreferrer" aria-label="Share via Twitter">Twitter</a>
        </div>
      </div>
    </div>
  </section>

</article>

{{-- Artikel Terkait --}}
@if($related->count())
<section class="section section--alt" aria-labelledby="related-heading">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">Baca Juga</div>
      <h2 class="section-title" id="related-heading">Artikel Terkait</h2>
    </div>
    <div class="grid-3">
      @foreach($related as $i => $art)
        <article class="card reveal reveal-delay-{{ $i + 1 }}" aria-labelledby="rel-{{ $art->id }}">
          <a href="{{ route('artikel.show', $art->slug) }}" tabindex="-1" aria-hidden="true">
            <img src="{{ $art->gambar_utama ? asset('storage/'.$art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $art->judul }}" class="card-img" loading="lazy" width="600" height="338">
          </a>
          <div class="card-body">
            <h3 class="card-title" id="rel-{{ $art->id }}"><a href="{{ route('artikel.show', $art->slug) }}">{{ $art->judul }}</a></h3>
            <p class="card-text">{{ Str::limit($art->excerpt, 100) }}</p>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
@endif

@push('styles')
<style>
/* Article Typography */
.prose p { margin-bottom: 1.5em; }
.prose h2 { font-size: 1.5rem; font-weight: 700; color: var(--clr-text); margin: 2.5em 0 1em; }
.prose h3 { font-size: 1.25rem; font-weight: 700; color: var(--clr-text); margin: 2em 0 0.75em; }
.prose ul, .prose ol { padding-left: 1.5em; margin-bottom: 1.5em; }
.prose ul { list-style: disc; }
.prose ol { list-style: decimal; }
.prose li { margin-bottom: 0.5em; line-height: 1.75; }
.prose strong { color: var(--clr-text); font-weight: 700; }
.prose a { color: var(--clr-pink); text-decoration: underline; }
.prose blockquote { border-left: 3px solid var(--clr-pink); padding-left: 1.25em; font-style: italic; color: var(--clr-text-2); margin: 1.5em 0; }
</style>
@endpush

@endsection
