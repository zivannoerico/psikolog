@extends('layouts.frontend')

@section('title', 'Tentang Kami — An Moerty Psikologi Banyuwangi')
@section('description', 'Biro Psikologi & Konseling An Moerty Banyuwangi adalah lembaga Asesmen Center profesional yang melayani student profiling, asesmen, konseling, dan training.')
@section('og_title', 'Tentang Kami — An Moerty Psikologi')

@section('content')

{{-- Page Hero --}}
<section class="page-hero" aria-labelledby="tentang-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Tentang Kami</span>
      </nav>
      <div class="section-label">Profil Kami</div>
      <h1 class="page-hero-title" id="tentang-heading">AN MOERTY PSIKOLOGI</h1>
      <p class="page-hero-subtitle">Biro Psikologi & Konseling profesional yang berdedikasi untuk mendukung kesehatan mental dan pengembangan diri di Banyuwangi.</p>
    </div>
  </div>
</section>

{{-- About Story --}}
<section class="section" aria-labelledby="profil-heading">
  <div class="container">
    <div class="about-layout">
      <div class="about-visual reveal">
        <img
          src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=700&q=80"
          alt="Psikolog An Moerty Psikologi Banyuwangi"
          class="about-img"
          loading="lazy"
          width="560"
          height="700">
        <div class="about-badge" aria-hidden="true">
          <div class="about-badge-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <div class="about-badge-text">
            <span class="num">Terpercaya</span>
            <span class="label">Sejak 2014</span>
          </div>
        </div>
      </div>

      <div class="about-content reveal reveal-delay-2">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title" id="profil-heading">Profil Biro Psikologi</h2>
        <p style="font-size:1.0625rem; color:var(--clr-text-2); line-height:1.8; margin-bottom:var(--space-5);">
          <strong>Biro Psikologi & Konseling An Moerty Banyuwangi</strong> merupakan sebuah lembaga Asesmen Center yang memberikan pelayanan pada masyarakat dalam bentuk jasa profesional.
        </p>
        <p style="font-size:1.0625rem; color:var(--clr-text-2); line-height:1.8; margin-bottom:var(--space-5);">
          Biro Psikologi & Konseling An Moerty Banyuwangi berfokus pada layanan profesional lainnya seperti <strong>Student Profiling & Study Analysis</strong> serta identifikasi hambatan belajar untuk peserta didik sehingga dapat memberikan rekomendasi yang tepat.
        </p>
        <p style="font-size:1.0625rem; color:var(--clr-text-2); line-height:1.8;">
          Dengan pengalaman lebih dari <strong>10 tahun</strong>, tim psikolog kami telah membantu ratusan individu dan organisasi dalam mengenali potensi, mengatasi tantangan, dan mencapai tujuan mereka.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- Visi & Misi --}}
