<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isEdit = $this->route('galeri') !== null;

        return [
            'judul'  => 'required|string|max:255',
            'gambar' => ($isEdit ? 'nullable' : 'required') . '|image|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'    => 'nullable|string|max:255',
            'urutan' => 'nullable|integer|min:0',
            'aktif'  => 'boolean',
        ];
    }
}
