@extends('layouts.frontend')

@section('title', 'Psikologi Banyuwangi — An Moerty | Layanan Psikologi & Konseling Profesional')
@section('description', 'Bersama tim Psikolog An Moerty yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.')
@section('og_title', 'An Moerty Psikologi Banyuwangi')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="hero" aria-labelledby="hero-heading">
  <div class="container">
    <div class="hero-inner">
      <div class="hero-content">
        <span class="hero-label" aria-hidden="true">Layanan Psikologi & Konseling Terpercaya</span>
        <h1 class="hero-title" id="hero-heading">
          Buka Potensi Terbaik<br>
          <span class="accent">Diri Anda</span>
        </h1>
        <p class="hero-subtitle">
          Bersama tim Psikolog An Moerty yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda untuk mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.
        </p>
        <div class="hero-actions">
          <a href="{{ route('layanan.index') }}" class="btn btn--primary btn--lg">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Lihat Layanan
          </a>
          <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179'))) }}?text={{ urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin berkonsultasi. Apakah bisa bantu saya?')) }}" class="btn btn--outline btn--lg" target="_blank" rel="noopener noreferrer">
            <x-icon.phone style="width: 18px; height: 18px;" />
            Hubungi Kami
          </a>
        </div>
      </div>

      <div class="hero-visual" aria-hidden="true">
        <div class="hero-img-wrap custom-mobile-hero" style="display: flex; gap: 12px; align-items: center; justify-content: center; width: 100%; max-width: 650px; aspect-ratio: 1/1; max-height: 550px; margin: 0 auto; position: relative;">
          @php $heroImg = \App\Models\Setting::get('hero_gambar') ? asset('storage/' . \App\Models\Setting::get('hero_gambar')) : asset('images/hero-psikologi.webp'); @endphp
          
          <div class="custom-mobile-hero-item custom-mobile-hero-item-1" style="flex: 1; height: 80%; overflow: hidden; border-radius: 1.5rem; transform: skewX(-10deg) translateY(20px); border: 6px solid var(--clr-surface); box-shadow: 0 10px 25px rgba(0,0,0,0.08); position: relative;">
            <img class="custom-mobile-hero-img" src="{{ $heroImg }}" alt="Hero 1" style="width: 100%; height: 100%; object-fit: cover; transform: skewX(10deg) scale(1.35); object-position: 48% center;" loading="eager" fetchpriority="high">
          </div>
          
          <div class="custom-mobile-hero-item custom-mobile-hero-item-2" style="flex: 1; height: 100%; overflow: hidden; border-radius: 1.5rem; transform: skewX(-10deg); border: 6px solid var(--clr-surface); box-shadow: 0 20px 40px rgba(0,0,0,0.15); position: relative; z-index: 2;">
            <img class="custom-mobile-hero-img" src="{{ $heroImg }}" alt="Hero 2" style="width: 100%; height: 100%; object-fit: cover; transform: skewX(10deg) scale(1.35); object-position: 72% center;" loading="eager" fetchpriority="high">
          </div>
          
          <div class="custom-mobile-hero-item custom-mobile-hero-item-3" style="flex: 1; height: 80%; overflow: hidden; border-radius: 1.5rem; transform: skewX(-10deg) translateY(-20px); border: 6px solid var(--clr-surface); box-shadow: 0 10px 25px rgba(0,0,0,0.08); position: relative;">
            <img class="custom-mobile-hero-img" src="{{ $heroImg }}" alt="Hero 3" style="width: 100%; height: 100%; object-fit: cover; transform: skewX(10deg) scale(1.35); object-position: 95% center;" loading="eager" fetchpriority="high">
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


