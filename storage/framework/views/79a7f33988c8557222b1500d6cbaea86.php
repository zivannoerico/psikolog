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
                    <?php echo e(__('Kelola Layanan')); ?>

                </h2>
                <p class="text-sm text-slate-500 mt-1">Daftar layanan publik yang dikelompokkan berdasarkan kategori.</p>
            </div>
            <a href="<?php echo e(route('admin.layanan.create')); ?>" class="inline-flex items-center justify-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all shadow-sm shadow-indigo-200 text-sm gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Layanan
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="space-y-8">
        
        <!-- Flash Message -->
        <?php if(session('success')): ?>
            <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 shadow-sm">
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

        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-100">
            <form action="<?php echo e(route('admin.layanan.index')); ?>" method="GET" class="w-full sm:max-w-md relative">
                <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Cari layanan..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-sm shadow-sm bg-slate-50">
                <div class="absolute left-4 top-3.5 text-slate-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </form>
        </div>

        <?php
            $groupedLayanans = collect($layanans->items())->groupBy('kategori_layanan_id');
        ?>

        <?php $__empty_1 = true; $__currentLoopData = $groupedLayanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoriId => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php 
                $kategori = $items->first()->kategori; 
            ?>
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden mb-8">
                <!-- Category Header -->
                <div class="bg-slate-50/80 px-6 sm:px-8 py-4 border-b border-slate-100 flex items-center gap-3">
                    <div class="p-2 bg-white rounded-lg shadow-sm text-indigo-600 border border-slate-200">
                        <?php if($kategori && $kategori->ikon): ?>
                            <i data-lucide="<?php echo e($kategori->ikon); ?>" class="w-5 h-5"></i>
                        <?php else: ?>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <?php endif; ?>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800"><?php echo e($kategori->nama ?? 'Tanpa Kategori'); ?></h3>
                    <span class="bg-indigo-50 text-indigo-600 text-xs font-bold px-2.5 py-1 rounded-full ml-auto"><?php echo e(count($items)); ?> Layanan</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-slate-400 text-xs uppercase tracking-wider font-semibold border-b border-slate-100">
                                <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Nama Layanan</th>
                                <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Status</th>
                                <th class="px-6 sm:px-8 py-4 whitespace-nowrap text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 sm:px-8 py-4">
                                        <div class="flex items-center">
                                            <div class="h-12 w-12 rounded-xl bg-white flex items-center justify-center overflow-hidden flex-shrink-0 mr-4 border border-slate-200 text-indigo-500 shadow-sm">
                                                <?php if($layanan->gambar): ?>
                                                    <img src="<?php echo e(asset('storage/' . $layanan->gambar)); ?>" alt="" class="h-full w-full object-cover">
                                                <?php elseif($layanan->ikon): ?>
                                                    <i data-lucide="<?php echo e($layanan->ikon); ?>" class="w-6 h-6"></i>
                                                <?php else: ?>
                                                    <svg class="h-6 w-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <div class="font-bold text-slate-800"><?php echo e($layanan->nama); ?></div>
                                                <div class="text-xs text-slate-500 mt-0.5 line-clamp-1 max-w-xs"><?php echo strip_tags($layanan->deskripsi_singkat); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 sm:px-8 py-4 whitespace-nowrap">
                                        <?php if($layanan->aktif): ?>
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-100">
                                                Aktif
                                            </span>
                                        <?php else: ?>
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-lg bg-slate-100 text-slate-600 border border-slate-200">
                                                Tidak Aktif
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-6 sm:px-8 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <a href="<?php echo e(route('admin.layanan.edit', $layanan)); ?>" class="p-2.5 bg-white text-indigo-600 rounded-lg hover:bg-indigo-50 border border-slate-200 shadow-sm transition-colors" title="Edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                            </a>
                                            <form action="<?php echo e(route('admin.layanan.destroy', $layanan)); ?>" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus layanan ini?');" class="inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="p-2.5 bg-white text-red-600 rounded-lg hover:bg-red-50 border border-slate-200 shadow-sm transition-colors" title="Hapus">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="bg-white rounded-3xl p-12 shadow-sm border border-slate-100 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4 border border-slate-100">
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h4 class="text-slate-800 font-bold mb-1">Data Kosong</h4>
                    <p class="text-slate-500 text-sm">Tidak ada layanan yang ditemukan.</p>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if($layanans->hasPages()): ?>
            <div class="px-6 py-5">
                <?php echo e($layanans->links()); ?>

            </div>
        <?php endif; ?>
    </div>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
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
<?php /**PATH D:\psikolog\resources\views/admin/layanan/index.blade.php ENDPATH**/ ?>