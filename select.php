<?php include_once "includes/header.php" ;?>
<title>Material Selects — Code Snippets</title>   
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full">
        
    <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-8">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Material Select Components</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">UI Showcase · 20 Select Variants · Copy & Paste Ready</span>
                </div>
     
            </div>

            <div class="grid grid-cols-1 gap-8 pb-10">

                <?php 
                // Helper function to render a component block safely to keep the code clean
                function renderComponent($id, $title, $description, $htmlCode) {
                    $escapedHtml = htmlspecialchars($htmlCode, ENT_QUOTES, 'UTF-8');
                    echo '
                    <div class="bg-white border border-neutral-200 rounded-2xl shadow-sm flex flex-col xl:flex-row overflow-hidden">
                        <div class="w-full xl:w-1/3 p-6 xl:border-r border-neutral-200 bg-neutral-50/30 flex flex-col justify-center">
                            <div class="mb-5">
                                <h3 class="text-sm font-bold text-neutral-900">' . $title . '</h3>
                                <p class="text-[11px] text-neutral-500 mt-1">' . $description . '</p>
                            </div>
                            <div class="w-full relative">
                                ' . $htmlCode . '
                            </div>
                        </div>
                        
                        <div class="w-full xl:w-2/3 bg-[#0d1117] relative group">
                            <div class="absolute top-0 left-0 w-full px-4 py-2 bg-[#161b22] border-b border-neutral-800 flex justify-between items-center">
                                <span class="text-[10px] font-mono text-neutral-400 uppercase tracking-widest">HTML / Tailwind</span>
                                <button onclick="copySnippet(\'code-' . $id . '\', this)" class="text-[10px] font-semibold text-neutral-300 hover:text-white bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 px-2.5 py-1 rounded transition-all flex items-center space-x-1.5">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    <span>Copy</span>
                                </button>
                            </div>
                            <pre class="p-6 pt-12 overflow-x-auto text-[11px] sm:text-xs font-mono text-neutral-300 h-full"><code id="code-' . $id . '">' . $escapedHtml . '</code></pre>
                        </div>
                    </div>';
                }
                ?>

                <?php renderComponent('01', '01. Standard Outlined (LG)', 'Classic Material floating label permanently positioned on the top border.', '
<div class="relative pt-2">
    <select class="block px-4 py-3.5 w-full text-base text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
        <option value="" disabled selected hidden></option>
        <option value="1">Production Environment</option>
        <option value="2">Staging Sandbox</option>
        <option value="3">Local Development</option>
    </select>
    <label class="absolute text-sm text-neutral-500 transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-3 pointer-events-none">Select Workspace</label>
    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-neutral-500 mt-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('02', '02. Standard Outlined (XL)', 'Extra large click area, increased padding and typography size.', '
<div class="relative pt-3">
    <select class="block px-5 py-5 w-full text-lg text-neutral-900 bg-transparent rounded-xl border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
        <option value="1">Ubuntu 24.04 LTS (Default)</option>
        <option value="2">Debian 12 Bookworm</option>
        <option value="3">Alpine Linux</option>
    </select>
    <label class="absolute text-base text-neutral-500 transform -translate-y-6 scale-75 top-5 z-10 origin-[0] bg-neutral-50 px-2 left-4 pointer-events-none">Operating System</label>
    <div class="absolute inset-y-0 right-0 flex items-center px-5 pointer-events-none text-neutral-500 mt-3">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('03', '03. Filled Material (LG)', 'Bottom-border focus effect with a slightly darkened background.', '
<div class="relative bg-neutral-100 rounded-t-lg border-b-2 border-neutral-400 focus-within:border-black focus-within:bg-neutral-200/50 transition-all">
    <select class="block px-4 pb-2.5 pt-6 w-full text-base text-neutral-900 bg-transparent appearance-none focus:outline-none focus:ring-0 cursor-pointer">
        <option value="us-east-1">US East (N. Virginia)</option>
        <option value="sa-east-1">SA East (São Paulo)</option>
        <option value="eu-west-1">EU West (Ireland)</option>
    </select>
    <label class="absolute text-sm text-neutral-500 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-4 pointer-events-none">Deployment Region</label>
    <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-neutral-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('04', '04. Filled Material (XL)', 'Massive footprint for primary configuration settings.', '
<div class="relative bg-neutral-100 rounded-t-xl border-b-2 border-neutral-400 focus-within:border-black focus-within:bg-neutral-200/50 transition-all">
    <select class="block px-5 pb-4 pt-8 w-full text-lg font-medium text-neutral-900 bg-transparent appearance-none focus:outline-none focus:ring-0 cursor-pointer">
        <option value="pro">Pro Tier ($20/mo)</option>
        <option value="enterprise">Enterprise Tier (Custom)</option>
        <option value="hobby">Hobby Tier (Free)</option>
    </select>
    <label class="absolute text-base text-neutral-500 transform -translate-y-5 scale-75 top-5 z-10 origin-[0] left-5 pointer-events-none">Subscription Plan</label>
    <div class="absolute inset-y-0 right-0 flex items-center px-5 pointer-events-none text-neutral-500">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('05', '05. Outlined with Helper Text', 'Includes explanatory text beneath the select input.', '
<div class="relative pt-2">
    <select class="block px-4 py-3.5 w-full text-base text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
        <option value="ssl_strict">Strict (Full SSL)</option>
        <option value="ssl_flexible">Flexible (Edge Only)</option>
        <option value="ssl_off">Off (Not Recommended)</option>
    </select>
    <label class="absolute text-sm text-neutral-500 transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-3 pointer-events-none">SSL/TLS Encryption</label>
    <div class="absolute top-5 right-0 flex items-center px-4 pointer-events-none text-neutral-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
    <p class="text-[11px] text-neutral-500 mt-1.5 ml-1">Strict mode requires an origin certificate installed on your server.</p>
</div>
                '); ?>

                <?php renderComponent('06', '06. Error Validation State', 'Red accented borders and labels with error icon feedback.', '
<div class="relative pt-2">
    <select class="block px-4 py-3.5 w-full text-base text-red-900 bg-red-50/30 rounded-lg border-2 border-red-500 appearance-none focus:outline-none focus:ring-0 cursor-pointer">
        <option value="" disabled selected hidden>Select a database engine</option>
        <option value="pg">PostgreSQL</option>
        <option value="my">MySQL</option>
    </select>
    <label class="absolute text-sm text-red-600 font-bold transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-3 pointer-events-none">Database Engine</label>
    <div class="absolute top-5 right-0 flex items-center px-4 pointer-events-none text-red-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
    <p class="text-sm text-red-600 font-medium mt-1.5 ml-1 flex items-center">
        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        This field is required for cluster deployment.
    </p>
</div>
                '); ?>

                <?php renderComponent('07', '07. Success Validation State', 'Green accented confirmation styling.', '
<div class="relative pt-2">
    <select class="block px-4 py-3.5 w-full text-base text-emerald-900 bg-emerald-50/30 rounded-lg border-2 border-emerald-500 appearance-none focus:outline-none focus:ring-0 cursor-pointer">
        <option value="cloudflare">Cloudflare DNS</option>
        <option value="aws">AWS Route 53</option>
    </select>
    <label class="absolute text-sm text-emerald-700 font-bold transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-3 pointer-events-none">DNS Provider</label>
    <div class="absolute top-5 right-0 flex items-center px-4 pointer-events-none text-emerald-600">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('08', '08. Disabled State (Read-Only)', 'Grayed out, non-interactive select dropdown.', '
<div class="relative pt-2">
    <select disabled class="block px-4 py-3.5 w-full text-base text-neutral-400 bg-neutral-100 rounded-lg border-2 border-neutral-200 appearance-none cursor-not-allowed">
        <option value="legacy">Legacy Architecture (v1)</option>
    </select>
    <label class="absolute text-sm text-neutral-400 font-bold transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-100 px-2 left-3 pointer-events-none">Infrastructure Version</label>
    <div class="absolute top-5 right-0 flex items-center px-4 pointer-events-none text-neutral-300">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
    <p class="text-[11px] text-neutral-400 mt-1.5 ml-1">Cannot migrate legacy architectures automatically.</p>
</div>
                '); ?>

                <?php renderComponent('09', '09. Outlined with Left Icon', 'Contains a visual icon prepended inside the input.', '
<div class="relative pt-2">
    <div class="absolute top-5 left-0 flex items-center pl-4 pointer-events-none text-neutral-400 z-20">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18"></path></svg>
    </div>
    <select class="block pl-11 pr-4 py-3.5 w-full text-base text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
        <option value="en">English (US)</option>
        <option value="pt">Português (BR)</option>
        <option value="es">Español</option>
    </select>
    <label class="absolute text-sm text-neutral-500 transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-10 pointer-events-none">Language Configuration</label>
    <div class="absolute top-5 right-0 flex items-center px-4 pointer-events-none text-neutral-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('10', '10. Dense/Small Outlined (SM)', 'Compact sizing for dense data tables or narrow sidebars.', '
<div class="relative pt-1.5">
    <select class="block px-3 py-2 w-full text-sm text-neutral-900 bg-transparent rounded-md border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
        <option value="active">Active Status</option>
        <option value="paused">Paused</option>
        <option value="archived">Archived</option>
    </select>
    <label class="absolute text-xs text-neutral-500 transform -translate-y-4 scale-75 top-3 z-10 origin-[0] bg-neutral-50 px-1.5 left-2 pointer-events-none">Project State</label>
    <div class="absolute top-3 right-0 flex items-center px-3 pointer-events-none text-neutral-500">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('11', '11. Floating Underline Only', 'Classic Google Material Design aesthetic (No borders).', '
<div class="relative pt-4">
    <select class="block px-0 py-2.5 w-full text-base text-neutral-900 bg-transparent border-0 border-b-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
        <option value="daily">Daily Backups</option>
        <option value="weekly">Weekly Backups</option>
        <option value="monthly">Monthly Backups</option>
    </select>
    <label class="absolute text-sm text-neutral-500 transform -translate-y-6 scale-75 top-5 z-10 origin-[0] left-0 pointer-events-none">Backup Frequency</label>
    <div class="absolute top-6 right-0 flex items-center px-2 pointer-events-none text-neutral-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('12', '12. Rounded Pill Style', 'Fully rounded extreme border radius for modern UI touches.', '
<div class="relative pt-2">
    <select class="block px-5 py-3.5 w-full text-base text-neutral-900 bg-white rounded-full border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer shadow-sm">
        <option value="admin">Administrator</option>
        <option value="editor">Content Editor</option>
        <option value="viewer">Viewer Only</option>
    </select>
    <label class="absolute text-sm text-neutral-500 transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-white px-2 left-4 pointer-events-none">Access Role</label>
    <div class="absolute top-5 right-0 flex items-center px-5 pointer-events-none text-neutral-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('13', '13. Dark Mode Preview', 'Inverted color scheme for dark UI environments.', '
<div class="relative pt-2 p-6 bg-[#0a0a0a] rounded-xl border border-neutral-800">
    <select class="block px-4 py-3.5 w-full text-base text-white bg-transparent rounded-lg border-2 border-neutral-700 appearance-none focus:outline-none focus:ring-0 focus:border-white transition-colors cursor-pointer">
        <option value="dark" class="bg-neutral-900 text-white">Dark Theme (Active)</option>
        <option value="light" class="bg-neutral-900 text-white">Light Theme</option>
    </select>
    <label class="absolute text-sm text-neutral-400 transform -translate-y-5 scale-75 top-8 z-10 origin-[0] bg-[#0a0a0a] px-2 left-9 pointer-events-none">UI Appearance</label>
    <div class="absolute top-11 right-6 flex items-center px-4 pointer-events-none text-neutral-400">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('14', '14. Native Multiple Select', 'Scrollable list box for multi-selections.', '
<div class="relative pt-2">
    <label class="text-[10px] uppercase font-bold tracking-wider text-neutral-500 block mb-2">14. Notification Channels (Multiple)</label>
    <select multiple size="4" class="block w-full text-sm text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 focus:outline-none focus:ring-0 focus:border-black transition-colors overflow-y-auto p-1 cursor-pointer">
        <option value="email" selected class="p-2 hover:bg-neutral-100 rounded">Email Alerts</option>
        <option value="sms" class="p-2 hover:bg-neutral-100 rounded">SMS Messages</option>
        <option value="slack" selected class="p-2 hover:bg-neutral-100 rounded">Slack Integration</option>
        <option value="webhook" class="p-2 hover:bg-neutral-100 rounded">Custom Webhooks</option>
    </select>
    <p class="text-[10px] text-neutral-400 mt-1.5 ml-1">Hold CMD or CTRL to select multiple options.</p>
</div>
                '); ?>

                <?php renderComponent('15', '15. Select with Action Button Attached', 'Combined input group for immediate actions.', '
<div class="relative pt-2">
    <label class="absolute text-sm text-neutral-500 transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-3 pointer-events-none">Git Branch</label>
    <div class="flex rounded-lg shadow-sm">
        <div class="relative flex-grow">
            <select class="block px-4 py-3.5 w-full text-base font-mono text-neutral-900 bg-transparent rounded-none rounded-l-lg border-2 border-r-0 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
                <option value="main">main</option>
                <option value="dev">development</option>
                <option value="feat">feat/auth-module</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none text-neutral-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
        <button type="button" class="inline-flex items-center px-4 py-3.5 border-2 border-black bg-black text-white text-sm font-medium rounded-r-lg hover:bg-neutral-800 focus:outline-none transition-colors">
            Deploy Now
        </button>
    </div>
</div>
                '); ?>

                <?php renderComponent('16', '16. Select with Value Prefix', 'Combined structural UI with a fixed prefix text layer.', '
<div class="space-y-2">
    <label class="text-sm font-bold text-neutral-800 block">16. Preferred Currency</label>
    <div class="flex shadow-sm rounded-lg overflow-hidden border-2 border-neutral-300 focus-within:border-black transition-colors relative">
        <span class="inline-flex items-center px-4 border-r-2 border-neutral-300 bg-neutral-100 text-neutral-500 font-bold text-base">
            $
        </span>
        <select class="block px-4 py-3.5 w-full text-base font-bold text-neutral-900 bg-transparent appearance-none focus:outline-none focus:ring-0 cursor-pointer">
            <option value="usd">USD - US Dollar</option>
            <option value="eur">EUR - Euro</option>
            <option value="gbp">GBP - British Pound</option>
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-neutral-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
        </div>
    </div>
</div>
                '); ?>

                <?php renderComponent('17', '17. Inline Sentence Select', 'Seamlessly integrates within text/paragraphs.', '
<div class="p-4 bg-white border border-neutral-200 rounded-xl text-base text-neutral-700 leading-loose">
    Execute server chron jobs 
    <div class="inline-block relative w-32 align-middle mx-1">
        <select class="block w-full px-2 py-1 text-base font-bold text-black bg-neutral-100 border-b-2 border-black appearance-none focus:outline-none cursor-pointer">
            <option>every day</option>
            <option>every week</option>
            <option>every month</option>
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center px-1 pointer-events-none text-black">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
        </div>
    </div>
    at exactly 00:00 UTC.
</div>
                '); ?>

                <?php renderComponent('18', '18. Dual Labeled Select', 'Top label and inner description for complex choices.', '
<div class="space-y-1">
    <label class="text-[10px] uppercase font-bold tracking-wider text-neutral-500 block">18. Traffic Routing Protocol</label>
    <div class="relative">
        <select class="block px-4 py-3.5 w-full text-base font-semibold text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black transition-colors cursor-pointer">
            <option value="round_robin">Round Robin (Even Distribution)</option>
            <option value="geo">Geo-Steering (Latency Based)</option>
            <option value="failover">Primary/Failover (High Availability)</option>
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-neutral-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path></svg>
        </div>
    </div>
</div>
                '); ?>

                <?php renderComponent('19', '19. Custom Colored Arrow/Accent', 'Overrides the standard SVG for brand colors.', '
<div class="relative pt-2">
    <select class="block px-4 py-3.5 w-full text-base font-medium text-purple-900 bg-purple-50/30 rounded-lg border-2 border-purple-200 appearance-none focus:outline-none focus:ring-0 focus:border-purple-500 transition-colors cursor-pointer">
        <option value="1">Purple Theme Active</option>
    </select>
    <label class="absolute text-sm text-purple-600 font-bold transform -translate-y-5 scale-75 top-4 z-10 origin-[0] bg-neutral-50 px-2 left-3 pointer-events-none">Accent Style</label>
    <div class="absolute top-5 right-0 flex items-center px-4 pointer-events-none text-purple-600">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

                <?php renderComponent('20', '20. Massive Hero Select (2XL)', 'Over-the-top sizing for main landing page inputs.', '
<div class="relative pt-4">
    <select class="block px-6 py-6 w-full text-2xl font-black tracking-tight text-neutral-900 bg-white rounded-2xl border-4 border-neutral-900 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all cursor-pointer">
        <option value="1">I want to build an App</option>
        <option value="2">I want to host a Website</option>
        <option value="3">I want to deploy an API</option>
    </select>
    <label class="absolute text-lg font-bold text-neutral-600 transform -translate-y-7 scale-75 top-7 z-10 origin-[0] bg-white px-3 left-4 pointer-events-none border-2 border-white">What is your goal?</label>
    <div class="absolute top-8 right-0 flex items-center px-6 pointer-events-none text-neutral-900">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>
                '); ?>

            </div>

        </main>
<?php include_once "includes/copyright.php" ;?>
    </div>

    <script>
        function copySnippet(elementId, buttonElement) {
            const codeContent = document.getElementById(elementId).innerText;
            
            navigator.clipboard.writeText(codeContent).then(() => {
                // Visual feedback
                const originalText = buttonElement.innerHTML;
                buttonElement.innerHTML = `
                    <svg class="w-3 h-3 text-emerald-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-emerald-400">Copied!</span>
                `;
                buttonElement.classList.add('border-emerald-600', 'bg-emerald-900/30');
                
                setTimeout(() => {
                    buttonElement.innerHTML = originalText;
                    buttonElement.classList.remove('border-emerald-600', 'bg-emerald-900/30');
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        }
    </script>

    <?php include_once "includes/footer.php" ;?>