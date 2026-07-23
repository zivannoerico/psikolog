<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'kategori_artikel_id', 'judul', 'slug', 'excerpt', 'konten',
        'gambar_utama', 'alt_gambar', 'penulis', 'tags',
        'status', 'published_at', 'meta_title', 'meta_description', 'views',
    ];

    protected $casts = [
        'tags'         => 'array',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->judul);
            }
            if (empty($model->excerpt) && $model->konten) {
                $model->excerpt = Str::limit(strip_tags($model->konten), 180);
            }
        });
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriArtikel::class, 'kategori_artikel_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->where('published_at', '<=', now())
                     ->orderBy('published_at', 'desc');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function incrementViews()
    {
        $this->increment('views');
    }

    public function getReadingTimeAttribute(): int
    {
        $words = str_word_count(strip_tags($this->konten ?? ''));
        return (int) ceil($words / 200);
    }
}
