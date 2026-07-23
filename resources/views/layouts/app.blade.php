<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">

  {{-- SEO --}}
  <title>@yield('title', 'Psikologi Banyuwangi — An Moerty | Layanan Psikologi & Konseling Profesional')</title>
  <meta name="description" content="@yield('description', 'Lembaga asesmen dan layanan konseling profesional di Banyuwangi. Melayani student profiling, study analysis, dan identifikasi hambatan belajar.')">
  <meta name="keywords" content="@yield('keywords', 'psikologi banyuwangi, konseling banyuwangi, psikotes banyuwangi, an moerty psikologi')">
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- Open Graph --}}
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:title" content="@yield('og_title', 'An Moerty Psikologi Banyuwangi')">
  <meta property="og:description" content="@yield('og_description', 'Lembaga asesmen dan layanan konseling profesional di Banyuwangi.')">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:site_name" content="Psikologi Banyuwangi">
  <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
  <meta name="twitter:card" content="summary_large_image">

  {{-- Schema.org --}}
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "An Moerty Psikologi Banyuwangi",
    "description": "Biro Psikologi & Konseling profesional di Banyuwangi",
    "url": "{{ url('/') }}",
    "telephone": "+620822-3339-2179",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Progo No. 59",
      "addressLocality": "Banyuwangi",
      "addressRegion": "Jawa Timur",
      "postalCode": "68415",
      "addressCountry": "ID"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": -8.2159187,
      "longitude": 114.3642738
    },
    "openingHours": "Mo-Fr 08:00-17:00"
  }
  </script>

  {{-- Preload Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  {{-- Main CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  @stack('styles')
</head>
<body>

  {{-- Skip Navigation (Accessibility) --}}
  <a class="skip-link" href="#main-content">Lewati ke konten utama</a>

  {{-- ===== NAVBAR ===== --}}
  <nav id="navbar" role="navigation" aria-label="Navigasi Utama">
    <div class="container navbar-inner">

      {{-- Logo --}}
      <a href="{{ route('home') }}" class="navbar-logo" aria-label="An Moerty Psikologi — Beranda">
        <div class="navbar-logo-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <div class="navbar-logo-text">
          <span class="brand">An Moerty</span>
          <span class="tagline">Psikologi Banyuwangi</span>
        </div>
      </a>

      {{-- Desktop Nav --}}
      <ul class="navbar-nav" role="list">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('tentang') }}" class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('layanan.index') }}" class="nav-link {{ request()->routeIs('layanan.*') ? 'active' : '' }}" aria-haspopup="true" aria-expanded="false">
            Layanan
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </a>
          <div class="dropdown" role="menu" aria-label="Sub-menu Layanan">
            <div class="dropdown-label">Psychological Assessment</div>
            <a href="{{ route('layanan.show', 'psikotes') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
              Psikotes
            </a>
            <a href="{{ route('layanan.show', 'interview') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              Interview Psikologis
            </a>
            <a href="{{ route('layanan.show', 'fgd') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
              FGD
            </a>
            <div class="dropdown-divider" role="separator"></div>
            <div class="dropdown-label">Counseling</div>
            <a href="{{ route('layanan.show', 'konseling-kerja') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
              Konseling Kerja Karyawan
            </a>
            <a href="{{ route('layanan.show', 'konseling-masalah') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              Konseling Permasalahan
            </a>
            <div class="dropdown-divider" role="separator"></div>
            <div class="dropdown-label">Training</div>
            <a href="{{ route('layanan.show', 'training-indoor') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              Training Indoor
            </a>
            <a href="{{ route('layanan.show', 'training-outdoor') }}" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 17l4-8 4 5 3-3 4 6"/><path d="M3 21h18"/></svg>
              Training Outdoor
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="{{ route('artikel.index') }}" class="nav-link {{ request()->routeIs('artikel.*') ? 'active' : '' }}">Artikel</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('faq.index') }}" class="nav-link {{ request()->routeIs('faq.*') ? 'active' : '' }}">FAQ</a>
        </li>
      </ul>

      {{-- Nav CTA --}}
      <div class="navbar-cta">
        <a href="{{ route('kontak.index') }}" class="btn btn--primary btn--sm">Konsultasi Gratis</a>
      </div>

      {{-- Hamburger Mobile --}}
      <button class="hamburger" id="hamburgerBtn" aria-label="Buka Menu" aria-expanded="false" aria-controls="mobileMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>

  {{-- ===== MOBILE MENU ===== --}}
  <div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Menu Navigasi Mobile" aria-modal="true">
    <a href="{{ route('home') }}" class="mobile-nav-link">Beranda</a>
    <a href="{{ route('tentang') }}" class="mobile-nav-link">Tentang Kami</a>

    <div>
      <button class="mobile-nav-link" id="mobileLayananBtn" aria-expanded="false" style="width:100%;background:none;border:none;cursor:pointer;font:inherit;text-align:left;">
        Layanan
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="mobile-submenu" id="mobileLayananSub">
        <a href="{{ route('layanan.show', 'psikotes') }}" class="mobile-submenu-link">Psikotes</a>
        <a href="{{ route('layanan.show', 'interview') }}" class="mobile-submenu-link">Interview Psikologis</a>
        <a href="{{ route('layanan.show', 'fgd') }}" class="mobile-submenu-link">FGD (Focus Group Discussion)</a>
        <a href="{{ route('layanan.show', 'konseling-kerja') }}" class="mobile-submenu-link">Konseling Kerja Karyawan</a>
        <a href="{{ route('layanan.show', 'konseling-masalah') }}" class="mobile-submenu-link">Konseling Permasalahan</a>
        <a href="{{ route('layanan.show', 'training-indoor') }}" class="mobile-submenu-link">Training Indoor</a>
        <a href="{{ route('layanan.show', 'training-outdoor') }}" class="mobile-submenu-link">Training Outdoor</a>
      </div>
    </div>

    <a href="{{ route('artikel.index') }}" class="mobile-nav-link">Artikel</a>
    <a href="{{ route('faq.index') }}" class="mobile-nav-link">FAQ</a>
    <a href="{{ route('testimoni.index') }}" class="mobile-nav-link">Testimoni</a>
    <a href="{{ route('tim.index') }}" class="mobile-nav-link">Tim Psikolog</a>

    <div style="padding-top: 1.5rem;">
      <a href="{{ route('kontak.index') }}" class="btn btn--primary btn--full">Konsultasi Gratis</a>
    </div>
  </div>

  {{-- ===== MAIN CONTENT ===== --}}
  <main id="main-content" tabindex="-1">
    @yield('content')
  </main>

  {{-- ===== FOOTER ===== --}}
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">

        {{-- Col 1: Brand --}}
        <div>
          <div class="footer-logo">
            <div class="footer-logo-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                <path d="M12 6v6l4 2"/>
              </svg>
            </div>
            <span class="footer-logo-text">An Moerty</span>
          </div>
          <p class="footer-desc">Biro Psikologi & Konseling An Moerty Banyuwangi — lembaga asesmen profesional yang berdedikasi mendukung kesehatan mental dan pengembangan diri.</p>
          <div class="footer-socials" aria-label="Media Sosial">
            <a href="https://www.instagram.com/anmoerty.psikologi" class="footer-social-link" aria-label="Instagram An Moerty Psikologi" target="_blank" rel="noopener">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
            </a>
            <a href="https://www.youtube.com/@AnMoerty" class="footer-social-link" aria-label="YouTube An Moerty Psikologi" target="_blank" rel="noopener">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2C1 8.17 1 12 1 12s0 3.83.46 5.58a2.78 2.78 0 001.94 2C5.12 20 12 20 12 20s6.88 0 8.6-.42a2.78 2.78 0 001.94-2C23 15.83 23 12 23 12s0-3.83-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg>
            </a>
            <a href="https://www.tiktok.com/@anmoerty_bwi" class="footer-social-link" aria-label="TikTok An Moerty Psikologi" target="_blank" rel="noopener">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 12a4 4 0 104 4V4a5 5 0 005 5"/></svg>
            </a>
          </div>
        </div>

        {{-- Col 2: Navigasi --}}
        <div>
          <h3 class="footer-col-title">Navigasi</h3>
          <ul class="footer-links" role="list">
            <li><a href="{{ route('home') }}" class="footer-link">Beranda</a></li>
            <li><a href="{{ route('tentang') }}" class="footer-link">Tentang Kami</a></li>
            <li><a href="{{ route('layanan.index') }}" class="footer-link">Layanan</a></li>
            <li><a href="{{ route('artikel.index') }}" class="footer-link">Artikel</a></li>
            <li><a href="{{ route('faq.index') }}" class="footer-link">FAQ</a></li>
            <li><a href="{{ route('testimoni.index') }}" class="footer-link">Testimoni</a></li>
            <li><a href="{{ route('tim.index') }}" class="footer-link">Tim Psikolog</a></li>
            <li><a href="{{ route('kontak.index') }}" class="footer-link">Hubungi Kami</a></li>
          </ul>
        </div>

        {{-- Col 3: Layanan --}}
        <div>
          <h3 class="footer-col-title">Layanan</h3>
          <ul class="footer-links" role="list">
            <li><a href="{{ route('layanan.show', 'psikotes') }}" class="footer-link">Psikotes</a></li>
            <li><a href="{{ route('layanan.show', 'interview') }}" class="footer-link">Interview Psikologis</a></li>
            <li><a href="{{ route('layanan.show', 'fgd') }}" class="footer-link">FGD</a></li>
            <li><a href="{{ route('layanan.show', 'konseling-kerja') }}" class="footer-link">Konseling Kerja</a></li>
            <li><a href="{{ route('layanan.show', 'konseling-masalah') }}" class="footer-link">Konseling Permasalahan</a></li>
            <li><a href="{{ route('layanan.show', 'training-indoor') }}" class="footer-link">Training Indoor</a></li>
            <li><a href="{{ route('layanan.show', 'training-outdoor') }}" class="footer-link">Training Outdoor</a></li>
          </ul>
        </div>

        {{-- Col 4: Kontak & Maps --}}
        <div>
          <h3 class="footer-col-title">Hubungi Kami</h3>
          <address style="font-style:normal;">
            <div class="footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 015.12 12.63 19.79 19.79 0 012.05 4a2 2 0 011.72-2.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
              <a href="https://wa.me/6208223392179" target="_blank" rel="noopener" style="color:inherit;">0822-3339-2179</a>
            </div>
            <div class="footer-contact-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Jl. Progo No. 59, Banyuwangi, Jawa Timur 68415</span>
            </div>
          </address>
          {{-- Google Maps --}}
          <div class="footer-map-wrap" aria-label="Peta lokasi An Moerty Psikologi Banyuwangi">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.86877953051!2d114.3642738!3d-8.2159187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15ab2f6631b17%3A0xc3c5ab04bb520b2!2sPsikologi%20Banyuwangi%20(An%20Moerty)!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Lokasi An Moerty Psikologi Banyuwangi"
              allowfullscreen>
            </iframe>
          </div>
        </div>

      </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <p class="footer-copy">&copy; {{ date('Y') }} Psikologi Banyuwangi. All Rights Reserved | By <a href="#" rel="noopener">Semesta Multitekno</a></p>
          <p class="footer-copy">
            <a href="{{ route('kontak.index') }}" style="color:rgba(255,255,255,0.4)">Hubungi Kami</a>
            &nbsp;·&nbsp;
            <a href="{{ route('faq.index') }}" style="color:rgba(255,255,255,0.4)">FAQ</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  {{-- ===== FLOATING WHATSAPP ===== --}}
  <div class="wa-float" role="complementary" aria-label="Hubungi via WhatsApp">
    <span class="wa-float-tooltip" aria-hidden="true">Hubungi via WhatsApp</span>
    <a
      href="https://wa.me/6208223392179?text={{ urlencode('Halo An Moerty Psikologi, saya ingin berkonsultasi mengenai layanan psikologi Anda.') }}"
      class="wa-float-btn"
      target="_blank"
      rel="noopener"
      aria-label="Chat WhatsApp dengan An Moerty Psikologi">
      <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
      </svg>
    </a>
  </div>

  {{-- ===== BACK TO TOP ===== --}}
  <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas halaman" title="Kembali ke atas">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true">
      <polyline points="18 15 12 9 6 15"/>
    </svg>
  </button>

  {{-- ===== JAVASCRIPT ===== --}}
  <script>
    // ─── Navbar scroll effect ───────────────────────────────────────────────
    const navbar = document.getElementById('navbar');
    const scrollHandler = () => {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    };
    window.addEventListener('scroll', scrollHandler, { passive: true });
    scrollHandler();

    // ─── Mobile Menu ────────────────────────────────────────────────────────
    const hamburger  = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('open', open);
      hamburger.setAttribute('aria-expanded', open);
      document.body.style.overflow = open ? 'hidden' : '';
    });

    // Close on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });

    // Mobile submenu toggle
    const mobileLayananBtn = document.getElementById('mobileLayananBtn');
    const mobileLayananSub = document.getElementById('mobileLayananSub');
    mobileLayananBtn?.addEventListener('click', () => {
      const open = mobileLayananSub.classList.toggle('open');
      mobileLayananBtn.setAttribute('aria-expanded', open);
    });

    // ─── Back To Top ────────────────────────────────────────────────────────
    const btt = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
      btt.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });

    btt.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ─── Reveal animations (Intersection Observer) ──────────────────────────
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // ─── FAQ Accordion ──────────────────────────────────────────────────────
    document.querySelectorAll('.faq-question').forEach(btn => {
      btn.addEventListener('click', () => {
        const item = btn.closest('.faq-item');
        const isOpen = item.classList.contains('open');
        // Close all
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        // Toggle current
        if (!isOpen) item.classList.add('open');
      });
    });

    // ─── Escape key closes mobile menu ──────────────────────────────────────
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        hamburger.focus();
      }
    });
  </script>

  @stack('scripts')
</body>
</html>
