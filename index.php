<?php include_once "includes/header.php"; ?>
<title>Dashboard — Free edition TheFrontEnd.org</title>

<!-- Custom Shimmer Animation & Scrollbar Styles -->
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
    
    /* Custom thin scrollbar */
    ::-webkit-scrollbar { width: 5px; height: 5px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #d4d4d4; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: #a3a3a3; }

    /* Chat improvements */
    #chat-box {
        transition: all 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
    }
</style>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row relative">

    <!-- Sidebar Include -->
    <?php include_once "includes/sidebar.php"; ?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        
        <!-- Top Menu Include -->
        <?php include_once "includes/menu.php"; ?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-8">
            
            <!-- Dashboard Header Section -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <span class="text-[11px] uppercase font-bold tracking-widest text-neutral-400">Overview</span>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900 mt-1">Workspace Analytics</h1>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex items-center space-x-3 self-start sm:self-auto">
                    <!-- Notification Bell -->
                    <button onclick="location.href='notifications.php'" class="relative p-2.5 bg-white border border-neutral-200 rounded-lg text-neutral-500 hover:text-black hover:border-neutral-300 transition-all shadow-sm">
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                    <!-- Settings -->
                    <button onclick="location.href='profile.php'" class="p-2.5 bg-white border border-neutral-200 rounded-lg text-neutral-500 hover:text-black hover:border-neutral-300 transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </button>
                    <!-- Primary Action -->
                    <button onclick="location.href='profile.php'" class="flex items-center space-x-2 bg-neutral-900 hover:bg-black text-white font-medium px-4 py-2.5 rounded-lg transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Add Project</span>
                    </button>
                </div>
            </div>

            <!-- Context Filter Row -->
            <div class="flex items-center justify-between border-b border-neutral-200/80 pb-3">
                <h2 class="text-sm font-semibold tracking-tight text-neutral-900">Real-time Metrics</h2>
                <button class="flex items-center space-x-1.5 bg-white border border-neutral-200 rounded-md px-3 py-1.5 text-neutral-700 shadow-sm hover:bg-neutral-50 transition-all group">
                    <svg class="w-3.5 h-3.5 text-neutral-400 group-hover:text-neutral-600 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="font-medium">Last 24 hours</span>
                </button>
            </div>

            <!-- Premium Animated Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Security Card -->
                <div class="bg-white border border-neutral-200/80 rounded-xl p-5 flex flex-col justify-between shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neutral-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-neutral-100">
                            <div class="flex items-center space-x-2 text-neutral-400 font-medium">
                                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                <span class="text-neutral-800 font-semibold">Security Events</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 pt-4 items-end">
                            <div>
                                <span class="text-[10px] uppercase font-bold tracking-wider text-neutral-400 block mb-1">Threats Mitigated</span>
                                <div class="flex items-baseline space-x-1.5">
                                    <span class="text-3xl font-extrabold tracking-tighter text-neutral-900">8</span>
                                    <span class="text-[11px] text-neutral-500 font-medium">alerts</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-[10px] uppercase font-bold tracking-wider text-neutral-400 block mb-1">Blocked IPs</span>
                                <span class="text-2xl font-bold tracking-tight text-emerald-600">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Performance Card -->
                <div class="bg-white border border-neutral-200/80 rounded-xl p-5 flex flex-col justify-between shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neutral-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-neutral-100">
                            <div class="flex items-center space-x-2 text-neutral-400 font-medium">
                                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <span class="text-neutral-800 font-semibold">Edge Performance</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 pt-4 items-end">
                            <div>
                                <span class="text-[10px] uppercase font-bold tracking-wider text-neutral-400 block mb-1">Cache Ratio</span>
                                <div class="flex items-center space-x-1.5">
                                    <span class="text-2xl font-extrabold tracking-tighter text-neutral-900">92.4%</span>
                                </div>
                                <span class="text-emerald-500 font-semibold flex items-center text-[10px] mt-1">
                                    <svg class="w-3 h-3 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                    Up 18.2%
                                </span>
                            </div>
                            <div>
                                <span class="text-[10px] uppercase font-bold tracking-wider text-neutral-400 block mb-1">CPU Time (P90)</span>
                                <div class="flex items-center space-x-1.5">
                                    <span class="text-2xl font-extrabold tracking-tighter text-neutral-900">1.1<span class="text-xs font-normal text-neutral-500 ml-0.5">ms</span></span>
                                </div>
                                <svg class="w-full h-6 text-neutral-300 mt-2" viewBox="0 0 100 30" preserveAspectRatio="none">
                                    <path d="M0 28 Q20 25, 40 15 T70 10 T100 22" fill="none" stroke="currentColor" stroke-width="2"></path>
                                    <path d="M0 28 Q20 25, 40 15 T70 10 T100 22" fill="none" stroke="currentColor" stroke-width="2" class="text-amber-500" stroke-dasharray="100" stroke-dashoffset="0"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Network Activity Card -->
                <div class="bg-white border border-neutral-200/80 rounded-xl p-5 flex flex-col justify-between shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neutral-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-neutral-100">
                            <div class="flex items-center space-x-2 text-neutral-400 font-medium">
                                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                <span class="text-neutral-800 font-semibold">Network Traffic</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 pt-4 items-end">
                            <div>
                                <span class="text-[10px] uppercase font-bold tracking-wider text-neutral-400 block mb-1">Total Requests</span>
                                <span class="text-2xl font-extrabold tracking-tighter text-neutral-900">284K</span>
                                <span class="text-emerald-500 font-semibold flex items-center text-[10px] mt-1">
                                    <svg class="w-3 h-3 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                    Up 12.4%
                                </span>
                            </div>
                            <div>
                                <span class="text-[10px] uppercase font-bold tracking-wider text-neutral-400 block mb-1">Bandwidth</span>
                                <span class="text-2xl font-extrabold tracking-tighter text-neutral-900">42.8<span class="text-xs font-normal text-neutral-500 ml-0.5">GB</span></span>
                                <svg class="w-full h-6 text-emerald-500/30 mt-2" viewBox="0 0 100 30" preserveAspectRatio="none">
                                    <path d="M0 25 L20 28 L40 8 L60 22 L80 28 L100 24" fill="none" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>

