@extends('layouts.app')

@section('content')
<!-- Hero Section -->
        <section class="blog-hero">
            <div class="container">
                <h1>Jurnal Psikologi & Wawasan</h1>
                <p>Temukan artikel terbaru, tips kesehatan mental, dan wawasan seputar dunia psikologi klinis dan industri dari tim ahli kami.</p>
                
                <div class="category-pills">
                    <div class="pill active">Semua</div>
                    <div class="pill">Kesehatan Mental</div>
                    <div class="pill">Parenting</div>
                    <div class="pill">Dunia Kerja</div>
                    <div class="pill">Edukasi Anak</div>
                </div>
            </div>
        </section>

        <!-- Blog Feed Section -->
        <section class="blog-section">
            <div class="container">
                
                <!-- Featured Article -->
                <article class="featured-article">
                    <div class="featured-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1544027993-37db3b0df438?auto=format&fit=crop&q=80&w=1200" alt="Terapi Psikologi Modern" class="featured-img">
                    </div>
                    <div class="featured-content">
                        <span class="article-category">Kesehatan Mental</span>
                        <h2 class="featured-title">Pentingnya Mendeteksi Kelelahan Mental (Burnout) di Lingkungan Kerja</h2>
                        <p class="article-excerpt">Lingkungan kerja yang dinamis kerap kali membuat kita tidak menyadari batas kemampuan diri. Kenali tanda-tanda awal burnout sebelum hal itu mempengaruhi produktivitas dan kualitas hidup Anda secara keseluruhan.</p>
                        
                        <div class="article-meta">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&q=80&w=100" alt="Author">
                            <div>
                                <div style="font-weight: 600; color: var(--text-main);">Betty Kumala F., Psikolog</div>
                                <div>12 Oktober 2023 &bull; 5 menit baca</div>
                            </div>
                        </div>

                        <a href="#" class="read-more">
                            Baca Artikel Penuh
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                        </a>
                    </div>
                </article>

                <!-- Article Grid -->
                <div class="article-grid">
                    
                    <!-- Card 1 -->
                    <article class="article-card">
                        <div class="article-card-img-wrapper">
                            <span class="article-category" style="position: absolute; top: 20px; left: 20px; background: white; padding: 5px 12px; border-radius: 20px; z-index: 10; font-size: 0.75rem;">Parenting</span>
                            <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&q=80&w=600" alt="Anak dan gadget" class="article-card-img">
                        </div>
                        <div class="article-card-content">
                            <h3 class="article-card-title">Membangun Komunikasi Efektif dengan Anak Remaja</h3>
                            <p class="article-card-excerpt">Fase remaja seringkali penuh gejolak. Pelajari strategi pendekatan psikologis agar anak merasa dipahami dan nyaman berbicara dengan orang tua.</p>
                            
                            <div class="article-meta" style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                                <div>28 September 2023 &bull; 3 menit baca</div>
                            </div>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="article-card">
                        <div class="article-card-img-wrapper">
                            <span class="article-category" style="position: absolute; top: 20px; left: 20px; background: white; padding: 5px 12px; border-radius: 20px; z-index: 10; font-size: 0.75rem;">Edukasi Anak</span>
                            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&q=80&w=600" alt="Belajar anak" class="article-card-img">
                        </div>
                        <div class="article-card-content">
                            <h3 class="article-card-title">Pentingnya Tes Kesiapan Sekolah (School Readiness)</h3>
                            <p class="article-card-excerpt">Apakah anak Anda sudah siap secara kognitif dan emosional untuk masuk SD? Mengetahui kesiapan anak dapat mencegah masalah belajar di masa depan.</p>
                            
                            <div class="article-meta" style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                                <div>15 September 2023 &bull; 4 menit baca</div>
                            </div>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article class="article-card">
                        <div class="article-card-img-wrapper">
                            <span class="article-category" style="position: absolute; top: 20px; left: 20px; background: white; padding: 5px 12px; border-radius: 20px; z-index: 10; font-size: 0.75rem;">Dunia Kerja</span>
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" alt="Tim kerja" class="article-card-img">
                        </div>
                        <div class="article-card-content">
                            <h3 class="article-card-title">Asesmen Psikologi untuk Rekrutmen Karyawan</h3>
                            <p class="article-card-excerpt">Memilih kandidat yang tepat bukan sekadar melihat CV. Bagaimana tes kepribadian membantu memprediksi kinerja kandidat di perusahaan Anda?</p>
                            
                            <div class="article-meta" style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                                <div>05 September 2023 &bull; 6 menit baca</div>
                            </div>
                        </div>
                    </article>

                    <!-- Card 4 -->
                    <article class="article-card">
                        <div class="article-card-img-wrapper">
                            <span class="article-category" style="position: absolute; top: 20px; left: 20px; background: white; padding: 5px 12px; border-radius: 20px; z-index: 10; font-size: 0.75rem;">Kesehatan Mental</span>
                            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&q=80&w=600" alt="Meditasi" class="article-card-img">
                        </div>
                        <div class="article-card-content">
                            <h3 class="article-card-title">Mengelola Stres dan Kecemasan Berlebih (Anxiety)</h3>
                            <p class="article-card-excerpt">Cara-cara praktis dan teknik grounding sederhana yang bisa Anda lakukan saat serangan kecemasan melanda di tengah aktivitas.</p>
                            
                            <div class="article-meta" style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                                <div>20 Agustus 2023 &bull; 4 menit baca</div>
                            </div>
                        </div>
                    </article>

                    <!-- Card 5 -->
                    <article class="article-card">
                        <div class="article-card-img-wrapper">
                            <span class="article-category" style="position: absolute; top: 20px; left: 20px; background: white; padding: 5px 12px; border-radius: 20px; z-index: 10; font-size: 0.75rem;">Parenting</span>
                            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=600" alt="Ibu dan anak" class="article-card-img">
                        </div>
                        <div class="article-card-content">
                            <h3 class="article-card-title">Mengenal Gaya Belajar Anak: Visual, Auditori, atau Kinestetik?</h3>
                            <p class="article-card-excerpt">Setiap anak unik. Dengan memahami gaya belajar dominan mereka, proses belajar di rumah akan terasa jauh lebih menyenangkan dan minim konflik.</p>
                            
                            <div class="article-meta" style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                                <div>12 Agustus 2023 &bull; 5 menit baca</div>
                            </div>
                        </div>
                    </article>

                    <!-- Card 6 -->
                    <article class="article-card">
                        <div class="article-card-img-wrapper">
                            <span class="article-category" style="position: absolute; top: 20px; left: 20px; background: white; padding: 5px 12px; border-radius: 20px; z-index: 10; font-size: 0.75rem;">Dunia Kerja</span>
                            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?auto=format&fit=crop&q=80&w=600" alt="Meeting" class="article-card-img">
                        </div>
                        <div class="article-card-content">
                            <h3 class="article-card-title">Pentingnya Kecerdasan Emosional (EQ) Bagi Pemimpin</h3>
                            <p class="article-card-excerpt">Mengapa pemimpin dengan EQ tinggi cenderung lebih sukses membawa timnya mencapai target dibandingkan yang hanya mengandalkan IQ?</p>
                            
                            <div class="article-meta" style="margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(0,0,0,0.05);">
                                <div>01 Agustus 2023 &bull; 7 menit baca</div>
                            </div>
                        </div>
                    </article>
                    
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <div class="page-item active">1</div>
                    <div class="page-item">2</div>
                    <div class="page-item">3</div>
                    <div class="page-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"></path></svg>
                    </div>
                </div>

            </div>
        </section>
@endsection
