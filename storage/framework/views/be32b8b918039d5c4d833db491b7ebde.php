<!-- Sidebar -->
<div class="flex">
    <!-- Sidebar Backdrop -->
    <div class="fixed inset-0 bg-slate-900/50 z-40 lg:hidden transition-opacity duration-300" 
         x-show="sidebarOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition-opacity ease-linear duration-300" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         @click="sidebarOpen = false" 
         aria-hidden="true" 
         style="display: none;"></div>

    <!-- Sidebar Component -->
    <div id="sidebar" class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-72 lg:sidebar-expanded:!w-72 2xl:!w-72 shrink-0 bg-white border-r border-slate-100 transition-all duration-300 ease-in-out shadow-sm lg:shadow-none"
         :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
         @click.outside="sidebarOpen = false"
         @keydown.escape.window="sidebarOpen = false">

        <!-- Sidebar Header -->
        <div class="flex justify-between items-center pr-3 sm:px-6 py-6 border-b border-slate-100">
            <!-- Logo -->
            <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center gap-3 w-full">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg shadow-indigo-200">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-lg font-bold text-slate-800 leading-tight">An Moerty</span>
                    <span class="text-xs text-slate-500 font-medium">Klinik Psikologi</span>
                </div>
            </a>
            
            <!-- Close button (Mobile) -->
            <button class="lg:hidden text-slate-500 hover:text-slate-700" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Links -->
        <div class="space-y-8 px-4 py-8">
            <ul class="space-y-1">
                <!-- Dashboard -->
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center px-4 py-3 text-slate-600 rounded-xl transition-all duration-200 <?php echo e(request()->routeIs('dashboard') ? 'bg-indigo-50/80 text-indigo-600 font-semibold shadow-sm' : 'hover:bg-slate-50 hover:text-indigo-600'); ?> group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-200 <?php echo e(request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-slate-400 group-hover:text-indigo-500'); ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <span class="flex-1 ml-4 whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                
                <!-- Layanan -->
                <li>
                    <a href="<?php echo e(route('admin.layanan.index')); ?>" class="flex items-center px-4 py-3 text-slate-600 rounded-xl transition-all duration-200 <?php echo e(request()->routeIs('admin.layanan.*') ? 'bg-indigo-50/80 text-indigo-600 font-semibold shadow-sm' : 'hover:bg-slate-50 hover:text-indigo-600'); ?> group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-200 <?php echo e(request()->routeIs('admin.layanan.*') ? 'text-indigo-600' : 'text-slate-400 group-hover:text-indigo-500'); ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <span class="flex-1 ml-4 whitespace-nowrap">Layanan Publik</span>
                    </a>
                </li>
                
                <!-- Artikel -->
                <li>
                    <a href="<?php echo e(route('admin.artikel.index')); ?>" class="flex items-center px-4 py-3 text-slate-600 rounded-xl transition-all duration-200 <?php echo e(request()->routeIs('admin.artikel.*') ? 'bg-indigo-50/80 text-indigo-600 font-semibold shadow-sm' : 'hover:bg-slate-50 hover:text-indigo-600'); ?> group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-200 <?php echo e(request()->routeIs('admin.artikel.*') ? 'text-indigo-600' : 'text-slate-400 group-hover:text-indigo-500'); ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        <span class="flex-1 ml-4 whitespace-nowrap">Artikel & Berita</span>
                    </a>
                </li>
            </ul>

            <div class="border-t border-slate-100 pt-6">
                <div class="px-4 text-xs font-bold tracking-wider text-slate-400 uppercase mb-3">Sistem & Profil</div>
                <ul class="space-y-1">
                    <li>
                        <a href="<?php echo e(route('profile.edit')); ?>" class="flex items-center px-4 py-3 text-slate-600 rounded-xl transition-all duration-200 hover:bg-slate-50 hover:text-indigo-600 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-slate-400 transition duration-200 group-hover:text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="flex-1 ml-4 whitespace-nowrap">Pengaturan Akun</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                            <?php echo csrf_field(); ?>
                            <a href="#" class="flex items-center px-4 py-3 text-red-500 rounded-xl transition-all duration-200 hover:bg-red-50 hover:text-red-600 group" @click.prevent="$root.submit();">
                                <svg class="flex-shrink-0 w-5 h-5 text-red-400 transition duration-200 group-hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                <span class="flex-1 ml-4 whitespace-nowrap">Logout</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
<?php /**PATH D:\psikolog\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>