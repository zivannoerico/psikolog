<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Psikologi Banyuwangi - Layanan Psikologi & Konseling")</title>
    <meta name="description" content="Lembaga asesmen dan layanan konseling profesional di Banyuwangi. Melayani student profiling, study analysis, dan identifikasi hambatan belajar secara eksklusif.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container navbar">
            <div class="logo">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                    <path d="M12 12 2.32 15.21"></path>
                    <path d="m12 12 6.68 7.21"></path>
                </svg>
                An Moerty
            </div>
            <nav class="nav-links">
                <div class="nav-item">
                    <a href="#beranda">Beranda</a>
                </div>
                <div class="nav-item">
                    <a href="/tentang-kami">Tentang Kami</a>
                </div>
                <div class="nav-item">
                    <a href="#layanan">Layanan Psikolog ▼</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-item">
                            <a href="#">Psychological Assessment ▸</a>
                            <div class="dropdown-submenu">
                                <div class="dropdown-item"><a href="/layanan/psikotes">Psikotes</a></div>
                                <div class="dropdown-item"><a href="/layanan/interview">Interview</a></div>
                                <div class="dropdown-item"><a href="/layanan/fgd">FGD (Focus Group Discussion)</a></div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="#">Counseling ▸</a>
                            <div class="dropdown-submenu">
                                <div class="dropdown-item"><a href="/layanan/konseling-kerja">Konseling Kerja Karyawan</a></div>
                                <div class="dropdown-item"><a href="/layanan/konseling-masalah">Konseling Permasalahan Karyawan</a></div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="#">Training ▸</a>
                            <div class="dropdown-submenu">
                                <div class="dropdown-item"><a href="/layanan/training-indoor">Training Indoor</a></div>
                                <div class="dropdown-item"><a href="/layanan/training-outdoor">Training Outdoor</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="#berita">Berita & Artikel</a>
                </div>
                <div class="nav-item">
                    <a href="/hubungi">Hubungi Kami</a>
                </div>
            </nav>
        </div>
    </header>

    
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="container" style="position:relative; z-index:1;">
            <div class="footer-grid">
                <!-- Column 1: Brand & Socials -->
                <div class="footer-brand">
                    <div class="logo">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                            <path d="M12 12 2.32 15.21"></path>
                            <path d="m12 12 6.68 7.21"></path>
                        </svg>
                        An Moerty
                    </div>
                    <p>An Moerty Psikologi Banyuwangi Biro layanan psikologi yang berdedikasi untuk mendukung kesehatan mental dan pengembangan diri.</p>
                    <div class="social-links">
                        <!-- Instagram -->
                        <a href="#" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <!-- Youtube -->
                        <a href="#" aria-label="Youtube">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.42a2.78 2.78 0 0 0-1.94 2C1 8.17 1 12 1 12s0 3.83.46 5.58a2.78 2.78 0 0 0 1.94 2C5.12 20 12 20 12 20s6.88 0 8.6-.42a2.78 2.78 0 0 0 1.94-2C23 15.83 23 12 23 12s0-3.83-.46-5.58z"></path><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"></polygon></svg>
                        </a>
                        <!-- Tiktok -->
                        <a href="#" aria-label="Tiktok">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Hubungi Kami -->
                <div class="footer-col">
                    <h4>Hubungi Kami</h4>
                    <ul class="footer-links">
                        <li>
                            <!-- WhatsApp Icon -->
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" style="flex-shrink:0;">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.88-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            0822-3339-2179
                        </li>
                        <li>
                            <!-- Envelope Icon for Address 1 -->
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="flex-shrink:0;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <span>Jl. Progo No. 59 Banyuwangi, Jawa Timur</span>
                        </li>
                        <li>
                            <!-- Map Pin Icon for Address 2 -->
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="flex-shrink:0;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Jl. Progo No.50, Singonegaran, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68415</span>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Maps -->
                <div class="footer-col">
                    <h4>Maps</h4>
                    <div class="map-container" style="width: 100%; height: 200px; border-radius: 8px; overflow: hidden; border: 2px solid rgba(255,255,255,0.1);">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.86877953051!2d114.3642738!3d-8.2159187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15ab2f6631b17%3A0xc3c5ab04bb520b2!2sPsikologi%20Banyuwangi%20(An%20Moerty)!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; Psikologi Banyuwangi. All Rights Reserved | By Semesta Multitekno</p>
            </div>
        </div>
    </footer>
</body>
</html>
