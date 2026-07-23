@extends('layouts.app')

@section('title', ($layanan->meta_title ?? $layanan->nama . ' — An Moerty Psikologi Banyuwangi'))
@section('description', $layanan->meta_description ?? $layanan->deskripsi_singkat)
@section('og_title', $layanan->nama . ' | An Moerty Psikologi')

@section('content')

<div class="layanan-hero">
  <div class="container">
    <div class="page-hero-content">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Beranda</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <a href="{{ route('layanan.index') }}">Layanan</a>
        <span class="breadcrumb-sep" aria-hidden="true">›</span>
        <span aria-current="page">{{ $layanan->nama }}</span>
      </nav>
      @if($layanan->kategori)
        <span class="badge badge--pink" style="margin-bottom:var(--space-4);">{{ $layanan->kategori->nama }}</span>
      @endif
      <h1 class="page-hero-title" id="layanan-detail-heading">{{ $layanan->nama }}</h1>
      <p class="page-hero-subtitle">{{ $layanan->deskripsi_singkat }}</p>
    </div>
  </div>
</div>

<section class="section" aria-labelledby="layanan-detail-heading">
  <div class="container">
    <div class="layanan-detail-grid">

      {{-- Main Content --}}
      <div>
        @if($layanan->gambar)
          <img
            src="{{ asset('storage/' . $layanan->gambar) }}"
            alt="{{ $layanan->alt_gambar ?? $layanan->nama }}"
            style="width:100%; aspect-ratio:16/9; object-fit:cover; border-radius:var(--radius-lg); margin-bottom:var(--space-10);"
            loading="eager">
        @else
          <div style="width:100%; aspect-ratio:16/9; background:var(--clr-bg-alt); border-radius:var(--radius-lg); margin-bottom:var(--space-10); display:flex; align-items:center; justify-content:center;" aria-hidden="true">
            <div style="width:80px; height:80px; background:var(--clr-pink-light); border-radius:50%; display:flex; align-items:center; justify-content:center;">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="1.5"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
            </div>
          </div>
        @endif

        {{-- Deskripsi Lengkap --}}
        @if($layanan->deskripsi_lengkap)
          <div class="reveal" style="font-size:1.0625rem; line-height:1.85; color:var(--clr-text-2); margin-bottom:var(--space-10);">
            {!! $layanan->deskripsi_lengkap !!}
          </div>
        @endif

        {{-- Manfaat --}}
        @if($layanan->manfaat)
          <div class="reveal" style="margin-bottom:var(--space-10);">
            <h2 style="font-size:1.375rem; font-weight:700; margin-bottom:var(--space-6);">Manfaat Layanan</h2>
            <ul style="list-style:none; display:flex; flex-direction:column; gap:var(--space-3);">
              @foreach($layanan->manfaat as $manfaat)
                <li style="display:flex; align-items:flex-start; gap:var(--space-3); font-size:0.9375rem; color:var(--clr-text-2); line-height:1.65; padding:var(--space-3) var(--space-4); background:var(--clr-bg-alt); border-radius:var(--radius-sm);">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--clr-pink)" stroke-width="2.5" style="flex-shrink:0; margin-top:1px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                  {{ $manfaat }}
                </li>
              @endforeach
            </ul>
          </div>
        @endif

        {{-- Proses --}}
        @if($layanan->proses)
          <div class="reveal">
            <h2 style="font-size:1.375rem; font-weight:700; margin-bottom:var(--space-6);">Proses Layanan</h2>
            <ol style="list-style:none; display:flex; flex-direction:column; gap:var(--space-4);" aria-label="Tahapan proses layanan">
              @foreach($layanan->proses as $i => $step)
                <li style="display:flex; align-items:flex-start; gap:var(--space-4);">
                  <span style="width:32px; height:32px; background:var(--clr-pink); color:white; border-radius:50%; display:flex; align-items:center; justify-content:center; font-family:var(--font-heading); font-weight:700; font-size:0.875rem; flex-shrink:0;" aria-hidden="true">{{ $i+1 }}</span>
                  <div style="padding-top:4px;">
                    <p style="font-size:0.9375rem; color:var(--clr-text); font-weight:500; line-height:1.6;">{{ $step }}</p>
                  </div>
                </li>
              @endforeach
            </ol>
          </div>
        @endif
      </div>

      {{-- Sidebar --}}
      <aside class="layanan-sidebar" aria-label="Navigasi layanan">
        {{-- CTA Card --}}
        <div class="sidebar-card" style="margin-bottom:var(--space-6); background:var(--clr-text); border-color:transparent;">
          <h3 style="font-size:1.0625rem; font-weight:700; color:white; margin-bottom:var(--space-3);">Tertarik dengan layanan ini?</h3>
          <p style="font-size:0.875rem; color:rgba(255,255,255,0.65); margin-bottom:var(--space-5); line-height:1.65;">Hubungi kami sekarang dan dapatkan informasi lebih lanjut.</p>
          <a href="https://wa.me/6208223392179?text={{ urlencode('Halo, saya tertarik dengan layanan ' . $layanan->nama . '. Boleh konsultasi lebih lanjut?') }}" class="btn btn--white btn--full" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Chat WhatsApp
          </a>
          <a href="{{ route('kontak.index') }}" class="btn" style="background:rgba(255,255,255,0.1); color:white; margin-top:var(--space-2); width:100%;">Kirim Pesan</a>
        </div>

        {{-- Layanan Lainnya --}}
        <div class="sidebar-card">
          <p class="sidebar-card-title">Layanan Lainnya</p>
          <ul class="sidebar-layanan-list" role="list">
            @foreach($semuaLayanan as $item)
              <li role="listitem">
                <a href="{{ route('layanan.show', $item->slug) }}"
                   class="sidebar-layanan-link {{ $item->id === $layanan->id ? 'active' : '' }}"
                   aria-current="{{ $item->id === $layanan->id ? 'page' : 'false' }}">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
                  {{ $item->nama }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </aside>

    </div>
  </div>
</section>

@endsection
