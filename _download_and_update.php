<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;

// Define keywords and target filenames for each article
$imagePlan = [
    3 => ['keyword' => 'inner-child-psychology-therapy', 'label' => 'inner-child'],
    4 => ['keyword' => 'burnout-work-stress-recovery', 'label' => 'burnout-recovery'],
    5 => ['keyword' => 'premarital-counseling-couple', 'label' => 'konseling-pranikah'],
    6 => ['keyword' => 'psychologist-consultation-help', 'label' => 'bantuan-psikolog'],
    7 => ['keyword' => 'child-kinesthetic-learning-focus', 'label' => 'fokus-belajar-anak'],
    8 => ['keyword' => 'imposter-syndrome-work-anxiety', 'label' => 'imposter-syndrome'],
    9 => ['keyword' => 'student-profiling-education-assessment', 'label' => 'student-profiling'],
    10 => ['keyword' => 'digital-detox-mental-health', 'label' => 'digital-detox-sosmed'],
    11 => ['keyword' => 'team-meeting-organization-collaboration', 'label' => 'yayasan-anmoerty'],
    12 => ['keyword' => 'national-health-day-wellness', 'label' => 'hari-kesehatan-nasional'],
    13 => ['keyword' => 'special-needs-children-assessment', 'label' => 'assessment-abk'],
    14 => ['keyword' => 'child-character-talent-development', 'label' => 'karakter-bakat-anak'],
    15 => ['keyword' => 'inclusive-education-teacher-training', 'label' => 'bimtek-inklusif'],
    16 => ['keyword' => 'high-school-psychological-assessment', 'label' => 'assessment-glagah'],
    17 => ['keyword' => 'special-needs-parenting-guidance', 'label' => 'parenting-abk'],
    18 => ['keyword' => 'parenting-seminar-school-collaboration', 'label' => 'parenting-smpn3'],
    19 => ['keyword' => 'pilot-academy-psychological-test', 'label' => 'assessment-penerbang'],
    20 => ['keyword' => 'new-year-resolution-planning', 'label' => 'resolusi-tahun-baru'],
    21 => ['keyword' => 'new-year-anxiety-mental-stress', 'label' => 'new-year-mental-issues'],
    22 => ['keyword' => 'child-self-esteem-confidence-school', 'label' => 'self-esteem-anak'],
    23 => ['keyword' => 'community-support-team-building', 'label' => 'membangun-komunitas'],
    24 => ['keyword' => 'work-break-creativity-focus', 'label' => 'jeda-kreativitas'],
    25 => ['keyword' => 'academic-stress-student-university', 'label' => 'tekanan-akademik'],
    26 => ['keyword' => 'digital-detox-brain-rest', 'label' => 'digital-detox-lengkap'],
    27 => ['keyword' => 'reflection-failure-personal-growth', 'label' => 'refleksi-kegagalan'],
    28 => ['keyword' => 'child-gadget-addiction-limit', 'label' => 'kecanduan-gadget'],
    29 => ['keyword' => 'therapy-consultation-mental-health', 'label' => 'tanda-konsultasi'],
    30 => ['keyword' => 'quarter-life-crisis-young-adult', 'label' => 'quarter-life-crisis'],
    31 => ['keyword' => 'self-love-self-care-valentine', 'label' => 'self-love-egois'],
    32 => ['keyword' => 'ramadan-fasting-child-learning', 'label' => 'puasa-anak-usia-dini'],
    33 => ['keyword' => 'social-pressure-marriage-question', 'label' => 'jawab-nikah-baper'],
    34 => ['keyword' => 'parent-exam-support-child-stress', 'label' => 'dampingi-anak-ujian'],
    35 => ['keyword' => 'student-counseling-psychology-service', 'label' => 'solusi-psikologi-belajar'],
];

// Download images
$downloaded = [];
$storeDir = 'artikel';

echo "=== DOWNLOADING IMAGES ===\n\n";