<?php include_once "includes/copyright.php" ;?>

    </div>

    <!-- Floating Chat Widget -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end space-y-4">
        
        <!-- Chat Box -->
        <div id="chat-box" class="bg-white w-80 rounded-2xl shadow-2xl border border-neutral-200 overflow-hidden flex flex-col hidden scale-95 opacity-0">
            <!-- Chat Header -->
            <div class="bg-neutral-900 px-4 py-3 flex items-center justify-between text-white">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>
                    <span class="font-semibold text-sm">Support Team</span>
                </div>
                <button onclick="toggleChat()" class="text-neutral-400 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6h12v12"></path></svg>
                </button>
            </div>
            <!-- Chat Body -->
            <div class="h-64 bg-[#fafafa] p-4 overflow-y-auto flex flex-col space-y-3">
                <div class="self-start bg-white border border-neutral-200 text-neutral-700 px-3 py-2 rounded-2xl rounded-tl-sm text-[11px] shadow-sm max-w-[85%]">
                    Hello! Notice any issues with the Web Stories indexation today?
                </div>
                <div class="self-end bg-blue-600 text-white px-3 py-2 rounded-2xl rounded-tr-sm text-[11px] shadow-sm max-w-[85%]">
                    All good so far. Traffic looks solid.
                </div>
            </div>
            <!-- Chat Input -->
            <div class="p-3 border-t border-neutral-100 bg-white flex items-center space-x-2">
                <input type="text" placeholder="Type a message..." class="flex-1 bg-neutral-100 border-none rounded-full px-4 py-2 text-[11px] text-neutral-800 focus:ring-1 focus:ring-neutral-300 outline-none">
                <button class="p-2 bg-neutral-900 text-white rounded-full hover:bg-neutral-800 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                </button>
            </div>
        </div>

        <!-- Chat Bubble Button -->
        <button onclick="toggleChat()" id="chat-bubble" class="w-14 h-14 bg-neutral-900 text-white rounded-full shadow-xl shadow-neutral-900/20 flex items-center justify-center hover:scale-105 hover:bg-black transition-all active:scale-95 border border-neutral-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
        </button>
    </div>

    <!-- JavaScript -->
    <script>
        // Toggle Chat
        function toggleChat() {
            const chatBox = document.getElementById('chat-box');
            
            if (chatBox.classList.contains('hidden')) {
                // Open
                chatBox.classList.remove('hidden');
                setTimeout(() => {
                    chatBox.classList.remove('scale-95', 'opacity-0');
                    chatBox.classList.add('scale-100', 'opacity-100');
                }, 10);
            } else {
                // Close
                chatBox.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    chatBox.classList.add('hidden');
                }, 300);
            }
        }

        // Close chat when clicking outside
        document.addEventListener('click', function(e) {
            const chatBox = document.getElementById('chat-box');
            const bubble = document.getElementById('chat-bubble');
            
            if (!chatBox.contains(e.target) && !bubble.contains(e.target)) {
                chatBox.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    chatBox.classList.add('hidden');
                }, 300);
            }
        });

        // Status Filter
        document.getElementById('status-filter').addEventListener('change', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr:not(.shimmer-row)');
            
            rows.forEach(row => {
                if (filter === 'all') {
                    row.style.display = '';
                } else {
                    const statusText = row.textContent.toLowerCase();
                    if ((filter === 'active' && statusText.includes('active')) || 
                        (filter === 'inactive' && statusText.includes('inactive'))) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        });
    </script>

    <?php include_once "includes/footer.php"; ?>
