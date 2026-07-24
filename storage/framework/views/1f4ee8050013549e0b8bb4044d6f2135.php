<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    <?php echo e(__('Kelola Artikel')); ?>

                </h2>
                <p class="text-sm text-slate-500 mt-1">Daftar artikel dan berita yang dipublikasikan.</p>
            </div>
            <a href="<?php echo e(route('admin.artikel.create')); ?>" class="inline-flex items-center justify-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all shadow-sm shadow-indigo-200 text-sm gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tulis Artikel Baru
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        
        <!-- Flash Message -->
        <?php if(session('success')): ?>
            <div class="bg-emerald-50 p-4 border-b border-emerald-100">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-emerald-800">
                            <?php echo e(session('success')); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="p-6 sm:p-8 border-b border-slate-100 bg-slate-50/50">
            <form action="<?php echo e(route('admin.artikel.index')); ?>" method="GET" class="w-full sm:max-w-md relative">
                <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Cari judul artikel..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-sm shadow-sm">
                <div class="absolute left-4 top-3.5 text-slate-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider font-semibold border-b border-slate-100">
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Judul Artikel</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Kategori</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Status</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Tanggal</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php $__empty_1 = true; $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-6 sm:px-8 py-4">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-xl bg-slate-100 flex items-center justify-center overflow-hidden flex-shrink-0 mr-4 border border-slate-200 shadow-inner">
                                        <?php if($artikel->gambar_utama): ?>
                                            <img src="<?php echo e(asset('storage/' . $artikel->gambar_utama)); ?>" alt="" class="h-full w-full object-cover">
                                        <?php else: ?>
                                            <svg class="h-6 w-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <div class="font-bold text-slate-800 line-clamp-1 max-w-sm" title="<?php echo e($artikel->judul); ?>"><?php echo e($artikel->judul); ?></div>
                                        <div class="text-xs text-slate-500 mt-0.5">Oleh: <span class="font-medium text-slate-600"><?php echo e($artikel->user->name ?? 'Admin'); ?></span></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg inline-block border border-indigo-100"><?php echo e($artikel->kategori->nama_kategori ?? 'Umum'); ?></div>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap">
                                <?php if($artikel->status == 'published'): ?>
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-100 uppercase tracking-wider">
                                        Publik
                                    </span>
                                <?php else: ?>
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-lg bg-slate-100 text-slate-600 border border-slate-200 uppercase tracking-wider">
                                        <?php echo e($artikel->status); ?>

                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap">
                                <div class="text-sm text-slate-600 font-medium"><?php echo e($artikel->created_at->format('d M Y')); ?></div>
                                <div class="text-xs text-slate-400 mt-0.5"><?php echo e($artikel->created_at->format('H:i')); ?> WIB</div>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="<?php echo e(route('admin.artikel.edit', $artikel)); ?>" class="p-2 bg-white text-indigo-600 rounded-lg hover:bg-indigo-50 border border-slate-200 shadow-sm transition-colors" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>
                                    <form action="<?php echo e(route('admin.artikel.destroy', $artikel)); ?>" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus artikel ini?');" class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="p-2 bg-white text-red-600 rounded-lg hover:bg-red-50 border border-slate-200 shadow-sm transition-colors" title="Hapus">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4">
                                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                    </div>
                                    <h4 class="text-slate-800 font-bold mb-1">Data Kosong</h4>
                                    <p class="text-slate-500 text-sm">Tidak ada artikel yang ditemukan.</p>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <?php if($artikels->hasPages()): ?>
            <div class="px-6 sm:px-8 py-5 border-t border-slate-100 bg-slate-50/50">
                <?php echo e($artikels->links()); ?>

            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\psikolog\resources\views/admin/artikel/index.blade.php ENDPATH**/ ?>