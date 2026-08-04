<?php $__env->startSection('title', 'Artikel — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Baca artikel informatif seputar psikologi, konseling, tips kesehatan mental, dan pengembangan diri dari tim psikolog An Moerty.'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-hero" aria-labelledby="artikel-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Artikel</span>
      </nav>
      <div class="section-label">Wawasan Psikologi</div>
      <h1 class="page-hero-title" id="artikel-heading">Artikel & Informasi</h1>
      <p class="page-hero-subtitle">Temukan artikel informatif seputar psikologi, konseling, dan pengembangan diri dari tim psikolog An Moerty.</p>
    </div>
  </div>
</section>

<section class="section" aria-label="Daftar artikel">
  <div class="container" style="max-width: 1060px;">

    
    <div class="artikel-search-bar">
      <form action="<?php echo e(route('artikel.index')); ?>" method="GET" role="search" style="flex:1; min-width:240px;">
        <div class="search-input-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
          <input
            type="search"
            name="q"
            id="search-artikel"
            placeholder="Cari artikel..."
            value="<?php echo e(request('q')); ?>"
            aria-label="Cari artikel">
        </div>
      </form>
      <?php if($kategori->count()): ?>
        <div style="display:flex; gap:var(--space-2); flex-wrap:wrap;" role="group" aria-label="Filter kategori">
          <a href="<?php echo e(route('artikel.index')); ?>" class="badge <?php echo e(!request('kategori') ? 'badge--pink' : 'badge--gray'); ?>" style="padding:6px 14px; font-size:0.8125rem;">Semua</a>
          <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('artikel.index', ['kategori' => $kat->slug])); ?>" class="badge <?php echo e(request('kategori') == $kat->slug ? 'badge--pink' : 'badge--gray'); ?>" style="padding:6px 14px; font-size:0.8125rem;">
              <?php echo e($kat->nama); ?>

            </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>
    </div>

    
    <?php if($artikel->count()): ?>
      <div class="grid-auto-3">
        <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <article class="card reveal reveal-delay-<?php echo e(($i % 3) + 1); ?>" aria-labelledby="art-<?php echo e($art->id); ?>">
            <a href="<?php echo e(route('artikel.show', $art->slug)); ?>" tabindex="-1" aria-hidden="true" style="display: block; width: 100%; aspect-ratio: 16/9; overflow: hidden; background-color: var(--clr-bg-alt);">
              <img
                src="<?php echo e($art->gambar_utama ? asset('storage/' . $art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80'); ?>"
                alt="<?php echo e($art->alt_gambar ?? $art->judul); ?>"
                class="card-img"
                loading="lazy"
                style="width: 100%; height: 100%; object-fit: cover;"
                width="600"
                height="338">
            </a>
            <div class="card-body" style="padding: var(--space-5);">
              <h2 class="card-title" id="art-<?php echo e($art->id); ?>" style="margin-bottom: var(--space-4); font-size: 1.125rem; line-height: 1.5;">
                <a href="<?php echo e(route('artikel.show', $art->slug)); ?>"><?php echo e($art->judul); ?></a>
              </h2>
              
              <div style="font-size: 0.8125rem; color: var(--clr-text-3); margin-bottom: var(--space-4);">
                <div style="margin-bottom: var(--space-3);">
                  <time datetime="<?php echo e($art->published_at?->format('Y-m-d')); ?>"><?php echo e($art->published_at?->translatedFormat('d M Y')); ?></time>
                </div>
                <?php if($art->penulis): ?>
                  <div style="font-weight: 600; color: var(--clr-text); font-size: 0.875rem;"><?php echo e($art->penulis); ?></div>
                <?php endif; ?>
              </div>

              <p class="card-text" style="font-size: 0.875rem; color: var(--clr-text-3); line-height: 1.7;"><?php echo e(Str::limit($art->excerpt, 120)); ?></p>
              <div style="margin-top: auto; padding-top: 1.5rem;">
                <a href="<?php echo e(route('artikel.show', $art->slug)); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--clr-pink); font-weight: 600; font-size: 0.875rem; text-decoration: none;">
                  Baca Selengkapnya
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php if($artikel->hasPages()): ?>
          <?php echo e($artikel->withQueryString()->links('vendor.pagination.default')); ?>

      <?php endif; ?>
    <?php else: ?>
      <div class="text-center" style="padding:var(--space-16) 0;">
        <p class="text-muted"><?php if(request('q')): ?>Tidak ditemukan artikel untuk "<?php echo e(request('q')); ?>".<?php else: ?> Artikel belum tersedia.<?php endif; ?></p>
        <?php if(request('q')): ?>
          <a href="<?php echo e(route('artikel.index')); ?>" class="btn btn--outline" style="margin-top:var(--space-4);">Lihat Semua Artikel</a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADVAN\Documents\psikolog\resources\views/berita.blade.php ENDPATH**/ ?>