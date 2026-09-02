<?php $__env->startSection('title', 'Dokumentasi Foto — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Kumpulan galeri foto kegiatan, pelatihan, dan layanan An Moerty Psikologi Banyuwangi.'); ?>
<?php $__env->startSection('og_title', 'Dokumentasi Foto — An Moerty Psikologi Banyuwangi'); ?>

<?php $__env->startSection('content'); ?>


<section class="page-hero" aria-labelledby="foto-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <a href="<?php echo e(route('dokumentasi.index')); ?>">Dokumentasi</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Dokumentasi Foto</span>
      </nav>
      <div class="section-label">Galeri Foto</div>
      <h1 class="page-hero-title" id="foto-heading">Dokumentasi Foto Kegiatan</h1>
      <p class="page-hero-subtitle">Galeri lengkap momen kegiatan, asesmen psikologi, pelatihan, dan seminar An Moerty Banyuwangi.</p>
    </div>
  </div>
</section>


<section class="section" id="galeri-foto" aria-labelledby="galeri-foto-heading">
  <div class="container">
    <?php if($fotos->count() > 0): ?>
    <div class="dok-gallery reveal">
      <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <button class="dok-gallery-item" 
              onclick="openLightbox(<?php echo e($loop->index); ?>)"
              aria-label="Buka foto: <?php echo e($foto->alt ?? $foto->judul); ?>"
              type="button">
        <img src="<?php echo e(asset('storage/' . $foto->gambar)); ?>" 
             alt="<?php echo e($foto->alt ?? $foto->judul ?? 'Dokumentasi foto'); ?>" 
             loading="lazy" 
             class="dok-gallery-img">
        <?php if($foto->judul): ?>
        <div class="dok-gallery-overlay">
          <span class="dok-gallery-caption"><?php echo e($foto->judul); ?></span>
        </div>
        <?php endif; ?>
      </button>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if($fotos->hasPages()): ?>
    <div class="pagination-wrapper reveal" style="margin-top: 3rem; display: flex; justify-content: center;">
      <?php echo e($fotos->links()); ?>

    </div>
    <?php endif; ?>

    <?php else: ?>
    <div class="dok-empty reveal">
      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
        <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
      </svg>
      <p>Belum ada dokumentasi foto yang diunggah.</p>
    </div>
    <?php endif; ?>
  </div>
</section>


<div id="lightbox" class="dok-lightbox" role="dialog" aria-modal="true" aria-label="Galeri foto" style="display:none;">
  <div class="dok-lightbox-backdrop" onclick="closeLightbox()"></div>
  <button class="dok-lightbox-close" onclick="closeLightbox()" aria-label="Tutup galeri" type="button">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
  <button class="dok-lightbox-nav dok-lightbox-prev" onclick="navigateLightbox(-1)" aria-label="Foto sebelumnya" type="button">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
  </button>
  <button class="dok-lightbox-nav dok-lightbox-next" onclick="navigateLightbox(1)" aria-label="Foto selanjutnya" type="button">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 6 15 12 9 18"/></svg>
  </button>
  <div class="dok-lightbox-content">
    <img id="lightboxImg" src="" alt="" class="dok-lightbox-img">
    <div id="lightboxCaption" class="dok-lightbox-caption"></div>
  </div>
</div>

<?php $__env->startPush('styles'); ?>
<style>
.dok-gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}
.dok-gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: var(--radius-lg);
  aspect-ratio: 4/3;
  cursor: pointer;
  border: 1px solid var(--clr-border);
  padding: 0;
  background: var(--clr-bg-alt);
  transition: var(--tr-base);
  box-shadow: var(--shadow-sm);
}
.dok-gallery-item:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--clr-pink-border);
}
.dok-gallery-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s var(--ease-out);
}
.dok-gallery-item:hover .dok-gallery-img {
  transform: scale(1.06);
}
.dok-gallery-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: var(--space-8) var(--space-5) var(--space-5);
  background: linear-gradient(180deg, rgba(28, 27, 32, 0) 0%, rgba(28, 27, 32, 0.8) 100%);
  opacity: 0;
}
.dok-gallery-item:hover .dok-gallery-overlay {
  opacity: 1;
}
.dok-gallery-caption {
  color: var(--clr-white);
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 0.875rem;
}
.dok-empty {
  text-align: center;
  padding: var(--space-16) var(--space-4);
  color: var(--clr-text-3);
}
.dok-empty svg {
  margin: 0 auto var(--space-4);
  color: var(--clr-border);
}

.dok-lightbox {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
}
.dok-lightbox-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.88);
  cursor: pointer;
}
.dok-lightbox-close {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 10;
  background: rgba(255,255,255,0.15);
  border: none;
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
  color: white;
  transition: var(--tr-fast);
}
.dok-lightbox-close:hover {
  background: rgba(255,255,255,0.3);
}
.dok-lightbox-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  background: rgba(255,255,255,0.12);
  border: none;
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
  color: white;
  transition: var(--tr-fast);
}
.dok-lightbox-nav:hover {
  background: rgba(255,255,255,0.3);
}
.dok-lightbox-prev { left: 20px; }
.dok-lightbox-next { right: 20px; }
.dok-lightbox-content {
  position: relative;
  z-index: 5;
  max-width: 90vw;
  max-height: 85vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.dok-lightbox-img {
  max-width: 100%;
  max-height: 80vh;
  object-fit: contain;
  border-radius: var(--radius-md);
  box-shadow: 0 20px 60px rgba(0,0,0,0.5);
}
.dok-lightbox-caption {
  color: rgba(255,255,255,0.85);
  font-size: 0.875rem;
  margin-top: var(--space-4);
  text-align: center;
  font-family: var(--font-heading);
}

@media (max-width: 1024px) {
  .dok-gallery { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  .dok-gallery { grid-template-columns: repeat(2, 1fr); gap: var(--space-3); }
  .dok-lightbox-prev { left: 8px; }
  .dok-lightbox-next { right: 8px; }
}
</style>
<?php $__env->stopPush(); ?>

<script>
const lightboxData = <?php echo json_encode($fotos->map(fn($f) => ['src' => asset('storage/' . $f->gambar), 'caption' => $f->judul ?? '', 'alt' => $f->alt ?? $f->judul ?? 'Dokumentasi foto'])) ?>;
let currentLightboxIndex = 0;

function openLightbox(index) {
  currentLightboxIndex = index;
  updateLightbox();
  document.getElementById('lightbox').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
  document.body.style.overflow = '';
}

function navigateLightbox(dir) {
  currentLightboxIndex += dir;
  if (currentLightboxIndex < 0) currentLightboxIndex = lightboxData.length - 1;
  if (currentLightboxIndex >= lightboxData.length) currentLightboxIndex = 0;
  updateLightbox();
}

function updateLightbox() {
  const item = lightboxData[currentLightboxIndex];
  if (!item) return;
  document.getElementById('lightboxImg').src = item.src;
  document.getElementById('lightboxImg').alt = item.alt;
  document.getElementById('lightboxCaption').textContent = item.caption;
}

document.addEventListener('keydown', function(e) {
  const lightbox = document.getElementById('lightbox');
  if (lightbox && lightbox.style.display !== 'none') {
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') navigateLightbox(-1);
    if (e.key === 'ArrowRight') navigateLightbox(1);
  }
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADVAN\Documents\psikolog\resources\views/dokumentasi/foto.blade.php ENDPATH**/ ?>