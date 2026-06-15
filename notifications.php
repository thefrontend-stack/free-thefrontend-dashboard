<?php include_once "includes/header.php" ;?>
<title>Notifications</title>
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
    .status-indicator { transition: background-color 0.5s ease; }
</style>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row relative">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full relative">
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8">
            <div class="max-w-4xl mx-auto space-y-8">
                
                <div class="flex items-center justify-between border-b border-neutral-200 pb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-neutral-900">Notifications Center</h1>
                        <p class="text-neutral-500 mt-1">Review your latest system alerts, security updates, and performance reports.</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-[10px] uppercase font-bold text-neutral-400"></span>
                        <button id="toggle-read" class="w-10 h-6 bg-neutral-200 rounded-full transition-colors duration-300 relative focus:outline-none shadow-inner">
                            <span class="absolute top-1 left-1 w-4 h-4 bg-white rounded-full transition-transform duration-300 shadow-sm"></span>
                        </button>
                    </div>
                </div>

                <div id="notifications-list" class="bg-white border border-neutral-200 rounded-xl shadow-sm divide-y divide-neutral-100 overflow-hidden">
                    <div class="p-5 flex items-start space-x-4 animate-pulse">
                        <div class="w-3 h-3 mt-1 rounded-full bg-neutral-200"></div>
                        <div class="flex-1 space-y-3">
                            <div class="h-4 w-1/4 rounded animate-shimmer"></div>
                            <div class="h-3 w-full rounded animate-shimmer"></div>
                        </div>
                    </div>
                    <div class="p-5 flex items-start space-x-4 animate-pulse">
                        <div class="w-3 h-3 mt-1 rounded-full bg-neutral-200"></div>
                        <div class="flex-1 space-y-3">
                            <div class="h-4 w-1/3 rounded animate-shimmer"></div>
                            <div class="h-3 w-5/6 rounded animate-shimmer"></div>
                        </div>
                    </div>
                </div>

                <div id="empty-state" class="hidden text-center py-12 border-2 border-dashed border-neutral-200 rounded-xl">
                    <p class="text-neutral-400 font-medium">All caught up! No new notifications.</p>
                </div>
            </div>
        </main>
    <?php include_once "includes/copyright.php" ;?>
    </div>

    <script>
        // Simulated Notification Data
        const notifications = [
            { title: "System Update 2.4.0", message: "Core infrastructure has been updated to the latest stable release.", isRead: false },
            { title: "Security Alert", message: "Unauthorized login attempt detected from an unrecognized IP in São Paulo.", isRead: false },
            { title: "Performance Threshold", message: "Edge cache ratio dropped below 85% for project 'review'.", isRead: true },
            { title: "Billing Notification", message: "Your monthly invoice for June 2026 is now available.", isRead: true }
        ];

        // Simulate Loading
        setTimeout(() => {
            const container = document.getElementById('notifications-list');
            container.innerHTML = notifications.map(n => `
                <div class="p-5 hover:bg-neutral-50 transition-colors flex items-start space-x-4">
                    <div class="status-indicator w-3 h-3 mt-1 rounded-full ${n.isRead ? 'bg-blue-500' : 'bg-orange-500'}"></div>
                    <div class="flex-1">
                        <p class="font-bold text-neutral-900">${n.title}</p>
                        <p class="text-neutral-600 mt-1">${n.message}</p>
                        <span class="text-[10px] text-neutral-400 mt-2 block uppercase tracking-wider">Just now</span>
                    </div>
                </div>
            `).join('');
        }, 1500);

        // Toggle Switch Logic
        document.getElementById('toggle-read').addEventListener('click', function() {
            this.classList.toggle('bg-neutral-900');
            this.classList.toggle('bg-neutral-200');
            this.querySelector('span').classList.toggle('translate-x-4');
            
            // Apply color change with smooth transition
            document.querySelectorAll('.status-indicator.bg-orange-500').forEach(el => {
                el.classList.replace('bg-orange-500', 'bg-blue-500');
            });
        });
    </script>

    <?php include_once "includes/footer.php" ;?>
