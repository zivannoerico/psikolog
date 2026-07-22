@extends('layouts.app')

@section('content')
<!-- Contact Hero Section -->
        <section class="section contact-hero" style="background: linear-gradient(135deg, rgba(216, 27, 96, 0.05) 0%, rgba(216, 27, 96, 0.15) 100%); padding: 120px 0 60px 0; text-align: center;">
            <div class="container">
                <span class="section-label" style="margin: 0 auto 15px auto;">Hubungi Kami</span>
                <h1 style="font-family: var(--font-heading); color: var(--primary); font-size: 3.5rem; font-weight: 700; margin-bottom: 20px;">Kami Siap Mendengarkan</h1>
                <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin menjadwalkan sesi konsultasi.</p>
            </div>
        </section>

        <!-- Contact Cards Section -->
        <section class="section contact-section" id="hubungi" style="padding-top: 40px; padding-bottom: 40px; background-color: var(--bg-main);">
            <div class="container">
                <div class="contact-wrapper grid">
                    
                    <!-- Contact Details Card -->
                    <div class="contact-details card" style="display: flex; flex-direction: column; gap: 20px;">
                        <div>
                            <h2 style="font-size: 1.8rem; margin-bottom: 5px; font-family: var(--font-heading); color: var(--primary);">Psikologi Banyuwangi</h2>
                            <p style="color: var(--accent); font-weight: 600; font-size: 1rem;">Betty Kumala F., S.Psi., M.Psi., Psikolog, CH., CHt</p>
                        </div>
                        
                        <div style="display: flex; align-items: flex-start; gap: 15px; margin-top: 10px;">
                            <div style="background: rgba(216, 27, 96, 0.08); padding: 12px; border-radius: 50%; color: var(--primary);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px; color: var(--text-main); font-weight: 600; font-family: var(--font-body);">Alamat Praktik</h4>
                                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0;">Jl. Progo No. 59 Banyuwangi, Jawa Timur</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 15px;">
                            <div style="background: rgba(216, 27, 96, 0.08); padding: 12px; border-radius: 50%; color: var(--primary);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px; color: var(--text-main); font-weight: 600; font-family: var(--font-body);">Nomor Telepon</h4>
                                <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0;"><a href="tel:082233392179" style="color: inherit; text-decoration: none;">0822-3339-2179</a></p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: flex-start; gap: 15px;">
                            <div style="background: rgba(216, 27, 96, 0.08); padding: 12px; border-radius: 50%; color: var(--primary);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px; color: var(--text-main); font-weight: 600; font-family: var(--font-body);">Email</h4>
                                <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0;"><a href="mailto:anmoerty59@yahoo.com" style="color: inherit; text-decoration: none;">anmoerty59@yahoo.com</a></p>
                            </div>
                        </div>

                        <!-- Map inside details card -->
                        <div style="margin-top: 20px; border-radius: 12px; overflow: hidden; border: 1px solid rgba(0,0,0,0.05);">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.123456789!2d114.6175!3d-8.2155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ddf0a1c0e2b5c1d%3A0x123456789abcdef!2sJl.%20Progo%20No.%2059%2C%20Banyuwangi%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1699999999999!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <!-- Contact Form Card -->
                    <div class="contact-form card">
                        <h3 style="font-size: 1.5rem; margin-bottom: 20px; font-family: var(--font-heading); color: var(--primary);">Kirim Pesan Langsung</h3>
                        <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <label style="font-size: 0.9rem; font-weight: 500; color: var(--text-main);">Nama Lengkap</label>
                                <input type="text" name="name" placeholder="Masukkan nama Anda" required style="padding: 12px 15px; border: 1px solid rgba(216, 27, 96,0.15); border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; transition: var(--transition-fast);">
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <label style="font-size: 0.9rem; font-weight: 500; color: var(--text-main);">Email</label>
                                <input type="email" name="email" placeholder="contoh@email.com" required style="padding: 12px 15px; border: 1px solid rgba(216, 27, 96,0.15); border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; transition: var(--transition-fast);">
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <label style="font-size: 0.9rem; font-weight: 500; color: var(--text-main);">Nomor WhatsApp / Telepon</label>
                                <input type="tel" name="phone" placeholder="08xxxxxxxxxx" required style="padding: 12px 15px; border: 1px solid rgba(216, 27, 96,0.15); border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; transition: var(--transition-fast);">
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 5px;">
                                <label style="font-size: 0.9rem; font-weight: 500; color: var(--text-main);">Pesan Anda</label>
                                <textarea name="message" rows="4" placeholder="Tuliskan pertanyaan atau pesan Anda di sini..." required style="padding: 12px 15px; border: 1px solid rgba(216, 27, 96,0.15); border-radius: 8px; font-family: inherit; font-size: 0.95rem; outline: none; resize: vertical; transition: var(--transition-fast);"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 10px; width: 100%; border-radius: 8px; padding: 14px;">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
