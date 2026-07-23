<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KategoriArtikel extends Model
{
    use HasFactory;

    protected $table = 'kategori_artikel';

    protected $fillable = ['nama', 'slug', 'deskripsi'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->nama);
            }
        });
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'kategori_artikel_id');
    }
}