{{-- ===================== TENTANG / ABOUT SECTION ===================== --}}
<section class="section" id="tentang" aria-labelledby="about-heading" style="padding-top: 4rem;">
  <div class="container">
    <div class="about-layout">

      <div class="about-visual reveal">
        <img
          src="{{ \App\Models\Setting::get('tentang_gambar') ? asset('storage/' . \App\Models\Setting::get('tentang_gambar')) : asset('images/bu-betty.webp') }}"
          alt="Tim psikolog An Moerty Psikologi Banyuwangi"
          class="about-img"
          loading="lazy"
          width="560"
          height="700">
        <div class="about-badge">
          <div class="about-badge-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="about-badge-text">
            <div class="num">10+</div>
            <div class="label">Tahun Pengalaman</div>
          </div>
        </div>
      </div>

      {{-- Mobile Stats Bar (moved directly under photo) --}}
      <div class="about-stats-bar mobile-only" style="margin-top: 2rem; margin-bottom: 1rem; background: transparent;">
        <div class="about-stats-inner">
          <div class="about-stat-item" style="border: none; padding: 0;">
            <div class="stat-num" style="margin-bottom: 8px;">10+</div>
            <div class="stat-label">Tahun Pengalaman</div>
          </div>
          <div class="about-stat-item" style="border: none; padding: 0;">
            <div class="stat-num" style="margin-bottom: 8px;">500+</div>
            <div class="stat-label">Klien Terlayani</div>
          </div>
          <div class="about-stat-item" style="border: none; padding: 0;">
            <div class="stat-num" style="margin-bottom: 8px;">7</div>
            <div class="stat-label">Jenis Layanan</div>
          </div>
          <div class="about-stat-item" style="border: none; padding: 0;">
            <div class="stat-num" style="margin-bottom: 8px;">100%</div>
            <div class="stat-label">Kerahasiaan Terjamin</div>
          </div>
        </div>
      </div>

      <div class="about-content reveal reveal-delay-2">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title" id="about-heading">An Moerty Psikologi Banyuwangi</h2>
        <p class="about-description">
          Biro Psikologi & Konseling An Moerty Banyuwangi merupakan lembaga asesmen center yang memberikan pelayanan profesional kepada masyarakat. Kami berfokus pada <strong>Student Profiling & Study Analysis</strong> serta identifikasi hambatan belajar untuk memberikan rekomendasi yang tepat bagi setiap individu.
        </p>

        <div class="about-features">
          <div class="about-feature">
            <div class="about-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Student Profiling & Study Analysis</div>
              <div class="about-feature-desc">Identifikasi potensi dan hambatan belajar untuk rekomendasi tepat</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Konseling Profesional</div>
              <div class="about-feature-desc">Layanan konseling individu, sekolah, dan perusahaan</div>
            </div>
          </div>
        </div>

        <div class="about-footer">
          <a href="{{ route('tentang') }}" class="btn btn--outline">
            Pelajari Lebih Lanjut
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="about-stats-bar desktop-only" style="margin-top: 3rem; background: transparent;">
    <div class="container">
      <div class="about-stats-inner">
        <div class="about-stat-item" style="border: none; padding: 0;">
          <div class="stat-num" style="margin-bottom: 12px;">10+</div>
          <div class="stat-label">Tahun Pengalaman</div>
        </div>
        <div class="about-stat-item" style="border: none; padding: 0;">
          <div class="stat-num" style="margin-bottom: 12px;">500+</div>
          <div class="stat-label">Klien Terlayani</div>
        </div>
        <div class="about-stat-item" style="border: none; padding: 0;">
          <div class="stat-num" style="margin-bottom: 12px;">7</div>
          <div class="stat-label">Jenis Layanan</div>
        </div>
        <div class="about-stat-item" style="border: none; padding: 0;">
          <div class="stat-num" style="margin-bottom: 12px;">100%</div>
          <div class="stat-label">Kerahasiaan Terjamin</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===================== LAYANAN SECTION ===================== --}}
