<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">

  
  <title><?php echo $__env->yieldContent('title', 'Psikologi Banyuwangi — An Moerty | Layanan Psikologi & Konseling Profesional'); ?></title>
  <meta name="description" content="<?php echo $__env->yieldContent('description', 'Lembaga asesmen dan layanan konseling profesional di Banyuwangi. Melayani student profiling, study analysis, dan identifikasi hambatan belajar.'); ?>">
  <meta name="keywords" content="<?php echo $__env->yieldContent('keywords', 'psikologi banyuwangi, konseling banyuwangi, psikotes banyuwangi, an moerty psikologi'); ?>">
  <link rel="canonical" href="<?php echo e(url()->current()); ?>">

  
  <meta property="og:type" content="<?php echo $__env->yieldContent('og_type', 'website'); ?>">
  <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', 'An Moerty Psikologi Banyuwangi'); ?>">
  <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'Lembaga asesmen dan layanan konseling profesional di Banyuwangi.'); ?>">
  <meta property="og:url" content="<?php echo e(url()->current()); ?>">
  <meta property="og:site_name" content="Psikologi Banyuwangi">
  <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('images/og-default.jpg')); ?>">
  <meta name="twitter:card" content="summary_large_image">

  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "<?php echo e(\App\Models\Setting::get('seo_site_name', 'An Moerty Psikologi Banyuwangi')); ?>",
    "description": "<?php echo e(\App\Models\Setting::get('seo_description', 'Biro Psikologi & Konseling profesional di Banyuwangi')); ?>",
    "url": "<?php echo e(url('/')); ?>",
    "telephone": "<?php echo e(\App\Models\Setting::get('kontak_telpon', '+620822-3339-2179')); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo e(\App\Models\Setting::get('kontak_alamat_1', 'Jl. Progo No. 59')); ?>",
      "addressLocality": "Banyuwangi",
      "addressRegion": "Jawa Timur",
      "addressCountry": "ID"
    },
    "openingHours": "Mo-Fr 08:00-17:00"
  }
  </script>

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/style.css']); ?>

  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

  
  <a class="skip-link" href="#main-content">Lewati ke konten utama</a>

  
  <nav id="navbar" role="navigation" aria-label="Navigasi Utama">
    <div class="container navbar-inner">

      
      <a href="<?php echo e(route('home')); ?>" class="navbar-logo" aria-label="An Moerty Psikologi — Beranda">
        <div class="navbar-logo-icon" aria-hidden="true">
          <?php if (isset($component)) { $__componentOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.logo','data' => ['class' => 'text-white','style' => 'width: 20px; height: 20px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','style' => 'width: 20px; height: 20px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9)): ?>
