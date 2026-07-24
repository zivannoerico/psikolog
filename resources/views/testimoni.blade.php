@extends('layouts.frontend')

@section('title', 'Testimoni — An Moerty Psikologi Banyuwangi')
@section('description', 'Baca testimoni klien yang telah merasakan manfaat layanan psikologi An Moerty Banyuwangi.')

@section('content')

<section class="page-hero" aria-labelledby="testi-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Testimoni</span>
      </nav>
      <div class="section-label">Kepercayaan Klien</div>
      <h1 class="page-hero-title" id="testi-heading">Yang Mereka Katakan</h1>
      <p class="page-hero-subtitle">Kepercayaan dan kepuasan klien adalah prioritas utama kami dalam setiap layanan yang diberikan.</p>
    </div>
  </div>
</section>

<section class="section" aria-label="Daftar testimoni klien">
  <div class="container">
    @if($testimoni->count())
      <div class="grid-auto-3">
        @foreach($testimoni as $i => $testi)
          <article class="testi-card reveal reveal-delay-{{ ($i % 3) + 1 }}" aria-labelledby="testi-name-{{ $testi->id }}">
            <div class="testi-stars" aria-label="{{ $testi->rating }} dari 5 bintang">
              @for($s = 1; $s <= 5; $s++)
                <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true">
                  @if($s <= $testi->rating)
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="#FBBF24" stroke="#FBBF24"/>
                  @else
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="none" stroke="#E5E7EB" stroke-width="2"/>
                  @endif
                </svg>
              @endfor
            </div>
            <blockquote>
              <p class="testi-text">"{{ $testi->isi }}"</p>
            </blockquote>
            <div class="testi-author">
              @if($testi->foto)
                <img src="{{ asset('storage/' . $testi->foto) }}" alt="Foto {{ $testi->nama }}" class="testi-avatar" width="44" height="44" loading="lazy">
              @else
                <div class="testi-avatar" aria-hidden="true">{{ $testi->initials }}</div>
              @endif
              <div>
                <div class="testi-name" id="testi-name-{{ $testi->id }}">{{ $testi->nama }}</div>
                <div class="testi-role">{{ $testi->jabatan }}@if($testi->institusi) — {{ $testi->institusi }}@endif</div>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    @else
      <div class="text-center" style="padding:var(--space-16) 0;">
        <p class="text-muted">Testimoni belum tersedia.</p>
      </div>
    @endif
  </div>
</section>

<section class="section--sm">
  <div class="container">
    <div class="cta-section reveal">
      <div class="cta-content">
        <h2 class="cta-title">Bergabunglah Bersama Klien Kami</h2>
        <p class="cta-subtitle">Rasakan sendiri manfaat layanan psikologi profesional An Moerty.</p>
        <div class="cta-actions">
          <a href="{{ route('kontak.index') }}" class="btn btn--white btn--lg">Hubungi Kami</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
