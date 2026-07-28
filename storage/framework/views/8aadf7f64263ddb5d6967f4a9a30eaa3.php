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
        <div class="flex items-center gap-4">
            <a href="<?php echo e(route('admin.layanan.index')); ?>" class="p-2 bg-white text-slate-400 hover:text-indigo-600 rounded-xl hover:bg-indigo-50 border border-slate-100 shadow-sm transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    <?php echo e(__('Edit Layanan')); ?>

                </h2>
                <p class="text-sm text-slate-500 mt-1">Lakukan perubahan informasi untuk layanan ini.</p>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <!-- Trix Editor CSS -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-10">
            <form action="<?php echo e(route('admin.layanan.update', $layanan)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    
                    <!-- Kolom Utama -->
                    <div class="md:col-span-2 space-y-8">
                        <div>
                            <label for="nama" class="block text-sm font-bold text-slate-700 mb-2">Nama Layanan <span class="text-red-500">*</span></label>
                            <input type="text" name="nama" id="nama" value="<?php echo e(old('nama', $layanan->nama)); ?>" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all">
                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="deskripsi_singkat" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Singkat <span class="text-red-500">*</span></label>
                            <textarea name="deskripsi_singkat" id="deskripsi_singkat" rows="3" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all"><?php echo e(old('deskripsi_singkat', $layanan->deskripsi_singkat)); ?></textarea>
                            <?php $__errorArgs = ['deskripsi_singkat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="deskripsi_lengkap" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Lengkap <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <div class="prose max-w-none">
                                <input id="deskripsi_lengkap" type="hidden" name="deskripsi_lengkap" value="<?php echo e(old('deskripsi_lengkap', $layanan->deskripsi_lengkap)); ?>">
                                <trix-editor input="deskripsi_lengkap" class="trix-content min-h-[200px] rounded-xl border-slate-200 shadow-sm bg-white"></trix-editor>
                            </div>
                            <?php $__errorArgs = ['deskripsi_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="manfaat" class="block text-sm font-bold text-slate-700 mb-2">Manfaat Layanan <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <p class="text-xs text-slate-500 mb-3">Tuliskan setiap poin manfaat di baris baru (tekan Enter untuk poin baru).</p>
                            <?php
                                $manfaatText = is_array($layanan->manfaat) ? implode("\n", $layanan->manfaat) : $layanan->manfaat;
                            ?>
                            <textarea name="manfaat" id="manfaat" rows="4" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all"><?php echo e(old('manfaat', $manfaatText)); ?></textarea>
                            <?php $__errorArgs = ['manfaat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="proses" class="block text-sm font-bold text-slate-700 mb-2">Tahapan / Proses Layanan <span class="text-slate-400 font-normal">(Opsional)</span></label>
                            <p class="text-xs text-slate-500 mb-3">Tuliskan setiap tahapan proses di baris baru berurutan.</p>
                            <?php
                                $prosesText = is_array($layanan->proses) ? implode("\n", $layanan->proses) : $layanan->proses;
                            ?>
                            <textarea name="proses" id="proses" rows="4" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all"><?php echo e(old('proses', $prosesText)); ?></textarea>
                            <?php $__errorArgs = ['proses'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($kategori->id); ?>" <?php echo e(old('kategori_layanan_id', $layanan->kategori_layanan_id) == $kategori->id ? 'selected' : ''); ?>>
                                                <?php echo e($kategori->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['kategori_layanan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div>
                                    <label for="ikon" class="block text-sm font-bold text-slate-700 mb-2">Nama Ikon <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <input type="text" name="ikon" id="ikon" value="<?php echo e(old('ikon', $layanan->ikon)); ?>" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all">
                                    <p class="mt-2 text-xs text-slate-500">Nama ikon dari library Lucide Icons (lucide.dev)</p>
                                    <?php $__errorArgs = ['ikon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Sampul Layanan</label>
                                    
                                    <?php if($layanan->gambar): ?>
                                    <div class="mb-4">
                                        <p class="text-xs text-slate-500 mb-2">Gambar saat ini:</p>
                                        <div class="h-32 w-full rounded-xl border border-slate-200 p-1 bg-white flex items-center justify-center overflow-hidden">
                                            <img src="<?php echo e(asset('storage/' . $layanan->gambar)); ?>" alt="Gambar Layanan" class="h-full w-full object-cover rounded-lg">
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <input type="file" name="gambar" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition-all border border-slate-200 rounded-xl p-1 bg-white">
                                    <p class="mt-2 text-xs text-slate-500">Abaikan jika tidak ingin mengubah gambar.</p>
                                    <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <div>
                                    <label for="urutan" class="block text-sm font-bold text-slate-700 mb-2">Nomor Urut Tampil <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <input type="number" name="urutan" id="urutan" value="<?php echo e(old('urutan', $layanan->urutan)); ?>" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white">
                                    <?php $__errorArgs = ['urutan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Status Publikasi</label>
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="aktif" value="1" <?php echo e(old('aktif', $layanan->aktif) ? 'checked' : ''); ?> class="sr-only peer">
                                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                        <span class="ml-3 text-sm font-medium text-slate-700">Layanan Aktif</span>
                                    </label>
                                    <?php $__errorArgs = ['aktif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-slate-100 flex justify-end gap-3">
                    <a href="<?php echo e(route('admin.layanan.index')); ?>" class="px-5 py-2.5 bg-white border border-slate-200 text-slate-700 rounded-xl font-medium hover:bg-slate-50 hover:text-slate-900 transition-all text-sm shadow-sm">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 border border-transparent rounded-xl text-white font-medium hover:bg-indigo-700 transition-all text-sm shadow-sm shadow-indigo-200">
                        Simpan Perubahan
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
<?php /**PATH D:\psikolog\resources\views/admin/layanan/edit.blade.php ENDPATH**/ ?>