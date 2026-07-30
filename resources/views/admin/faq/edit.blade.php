<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.faq.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    {{ __('Edit FAQ') }}
                </h2>
                <p class="text-sm text-slate-500 mt-1">Ubah data pertanyaan dan jawaban.</p>
            </div>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <form action="{{ route('admin.faq.update', $faq) }}" method="POST" class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
            @csrf
            @method('PUT')

            <div class="p-6 sm:p-8 space-y-6">
                <!-- Pertanyaan -->
                <div>
                    <label for="pertanyaan" class="block text-sm font-semibold text-slate-700 mb-2">Pertanyaan <span class="text-red-500">*</span></label>
                    <input type="text" name="pertanyaan" id="pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan) }}" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" placeholder="Masukkan pertanyaan...">
                    @error('pertanyaan')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Jawaban -->
                <div>
                    <label for="jawaban" class="block text-sm font-semibold text-slate-700 mb-2">Jawaban <span class="text-red-500">*</span></label>
                    <textarea name="jawaban" id="jawaban" rows="5" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" placeholder="Masukkan jawaban...">{{ old('jawaban', $faq->jawaban) }}</textarea>
                    @error('jawaban')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Urutan & Aktif -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="urutan" class="block text-sm font-semibold text-slate-700 mb-2">Urutan Tampil</label>
                        <input type="number" name="urutan" id="urutan" value="{{ old('urutan', $faq->urutan) }}" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" placeholder="Contoh: 1">
                        <p class="mt-1 text-xs text-slate-500">Angka lebih kecil akan tampil lebih dulu.</p>
                        @error('urutan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div x-data="{ aktif: {{ old('aktif', $faq->aktif) ? 'true' : 'false' }} }">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Status Publikasi</label>
                        <label class="inline-flex items-center cursor-pointer mt-2">
                            <input type="checkbox" name="aktif" value="1" x-model="aktif" class="sr-only peer">
                            <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                            <span class="ml-3 text-sm font-medium text-slate-700" x-text="aktif ? 'Ya, tampilkan' : 'Tidak, sembunyikan'"></span>
                        </label>
                        @error('aktif')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Footer / Submit -->
            <div class="px-6 sm:px-8 py-5 bg-slate-50/50 border-t border-slate-100 flex justify-end gap-3">
                <a href="{{ route('admin.faq.index') }}" class="px-5 py-2.5 text-slate-600 font-medium rounded-xl hover:bg-slate-100 transition-colors">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow-sm shadow-indigo-200 transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
