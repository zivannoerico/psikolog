<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$artikels = \App\Models\Artikel::all();
$count = 0;
foreach ($artikels as $a) {
    if (strpos($a->konten, '📞 Hubungi Kami') !== false || strpos($a->konten, 'Hubungi Kami:') !== false) {
        // Find the start of the "Hubungi Kami" block. Usually preceded by a paragraph with a lightbulb 💡
        // Let's just find where "<p>💡" or "<p>📞 Hubungi Kami" starts and cut from there.
        
        $pos = strpos($a->konten, '<p>💡');
        if ($pos === false) {
            $pos = strpos($a->konten, '<p>📞 Hubungi Kami');
        }
        
        if ($pos !== false) {
            $a->konten = substr($a->konten, 0, $pos);
            $a->save();
            $count++;
        }
    }
}
echo "Cleaned up $count articles.\n";
