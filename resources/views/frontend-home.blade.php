@extends('layouts.frontend')

@section('title', 'Psikologi Banyuwangi — An Moerty | Layanan Psikologi & Konseling Profesional')
@section('description', 'Bersama tim Psikolog An Moerty yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.')
@section('og_title', 'An Moerty Psikologi Banyuwangi')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="hero" aria-labelledby="hero-heading">
  <div class="hero-content">
    <span class="hero-label" aria-hidden="true">Layanan Psikologi & Konseling Terpercaya</span>
    <h1 class="hero-title" id="hero-heading">
      Buka Potensi<br>
      <span class="accent">Terbaik</span> Diri Anda
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

    <div class="hero-stats" aria-label="Statistik An Moerty">
      <div class="hero-stat-item">
        <span class="hero-stat-num">10+</span>
        <span class="hero-stat-label">Tahun Pengalaman</span>
      </div>
      <div class="hero-stat-divider" aria-hidden="true"></div>
      <div class="hero-stat-item">
        <span class="hero-stat-num">500+</span>
        <span class="hero-stat-label">Klien Terlayani</span>
      </div>
      <div class="hero-stat-divider" aria-hidden="true"></div>
      <div class="hero-stat-item">
        <span class="hero-stat-num">7</span>
        <span class="hero-stat-label">Jenis Layanan</span>
      </div>
    </div>
  </div>

  {{-- Hero Visual --}}
  <div class="hero-visual" aria-hidden="true">
    <div class="hero-img-wrap">
      <img
        src="{{ \App\Models\Setting::get('hero_gambar') ? asset('storage/' . \App\Models\Setting::get('hero_gambar')) : 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80' }}"
        alt="Psikolog An Moerty Banyuwangi memberikan konseling profesional"
        class="hero-img-main"
        loading="eager"
        fetchpriority="high"
        width="520"
        height="650">

      {{-- Floating Card TL --}}
      <div class="hero-img-card hero-img-card--tl">
        <div class="hero-card-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div class="hero-card-text">
          <span class="num">Terpercaya</span>
          <span class="desc">Profesional & Terstandarisasi</span>
        </div>
      </div>

      {{-- Floating Card BR --}}
      <div class="hero-img-card hero-img-card--br">
        <div class="hero-card-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
        </div>
        <div class="hero-card-text">
          <span class="num">500+</span>
          <span class="desc">Klien Puas</span>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===================== TENTANG / ABOUT SECTION ===================== --}}
<section class="section" id="tentang" aria-labelledby="about-heading">
  <div class="container">
    <div class="about-layout">

      {{-- Image --}}
      <div class="about-visual reveal">
        <img
          src="{{ \App\Models\Setting::get('tentang_gambar') ? asset('storage/' . \App\Models\Setting::get('tentang_gambar')) : 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=700&q=80' }}"
          alt="Tim psikolog An Moerty Psikologi Banyuwangi"
          class="about-img"
          loading="lazy"
          width="560"
          height="700">
        <div class="about-badge" aria-hidden="true">
          <div class="about-badge-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <div class="about-badge-text">
            <span class="num">10+ Tahun</span>
            <span class="label">Pengalaman</span>
          </div>
        </div>
      </div>

      {{-- Content --}}
      <div class="about-content reveal reveal-delay-2">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title" id="about-heading">AN MOERTY PSIKOLOGI</h2>
        <p style="font-size:1.0625rem; color:var(--clr-text-2); line-height:1.8; margin-bottom:var(--space-6);">
          Biro Psikologi & Konseling An Moerty Banyuwangi merupakan sebuah lembaga Asesmen Center yang memberikan pelayanan pada masyarakat dalam bentuk jasa profesional.
        </p>
        <p style="font-size:1.0625rem; color:var(--clr-text-2); line-height:1.8; margin-bottom:var(--space-8);">
          Kami berfokus pada layanan profesional seperti <strong>Student Profiling & Study Analysis</strong> serta identifikasi hambatan belajar untuk peserta didik sehingga dapat memberikan rekomendasi yang tepat.
        </p>

        <div class="about-features">
          <div class="about-feature">
            <div class="about-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Asesmen Terstandarisasi</div>
              <div class="about-feature-desc">Menggunakan instrumen psikologi yang telah teruji validitas dan reliabilitasnya.</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Tim Psikolog Berpengalaman</div>
              <div class="about-feature-desc">Didukung tim psikolog profesional dengan pengalaman lebih dari 10 tahun.</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Kerahasiaan Terjamin</div>
              <div class="about-feature-desc">Seluruh data dan informasi klien dijaga kerahasiaannya sesuai kode etik profesi.</div>
            </div>
          </div>
        </div>

        <div class="mt-8">
          <a href="{{ route('tentang') }}" class="btn btn--outline">
            Pelajari Lebih Lanjut
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ===================== LAYANAN SECTION ===================== --}}
<section class="section section--alt" id="layanan" aria-labelledby="layanan-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Layanan Kami</div>
      <h2 class="section-title" id="layanan-heading">Bersama Tumbuh Menjadi Lebih Baik</h2>
      <p class="section-subtitle">Program psikologi terapan yang dirancang khusus untuk membawa perubahan positif bagi individu maupun tim kerja.</p>
    </div>

    <div class="grid-auto-3">
      @forelse ($layanan as $i => $item)
        <article class="service-card reveal reveal-delay-{{ ($i % 3) + 1 }}" aria-labelledby="layanan-{{ $item->id }}">
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

          <div>
            <span class="card-badge">{{ $item->kategori->nama ?? '' }}</span>
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

    <div class="text-center mt-12 reveal">
      <a href="{{ route('layanan.index') }}" class="btn btn--outline">Lihat Semua Layanan</a>
    </div>
  </div>
