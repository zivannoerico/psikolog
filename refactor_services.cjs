const fs = require('fs');
const path = require('path');

const viewsDir = 'd:/psikolog/resources/views';
const layoutsDir = path.join(viewsDir, 'layouts');
if (!fs.existsSync(layoutsDir)) {
    fs.mkdirSync(layoutsDir, { recursive: true });
}

// 1. Read welcome.blade.php to extract the shell
const welcomeContent = fs.readFileSync(path.join(viewsDir, 'welcome.blade.php'), 'utf8');

// Extract head and header
const headHeaderMatch = welcomeContent.match(/([\s\S]*?)<main>/);
if (!headHeaderMatch) throw new Error("Could not find <main> start");
let topPart = headHeaderMatch[1];

const mainEndIdx = welcomeContent.indexOf('</main>');
if (mainEndIdx === -1) throw new Error("Could not find </main> end");
let bottomPart = welcomeContent.substring(mainEndIdx + 7); // include everything after </main>

// 2. Fix the Navbar links in topPart to point to the new routes
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">Psikotes<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/psikotes">Psikotes</a></div>');
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">Interview<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/interview">Interview</a></div>');
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">FGD \(Focus Group Discussion\)<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/fgd">FGD (Focus Group Discussion)</a></div>');
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">Konseling Kerja Karyawan<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/konseling-kerja">Konseling Kerja Karyawan</a></div>');
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">Konseling Permasalahan Karyawan<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/konseling-masalah">Konseling Permasalahan Karyawan</a></div>');
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">Training Indoor<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/training-indoor">Training Indoor</a></div>');
topPart = topPart.replace(/<div class="dropdown-item"><a href="#">Training Outdoor<\/a><\/div>/, '<div class="dropdown-item"><a href="/layanan/training-outdoor">Training Outdoor</a></div>');

// Also update the active state for other pages dynamically, or just leave it generic.
// In Laravel, active states can be set via request()->is(). We'll just leave them for now.
// For title, we can use a yield.
topPart = topPart.replace(/<title>.*?<\/title>/, '<title>@yield("title", "Psikologi Banyuwangi - Layanan Psikologi & Konseling")</title>');

// 3. Create app.blade.php
const appBladeContent = `${topPart}
    <main>
        @yield('content')
    </main>
${bottomPart}`;
fs.writeFileSync(path.join(layoutsDir, 'app.blade.php'), appBladeContent, 'utf8');


// 4. Refactor existing views
const viewsToRefactor = ['welcome.blade.php', 'about.blade.php', 'contact.blade.php', 'berita.blade.php'];
viewsToRefactor.forEach(file => {
    const filePath = path.join(viewsDir, file);
    if (!fs.existsSync(filePath)) return;
    let content = fs.readFileSync(filePath, 'utf8');
    
    const mainMatch = content.match(/<main>([\s\S]*?)<\/main>/);
    if (mainMatch) {
        let innerMain = mainMatch[1].trim();
        const newContent = `@extends('layouts.app')\n\n@section('content')\n${innerMain}\n@endsection\n`;
        fs.writeFileSync(filePath, newContent, 'utf8');
    }
});

// 5. Create the 7 service pages
const services = [
    { slug: 'psikotes', title: 'Layanan Psikotes', desc: 'Asesmen psikologi terstruktur untuk mengetahui potensi intelektual dan kepribadian.' },
    { slug: 'interview', title: 'Layanan Interview', desc: 'Wawancara psikologis mendalam untuk menggali kompetensi, motivasi, dan kesesuaian.' },
    { slug: 'fgd', title: 'Focus Group Discussion (FGD)', desc: 'Asesmen berbasis diskusi kelompok untuk melihat dinamika kepemimpinan dan kerjasama tim.' },
    { slug: 'konseling_kerja', title: 'Konseling Kerja Karyawan', desc: 'Konseling untuk membantu karyawan menemukan kembali motivasi dan produktivitas di tempat kerja.' },
    { slug: 'konseling_masalah', title: 'Konseling Permasalahan Karyawan', desc: 'Dukungan psikologis untuk karyawan yang sedang menghadapi krisis atau masalah personal/profesional.' },
    { slug: 'training_indoor', title: 'Training Indoor', desc: 'Pelatihan pengembangan diri dan kapasitas tim di dalam ruangan dengan metode interaktif.' },
    { slug: 'training_outdoor', title: 'Training Outdoor', desc: 'Pelatihan luar ruangan (outbound) untuk membangun kekompakan tim dan mental tangguh.' }
];

// CSS classes for the service pages (using existing ones or small inline styles)
services.forEach(srv => {
    const fileName = `layanan.${srv.slug}.blade.php`;
    // Replace underscore with dash for URL compatibility inside the view just in case
    const content = `@extends('layouts.app')
@section('title', '${srv.title} - An Moerty Psikologi')

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
        <h1>${srv.title}</h1>
        <p>${srv.desc}</p>
    </div>
</section>

<section class="service-detail">
    <div class="container">
        <div class="service-grid">
            <div class="service-img-wrapper">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800" alt="${srv.title}" class="service-img">
            </div>
            <div class="service-text">
                <h2>Mengapa Memilih Layanan Ini?</h2>
                <p>Kami memahami bahwa setiap individu dan perusahaan memiliki keunikan serta tantangan tersendiri. Melalui layanan <strong>${srv.title}</strong>, kami menggunakan metode psikologi terkini dan berbasis bukti ilmiah untuk memberikan hasil yang akurat.</p>
                
                <ul class="service-features">
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Ditangani langsung oleh Psikolog Profesional
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Metode ilmiah yang teruji validitasnya
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        Laporan komprehensif dan solutif
                    </li>
                </ul>

                <a href="https://wa.me/6282233392179?text=Halo%20An%20Moerty%20Psikologi,%20saya%20tertarik%20dengan%20${srv.title}" target="_blank" class="btn btn-primary" style="margin-top: 30px; border-radius: 30px;">
                    Jadwalkan Layanan Ini
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
`;
    // Create subfolder 'layanan' if it doesn't exist
    const layananDir = path.join(viewsDir, 'layanan');
    if (!fs.existsSync(layananDir)) {
        fs.mkdirSync(layananDir, { recursive: true });
    }
    fs.writeFileSync(path.join(layananDir, srv.slug.replace('_', '-') + '.blade.php'), content, 'utf8');
});

// 6. Update routes/web.php
let routesContent = fs.readFileSync('d:/psikolog/routes/web.php', 'utf8');
const newRoutes = `
// Layanan Routes
Route::get('/layanan/psikotes', function () { return view('layanan.psikotes'); });
Route::get('/layanan/interview', function () { return view('layanan.interview'); });
Route::get('/layanan/fgd', function () { return view('layanan.fgd'); });
Route::get('/layanan/konseling-kerja', function () { return view('layanan.konseling-kerja'); });
Route::get('/layanan/konseling-masalah', function () { return view('layanan.konseling-masalah'); });
Route::get('/layanan/training-indoor', function () { return view('layanan.training-indoor'); });
Route::get('/layanan/training-outdoor', function () { return view('layanan.training-outdoor'); });
`;
if (!routesContent.includes('/layanan/psikotes')) {
    routesContent += newRoutes;
    fs.writeFileSync('d:/psikolog/routes/web.php', routesContent, 'utf8');
}

console.log("Refactoring and service page creation completed successfully.");
