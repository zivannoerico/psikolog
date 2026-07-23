<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';

    protected $fillable = [
        'nama', 'jabatan', 'institusi', 'isi', 'rating', 'foto', 'aktif', 'urutan',
    ];

    protected $casts = [
        'aktif'  => 'boolean',
        'rating' => 'integer',
    ];

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }

    /**
     * Generate initials for avatar fallback
     */
    public function getInitialsAttribute(): string
    {
        $parts = explode(' ', $this->nama);
        $initials = '';
        foreach (array_slice($parts, 0, 2) as $part) {
            $initials .= strtoupper(substr($part, 0, 1));
        }
        return $initials;
    }
}
