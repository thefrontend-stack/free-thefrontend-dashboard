<?php include_once "includes/header.php" ;?>
<title>Categories</title>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full">
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Taxonomy & SEO Engine</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">Manage categories, subcategories</span>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                
                <div class="lg:col-span-1 bg-white border border-neutral-200 p-5 rounded-xl shadow-sm space-y-5">
                    <div class="flex items-center gap-2">
                        <div class="p-1.5 bg-blue-50 text-blue-600 rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </div>
                        <div>
                            <h2 class="text-sm font-bold text-neutral-900">Create New Taxonomy</h2>
                            <p class="text-[11px] text-neutral-400">Add a new layer to the virtual catalog.</p>
                        </div>
                    </div>

                    <form id="create-taxonomy-form" action="#" method="POST" class="space-y-4">
                        <div class="space-y-1.5">
                            <label class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Taxonomy Type</label>
                            <div class="grid grid-cols-2 gap-2 bg-neutral-100 p-1 rounded-lg">
                                <label class="cursor-pointer text-center">
                                    <input type="radio" name="create_tax_type" value="category" checked class="sr-only peer">
                                    <div class="py-1.5 rounded-md text-xs font-medium text-neutral-500 peer-checked:bg-white peer-checked:text-neutral-900 peer-checked:shadow-xs transition-all duration-150">Category</div>
                                </label>
                                <label class="cursor-pointer text-center">
                                    <input type="radio" name="create_tax_type" value="subcategory" class="sr-only peer">
                                    <div class="py-1.5 rounded-md text-xs font-medium text-neutral-500 peer-checked:bg-white peer-checked:text-neutral-900 peer-checked:shadow-xs transition-all duration-150">Subcategory</div>
                                </label>
                            </div>
                        </div>

                        <div id="create-parent-wrapper" class="space-y-1.5 hidden">
                            <label for="create_parent_id" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Parent Category</label>
                            <select id="create_parent_id" name="create_parent_id" class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150">
                                <option value="" disabled selected>Assign master category</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                                <option value="Peripherals">Peripherals</option>
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label for="create_tax_name" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Taxonomy Name</label>
                            <input type="text" id="create_tax_name" name="create_tax_name" required placeholder="e.g., Graphics Cards" 
                                   class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 placeholder-neutral-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150">
                        </div>

                        <div class="space-y-1.5">
                            <label for="create_tax_slug" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">URL Slug</label>
                            <input type="text" id="create_tax_slug" name="create_tax_slug" required placeholder="e.g., graphics-cards" 
                                   class="w-full px-3 py-2 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-mono text-neutral-600 focus:outline-none focus:bg-white focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150">
                        </div>

                        <div class="pt-3 border-t border-neutral-100 space-y-3">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Search Engine Optimization (SEO)</span>
                            
                            <div class="space-y-1.5">
                                <div class="flex justify-between items-center">
                                    <label for="create_seo_title" class="text-[10px] font-medium text-neutral-500 block">Meta Title</label>
                                    <span class="text-[9px] font-mono font-bold text-neutral-400"><span id="create-title-counter">0</span>/60</span>
                                </div>
                                <input type="text" id="create_seo_title" name="create_seo_title" maxlength="60" placeholder="Target indexation title..." 
                                       class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 transition-all duration-150">
                            </div>

                            <div class="space-y-1.5">
                                <div class="flex justify-between items-center">
                                    <label for="create_seo_description" class="text-[10px] font-medium text-neutral-500 block">Meta Description</label>
                                    <span class="text-[9px] font-mono font-bold text-neutral-400"><span id="create-desc-counter">0</span>/160</span>
                                </div>
                                <textarea id="create_seo_description" name="create_seo_description" rows="3" maxlength="160" placeholder="Brief snippet for Google SERP display..." 
                                          class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 transition-all duration-150 resize-none"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="w-full px-4 py-2.5 rounded-lg text-xs font-medium bg-blue-600 text-white shadow-sm hover:bg-blue-700 transition-all duration-150 text-center justify-center">
                            Save New Structure
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-2 space-y-4">
                    
                    <div class="w-full bg-white border border-neutral-200 p-2 rounded-xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-3">
                        <div class="relative w-full sm:w-64 shrink-0">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-400">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </span>
                            <input type="text" id="table-search" placeholder="Search taxonomies..." 
                                   class="w-full pl-9 pr-3 py-2 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 placeholder-neutral-400 focus:outline-none focus:bg-white focus:border-blue-600 transition-all duration-150">
                        </div>

                        <div class="w-full sm:w-auto bg-neutral-100 p-1 rounded-lg flex items-center gap-1 shrink-0">
                            <button type="button" data-filter="all" class="filter-tab min-w-[70px] text-center py-1.5 px-3 rounded-md text-xs font-medium bg-white text-neutral-900 shadow-xs transition-all duration-150">All</button>
                            <button type="button" data-filter="category" class="filter-tab min-w-[80px] text-center py-1.5 px-3 rounded-md text-xs font-medium text-neutral-500 hover:text-neutral-900 transition-all duration-150">Categories</button>
                            <button type="button" data-filter="subcategory" class="filter-tab min-w-[100px] text-center py-1.5 px-3 rounded-md text-xs font-medium text-neutral-500 hover:text-neutral-900 transition-all duration-150">Subcategories</button>
                        </div>
                    </div>

                    <div class="bg-white border border-neutral-200 rounded-xl shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-neutral-50 border-b border-neutral-200/80 text-[10px] font-bold uppercase tracking-wider text-neutral-400">
                                        <th class="py-3 px-4">Taxonomy Name</th>
                                        <th class="py-3 px-4">Type</th>
                                        <th class="py-3 px-4">Slug Match</th>
                                        <th class="py-3 px-4 text-center">SEO Health</th>
                                        <th class="py-3 px-4 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="taxonomy-table-rows" class="divide-y divide-neutral-100 font-medium text-neutral-700">
                                    
                                    <tr class="table-item hover:bg-neutral-50/60 transition-colors" data-id="1" data-type="category" data-name="Hardware" data-slug="hardware" data-title="High-End Hardware Assets" data-desc="Complete technical database of catalog hardware parts.">
                                        <td class="py-3 px-4 font-bold text-neutral-900 name-cell">Hardware</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-neutral-100 text-neutral-600 rounded text-[10px] font-bold uppercase tracking-wide">
                                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581a2.25 2.25 0 003.182 0l4.318-4.318a2.25 2.25 0 000-3.182L11.16 3.659A2.25 2.25 0 009.568 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"/></svg>
                                                Category
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 font-mono text-[11px] text-neutral-500">/hardware</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="inline-flex items-center px-2 py-0.5 bg-emerald-50 text-emerald-700 rounded text-[10px] font-bold uppercase tracking-wide">Optimized</span>
                                        </td>
                                        <td class="py-3 px-4 text-right space-x-1.5">
                                            <button type="button" class="edit-trigger text-blue-600 hover:bg-blue-50 p-1.5 rounded-md transition-colors focus:outline-none inline-flex items-center gap-1">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/></svg>
                                                Edit
                                            </button>
                                            <button type="button" class="delete-trigger text-red-600 hover:bg-red-50 p-1.5 rounded-md transition-colors focus:outline-none inline-flex items-center gap-1">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="table-item hover:bg-neutral-50/60 transition-colors" data-id="2" data-type="subcategory" data-parent="Hardware" data-name="Graphics Cards" data-slug="graphics-cards" data-title="Next-Gen Graphics Cards" data-desc="Discover top-tier GPU performance units.">
                                        <td class="py-3 px-4 name-cell">
                                            <div class="flex flex-col">
                                                <span class="font-bold text-neutral-900">Graphics Cards</span>
                                                <span class="text-[10px] text-neutral-400 font-medium">Parent: Hardware</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-blue-50 text-blue-700 rounded text-[10px] font-bold uppercase tracking-wide">
                                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-19.5 0A2.25 2.25 0 004.5 15h15a2.25 2.25 0 002.25-2.25m-19.5 0v.25A2.25 2.25 0 004.5 17.25h15a2.25 2.25 0 002.25-2.25v-.25M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12"/></svg>
                                                Subcategory
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 font-mono text-[11px] text-neutral-500">/graphics-cards</td>
                                        <td class="py-3 px-4 text-center">
                                            <span class="inline-flex items-center px-2 py-0.5 bg-emerald-50 text-emerald-700 rounded text-[10px] font-bold uppercase tracking-wide">Optimized</span>
                                        </td>
                                        <td class="py-3 px-4 text-right space-x-1.5">
                                            <button type="button" class="edit-trigger text-blue-600 hover:bg-blue-50 p-1.5 rounded-md transition-colors focus:outline-none inline-flex items-center gap-1">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/></svg>
                                                Edit
                                            </button>
                                            <button type="button" class="delete-trigger text-red-600 hover:bg-red-50 p-1.5 rounded-md transition-colors focus:outline-none inline-flex items-center gap-1">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </main>

