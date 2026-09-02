<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DokumentasiVideoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'video_url' => ['required', 'url', 'max:500', 'regex:/^https?:\/\/(www\.)?(youtube\.com\/(watch\?v=|embed\/|shorts\/)|youtu\.be\/)/i'],
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'urutan'    => 'nullable|integer|min:0',
            'aktif'     => 'boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'video_url.regex' => 'URL video harus berupa link YouTube yang valid (youtube.com atau youtu.be).',
            'video_url.url'   => 'Format URL video tidak valid.',
        ];
    }
}
