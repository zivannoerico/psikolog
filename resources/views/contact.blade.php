@extends('layouts.app')

@section('title', 'Hubungi Kami — An Moerty Psikologi Banyuwangi')
@section('description', 'Hubungi An Moerty Psikologi Banyuwangi melalui WhatsApp, telepon, atau kunjungi kantor kami di Jl. Progo No. 59 Banyuwangi untuk konsultasi psikologi.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero" aria-labelledby="kontak-heading">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
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

    {{-- Success Alert --}}
    @if(session('success'))
      <div role="alert" style="background:var(--clr-pink-light); border:1px solid var(--clr-pink-border); border-radius:var(--radius-md); padding:var(--space-5) var(--space-6); margin-bottom:var(--space-8); display:flex; gap:var(--space-4); align-items:flex-start;">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="2" style="flex-shrink:0; margin-top:1px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        <div>
          <p style="font-weight:700; color:var(--clr-pink); margin-bottom:2px;">Pesan Terkirim!</p>
          <p style="font-size:0.9375rem; color:var(--clr-text-2);">{{ session('success') }}</p>
        </div>
      </div>
    @endif

    <div class="contact-layout">

      {{-- Form --}}
      <div class="reveal">
        <h2 class="section-title" id="form-heading" style="margin-bottom:var(--space-8);">Kirim Pesan</h2>

        <form action="{{ route('kontak.kirim') }}" method="POST" novalidate>
          @csrf

          <div class="grid-2">
            <div class="form-group">
              <label for="nama" class="form-label">Nama Lengkap <span class="required" aria-label="wajib diisi">*</span></label>
              <input
                type="text"
                id="nama"
                name="nama"
                class="form-control @error('nama') error @enderror"
                placeholder="Masukkan nama lengkap Anda"
                value="{{ old('nama') }}"
                required
                autocomplete="name"
                aria-describedby="@error('nama') nama-error @enderror">
              @error('nama')
                <p class="form-error" id="nama-error" role="alert">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                  {{ $message }}
                </p>
              @enderror
            </div>

            <div class="form-group">
              <label for="email" class="form-label">Alamat Email <span class="required" aria-label="wajib diisi">*</span></label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control @error('email') error @enderror"
                placeholder="email@contoh.com"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                aria-describedby="@error('email') email-error @enderror">
              @error('email')
                <p class="form-error" id="email-error" role="alert">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                  {{ $message }}
                </p>
              @enderror
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
                value="{{ old('telepon') }}"
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
                value="{{ old('subjek') }}">
            </div>
          </div>

          <div class="form-group">
            <label for="pesan" class="form-label">Pesan <span class="required" aria-label="wajib diisi">*</span></label>
            <textarea
              id="pesan"
              name="pesan"
              class="form-control @error('pesan') error @enderror"
              placeholder="Tuliskan pertanyaan atau pesan Anda di sini..."
              required
              rows="6"
              aria-describedby="@error('pesan') pesan-error @enderror">{{ old('pesan') }}</textarea>
            @error('pesan')
              <p class="form-error" id="pesan-error" role="alert">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                {{ $message }}
              </p>
            @enderror
          </div>

          <button type="submit" class="btn btn--primary btn--lg" style="width:100%;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            Kirim Pesan
          </button>
        </form>
      </div>

      {{-- Info Kontak --}}
      <div class="reveal reveal-delay-2">
        <h2 class="section-title" style="margin-bottom:var(--space-8);">Informasi Kontak</h2>

        <address style="font-style:normal;">
          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 015.12 12.63 19.79 19.79 0 012.05 4a2 2 0 011.72-2.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
            </div>
            <div>
              <p class="contact-info-label">WhatsApp / Telepon</p>
              <a href="https://wa.me/6208223392179" class="contact-info-value" target="_blank" rel="noopener">0822-3339-2179</a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="contact-info-label">Alamat Kantor</p>
              <p class="contact-info-value">Jl. Progo No. 59, Banyuwangi, Jawa Timur</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="contact-info-label">Alamat Lengkap</p>
              <p class="contact-info-value">Jl. Progo No.50, Singonegaran, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68415</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div>
              <p class="contact-info-label">Jam Operasional</p>
              <p class="contact-info-value">Senin – Jumat: 08.00 – 17.00 WIB</p>
            </div>
          </div>
        </address>

        {{-- WhatsApp CTA --}}
        <div style="margin-top:var(--space-6); padding:var(--space-5) var(--space-6); background:linear-gradient(135deg, #25D366 0%, #1eb358 100%); border-radius:var(--radius-md);">
          <p style="color:white; font-weight:700; margin-bottom:var(--space-2);">Lebih cepat via WhatsApp!</p>
          <p style="color:rgba(255,255,255,0.85); font-size:0.875rem; margin-bottom:var(--space-4);">Dapatkan respons lebih cepat dengan menghubungi langsung.</p>
          <a href="https://wa.me/6208223392179?text={{ urlencode('Halo An Moerty Psikologi, saya ingin konsultasi. Apakah bisa bantu saya?') }}" class="btn" style="background:white; color:#1eb358; font-weight:700;" target="_blank" rel="noopener">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat Sekarang
          </a>
        </div>

        {{-- Maps --}}
        <div class="contact-map-wrap" aria-label="Peta lokasi An Moerty Psikologi Banyuwangi">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.86877953051!2d114.3642738!3d-8.2159187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15ab2f6631b17%3A0xc3c5ab04bb520b2!2sPsikologi%20Banyuwangi%20(An%20Moerty)!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Lokasi An Moerty Psikologi Banyuwangi di Google Maps"
            allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection
