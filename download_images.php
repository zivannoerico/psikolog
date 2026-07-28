<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

$images = [
    'Inner Child' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&w=800&q=80',
    'Burnout' => 'https://images.unsplash.com/photo-1498671546682-94a232c26d18?auto=format&fit=crop&w=800&q=80',
    'Pranikah' => 'https://images.unsplash.com/photo-1518104593124-ac2eeb9a4f75?auto=format&fit=crop&w=800&q=80',
    'Psikolog' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80',
    'Kinestetik' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80',
    'Imposter' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
    'Student Profiling' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80',
    'Digital Detox' => 'https://images.unsplash.com/photo-1511884642898-4c92249e20b6?auto=format&fit=crop&w=800&q=80'
];

$artikels = Artikel::all();
foreach ($artikels as $artikel) {
    $url = 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?auto=format&fit=crop&w=800&q=80'; // fallback
    foreach ($images as $keyword => $imgUrl) {
        if (Str::contains($artikel->judul, $keyword, true)) {
            $url = $imgUrl;
            break;
        }
    }
    
    echo "Downloading image for: {$artikel->judul}\n";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $contents = curl_exec($ch);
    curl_close($ch);
    
    if ($contents) {
        $filename = 'artikel/artikel_' . $artikel->id . '_' . time() . '.jpg';
        Storage::disk('public')->put($filename, $contents);
        $artikel->gambar_utama = $filename;
        $artikel->save();
        echo "Saved as {$filename}\n";
    } else {
        echo "Failed to download for {$artikel->judul}\n";
    }
}
echo 'Selesai!';
