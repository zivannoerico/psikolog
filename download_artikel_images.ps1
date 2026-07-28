# Download unique images for each article from Unsplash
$outputDir = "d:\psikolog\storage\app\public\artikel"

$images = @{
    "artikel_08_smpn3_parenting.jpg" = "https://images.unsplash.com/photo-1577896851231-70ef18881754?w=800&q=80"
    "artikel_09_penerbang.jpg" = "https://images.unsplash.com/photo-1436491865332-7a61a109db05?w=800&q=80"
    "artikel_10_resolusi.jpg" = "https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=800&q=80"
    "artikel_11_mental_issues.jpg" = "https://images.unsplash.com/photo-1474631245212-32dc3c8310c6?w=800&q=80"
    "artikel_12_self_esteem.jpg" = "https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=800&q=80"
    "artikel_13_komunitas.jpg" = "https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&q=80"
    "artikel_14_jeda_kreativitas.jpg" = "https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&q=80"
    "artikel_15_stres_akademik.jpg" = "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&q=80"
    "artikel_16_digital_detox.jpg" = "https://images.unsplash.com/photo-1563986768609-322da13575f2?w=800&q=80"
    "artikel_17_refleksi.jpg" = "https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=800&q=80"
    "artikel_18_gadget_anak.jpg" = "https://images.unsplash.com/photo-1596464716127-f2a82984de30?w=800&q=80"
    "artikel_19_konsultasi_psikolog.jpg" = "https://images.unsplash.com/photo-1573497620053-ea5300f94f21?w=800&q=80"
    "artikel_20_quarter_life.jpg" = "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80"
    "artikel_21_self_love.jpg" = "https://images.unsplash.com/photo-1518199266791-5375a83190b7?w=800&q=80"
    "artikel_22_puasa_anak.jpg" = "https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=800&q=80"
    "artikel_23_nikah.jpg" = "https://images.unsplash.com/photo-1543807535-eceef0bc6599?w=800&q=80"
    "artikel_24_ujian_anak.jpg" = "https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&q=80"
    "artikel_25_anmoerty.jpg" = "https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=80"
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
