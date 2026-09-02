<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DokumentasiVideo extends Model
{
    use HasFactory;

    protected $table = 'dokumentasi_video';

    protected $fillable = ['judul', 'deskripsi', 'video_url', 'thumbnail', 'urutan', 'aktif'];

    protected $casts = ['aktif' => 'boolean'];

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }

    /**
     * Extract YouTube video ID from various URL formats.
     */
    public function getYoutubeIdAttribute(): ?string
    {
        $url = $this->video_url;
        if (empty($url)) return null;

        $patterns = [
            '/(?:youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})/',
            '/(?:youtu\.be\/)([a-zA-Z0-9_-]{11})/',
            '/(?:youtube\.com\/embed\/)([a-zA-Z0-9_-]{11})/',
            '/(?:youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }

        return null;
    }

    /**
     * Generate safe YouTube embed URL.
     */
    public function getEmbedUrlAttribute(): ?string
    {
        $id = $this->youtube_id;
        if (!$id) return null;

        return 'https://www.youtube-nocookie.com/embed/' . $id . '?rel=0&modestbranding=1';
    }

    /**
     * Get YouTube thumbnail URL (fallback if no local thumbnail).
     */
    public function getThumbnailUrlAttribute(): string
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }

        $id = $this->youtube_id;
        if ($id) {
            return 'https://img.youtube.com/vi/' . $id . '/hqdefault.jpg';
        }

        return '';
    }

    protected static function booted()
    {
        static::deleting(function (DokumentasiVideo $video) {
            if ($video->thumbnail && Storage::disk('public')->exists($video->thumbnail)) {
                Storage::disk('public')->delete($video->thumbnail);
            }
        });
    }
}