<?php $attributes = $__attributesOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9; ?>
<?php unset($__attributesOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9)): ?>
<?php $component = $__componentOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9; ?>
<?php unset($__componentOriginal2b6f9fe004ca6dd33a48f4f6eb431ad9); ?>
<?php endif; ?>
        </div>
        <div class="navbar-logo-text">
          <span class="brand">An Moerty</span>
          <span class="tagline">Psikologi Banyuwangi</span>
        </div>
      </a>

      
      <ul class="navbar-nav" role="list">
        <li class="nav-item">
          <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('tentang')); ?>" class="nav-link <?php echo e(request()->routeIs('tentang') ? 'active' : ''); ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('layanan.index')); ?>" class="nav-link <?php echo e(request()->routeIs('layanan.*') ? 'active' : ''); ?>" aria-haspopup="true" aria-expanded="false">
            Layanan
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </a>
          <div class="dropdown" role="menu" aria-label="Sub-menu Layanan">
            <div class="dropdown-label">Psychological Assessment</div>
            <a href="<?php echo e(route('layanan.show', 'psikotes')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
              Psikotes
            </a>
            <a href="<?php echo e(route('layanan.show', 'interview')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
              Interview Psikologis
            </a>
            <a href="<?php echo e(route('layanan.show', 'fgd')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
              FGD
            </a>
            <div class="dropdown-divider" role="separator"></div>
            <div class="dropdown-label">Counseling</div>
            <a href="<?php echo e(route('layanan.show', 'konseling-kerja')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
              Konseling Kerja Karyawan
            </a>
            <a href="<?php echo e(route('layanan.show', 'konseling-masalah')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              Konseling Permasalahan
            </a>
            <div class="dropdown-divider" role="separator"></div>
            <div class="dropdown-label">Training</div>
            <a href="<?php echo e(route('layanan.show', 'training-indoor')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              Training Indoor
            </a>
            <a href="<?php echo e(route('layanan.show', 'training-outdoor')); ?>" class="dropdown-link" role="menuitem">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 17l4-8 4 5 3-3 4 6"/><path d="M3 21h18"/></svg>
              Training Outdoor
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('artikel.index')); ?>" class="nav-link <?php echo e(request()->routeIs('artikel.*') ? 'active' : ''); ?>">Artikel</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('faq.index')); ?>" class="nav-link <?php echo e(request()->routeIs('faq.*') ? 'active' : ''); ?>">FAQ</a>
        </li>
      </ul>

      
      <div class="navbar-cta">
        <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn--primary btn--sm">Konsultasi Gratis</a>
      </div>

      
      <button class="hamburger" id="hamburgerBtn" aria-label="Buka Menu" aria-expanded="false" aria-controls="mobileMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>

  
  <div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Menu Navigasi Mobile" aria-modal="true">
    <a href="<?php echo e(route('home')); ?>" class="mobile-nav-link">Beranda</a>
    <a href="<?php echo e(route('tentang')); ?>" class="mobile-nav-link">Tentang Kami</a>

    <div>
      <button class="mobile-nav-link" id="mobileLayananBtn" aria-expanded="false" style="width:100%;background:none;border:none;cursor:pointer;font:inherit;text-align:left;">
        Layanan
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="mobile-submenu" id="mobileLayananSub">
        <a href="<?php echo e(route('layanan.show', 'psikotes')); ?>" class="mobile-submenu-link">Psikotes</a>
        <a href="<?php echo e(route('layanan.show', 'interview')); ?>" class="mobile-submenu-link">Interview Psikologis</a>
        <a href="<?php echo e(route('layanan.show', 'fgd')); ?>" class="mobile-submenu-link">FGD (Focus Group Discussion)</a>
        <a href="<?php echo e(route('layanan.show', 'konseling-kerja')); ?>" class="mobile-submenu-link">Konseling Kerja Karyawan</a>
        <a href="<?php echo e(route('layanan.show', 'konseling-masalah')); ?>" class="mobile-submenu-link">Konseling Permasalahan</a>
        <a href="<?php echo e(route('layanan.show', 'training-indoor')); ?>" class="mobile-submenu-link">Training Indoor</a>
        <a href="<?php echo e(route('layanan.show', 'training-outdoor')); ?>" class="mobile-submenu-link">Training Outdoor</a>
      </div>
    </div>

    <a href="<?php echo e(route('artikel.index')); ?>" class="mobile-nav-link">Artikel</a>
    <a href="<?php echo e(route('faq.index')); ?>" class="mobile-nav-link">FAQ</a>
    <a href="<?php echo e(route('tim.index')); ?>" class="mobile-nav-link">Tim Psikolog</a>

    <div style="padding-top: 1.5rem;">
      <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn--primary btn--full">Konsultasi Gratis</a>
    </div>
  </div>

  
  <main id="main-content" tabindex="-1">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">

        
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
            <a href="<?php echo e(\App\Models\Setting::get('sosmed_instagram', 'https://www.instagram.com/anmoerty.psikologi')); ?>" class="footer-social-link" aria-label="Instagram An Moerty Psikologi" target="_blank" rel="noopener noreferrer">
              <?php if (isset($component)) { $__componentOriginal68f211c6a4012b6b0321cce31e730d91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68f211c6a4012b6b0321cce31e730d91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.instagram','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.instagram'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68f211c6a4012b6b0321cce31e730d91)): ?>
<?php $attributes = $__attributesOriginal68f211c6a4012b6b0321cce31e730d91; ?>
<?php unset($__attributesOriginal68f211c6a4012b6b0321cce31e730d91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68f211c6a4012b6b0321cce31e730d91)): ?>
<?php $component = $__componentOriginal68f211c6a4012b6b0321cce31e730d91; ?>
<?php unset($__componentOriginal68f211c6a4012b6b0321cce31e730d91); ?>
<?php endif; ?>
            </a>
            <a href="<?php echo e(\App\Models\Setting::get('sosmed_youtube', 'https://www.youtube.com/@AnMoerty')); ?>" class="footer-social-link" aria-label="YouTube An Moerty Psikologi" target="_blank" rel="noopener noreferrer">
              <?php if (isset($component)) { $__componentOriginal2565b0b085d09388415f81b0394ebaec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2565b0b085d09388415f81b0394ebaec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.youtube','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.youtube'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2565b0b085d09388415f81b0394ebaec)): ?>
<?php $attributes = $__attributesOriginal2565b0b085d09388415f81b0394ebaec; ?>
<?php unset($__attributesOriginal2565b0b085d09388415f81b0394ebaec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2565b0b085d09388415f81b0394ebaec)): ?>
<?php $component = $__componentOriginal2565b0b085d09388415f81b0394ebaec; ?>
<?php unset($__componentOriginal2565b0b085d09388415f81b0394ebaec); ?>
<?php endif; ?>
            </a>
            <a href="<?php echo e(\App\Models\Setting::get('sosmed_tiktok', 'https://www.tiktok.com/@anmoerty_bwi')); ?>" class="footer-social-link" aria-label="TikTok An Moerty Psikologi" target="_blank" rel="noopener noreferrer">
              <?php if (isset($component)) { $__componentOriginalb13bea63833211887ce3297a0ae47299 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb13bea63833211887ce3297a0ae47299 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.tiktok','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.tiktok'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb13bea63833211887ce3297a0ae47299)): ?>
<?php $attributes = $__attributesOriginalb13bea63833211887ce3297a0ae47299; ?>
<?php unset($__attributesOriginalb13bea63833211887ce3297a0ae47299); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb13bea63833211887ce3297a0ae47299)): ?>
<?php $component = $__componentOriginalb13bea63833211887ce3297a0ae47299; ?>
<?php unset($__componentOriginalb13bea63833211887ce3297a0ae47299); ?>
<?php endif; ?>
            </a>
          </div>
        </div>

        
        <div>
          <h3 class="footer-col-title">Navigasi</h3>
          <ul class="footer-links" role="list">
            <li><a href="<?php echo e(route('home')); ?>" class="footer-link">Beranda</a></li>
            <li><a href="<?php echo e(route('tentang')); ?>" class="footer-link">Tentang Kami</a></li>
            <li><a href="<?php echo e(route('layanan.index')); ?>" class="footer-link">Layanan</a></li>
            <li><a href="<?php echo e(route('artikel.index')); ?>" class="footer-link">Artikel</a></li>
            <li><a href="<?php echo e(route('faq.index')); ?>" class="footer-link">FAQ</a></li>
            <li><a href="<?php echo e(route('tim.index')); ?>" class="footer-link">Tim Psikolog</a></li>
            <li><a href="<?php echo e(route('kontak.index')); ?>" class="footer-link">Hubungi Kami</a></li>
          </ul>
        </div>

        
        <div>
          <h3 class="footer-col-title">Layanan</h3>
          <ul class="footer-links" role="list">
            <li><a href="<?php echo e(route('layanan.show', 'psikotes')); ?>" class="footer-link">Psikotes</a></li>
            <li><a href="<?php echo e(route('layanan.show', 'interview')); ?>" class="footer-link">Interview Psikologis</a></li>
            <li><a href="<?php echo e(route('layanan.show', 'fgd')); ?>" class="footer-link">FGD</a></li>
            <li><a href="<?php echo e(route('layanan.show', 'konseling-kerja')); ?>" class="footer-link">Konseling Kerja</a></li>
            <li><a href="<?php echo e(route('layanan.show', 'konseling-masalah')); ?>" class="footer-link">Konseling Permasalahan</a></li>
            <li><a href="<?php echo e(route('layanan.show', 'training-indoor')); ?>" class="footer-link">Training Indoor</a></li>
            <li><a href="<?php echo e(route('layanan.show', 'training-outdoor')); ?>" class="footer-link">Training Outdoor</a></li>
          </ul>
        </div>

        
        <div>
          <h3 class="footer-col-title">Hubungi Kami</h3>
          <address style="font-style:normal;">
            <div class="footer-contact-item">
              <?php if (isset($component)) { $__componentOriginaledff2ccfeec601febf5e74cf0afbb38c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.phone','data' => ['style' => 'width: 16px; height: 16px; margin-top: 2px; color: var(--clr-pink); flex-shrink: 0;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 16px; height: 16px; margin-top: 2px; color: var(--clr-pink); flex-shrink: 0;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c)): ?>
