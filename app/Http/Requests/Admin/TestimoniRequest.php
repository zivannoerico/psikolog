<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimoniRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama'      => 'required|string|max:255',
            'jabatan'   => 'nullable|string|max:255',
            'institusi' => 'nullable|string|max:255',
            'isi'       => 'required|string',
            'rating'    => 'required|integer|min:1|max:5',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'aktif'     => 'boolean',
            'urutan'    => 'nullable|integer|min:0',
        ];
    }
}
