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

<section class="section cta-compact-section" aria-labelledby="testi-cta-heading" style="padding-top: 2rem; padding-bottom: 4rem;">
  <div class="container cta-container-compact">
    <div class="cta-clean-card reveal">
      <div class="cta-single-glow" aria-hidden="true"></div>
      <div class="cta-compact-grid">
        <div class="cta-left-minimal">
          <div class="cta-badge-minimal">
            <span class="cta-badge-dot-gold"></span>
            <span>Pengalaman Klien</span>
          </div>
          <h2 class="cta-headline-compact" id="testi-cta-heading">
            Bergabunglah Bersama<br>
            <span class="cta-gold-text">Ratusan Klien Terbantu Kami.</span>
          </h2>
          <p class="cta-desc-compact">
            Rasakan sendiri manfaat layanan psikologi dan konseling profesional bersama tim ahli An Moerty Banyuwangi.
          </p>
          <div class="cta-compact-actions">
            <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179'))) }}?text={{ urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin bertanya seputar layanan.')) }}" class="cta-btn-compact cta-btn-main" target="_blank" rel="noopener noreferrer">
              <x-icon.whatsapp style="width: 18px; height: 18px;" />
              <span>Chat WhatsApp</span>
            </a>
            <a href="{{ route('layanan.index') }}" class="cta-btn-compact cta-btn-sub">
              <span>Lihat Layanan</span>
            </a>
          </div>
        </div>
        <div class="cta-right-minimal">
          <div class="cta-compact-trust-card">
            <div class="cta-trust-header">
              <div class="cta-mini-avatar-wrap">
                <img src="{{ asset('images/bu-betty.webp') }}" alt="Psikolog An Moerty" class="cta-mini-avatar">
                <span class="cta-mini-status" title="Online"></span>
              </div>
              <div>
                <div class="cta-online-text">Layanan Konseling Profesional</div>
                <div class="cta-speed-text">Respon Cepat &lt; 15 Menit</div>
              </div>
            </div>
            <div class="cta-compact-features">
              <div class="cta-compact-feature">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C8607A" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <span>100% Kerahasiaan Terjamin</span>
              </div>
              <div class="cta-compact-feature">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C8607A" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <span>Jadwal Sesi Fleksibel</span>
              </div>
            </div>
            <div class="cta-compact-rating">
              <span class="cta-stars-gold">★★★★★</span>
              <span class="cta-rating-score">4.9/5.0</span>
              <span class="cta-rating-count">(Dipercaya 500+ Klien)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
