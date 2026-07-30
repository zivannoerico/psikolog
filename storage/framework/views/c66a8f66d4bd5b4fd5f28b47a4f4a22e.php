

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

<section class="section--sm">
  <div class="container">
    <div class="cta-section reveal">
      <div class="cta-content">
        <h2 class="cta-title">Butuh Layanan Khusus?</h2>
        <p class="cta-subtitle">Kami dapat menyesuaikan layanan dengan kebutuhan spesifik Anda dan organisasi Anda.</p>
        <div class="cta-actions">
          <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>" class="btn btn--white btn--lg" target="_blank" rel="noopener noreferrer">Konsultasi via WhatsApp</a>
          <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn--outline-white btn--lg">Kirim Pesan</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\psikolog\resources\views/layanan/index.blade.php ENDPATH**/ ?>