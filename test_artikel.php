<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $a = App\Models\Artikel::first();
    if($a) {
        $a->delete();
        echo "Deleted successfully\n";
    } else {
        echo "No artikel found\n";
    }
} catch (\Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "IN: " . $e->getFile() . ":" . $e->getLine() . "\n";
}
