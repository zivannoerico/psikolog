<?php $__env->startSection('title', 'Dokumentasi — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Ringkasan galeri foto dan video kegiatan, pelatihan, dan layanan An Moerty Psikologi Banyuwangi.'); ?>
<?php $__env->startSection('og_title', 'Dokumentasi — An Moerty Psikologi Banyuwangi'); ?>

<?php $__env->startSection('content'); ?>


<section class="page-hero" aria-labelledby="dok-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Dokumentasi</span>
      </nav>
      <div class="section-label">Dokumentasi</div>
      <h1 class="page-hero-title" id="dok-heading">Ringkasan Momen & Kegiatan</h1>
      <p class="page-hero-subtitle">Lihat rekam jejak kegiatan, pelatihan, psikotes, dan berbagai momen An Moerty Psikologi Banyuwangi.</p>
    </div>
  </div>
</section>


<section class="section" id="dok-foto" aria-labelledby="dok-foto-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Galeri Foto</div>
      <h2 class="section-title" id="dok-foto-heading">Dokumentasi Foto Terbaru</h2>
      <p class="section-subtitle">Kumpulan foto kegiatan dan momen penting An Moerty Psikologi.</p>
    </div>

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
    <div class="section-footer reveal" style="margin-top: 2rem;">
      <a href="<?php echo e(route('dokumentasi.foto')); ?>" class="btn btn--outline">
        <span>Lihat Semua Foto Dokumentasi (<?php echo e(\App\Models\Galeri::aktif()->count()); ?>)</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
      </a>
    </div>
    <?php else: ?>
    <div class="dok-empty reveal">
      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
        <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
      </svg>
      <p>Tidak ada dokumentasi foto yang tersedia saat ini.</p>
    </div>
    <?php endif; ?>
  </div>
</section>


<section class="section section--alt" id="dok-video" aria-labelledby="dok-video-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Galeri Video</div>
      <h2 class="section-title" id="dok-video-heading">Dokumentasi Video Terbaru</h2>
      <p class="section-subtitle">Video kegiatan dan program An Moerty Psikologi Banyuwangi.</p>
    </div>

    <?php if($videos->count() > 0): ?>
    <div class="dok-video-grid reveal">
      <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="dok-video-card">
        <button class="dok-video-thumb" 
                onclick="openVideoModal('<?php echo e($video->embed_url); ?>', '<?php echo e(e($video->judul)); ?>')"
                aria-label="Putar video: <?php echo e($video->judul); ?>"
                type="button">
          <img src="<?php echo e($video->thumbnail_url); ?>" 
               alt="<?php echo e($video->judul); ?>" 
               loading="lazy" 
               class="dok-video-thumb-img">
          <div class="dok-video-play" aria-hidden="true">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
          </div>
        </button>
        <div class="dok-video-info">
          <h3 class="dok-video-title"><?php echo e($video->judul); ?></h3>
          <?php if($video->deskripsi): ?>
          <p class="dok-video-desc"><?php echo e(Str::limit($video->deskripsi, 90)); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="section-footer reveal" style="margin-top: 2rem;">
      <a href="<?php echo e(route('dokumentasi.video')); ?>" class="btn btn--outline">
        <span>Lihat Semua Video Dokumentasi (<?php echo e(\App\Models\DokumentasiVideo::aktif()->count()); ?>)</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
      </a>
    </div>
    <?php else: ?>
    <div class="dok-empty reveal">
      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
        <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
        <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <p>Dokumentasi video akan segera hadir.</p>
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


<div id="videoModal" class="dok-video-modal" role="dialog" aria-modal="true" aria-label="Pemutar video" style="display:none;">
  <div class="dok-video-modal-backdrop" onclick="closeVideoModal()"></div>
  <div class="dok-video-modal-content">
    <button class="dok-video-modal-close" onclick="closeVideoModal()" aria-label="Tutup video" type="button">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="dok-video-modal-wrapper">
      <iframe id="videoIframe" src="" title="Video dokumentasi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
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
  transition: var(--tr-base);
}
.dok-gallery-item:hover .dok-gallery-overlay {
  opacity: 1;
}
.dok-gallery-caption {
  color: var(--clr-white);
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 0.875rem;
  line-height: 1.4;
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

.dok-video-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.dok-video-card {
  background: var(--clr-surface);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid var(--clr-border);
  transition: var(--tr-base);
}
.dok-video-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
  border-color: var(--clr-pink-border);
}
.dok-video-thumb {
  position: relative;
  width: 100%;
  aspect-ratio: 16/9;
  cursor: pointer;
  border: none;
  padding: 0;
  background: var(--clr-bg-alt);
  display: block;
}
.dok-video-thumb-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: var(--tr-slow);
}
.dok-video-thumb:hover .dok-video-thumb-img {
  transform: scale(1.04);
}
.dok-video-play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.25);
  transition: var(--tr-base);
  color: var(--clr-white);
}
.dok-video-thumb:hover .dok-video-play {
  background: rgba(200,96,122,0.55);
}
.dok-video-play svg {
  filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
  transition: var(--tr-base);
}
.dok-video-thumb:hover .dok-video-play svg {
  transform: scale(1.15);
}
.dok-video-info {
  padding: var(--space-5) var(--space-5) var(--space-6);
}
.dok-video-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--clr-text);
  line-height: 1.4;
  margin-bottom: var(--space-1);
}
.dok-video-desc {
  font-size: 0.8125rem;
  color: var(--clr-text-2);
  line-height: 1.6;
}

/* Lightbox & Video Modal */
.dok-lightbox, .dok-video-modal {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
}
.dok-lightbox-backdrop, .dok-video-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.88);
  cursor: pointer;
}
.dok-lightbox-close, .dok-video-modal-close {
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
.dok-lightbox-close:hover, .dok-video-modal-close:hover {
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

.dok-video-modal-content {
  position: relative;
  z-index: 5;
  width: 90vw;
  max-width: 960px;
}
.dok-video-modal-wrapper {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0,0,0,0.5);
}
.dok-video-modal-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@media (max-width: 1024px) {
  .dok-gallery { grid-template-columns: repeat(2, 1fr); }
  .dok-video-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  .dok-gallery { grid-template-columns: repeat(2, 1fr); gap: var(--space-3); }
  .dok-video-grid { grid-template-columns: 1fr; gap: var(--space-4); }
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

function openVideoModal(embedUrl, title) {
  if (!embedUrl) return;
  document.getElementById('videoIframe').src = embedUrl;
  document.getElementById('videoIframe').title = title || 'Video dokumentasi';
  document.getElementById('videoModal').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function closeVideoModal() {
  document.getElementById('videoIframe').src = '';
  document.getElementById('videoModal').style.display = 'none';
  document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
  const lightbox = document.getElementById('lightbox');
  const videoModal = document.getElementById('videoModal');
  
  if (lightbox && lightbox.style.display !== 'none') {
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') navigateLightbox(-1);
    if (e.key === 'ArrowRight') navigateLightbox(1);
  }
  
  if (videoModal && videoModal.style.display !== 'none') {
    if (e.key === 'Escape') closeVideoModal();
  }
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project pkl\psikolog\resources\views/dokumentasi/index.blade.php ENDPATH**/ ?>