<?php $attributes = $__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c; ?>
<?php unset($__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledff2ccfeec601febf5e74cf0afbb38c)): ?>
<?php $component = $__componentOriginaledff2ccfeec601febf5e74cf0afbb38c; ?>
<?php unset($__componentOriginaledff2ccfeec601febf5e74cf0afbb38c); ?>
<?php endif; ?>
              <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>" target="_blank" rel="noopener noreferrer" style="color:inherit;"><?php echo e(\App\Models\Setting::get('kontak_telpon', '0822-3339-2179')); ?></a>
            </div>
            <div class="footer-contact-item">
              <?php if (isset($component)) { $__componentOriginal42b15001d75fca399aa782217cbcd2f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42b15001d75fca399aa782217cbcd2f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.map-pin','data' => ['style' => 'width: 16px; height: 16px; margin-top: 2px; color: var(--clr-pink); flex-shrink: 0;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 16px; height: 16px; margin-top: 2px; color: var(--clr-pink); flex-shrink: 0;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42b15001d75fca399aa782217cbcd2f3)): ?>
<?php $attributes = $__attributesOriginal42b15001d75fca399aa782217cbcd2f3; ?>
<?php unset($__attributesOriginal42b15001d75fca399aa782217cbcd2f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42b15001d75fca399aa782217cbcd2f3)): ?>
<?php $component = $__componentOriginal42b15001d75fca399aa782217cbcd2f3; ?>
<?php unset($__componentOriginal42b15001d75fca399aa782217cbcd2f3); ?>
<?php endif; ?>
              <span><?php echo e(\App\Models\Setting::get('kontak_alamat_1', 'Jl. Progo No. 59, Banyuwangi, Jawa Timur 68415')); ?></span>
            </div>
          </address>
          
          <div class="footer-map-wrap" aria-label="Peta lokasi An Moerty Psikologi Banyuwangi">
            <iframe
              src="<?php echo e(\App\Models\Setting::get('kontak_maps_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.86877953051!2d114.3642738!3d-8.2159187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15ab2f6631b17%3A0xc3c5ab04bb520b2!2sPsikologi%20Banyuwangi%20(An%20Moerty)!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid')); ?>"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Lokasi An Moerty Psikologi Banyuwangi"
              allowfullscreen>
            </iframe>
          </div>
        </div>

      </div>
    </div>

    
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <p class="footer-copy">&copy; <?php echo e(date('Y')); ?> Psikologi Banyuwangi. All Rights Reserved | By <a href="#" rel="noopener noreferrer">Semesta Multitekno</a></p>
          <p class="footer-copy">
            <a href="<?php echo e(route('kontak.index')); ?>" style="color:rgba(255,255,255,0.4)">Hubungi Kami</a>
            &nbsp;·&nbsp;
            <a href="<?php echo e(route('faq.index')); ?>" style="color:rgba(255,255,255,0.4)">FAQ</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  
  <div class="wa-float" role="complementary" aria-label="Hubungi via WhatsApp">
    <span class="wa-float-tooltip" aria-hidden="true">Hubungi via WhatsApp</span>
    <a
      href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>?text=<?php echo e(urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin berkonsultasi mengenai layanan psikologi Anda.'))); ?>"
      class="wa-float-btn"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Chat WhatsApp dengan An Moerty Psikologi">
      <?php if (isset($component)) { $__componentOriginal934a6fed68095f5c15b2a798e8efa6f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal934a6fed68095f5c15b2a798e8efa6f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.whatsapp','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.whatsapp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal934a6fed68095f5c15b2a798e8efa6f7)): ?>
