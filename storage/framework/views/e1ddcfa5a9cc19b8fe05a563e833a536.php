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
  <div class="container">

    
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
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($kategori->count()): ?>
        <div style="display:flex; gap:var(--space-2); flex-wrap:wrap;" role="group" aria-label="Filter kategori">
          <a href="<?php echo e(route('artikel.index')); ?>" class="badge <?php echo e(!request('kategori') ? 'badge--pink' : 'badge--gray'); ?>" style="padding:6px 14px; font-size:0.8125rem;">Semua</a>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('artikel.index', ['kategori' => $kat->slug])); ?>" class="badge <?php echo e(request('kategori') == $kat->slug ? 'badge--pink' : 'badge--gray'); ?>" style="padding:6px 14px; font-size:0.8125rem;">
              <?php echo e($kat->nama); ?>

            </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->count()): ?>
      <div class="grid-auto-3">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <article class="card reveal reveal-delay-<?php echo e(($i % 3) + 1); ?>" aria-labelledby="art-<?php echo e($art->id); ?>">
            <a href="<?php echo e(route('artikel.show', $art->slug)); ?>" tabindex="-1" aria-hidden="true">
              <img
                src="<?php echo e($art->gambar_utama ? asset('storage/' . $art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80'); ?>"
                alt="<?php echo e($art->alt_gambar ?? $art->judul); ?>"
                class="card-img"
                loading="lazy"
                width="600"
                height="338">
            </a>
            <div class="card-body">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($art->kategori): ?>
                <a href="<?php echo e(route('artikel.index', ['kategori' => $art->kategori->slug])); ?>" class="card-badge"><?php echo e($art->kategori->nama); ?></a>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <h2 class="card-title" id="art-<?php echo e($art->id); ?>">
                <a href="<?php echo e(route('artikel.show', $art->slug)); ?>"><?php echo e($art->judul); ?></a>
              </h2>
              <p class="card-text"><?php echo e(Str::limit($art->excerpt, 120)); ?></p>
              <div class="card-meta">
                <time datetime="<?php echo e($art->published_at?->format('Y-m-d')); ?>"><?php echo e($art->published_at?->translatedFormat('d M Y')); ?></time>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($art->reading_time): ?>
                  <span>· <?php echo e($art->reading_time); ?> menit baca</span>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              </div>
            </div>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </div>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->hasPages()): ?>
        <div style="display:flex; justify-content:center; margin-top:var(--space-12);" aria-label="Navigasi halaman">
          <?php echo e($artikel->withQueryString()->links()); ?>

        </div>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php else: ?>
      <div class="text-center" style="padding:var(--space-16) 0;">
        <p class="text-muted"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request('q')): ?>Tidak ditemukan artikel untuk "<?php echo e(request('q')); ?>".<?php else: ?> Artikel belum tersedia.<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></p>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request('q')): ?>
          <a href="<?php echo e(route('artikel.index')); ?>" class="btn btn--outline" style="margin-top:var(--space-4);">Lihat Semua Artikel</a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\psikolog\resources\views/berita.blade.php ENDPATH**/ ?>