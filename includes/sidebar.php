<?php
$current_page = basename($_SERVER['PHP_SELF']);
function getLinkClass($page, $current)
{
    $base_classes = "flex items-center gap-2.5 px-2.5 py-2 rounded-md transition-all ";

    if ($current == '' && $page == 'index.php') {
        return $base_classes . 'bg-neutral-900 text-white font-medium';
    }

    return ($page === $current)
        ? $base_classes . 'bg-neutral-900 text-white font-medium'
        : $base_classes . 'text-neutral-600 hover:bg-neutral-50';
}

function checkSub($pages, $current)
{
    return in_array($current, $pages);
}
?>

<div id="mobile-overlay"
    class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 hidden transition-opacity duration-300 opacity-0"></div>

<aside id="sidebar"
    class="group fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-neutral-200/80 flex flex-col transition-all duration-300 ease-in-out -translate-x-full md:translate-x-0 md:static md:h-full md:[&.collapsed]:w-16 md:[&.collapsed]:hover:w-64 overflow-x-hidden">

    <style>
        @media (min-width: 768px) {
            #sidebar.collapsed:not(:hover) .sidebar-wrapper-master {
                opacity: 0 !important;
                visibility: hidden !important;
                pointer-events: none !important;
            }
        }
    </style>

    <div class="sidebar-wrapper-master flex flex-col w-[256px] h-full transition-opacity duration-200">

        <div class="h-14 border-b border-neutral-100 flex items-center justify-between px-4 flex-shrink-0">
            <div class="flex items-center gap-2.5 overflow-hidden">
                <svg class="w-5 h-5 text-[#353336] flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z" />
                </svg>
                <span class="sidebar-text font-medium text-neutral-800 truncate">your@email.com</span>
            </div>
            <button id="close-mobile-menu" class="p-1 text-neutral-400 hover:text-neutral-600 md:hidden">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="p-3 sidebar-search">
            <div
                class="relative flex items-center bg-neutral-50 border border-neutral-200/60 rounded-md px-2 py-1.5 transition-all focus-within:border-black focus-within:bg-white">
                <svg class="w-3.5 h-3.5 text-neutral-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" placeholder="Search..."
                    class="sidebar-text bg-transparent border-none outline-none text-neutral-700 placeholder-neutral-400 w-full">
            </div>
        </div>

        <nav class="flex-1 overflow-y-auto overflow-x-hidden no-scrollbar px-2 pb-4 space-y-4">
            <div class="space-y-0.5">

                <a href="index.php" class="<?= getLinkClass('index.php', $current_page) ?>">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="sidebar-text whitespace-nowrap">Dashboard</span>
                </a>

                <div>
                    <?php $auth_active = checkSub(['auth.php'], $current_page); ?>
                    <button
                        class="submenu-trigger w-full flex items-center justify-between px-2.5 py-2 rounded-md transition-all <?= $auth_active ? 'bg-neutral-50 text-neutral-900' : 'text-neutral-600 hover:bg-neutral-50' ?>">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 flex-shrink-0 <?= $auth_active ? 'text-neutral-900' : 'text-neutral-400' ?>"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="sidebar-text whitespace-nowrap">Auth</span>
                        </div>
                        <svg class="submenu-chevron w-3 h-3 text-neutral-400 transition-transform duration-200 <?= $auth_active ? 'rotate-180' : '' ?>"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    <div
                        class="submenu-content <?= $auth_active ? '' : 'hidden' ?> ml-4 pl-4 pr-2 py-1 space-y-1 border-l-2 border-neutral-200">
                        <a href="auth.php"
                            class="block py-1.5 hover:text-neutral-900 <?= $current_page == 'auth.php' ? 'text-neutral-900 font-medium' : 'text-neutral-500' ?>">Login</a>
                    </div>
                </div>

                <div>
                    <?php $forms_active = checkSub(['forms.php', 'simple-form.php'], $current_page); ?>
                    <button
                        class="submenu-trigger w-full flex items-center justify-between px-2.5 py-2 rounded-md transition-all <?= $forms_active ? 'bg-neutral-50 text-neutral-900' : 'text-neutral-600 hover:bg-neutral-50' ?>">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 flex-shrink-0 <?= $forms_active ? 'text-neutral-900' : 'text-neutral-400' ?>"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18">
                                </path>
                            </svg>
                            <span class="sidebar-text whitespace-nowrap">Forms</span>
                        </div>
                        <svg class="submenu-chevron w-3 h-3 text-neutral-400 transition-transform duration-200 <?= $forms_active ? 'rotate-180' : '' ?>"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    <div
                        class="submenu-content <?= $forms_active ? '' : 'hidden' ?> ml-4 pl-4 pr-2 py-1 space-y-1 border-l-2 border-neutral-200">
                        <a href="forms.php"
                            class="block py-1.5 hover:text-neutral-900 <?= $current_page == 'forms.php' ? 'text-neutral-900 font-medium' : 'text-neutral-500' ?>">Forms</a>
                        <a href="simple-form.php"
                            class="block py-1.5 hover:text-neutral-900 <?= $current_page == 'simple-form.php' ? 'text-neutral-900 font-medium' : 'text-neutral-500' ?>">Simple
                            form</a>
                    </div>
                </div>

                <div>
                    <?php $tables_active = checkSub(['users.php', 'table.php'], $current_page); ?>
                    <button
                        class="submenu-trigger w-full flex items-center justify-between px-2.5 py-2 rounded-md transition-all <?= $tables_active ? 'bg-neutral-50 text-neutral-900' : 'text-neutral-600 hover:bg-neutral-50' ?>">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 flex-shrink-0 <?= $tables_active ? 'text-neutral-900' : 'text-neutral-400' ?>"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="sidebar-text whitespace-nowrap">Tables</span>
                        </div>
                        <svg class="submenu-chevron w-3 h-3 text-neutral-400 transition-transform duration-200 <?= $tables_active ? 'rotate-180' : '' ?>"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    <div
                        class="submenu-content <?= $tables_active ? '' : 'hidden' ?> ml-4 pl-4 pr-2 py-1 space-y-1 border-l-2 border-neutral-200">
                        <a href="users.php"
                            class="block py-1.5 hover:text-neutral-900 <?= $current_page == 'users.php' ? 'text-neutral-900 font-medium' : 'text-neutral-500' ?>">Users</a>
                        <a href="table.php"
                            class="block py-1.5 hover:text-neutral-900 <?= $current_page == 'table.php' ? 'text-neutral-900 font-medium' : 'text-neutral-500' ?>">Table</a>
                    </div>
                </div>

            </div>

            <div>
                <span
                    class="sidebar-text whitespace-nowrap px-2.5 text-[10px] font-medium text-neutral-400 uppercase tracking-wider block mb-1">Examples</span>
                <div class="space-y-0.5">
                    <a href="categories.php" class="<?= getLinkClass('categories.php', $current_page) ?>">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sidebar-text whitespace-nowrap">Categories</span>
                    </a>
                    <a href="graphics.php" class="<?= getLinkClass('graphics.php', $current_page) ?>">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                        <span class="sidebar-text whitespace-nowrap">Chart</span>
                    </a>
                    <a href="404.php" class="<?= getLinkClass('404.php', $current_page) ?>">
        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14 2v6h6" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 13H8" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 17H8" />
        </svg>
        <span class="sidebar-text whitespace-nowrap">404</span>
    </a>
                </div>
            </div>

            <div>
                <span
                    class="sidebar-text whitespace-nowrap px-2.5 text-[10px] font-medium text-neutral-400 uppercase tracking-wider block mb-1">UI</span>
                <div class="space-y-0.5">
                    <a href="select.php" class="<?= getLinkClass('select.php', $current_page) ?>">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        <span class="sidebar-text whitespace-nowrap">Select</span>
                    </a>
                    <a href="modal.php" class="<?= getLinkClass('modal.php', $current_page) ?>">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span class="sidebar-text whitespace-nowrap">Modal</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</aside>