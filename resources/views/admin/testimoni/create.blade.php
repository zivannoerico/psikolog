<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.testimoni.index') }}" class="p-2 bg-white text-slate-400 hover:text-indigo-600 rounded-xl hover:bg-indigo-50 border border-slate-100 shadow-sm transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    {{ __('Tambah Testimoni') }}
                </h2>
                <p class="text-sm text-slate-500 mt-1">Masukkan ulasan baru dari klien Anda.</p>
            </div>
        </div>
    </x-slot>

    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-10">
            <form action="{{ route('admin.testimoni.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    
                    <!-- Kolom Utama -->
                    <div class="md:col-span-2 space-y-8">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="nama" class="block text-sm font-bold text-slate-700 mb-2">Nama Klien <span class="text-red-500">*</span></label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Contoh: Budi Santoso">
                                @error('nama') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="jabatan" class="block text-sm font-bold text-slate-700 mb-2">Jabatan <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Contoh: HR Manager">
                                @error('jabatan') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="institusi" class="block text-sm font-bold text-slate-700 mb-2">Institusi/Perusahaan <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                <input type="text" name="institusi" id="institusi" value="{{ old('institusi') }}" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Contoh: PT Sukses Makmur">
                                @error('institusi') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="isi" class="block text-sm font-bold text-slate-700 mb-2">Isi Testimoni <span class="text-red-500">*</span></label>
                            <textarea name="isi" id="isi" rows="5" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Tuliskan ulasan klien di sini...">{{ old('isi') }}</textarea>
                            @error('isi') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Kolom Samping -->
                    <div class="space-y-8">
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                            <h3 class="text-sm font-bold text-slate-800 mb-4 pb-2 border-b border-slate-200">Penilaian & Media</h3>
                            
                            <div class="space-y-6">
                                
                                <div>
                                    <label for="rating" class="block text-sm font-bold text-slate-700 mb-2">Rating (1-5 Bintang) <span class="text-red-500">*</span></label>
                                    <select name="rating" id="rating" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white font-medium text-amber-500">
                                        <option value="5" {{ old('rating', '5') == '5' ? 'selected' : '' }}>⭐⭐⭐⭐⭐ (5/5)</option>
                                        <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>⭐⭐⭐⭐ (4/5)</option>
                                        <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>⭐⭐⭐ (3/5)</option>
                                        <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>⭐⭐ (2/5)</option>
                                        <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>⭐ (1/5)</option>
                                    </select>
                                    @error('rating') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Foto Klien <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 border-dashed rounded-xl bg-white hover:bg-slate-50 transition-colors">
                                        <div class="space-y-2 text-center">
                                            <svg class="mx-auto h-12 w-12 text-slate-300" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-slate-600 justify-center">
                                                <label for="foto" class="relative cursor-pointer bg-white rounded-md font-bold text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload file</span>
                                                    <input id="foto" name="foto" type="file" class="sr-only" accept="image/*">
                                                </label>
                                            </div>
                                            <p class="text-xs text-slate-500">PNG, JPG up to 2MB</p>
                                        </div>
                                    </div>
                                    @error('foto') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="urutan" class="block text-sm font-bold text-slate-700 mb-2">Urutan Tampil <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <input type="number" name="urutan" id="urutan" value="{{ old('urutan', 0) }}" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white">
                                    @error('urutan') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Tampilkan Testimoni?</label>
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="aktif" value="1" {{ old('aktif', '1') == '1' ? 'checked' : '' }} class="sr-only peer">
                                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                        <span class="ml-3 text-sm font-medium text-slate-700">Ya, tampilkan</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-slate-100 flex justify-end gap-3">
                    <a href="{{ route('admin.testimoni.index') }}" class="px-5 py-2.5 bg-white border border-slate-200 text-slate-700 rounded-xl font-medium hover:bg-slate-50 hover:text-slate-900 transition-all text-sm shadow-sm">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 border border-transparent rounded-xl text-white font-medium hover:bg-indigo-700 transition-all text-sm shadow-sm shadow-indigo-200">
                        Simpan Testimoni
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
