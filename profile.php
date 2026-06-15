<?php include_once "includes/header.php" ;?>
<title>Profile — Account Settings</title>   
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col min-h-screen overflow-x-hidden w-full">
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-8">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div class="space-y-1">
                    <h1 class="text-3xl font-bold tracking-tight text-neutral-900">Account Settings</h1>
                    <p class="text-sm text-neutral-500">Manage your profile configurations, security rules, and workspace preferences.</p>
                </div>
                <div class="flex items-center space-x-2.5 self-start sm:self-auto">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                        <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-emerald-500"></span>
                        Verified Account
                    </span>
                    <button class="p-2 bg-white border border-neutral-200 rounded-lg text-neutral-500 hover:text-black hover:border-neutral-300 transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white border border-neutral-200/90 rounded-xl p-6 shadow-[0_1px_3px_rgba(0,0,0,0.02)] space-y-6">
                        <div class="border-b border-neutral-100 pb-4">
                            <h2 class="text-base font-semibold text-neutral-900">Personal Information</h2>
                            <p class="text-xs text-neutral-500">Update your public identity and account correspondence addresses.</p>
                        </div>
                        
                        <form class="grid grid-cols-1 sm:grid-cols-2 gap-4" onsubmit="event.preventDefault();">
                            <div class="space-y-1.5">
                                <label class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Full Name</label>
                                <input type="text" value="TheFrontEnd" class="w-full bg-neutral-50/50 border border-neutral-200 rounded-lg px-3.5 py-2 text-sm text-neutral-900 placeholder-neutral-400 focus:bg-white focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Email Address</label>
                                <input type="email" value="support@thefrontend.org" class="w-full bg-neutral-50/50 border border-neutral-200 rounded-lg px-3.5 py-2 text-sm text-neutral-900 placeholder-neutral-400 focus:bg-white focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Role / Position</label>
                                <input type="text" value="Full-stack Developer & SEO Analyst" class="w-full bg-neutral-50/40 border border-neutral-200 rounded-lg px-3.5 py-2 text-sm text-neutral-500 cursor-not-allowed" readonly>
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Timezone</label>
                                <select class="w-full bg-neutral-50/50 border border-neutral-200 rounded-lg px-3.5 py-2 text-sm text-neutral-900 focus:bg-white focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition-all">
                                    <option>America/Sao_Paulo (GMT-3)</option>
                                    <option>UTC (GMT+0)</option>
                                    <option>Europe/London (GMT+1)</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2 flex justify-end pt-2">
                                <button type="submit" class="bg-black hover:bg-neutral-800 text-white font-medium px-4 py-2 rounded-lg text-sm shadow-sm transition-all">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="bg-white border border-neutral-200/90 rounded-xl p-6 shadow-[0_1px_3px_rgba(0,0,0,0.02)] space-y-6">
                        <div class="border-b border-neutral-100 pb-4">
                            <h2 class="text-base font-semibold text-neutral-900">Security & Access Keys</h2>
                            <p class="text-xs text-neutral-500">Keep your authentication layers and core access systems highly secure.</p>
                        </div>

                        <div class="divide-y divide-neutral-100">
                            <div class="py-4 flex items-center justify-between first:pt-0 last:pb-0">
                                <div class="space-y-0.5">
                                    <h3 class="text-sm font-medium text-neutral-900">Account Password</h3>
                                    <p class="text-xs text-neutral-500">Last protective change performed 3 months ago</p>
                                </div>
                                <button class="border border-neutral-200 hover:bg-neutral-50 text-neutral-800 font-medium px-3 py-1.5 rounded-lg text-xs shadow-sm transition-all">
                                    Change Password
                                </button>
                            </div>

                            <div class="py-4 flex items-center justify-between first:pt-0 last:pb-0">
                                <div class="space-y-0.5">
                                    <div class="flex items-center space-x-2">
                                        <h3 class="text-sm font-medium text-neutral-900">Two-Factor Authentication (2FA)</h3>
                                        <span class="bg-blue-50 text-blue-700 border border-blue-100 text-[10px] px-1.5 py-0.2 rounded font-medium tracking-wide uppercase">Recommended</span>
                                    </div>
                                    <p class="text-xs text-neutral-500">Add an absolute defense layer using a secure authenticator application.</p>
                                </div>
                                <button class="bg-black hover:bg-neutral-800 text-white font-medium px-3 py-1.5 rounded-lg text-xs shadow-sm transition-all">
                                    Enable 2FA
                                </button>
                            </div>

                            <div class="py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3 first:pt-0 last:pb-0">
                                <div class="space-y-0.5">
                                    <h3 class="text-sm font-medium text-neutral-900">Global Access Token</h3>
                                    <p class="text-xs text-neutral-500">API key applied to validate automated terminal operations.</p>
                                </div>
                                <div class="flex items-center space-x-2 self-start sm:self-auto">
                                    <code class="bg-neutral-100 border border-neutral-200 px-2 py-1 rounded text-xs font-mono text-neutral-600">pk_live_•••••••••24c8</code>
                                    <button class="border border-neutral-200 hover:bg-neutral-50 text-neutral-700 p-1.5 rounded-md transition-all shadow-sm">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    
                    <div class="bg-white border border-neutral-200/90 rounded-xl p-6 shadow-[0_1px_3px_rgba(0,0,0,0.02)] space-y-5">
                        <div>
                            <span class="text-[10px] uppercase font-bold tracking-widest text-neutral-400 bg-neutral-100 border border-neutral-200/60 px-2 py-0.5 rounded">Subscription Layer</span>
                            <h2 class="text-2xl font-extrabold text-neutral-900 mt-2.5">Enterprise Scale</h2>
                            <p class="text-xs text-neutral-500 mt-1">Renews automatically on <span class="text-neutral-800 font-medium">July 1st, 2026</span></p>
                        </div>

                        <div class="space-y-4 pt-4 border-t border-neutral-100">
                            <div class="space-y-1.5">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-neutral-600">Connected Domains</span>
                                    <span class="text-neutral-900 font-bold">2 / 100</span>
                                </div>
                                <div class="w-full bg-neutral-100 rounded-full h-1.5">
                                    <div class="bg-black h-1.5 rounded-full" style="width: 2%"></div>
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-neutral-600">Bandwidth (Edge Volume)</span>
                                    <span class="text-neutral-900 font-bold">4.04k / Unlimited</span>
                                </div>
                                <div class="w-full bg-neutral-100 rounded-full h-1.5">
                                    <div class="bg-black h-1.5 rounded-full" style="width: 15%"></div>
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-neutral-600">Active Edge Workers</span>
                                    <span class="text-neutral-900 font-bold">2 / 50</span>
                                </div>
                                <div class="w-full bg-neutral-100 rounded-full h-1.5">
                                    <div class="bg-black h-1.5 rounded-full" style="width: 4%"></div>
                                </div>
                            </div>
                        </div>

                        <button class="w-full bg-neutral-50 border border-neutral-200 hover:bg-neutral-100 text-neutral-900 font-medium py-2 rounded-lg text-sm transition-all shadow-sm">
                            View Billing Architecture
                        </button>
                    </div>

                    <div class="bg-white border border-neutral-200/90 rounded-xl p-5 shadow-[0_1px_3px_rgba(0,0,0,0.02)] space-y-3.5">
                        <h3 class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Meta System Values</h3>
                        <div class="space-y-2 text-xs text-neutral-600">
                            <div class="flex justify-between items-center">
                                <span>Account ID</span>
                                <span class="font-mono font-medium text-neutral-900 select-all bg-neutral-50 px-1.5 py-0.5 rounded border border-neutral-200/40">usr_99bay_2026x</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Member Since</span>
                                <span class="text-neutral-900 font-medium">January 7th, 2026</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Primary Architecture</span>
                                <span class="text-neutral-900 font-medium">SA-East-1 (Edge Stack)</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    <?php include_once "includes/copyright.php" ;?>
    </div>

    <?php include_once "includes/footer.php" ;?>