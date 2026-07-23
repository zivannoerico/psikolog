<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

try {
    DB::beginTransaction();
    $artikel = Artikel::first();
    if ($artikel) {
        echo "Found Artikel: " . $artikel->id . " - " . $artikel->judul . "\n";
        $artikel->delete();
        echo "Successfully deleted!\n";
    } else {
        echo "No Artikel found.\n";
    }
    DB::rollBack();
} catch (\Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
