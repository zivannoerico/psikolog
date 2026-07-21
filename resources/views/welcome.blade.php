<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psikologi Banyuwangi - Layanan Psikologi Premium & Eksklusif</title>
    <meta name="description" content="Lembaga asesmen dan layanan konseling profesional di Banyuwangi. Melayani student profiling, study analysis, dan identifikasi hambatan belajar secara eksklusif.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container navbar">
            <div class="logo">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                    <path d="M12 12 2.32 15.21"></path>
                    <path d="m12 12 6.68 7.21"></path>
                </svg>
                An Moerty
            </div>
            <nav class="nav-links">
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#layanan">Layanan Psikologi</a>
                <a href="#berita">Berita Artikel</a>
                <a href="#kontak">Hubungi Kami</a>
            </nav>
            <a href="#kontak" class="btn btn-primary">Reservasi Konsultasi</a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="beranda" class="hero">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-label">Psikologi Banyuwangi</span>
                    <h1 class="hero-title">Harmoni Pikiran, <span>Keseimbangan</span> Jiwa</h1>
                    <p class="hero-subtitle">Pendekatan eksklusif dan personal untuk kesehatan mental Anda. Dipandu oleh tim psikolog profesional dengan pengalaman lebih dari satu dekade dalam mengungkap potensi sejati.</p>
                    <div class="hero-actions">
                        <a href="#layanan" class="btn btn-primary">Lihat Layanan Kami</a>
                        <a href="#tentang" class="btn btn-outline">Kisah Kami</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-frame">
                        <img src="{{ asset('images/hero.png') }}" alt="Sesi Konseling Psikologi Premium">
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang Kami Section -->
        <section id="tentang" class="section section-bg-alt">
            <div class="container about-grid">
                <div class="about-image">
                    <!-- Placeholder for professional team photo -->
                    <div class="image-frame" style="padding: 10px;">
                        <div style="width: 100%; height: 500px; background: #e2e8f0; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                            [Foto Profesional Tim Psikolog]
                        </div>
                    </div>
                </div>
                <div class="about-content">
                    <span class="section-label">Tentang Kami</span>
                    <h2>Dedikasi Lebih Dari 10 Tahun</h2>
                    <p>An Moerty Psikologi Banyuwangi hadir sebagai lembaga asesmen dan layanan konseling yang mengedepankan privasi, profesionalisme, dan hasil yang nyata.</p>
                    <p>Kami percaya bahwa setiap individu memiliki potensi unik yang kadang tersembunyi di balik hambatan emosional maupun akademis. Pendekatan kami dirancang khusus secara eksklusif untuk setiap klien.</p>
                    
                    <div class="about-stats">
                        <div class="stat-box">
                            <h4>10+</h4>
                            <p>Tahun Dedikasi</p>
                        </div>
                        <div class="stat-box">
                            <h4>5K+</h4>
                            <p>Klien Terbantu</p>
                        </div>
                        <div class="stat-box">
                            <h4>20+</h4>
                            <p>Pakar Ahli</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Layanan Section -->
        <section id="layanan" class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Layanan Eksklusif</span>
                    <h2 class="section-title">Solusi Psikologi Personal</h2>
                </div>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="service-title">Konseling Personal</h3>
                        <p class="service-desc">Sesi privat mendalam bersama psikolog klinis kami. Mengurai masalah kecemasan, stres, dan trauma dalam ruang yang aman dan rahasia.</p>
                        <a href="#" class="service-link">Pelajari Selengkapnya &rarr;</a>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="9" y1="9" x2="15" y2="9"></line>
                                <line x1="9" y1="13" x2="15" y2="13"></line>
                                <line x1="9" y1="17" x2="15" y2="17"></line>
                            </svg>
                        </div>
                        <h3 class="service-title">Student Profiling</h3>
                        <p class="service-desc">Analisis komprehensif minat, bakat, dan gaya belajar. Memberikan peta jalan yang jelas untuk meraih keunggulan akademik yang prestisius.</p>
                        <a href="#" class="service-link">Pelajari Selengkapnya &rarr;</a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m12 16 4-4-4-4"></path>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <h3 class="service-title">Hipnoterapi Medis</h3>
                        <p class="service-desc">Terapi gelombang otak bawah sadar yang dilakukan oleh spesialis tersertifikasi untuk mengatasi fobia persisten dan adiksi.</p>
                        <a href="#" class="service-link">Pelajari Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Berita Artikel Section -->
        <section id="berita" class="section section-bg-alt">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Berita & Insight</span>
                    <h2 class="section-title">Artikel Psikologi Terkini</h2>
                </div>
                
                <div class="news-grid">
                    <!-- Article 1 -->
                    <div class="news-card">
                        <div class="news-image">
                            <!-- Placeholder -->
                        </div>
                        <div class="news-content">
                            <span class="news-date">12 Agustus 2026</span>
                            <h3 class="news-title">Mengenali Tanda-tanda Burnout di Tempat Kerja Modern</h3>
                            <a href="#" class="service-link">Baca Artikel &rarr;</a>
                        </div>
                    </div>
                    <!-- Article 2 -->
                    <div class="news-card">
                        <div class="news-image">
                            <!-- Placeholder -->
                        </div>
                        <div class="news-content">
                            <span class="news-date">05 Agustus 2026</span>
                            <h3 class="news-title">Pentingnya Student Profiling Sebelum Memilih Jurusan Kuliah</h3>
                            <a href="#" class="service-link">Baca Artikel &rarr;</a>
                        </div>
                    </div>
                    <!-- Article 3 -->
                    <div class="news-card">
                        <div class="news-image">
                            <!-- Placeholder -->
                        </div>
                        <div class="news-content">
                            <span class="news-date">28 Juli 2026</span>
                            <h3 class="news-title">Mitos dan Fakta Seputar Penggunaan Hipnoterapi Klinis</h3>
                            <a href="#" class="service-link">Baca Artikel &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Premium -->
    <footer id="kontak">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                            <path d="M12 12 2.32 15.21"></path>
                            <path d="m12 12 6.68 7.21"></path>
                        </svg>
                        An Moerty
                    </div>
                    <p>Lembaga asesmen dan layanan psikologi premium di Banyuwangi. Kami menjaga privasi dan kualitas hidup Anda.</p>
                </div>
                <div class="footer-col">
                    <h4>Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="#">Konseling Personal</a></li>
                        <li><a href="#">Asesmen & Psikotes</a></li>
                        <li><a href="#">Hipnoterapi Medis</a></li>
                        <li><a href="#">Konseling Karir</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Tentang</h4>
                    <ul class="footer-links">
                        <li><a href="#">Profil Tim</a></li>
                        <li><a href="#">Metodologi</a></li>
                        <li><a href="#">Testimoni Klien</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Kontak & Reservasi</h4>
                    <ul class="footer-links">
                        <li>Jl. Eksklusif No. 1, Banyuwangi</li>
                        <li>+62 812-3456-7890 (WhatsApp)</li>
                        <li>concierge@psikologibanyuwangi.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} An Moerty Psikologi Banyuwangi. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
