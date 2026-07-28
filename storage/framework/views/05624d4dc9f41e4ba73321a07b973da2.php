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
            <a href="<?php echo e(route('admin.artikel.index')); ?>" class="p-2 bg-white text-slate-400 hover:text-indigo-600 rounded-xl hover:bg-indigo-50 border border-slate-100 shadow-sm transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h2 class="font-bold text-2xl text-slate-800 tracking-tight">
                    <?php echo e(__('Tulis Artikel')); ?>

                </h2>
                <p class="text-sm text-slate-500 mt-1">Bagikan wawasan dan informasi terbaru kepada publik.</p>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <!-- Trix Editor CSS -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 sm:p-10">
            <form action="<?php echo e(route('admin.artikel.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    
                    <!-- Kolom Utama -->
                    <div class="md:col-span-2 space-y-8">
                        <div>
                            <label for="judul" class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                            <input type="text" name="judul" id="judul" value="<?php echo e(old('judul')); ?>" required class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-lg font-medium p-3 transition-all" placeholder="Masukkan judul yang menarik...">
                            <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Konten Artikel <span class="text-red-500">*</span></label>
                            <div class="prose max-w-none">
                                <input id="konten" type="hidden" name="konten" value="<?php echo e(old('konten')); ?>">
                                <trix-editor input="konten" class="trix-content min-h-[400px] rounded-xl border-slate-200 shadow-sm bg-white"></trix-editor>
                            </div>
                            <?php $__errorArgs = ['konten'];
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
                            <h3 class="text-sm font-bold text-slate-800 mb-4 pb-2 border-b border-slate-200">Pengaturan Publikasi</h3>
                            
                            <div class="space-y-6">
                                <div>
                                    <label for="kategori_id" class="block text-sm font-bold text-slate-700 mb-2">Kategori <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                    <select name="kategori_id" id="kategori_id" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white">
                                        <option value="">Pilih Kategori...</option>
                                        <?php $__currentLoopData = \App\Models\KategoriArtikel::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($kategori->id); ?>" <?php echo e(old('kategori_id') == $kategori->id ? 'selected' : ''); ?>>
                                                <?php echo e($kategori->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['kategori_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div>
                                    <label for="status" class="block text-sm font-bold text-slate-700 mb-2">Status <span class="text-red-500">*</span></label>
                                    <select name="status" id="status" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 shadow-sm text-sm p-3 transition-all bg-white font-medium">
                                        <option value="draft" <?php echo e(old('status') == 'draft' ? 'selected' : ''); ?>>Simpan sebagai Draft</option>
                                        <option value="published" <?php echo e(old('status', 'published') == 'published' ? 'selected' : ''); ?>>Publikasi Langsung</option>
                                    </select>
                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-500 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Sampul</label>
                                    <div onclick="document.getElementById('gambar_utama').click()" class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 border-dashed rounded-xl bg-white hover:bg-slate-50 transition-colors cursor-pointer relative overflow-hidden group">
                                        <input id="gambar_utama" name="gambar_utama" type="file" class="hidden" accept="image/*" onchange="previewImage(this)">
                                        <div id="upload_placeholder" class="space-y-2 text-center">
                                            <svg class="mx-auto h-12 w-12 text-slate-300 group-hover:text-indigo-500 transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-slate-600 justify-center">
                                                <span class="inline-flex items-center px-3 py-1.5 rounded-lg font-bold text-indigo-600 bg-indigo-50 group-hover:bg-indigo-100 transition-colors">
                                                    Upload file
                                                </span>
                                            </div>
                                            <p class="text-xs text-slate-500">PNG, JPG, GIF up to 2MB</p>
                                        </div>
                                        <div id="preview_container" class="hidden w-full text-center">
                                            <img id="image_preview" class="max-h-48 mx-auto rounded-lg shadow-sm object-cover" src="#" alt="Preview Gambar">
                                            <p id="file_name" class="mt-2 text-xs font-semibold text-slate-600 truncate"></p>
                                            <span class="inline-block mt-1 text-xs text-indigo-600 hover:underline">Klik untuk ganti gambar</span>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['gambar_utama'];
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
                    <a href="<?php echo e(route('admin.artikel.index')); ?>" class="px-5 py-2.5 bg-white border border-slate-200 text-slate-700 rounded-xl font-medium hover:bg-slate-50 hover:text-slate-900 transition-all text-sm shadow-sm">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 border border-transparent rounded-xl text-white font-medium hover:bg-indigo-700 transition-all text-sm shadow-sm shadow-indigo-200">
                        Simpan Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Trix Editor JS & Config -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script>
        document.addEventListener("trix-file-accept", function(event) {
            // Prevent file drops on Trix editor for now, unless you handle upload
            event.preventDefault();
        });

        function previewImage(input) {
            const placeholder = document.getElementById('upload_placeholder');
            const previewContainer = document.getElementById('preview_container');
            const imagePreview = document.getElementById('image_preview');
            const fileName = document.getElementById('file_name');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    fileName.textContent = input.files[0].name;
                    placeholder.classList.add('hidden');
                    previewContainer.classList.remove('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
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
<?php /**PATH C:\Users\ADVAN\Documents\psikolog\resources\views/admin/artikel/create.blade.php ENDPATH**/ ?>