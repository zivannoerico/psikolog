<?php $__env->startSection('title', 'Tentang Kami — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Biro Psikologi & Konseling An Moerty Banyuwangi adalah lembaga Asesmen Center profesional yang melayani student profiling, asesmen, konseling, dan training.'); ?>
<?php $__env->startSection('og_title', 'Tentang Kami — An Moerty Psikologi'); ?>

<?php $__env->startSection('content'); ?>


<section class="page-hero" aria-labelledby="tentang-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Tentang Kami</span>
      </nav>
      <div class="section-label">Profil Kami</div>
      <h1 class="page-hero-title" id="tentang-heading">AN MOERTY PSIKOLOGI</h1>
      <p class="page-hero-subtitle">Biro Psikologi & Konseling profesional yang berdedikasi untuk mendukung kesehatan mental dan pengembangan diri di Banyuwangi.</p>
    </div>
  </div>
</section>


<section class="section" aria-labelledby="profil-heading">
  <div class="container">
    <div class="about-layout">
      <div class="about-visual reveal">
        <img
          src="<?php echo e(\App\Models\Setting::get('tentang_gambar') ? asset('storage/' . \App\Models\Setting::get('tentang_gambar')) : asset('images/bu-betty.webp')); ?>"
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


<section class="section section--alt" aria-labelledby="visimisi-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Nilai Kami</div>
      <h2 class="section-title" id="visimisi-heading">Visi & Misi</h2>
    </div>

    <div class="grid-2 reveal">
      
      <div class="service-card">
        <div class="service-icon-wrap" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
        </div>
        <div>
          <h3 class="service-card-title">Visi</h3>
          <p class="service-card-desc">Menjadi lembaga psikologi terpercaya yang memberikan kontribusi nyata bagi pengembangan individu dan organisasi di Jawa Timur.</p>
        </div>
      </div>

      
      <div class="service-card">
        <div class="service-icon-wrap" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
        <div>
          <h3 class="service-card-title">Misi</h3>
          <ul style="list-style:none; display:flex; flex-direction:column; gap:var(--space-3); margin-top:var(--space-3);">
            <?php $__currentLoopData = [
              'Memberikan layanan asesmen psikologis yang profesional dan terstandarisasi.',
              'Mendampingi individu dalam mengenali dan mengoptimalkan potensi diri.',
              'Membantu organisasi dalam pengembangan SDM yang efektif.',
              'Menjaga standar etika dan profesionalisme dalam setiap layanan.'
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li style="display:flex; align-items:flex-start; gap:var(--space-3); font-size:0.9375rem; color:var(--clr-text-2); line-height:1.6;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="2.5" style="flex-shrink:0; margin-top:2px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <?php echo e($misi); ?>

              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section" aria-labelledby="keunggulan-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Kenapa An Moerty?</div>
      <h2 class="section-title" id="keunggulan-heading">Keunggulan Kami</h2>
    </div>

    <div class="grid-4">
      <?php $__currentLoopData = [
        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label' => 'Profesional & Terstandarisasi', 'desc' => 'Menggunakan instrumen tes yang telah teruji secara ilmiah.'],
        ['icon' => 'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l8.91-1.01L12 2z', 'label' => '10+ Tahun Pengalaman', 'desc' => 'Rekam jejak panjang melayani individu dan korporasi.'],
        ['icon' => 'M3 11l19-9-9 19-2-8-8-2z', 'label' => 'Layanan Cepat & Tepat', 'desc' => 'Laporan psikologis akurat dengan turnaround yang efisien.'],
        ['icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', 'label' => 'Kerahasiaan Terjamin', 'desc' => 'Data klien dijaga sesuai kode etik profesi psikolog.'],
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="service-card text-center reveal reveal-delay-<?php echo e($i + 1); ?>" style="align-items:center;">
          <div class="service-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?php echo e($item['icon']); ?>"/></svg>
          </div>
          <h3 class="service-card-title" style="text-align:center;"><?php echo e($item['label']); ?></h3>
          <p class="service-card-desc" style="text-align:center;"><?php echo e($item['desc']); ?></p>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>




<?php if($galeri->count()): ?>
<section class="section" aria-labelledby="galeri-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Galeri</div>
      <h2 class="section-title" id="galeri-heading">Galeri Kegiatan</h2>
    </div>
    <div class="galeri-grid">
      <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="galeri-item reveal">
          <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->alt ?? $item->judul ?? 'Galeri An Moerty Psikologi'); ?>" loading="lazy" width="400" height="300">
          <div class="galeri-overlay" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php endif; ?>


<section class="section cta-compact-section" aria-labelledby="about-cta-heading" style="padding-top: 2rem; padding-bottom: 4rem;">
  <div class="container cta-container-compact">
    <div class="cta-clean-card reveal">
      <div class="cta-single-glow" aria-hidden="true"></div>
      <div class="cta-compact-grid">
        <div class="cta-left-minimal">
          <div class="cta-badge-minimal">
            <span class="cta-badge-dot-gold"></span>
            <span>Kolaborasi & Konsultasi</span>
          </div>
          <h2 class="cta-headline-compact" id="about-cta-heading">
            Siap Berkolaborasi<br>
            <span class="cta-gold-text">Bersama Tim An Moerty?</span>
          </h2>
          <p class="cta-desc-compact">
            Hubungi tim An Moerty Psikologi dan dapatkan layanan asesmen serta konseling profesional terbaik.
          </p>
          <div class="cta-compact-actions">
            <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>?text=<?php echo e(urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin konsultasi.'))); ?>" class="cta-btn-compact cta-btn-main" target="_blank" rel="noopener noreferrer">
              <?php if (isset($component)) { $__componentOriginal934a6fed68095f5c15b2a798e8efa6f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal934a6fed68095f5c15b2a798e8efa6f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.whatsapp','data' => ['style' => 'width: 18px; height: 18px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.whatsapp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 18px; height: 18px;']); ?>
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
              <span>Chat WhatsApp</span>
            </a>
            <a href="<?php echo e(route('layanan.index')); ?>" class="cta-btn-compact cta-btn-sub">
              <span>Lihat Layanan</span>
            </a>
          </div>
        </div>
        <div class="cta-right-minimal">
          <div class="cta-compact-trust-card">
            <div class="cta-trust-header">
              <div class="cta-mini-avatar-wrap">
                <img src="<?php echo e(asset('images/bu-betty.webp')); ?>" alt="Psikolog An Moerty" class="cta-mini-avatar">
                <span class="cta-mini-status" title="Online"></span>
              </div>
              <div>
                <div class="cta-online-text">Layanan Asesmen & Konseling</div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project pkl\psikolog\resources\views/about.blade.php ENDPATH**/ ?>