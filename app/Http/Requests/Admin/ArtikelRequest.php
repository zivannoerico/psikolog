<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $artikelId = $this->route('artikel') ? $this->route('artikel')->id : null;

        return [
            'kategori_artikel_id' => 'required|exists:kategori_artikel,id',
            'judul'               => 'required|string|max:255',
            'slug'                => 'nullable|string|max:255|unique:artikel,slug,' . $artikelId,
            'excerpt'             => 'nullable|string',
            'konten'              => 'required|string',
            'gambar_utama'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'alt_gambar'          => 'nullable|string|max:255',
            'penulis'             => 'required|string|max:255',
            'tags'                => 'nullable|string',
            'status'              => 'required|in:draft,published,archived',
            'published_at'        => 'nullable|date',
            'meta_title'          => 'nullable|string|max:255',
            'meta_description'    => 'nullable|string',
        ];
    }
}
