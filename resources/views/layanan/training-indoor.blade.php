@extends('layouts.app')
@section('title', 'Training Indoor - An Moerty Psikologi')

@section('content')
<style>
    .service-hero {
        padding: 160px 0 80px 0;
        background: linear-gradient(135deg, var(--bg-main) 0%, var(--bg-alt) 100%);
        text-align: center;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    .service-hero h1 { font-size: 3.5rem; color: var(--text-main); margin-bottom: 1rem; }
    .service-hero p { font-size: 1.2rem; color: var(--text-muted); max-width: 600px; margin: 0 auto; }
    
    .service-detail { padding: 80px 0; background: var(--white); }
    .service-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }
    .service-img {
        width: 100%; border-radius: 24px; box-shadow: var(--shadow-soft);
    }
    .service-text h2 { font-size: 2rem; margin-bottom: 20px; color: var(--primary); }
    .service-text p { font-size: 1.1rem; color: var(--text-main); margin-bottom: 20px; line-height: 1.8; }
    .service-features { margin-top: 30px; list-style: none; padding:0; }
    .service-features li {
        margin-bottom: 15px; font-size: 1.1rem; color: var(--text-main);
        display: flex; align-items: center; gap: 10px;
    }
    .service-features li svg { color: var(--primary); }
    @media (max-width: 768px) {
        .service-grid { grid-template-columns: 1fr; }
        .service-hero h1 { font-size: 2.5rem; }
    }
</style>

<section class="service-hero">
    <div class="container">
        <h1>Training Indoor</h1>
        <p>Pelatihan pengembangan diri dan kapasitas tim di dalam ruangan dengan metode interaktif.</p>
    </div>
</section>

<section class="service-detail">
    <div class="container">
        <div class="service-grid">
            <div class="service-img-wrapper">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800" alt="Training Indoor" class="service-img">
            </div>
            <div class="service-text">
                <h2>Mengapa Memilih Layanan Ini?</h2>
                <p>Melalui layanan ini, kami membantu proses identifikasi hambatan belajar, student profiling, study analysis, hingga pemecahan krisis karyawan. Berbasis metode yang terintegrasi, kami pastikan setiap sesi berlangsung profesional dan memuaskan seperti yang telah dirasakan oleh klien-klien besar kami (PT PLN, Bank Jatim, PT KAI, dsb).</p>
                
                <ul class="service-features">

                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Kecepatan & Ketepatan Psikogram:</strong> Hasil selesai cepat dengan interpretasi tepat.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Cakupan Luas & Fleksibel:</strong> Dapat diakses dan dikerjakan dimana saja.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Saran Psikolog Profesional:</strong> Rekomendasi akurat untuk perusahaan, organisasi & personal.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Hasil Akurat & Valid:</strong> Melalui penilaian otomatis dan terverifikasi.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Kerahasiaan Terjamin:</strong> Informasi klien dijaga ketat kerahasiaannya.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Laporan Detail & Mudah Dipahami:</strong> Bebas dari istilah psikologis yang rumit.
                    </li>
                </ul>

                <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', \App\Models\Setting::get('kontak_telpon', '082233392179'))) }}?text=Halo%20An%20Moerty%20Psikologi,%20saya%20tertarik%20dengan%20Training Indoor" target="_blank" class="btn btn-primary" style="margin-top: 30px; border-radius: 30px;">
                    Jadwalkan Layanan Ini
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