<section class="section" id="layanan" aria-labelledby="layanan-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Layanan Kami</div>
      <h2 class="section-title" id="layanan-heading">Bersama Tumbuh Menjadi Lebih Baik</h2>
      <p class="section-subtitle">Program psikologi terapan yang dirancang khusus untuk membawa perubahan positif bagi individu maupun tim kerja.</p>
    </div>

    <div class="grid-auto-3 reveal">
      @forelse ($layanan as $i => $item)
        <article class="service-card" aria-labelledby="layanan-{{ $item->id }}">
          <div class="service-icon-wrap" aria-hidden="true">
            @switch($item->ikon)
              @case('clipboard-list')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>
                @break
              @case('message-circle')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                @break
              @case('users-round')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                @break
              @case('briefcase')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                @break
              @case('shield-heart')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 8c-1.66 0-3 1.34-3 3 0 2.4 2.53 4.37 3 4.74.47-.37 3-2.34 3-4.74 0-1.66-1.34-3-3-3z"/></svg>
                @break
              @case('presentation')
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h20"/><path d="M21 3v11a2 2 0 01-2 2H5a2 2 0 01-2-2V3"/><path d="M7 21l5-5 5 5"/></svg>
                @break
              @default
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l4-8 4 5 3-3 4 6"/></svg>
            @endswitch
          </div>
          <div class="service-card-body">
            <h3 class="service-card-title" id="layanan-{{ $item->id }}">{{ $item->nama }}</h3>
            <p class="service-card-desc">{{ $item->deskripsi_singkat }}</p>
          </div>
          <a href="{{ route('layanan.show', $item->slug) }}" class="service-card-link" aria-label="Pelajari lebih lanjut tentang {{ $item->nama }}">
            Pelajari Lebih Lanjut
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </article>
      @empty
        <p class="text-muted" style="grid-column:1/-1; text-align:center;">Layanan belum tersedia.</p>
      @endforelse
    </div>

    <div class="section-footer reveal">
      <a href="{{ route('layanan.index') }}" class="btn btn--outline">Lihat Semua Layanan</a>
    </div>
  </div>
</section>

{{-- ===================== KEUNGGULAN SECTION (REMOVED) ===================== --}}

{{-- ===================== ARTIKEL TERBARU ===================== --}}
@if($artikel->count())
<section class="section" id="artikel" aria-labelledby="artikel-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Artikel Terbaru</div>
      <h2 class="section-title" id="artikel-heading">Wawasan & Informasi Psikologi</h2>
      <p class="section-subtitle">Temukan artikel informatif seputar psikologi, konseling, dan pengembangan diri.</p>
    </div>

    <div class="grid-3 reveal">
      @foreach($artikel as $i => $art)
        <article class="card" aria-labelledby="art-{{ $art->id }}">
          <a href="{{ route('artikel.show', $art->slug) }}" tabindex="-1" aria-hidden="true" class="card-img-link">
            <img
              src="{{ $art->gambar_utama ? asset('storage/' . $art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80' }}"
              alt="{{ $art->alt_gambar ?? $art->judul }}"
              class="card-img"
              loading="lazy"
              width="400"
              height="225">
          </a>
          <div class="card-body">
            <h3 class="card-title" id="art-{{ $art->id }}">
              <a href="{{ route('artikel.show', $art->slug) }}">{{ $art->judul }}</a>
            </h3>
            <div class="card-meta">
              <time datetime="{{ $art->published_at?->format('Y-m-d') }}">{{ $art->published_at?->translatedFormat('d M Y') }}</time>
            </div>
            <p class="card-text">{{ Str::limit($art->excerpt, 100) }}</p>
            <div style="margin-top: auto; padding-top: 1.5rem;">
              <a href="{{ route('artikel.show', $art->slug) }}" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--clr-pink); font-weight: 600; font-size: 0.875rem; text-decoration: none;">
                Baca Selengkapnya
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </article>
      @endforeach
    </div>

    <div class="section-footer reveal">
      <a href="{{ route('artikel.index') }}" class="btn btn--outline">Lihat Semua Artikel</a>
    </div>
  </div>
</section>
@endif

