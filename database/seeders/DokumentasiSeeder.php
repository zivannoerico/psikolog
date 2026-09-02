<?php

namespace Database\Seeders;

use App\Models\DokumentasiVideo;
use App\Models\Galeri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DokumentasiSeeder extends Seeder
{
    public function run(): void
    {
        // Copy sample images from artikel to galeri storage if available
        $sourceDir = storage_path('app/public/artikel');
        $targetDir = storage_path('app/public/galeri');

        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        $sampleImages = [
            'artikel_01_yayasan.png' => 'Kegiatan Assessment Yayasan Pendidikan',
            'artikel_05_bimtek.png' => 'Bimbingan Teknis & Pelatihan SDM',
            'artikel_06_assessment.png' => 'Pelaksanaan Psikotes & Assessment Profiling',
            'artikel_08_smpn3_parenting.jpg' => 'Seminar Parenting & Edukasi Karakter',
            'artikel_13_komunitas.jpg' => 'Kegiatan Outbound & Team Building Komunitas',
            'artikel_19_konsultasi_psikolog.jpg' => 'Sesi Konseling & Konsultasi Psikologi Karyawan',
        ];

        $i = 1;
        foreach ($sampleImages as $fileName => $judul) {
            $src = $sourceDir . '/' . $fileName;
            $dstName = 'galeri/sample_' . $fileName;
            $dst = storage_path('app/public/' . $dstName);

            if (File::exists($src)) {
                File::copy($src, $dst);
                Galeri::create([
                    'judul' => $judul,
                    'gambar' => $dstName,
                    'alt' => $judul,
                    'urutan' => $i++,
                    'aktif' => true,
                ]);
            }
        }

        // Sample Videos (YouTube links)
        $sampleVideos = [
            [
                'judul' => 'Profil & Layanan An Moerty Psikologi Banyuwangi',
                'deskripsi' => 'Pengenalan bimbingan dan layanan psikologi profesional An Moerty Banyuwangi.',
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'urutan' => 1,
                'aktif' => true,
            ],
            [
                'judul' => 'Tips Menjaga Kesehatan Mental di Tempat Kerja',
                'deskripsi' => 'Edukasi pentingnya pengelolaan stres dan work-life balance.',
                'video_url' => 'https://www.youtube.com/watch?v=L_LUpnjgPso',
                'urutan' => 2,
                'aktif' => true,
            ],
        ];

        foreach ($sampleVideos as $videoData) {
            DokumentasiVideo::create($videoData);
        }
    }
}