<section class="section section--alt" aria-labelledby="visimisi-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Nilai Kami</div>
      <h2 class="section-title" id="visimisi-heading">Visi & Misi</h2>
    </div>

    <div class="grid-2 reveal">
      {{-- Visi --}}
      <div class="service-card">
        <div class="service-icon-wrap" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
        </div>
        <div>
          <h3 class="service-card-title">Visi</h3>
          <p class="service-card-desc">Menjadi lembaga psikologi terpercaya yang memberikan kontribusi nyata bagi pengembangan individu dan organisasi di Jawa Timur.</p>
        </div>
      </div>

      {{-- Misi --}}
      <div class="service-card">
        <div class="service-icon-wrap" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
        <div>
          <h3 class="service-card-title">Misi</h3>
          <ul style="list-style:none; display:flex; flex-direction:column; gap:var(--space-3); margin-top:var(--space-3);">
            @foreach([
              'Memberikan layanan asesmen psikologis yang profesional dan terstandarisasi.',
              'Mendampingi individu dalam mengenali dan mengoptimalkan potensi diri.',
              'Membantu organisasi dalam pengembangan SDM yang efektif.',
              'Menjaga standar etika dan profesionalisme dalam setiap layanan.'
            ] as $misi)
              <li style="display:flex; align-items:flex-start; gap:var(--space-3); font-size:0.9375rem; color:var(--clr-text-2); line-height:1.6;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="2.5" style="flex-shrink:0; margin-top:2px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                {{ $misi }}
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Keunggulan --}}
<section class="section" aria-labelledby="keunggulan-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Kenapa An Moerty?</div>
      <h2 class="section-title" id="keunggulan-heading">Keunggulan Kami</h2>
    </div>

    <div class="grid-4">
      @foreach([
        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label' => 'Profesional & Terstandarisasi', 'desc' => 'Menggunakan instrumen tes yang telah teruji secara ilmiah.'],
        ['icon' => 'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l8.91-1.01L12 2z', 'label' => '10+ Tahun Pengalaman', 'desc' => 'Rekam jejak panjang melayani individu dan korporasi.'],
        ['icon' => 'M3 11l19-9-9 19-2-8-8-2z', 'label' => 'Layanan Cepat & Tepat', 'desc' => 'Laporan psikologis akurat dengan turnaround yang efisien.'],
        ['icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', 'label' => 'Kerahasiaan Terjamin', 'desc' => 'Data klien dijaga sesuai kode etik profesi psikolog.'],
      ] as $i => $item)
        <div class="service-card text-center reveal reveal-delay-{{ $i + 1 }}" style="align-items:center;">
          <div class="service-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="{{ $item['icon'] }}"/></svg>
          </div>
          <h3 class="service-card-title" style="text-align:center;">{{ $item['label'] }}</h3>
          <p class="service-card-desc" style="text-align:center;">{{ $item['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Tim Psikolog --}}
@if($tim->count())
<section class="section section--alt" aria-labelledby="tim-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Tim Kami</div>
      <h2 class="section-title" id="tim-heading">Tim Psikolog An Moerty</h2>
      <p class="section-subtitle">Didukung oleh psikolog berpengalaman dan berdedikasi tinggi untuk memberikan pelayanan terbaik.</p>
    </div>

    <div class="grid-auto-3">
      @foreach($tim as $i => $psikolog)
        <article class="psikolog-card reveal reveal-delay-{{ ($i % 3) + 1 }}" aria-labelledby="psik-{{ $psikolog->id }}">
          @if($psikolog->foto)
            <img src="{{ asset('storage/' . $psikolog->foto) }}" alt="Foto {{ $psikolog->nama_lengkap }}" class="psikolog-img" loading="lazy" width="100" height="100">
          @else
            <div class="psikolog-img" style="background:var(--clr-pink-light); display:flex; align-items:center; justify-content:center; font-family:var(--font-heading); font-weight:800; font-size:2rem; color:var(--clr-pink);" aria-hidden="true">{{ $psikolog->initials }}</div>
          @endif
          <h3 class="psikolog-name" id="psik-{{ $psikolog->id }}">{{ $psikolog->nama_lengkap }}</h3>
          <p class="psikolog-title">{{ $psikolog->spesialisasi }}</p>
          @if($psikolog->bio)
            <p class="psikolog-bio">{{ Str::limit($psikolog->bio, 150) }}</p>
          @endif
        </article>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- Galeri --}}
@if($galeri->count())
<section class="section" aria-labelledby="galeri-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Galeri</div>
      <h2 class="section-title" id="galeri-heading">Galeri Kegiatan</h2>
    </div>
    <div class="galeri-grid">
      @foreach($galeri as $item)
        <div class="galeri-item reveal">
          <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->alt ?? $item->judul ?? 'Galeri An Moerty Psikologi' }}" loading="lazy" width="400" height="300">
          <div class="galeri-overlay" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- CTA --}}
<section class="section--sm">
  <div class="container">
    <div class="cta-section reveal">
      <div class="cta-content">
        <h2 class="cta-title">Siap Berkolaborasi Bersama Kami?</h2>
        <p class="cta-subtitle">Hubungi tim An Moerty Psikologi dan dapatkan layanan psikologi profesional terbaik.</p>
        <div class="cta-actions">
          <a href="{{ route('kontak.index') }}" class="btn btn--white btn--lg">Hubungi Kami</a>
          <a href="{{ route('layanan.index') }}" class="btn btn--outline-white btn--lg">Lihat Layanan</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
