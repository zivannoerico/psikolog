<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';

    protected $fillable = [
        'nama', 'email', 'telepon', 'subjek', 'pesan', 'status', 'ip_address',
    ];

    public function scopeBaru($query)
    {
        return $query->where('status', 'baru');
    }

    public function markAsDibaca(): void
    {
        $this->update(['status' => 'dibaca']);
    }
}
