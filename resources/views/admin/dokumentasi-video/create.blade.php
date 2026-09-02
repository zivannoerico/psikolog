<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.dokumentasi-video.index') }}" class="p-2 bg-white text-slate-400 hover:text-indigo-600 rounded-xl hover:bg-indigo-50 border border-slate-100 shadow-sm transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    {{ __('Tambah Video Dokumentasi') }}
                </h2>
                <p class="text-sm text-slate-500 mt-1">Tambahkan video YouTube dokumentasi kegiatan.</p>
            </div>
        </div>
    </x-slot>

    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-10">
            <form action="{{ route('admin.dokumentasi-video.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <!-- Main Column -->
                    <div class="md:col-span-2 space-y-8">
                        <div>
                            <label for="judul" class="block text-sm font-bold text-slate-700 mb-2">Judul Video <span class="text-red-500">*</span></label>
                            <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Contoh: Kegiatan Psikotes PT Sukses Makmur 2024">
                            @error('judul') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="deskripsi" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Deskripsi singkat tentang video...">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="video_url" class="block text-sm font-bold text-slate-700 mb-2">URL Video YouTube <span class="text-red-500">*</span></label>
                            <input type="url" name="video_url" id="video_url" value="{{ old('video_url') }}" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="https://www.youtube.com/watch?v=...">
                            <p class="text-xs text-slate-400 mt-2">Format yang didukung: youtube.com/watch?v=xxx, youtu.be/xxx, youtube.com/shorts/xxx</p>
                            @error('video_url') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Sidebar Column -->
                    <div class="space-y-8">
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                            <h3 class="text-sm font-bold text-slate-800 mb-4 pb-2 border-b border-slate-200">Pengaturan</h3>

                            <div class="space-y-6">
                                <div>
                                    <label for="thumbnail" class="block text-sm font-bold text-slate-700 mb-2">Thumbnail Kustom <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <input type="file" name="thumbnail" id="thumbnail" accept="image/jpeg,image/png,image/jpg,image/webp" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition-all cursor-pointer">
                                    <p class="text-xs text-slate-400 mt-2">Jika kosong, thumbnail YouTube otomatis digunakan.</p>
                                    @error('thumbnail') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="urutan" class="block text-sm font-bold text-slate-700 mb-2">Urutan Tampil</label>
                                    <input type="number" name="urutan" id="urutan" value="{{ old('urutan', 0) }}" min="0" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all">
                                    @error('urutan') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div class="flex items-center justify-between">
                                    <label for="aktif" class="text-sm font-bold text-slate-700">Status Aktif</label>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="aktif" id="aktif" value="1" {{ old('aktif', true) ? 'checked' : '' }} class="sr-only peer">
                                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-100 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button type="submit" class="flex-1 inline-flex items-center justify-center px-5 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all shadow-sm text-sm">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Simpan
                            </button>
                            <a href="{{ route('admin.dokumentasi-video.index') }}" class="px-5 py-3 bg-white border border-slate-200 text-slate-600 font-semibold rounded-xl hover:bg-slate-50 transition-all text-sm text-center">
                                Batal
                            </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
