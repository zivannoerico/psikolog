<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Artikel;

$articles = Artikel::with('kategori')->orderBy('id')->get();

foreach ($articles as $a) {
    // Strip HTML tags, get first 500 chars of content
    $plain = strip_tags($a->konten);
    $plain = preg_replace('/\s+/', ' ', $plain);
    $preview = mb_substr($plain, 0, 600);
    
    echo "=== ID {$a->id} ===\n";
    echo "Judul: {$a->judul}\n";
    echo "Kategori: " . ($a->kategori->nama ?? '-') . "\n";
    echo "Penulis: {$a->penulis}\n";
    echo "Excerpt: {$a->excerpt}\n";
    echo "Content preview: {$preview}...\n";
    echo "\n---\n\n";
}
