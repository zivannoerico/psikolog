@extends('layouts.app')

@section('content')
<!-- Hero Section -->
        <section id="beranda" class="hero">
            <div class="hero-content-wrapper">
                <div class="hero-content">
                    <span class="hero-label">Konsultasi Psikologi Online</span>
                    <h1 class="hero-title">Buka Potensi Terbaik Diri Anda</h1>
                    <p class="hero-subtitle">
                        Temukan kedamaian pikiran dan solusi masalah bersama psikolog profesional kami. Konsultasi aman, nyaman, dan terpercaya.
                    </p>
                    <div class="hero-actions">
                        <a href="#layanan" class="btn btn-primary">Lihat Layanan</a>
                        <a href="/hubungi" class="btn btn-outline">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="hero-slider-wrapper">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=1200" alt="Psikolog 1" class="hero-slide">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=1200" alt="Psikolog 2" class="hero-slide">
            </div>
        </section>

        <!-- Consultant Section -->
        <!-- Consultant Section -->
        <section id="tentang" class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Tim Ahli</span>
                    <h2 class="section-title">Konsultasikan Bersama Kami</h2>
                    <p class="section-subtitle">Bersama tim Psikolog An Moerty Psikologi yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda untuk mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.</p>
                </div>
                
                <div class="modern-cards-grid">
                    <!-- Card 1 -->
                    <div class="modern-card">
                        <div class="card-image">
                            <!-- Placeholder foto (Unsplash) untuk referensi -->
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Mengenali Potensi">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Mengenali Potensi</h4>
                            <p class="card-text">Menemukan bakat terpendam dan kekuatan utama Anda untuk berkembang secara optimal.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="modern-card">
                        <div class="card-image">
                            <!-- Placeholder foto (Unsplash) untuk referensi -->
                            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?auto=format&fit=crop&q=80&w=600" alt="Mengatasi Tantangan">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Mengatasi Tantangan</h4>
                            <p class="card-text">Memberikan solusi praktis untuk menghadapi setiap permasalahan psikologis dan emosional.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="modern-card">
                        <div class="card-image">
                            <!-- Placeholder foto (Unsplash) untuk referensi -->
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&q=80&w=600" alt="Mengoptimalkan Kualitas">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Kualitas Diri</h4>
                            <p class="card-text">Meningkatkan performa kerja, ketenangan pikiran, dan kesejahteraan hidup secara menyeluruh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bersama Tumbuh Menjadi Lebih Baik Section -->
        <section id="layanan" class="section section-bg-alt">
            <div class="shape-divider">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Layanan Kami</span>
                    <h2 class="section-title">Bersama Tumbuh Menjadi Lebih Baik</h2>
                    <p class="section-subtitle">Program psikologi terapan yang dirancang khusus untuk membawa perubahan positif bagi individu maupun tim kerja.</p>
                </div>
                <div class="growth-grid">
                    <!-- Card 1 -->
                    <div class="growth-card">
                        <div class="growth-bg" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800'); background-size: cover; background-position: center;">
                        </div>
                        <div class="growth-overlay">
                            <h4 class="growth-title">Konseling Privat</h4>
                            <p class="growth-text">Sesi tatap muka eksklusif bersama psikolog untuk menyelesaikan masalah secara personal dengan privasi terjamin.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="growth-card">
                        <div class="growth-bg" style="background-image: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800'); background-size: cover; background-position: center;">
                        </div>
                        <div class="growth-overlay">
                            <h4 class="growth-title">Tes Kemampuan Akademik</h4>
                            <p class="growth-text">Pemetaan menyeluruh mengenai potensi intelektual serta minat dan bakat untuk merancang jalur pendidikan yang tepat.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="growth-card">
                        <div class="growth-bg" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800'); background-size: cover; background-position: center;">
                        </div>
                        <div class="growth-overlay">
                            <h4 class="growth-title">Program Pelatihan Interaktif</h4>
                            <p class="growth-text">Kegiatan kelompok dan workshop praktis yang didesain untuk meningkatkan soft skill dan dinamika kerja tim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Apa yang didapatkan di Psikotes Online Section -->
        <section class="section">
            <div class="shape-divider">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill-alt"></path>
                </svg>
            </div>
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Psikotes Online</span>
                    <h2 class="section-title">Apa Saja Keuntungan Psikotes Online?</h2>
                    <p class="section-subtitle">Kini Anda bisa mengikuti asesmen psikologi profesional dari rumah, tanpa harus datang ke klinik.</p>
                </div>
                <div class="bento-grid">
                    <!-- Item 1 -->
                    <div class="bento-card">
                        <div class="bento-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h3 class="bento-title">Kecepatan dan Ketepatan Psikogram</h3>
                        <p class="bento-text">Hasil psikogram dapat selesai dengan waktu yang cepat dan interpretasi yang tepat.</p>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="bento-card">
                        <div class="bento-icon">
                            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                        <h3 class="bento-title">Cakupan Luas dan Fleksibel</h3>
                        <p class="bento-text">Dapat diakses dan dikerjakan dimana saja dan tidak ada jumlah minimal peserta dalam satu waktu sekaligus.</p>
                    </div>

                    <!-- Item 3 -->
                    <div class="bento-card">
                        <div class="bento-icon">
                            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <h3 class="bento-title">Saran dari Psikolog Profesional</h3>
                        <p class="bento-text">Memberikan saran dan rekomendasi pada perusahaan, organisasi dan personal berdasarkan keseluruhan hasil tes.</p>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="bento-card">
                        <div class="bento-icon">
                            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3 class="bento-title">Hasil Akurat dan Valid</h3>
                        <p class="bento-text">Hasil yang akurat karena melalui penilaian otomatis dan terverifikasi.</p>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="bento-card">
                        <div class="bento-icon">
                            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <h3 class="bento-title">Kerahasiaan Terjamin</h3>
                        <p class="bento-text">Semua informasi yang diberikan oleh klien akan dijaga kerahasiaannya dan tidak akan dibagikan kepada pihak lain.</p>
                    </div>
                    
                    <!-- Item 6 -->
                    <div class="bento-card">
                        <div class="bento-icon">
                            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                        <h3 class="bento-title">Laporan Detail & Mudah Dipahami</h3>
                        <p class="bento-text">Klien tidak akan dibiarkan bingung dengan angka atau istilah psikologis yang rumit.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ulasan Section -->
        <section class="section section-bg-alt">
            <div class="shape-divider">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Testimoni</span>
                    <h2 class="section-title">Ulasan Pelanggan</h2>
                </div>
                <div class="reviews-grid">
                    <!-- Corporate Review 1 -->
                    <div class="review-card premium-review">
                        <div class="quote-mark">
                            <svg viewBox="0 0 24 24" width="50" height="50" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        </div>
                        <p class="review-text">"Sangat membantu operasional bisnis kami dalam melakukan asesmen masal calon pegawai baru. Analisanya sangat tajam, mendetail, dan akurat untuk standar perusahaan."</p>
                        <div class="reviewer">
                            <div class="reviewer-info">
                                <h4>Bpk. Andi Wirawan</h4>
                                <span>HRD Manager, <strong>PT Nusa Konstruksi</strong></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Corporate Review 2 -->
                    <div class="review-card premium-review">
                        <div class="quote-mark">
                            <svg viewBox="0 0 24 24" width="50" height="50" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        </div>
                        <p class="review-text">"Sistem tes psikologi online yang sangat responsif. Sangat memudahkan kami dalam menyeleksi kandidat perbankan dari seluruh penjuru Indonesia tanpa harus tatap muka."</p>
                        <div class="reviewer">
                            <div class="reviewer-info">
                                <h4>Ibu Rina Saraswati</h4>
                                <span>Senior Staff Recruitment, <strong>Bank Sejahtera Raya</strong></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Corporate Review 3 -->
                    <div class="review-card premium-review">
                        <div class="quote-mark">
                            <svg viewBox="0 0 24 24" width="50" height="50" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        </div>
                        <p class="review-text">"Program konsultasi organisasinya sangat berkelas dan berbasis data saintifik. Kinerja dan kekompakan tim manajerial kami meningkat drastis setelah mengikuti sesinya."</p>
                        <div class="reviewer">
                            <div class="reviewer-info">
                                <h4>Bpk. Hendra Gunawan</h4>
                                <span>Direktur Operasional, <strong>PT Logistik Artha</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Klien Kami Section -->
        <section class="section">
            <div class="shape-divider">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill-alt"></path>
                </svg>
            </div>
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Kemitraan</span>
                    <h2 class="section-title">Klien Kami</h2>
                    <p class="section-subtitle">Kami telah menjalin kerjasama dengan berbagai multi level perusahaan daerah dan nasional.</p>
                </div>
                <div class="marquee-wrapper">
                    <div class="marquee-content">
                        <!-- SET 1 -->
                        <!-- BRI -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/BRI_2020.svg" alt="BANK BRI" class="client-logo-img" style="height: 40px;">
                        
                        <!-- ASSA -->
                        <svg class="client-logo-img" viewBox="0 0 120 50" style="height: 50px;">
                            <path d="M20,25 Q50,15 90,20 Q60,10 20,25" fill="#000" />
                            <path d="M50,15 Q80,5 110,18 Q80,10 50,15" fill="#D4AF37" />
                            <text x="10" y="45" font-family="Arial, sans-serif" font-weight="900" font-size="32" fill="#000" letter-spacing="-2">assa</text>
                        </svg>

                        <!-- BCA -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" alt="BCA" class="client-logo-img" style="height: 45px;">

                        <!-- ARDENDI JAYA SENTOSA -->
                        <svg class="client-logo-img" viewBox="0 0 250 50" style="height: 50px;">
                            <!-- Globe Icon -->
                            <ellipse cx="25" cy="25" rx="15" ry="15" fill="none" stroke="#00529B" stroke-width="1.5"/>
                            <ellipse cx="25" cy="25" rx="5" ry="15" fill="none" stroke="#00529B" stroke-width="1.5"/>
                            <path d="M10,25 L40,25" stroke="#E31837" stroke-width="2"/>
                            <!-- Text -->
                            <text x="50" y="25" font-family="Arial, sans-serif" font-weight="900" font-size="14" fill="#000">ARDENDI JAYA SENTOSA</text>
                            <text x="50" y="40" font-family="Arial, sans-serif" font-style="italic" font-weight="bold" font-size="10" fill="#E31837">A Member of ASTRA Otoparts Group</text>
                        </svg>

                        <!-- BPR BINA SEJAHTERA -->
                        <svg class="client-logo-img" viewBox="0 0 220 60" style="height: 60px;">
                            <!-- Clover Icon -->
                            <circle cx="110" cy="15" r="8" fill="none" stroke="#003399" stroke-width="3"/>
                            <circle cx="102" cy="25" r="8" fill="none" stroke="#003399" stroke-width="3"/>
                            <circle cx="118" cy="25" r="8" fill="none" stroke="#003399" stroke-width="3"/>
                            <circle cx="110" cy="20" r="3" fill="#003399"/>
                            <!-- Text -->
                            <text x="110" y="45" font-family="'Times New Roman', serif" font-weight="bold" font-size="11" fill="#003399" text-anchor="middle">PT BANK PERKREDITAN RAKYAT</text>
                            <text x="110" y="55" font-family="'Times New Roman', serif" font-weight="bold" font-size="11" fill="#003399" text-anchor="middle">BINA SEJAHTERA INSANI</text>
                        </svg>

                        <!-- SET 2 (Duplicate for Infinite Scroll) -->
                        <!-- BRI -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/BRI_2020.svg" alt="BANK BRI" class="client-logo-img" style="height: 40px;">
                        
                        <!-- ASSA -->
                        <svg class="client-logo-img" viewBox="0 0 120 50" style="height: 50px;">
                            <path d="M20,25 Q50,15 90,20 Q60,10 20,25" fill="#000" />
                            <path d="M50,15 Q80,5 110,18 Q80,10 50,15" fill="#D4AF37" />
                            <text x="10" y="45" font-family="Arial, sans-serif" font-weight="900" font-size="32" fill="#000" letter-spacing="-2">assa</text>
                        </svg>

                        <!-- BCA -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" alt="BCA" class="client-logo-img" style="height: 45px;">

                        <!-- ARDENDI JAYA SENTOSA -->
                        <svg class="client-logo-img" viewBox="0 0 250 50" style="height: 50px;">
                            <ellipse cx="25" cy="25" rx="15" ry="15" fill="none" stroke="#00529B" stroke-width="1.5"/>
                            <ellipse cx="25" cy="25" rx="5" ry="15" fill="none" stroke="#00529B" stroke-width="1.5"/>
                            <path d="M10,25 L40,25" stroke="#E31837" stroke-width="2"/>
                            <text x="50" y="25" font-family="Arial, sans-serif" font-weight="900" font-size="14" fill="#000">ARDENDI JAYA SENTOSA</text>
                            <text x="50" y="40" font-family="Arial, sans-serif" font-style="italic" font-weight="bold" font-size="10" fill="#E31837">A Member of ASTRA Otoparts Group</text>
                        </svg>

                        <!-- BPR BINA SEJAHTERA -->
                        <svg class="client-logo-img" viewBox="0 0 220 60" style="height: 60px;">
                            <circle cx="110" cy="15" r="8" fill="none" stroke="#003399" stroke-width="3"/>
                            <circle cx="102" cy="25" r="8" fill="none" stroke="#003399" stroke-width="3"/>
                            <circle cx="118" cy="25" r="8" fill="none" stroke="#003399" stroke-width="3"/>
                            <circle cx="110" cy="20" r="3" fill="#003399"/>
                            <text x="110" y="45" font-family="'Times New Roman', serif" font-weight="bold" font-size="11" fill="#003399" text-anchor="middle">PT BANK PERKREDITAN RAKYAT</text>
                            <text x="110" y="55" font-family="'Times New Roman', serif" font-weight="bold" font-size="11" fill="#003399" text-anchor="middle">BINA SEJAHTERA INSANI</text>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
@endsection
