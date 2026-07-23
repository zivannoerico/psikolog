<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = [
        'kategori_layanan_id', 'nama', 'slug', 'ikon', 'gambar', 'alt_gambar',
        'deskripsi_singkat', 'deskripsi_lengkap', 'manfaat', 'proses',
        'aktif', 'urutan', 'meta_title', 'meta_description',
    ];

    protected $casts = [
        'manfaat' => 'array',
        'proses'  => 'array',
        'aktif'   => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->nama);
            }
        });
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriLayanan::class, 'kategori_layanan_id');
    }

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
