<?php $__env->startSection('title', 'Psikologi Banyuwangi — An Moerty | Layanan Psikologi & Konseling Profesional'); ?>
<?php $__env->startSection('description', 'Bersama tim Psikolog An Moerty yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.'); ?>
<?php $__env->startSection('og_title', 'An Moerty Psikologi Banyuwangi'); ?>

<?php $__env->startSection('content'); ?>


<section class="hero" aria-labelledby="hero-heading">
  <div class="container">
    <div class="hero-inner">
      <div class="hero-content">
        <span class="hero-label" aria-hidden="true">Layanan Psikologi & Konseling Terpercaya</span>
        <h1 class="hero-title" id="hero-heading">
          Buka Potensi Terbaik<br>
          <span class="accent">Diri Anda</span>
        </h1>
        <p class="hero-subtitle">
          Bersama tim Psikolog An Moerty yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda untuk mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.
        </p>
        <div class="hero-actions">
          <a href="<?php echo e(route('layanan.index')); ?>" class="btn btn--primary btn--lg">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Lihat Layanan
          </a>
          <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>?text=<?php echo e(urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin berkonsultasi. Apakah bisa bantu saya?'))); ?>" class="btn btn--outline btn--lg" target="_blank" rel="noopener noreferrer">
            <?php if (isset($component)) { $__componentOriginaledff2ccfeec601febf5e74cf0afbb38c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon.phone','data' => ['style' => 'width: 18px; height: 18px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon.phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 18px; height: 18px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c)): ?>
<?php $attributes = $__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c; ?>
<?php unset($__attributesOriginaledff2ccfeec601febf5e74cf0afbb38c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledff2ccfeec601febf5e74cf0afbb38c)): ?>
<?php $component = $__componentOriginaledff2ccfeec601febf5e74cf0afbb38c; ?>
<?php unset($__componentOriginaledff2ccfeec601febf5e74cf0afbb38c); ?>
<?php endif; ?>
            Hubungi Kami
          </a>
        </div>
      </div>

      <div class="hero-visual" aria-hidden="true">
        <div class="hero-img-wrap">
          <img
            src="<?php echo e(\App\Models\Setting::get('hero_gambar') ? asset('storage/' . \App\Models\Setting::get('hero_gambar')) : asset('images/hero-psikologi.webp')); ?>"
            alt="Psikolog An Moerty Banyuwangi memberikan konseling profesional"
            class="hero-img-main"
            loading="eager"
            fetchpriority="high"
            width="520"
            height="650">
        </div>
      </div>
    </div>
  </div>

  <div class="hero-stats-bar">
    <div class="container">
      <div class="hero-stats-inner">
        <div class="hero-stat-item">
          <span class="hero-stat-num">10+</span>
          <span class="hero-stat-label">Tahun Pengalaman</span>
        </div>
        <div class="hero-stat-divider" aria-hidden="true"></div>
        <div class="hero-stat-item">
          <span class="hero-stat-num">500+</span>
          <span class="hero-stat-label">Klien Terlayani</span>
        </div>
        <div class="hero-stat-divider" aria-hidden="true"></div>
        <div class="hero-stat-item">
          <span class="hero-stat-num">7</span>
          <span class="hero-stat-label">Jenis Layanan</span>
        </div>
        <div class="hero-stat-divider" aria-hidden="true"></div>
        <div class="hero-stat-item">
          <span class="hero-stat-num">100%</span>
          <span class="hero-stat-label">Kerahasiaan Terjamin</span>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section" id="tentang" aria-labelledby="about-heading">
  <div class="container">
    <div class="about-layout">

      <div class="about-visual reveal">
        <img
          src="<?php echo e(\App\Models\Setting::get('tentang_gambar') ? asset('storage/' . \App\Models\Setting::get('tentang_gambar')) : asset('images/bu-betty.webp')); ?>"
          alt="Tim psikolog An Moerty Psikologi Banyuwangi"
          class="about-img"
          loading="lazy"
          width="560"
          height="700">
        <div class="about-badge">
          <div class="about-badge-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="about-badge-text">
            <div class="num">10+</div>
            <div class="label">Tahun Pengalaman</div>
          </div>
        </div>
      </div>

      <div class="about-content reveal reveal-delay-2">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title" id="about-heading">An Moerty Psikologi Banyuwangi</h2>
        <p class="about-description">
          Biro Psikologi & Konseling An Moerty Banyuwangi merupakan lembaga asesmen center yang memberikan pelayanan profesional kepada masyarakat. Kami berfokus pada <strong>Student Profiling & Study Analysis</strong> serta identifikasi hambatan belajar untuk memberikan rekomendasi yang tepat bagi setiap individu.
        </p>

        <div class="about-features">
          <div class="about-feature">
            <div class="about-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Student Profiling & Study Analysis</div>
              <div class="about-feature-desc">Identifikasi potensi dan hambatan belajar untuk rekomendasi tepat</div>
            </div>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <div>
              <div class="about-feature-title">Konseling Profesional</div>
              <div class="about-feature-desc">Layanan konseling individu, sekolah, dan perusahaan</div>
            </div>
          </div>
        </div>

        <div class="about-footer">
          <a href="<?php echo e(route('tentang')); ?>" class="btn btn--outline">
            Pelajari Lebih Lanjut
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section" id="layanan" aria-labelledby="layanan-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Layanan Kami</div>
      <h2 class="section-title" id="layanan-heading">Bersama Tumbuh Menjadi Lebih Baik</h2>
      <p class="section-subtitle">Program psikologi terapan yang dirancang khusus untuk membawa perubahan positif bagi individu maupun tim kerja.</p>
    </div>

    <div class="grid-auto-3 reveal">
      <?php $__empty_1 = true; $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="service-card" aria-labelledby="layanan-<?php echo e($item->id); ?>">
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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 8c-1.66 0-3 1.34-3 3 0 2.4 2.53 4.37 3 4.74.47-.37 3-2.34 3-4.74 0-1.66-1.34-3-3-3z"/></svg>
                <?php break; ?>
              <?php case ('presentation'): ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h20"/><path d="M21 3v11a2 2 0 01-2 2H5a2 2 0 01-2-2V3"/><path d="M7 21l5-5 5 5"/></svg>
                <?php break; ?>
              <?php default: ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l4-8 4 5 3-3 4 6"/></svg>
            <?php endswitch; ?>
          </div>
          <div class="service-card-body">
            <h3 class="service-card-title" id="layanan-<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></h3>
            <p class="service-card-desc"><?php echo e($item->deskripsi_singkat); ?></p>
          </div>
          <a href="<?php echo e(route('layanan.show', $item->slug)); ?>" class="service-card-link" aria-label="Pelajari lebih lanjut tentang <?php echo e($item->nama); ?>">
            Pelajari Lebih Lanjut
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-muted" style="grid-column:1/-1; text-align:center;">Layanan belum tersedia.</p>
      <?php endif; ?>
    </div>

    <div class="section-footer reveal">
      <a href="<?php echo e(route('layanan.index')); ?>" class="btn btn--outline">Lihat Semua Layanan</a>
    </div>
  </div>
