<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    protected $table = 'psikolog';

    protected $fillable = [
        'nama', 'gelar', 'spesialisasi', 'foto', 'bio',
        'instagram', 'linkedin', 'aktif', 'urutan',
    ];

    protected $casts = ['aktif' => 'boolean'];

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }

    public function getNamaLengkapAttribute(): string
    {
        return $this->gelar ? "{$this->nama}, {$this->gelar}" : $this->nama;
    }

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
