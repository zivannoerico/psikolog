@extends('layouts.app')

@section('content')
<!-- Modern Glassmorphism Hero Section -->
        <section class="about-hero-modern">
            <div class="glass-container container">
                <div class="glass-card">
                    <span class="glass-label">Kenali Kami</span>
                    <h1 class="glass-title">Biro Psikologi & Konseling<br><span style="color: var(--primary);">An Moerty Banyuwangi</span></h1>
                    <p class="glass-subtitle">Membantu Anda mengenali potensi, mengatasi hambatan, dan mencapai kesejahteraan mental yang seutuhnya.</p>
                </div>
            </div>
            <div class="hero-decorative-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
            </div>
        </section>

        <!-- Founder Profiling Section (Split Layout) -->
        <section class="section founder-section">
            <div class="container">
                <div class="founder-grid">
                    <div class="founder-image-wrapper">
                        <!-- We use a professional placeholder since we don't have the real image -->
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=800" alt="Betty Kumala F." class="founder-image">
                        <div class="founder-badge">
                            <span class="badge-year">10+</span>
                            <span class="badge-text">Tahun<br>Pengalaman</span>
                        </div>
                    </div>
                    <div class="founder-content">
                        <span class="section-label">Profil Founder</span>
                        <h2 class="section-title" style="text-align: left; margin-bottom: 10px;">Betty Kumala F.</h2>
                        <h3 style="color: var(--primary); font-size: 1.2rem; margin-bottom: 25px;">S.Psi., M.Psi., Psikolog, CH., CHt</h3>
                        
                        <div class="founder-quote">
                            "Kesehatan mental adalah pilar utama dari kualitas hidup. Kami hadir untuk mendampingi setiap individu dan organisasi menuju versi terbaik dari diri mereka."
                        </div>
                        
                        <p style="margin-bottom: 15px; color: var(--text-muted); line-height: 1.8;">
                            An Moerty Psikologi Banyuwangi merupakan sebuah Lembaga Assessment Center yang memberikan pelayanan profesional kepada masyarakat. Kami fokus pada layanan krusial seperti <strong>Student Profiling</strong>, <strong>Study Analysis</strong>, serta identifikasi hambatan belajar.
                        </p>
                        <p style="color: var(--text-muted); line-height: 1.8;">
                            Melalui pendekatan klinis dan psikologis yang teruji, kami membantu para pendidik, individu, dan instansi untuk lebih memahami karakteristik serta menggali potensi terpendam yang dimiliki.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bento Grid "Mengapa Memilih Kami" (Why Choose Us) -->
        <section class="section bento-section" style="background-color: var(--bg-alt);">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Nilai & Dedikasi</span>
                    <h2 class="section-title">4 Pilar Utama Pelayanan Kami</h2>
                    <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">Layanan kami dibangun di atas prinsip-prinsip profesionalisme untuk memastikan hasil asesmen dan konseling yang maksimal.</p>
                </div>

                <div class="bento-grid">
                    <!-- Bento Box 1: Large -->
                    <div class="bento-box bento-large">
                        <div class="bento-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h3>Profesionalisme & Privasi</h3>
                        <p>Kami menjamin kerahasiaan penuh setiap klien. Setiap sesi konseling dan data asesmen dikelola dengan standar etika psikologi yang ketat dan profesional.</p>
                    </div>

                    <!-- Bento Box 2: Medium -->
                    <div class="bento-box bento-medium">
                        <div class="bento-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Pendekatan Personal</h3>
                        <p>Solusi yang dirancang khusus sesuai dengan karakteristik dan kebutuhan unik setiap individu maupun organisasi klien.</p>
                    </div>

                    <!-- Bento Box 3: Medium -->
                    <div class="bento-box bento-medium">
                        <div class="bento-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        </div>
                        <h3>Edukasi & Empati</h3>
                        <p>Bukan sekadar diagnosa, kami mengedukasi dan membimbing klien dengan penuh empati menuju penyelesaian masalah.</p>
                    </div>

                    <!-- Bento Box 4: Wide -->
                    <div class="bento-box bento-wide">
                        <div class="bento-content-flex">
                            <div>
                                <h3 style="margin-bottom: 10px;">Integritas Teruji</h3>
                                <p>Pengalaman lebih dari satu dekade bekerja sama dengan instansi pendidikan dan perusahaan besar membuktikan kualitas asesmen kami.</p>
                            </div>
                            <div class="bento-icon-large">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi Cards -->
        <section class="section vision-mission-section">
            <div class="container">
                <div class="vm-grid">
                    <div class="vm-card">
                        <div class="vm-watermark">Visi</div>
                        <h3 class="vm-title">Visi Kami</h3>
                        <p class="vm-text">Menjadi biro konseling dan asesmen psikologi terdepan di Banyuwangi yang berdedikasi menciptakan generasi cerdas secara emosional dan spiritual.</p>
                    </div>
                    <div class="vm-card">
                        <div class="vm-watermark">Misi</div>
                        <h3 class="vm-title">Misi Kami</h3>
                        <ul class="vm-list">
                            <li>Menyelenggarakan pelayanan psikologis klinis dan pendidikan yang solutif.</li>
                            <li>Mengembangkan potensi minat, bakat, dan karakter setiap individu.</li>
                            <li>Mendukung kemajuan organisasi melalui asesmen kompetensi yang akurat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="section cta-modern">
            <div class="container">
                <div class="cta-banner">
                    <h2>Siap Memulai Perjalanan Penemuan Diri?</h2>
                    <p>Jadwalkan sesi konsultasi Anda hari ini dan mari bersama-sama melangkah menuju kesejahteraan psikologis.</p>
                    <a href="https://wa.me/6282233392179?text=Halo%20An%20Moerty%20Psikologi,%20saya%20ingin%20menjadwalkan%20sesi%20konsultasi." target="_blank" class="btn btn-primary" style="padding: 15px 30px; font-size: 1.1rem; border-radius: 30px; display: inline-flex; align-items: center; gap: 10px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        Jadwalkan via WhatsApp
                    </a>
                </div>
            </div>
        </section>
@endsection
