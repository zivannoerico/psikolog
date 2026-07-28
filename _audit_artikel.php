<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$articles = App\Models\Artikel::orderBy('id')->get(['id','judul','gambar_utama','alt_gambar','slug','kategori_artikel_id','created_at']);

$noGambar = 0;
$dupCheck = [];

foreach ($articles as $a) {
    $gbr = $a->gambar_utama ?? '(NULL)';
    if (empty($a->gambar_utama)) {
        $noGambar++;
    }
    $gbrShort = strlen($gbr) > 80 ? substr($gbr, 0, 77) . '...' : $gbr;
    printf("[%2d] %-60s | %s\n", $a->id, mb_substr($a->judul, 0, 58), $gbrShort);
    
    if (!empty($a->gambar_utama)) {
        $dupCheck[] = $a->gambar_utama;
    }
}

$dups = array_filter(array_count_values($dupCheck), fn($c) => $c > 1);
echo "\n--- STATISTIK ---\n";
echo "Total artikel: " . $articles->count() . "\n";
echo "Tanpa gambar: " . $noGambar . "\n";
echo "Dengan gambar: " . ($articles->count() - $noGambar) . "\n";
echo "Duplikasi gambar: " . count($dups) . "\n";
if (count($dups) > 0) {
    foreach ($dups as $url => $count) {
        echo "  [$count x] $url\n";
    }
}
