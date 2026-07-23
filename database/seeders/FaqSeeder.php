<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'pertanyaan' => 'Apa itu An Moerty Psikologi Banyuwangi?',
                'jawaban'    => 'An Moerty Psikologi Banyuwangi adalah Biro Psikologi & Konseling yang beroperasi di Banyuwangi, Jawa Timur. Kami merupakan lembaga Asesmen Center yang memberikan pelayanan pada masyarakat dalam bentuk jasa profesional di bidang psikologi, meliputi asesmen psikologis, konseling, dan training.',
                'urutan'     => 1,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Layanan apa saja yang tersedia di An Moerty Psikologi?',
                'jawaban'    => 'Kami menyediakan tiga kategori layanan utama: (1) Psychological Assessment meliputi Psikotes, Interview Psikologis, dan FGD (Focus Group Discussion); (2) Counseling meliputi Konseling Kerja Karyawan dan Konseling Permasalahan Karyawan; (3) Training meliputi Training Indoor dan Training Outdoor.',
                'urutan'     => 2,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Berapa lama pengalaman tim psikolog An Moerty?',
                'jawaban'    => 'Tim psikolog An Moerty Psikologi telah berpengalaman lebih dari 10 tahun dalam bidang psikologi terapan, asesmen, konseling, dan pengembangan sumber daya manusia. Kami berkomitmen memberikan layanan profesional yang terstandarisasi.',
                'urutan'     => 3,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Apakah hasil konseling dan asesmen bersifat rahasia?',
                'jawaban'    => 'Ya, seluruh informasi yang Anda berikan selama proses konseling maupun asesmen dijaga kerahasiaannya dengan standar etika profesi psikologi. Data Anda tidak akan dibagikan kepada pihak mana pun tanpa persetujuan Anda, kecuali dalam kondisi darurat yang mengancam keselamatan jiwa.',
                'urutan'     => 4,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Bagaimana cara mendaftar atau menghubungi An Moerty Psikologi?',
                'jawaban'    => 'Anda dapat menghubungi kami melalui WhatsApp di nomor 0822-3339-2179, atau mengunjungi kantor kami di Jl. Progo No. 59 Banyuwangi, Jawa Timur. Anda juga dapat mengisi formulir kontak yang tersedia di halaman Hubungi Kami di website ini.',
                'urutan'     => 5,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Apakah An Moerty melayani klien dari luar Banyuwangi?',
                'jawaban'    => 'Ya, kami melayani klien dari berbagai daerah. Untuk layanan yang dapat dilakukan secara online (konseling, konsultasi awal), kami siap melayani di mana pun Anda berada. Untuk layanan yang memerlukan kehadiran fisik seperti psikotes atau training, kami dapat mendiskusikan kemungkinan kunjungan ke lokasi Anda.',
                'urutan'     => 6,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Apa itu Student Profiling dan siapa yang membutuhkannya?',
                'jawaban'    => 'Student Profiling adalah layanan asesmen khusus untuk peserta didik yang bertujuan mengidentifikasi bakat, minat, gaya belajar, dan hambatan belajar siswa. Layanan ini sangat bermanfaat bagi orang tua yang ingin memahami potensi anak, sekolah yang ingin memberikan bimbingan optimal, serta siswa yang sedang menentukan jurusan atau karir.',
                'urutan'     => 7,
                'aktif'      => true,
            ],
            [
                'pertanyaan' => 'Berapa biaya layanan psikologi di An Moerty?',
                'jawaban'    => 'Biaya layanan bervariasi tergantung jenis layanan, jumlah peserta, dan kebutuhan spesifik klien. Kami menyediakan konsultasi awal gratis untuk mendiskusikan kebutuhan Anda sebelum memberikan penawaran harga yang transparan. Silakan hubungi kami untuk informasi harga lebih lanjut.',
                'urutan'     => 8,
                'aktif'      => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