</section>




<?php if($artikel->count()): ?>
<section class="section" id="artikel" aria-labelledby="artikel-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Artikel Terbaru</div>
      <h2 class="section-title" id="artikel-heading">Wawasan & Informasi Psikologi</h2>
      <p class="section-subtitle">Temukan artikel informatif seputar psikologi, konseling, dan pengembangan diri.</p>
    </div>

    <div class="grid-3 reveal">
      <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="card" aria-labelledby="art-<?php echo e($art->id); ?>">
          <a href="<?php echo e(route('artikel.show', $art->slug)); ?>" tabindex="-1" aria-hidden="true" class="card-img-link">
            <img
              src="<?php echo e($art->gambar_utama ? asset('storage/' . $art->gambar_utama) : 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=600&q=80'); ?>"
              alt="<?php echo e($art->alt_gambar ?? $art->judul); ?>"
              class="card-img"
              loading="lazy"
              width="400"
              height="225">
          </a>
          <div class="card-body">
            <h3 class="card-title" id="art-<?php echo e($art->id); ?>">
              <a href="<?php echo e(route('artikel.show', $art->slug)); ?>"><?php echo e($art->judul); ?></a>
            </h3>
            <div class="card-meta">
              <time datetime="<?php echo e($art->published_at?->format('Y-m-d')); ?>"><?php echo e($art->published_at?->translatedFormat('d M Y')); ?></time>
            </div>
            <p class="card-text"><?php echo e(Str::limit($art->excerpt, 100)); ?></p>
          </div>
        </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="section-footer reveal">
      <a href="<?php echo e(route('artikel.index')); ?>" class="btn btn--outline">Lihat Semua Artikel</a>
    </div>
  </div>
</section>
<?php endif; ?>