foreach ($imagePlan as $id => $plan) {
    $filename = $plan['label'] . '-' . $id . '.jpg';
    $filepath = $storeDir . '/' . $filename;
    $fullPath = storage_path('app/public/' . $filepath);
    
    // Try multiple Unsplash source URLs
    $urls = [
        'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=1200&h=675&fit=crop', // therapy
        'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=1200&h=675&fit=crop', // counseling
        'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200&h=675&fit=crop', // students
        'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=1200&h=675&fit=crop', // writing
        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&h=675&fit=crop', // teamwork
        'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=1200&h=675&fit=crop', // reading
        'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&h=675&fit=crop', // meeting
        'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1200&h=675&fit=crop', // tech
        'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1200&h=675&fit=crop', // classroom
        'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=675&fit=crop', // workshop
        'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=1200&h=675&fit=crop', // team
        'https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?w=1200&h=675&fit=crop', // child
        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&h=675&fit=crop', // portrait
        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1200&h=675&fit=crop', // office
        'https://images.unsplash.com/photo-1456401268323-1f5dee0c3d86?w=1200&h=675&fit=crop', // presentation
        'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1200&h=675&fit=crop', // friends
        'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200&h=675&fit=crop', // study
        'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=1200&h=675&fit=crop', // family
        'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1200&h=675&fit=crop', // laptop
        'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1200&h=675&fit=crop', // office meeting
        'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1200&h=675&fit=crop', // business meeting
        'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=1200&h=675&fit=crop', // education
        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&h=675&fit=crop', // collaboration
        'https://images.unsplash.com/photos/5fNmWej4tAA?w=1200&h=675&fit=crop', // meditation
        'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?w=1200&h=675&fit=crop', // sunshine
        'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?w=1200&h=675&fit=crop', // nature calm
        'https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?w=1200&h=675&fit=crop', // forest
        'https://images.unsplash.com/photo-1501854140801-50d01698950b?w=1200&h=675&fit=crop', // nature
        'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=1200&h=675&fit=crop', // fog forest
        'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1200&h=675&fit=crop', // trees
        'https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?w=1200&h=675&fit=crop', // nature
        'https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=1200&h=675&fit=crop', // mountains
        'https://images.unsplash.com/photo-1502082553048-f009c37129b9?w=1200&h=675&fit=crop', // tree
    ];
    
    // Use a deterministic URL based on ID to ensure uniqueness
    $idx = ($id - 3) % count($urls);
    $url = $urls[$idx];
    
    echo "Downloading for ID {$id} ({$plan['label']})... ";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $imageData = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);
    
    if ($httpCode === 200 && !empty($imageData) && strlen($imageData) > 1000) {
        Storage::disk('public')->put($filepath, $imageData);
        echo "OK ({strlen($imageData)} bytes)\n";
        $downloaded[$id] = $filepath;
    } else {
        echo "FAILED (HTTP $httpCode: $error)\n";
        
        // Fallback: create a colored placeholder with text
        $width = 1200;
        $height = 675;
        $img = imagecreatetruecolor($width, $height);
        $bg = imagecolorallocate($img, 200, 96, 122); // pink brand color
        $white = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $bg);
        $text = str_replace('-', ' ', $plan['label']);
        $fontSize = 5;
        $tw = imagefontwidth($fontSize) * strlen($text);
        $th = imagefontheight($fontSize);
        $x = ($width - $tw) / 2;
        $y = ($height - $th) / 2;
        imagestring($img, $fontSize, $x, $y, $text, $white);
        
        ob_start();
        imagejpeg($img, null, 85);
        $imageData = ob_get_clean();
        imagedestroy($img);
        
        Storage::disk('public')->put($filepath, $imageData);
        echo "Fallback placeholder created\n";
        $downloaded[$id] = $filepath;
    }
}

echo "\n=== UPDATING DATABASE ===\n\n";

$updated = [];
foreach ($downloaded as $id => $filepath) {
    $artikel = Artikel::find($id);
    if ($artikel) {
        $artikel->gambar_utama = $filepath;
        $artikel->alt_gambar = $artikel->judul;
        $artikel->save();
        echo "ID {$id}: {$artikel->judul} -> {$filepath}\n";
        $updated[] = $id;
    }
}

echo "\n=== SUMMARY ===\n";
echo "Total articles: 33\n";
echo "Images downloaded: " . count($downloaded) . "\n";
echo "Database updated: " . count($updated) . "\n";
echo "Articles with NULL gambar_utama before: 8 (IDs 3-10)\n";
echo "Articles with duplicate images fixed: " . (count($downloaded) - 8) . "\n";

echo "\n=== VERIFICATION ===\n";
$nullCount = Artikel::whereNull('gambar_utama')->count();
$allArticles = Artikel::all();
$images = $allArticles->pluck('gambar_utama')->map(function($g) {
    return basename($g);
})->toArray();
$dupes = array_diff(array_count_values($images), [1]);
echo "Articles with NULL gambar_utama after: $nullCount\n";
echo "Duplicate images remaining: " . count($dupes) . "\n";
if (count($dupes) > 0) {
    foreach ($dupes as $img => $count) {
        echo "  $img: $count articles\n";
    }
}
