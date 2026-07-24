<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.layanan.index') }}" class="p-2 bg-white text-slate-400 hover:text-indigo-600 rounded-xl hover:bg-indigo-50 border border-slate-100 shadow-sm transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    {{ __('Tambah Layanan Baru') }}
                </h2>
                <p class="text-sm text-slate-500 mt-1">Lengkapi informasi di bawah ini untuk membuat layanan baru.</p>
            </div>
        </div>
    </x-slot>

    <!-- Trix Editor CSS -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-10">
            <form action="{{ route('admin.layanan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    
                    <!-- Kolom Utama -->
                    <div class="md:col-span-2 space-y-8">
                        <div>
                            <label for="nama" class="block text-sm font-bold text-slate-700 mb-2">Nama Layanan <span class="text-red-500">*</span></label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Contoh: Konseling Individu">
                            @error('nama') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="deskripsi_singkat" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Singkat <span class="text-red-500">*</span></label>
                            <textarea name="deskripsi_singkat" id="deskripsi_singkat" rows="3" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Tuliskan deskripsi singkat mengenai layanan ini...">{{ old('deskripsi_singkat') }}</textarea>
                            @error('deskripsi_singkat') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="deskripsi_lengkap" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Lengkap <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <div class="prose max-w-none">
                                <input id="deskripsi_lengkap" type="hidden" name="deskripsi_lengkap" value="{{ old('deskripsi_lengkap') }}">
                                <trix-editor input="deskripsi_lengkap" class="trix-content min-h-[200px] rounded-xl border-slate-200 shadow-sm bg-white"></trix-editor>
                            </div>
                            @error('deskripsi_lengkap') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="manfaat" class="block text-sm font-bold text-slate-700 mb-2">Manfaat Layanan <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <p class="text-xs text-slate-500 mb-3">Tuliskan setiap poin manfaat di baris baru (tekan Enter untuk poin baru).</p>
                            <textarea name="manfaat" id="manfaat" rows="4" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Manfaat 1&#10;Manfaat 2&#10;Manfaat 3">{{ old('manfaat') }}</textarea>
                            @error('manfaat') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="proses" class="block text-sm font-bold text-slate-700 mb-2">Tahapan / Proses Layanan <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <p class="text-xs text-slate-500 mb-3">Tuliskan setiap tahapan proses di baris baru berurutan.</p>
                            <textarea name="proses" id="proses" rows="4" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Tahap 1: Pendaftaran&#10;Tahap 2: Konsultasi&#10;Tahap 3: Tindak Lanjut">{{ old('proses') }}</textarea>
                            @error('proses') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Kolom Samping -->
                    <div class="space-y-8">
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                            <h3 class="text-sm font-bold text-slate-800 mb-4 pb-2 border-b border-slate-200">Informasi Klasifikasi & Media</h3>
                            
                            <div class="space-y-6">
                                <div>
                                    <label for="kategori_layanan_id" class="block text-sm font-bold text-slate-700 mb-2">Kategori Layanan <span class="text-red-500">*</span></label>
                                    <select name="kategori_layanan_id" id="kategori_layanan_id" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white">
                                        <option value="">Pilih Kategori...</option>
                                        @foreach($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}" {{ old('kategori_layanan_id') == $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('kategori_layanan_id') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="ikon" class="block text-sm font-bold text-slate-700 mb-2">Nama Ikon <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <input type="text" name="ikon" id="ikon" value="{{ old('ikon') }}" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all" placeholder="Contoh: clipboard-check">
                                    <p class="mt-2 text-xs text-slate-500">Nama ikon dari library Lucide Icons (lucide.dev)</p>
                                    @error('ikon') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Sampul Layanan</label>
                                    <input type="file" name="gambar" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition-all border border-slate-200 rounded-xl p-1 bg-white">
                                    <p class="mt-2 text-xs text-slate-500">Gambar ilustrasi layanan, maks 2MB (SVG, PNG, JPG)</p>
                                    @error('gambar') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>
                                
                                <div>
                                    <label for="urutan" class="block text-sm font-bold text-slate-700 mb-2">Nomor Urut Tampil <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <input type="number" name="urutan" id="urutan" value="{{ old('urutan', 0) }}" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white">
                                    @error('urutan') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Status Publikasi</label>
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="aktif" value="1" {{ old('aktif', '1') == '1' ? 'checked' : '' }} class="sr-only peer">
                                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                        <span class="ml-3 text-sm font-medium text-slate-700">Layanan Aktif</span>
                                    </label>
                                    @error('aktif') <p class="mt-2 text-sm text-red-500 font-medium">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-slate-100 flex justify-end gap-3">
                    <a href="{{ route('admin.layanan.index') }}" class="px-5 py-2.5 bg-white border border-slate-200 text-slate-700 rounded-xl font-medium hover:bg-slate-50 hover:text-slate-900 transition-all text-sm shadow-sm">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 border border-transparent rounded-xl text-white font-medium hover:bg-indigo-700 transition-all text-sm shadow-sm shadow-indigo-200">
                        Simpan Layanan
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Trix Editor JS & Config -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script>
        document.addEventListener("trix-file-accept", function(event) {
            // Prevent file drops on Trix editor for now
            event.preventDefault();
        });
    </script>
</x-app-layout>
