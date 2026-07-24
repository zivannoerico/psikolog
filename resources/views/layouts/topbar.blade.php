<!-- Topbar -->
<header class="sticky top-0 bg-white/70 backdrop-blur-md z-30 lg:hidden border-b border-slate-100">
    <div class="px-4 sm:px-6">
        <div class="flex items-center justify-between h-16">

            <!-- Header: Left side -->
            <div class="flex">
                <!-- Hamburger button -->
                <button class="text-slate-500 hover:text-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 rounded-md p-1" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2" rx="1" />
                        <rect x="4" y="11" width="16" height="2" rx="1" />
                        <rect x="4" y="17" width="16" height="2" rx="1" />
                    </svg>
                </button>
            </div>

            <!-- Header: Right side -->
            <div class="flex items-center space-x-3">
                <div class="font-bold text-slate-800 tracking-tight">An Moerty Panel</div>
            </div>

        </div>
    </div>
</header>
