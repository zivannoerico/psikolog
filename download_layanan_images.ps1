$outputDir = "d:\psikolog\storage\app\public\layanan"
if (!(Test-Path -Path $outputDir)) {
    New-Item -ItemType Directory -Path $outputDir | Out-Null
}

$images = @{
    "layanan_psikotes.jpg" = "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&q=80"
    "layanan_interview.jpg" = "https://images.unsplash.com/photo-1573497620053-ea5300f94f21?w=800&q=80"
    "layanan_fgd.jpg" = "https://images.unsplash.com/photo-1515169067868-5387ec356754?w=800&q=80"
    "layanan_konseling_kerja.jpg" = "https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=80"
    "layanan_konseling_masalah.jpg" = "https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&q=80"
    "layanan_training_indoor.jpg" = "https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&q=80"
    "layanan_training_outdoor.jpg" = "https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=800&q=80"
}

foreach ($item in $images.GetEnumerator()) {
    $outputPath = Join-Path $outputDir $item.Key
    Write-Host "Downloading $($item.Key)..."
    try {
        Invoke-WebRequest -Uri $item.Value -OutFile $outputPath -UseBasicParsing
        Write-Host "  -> Saved to $outputPath" -ForegroundColor Green
    } catch {
        Write-Host "  -> FAILED: $($_.Exception.Message)" -ForegroundColor Red
    }
}

Write-Host "`nDone! All images downloaded."
