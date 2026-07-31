

<?php $__env->startSection('title', 'Hubungi Kami — An Moerty Psikologi Banyuwangi'); ?>
<?php $__env->startSection('description', 'Hubungi An Moerty Psikologi Banyuwangi melalui WhatsApp, telepon, atau kunjungi kantor kami di Jl. Progo No. 59 Banyuwangi untuk konsultasi psikologi.'); ?>

<?php $__env->startSection('content'); ?>


<section class="page-hero" aria-labelledby="kontak-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo e(route('home')); ?>">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">Hubungi Kami</span>
      </nav>
      <div class="section-label">Kontak</div>
      <h1 class="page-hero-title" id="kontak-heading">Hubungi Kami</h1>
      <p class="page-hero-subtitle">Kami siap membantu Anda. Hubungi melalui WhatsApp, atau kunjungi kantor kami di Banyuwangi.</p>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="form-heading">
  <div class="container">

    
    <?php if(session('success')): ?>
      <div role="alert" style="background:var(--clr-pink-light); border:1px solid var(--clr-pink-border); border-radius:var(--radius-md); padding:var(--space-5) var(--space-6); margin-bottom:var(--space-8); display:flex; gap:var(--space-4); align-items:flex-start;">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="2" style="flex-shrink:0; margin-top:1px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        <div>
          <p style="font-weight:700; color:var(--clr-pink); margin-bottom:2px;">Pesan Terkirim!</p>
          <p style="font-size:0.9375rem; color:var(--clr-text-2);"><?php echo e(session('success')); ?></p>
        </div>
      </div>
    <?php endif; ?>

    <div class="contact-layout">

      
      <div class="reveal">
        <div style="background:var(--clr-surface); padding:var(--space-8); border-radius:var(--radius-lg); box-shadow:0 10px 25px -5px rgba(0,0,0,0.05); border:1px solid var(--clr-border);">
          <div style="margin-bottom:var(--space-8);">
            <h2 class="section-title" id="form-heading" style="margin-bottom:var(--space-2);">Kirim Pesan</h2>
            <p style="color:var(--clr-text-2);">Punya pertanyaan atau ingin berkonsultasi? Silakan isi formulir di bawah ini dan kami akan segera membalasnya.</p>
          </div>

          <form action="<?php echo e(route('kontak.kirim')); ?>" method="POST" novalidate>
            <?php echo csrf_field(); ?>

            <div class="grid-2">
              <div class="form-group">
                <label for="nama" class="form-label">Nama Lengkap <span class="required" aria-label="wajib diisi">*</span></label>
                <input
                  type="text"
                  id="nama"
                  name="nama"
                  class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                  placeholder="Masukkan nama lengkap Anda"
                  value="<?php echo e(old('nama')); ?>"
                  required
                  autocomplete="name"
                  aria-describedby="<?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> nama-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="form-error" id="nama-error" role="alert">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    <?php echo e($message); ?>

                  </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <div class="form-group">
                <label for="email" class="form-label">Alamat Email <span class="required" aria-label="wajib diisi">*</span></label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                  placeholder="email@contoh.com"
                  value="<?php echo e(old('email')); ?>"
                  required
                  autocomplete="email"
                  aria-describedby="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> email-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="form-error" id="email-error" role="alert">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    <?php echo e($message); ?>

                  </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>

            <div class="grid-2">
              <div class="form-group">
                <label for="telepon" class="form-label">No. Telepon / WhatsApp</label>
                <input
                  type="tel"
                  id="telepon"
                  name="telepon"
                  class="form-control"
                  placeholder="0812-XXXX-XXXX"
                  value="<?php echo e(old('telepon')); ?>"
                  autocomplete="tel">
              </div>

              <div class="form-group">
                <label for="subjek" class="form-label">Subjek</label>
                <input
                  type="text"
                  id="subjek"
                  name="subjek"
                  class="form-control"
                  placeholder="Topik pertanyaan Anda"
                  value="<?php echo e(old('subjek')); ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="pesan" class="form-label">Pesan <span class="required" aria-label="wajib diisi">*</span></label>
              <textarea
                id="pesan"
                name="pesan"
                class="form-control <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Tuliskan pertanyaan atau pesan Anda di sini..."
                required
                rows="5"
                aria-describedby="<?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> pesan-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('pesan')); ?></textarea>
              <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-error" id="pesan-error" role="alert">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                  <?php echo e($message); ?>

                </p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn--primary btn--lg" style="width:100%; border-radius:var(--radius-md);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              Kirim Pesan
            </button>
          </form>
        </div>
      </div>

      
      <div class="reveal reveal-delay-2">
        <h2 class="section-title" style="margin-bottom:var(--space-6);">Informasi Kontak</h2>

        <address style="font-style:normal;">
          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true" style="background:var(--clr-pink-light); color:var(--clr-pink); padding:8px; border-radius:50%; display:flex;">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 015.12 12.63 19.79 19.79 0 012.05 4a2 2 0 011.72-2.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
            </div>
            <div>
              <p class="contact-info-label" style="font-size:0.875rem; color:var(--clr-text-2); margin-bottom:2px;">WhatsApp / Telepon</p>
              <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>" class="contact-info-value" style="font-weight:600; color:var(--clr-primary); text-decoration:none;" target="_blank" rel="noopener noreferrer">0822-3339-2179</a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true" style="background:var(--clr-pink-light); color:var(--clr-pink); padding:8px; border-radius:50%; display:flex;">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="contact-info-label" style="font-size:0.875rem; color:var(--clr-text-2); margin-bottom:2px;">Alamat Kantor</p>
              <p class="contact-info-value" style="font-weight:600;">Jl. Progo No. 59, Banyuwangi</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true" style="background:var(--clr-pink-light); color:var(--clr-pink); padding:8px; border-radius:50%; display:flex;">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div>
              <p class="contact-info-label" style="font-size:0.875rem; color:var(--clr-text-2); margin-bottom:2px;">Jam Operasional</p>
              <p class="contact-info-value" style="font-weight:600;">Senin – Jumat: 08.00 – 17.00 WIB</p>
            </div>
          </div>
        </address>

        
        <div style="margin-top:var(--space-8); padding:var(--space-8); background:#111827; border-radius:var(--radius-lg);">
          <div style="display:flex; align-items:center; gap:12px; margin-bottom:var(--space-3);">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="#25D366" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            <h3 style="color:white; font-size:1.25rem; font-weight:700; margin:0;">Konsultasi via WhatsApp</h3>
          </div>
          <p style="color:rgba(255,255,255,0.8); font-size:0.9375rem; margin-bottom:var(--space-6); line-height:1.6;">
            Dapatkan respons lebih cepat untuk mengatur jadwal sesi atau bertanya seputar layanan kami.
          </p>
          <a href="https://wa.me/<?php echo e(preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179')))); ?>?text=<?php echo e(urlencode('Halo An Moerty Psikologi, saya ingin konsultasi. Apakah bisa bantu saya?')); ?>" class="btn btn--lg" style="background:#25D366; color:white; font-weight:700; width:100%; justify-content:center; border:none; border-radius:var(--radius-md);" target="_blank" rel="noopener noreferrer">
            Chat dengan Admin
          </a>
        </div>
      </div>

    </div>

    
    <div class="reveal" style="margin-top:var(--space-12);">
      <div style="display:flex; flex-wrap:wrap; gap:var(--space-4); justify-content:space-between; align-items:flex-end; margin-bottom:var(--space-6);">
        <div>
          <h2 class="section-title" style="margin-bottom:var(--space-2);">Lokasi Kami</h2>
          <p style="color:var(--clr-text-2);">Kunjungi kantor kami untuk layanan konsultasi tatap muka.</p>
        </div>
        <a href="https://www.google.com/maps/search/?api=1&query=Psikologi+Banyuwangi+An+Moerty" target="_blank" rel="noopener noreferrer" class="btn btn--outline" style="border-radius:var(--radius-md); white-space:nowrap;">
          Buka di Google Maps
        </a>
      </div>
      <div class="contact-map-wrap" aria-label="Peta lokasi An Moerty Psikologi Banyuwangi" style="box-shadow:0 10px 15px -3px rgba(0,0,0,0.1); border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--clr-border);">
        <iframe
          src="<?php echo e(\App\Models\Setting::get('kontak_maps_url', 'https://maps.google.com/maps?q=Psikologi%20Banyuwangi%20An%20Moerty&t=m&z=15&output=embed&iwloc=near')); ?>"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi An Moerty Psikologi Banyuwangi di Google Maps"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\psikolog\resources\views/contact.blade.php ENDPATH**/ ?>