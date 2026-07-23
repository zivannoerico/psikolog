<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        $testimoniData = [
            [
                'nama'       => 'Budi Santoso',
                'jabatan'    => 'HRD Manager',
                'institusi'  => 'PT. Sumber Jaya Banyuwangi',
                'isi'        => 'Layanan psikotes dari An Moerty sangat profesional dan hasilnya sangat membantu proses rekrutmen kami. Laporan yang diberikan sangat detail dan mudah dipahami. Sangat direkomendasikan!',
                'rating'     => 5,
                'aktif'      => true,
                'urutan'     => 1,
            ],
            [
                'nama'       => 'Dewi Rahayu',
                'jabatan'    => 'Kepala Sekolah',
                'institusi'  => 'SMA Negeri 1 Banyuwangi',
                'isi'        => 'Program student profiling yang dilakukan An Moerty sangat membantu kami dalam memahami potensi dan hambatan belajar siswa. Psikolognya sangat komunikatif dan empati.',
                'rating'     => 5,
                'aktif'      => true,
                'urutan'     => 2,
            ],
            [
                'nama'       => 'Ahmad Fauzan',
                'jabatan'    => 'General Manager',
                'institusi'  => 'Hotel Bintang Lima Banyuwangi',
                'isi'        => 'Training indoor yang kami ikuti bersama tim benar-benar luar biasa. Materi yang disampaikan sangat relevan dan cara penyampaiannya engaging. Tim kami jadi lebih solid!',
                'rating'     => 5,
                'aktif'      => true,
                'urutan'     => 3,
            ],
            [
                'nama'       => 'Siti Rahmawati',
                'jabatan'    => 'Ibu Rumah Tangga',
                'institusi'  => 'Banyuwangi',
                'isi'        => 'Saya sangat terbantu dengan layanan konseling di An Moerty. Psikolognya sangat profesional, sabar, dan membuat saya merasa nyaman untuk menceritakan permasalahan saya.',
                'rating'     => 5,
                'aktif'      => true,
                'urutan'     => 4,
            ],
            [
                'nama'       => 'Hendro Wijaya',
                'jabatan'    => 'Direktur',
                'institusi'  => 'CV. Maju Bersama',
                'isi'        => 'Kami sudah berkali-kali menggunakan jasa An Moerty untuk seleksi karyawan. Hasilnya selalu konsisten dan memuaskan. Investasi terbaik untuk SDM perusahaan.',
                'rating'     => 5,
                'aktif'      => true,
                'urutan'     => 5,
            ],
            [
                'nama'       => 'Fitria Handayani',
                'jabatan'    => 'Orang Tua Siswa',
                'institusi'  => 'Banyuwangi',
                'isi'        => 'Identifikasi hambatan belajar anak saya sangat akurat. Setelah mendapat rekomendasi dari psikolog An Moerty, prestasi anak saya meningkat signifikan. Terima kasih!',
                'rating'     => 5,
                'aktif'      => true,
                'urutan'     => 6,
            ],
        ];

        foreach ($testimoniData as $data) {
            Testimoni::create($data);
        }
    }
}
