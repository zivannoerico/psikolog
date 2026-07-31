<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // === HERO ===
            ['key' => 'hero_label',    'value' => 'Layanan Psikologi & Konseling Terpercaya', 'type' => 'text',     'label' => 'Hero Label',     'group' => 'hero'],
            ['key' => 'hero_title',    'value' => 'Buka Potensi Terbaik Diri Anda',           'type' => 'text',     'label' => 'Hero Judul',     'group' => 'hero'],
            ['key' => 'hero_subtitle', 'value' => 'Bersama tim Psikolog An Moerty yang berpengalaman lebih dari 10 tahun, kami siap memandu Anda untuk mengenali potensi, mengatasi tantangan, dan mengoptimalkan kualitas diri.', 'type' => 'textarea', 'label' => 'Hero Subtitle', 'group' => 'hero'],
            ['key' => 'hero_gambar',   'value' => '',                                         'type' => 'image',    'label' => 'Hero Gambar',    'group' => 'hero'],

            // === TENTANG ===
            ['key' => 'tentang_judul',   'value' => 'AN MOERTY PSIKOLOGI', 'type' => 'text', 'label' => 'Judul Tentang', 'group' => 'tentang'],
            ['key' => 'tentang_isi',     'value' => 'Biro Psikologi & Konseling An Moerty Banyuwangi merupakan sebuah lembaga Asesmen Center yang memberikan pelayanan pada masyarakat dalam bentuk jasa profesional. Biro Psikologi & Konseling An Moerty Banyuwangi berfokus pada layanan profesional lainnya seperti Student Profiling & study analysis serta identifikasi hambatan belajar untuk Peserta didik sehingga dapat memberikan rekomendasi yang tepat.', 'type' => 'textarea', 'label' => 'Isi Tentang', 'group' => 'tentang'],
            ['key' => 'tentang_gambar',  'value' => '', 'type' => 'image',    'label' => 'Foto Tentang', 'group' => 'tentang'],
            ['key' => 'visi',   'value' => 'Menjadi lembaga psikologi terpercaya yang memberikan kontribusi nyata bagi pengembangan individu dan organisasi di Jawa Timur.', 'type' => 'textarea', 'label' => 'Visi', 'group' => 'tentang'],
            ['key' => 'misi',   'value' => 'Memberikan layanan asesmen psikologis yang profesional dan terstandarisasi.|Mendampingi individu dalam mengenali dan mengoptimalkan potensi diri.|Membantu organisasi dalam pengembangan SDM yang efektif.|Menjaga standar etika dan profesionalisme dalam setiap layanan.', 'type' => 'textarea', 'label' => 'Misi (pisahkan dengan |)', 'group' => 'tentang'],

            // === KONTAK ===
            ['key' => 'kontak_telpon',   'value' => '0822-3339-2179',                                                                          'type' => 'text',     'label' => 'No WhatsApp/Telpon', 'group' => 'kontak'],
            ['key' => 'kontak_alamat_1', 'value' => 'Jl. Progo No. 59 Banyuwangi, Jawa Timur',                                                'type' => 'text',     'label' => 'Alamat 1',          'group' => 'kontak'],
            ['key' => 'kontak_alamat_2', 'value' => 'Jl. Progo No.50, Singonegaran, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68415', 'type' => 'text',     'label' => 'Alamat 2',          'group' => 'kontak'],
            ['key' => 'kontak_email',    'value' => 'anmoertybanyuwangi@gmail.com',                                                            'type' => 'text',     'label' => 'Email',             'group' => 'kontak'],
            ['key' => 'kontak_maps_url', 'value' => 'https://maps.google.com/maps?q=Psikologi%20Banyuwangi%20An%20Moerty&t=m&z=15&output=embed&iwloc=near', 'type' => 'textarea', 'label' => 'Google Maps Embed URL', 'group' => 'kontak'],
            ['key' => 'wa_pesan_default', 'value' => 'Halo An Moerty Psikologi, saya ingin berkonsultasi mengenai layanan psikologi Anda. Bisakah kita berbicara lebih lanjut?', 'type' => 'textarea', 'label' => 'Pesan WA Default', 'group' => 'kontak'],

            // === SOSIAL MEDIA ===
            ['key' => 'sosmed_instagram', 'value' => 'https://www.instagram.com/anmoerty.psikologi', 'type' => 'text', 'label' => 'Instagram URL', 'group' => 'sosmed'],
            ['key' => 'sosmed_youtube',   'value' => '#',                                             'type' => 'text', 'label' => 'YouTube URL',   'group' => 'sosmed'],
            ['key' => 'sosmed_tiktok',    'value' => '#',                                             'type' => 'text', 'label' => 'TikTok URL',    'group' => 'sosmed'],
            ['key' => 'sosmed_facebook',  'value' => '#',                                             'type' => 'text', 'label' => 'Facebook URL',  'group' => 'sosmed'],

            // === SEO GLOBAL ===
            ['key' => 'seo_site_name',   'value' => 'Psikologi Banyuwangi — An Moerty',                                                                                     'type' => 'text',     'label' => 'Nama Website',        'group' => 'seo'],
            ['key' => 'seo_description', 'value' => 'Lembaga asesmen dan layanan konseling profesional di Banyuwangi. Melayani student profiling, study analysis, dan identifikasi hambatan belajar secara eksklusif.', 'type' => 'textarea', 'label' => 'Meta Description Global', 'group' => 'seo'],
            ['key' => 'seo_keywords',    'value' => 'psikologi banyuwangi, konseling banyuwangi, psikotes banyuwangi, an moerty, biro psikologi banyuwangi', 'type' => 'text', 'label' => 'Keywords Global', 'group' => 'seo'],
            ['key' => 'seo_og_image',    'value' => '',                                                                                                                    'type' => 'image',    'label' => 'OG Image Default',   'group' => 'seo'],

            // === FOOTER ===
            ['key' => 'footer_copyright', 'value' => '© 2025 Psikologi Banyuwangi. All Rights Reserved | By Semesta Multitekno', 'type' => 'text', 'label' => 'Teks Copyright Footer', 'group' => 'footer'],
            ['key' => 'footer_tagline',   'value' => 'An Moerty Psikologi Banyuwangi — Biro layanan psikologi yang berdedikasi untuk mendukung kesehatan mental dan pengembangan diri.', 'type' => 'textarea', 'label' => 'Tagline Footer', 'group' => 'footer'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
