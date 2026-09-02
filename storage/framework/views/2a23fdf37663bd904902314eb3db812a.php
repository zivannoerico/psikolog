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
                    <?php echo e(__('Kelola FAQ')); ?>

                </h2>
                <p class="text-sm text-slate-500 mt-1">Daftar pertanyaan yang sering diajukan beserta jawabannya.</p>
            </div>
            <a href="<?php echo e(route('admin.faq.create')); ?>" class="inline-flex items-center justify-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl transition-all shadow-sm shadow-indigo-200 text-sm gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah FAQ Baru
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
            <form action="<?php echo e(route('admin.faq.index')); ?>" method="GET" class="w-full sm:max-w-md relative">
                <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Cari pertanyaan atau jawaban..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-sm shadow-sm">
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
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Pertanyaan</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Urutan</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap">Status</th>
                        <th class="px-6 sm:px-8 py-4 whitespace-nowrap text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-6 sm:px-8 py-4">
                                <div class="font-bold text-slate-800 line-clamp-2 max-w-lg" title="<?php echo e($faq->pertanyaan); ?>"><?php echo e($faq->pertanyaan); ?></div>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-slate-600 bg-slate-100 px-3 py-1 rounded-lg inline-block border border-slate-200"><?php echo e($faq->urutan); ?></div>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap">
                                <?php if($faq->aktif): ?>
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-lg bg-emerald-50 text-emerald-600 border border-emerald-100 uppercase tracking-wider">
                                        Aktif
                                    </span>
                                <?php else: ?>
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-lg bg-red-50 text-red-600 border border-red-100 uppercase tracking-wider">
                                        Nonaktif
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 sm:px-8 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2">
                                    <a href="<?php echo e(route('admin.faq.edit', $faq)); ?>" class="p-2 bg-white text-indigo-600 rounded-lg hover:bg-indigo-50 border border-slate-200 shadow-sm transition-colors" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>
                                    <form action="<?php echo e(route('admin.faq.destroy', $faq)); ?>" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus FAQ ini?');" class="inline">
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
                            <td colspan="4" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="h-16 w-16 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <h3 class="text-lg font-medium text-slate-800">Belum ada FAQ</h3>
                                    <p class="text-slate-500 text-sm mt-1 mb-4">Mulai tambahkan daftar pertanyaan yang sering diajukan.</p>
                                    <a href="<?php echo e(route('admin.faq.create')); ?>" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-700">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                        Tambah FAQ Pertama
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($faqs->hasPages()): ?>
            <div class="p-6 border-t border-slate-100 bg-slate-50/50">
                <?php echo e($faqs->links()); ?>

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
<?php /**PATH D:\psikolog\resources\views/admin/faq/index.blade.php ENDPATH**/ ?>