<?php if($testimoni->count()): ?>
<section class="section section--alt" id="testimoni" aria-labelledby="testimoni-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Testimoni</div>
      <h2 class="section-title" id="testimoni-heading">Yang Mereka Katakan</h2>
      <p class="section-subtitle">Dengarkan pengalaman mereka yang telah merasakan manfaat layanan psikologi An Moerty.</p>
    </div>

    <div class="testi-scroll-wrap reveal">
      <div class="testi-scroll-track">
        <div class="testi-scroll-group">
          <?php $__currentLoopData = $testimoni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="testi-card" aria-labelledby="testi-name-<?php echo e($testi->id); ?>">
              <div class="testi-stars" aria-label="<?php echo e($testi->rating); ?> dari 5 bintang">
                <?php for($s = 1; $s <= 5; $s++): ?>
                  <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true">
                    <?php if($s <= $testi->rating): ?>
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="#FBBF24" stroke="#FBBF24"/>
                    <?php else: ?>
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="none" stroke="#E5E7EB" stroke-width="2"/>
                    <?php endif; ?>
                  </svg>
                <?php endfor; ?>
              </div>
              <blockquote>
                <p class="testi-text">"<?php echo e($testi->isi); ?>"</p>
              </blockquote>
              <div class="testi-author">
                <?php if($testi->foto): ?>
                  <img src="<?php echo e(asset('storage/' . $testi->foto)); ?>" alt="Foto <?php echo e($testi->nama); ?>" class="testi-avatar" width="44" height="44" loading="lazy">
                <?php else: ?>
                  <div class="testi-avatar" aria-hidden="true"><?php echo e($testi->initials); ?></div>
                <?php endif; ?>
                <div>
                  <div class="testi-name" id="testi-name-<?php echo e($testi->id); ?>"><?php echo e($testi->nama); ?></div>
                  <div class="testi-role"><?php echo e($testi->jabatan); ?><?php if($testi->institusi): ?> — <?php echo e($testi->institusi); ?><?php endif; ?></div>
                </div>
              </div>
            </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="testi-scroll-group" aria-hidden="true">
          <?php $__currentLoopData = $testimoni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="testi-card" aria-labelledby="testi-name-<?php echo e($testi->id); ?>">
              <div class="testi-stars" aria-label="<?php echo e($testi->rating); ?> dari 5 bintang">
                <?php for($s = 1; $s <= 5; $s++): ?>
                  <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true">
                    <?php if($s <= $testi->rating): ?>
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="#FBBF24" stroke="#FBBF24"/>
                    <?php else: ?>
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="none" stroke="#E5E7EB" stroke-width="2"/>
                    <?php endif; ?>
                  </svg>
                <?php endfor; ?>
              </div>
              <blockquote>
                <p class="testi-text">"<?php echo e($testi->isi); ?>"</p>
              </blockquote>
              <div class="testi-author">
                <?php if($testi->foto): ?>
                  <img src="<?php echo e(asset('storage/' . $testi->foto)); ?>" alt="Foto <?php echo e($testi->nama); ?>" class="testi-avatar" width="44" height="44" loading="lazy">
                <?php else: ?>
                  <div class="testi-avatar" aria-hidden="true"><?php echo e($testi->initials); ?></div>
                <?php endif; ?>
                <div>
                  <div class="testi-name" id="testi-name-<?php echo e($testi->id); ?>"><?php echo e($testi->nama); ?></div>
                  <div class="testi-role"><?php echo e($testi->jabatan); ?><?php if($testi->institusi): ?> — <?php echo e($testi->institusi); ?><?php endif; ?></div>
                </div>
              </div>
            </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>

    <div class="section-footer reveal">
      <a href="<?php echo e(route('testimoni.index')); ?>" class="btn btn--outline">Lihat Semua Testimoni</a>
    </div>
  </div>
</section>
<?php endif; ?>


<section class="section section--alt" id="klien" aria-labelledby="klien-heading">
  <div class="container">
    <div class="section-header section-header--center reveal">
      <div class="section-label">Klien Kami</div>
      <h2 class="section-title" id="klien-heading">Dipercaya oleh Perusahaan Terkemuka</h2>
      <p class="section-subtitle">Kami telah menjalin kerjasama dengan berbagai multi level perusahaan daerah dan nasional.</p>
    </div>

    <div class="klien-marquee reveal" aria-label="Logo perusahaan klien">
      <div class="klien-marquee-track">
        <div class="klien-marquee-group">
          <img src="<?php echo e(asset('images/klien/a.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/b.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/c.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/d.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/Capture.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/e.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/f.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/ff.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
        </div>
        <div class="klien-marquee-group" aria-hidden="true">
          <img src="<?php echo e(asset('images/klien/a.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/b.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/c.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/d.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/Capture.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/e.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/f.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
          <img src="<?php echo e(asset('images/klien/ff.png')); ?>" alt="Logo Klien" class="klien-logo" loading="lazy" width="130" height="65">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section" aria-labelledby="cta-heading">
  <div class="container">
    <div class="cta-section reveal">
      <div class="cta-content">
        <h2 class="cta-title" id="cta-heading">Siap Memulai Perjalanan<br>Menuju Diri Terbaik?</h2>
        <p class="cta-subtitle">Hubungi kami sekarang dan dapatkan konsultasi awal bersama tim psikolog profesional An Moerty Banyuwangi.</p>
        <div class="cta-actions">
          <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>?text=<?php echo e(urlencode(\App\Models\Setting::get('wa_pesan_default', 'Halo An Moerty Psikologi, saya ingin konsultasi. Bisakah kita berbicara?'))); ?>" class="btn btn--white btn--lg" target="_blank" rel="noopener noreferrer">
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
            Chat WhatsApp
          </a>
          <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn--outline-white btn--lg">Kirim Pesan</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADVAN\Documents\psikolog\resources\views/frontend-home.blade.php ENDPATH**/ ?>