</section>

{{-- ===================== STATS SECTION ===================== --}}
<section class="section--sm" aria-label="Statistik An Moerty Psikologi">
  <div class="container">
    <div class="stats-grid reveal" role="list">
      <div class="stat-item" role="listitem">
        <span class="stat-num">10+</span>
        <span class="stat-label">Tahun<br>Pengalaman</span>
      </div>
      <div class="stat-item" role="listitem">
        <span class="stat-num">500+</span>
        <span class="stat-label">Klien<br>Terlayani</span>
      </div>
      <div class="stat-item" role="listitem">
        <span class="stat-num">7</span>
        <span class="stat-label">Jenis<br>Layanan</span>
      </div>
      <div class="stat-item" role="listitem">
        <span class="stat-num">100%</span>
        <span class="stat-label">Kerahasiaan<br>Terjamin</span>
      </div>
    </div>
  </div>
</section>

{{-- ===================== TESTIMONI SECTION ===================== --}}
@if($testimoni->count())
<section class="section section--alt" id="testimoni" aria-labelledby="testi-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Testimoni</div>
      <h2 class="section-title" id="testi-heading">Yang Mereka Katakan</h2>
      <p class="section-subtitle">Kepercayaan klien adalah prioritas utama kami dalam setiap layanan yang diberikan.</p>
    </div>

    <style>
      .testi-slider-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 1rem 0;
      }
      .testi-slider-track {
        display: flex;
        gap: 1.5rem;
        width: max-content;
        animation: scrollTesti 30s linear infinite;
      }
      .testi-slider-track:hover {
        animation-play-state: paused;
      }
      .testi-card-slide {
        flex: 0 0 320px;
        display: flex;
        flex-direction: column;
        height: auto; /* Let flex handle the stretch */
      }
      /* Mengatasi flex child agar isinya mengisi seluruh ruang (tinggi yang sama) */
      .testi-card-slide > blockquote {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
      }
      @keyframes scrollTesti {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-50% - 0.75rem)); }
      }
      @media (max-width: 768px) {
        .testi-card-slide { flex: 0 0 280px; }
      }
    </style>

    <div class="testi-slider-container reveal">
      <div class="testi-slider-track">
        {{-- Kita duplikasi array-nya agar animasinya continuous (seamless loop) --}}
        @foreach(array_merge($testimoni->all(), $testimoni->all()) as $i => $testi)
          <article class="testi-card testi-card-slide h-full">
            <div class="testi-stars" aria-label="{{ $testi->rating }} dari 5 bintang">
              @for($s = 1; $s <= 5; $s++)
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  @if($s <= $testi->rating)
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="#FBBF24" stroke="#FBBF24"/>
                  @else
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="none" stroke="#E5E7EB" stroke-width="2"/>
                  @endif
                </svg>
              @endfor
            </div>

            <blockquote>
              <p class="testi-text mb-4">"{{ $testi->isi }}"</p>
            </blockquote>

            <div class="testi-author mt-auto">
              @if($testi->foto)
                <img src="{{ asset('storage/' . $testi->foto) }}" alt="Foto {{ $testi->nama }}" class="testi-avatar" width="44" height="44" loading="lazy">
              @else
                <div class="testi-avatar" aria-hidden="true">{{ $testi->initials }}</div>
              @endif
              <div>
                <div class="testi-name">{{ $testi->nama }}</div>
                <div class="testi-role">{{ $testi->jabatan }}@if($testi->institusi) — {{ $testi->institusi }}@endif</div>
              </div>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endif