<?php include_once "includes/copyright.php" ;?>

    </div>

    <div id="edit-modal" class="fixed inset-0 bg-neutral-900/40 backdrop-blur-xs z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-150 p-4">
        <div class="bg-white border border-neutral-200 shadow-xl rounded-xl w-full max-w-md overflow-hidden transform scale-95 transition-transform duration-150">
            <div class="px-5 py-4 border-b border-neutral-100 flex items-center justify-between bg-neutral-50">
                <div class="flex items-center gap-2">
                    <div class="p-1.5 bg-blue-50 text-blue-600 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/></svg>
                    </div>
                    <h3 class="font-bold text-neutral-900 text-sm">Update Taxonomy Asset</h3>
                </div>
                <button type="button" class="close-edit-modal text-neutral-400 hover:text-neutral-600 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            
            <form id="edit-taxonomy-form" method="POST" class="p-5 space-y-4">
                <input type="hidden" id="edit_entry_id" name="edit_entry_id">

                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Taxonomy Type</label>
                    <div class="grid grid-cols-2 gap-2 bg-neutral-100 p-1 rounded-lg">
                        <label class="cursor-pointer text-center">
                            <input type="radio" name="edit_tax_type" value="category" class="sr-only peer">
                            <div class="py-1.5 rounded-md text-xs font-medium text-neutral-500 peer-checked:bg-white peer-checked:text-neutral-900 peer-checked:shadow-xs transition-all duration-150">Category</div>
                        </label>
                        <label class="cursor-pointer text-center">
                            <input type="radio" name="edit_tax_type" value="subcategory" class="sr-only peer">
                            <div class="py-1.5 rounded-md text-xs font-medium text-neutral-500 peer-checked:bg-white peer-checked:text-neutral-900 peer-checked:shadow-xs transition-all duration-150">Subcategory</div>
                        </label>
                    </div>
                </div>

                <div id="edit-parent-wrapper" class="space-y-1.5 hidden">
                    <label for="edit_parent_id" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Parent Category</label>
                    <select id="edit_parent_id" name="edit_parent_id" class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 transition-all duration-150">
                        <option value="Hardware">Hardware</option>
                        <option value="Software">Software</option>
                        <option value="Peripherals">Peripherals</option>
                    </select>
                </div>

                <div class="space-y-1.5">
                    <label for="edit_tax_name" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Taxonomy Name</label>
                    <input type="text" id="edit_tax_name" name="edit_tax_name" required class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 transition-all duration-150">
                </div>

                <div class="space-y-1.5">
                    <label for="edit_tax_slug" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">URL Slug</label>
                    <input type="text" id="edit_tax_slug" name="edit_tax_slug" required class="w-full px-3 py-2 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-mono text-neutral-600 focus:outline-none focus:bg-white focus:border-blue-600 transition-all duration-150">
                </div>

                <div class="pt-3 border-t border-neutral-100 space-y-3">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">SEO Target Metatags</span>
                    
                    <div class="space-y-1.5">
                        <div class="flex justify-between items-center">
                            <label for="edit_seo_title" class="text-[10px] font-medium text-neutral-500 block">Meta Title</label>
                            <span class="text-[9px] font-mono font-bold text-neutral-400"><span id="edit-title-counter">0</span>/60</span>
                        </div>
                        <input type="text" id="edit_seo_title" name="edit_seo_title" maxlength="60" class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 transition-all duration-150">
                    </div>

                    <div class="space-y-1.5">
                        <div class="flex justify-between items-center">
                            <label for="edit_seo_description" class="text-[10px] font-medium text-neutral-500 block">Meta Description</label>
                            <span class="text-[9px] font-mono font-bold text-neutral-400"><span id="edit-desc-counter">0</span>/160</span>
                        </div>
                        <textarea id="edit_seo_description" name="edit_seo_description" rows="3" maxlength="160" class="w-full px-3 py-2 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 transition-all duration-150 resize-none"></textarea>
                    </div>
                </div>

                <div class="pt-2 border-t border-neutral-100 flex justify-end gap-2">
                    <button type="button" class="close-edit-modal px-4 py-2 rounded-lg text-xs font-medium text-neutral-500 hover:bg-neutral-50 transition-colors">Cancel</button>
                    <button type="submit" class="px-4 py-2 rounded-lg text-xs font-medium bg-blue-600 text-white shadow-sm hover:bg-blue-700 transition-all duration-150">Update Configuration</button>
                </div>
            </form>
        </div>
    </div>

    <div id="delete-modal" class="fixed inset-0 bg-neutral-900/40 backdrop-blur-xs z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-150 p-4">
        <div class="bg-white border border-neutral-200 shadow-xl rounded-xl w-full max-w-sm overflow-hidden transform scale-95 transition-transform duration-150 p-5 space-y-4">
            <div class="flex items-start gap-3">
                <div class="p-2 bg-red-50 text-red-600 rounded-xl shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-neutral-900 text-sm">Confirm Structural Deletion</h3>
                    <p class="text-[11px] text-neutral-400 leading-relaxed">Are you absolutely sure you want to permanently delete this classification layer? This action cannot be undone and may damage existing URL mappings.</p>
                </div>
            </div>

            <div class="flex items-center justify-end gap-2 pt-2">
                <button type="button" id="close-delete-modal" class="px-4 py-2 rounded-lg text-xs font-medium text-neutral-500 hover:bg-neutral-50 transition-colors">Cancel</button>
                <button type="button" id="confirm-delete-btn" class="px-4 py-2 rounded-lg text-xs font-medium bg-red-600 text-white shadow-sm hover:bg-red-700 transition-colors">Delete Permanently</button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Elements Selectors ---
            const createForm = document.getElementById('create-taxonomy-form');
            const createName = document.getElementById('create_tax_name');
            const createSlug = document.getElementById('create_tax_slug');
            const createTitle = document.getElementById('create_seo_title');
            const createDesc = document.getElementById('create_seo_description');
            const createParentWrap = document.getElementById('create-parent-wrapper');
            const createTitleCounter = document.getElementById('create-title-counter');
            const createDescCounter = document.getElementById('create-desc-counter');

            // Table elements
            const tableSearch = document.getElementById('table-search');
            const filterTabs = document.querySelectorAll('.filter-tab');
            const rowsContainer = document.getElementById('taxonomy-table-rows');

            // Modal Edit Elements
            const editModal = document.getElementById('edit-modal');
            const editForm = document.getElementById('edit-taxonomy-form');
            const editId = document.getElementById('edit_entry_id');
            const editName = document.getElementById('edit_tax_name');
            const editSlug = document.getElementById('edit_tax_slug');
            const editTitle = document.getElementById('edit_seo_title');
            const editDesc = document.getElementById('edit_seo_description');
            const editParentWrap = document.getElementById('edit-parent-wrapper');
            const editParentSelect = document.getElementById('edit_parent_id');
            const editTitleCounter = document.getElementById('edit-title-counter');
            const editDescCounter = document.getElementById('edit-desc-counter');

            // Modal Delete Elements
            const deleteModal = document.getElementById('delete-modal');
            const confirmDeleteBtn = document.getElementById('confirm-delete-btn');
            const closeDeleteBtn = document.getElementById('close-delete-modal');

            let currentFilter = 'all';
            let rowTargetToDelete = null;

            // --- 1. SEO Character Counter Engine (Anti-Tremble Helper) ---
            function updateCounter(input, counterEl) {
                counterEl.innerText = input.value.length;
            }
            
            createTitle.addEventListener('input', () => updateCounter(createTitle, createTitleCounter));
            createDesc.addEventListener('input', () => updateCounter(createDesc, createDescCounter));
            editTitle.addEventListener('input', () => updateCounter(editTitle, editTitleCounter));
            editDesc.addEventListener('input', () => updateCounter(editDesc, editDescCounter));

            // --- 2. Automated Slug Generation Structure ---
            createName.addEventListener('input', function() {
                createSlug.value = this.value.toLowerCase().trim()
                    .replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-').replace(/^-+|-+$/g, '');
            });

            // --- 3. Dynamic Type Controls ---
            document.querySelectorAll('input[name="create_tax_type"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'subcategory') createParentWrap.classList.remove('hidden');
                    else createParentWrap.classList.add('hidden');
                });
            });

            document.querySelectorAll('input[name="edit_tax_type"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'subcategory') editParentWrap.classList.remove('hidden');
                    else editParentWrap.classList.add('hidden');
                });
            });

            // --- 4. Modals State Control Open/Close Animations ---
            function toggleModal(modalEl, show = true) {
                const innerBox = modalEl.querySelector('div');
                if (show) {
                    modalEl.classList.remove('pointer-events-none');
                    modalEl.classList.add('opacity-100');
                    innerBox.classList.remove('scale-95');
                    innerBox.classList.add('scale-100');
                } else {
                    modalEl.classList.add('pointer-events-none');
                    modalEl.classList.remove('opacity-100');
                    innerBox.classList.remove('scale-100');
                    innerBox.classList.add('scale-95');
                }
            }

            // --- 5. Table Rows Real-Time Client Filters ---
            function applyFilters() {
                const query = tableSearch.value.toLowerCase().trim();
                const items = rowsContainer.querySelectorAll('.table-item');

                items.forEach(row => {
                    const rowType = row.getAttribute('data-type');
                    const rowName = row.querySelector('.name-cell').textContent.toLowerCase();
                    const matchesType = (currentFilter === 'all' || rowType === currentFilter);
                    const matchesSearch = rowName.includes(query);

                    if (matchesType && matchesSearch) row.classList.remove('hidden');
                    else row.classList.add('hidden');
                });
            }

            tableSearch.addEventListener('input', applyFilters);
            filterTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    filterTabs.forEach(t => t.className = "filter-tab min-w-[70px] text-center py-1.5 px-3 rounded-md text-xs font-medium text-neutral-500 hover:text-neutral-900 transition-all duration-150");
                    this.className = "filter-tab min-w-[70px] text-center py-1.5 px-3 rounded-md text-xs font-medium bg-white text-neutral-900 shadow-xs transition-all duration-150";
                    currentFilter = this.getAttribute('data-filter');
                    applyFilters();
                });
            });

            // --- 6. Event Delegation Layer for CRUD Modals Actions ---
            rowsContainer.addEventListener('click', function(e) {
                const triggerButton = e.target.closest('button');
                if (!triggerButton) return;

                const targetRow = triggerButton.closest('.table-item');
                if (!targetRow) return;

                // Fire Open Edit Modal Frame
                if (triggerButton.classList.contains('edit-trigger')) {
                    editId.value = targetRow.getAttribute('data-id');
                    editName.value = targetRow.getAttribute('data-name');
                    editSlug.value = targetRow.getAttribute('data-slug');
                    editTitle.value = targetRow.getAttribute('data-title');
                    editDesc.value = targetRow.getAttribute('data-desc');
                    
                    const itemType = targetRow.getAttribute('data-type');
                    const checkedRadio = editForm.querySelector(`input[name="edit_tax_type"][value="${itemType}"]`);
                    checkedRadio.checked = true;
                    checkedRadio.dispatchEvent(new Event('change'));

                    if (itemType === 'subcategory') {
                        editParentSelect.value = targetRow.getAttribute('data-parent') || '';
                    }

                    // Sync counters immediately on load
                    updateCounter(editTitle, editTitleCounter);
                    updateCounter(editDesc, editDescCounter);

                    toggleModal(editModal, true);
                }

                // Fire Open Confirm Delete Modal Block
                if (triggerButton.classList.contains('delete-trigger')) {
                    rowTargetToDelete = targetRow;
                    toggleModal(deleteModal, true);
                }
            });

            // Close actions registers
            document.querySelectorAll('.close-edit-modal').forEach(b => b.addEventListener('click', () => toggleModal(editModal, false)));
            closeDeleteBtn.addEventListener('click', () => {
                toggleModal(deleteModal, false);
                rowTargetToDelete = null;
            });

            // Actual Delete Trigger execution
            confirmDeleteBtn.addEventListener('click', () => {
                if (rowTargetToDelete) {
                    rowTargetToDelete.remove();
                    toggleModal(deleteModal, false);
                    rowTargetToDelete = null;
                }
            });
        });
    </script>

    <?php include_once "includes/footer.php" ;?>
