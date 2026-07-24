<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="space-y-8">
        
        <!-- Welcome Banner -->
        <div class="relative bg-gradient-to-br from-indigo-500 to-purple-600 rounded-3xl p-8 sm:p-10 overflow-hidden shadow-lg shadow-indigo-200">
            <div class="relative z-10 flex flex-col sm:flex-row sm:items-center justify-between">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">Selamat Datang, {{ Auth::user()->name }}!</h1>
                    <p class="text-indigo-100 text-sm sm:text-base max-w-lg">Ini adalah panel kendali pusat untuk website An Moerty Psikologi. Pantau artikel terbaru dan layanan klinik Anda dari sini.</p>
                </div>
                <div class="mt-6 sm:mt-0 flex gap-3">
                    <a href="{{ route('admin.artikel.create') }}" class="inline-flex items-center justify-center px-5 py-2.5 bg-white text-indigo-600 font-semibold rounded-xl shadow-sm hover:bg-slate-50 transition-all text-sm">
                        + Tulis Artikel
                    </a>
                </div>
            </div>
            
            <!-- Decorative circle -->
            <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
        </div>

        <!-- Statistik Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Card Artikel -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 flex flex-col justify-between border border-slate-100 hover:shadow-xl hover:shadow-slate-200/50 transition-all group">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 rounded-2xl bg-indigo-50 text-indigo-600 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <a href="{{ route('admin.artikel.index') }}" class="text-sm font-medium text-slate-400 hover:text-indigo-600">Lihat detail</a>
                </div>
                <div>
                    <h3 class="text-slate-500 font-medium mb-1">Total Artikel</h3>
                    <div class="flex items-end gap-3">
                        <span class="text-4xl font-bold text-slate-800">{{ $stats['total_artikel'] ?? 0 }}</span>
                        <span class="text-sm font-medium text-emerald-500 mb-1 bg-emerald-50 px-2 py-0.5 rounded-md">{{ $stats['artikel_published'] ?? 0 }} Publikasi</span>
                    </div>
                </div>
            </div>

            <!-- Card Layanan -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 flex flex-col justify-between border border-slate-100 hover:shadow-xl hover:shadow-slate-200/50 transition-all group">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 rounded-2xl bg-purple-50 text-purple-600 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <a href="{{ route('admin.layanan.index') }}" class="text-sm font-medium text-slate-400 hover:text-purple-600">Lihat detail</a>
                </div>
                <div>
                    <h3 class="text-slate-500 font-medium mb-1">Layanan Tersedia</h3>
                    <div class="flex items-end gap-3">
                        <span class="text-4xl font-bold text-slate-800">{{ $stats['total_layanan'] ?? 0 }}</span>
                        <span class="text-sm font-medium text-emerald-500 mb-1 bg-emerald-50 px-2 py-0.5 rounded-md">{{ $stats['layanan_aktif'] ?? 0 }} Aktif</span>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Artikel Terbaru -->
            <div class="lg:col-span-2 bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm">
                <div class="px-8 py-6 border-b border-slate-100 flex justify-between items-center">
                    <h3 class="font-bold text-slate-800 text-lg">Publikasi Terakhir</h3>
                </div>
                <div class="divide-y divide-slate-50">
                    @forelse($artikelTerbaru ?? [] as $artikel)
                        <div class="px-8 py-5 hover:bg-slate-50/50 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="flex items-center space-x-4">
                                <div class="h-12 w-12 rounded-xl bg-slate-100 flex items-center justify-center overflow-hidden flex-shrink-0 shadow-inner">
                                    @if($artikel->gambar_utama)
                                        <img src="{{ asset('storage/'.$artikel->gambar_utama) }}" class="h-full w-full object-cover">
                                    @else
                                        <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 line-clamp-1">{{ $artikel->judul }}</h4>
                                    <p class="text-xs text-slate-500 mt-1 font-medium">{{ $artikel->created_at->format('d M Y') }} &bull; {{ $artikel->kategori->nama_kategori ?? 'Umum' }}</p>
                                </div>
                            </div>
                            <div>
                                @if($artikel->status == 'published')
                                    <span class="px-3 py-1 text-xs font-bold rounded-lg bg-emerald-50 text-emerald-600 uppercase tracking-wider">Publik</span>
                                @else
                                    <span class="px-3 py-1 text-xs font-bold rounded-lg bg-slate-100 text-slate-600 uppercase tracking-wider">{{ $artikel->status }}</span>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="p-10 text-center flex flex-col items-center">
                            <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                            </div>
                            <h4 class="text-slate-800 font-bold mb-1">Belum ada artikel</h4>
                            <p class="text-slate-500 text-sm">Mulai menulis artikel pertama Anda.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm h-max">
                <div class="px-8 py-6 border-b border-slate-100">
                    <h3 class="font-bold text-slate-800 text-lg">Navigasi Cepat</h3>
                </div>
                <div class="p-6 space-y-4">
                    <a href="{{ route('admin.layanan.create') }}" class="w-full flex items-center p-4 rounded-2xl bg-slate-50 hover:bg-purple-50 transition-colors group">
                        <div class="p-3 bg-white shadow-sm rounded-xl text-slate-400 group-hover:text-purple-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-bold text-slate-700 group-hover:text-purple-700">Tambah Layanan</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Buat paket layanan baru</p>
                        </div>
                    </a>

                    <a href="/" target="_blank" class="w-full flex items-center p-4 rounded-2xl bg-slate-50 hover:bg-indigo-50 transition-colors group">
                        <div class="p-3 bg-white shadow-sm rounded-xl text-slate-400 group-hover:text-indigo-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-bold text-slate-700 group-hover:text-indigo-700">Lihat Website</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Kunjungi halaman depan</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
