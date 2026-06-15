<?php include_once "includes/header.php" ;?>
<title>Material Forms LG/XL</title>   
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full">
        
    <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-8">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Material Forms (LG & XL)</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">Large Inputs · Floating Labels · No Selects</span>
                </div>
                <div class="flex items-center space-x-2 self-start sm:self-auto">
                    <button class="flex items-center space-x-1.5 bg-black hover:bg-neutral-800 text-white font-medium px-4 py-2 rounded-md transition-all shadow-md">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Save Form</span>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 pb-10">
                
                <div class="bg-white border border-neutral-200 rounded-2xl p-6 shadow-sm space-y-6">
                    <div class="border-b border-neutral-100 pb-3 mb-6">
                        <h2 class="text-base font-bold text-neutral-900">01 to 04: Floating Labels Outlined</h2>
                        <p class="text-[11px] text-neutral-500 mt-1">Classic Material style with floating labels. Large and Extra-Large sizes.</p>
                    </div>

                    <div class="relative">
                        <input type="text" id="mat_input_1" class="block px-4 py-3.5 w-full text-base text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer transition-colors" placeholder=" " />
                        <label for="mat_input_1" class="absolute text-sm text-neutral-500 duration-300 transform -translate-y-5 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 left-3 cursor-text">
                            01. Full Name (Large)
                        </label>
                    </div>

                    <div class="relative mt-6">
                        <input type="email" id="mat_input_2" class="block px-5 py-5 w-full text-lg text-neutral-900 bg-transparent rounded-xl border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer transition-colors" placeholder=" " />
                        <label for="mat_input_2" class="absolute text-base text-neutral-500 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-3 peer-focus:scale-75 peer-focus:-translate-y-6 left-4 cursor-text">
                            02. Contact Email (Extra Large)
                        </label>
                    </div>

                    <div class="relative">
                        <input type="password" id="mat_input_3" value="password123456" class="block px-4 py-3.5 pr-12 w-full text-base text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer transition-colors" placeholder=" " />
                        <label for="mat_input_3" class="absolute text-sm text-neutral-500 duration-300 transform -translate-y-5 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 left-3 cursor-text">
                            03. Secure Password
                        </label>
                        <button class="absolute top-1/2 right-4 -translate-y-1/2 text-neutral-400 hover:text-black p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>

                    <div class="relative mt-6">
                        <textarea id="mat_input_4" rows="4" class="block px-4 py-4 w-full text-base text-neutral-900 bg-transparent rounded-xl border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer transition-colors resize-none" placeholder=" "></textarea>
                        <label for="mat_input_4" class="absolute text-base text-neutral-500 duration-300 transform -translate-y-5 scale-75 top-3 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:top-4 peer-focus:top-3 peer-focus:scale-75 peer-focus:-translate-y-5 left-3 cursor-text">
                            04. Project Description
                        </label>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 rounded-2xl p-6 shadow-sm space-y-6">
                    <div class="border-b border-neutral-100 pb-3 mb-6">
                        <h2 class="text-base font-bold text-neutral-900">05 to 08: Large Radios & Checkboxes</h2>
                        <p class="text-[11px] text-neutral-500 mt-1">Multiple-choice elements with generous click areas and high contrast.</p>
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-neutral-800 block">05. Account Permissions (LG)</label>
                        <div class="flex flex-wrap gap-6">
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" checked class="w-6 h-6 border-2 border-neutral-300 rounded text-black focus:ring-black focus:ring-2 focus:ring-offset-2 transition-all">
                                <span class="text-base font-medium text-neutral-700 group-hover:text-black transition-colors">Read</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" checked class="w-6 h-6 border-2 border-neutral-300 rounded text-black focus:ring-black focus:ring-2 focus:ring-offset-2 transition-all">
                                <span class="text-base font-medium text-neutral-700 group-hover:text-black transition-colors">Write</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="checkbox" class="w-6 h-6 border-2 border-neutral-300 rounded text-black focus:ring-black focus:ring-2 focus:ring-offset-2 transition-all">
                                <span class="text-base font-medium text-neutral-700 group-hover:text-black transition-colors">Admin</span>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-neutral-100">
                        <label class="text-sm font-bold text-neutral-800 block">06. Network Configuration (XL)</label>
                        <label class="flex items-start space-x-4 cursor-pointer p-4 border-2 border-neutral-200 rounded-xl hover:bg-neutral-50 transition-all group">
                            <div class="flex-shrink-0 mt-0.5">
                                <input type="checkbox" class="w-7 h-7 border-2 border-neutral-300 rounded-md text-black focus:ring-black focus:ring-2 focus:ring-offset-2 transition-all">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-lg font-bold text-neutral-900 group-hover:text-black">Force HTTPS Connection</span>
                                <span class="text-sm text-neutral-500 mt-1">All HTTP traffic will be automatically redirected to HTTPS using TLS 1.3.</span>
                            </div>
                        </label>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-neutral-100">
                        <label class="text-sm font-bold text-neutral-800 block">07. Deployment Environment (LG)</label>
                        <div class="flex flex-col space-y-3">
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="radio" name="env" checked class="w-6 h-6 border-2 border-neutral-300 text-black focus:ring-black focus:ring-2 transition-all">
                                <span class="text-base font-medium text-neutral-700 group-hover:text-black">Production</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer group">
                                <input type="radio" name="env" class="w-6 h-6 border-2 border-neutral-300 text-black focus:ring-black focus:ring-2 transition-all">
                                <span class="text-base font-medium text-neutral-700 group-hover:text-black">Staging</span>
                            </label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-neutral-100">
                        <label class="text-sm font-bold text-neutral-800 block">08. Hosting Type (Radio Card XL)</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <label class="relative flex cursor-pointer rounded-xl border-2 border-neutral-200 bg-white p-5 shadow-sm focus:outline-none hover:border-black has-[:checked]:border-black has-[:checked]:bg-neutral-50 transition-all">
                                <input type="radio" name="hosting" class="peer sr-only" checked>
                                <div class="flex w-full items-center justify-between">
                                    <div class="flex flex-col">
                                        <span class="text-base font-bold text-neutral-900">Dedicated VPS</span>
                                        <span class="text-sm text-neutral-500 mt-1">Ubuntu 24.04</span>
                                    </div>
                                    <svg class="h-8 w-8 text-black opacity-0 peer-checked:opacity-100 transition-opacity" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                </div>
                            </label>
                            <label class="relative flex cursor-pointer rounded-xl border-2 border-neutral-200 bg-white p-5 shadow-sm focus:outline-none hover:border-black has-[:checked]:border-black has-[:checked]:bg-neutral-50 transition-all">
                                <input type="radio" name="hosting" class="peer sr-only">
                                <div class="flex w-full items-center justify-between">
                                    <div class="flex flex-col">
                                        <span class="text-base font-bold text-neutral-900">Edge Network</span>
                                        <span class="text-sm text-neutral-500 mt-1">Serverless</span>
                                    </div>
                                    <svg class="h-8 w-8 text-black opacity-0 peer-checked:opacity-100 transition-opacity" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 rounded-2xl p-6 shadow-sm space-y-6">
                    <div class="border-b border-neutral-100 pb-3 mb-6">
                        <h2 class="text-base font-bold text-neutral-900">09 to 14: Filled, Prefixes & Controls</h2>
                        <p class="text-[11px] text-neutral-500 mt-1">Filled background variations and XL combined elements.</p>
                    </div>

                    <div class="relative bg-neutral-100 rounded-t-lg border-b-2 border-neutral-400 focus-within:border-black focus-within:bg-neutral-200/50 transition-all">
                        <input type="text" id="mat_filled_1" class="block px-4 pb-2.5 pt-6 w-full text-base text-neutral-900 bg-transparent appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                        <label for="mat_filled_1" class="absolute text-sm text-neutral-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-4 peer-focus:scale-75 peer-focus:-translate-y-4 left-4 cursor-text">
                            09. Search Query (Material Filled LG)
                        </label>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-neutral-800 block">10. Subdomain (XL Prefix)</label>
                        <div class="flex shadow-sm rounded-xl overflow-hidden border-2 border-neutral-300 focus-within:border-black transition-colors">
                            <span class="inline-flex items-center px-5 border-r-2 border-neutral-300 bg-neutral-100 text-neutral-500 font-mono text-lg font-bold">
                                https://
                            </span>
                            <input type="text" placeholder="yoursite" class="w-full min-w-0 bg-white px-4 py-4 text-lg font-bold text-neutral-900 focus:outline-none focus:ring-0">
                            <span class="inline-flex items-center px-5 border-l-2 border-neutral-300 bg-neutral-100 text-neutral-500 font-mono text-lg font-bold">
                                .99bay.com
                            </span>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-bold text-neutral-800 block">11. CPU Allocation (XL Slider)</label>
                            <span class="text-lg font-black text-neutral-900 bg-neutral-100 px-3 py-1 rounded-lg">8 Cores</span>
                        </div>
                        <input type="range" min="1" max="16" value="8" class="w-full h-3 bg-neutral-200 rounded-lg appearance-none cursor-pointer accent-black hover:accent-neutral-700 transition-all">
                    </div>

                    <div class="space-y-2 pt-4">
                        <label class="text-sm font-bold text-neutral-800 block">12. Product Value (USD)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <span class="text-xl font-medium text-neutral-500">$</span>
                            </div>
                            <input type="number" value="199.90" class="block w-full pl-12 pr-4 py-4 text-xl font-bold text-neutral-900 bg-white border-2 border-neutral-300 rounded-xl focus:ring-0 focus:border-black transition-colors">
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-neutral-100">
                        <div class="flex flex-col">
                            <span class="text-base font-bold text-neutral-900">13. Auto Dark Mode</span>
                            <span class="text-sm text-neutral-500">Sync with operating system settings</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div class="w-14 h-8 bg-neutral-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[4px] after:left-[4px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-black"></div>
                        </label>
                    </div>

                    <div class="space-y-2 pt-4">
                        <label class="text-sm font-bold text-neutral-800 block">14. Brand Primary Color (LG)</label>
                        <div class="flex items-center space-x-4">
                            <input type="color" value="#000000" class="h-14 w-14 rounded-xl cursor-pointer border-2 border-neutral-300 p-1 bg-white">
                            <input type="text" value="#000000" class="block w-full px-4 py-3.5 text-base font-mono font-medium text-neutral-900 bg-white border-2 border-neutral-300 rounded-xl focus:ring-0 focus:border-black transition-colors uppercase">
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 rounded-2xl p-6 shadow-sm space-y-6">
                    <div class="border-b border-neutral-100 pb-3 mb-6">
                        <h2 class="text-base font-bold text-neutral-900">15 to 20: States & Uploads</h2>
                        <p class="text-[11px] text-neutral-500 mt-1">Intense visual feedback, XL sizes, and Datepicker.</p>
                    </div>

                    <div class="relative">
                        <input type="text" id="mat_error" value="http://invalid" class="block px-4 py-3.5 w-full text-base text-red-900 bg-red-50 rounded-lg border-2 border-red-500 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                        <label for="mat_error" class="absolute text-sm text-red-600 font-bold duration-300 transform -translate-y-5 scale-75 top-2 z-10 origin-[0] bg-red-50 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 left-3 cursor-text">
                            15. Invalid URL (Error LG)
                        </label>
                        <p class="text-sm text-red-600 font-medium mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            The HTTPS protocol is required.
                        </p>
                    </div>

                    <div class="relative mt-6">
                        <input type="text" id="mat_success" value="leonardo_roldao" class="block px-4 py-3.5 w-full text-base text-emerald-900 bg-emerald-50 rounded-lg border-2 border-emerald-500 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " />
                        <label for="mat_success" class="absolute text-sm text-emerald-700 font-bold duration-300 transform -translate-y-5 scale-75 top-2 z-10 origin-[0] bg-emerald-50 px-2 peer-focus:px-2 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 left-3 cursor-text">
                            16. Username (Success LG)
                        </label>
                        <svg class="absolute top-4 right-4 w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                    </div>

                    <div class="space-y-2 mt-6">
                        <label class="text-sm font-bold text-neutral-400 block">17. Private Key (Read-Only XL)</label>
                        <input type="text" value="sk_live_99bay_locked_88x" disabled class="block w-full px-5 py-4 text-lg font-mono text-neutral-400 bg-neutral-100 border-2 border-neutral-200 rounded-xl cursor-not-allowed">
                    </div>

                    <div class="space-y-2 mt-6">
                        <label class="text-sm font-bold text-neutral-800 block">18. Upload Area (Dropzone XL)</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col items-center justify-center w-full h-40 border-2 border-neutral-300 border-dashed rounded-2xl cursor-pointer bg-neutral-50 hover:bg-neutral-100 hover:border-black transition-all group">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-12 h-12 mb-4 text-neutral-400 group-hover:text-black transition-colors" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"></path></svg>
                                    <p class="mb-2 text-base text-neutral-500"><span class="font-bold text-black">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-neutral-400">SVG, PNG, JPG, or GIF (MAX. 800x400px)</p>
                                </div>
                                <input type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div class="relative mt-6">
                        <input type="date" id="mat_date" class="block px-4 py-3.5 w-full text-base font-medium text-neutral-900 bg-transparent rounded-lg border-2 border-neutral-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer transition-colors" placeholder=" " />
                        <label for="mat_date" class="absolute text-sm text-neutral-500 font-bold duration-300 transform -translate-y-5 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 left-3 cursor-text">
                            19. Launch Date (LG)
                        </label>
                    </div>

                    <div class="mt-8 pt-4">
                        <button type="button" class="w-full bg-black hover:bg-neutral-800 text-white font-bold text-lg py-5 rounded-xl shadow-lg hover:shadow-xl transition-all flex justify-center items-center space-x-3">
                            <span>20. Submit Form (Button XL)</span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button>
                    </div>
                </div>

            </div>

        </main>
    <?php include_once "includes/copyright.php" ;?>
    </div>

    <?php include_once "includes/footer.php" ;?>