<?php $__env->startSection('title', 'Layanan — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Layanan psikologi profesional An Moerty Banyuwangi: Psikotes, Interview, FGD, Konseling Kerja, Konseling Permasalahan, Training Indoor, dan Training Outdoor.'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-hero" aria-labelledby="layanan-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Layanan</span>
      </nav>
      <div class="section-label">Layanan Kami</div>
      <h1 class="page-hero-title" id="layanan-heading">Layanan An Moerty Psikologi</h1>
      <p class="page-hero-subtitle">Kami menyediakan berbagai layanan psikologi profesional untuk individu, organisasi, dan perusahaan di Banyuwangi dan sekitarnya.</p>
    </div>
  </div>
</section>

<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($kat->layanan->count()): ?>
    <section class="section <?php echo e($loop->even ? 'section--alt' : ''); ?>" aria-labelledby="kat-<?php echo e($kat->id); ?>-heading">
      <div class="container">
        <div class="section-header reveal">
          <span class="badge badge--pink" style="margin-bottom:var(--space-3);"><?php echo e($kat->nama); ?></span>
          <h2 class="section-title" id="kat-<?php echo e($kat->id); ?>-heading"><?php echo e($kat->nama); ?></h2>
        </div>

        <div class="grid-auto-3">
          <?php $__currentLoopData = $kat->layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="service-card reveal reveal-delay-<?php echo e(($i % 3) + 1); ?>" aria-labelledby="srv-<?php echo e($item->id); ?>">
              <div class="service-icon-wrap" aria-hidden="true">
                <?php switch($item->ikon):
                  case ('clipboard-list'): ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>
                    <?php break; ?>
                  <?php case ('message-circle'): ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                    <?php break; ?>
                  <?php case ('users-round'): ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    <?php break; ?>
                  <?php case ('briefcase'): ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                    <?php break; ?>
                  <?php case ('shield-heart'): ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    <?php break; ?>
                  <?php case ('presentation'): ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h20"/><path d="M21 3v11a2 2 0 01-2 2H5a2 2 0 01-2-2V3"/><path d="M7 21l5-5 5 5"/></svg>
                    <?php break; ?>
                  <?php default: ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l4-8 4 5 3-3 4 6"/></svg>
                <?php endswitch; ?>
              </div>
              <div>
                <h3 class="service-card-title" id="srv-<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></h3>
                <p class="service-card-desc"><?php echo e($item->deskripsi_singkat); ?></p>
              </div>
              <a href="<?php echo e(route('layanan.show', $item->slug)); ?>" class="service-card-link" aria-label="Detail layanan <?php echo e($item->nama); ?>">
                Lihat Detail
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
              </a>
            </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<section class="section cta-compact-section" aria-labelledby="layanan-cta-heading" style="padding-top: 2rem; padding-bottom: 4rem;">
  <div class="container cta-container-compact">
    <div class="cta-clean-card reveal">
      <div class="cta-single-glow" aria-hidden="true"></div>
      <div class="cta-compact-grid">
        <div class="cta-left-minimal">
          <div class="cta-badge-minimal">
            <span class="cta-badge-dot-gold"></span>
            <span>Layanan Kustom & Khusus</span>
          </div>
          <h2 class="cta-headline-compact" id="layanan-cta-heading">
            Butuh Layanan Khusus<br>
            <span class="cta-gold-text">Untuk Sekolah Atau Perusahaan?</span>
          </h2>
          <p class="cta-desc-compact">
            Kami dapat menyesuaikan program asesmen dan konseling sesuai kebutuhan spesifik Anda dan organisasi Anda.
          </p>
          <div class="cta-compact-actions">
            <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>?text=<?php echo e(urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin konsultasi mengenai layanan khusus.'))); ?>" class="cta-btn-compact cta-btn-main" target="_blank" rel="noopener noreferrer">
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
            <a href="<?php echo e(route('kontak.index')); ?>" class="cta-btn-compact cta-btn-sub">
              <span>Hubungi Kami</span>
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
                <div class="cta-online-text">Layanan Kustom Fleksibel</div>
                <div class="cta-speed-text">Respon Cepat &lt; 15 Menit</div>
              </div>
            </div>
            <div class="cta-compact-features">
              <div class="cta-compact-feature">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C8607A" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                <span>Asesmen & Student Profiling</span>
              </div>
              <div class="cta-compact-feature">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C8607A" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <span>Program Khusus Organisasi</span>
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

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADVAN\Documents\psikolog\resources\views/layanan/index.blade.php ENDPATH**/ ?>