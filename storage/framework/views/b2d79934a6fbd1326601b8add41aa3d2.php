<?php $__env->startSection('title', 'Dokumentasi Video — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Kumpulan video kegiatan, program, dan tayangan An Moerty Psikologi Banyuwangi.'); ?>
<?php $__env->startSection('og_title', 'Dokumentasi Video — An Moerty Psikologi Banyuwangi'); ?>

<?php $__env->startSection('content'); ?>


<section class="page-hero" aria-labelledby="video-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <a href="<?php echo e(route('dokumentasi.index')); ?>">Dokumentasi</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Dokumentasi Video</span>
      </nav>
      <div class="section-label">Galeri Video</div>
      <h1 class="page-hero-title" id="video-heading">Dokumentasi Video Kegiatan</h1>
      <p class="page-hero-subtitle">Video profil, liputan kegiatan, edukasi kesehatan mental, dan seminar An Moerty Psikologi Banyuwangi.</p>
    </div>
  </div>
</section>


<section class="section" id="galeri-video" aria-labelledby="galeri-video-heading">
  <div class="container">
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
            <svg width="44" height="44" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
          </div>
        </button>
        <div class="dok-video-info">
          <h3 class="dok-video-title"><?php echo e($video->judul); ?></h3>
          <?php if($video->deskripsi): ?>
          <p class="dok-video-desc"><?php echo e($video->deskripsi); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if($videos->hasPages()): ?>
    <div class="pagination-wrapper reveal" style="margin-top: 3rem; display: flex; justify-content: center;">
      <?php echo e($videos->links()); ?>

    </div>
    <?php endif; ?>

    <?php else: ?>
    <div class="dok-empty reveal">
      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
        <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
        <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <p>Belum ada dokumentasi video yang ditambahkan.</p>
    </div>
    <?php endif; ?>
  </div>
</section>


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
.dok-empty {
  text-align: center;
  padding: var(--space-16) var(--space-4);
  color: var(--clr-text-3);
}
.dok-empty svg {
  margin: 0 auto var(--space-4);
  color: var(--clr-border);
}

.dok-video-modal {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
}
.dok-video-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.88);
  cursor: pointer;
}
.dok-video-modal-close {
  position: absolute;
  top: -40px;
  right: 0;
  z-index: 10;
  background: rgba(255,255,255,0.15);
  border: none;
  border-radius: 50%;
  padding: 8px;
  cursor: pointer;
  color: white;
  transition: var(--tr-fast);
}
.dok-video-modal-close:hover {
  background: rgba(255,255,255,0.3);
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
  .dok-video-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  .dok-video-grid { grid-template-columns: 1fr; gap: var(--space-4); }
}
</style>
<?php $__env->stopPush(); ?>

<script>
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
  const videoModal = document.getElementById('videoModal');
  if (videoModal && videoModal.style.display !== 'none') {
    if (e.key === 'Escape') closeVideoModal();
  }
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project pkl\psikolog\resources\views/dokumentasi/video.blade.php ENDPATH**/ ?>