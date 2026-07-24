<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    {{ __('Kelola Testimoni') }}
                </h2>
                <p class="text-sm text-slate-500 mt-1">Daftar ulasan dan testimoni dari klien yang telah menggunakan layanan Anda.</p>
            </div>
            <a href="{{ route('admin.testimoni.create') }}" class="inline-flex items-center justify-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all shadow-sm shadow-indigo-200 text-sm gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Testimoni
            </a>
        </div>
    </x-slot>

    <div class="space-y-6">
        
        <!-- Flash Message -->
        @if (session('success'))
            <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 shadow-sm">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-emerald-800">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Search Bar -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
            <form action="{{ route('admin.testimoni.index') }}" method="GET" class="w-full sm:max-w-md relative">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama klien atau institusi..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-sm shadow-sm bg-slate-50">
                <div class="absolute left-4 top-3.5 text-slate-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </form>
        </div>

        <!-- Grid Testimoni -->
        @if($testimonis->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonis as $testi)
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-6 flex flex-col relative group overflow-hidden">
                
                <!-- Status Badge -->
                <div class="absolute top-6 right-6">
                    @if($testi->aktif)
                        <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-100">
                            Aktif
                        </span>
                    @else
                        <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-lg bg-slate-100 text-slate-600 border border-slate-200">
                            Draft
                        </span>
                    @endif
                </div>

                <div class="flex items-center gap-4 mb-4">
                    <div class="h-14 w-14 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center overflow-hidden flex-shrink-0 shadow-sm">
                        @if($testi->foto)
                            <img src="{{ asset('storage/' . $testi->foto) }}" alt="{{ $testi->nama }}" class="h-full w-full object-cover">
                        @else
                            <span class="font-bold text-indigo-400 text-lg">{{ $testi->initials }}</span>
                        @endif
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-800 text-lg leading-tight">{{ $testi->nama }}</h3>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">
                            {{ $testi->jabatan }} {{ $testi->institusi ? 'di ' . $testi->institusi : '' }}
                        </p>
                    </div>
                </div>

                <!-- Rating Stars -->
                <div class="flex text-amber-400 mb-4 gap-0.5">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $testi->rating)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @else
                            <svg class="w-4 h-4 text-slate-200 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endif
                    @endfor
                </div>

                <div class="flex-1 text-sm text-slate-600 mb-6 italic line-clamp-4 relative">
                    <span class="absolute -top-2 -left-2 text-4xl text-slate-200 font-serif leading-none">"</span>
                    <span class="relative z-10">{!! nl2br(e($testi->isi)) !!}</span>
                    <span class="absolute -bottom-4 -right-1 text-4xl text-slate-200 font-serif leading-none rotate-180">"</span>
                </div>

                <div class="mt-auto pt-4 border-t border-slate-100 flex justify-end gap-2">
                    <a href="{{ route('admin.testimoni.edit', $testi) }}" class="p-2 bg-white text-indigo-600 rounded-lg hover:bg-indigo-50 border border-slate-200 shadow-sm transition-colors" title="Edit">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </a>
                    <form action="{{ route('admin.testimoni.destroy', $testi) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus testimoni ini?');" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 bg-white text-red-600 rounded-lg hover:bg-red-50 border border-slate-200 shadow-sm transition-colors" title="Hapus">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($testimonis->hasPages())
            <div class="px-6 py-5">
                {{ $testimonis->links() }}
            </div>
        @endif

        @else
        <!-- Empty State -->
        <div class="bg-white rounded-3xl p-12 shadow-sm border border-slate-100 text-center">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4 border border-slate-100">
                    <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <h4 class="text-slate-800 font-bold mb-1">Belum Ada Testimoni</h4>
                <p class="text-slate-500 text-sm mb-6">Tambahkan ulasan klien pertama Anda agar ditampilkan di website.</p>
                <a href="{{ route('admin.testimoni.create') }}" class="inline-flex items-center justify-center px-5 py-2 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 font-semibold rounded-xl transition-all text-sm gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Buat Testimoni Baru
                </a>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>
