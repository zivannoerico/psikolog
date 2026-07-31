<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$artikels = \App\Models\Artikel::all();
foreach ($artikels as $a) {
    if (strpos($a->konten, 'Hubungi Kami') !== false) {
        echo "Artikel ID: {$a->id}\n";
        echo "-------------------\n";
        $pos = strpos($a->konten, 'Hubungi Kami');
        echo substr($a->konten, max(0, $pos - 100), 500);
        echo "\n===================\n";
    }
}