{{-- ===================== TESTIMONI SECTION ===================== --}}
@if($testimoni->count())
<section class="section section--alt" id="testimoni" aria-labelledby="testimoni-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Testimoni</div>
      <h2 class="section-title" id="testimoni-heading">Yang Mereka Katakan</h2>
      <p class="section-subtitle">Dengarkan pengalaman mereka yang telah merasakan manfaat layanan psikologi An Moerty.</p>
    </div>

    <div class="testi-scroll-wrap reveal">
      <div class="testi-scroll-track">
        <div class="testi-scroll-group">
          @foreach($testimoni as $testi)
            <article class="testi-card" aria-labelledby="testi-name-{{ $testi->id }}">
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
        <div class="testi-scroll-group" aria-hidden="true">
          @foreach($testimoni as $testi)
            <article class="testi-card" aria-labelledby="testi-name-{{ $testi->id }}">
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
      </div>
    </div>

    <div class="section-footer reveal">
      <a href="{{ route('testimoni.index') }}" class="btn btn--outline">Lihat Semua Testimoni</a>
    </div>
  </div>
</section>
@endif

{{-- ===================== KLIEN KAMI SECTION ===================== --}}
<section class="section" id="klien" aria-labelledby="klien-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Klien Kami</div>
      <h2 class="section-title" id="klien-heading">Dipercaya oleh Perusahaan Terkemuka</h2>
      <p class="section-subtitle">Kami telah menjalin kerjasama dengan berbagai multi level perusahaan daerah dan nasional.</p>
    </div>

    <div class="klien-marquee reveal" aria-label="Logo perusahaan klien">
      <div class="klien-marquee-track">
        <div class="klien-marquee-group">
          <img src="{{ asset('images/klien/a.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/b.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/c.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/d.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/Capture.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/e.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/f.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/ff.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
        </div>
        <div class="klien-marquee-group" aria-hidden="true">
          <img src="{{ asset('images/klien/a.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/b.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/c.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/d.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/Capture.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/e.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/f.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="{{ asset('images/klien/ff.png') }}" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===================== ELEGANT COMPACT CTA SECTION ===================== --}}
<section class="section cta-compact-section" aria-labelledby="cta-heading" style="padding-top: 2rem; padding-bottom: 4rem;">
  <div class="container cta-container-compact">
    <div class="cta-clean-card reveal">
      
      {{-- Single Subtle Background Glow --}}
      <div class="cta-single-glow" aria-hidden="true"></div>

      <div class="cta-compact-grid">
        
        {{-- LEFT SIDE --}}
        <div class="cta-left-minimal">
          <div class="cta-badge-minimal">
            <span class="cta-badge-dot-gold"></span>
            <span>Ruang Konsultasi Rahasia</span>
          </div>

          <h2 class="cta-headline-compact" id="cta-heading">
            Setiap Perubahan Besar<br>
            <span class="cta-gold-text">Dimulai Dari Keberanian Bercerita.</span>
          </h2>

          <p class="cta-desc-compact">
            Konsultasikan kecemasan dan hambatan Anda secara rahasia bersama tim psikolog profesional An Moerty Banyuwangi.
          </p>

          <div class="cta-compact-actions">
            <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179'))) }}?text={{ urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin konsultasi. Bisakah bantu jadwalnya?')) }}" class="cta-btn-compact cta-btn-main" target="_blank" rel="noopener noreferrer">
              <x-icon.whatsapp style="width: 18px; height: 18px;" />
              <span>Chat WhatsApp</span>
            </a>
            <a href="{{ route('layanan.index') }}" class="cta-btn-compact cta-btn-sub">
              <span>Pelajari Layanan</span>
            </a>
          </div>
        </div>

        {{-- RIGHT SIDE (Compact Card ~20% smaller) --}}
        <div class="cta-right-minimal">
          <div class="cta-compact-trust-card">
            
            <div class="cta-trust-header">
              <div class="cta-mini-avatar-wrap">
                <img src="{{ asset('images/bu-betty.webp') }}" alt="Psikolog An Moerty" class="cta-mini-avatar">
                <span class="cta-mini-status" title="Online"></span>
              </div>
              <div>
                <div class="cta-online-text">Psikolog Online Sekarang</div>
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