@extends('layouts.frontend')

@section('title', 'Tim Psikolog — An Moerty Psikologi Banyuwangi')
@section('description', 'Kenali tim psikolog profesional An Moerty Banyuwangi yang berpengalaman lebih dari 10 tahun dalam bidang konseling, asesmen, dan pengembangan SDM.')

@section('content')

<section class="page-hero" aria-labelledby="tim-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Tim Psikolog</span>
      </nav>
      <div class="section-label">Tentang Tim</div>
      <h1 class="page-hero-title" id="tim-heading">Tim Psikolog Kami</h1>
      <p class="page-hero-subtitle">Didukung oleh psikolog berpengalaman dan berdedikasi tinggi untuk memberikan pelayanan terbaik bagi Anda.</p>
    </div>
  </div>
</section>

<section class="section" aria-label="Daftar tim psikolog">
  <div class="container">
    @if($tim->count())
      <div class="grid-auto-3">
        @foreach($tim as $i => $psikolog)
          <article class="psikolog-card reveal reveal-delay-{{ ($i % 3) + 1 }}" aria-labelledby="psik-{{ $psikolog->id }}">
            @if($psikolog->foto)
              <img src="{{ asset('storage/' . $psikolog->foto) }}" alt="Foto {{ $psikolog->nama_lengkap }}" class="psikolog-img" loading="lazy" width="100" height="100">
            @else
              <div class="psikolog-img" style="background:var(--clr-pink-light); display:flex; align-items:center; justify-content:center; font-family:var(--font-heading); font-weight:800; font-size:2rem; color:var(--clr-pink);" aria-hidden="true">{{ $psikolog->initials }}</div>
            @endif
            <h2 class="psikolog-name" id="psik-{{ $psikolog->id }}">{{ $psikolog->nama_lengkap }}</h2>
            <p class="psikolog-title">{{ $psikolog->spesialisasi }}</p>
            @if($psikolog->bio)
              <p class="psikolog-bio">{{ $psikolog->bio }}</p>
            @endif
            <div style="display:flex; gap:var(--space-3); justify-content:center; margin-top:var(--space-4);">
              @if($psikolog->instagram)
                <a href="{{ $psikolog->instagram }}" class="footer-social-link" target="_blank" rel="noopener" aria-label="Instagram {{ $psikolog->nama }}" style="background:var(--clr-bg-alt); border-color:var(--clr-border);">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                </a>
              @endif
              @if($psikolog->linkedin)
                <a href="{{ $psikolog->linkedin }}" class="footer-social-link" target="_blank" rel="noopener" aria-label="LinkedIn {{ $psikolog->nama }}" style="background:var(--clr-bg-alt); border-color:var(--clr-border);">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
              @endif
            </div>
          </article>
        @endforeach
      </div>
    @else
      <div class="text-center" style="padding:var(--space-16) 0;">
        <p class="text-muted">Data tim psikolog belum tersedia.</p>
      </div>
    @endif
  </div>
</section>

@endsection
