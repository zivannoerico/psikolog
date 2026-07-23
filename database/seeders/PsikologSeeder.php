<?php

namespace Database\Seeders;

use App\Models\Psikolog;
use Illuminate\Database\Seeder;

class PsikologSeeder extends Seeder
{
    public function run(): void
    {
        $psikologData = [
            [
                'nama'          => 'Betty Noer Aini',
                'gelar'         => 'M.Psi., Psikolog',
                'spesialisasi'  => 'Psikologi Klinis & Konseling',
                'bio'           => 'Psikolog berpengalaman lebih dari 10 tahun dalam bidang konseling individu, asesmen psikologis, dan pengembangan sumber daya manusia. Founder dan Direktur An Moerty Psikologi Banyuwangi.',
                'aktif'         => true,
                'urutan'        => 1,
            ],
            [
                'nama'          => 'Tim Psikolog An Moerty',
                'gelar'         => 'S.Psi., M.Psi.',
                'spesialisasi'  => 'Psikologi Industri & Organisasi',
                'bio'           => 'Tim psikolog profesional An Moerty yang berpengalaman dalam bidang asesmen rekrutmen, pengembangan SDM, dan pelatihan organisasi.',
                'aktif'         => true,
                'urutan'        => 2,
            ],
        ];

        foreach ($psikologData as $data) {
            Psikolog::create($data);
        }
    }
}
