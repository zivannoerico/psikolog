<?php

namespace Database\Seeders;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        // === KATEGORI ===
        $assessment = KategoriLayanan::create([
            'nama'   => 'Psychological Assessment',
            'slug'   => 'psychological-assessment',
            'ikon'   => 'clipboard-check',
            'urutan' => 1,
        ]);

        $counseling = KategoriLayanan::create([
            'nama'   => 'Counseling',
            'slug'   => 'counseling',
            'ikon'   => 'heart-handshake',
            'urutan' => 2,
        ]);

        $training = KategoriLayanan::create([
            'nama'   => 'Training',
            'slug'   => 'training',
            'ikon'   => 'users',
            'urutan' => 3,
        ]);

        // === LAYANAN ===

        // 1. Psikotes
        Layanan::create([
            'kategori_layanan_id' => $assessment->id,
            'nama'             => 'Psikotes',
            'slug'             => 'psikotes',
            'ikon'             => 'clipboard-list',
            'deskripsi_singkat' => 'Layanan tes psikologi terstandarisasi untuk mengukur kemampuan kognitif, kepribadian, dan potensi individu.',
            'deskripsi_lengkap' => '<p>Psikotes (Tes Psikologi) merupakan serangkaian tes yang dirancang untuk mengukur kemampuan kognitif, kepribadian, bakat, minat, dan potensi seseorang secara objektif dan terstandarisasi.</p><p>Layanan Psikotes An Moerty Psikologi Banyuwangi menggunakan instrumen tes yang telah teruji validitas dan reliabilitasnya, dikelola oleh psikolog berpengalaman lebih dari 10 tahun.</p>',
            'manfaat' => [
                'Mengukur kemampuan kognitif dan inteligensi',
                'Mengidentifikasi kepribadian dan karakter',
                'Mengenali bakat dan minat individu',
                'Membantu penempatan jabatan yang tepat',
                'Dasar pengambilan keputusan rekrutmen yang objektif',
            ],
            'proses' => [
                'Pendaftaran dan konsultasi awal',
                'Pelaksanaan tes terstandarisasi',
                'Skoring dan interpretasi hasil',
                'Penulisan laporan psikologis',
                'Feedback dan rekomendasi',
            ],
            'aktif'  => true,
            'urutan' => 1,
            'meta_title'       => 'Psikotes Banyuwangi | An Moerty Psikologi',
            'meta_description'  => 'Layanan psikotes profesional dan terstandarisasi di Banyuwangi. An Moerty Psikologi membantu seleksi karyawan, penerimaan siswa, dan pengembangan individu.',
        ]);

        // 2. Interview
        Layanan::create([
            'kategori_layanan_id' => $assessment->id,
            'nama'             => 'Interview',
            'slug'             => 'interview',
            'ikon'             => 'message-circle',
            'deskripsi_singkat' => 'Layanan wawancara psikologis terstruktur untuk mengungkap kompetensi, motivasi, dan kesesuaian kandidat.',
            'deskripsi_lengkap' => '<p>Layanan Interview Psikologis kami menggunakan teknik wawancara berbasis kompetensi (Competency-Based Interview) yang terstruktur dan sistematis untuk menggali potensi, motivasi, serta kesesuaian kandidat dengan posisi dan budaya organisasi.</p>',
            'manfaat' => [
                'Menggali kompetensi dan pengalaman kandidat',
                'Mengidentifikasi motivasi dan nilai kerja',
                'Menilai kesesuaian budaya organisasi',
                'Mengungkap potensi tersembunyi kandidat',
                'Mengurangi risiko salah rekrut',
            ],
            'proses' => [
                'Briefing dan pemahaman kebutuhan klien',
                'Penyusunan panduan wawancara berbasis kompetensi',
                'Pelaksanaan wawancara oleh psikolog',
                'Interpretasi dan penulisan laporan',
                'Presentasi hasil kepada klien',
            ],
            'aktif'  => true,
            'urutan' => 2,
            'meta_title'       => 'Interview Psikologis Banyuwangi | An Moerty Psikologi',
            'meta_description'  => 'Layanan wawancara psikologis profesional di Banyuwangi. Identifikasi kandidat terbaik dengan teknik interview berbasis kompetensi.',
        ]);

        // 3. FGD
        Layanan::create([
            'kategori_layanan_id' => $assessment->id,
            'nama'             => 'FGD (Focus Group Discussion)',
            'slug'             => 'fgd',
            'ikon'             => 'users-round',
            'deskripsi_singkat' => 'Simulasi diskusi kelompok terstruktur untuk mengamati kemampuan kepemimpinan, kerja sama tim, dan komunikasi kandidat.',
            'deskripsi_lengkap' => '<p>Focus Group Discussion (FGD) adalah metode asesmen kelompok yang mengamati perilaku nyata kandidat dalam situasi kerja tim yang disimulasikan. FGD efektif untuk mengungkap kompetensi kepemimpinan, kemampuan berargumentasi, dan keterampilan interpersonal.</p>',
            'manfaat' => [
                'Mengamati perilaku nyata dalam kelompok',
                'Menilai kemampuan kepemimpinan',
                'Mengukur keterampilan komunikasi dan argumentasi',
                'Menilai kemampuan kerja sama tim',
                'Mengidentifikasi peran alami dalam kelompok',
            ],
            'proses' => [
                'Perancangan skenario FGD',
                'Briefing peserta',
                'Observasi dan pencatatan perilaku',
                'Diskusi dan debriefing',
                'Penulisan laporan observasi',
            ],
            'aktif'  => true,
            'urutan' => 3,
            'meta_title'       => 'FGD Psikologi Banyuwangi | An Moerty Psikologi',
            'meta_description'  => 'Layanan Focus Group Discussion (FGD) profesional di Banyuwangi untuk asesmen kompetensi dan seleksi karyawan.',
        ]);

        // 4. Konseling Kerja Karyawan
        Layanan::create([
            'kategori_layanan_id' => $counseling->id,
            'nama'             => 'Konseling Kerja Karyawan',
            'slug'             => 'konseling-kerja',
            'ikon'             => 'briefcase',
            'deskripsi_singkat' => 'Layanan konseling profesional untuk membantu karyawan mengatasi permasalahan terkait pekerjaan dan meningkatkan produktivitas.',
            'deskripsi_lengkap' => '<p>Konseling Kerja Karyawan adalah layanan dukungan psikologis yang dirancang untuk membantu karyawan menghadapi berbagai tantangan di lingkungan kerja, meningkatkan performa, dan menjaga kesehatan mental di tempat kerja.</p>',
            'manfaat' => [
                'Meningkatkan produktivitas dan performa kerja',
                'Mengatasi stres dan burnout kerja',
                'Memperbaiki hubungan antar rekan kerja',
                'Meningkatkan kepuasan dan loyalitas karyawan',
                'Menurunkan angka absensi akibat masalah psikologis',
            ],
            'proses' => [
                'Asesmen kebutuhan karyawan',
                'Sesi konseling individual',
                'Penetapan target dan rencana tindak lanjut',
                'Monitoring perkembangan',
                'Evaluasi hasil konseling',
            ],
            'aktif'  => true,
            'urutan' => 4,
            'meta_title'       => 'Konseling Kerja Karyawan Banyuwangi | An Moerty Psikologi',
            'meta_description'  => 'Layanan konseling kerja karyawan profesional di Banyuwangi. Tingkatkan produktivitas dan kesehatan mental karyawan perusahaan Anda.',
        ]);

        // 5. Konseling Permasalahan Karyawan
        Layanan::create([
            'kategori_layanan_id' => $counseling->id,
            'nama'             => 'Konseling Permasalahan Karyawan',
            'slug'             => 'konseling-masalah',
            'ikon'             => 'shield-heart',
            'deskripsi_singkat' => 'Layanan konseling untuk membantu karyawan menyelesaikan permasalahan pribadi yang berdampak pada kinerja dan kehidupan kerja.',
            'deskripsi_lengkap' => '<p>Konseling Permasalahan Karyawan memberikan ruang aman bagi karyawan untuk membicarakan dan menyelesaikan berbagai permasalahan personal yang mempengaruhi kinerja mereka di tempat kerja, dengan pendampingan psikolog berpengalaman.</p>',
            'manfaat' => [
                'Mengatasi masalah pribadi yang mempengaruhi kinerja',
                'Meningkatkan kesejahteraan psikologis karyawan',
                'Mencegah eskalasi masalah menjadi konflik serius',
                'Mendukung work-life balance karyawan',
                'Membangun resiliensi mental karyawan',
            ],
            'proses' => [
                'Intake dan asesmen masalah',
                'Sesi konseling individual yang bersifat rahasia',
                'Penyusunan strategi pemecahan masalah',
                'Sesi tindak lanjut',
                'Evaluasi dan terminasi',
            ],
            'aktif'  => true,
            'urutan' => 5,
            'meta_title'       => 'Konseling Permasalahan Karyawan | An Moerty Psikologi',
            'meta_description'  => 'Layanan konseling permasalahan karyawan di Banyuwangi. Dukungan psikologis profesional untuk kesehatan mental dan kesejahteraan karyawan.',
        ]);

        // 6. Training Indoor
        Layanan::create([
            'kategori_layanan_id' => $training->id,
            'nama'             => 'Training Indoor',
            'slug'             => 'training-indoor',
            'ikon'             => 'presentation',
            'deskripsi_singkat' => 'Program pelatihan di dalam ruangan yang berfokus pada pengembangan kompetensi, keterampilan interpersonal, dan kapasitas tim.',
            'deskripsi_lengkap' => '<p>Training Indoor An Moerty Psikologi dirancang dengan pendekatan experiential learning yang menggabungkan teori, praktik, dan refleksi. Program ini efektif untuk meningkatkan kompetensi individu dan memperkuat sinergi tim secara terstruktur.</p>',
            'manfaat' => [
                'Meningkatkan kompetensi dan keterampilan kerja',
                'Memperkuat kohesi dan sinergi tim',
                'Mengembangkan kepemimpinan dan manajerial',
                'Meningkatkan motivasi dan semangat kerja',
                'Membangun budaya organisasi yang positif',
            ],
            'proses' => [
                'Training Need Analysis (TNA)',
                'Perancangan kurikulum dan modul',
                'Pelaksanaan training',
                'Evaluasi pembelajaran',
                'Tindak lanjut pasca training',
            ],
            'aktif'  => true,
            'urutan' => 6,
            'meta_title'       => 'Training Indoor Psikologi Banyuwangi | An Moerty',
            'meta_description'  => 'Program training indoor profesional di Banyuwangi untuk pengembangan SDM, kompetensi karyawan, dan penguatan tim.',
        ]);

        // 7. Training Outdoor
        Layanan::create([
            'kategori_layanan_id' => $training->id,
            'nama'             => 'Training Outdoor',
            'slug'             => 'training-outdoor',
            'ikon'             => 'mountain-snow',
            'deskripsi_singkat' => 'Program pelatihan di luar ruangan yang menggabungkan aktivitas alam dengan pengembangan tim, kepemimpinan, dan karakter.',
            'deskripsi_lengkap' => '<p>Training Outdoor An Moerty Psikologi menggunakan alam terbuka sebagai media pembelajaran yang efektif. Melalui aktivitas yang menantang dan menyenangkan, peserta mengalami pembelajaran langsung tentang kerja tim, kepemimpinan, dan pengembangan karakter.</p>',
            'manfaat' => [
                'Membangun kepercayaan dan solidaritas tim',
                'Mengembangkan karakter dan kepemimpinan',
                'Meningkatkan kemampuan problem-solving',
                'Membangun komunikasi yang efektif',
                'Meningkatkan semangat dan motivasi tim',
            ],
            'proses' => [
                'Asesmen kebutuhan dan tujuan pelatihan',
                'Perancangan aktivitas outdoor',
                'Briefing keselamatan dan persiapan',
                'Pelaksanaan aktivitas dan debrief',
                'Refleksi dan transfer pembelajaran',
            ],
            'aktif'  => true,
            'urutan' => 7,
            'meta_title'       => 'Training Outdoor Banyuwangi | An Moerty Psikologi',
            'meta_description'  => 'Program training outdoor profesional di Banyuwangi. Bangun teamwork dan kepemimpinan melalui aktivitas alam yang menantang dan bermakna.',
        ]);
    }
}
