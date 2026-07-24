<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LayananRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $layananId = $this->route('layanan') ? $this->route('layanan')->id : null;

        return [
            'kategori_layanan_id' => 'required|exists:kategori_layanan,id',
            'nama'                => 'required|string|max:255',
            'slug'                => 'nullable|string|max:255|unique:layanan,slug,' . $layananId,
            'ikon'                => 'nullable|string|max:255',
            'gambar'              => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'alt_gambar'          => 'nullable|string|max:255',
            'deskripsi_singkat'   => 'required|string',
            'deskripsi_lengkap'   => 'nullable|string',
            'manfaat'             => 'nullable|string', // We'll convert to array in controller
            'proses'              => 'nullable|string', // We'll convert to array in controller
            'aktif'               => 'boolean',
            'urutan'              => 'nullable|integer|min:0',
            'meta_title'          => 'nullable|string|max:255',
            'meta_description'    => 'nullable|string',
        ];
    }
}