<?php $attributes = $__attributesOriginal934a6fed68095f5c15b2a798e8efa6f7; ?>
<?php unset($__attributesOriginal934a6fed68095f5c15b2a798e8efa6f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal934a6fed68095f5c15b2a798e8efa6f7)): ?>
<?php $component = $__componentOriginal934a6fed68095f5c15b2a798e8efa6f7; ?>
<?php unset($__componentOriginal934a6fed68095f5c15b2a798e8efa6f7); ?>
<?php endif; ?>
    </a>
  </div>

  
  <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas halaman" title="Kembali ke atas">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true">
      <polyline points="18 15 12 9 6 15"/>
    </svg>
  </button>

  
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
    // ─── Number Counter Animation ───────────────────────────────────────────
    const animateValue = (obj, start, end, duration, suffix = "") => {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const easeProgress = 1 - Math.pow(1 - progress, 4); // easeOutQuart
        obj.innerHTML = Math.floor(easeProgress * (end - start) + start) + suffix;
        if (progress < 1) {
          window.requestAnimationFrame(step);
        } else {
          obj.innerHTML = end + suffix;
        }
      };
      window.requestAnimationFrame(step);
    };

    const numObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const text = el.innerText.trim();
          const match = text.match(/^(\d+)(.*)$/);
          if (match) {
            const num = parseInt(match[1], 10);
            const suffix = match[2] || "";
            // Set element width to avoid layout shift during animation
            el.style.display = 'inline-block';
            el.style.minWidth = el.offsetWidth + 'px';
            animateValue(el, 0, num, 2500, suffix);
          }
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.hero-stat-num, .stat-num, .about-badge-text .num, .hero-img-card .num').forEach(el => numObserver.observe(el));
  </script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\psikolog\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>