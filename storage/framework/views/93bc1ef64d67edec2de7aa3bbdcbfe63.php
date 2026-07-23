<?php $__env->startSection('title', ($artikel->meta_title ?? $artikel->judul . ' — An Moerty Psikologi')); ?>
<?php $__env->startSection('description', $artikel->meta_description ?? $artikel->excerpt); ?>

<?php $__env->startSection('content'); ?>

<article aria-labelledby="artikel-heading">

  
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-content" style="max-width:800px;">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo e(route('home')); ?>">Beranda</a>
          <span class="breadcrumb-sep" aria-hidden="true">›</span>
          <a href="<?php echo e(route('artikel.index')); ?>">Artikel</a>
          <span class="breadcrumb-sep" aria-hidden="true">›</span>
          <span aria-current="page"><?php echo e(Str::limit($artikel->judul, 40)); ?></span>
        </nav>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->kategori): ?>
          <a href="<?php echo e(route('artikel.index', ['kategori' => $artikel->kategori->slug])); ?>" class="card-badge" style="margin-bottom:var(--space-4);"><?php echo e($artikel->kategori->nama); ?></a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <h1 class="page-hero-title" id="artikel-heading"><?php echo e($artikel->judul); ?></h1>
        <div class="card-meta" style="margin-top:var(--space-4);">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->penulis): ?><span><?php echo e($artikel->penulis); ?></span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <time datetime="<?php echo e($artikel->published_at?->format('Y-m-d')); ?>"><?php echo e($artikel->published_at?->translatedFormat('d F Y')); ?></time>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->reading_time): ?><span>· <?php echo e($artikel->reading_time); ?> menit baca</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <span>· <?php echo e(number_format($artikel->views)); ?> kali dilihat</span>
        </div>
      </div>
    </div>
  </section>

  
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->gambar_utama): ?>
    <div style="max-width:860px; margin:0 auto; padding:0 var(--space-8);">
      <img
        src="<?php echo e(asset('storage/' . $artikel->gambar_utama)); ?>"
        alt="<?php echo e($artikel->alt_gambar ?? $artikel->judul); ?>"
        style="width:100%; aspect-ratio:16/9; object-fit:cover; border-radius:var(--radius-lg); margin-bottom:var(--space-12);"
        loading="eager">
    </div>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

  
  <section class="section--sm" aria-label="Isi artikel">
    <div class="container--narrow">
      <div class="prose" style="font-size:1.0625rem; line-height:1.9; color:var(--clr-text-2);">
        <?php echo $artikel->konten; ?>

      </div>

      
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($artikel->tags): ?>
        <div style="display:flex; gap:var(--space-2); flex-wrap:wrap; margin-top:var(--space-8); padding-top:var(--space-8); border-top:1px solid var(--clr-divider);" aria-label="Tags artikel">
          <span style="font-size:0.875rem; font-weight:600; color:var(--clr-text-3);">Tag:</span>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $artikel->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="badge badge--gray"><?php echo e($tag); ?></span>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

      
      <div style="margin-top:var(--space-8); padding:var(--space-6) var(--space-8); background:var(--clr-bg-alt); border-radius:var(--radius-md); border:1px solid var(--clr-border);">
        <p style="font-weight:700; font-size:0.9375rem; color:var(--clr-text); margin-bottom:var(--space-4);">Bagikan Artikel Ini</p>
        <div style="display:flex; gap:var(--space-3); flex-wrap:wrap;">
          <a href="https://wa.me/?text=<?php echo e(urlencode($artikel->judul . ' - ' . url()->current())); ?>" class="btn btn--outline btn--sm" target="_blank" rel="noopener" aria-label="Share via WhatsApp">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>" class="btn btn--outline btn--sm" target="_blank" rel="noopener" aria-label="Share via Facebook">Facebook</a>
          <a href="https://twitter.com/intent/tweet?text=<?php echo e(urlencode($artikel->judul)); ?>&url=<?php echo e(urlencode(url()->current())); ?>" class="btn btn--outline btn--sm" target="_blank" rel="noopener" aria-label="Share via Twitter">Twitter</a>
        </div>
      </div>
    </div>
  </section>

</article>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($related->count()): ?>
<section class="section section--alt" aria-labelledby="related-heading">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-label">Baca Juga</div>
      <h2 class="section-title" id="related-heading">Artikel Terkait</h2>
    </div>
    <div class="grid-3">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="card reveal reveal-delay-<?php echo e($i + 1); ?>" aria-labelledby="rel-<?php echo e($art->id); ?>">
          <a href="<?php echo e(route('artikel.show', $art->slug)); ?>" tabindex="-1" aria-hidden="true">
            <img src="<?php echo e($art->gambar_utama ? asset('storage/'.$art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80'); ?>" alt="<?php echo e($art->judul); ?>" class="card-img" loading="lazy" width="600" height="338">
          </a>
          <div class="card-body">
            <h3 class="card-title" id="rel-<?php echo e($art->id); ?>"><a href="<?php echo e(route('artikel.show', $art->slug)); ?>"><?php echo e($art->judul); ?></a></h3>
            <p class="card-text"><?php echo e(Str::limit($art->excerpt, 100)); ?></p>
          </div>
        </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php $__env->startPush('styles'); ?>
<style>
/* Article Typography */
.prose p { margin-bottom: 1.5em; }
.prose h2 { font-size: 1.5rem; font-weight: 700; color: var(--clr-text); margin: 2.5em 0 1em; }
.prose h3 { font-size: 1.25rem; font-weight: 700; color: var(--clr-text); margin: 2em 0 0.75em; }
.prose ul, .prose ol { padding-left: 1.5em; margin-bottom: 1.5em; }
.prose ul { list-style: disc; }
.prose ol { list-style: decimal; }
.prose li { margin-bottom: 0.5em; line-height: 1.75; }
.prose strong { color: var(--clr-text); font-weight: 700; }
.prose a { color: var(--clr-pink); text-decoration: underline; }
.prose blockquote { border-left: 3px solid var(--clr-pink); padding-left: 1.25em; font-style: italic; color: var(--clr-text-2); margin: 1.5em 0; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\psikolog\resources\views/berita-detail.blade.php ENDPATH**/ ?>