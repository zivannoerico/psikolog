<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <link rel="icon" type="image/png" href="<?php echo e(asset('images/logo.png')); ?>">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <style>
            .font-jakarta { font-family: 'Plus Jakarta Sans', sans-serif; }
            .font-inter { font-family: 'Inter', sans-serif; }
            .bg-brand-light { background-color: #FAF9F7; }
            .text-brand-pink { color: #C8607A; }
            .bg-brand-pink { background-color: #C8607A; }
            .bg-brand-pink-hover { background-color: #B04E68; }
            .border-brand-pink { border-color: #C8607A; }
            .ring-brand-pink { --tw-ring-color: rgba(200, 96, 122, 0.5); }
        </style>
    </head>
    <body class="font-inter text-gray-900 antialiased bg-brand-light min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="sm:mx-auto sm:w-full sm:max-w-md mb-8 flex justify-center">
            <a href="/">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo An Moerty" class="h-16 w-auto object-contain" style="filter: brightness(0) saturate(100%) invert(43%) sepia(35%) saturate(1015%) hue-rotate(297deg) brightness(85%) contrast(89%);">
            </a>
        </div>

        <div class="w-full sm:max-w-md bg-white py-8 px-6 sm:px-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] sm:rounded-2xl border border-gray-100">
            <?php echo e($slot); ?>

        </div>

    </body>
</html>
<?php /**PATH D:\project pkl\psikolog\resources\views/layouts/guest.blade.php ENDPATH**/ ?>