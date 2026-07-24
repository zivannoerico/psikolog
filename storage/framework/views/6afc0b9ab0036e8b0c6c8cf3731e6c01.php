

<?php $__env->startSection('title', 'FAQ — Pertanyaan yang Sering Diajukan | An Moerty Psikologi'); ?>
<?php $__env->startSection('description', 'Temukan jawaban atas pertanyaan umum seputar layanan psikologi, konseling, dan asesmen An Moerty Psikologi Banyuwangi.'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-hero" aria-labelledby="faq-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">FAQ</span>
      </nav>
      <div class="section-label">Bantuan</div>
      <h1 class="page-hero-title" id="faq-heading">Pertanyaan yang Sering Diajukan</h1>
      <p class="page-hero-subtitle">Kami menjawab pertanyaan-pertanyaan umum yang sering ditanyakan seputar layanan An Moerty Psikologi.</p>
    </div>
  </div>
</section>

<section class="section" aria-label="Daftar FAQ">
  <div class="container" style="max-width:860px;">

    <?php if($faqs->count()): ?>
      <div style="display:flex; flex-direction:column; gap:var(--space-3);" role="list">
        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="faq-item reveal reveal-delay-<?php echo e(($i % 3) + 1); ?>" role="listitem">
            <button
              class="faq-question"
              aria-expanded="false"
              aria-controls="faq-body-<?php echo e($faq->id); ?>"
              id="faq-btn-<?php echo e($faq->id); ?>">
              <?php echo e($faq->pertanyaan); ?>

              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div
              class="faq-answer"
              id="faq-body-<?php echo e($faq->id); ?>"
              role="region"
              aria-labelledby="faq-btn-<?php echo e($faq->id); ?>">
              <div class="faq-answer-inner"><?php echo e($faq->jawaban); ?></div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php else: ?>
      <div class="text-center" style="padding:var(--space-16) 0;">
        <p class="text-muted">FAQ belum tersedia. Silakan hubungi kami langsung.</p>
      </div>
    <?php endif; ?>

    
    <div class="reveal" style="margin-top:var(--space-16); background:var(--clr-bg-alt); border-radius:var(--radius-lg); padding:var(--space-10); text-align:center; border:1px solid var(--clr-border);">
      <div style="width:56px; height:56px; background:var(--clr-pink-light); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto var(--space-5);" aria-hidden="true">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17" stroke-width="3" stroke-linecap="round"/></svg>
      </div>
      <h2 style="font-size:1.375rem; font-weight:700; margin-bottom:var(--space-3);">Masih ada pertanyaan?</h2>
      <p style="color:var(--clr-text-2); margin-bottom:var(--space-6); max-width:420px; margin-left:auto; margin-right:auto; line-height:1.7;">Jangan ragu untuk menghubungi kami langsung. Tim kami siap membantu Anda.</p>
      <div style="display:flex; gap:var(--space-4); justify-content:center; flex-wrap:wrap;">
        <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>" class="btn btn--primary" target="_blank" rel="noopener">Chat WhatsApp</a>
        <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn--outline">Kirim Pesan</a>
      </div>
    </div>

  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\psikolog\resources\views/faq.blade.php ENDPATH**/ ?>