{{-- ===================== FAQ TEASER ===================== --}}
@if($faq->count())
<section class="section" id="faq" aria-labelledby="faq-heading">
  <div class="container" style="max-width: 800px;">
    <div class="section-header section-header--center reveal">
      <div class="section-label">FAQ</div>
      <h2 class="section-title" id="faq-heading">Pertanyaan yang Sering Diajukan</h2>
    </div>

    <div style="display:flex; flex-direction:column; gap:var(--space-3);" role="list">
      @foreach($faq as $i => $item)
        <div class="faq-item reveal reveal-delay-{{ ($i % 3) + 1 }}" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-{{ $item->id }}">
            {{ $item->pertanyaan }}
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer" id="faq-ans-{{ $item->id }}" role="region">
            <div class="faq-answer-inner">{{ $item->jawaban }}</div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="text-center mt-8 reveal">
      <a href="{{ route('faq.index') }}" class="btn btn--ghost">
        Lihat Semua FAQ
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      </a>
    </div>
  </div>
</section>
@endif

{{-- ===================== ARTIKEL TERBARU ===================== --}}
@if($artikel->count())
<section class="section section--alt" id="artikel" aria-labelledby="artikel-heading">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">Artikel Terbaru</div>
      <h2 class="section-title" id="artikel-heading">Wawasan & Informasi Psikologi</h2>
      <p class="section-subtitle">Temukan artikel informatif seputar psikologi, konseling, dan pengembangan diri.</p>
    </div>

    <div class="grid-3">
      @foreach($artikel as $i => $art)
        <article class="card reveal reveal-delay-{{ $i + 1 }}" aria-labelledby="art-{{ $art->id }}">
          <a href="{{ route('artikel.show', $art->slug) }}" tabindex="-1" aria-hidden="true">
            <img
              src="{{ $art->gambar_utama ? asset('storage/' . $art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80' }}"
              alt="{{ $art->alt_gambar ?? $art->judul }}"
              class="card-img"
              loading="lazy"
              width="400"
              height="160">
          </a>
          <div class="card-body">
            @if($art->kategori)
              <span class="card-badge">{{ $art->kategori->nama }}</span>
            @endif
            <h3 class="card-title" id="art-{{ $art->id }}">
              <a href="{{ route('artikel.show', $art->slug) }}">{{ $art->judul }}</a>
            </h3>
            <p class="card-text">{{ Str::limit($art->excerpt, 120) }}</p>
            <div class="card-meta">
              <span>{{ $art->published_at?->translatedFormat('d M Y') }}</span>
              @if($art->penulis)
                <span>· {{ $art->penulis }}</span>
              @endif
            </div>
          </div>
        </article>
      @endforeach
    </div>

    <div class="text-center mt-8 reveal">
      <a href="{{ route('artikel.index') }}" class="btn btn--outline">Lihat Semua Artikel</a>
    </div>
  </div>
</section>
@endif

{{-- ===================== CTA SECTION ===================== --}}
<section class="section" aria-labelledby="cta-heading">
  <div class="container">
    <div class="cta-section reveal">
      <div class="cta-content">
        <span class="label-tag" style="margin-bottom:var(--space-4);">Konsultasi Gratis</span>
        <h2 class="cta-title" id="cta-heading">Siap Memulai Perjalanan<br>Menuju Diri Terbaik?</h2>
        <p class="cta-subtitle">Hubungi kami sekarang dan dapatkan konsultasi awal gratis bersama tim psikolog profesional An Moerty Banyuwangi.</p>
        <div class="cta-actions">
          <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179'))) }}?text={{ urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin konsultasi gratis. Bisakah kita berbicara?')) }}" class="btn btn--white btn--lg" target="_blank" rel="noopener noreferrer">
            <x-icon.whatsapp style="width: 18px; height: 18px;" />
            Chat WhatsApp
          </a>
          <a href="{{ route('kontak.index') }}" class="btn btn--outline-white btn--lg">Kirim Pesan</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
