<header class="bg-white/80 backdrop-blur-md border-b border-neutral-200/80 h-14 flex items-center justify-between px-4 md:px-6 flex-shrink-0 z-30">
            <div class="flex items-center space-x-3">
                <button id="menu-toggle-btn" class="p-1.5 text-neutral-500 hover:bg-neutral-100 rounded-md transition-all flex flex-col space-y-[4px] w-8 h-8 justify-center items-center">
                    <span class="block w-4 h-[2px] bg-neutral-600 transition-all duration-200 ease-in-out"></span>
                    <span class="block w-4 h-[2px] bg-neutral-600 transition-all duration-200 ease-in-out"></span>
                    <span class="block w-4 h-[2px] bg-neutral-600 transition-all duration-200 ease-in-out"></span>
                </button>
                <div class="h-4 w-[1px] bg-neutral-200"></div>
                <div class="flex items-center space-x-2 text-neutral-500 font-medium">
                    <a href="./"><span>home</span></a>
                    <span class="text-neutral-300">/</span>
    <!--  <span class="text-neutral-900 font-semibold bg-neutral-50 px-2 py-0.5 border border-neutral-200/60 rounded">••••••</span>-->
   <!-- current page -->
    <style>
    @keyframes shimmer-move {
        100% { transform: translateX(100%); }
    }
    .shimmer-active::after {
        position: absolute;
        top: 0; right: 0; bottom: 0; left: 0;
        transform: translateX(-100%);
        background-image: linear-gradient(
            90deg,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.3) 30%,
            rgba(255, 255, 255, 0.7) 60%,
            rgba(255, 255, 255, 0) 100%
        );
        animation: shimmer-move 1.6s infinite;
        content: '';
    }
</style>

<div id="dynamic-meta-badge" class="hidden lg:inline-flex items-center bg-neutral-50 px-2 py-1 border border-neutral-200/60 rounded-lg min-w-[240px] h-6 relative overflow-hidden select-none align-middle">
    
    <div id="meta-skeleton" class="absolute inset-0 flex items-center gap-2 px-2 bg-neutral-50 z-10">
        <div class="h-3 w-14 bg-neutral-200/80 rounded relative overflow-hidden shimmer-active"></div>
        <div class="h-3 w-[1px] bg-neutral-200"></div>
        <div class="h-3 w-28 bg-neutral-200/80 rounded relative overflow-hidden shimmer-active"></div>
    </div>

    <div id="meta-content" class="opacity-0 transition-opacity duration-300 flex items-center gap-1.5 truncate text-[11px] font-medium w-full">
        <span id="meta-h1-target" class="text-neutral-900 font-bold shrink-0"></span>
        <span class="text-neutral-300 font-normal shrink-0">|</span>
        <span id="meta-url-target" class="font-mono text-neutral-400 truncate"></span>
    </div>
    
</div>
<!-- end current page-->

                </div>
            </div>

            <div class="flex items-center space-x-4">
   
                <button class="text-neutral-500 hover:text-neutral-900 font-medium transition-all">Profile</button>
                
                <div class="relative">
                    <button id="user-dropdown-btn" class="w-7 h-7 bg-neutral-900 text-white rounded-full flex items-center justify-center font-bold border border-neutral-200 shadow-sm focus:ring-2 focus:ring-black focus:ring-offset-2 transition-all">
                        t
                    </button>
                    <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-52 bg-white border border-neutral-200 rounded-lg shadow-xl py-1 z-50 origin-top-right transition-all">
                        <div class="px-4 py-2 border-b border-neutral-100">
                            <p class="font-semibold text-neutral-900 truncate">TheFrontEnd</p>
                            <p class="text-[10px] text-neutral-400 truncate">your@email.com</p>
                        </div>
                        <a href="profile.php" class="block px-4 py-2 text-neutral-600 hover:bg-neutral-50">Profile</a>
                        <a href="notifications.php" class="block px-4 py-2 text-neutral-600 hover:bg-neutral-50">Notifications</a>
                        <div class="border-t border-neutral-100 my-1"></div>
                        <a href="auth.php" class="block px-4 py-2 text-red-600 hover:bg-red-50/60">Sign out</a>
                    </div>
                </div>
            </div>
</header>