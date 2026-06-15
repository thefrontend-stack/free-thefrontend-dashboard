<?php include_once "includes/header.php" ;?>
<title>404 Not Found</title>
<style>
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }
    .animate-shimmer {
        animation: shimmer 2.5s infinite linear;
        background: linear-gradient(to right, #f3f4f6 4%, #e5e7eb 25%, #f3f4f6 36%);
        background-size: 1000px 100%;
    }
</style>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row relative">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 flex items-center justify-center">
            
            <div class="text-center space-y-6 max-w-sm">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-neutral-100 rounded-2xl text-neutral-400">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>

                <div>
                    <h1 class="text-4xl font-extrabold tracking-tighter text-neutral-900">404</h1>
                    <h2 class="text-lg font-bold text-neutral-800 mt-2">Page not found</h2>
                    <p class="text-neutral-500 mt-3 leading-relaxed">
                        Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
                    </p>
                </div>

                <div class="pt-4">
                    <a href="index.php" class="inline-flex items-center space-x-2 bg-neutral-900 hover:bg-black text-white font-medium px-6 py-3 rounded-lg transition-all shadow-md hover:shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span>Back to Dashboard</span>
                    </a>
                </div>
            </div>

        </main>
    <?php include_once "includes/copyright.php" ;?>
    </div>

    <?php include_once "includes/footer.php" ;?>
