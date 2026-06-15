<?php include_once "includes/header.php" ;?>
<title>Product Inventory & Operations</title>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div id="app" class="flex-1 flex flex-col h-full overflow-hidden w-full" v-cloak>
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Inventory</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">Manage products, monitor stock levels, and track operational metrics</span>
                </div>
                <div>
                    <button @click="openModal('create')" class="px-4 py-2.5 bg-black text-white text-xs font-semibold rounded-lg shadow-sm hover:bg-neutral-800 transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add New Product
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Total Catalog</span>
                        <h3 class="text-2xl font-bold text-neutral-900 tracking-tight">{{ metrics.totalProducts }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-neutral-100 text-neutral-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Units Sold</span>
                        <h3 class="text-2xl font-bold text-emerald-600 tracking-tight">{{ metrics.totalSold }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Stock Alerts</span>
                        <h3 class="text-2xl font-bold text-amber-600 tracking-tight">{{ metrics.lowStock }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Returned Units</span>
                        <h3 class="text-2xl font-bold text-red-600 tracking-tight">{{ metrics.totalReturned }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-red-50 text-red-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"/></svg>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-neutral-200 rounded-xl p-4 shadow-sm grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="relative md:col-span-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-neutral-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </span>
                    <input type="text" v-model="filters.search" placeholder="Search by Product Name or SKU..." class="w-full pl-9 pr-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-lg text-xs outline-none focus:border-neutral-400 transition-colors">
                </div>
                <div>
                    <select v-model="filters.category" class="w-full px-3 py-2.5 bg-neutral-50 border border-neutral-200 rounded-lg text-xs outline-none focus:border-neutral-400 transition-colors text-neutral-600">
                        <option value="">All Categories</option>
                        <option v-for="cat in uniqueCategories" :key="cat" :value="cat">{{ cat }}</option>
                    </select>
                </div>
                <div>
                    <select v-model="filters.stockStatus" class="w-full px-3 py-2.5 bg-neutral-50 border border-neutral-200 rounded-lg text-xs outline-none focus:border-neutral-400 transition-colors text-neutral-600">
                        <option value="">All Inventory Status</option>
                        <option value="in_stock">In Stock</option>
                        <option value="low_stock">Low Stock (< 10)</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                </div>
            </div>

            <div class="bg-white border border-neutral-200 rounded-xl shadow-sm overflow-hidden flex flex-col">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse whitespace-nowrap">
                        <thead>
                            <tr class="bg-neutral-50/75 border-b border-neutral-200 text-[10px] uppercase tracking-wider text-neutral-500 font-bold">
                                <th class="p-4 pl-6">Product & SKU</th>
                                <th class="p-4">Pricing</th>
                                <th class="p-4">Stock Level</th>
                                <th class="p-4">Operations (Sold/Ret)</th>
                                <th class="p-4">Status</th>
                                <th class="p-4 pr-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-100 text-neutral-700">
                            <tr v-for="product in paginatedProducts" :key="product.id" class="hover:bg-neutral-50/50 transition-colors">
                                <td class="p-4 pl-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-neutral-100 border border-neutral-200 shrink-0 overflow-hidden">
                                            <img v-if="product.image" :src="product.image" class="w-full h-full object-cover" alt="Product">
                                            <svg v-else class="w-full h-full text-neutral-300 p-2" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v16H4z" opacity=".2"/><path d="M4 2h16c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2zm0 2v16h16V4H4zm8 11.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5zm0-5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"/></svg>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-neutral-900 text-sm">{{ product.name }}</span>
                                            <div class="flex items-center gap-2 mt-0.5">
                                                <span class="text-neutral-400 text-[10px] font-mono bg-neutral-100 px-1.5 py-0.5 rounded">{{ product.sku }}</span>
                                                <span class="text-neutral-400 text-[10px]">{{ product.category }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="flex flex-col">
                                        <span class="font-semibold text-neutral-900">{{ formatCurrency(product.price) }}</span>
                                        <span class="text-neutral-400 text-[10px]">Cost: {{ formatCurrency(product.cost) }}</span>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-neutral-900">{{ product.stock }} units</span>
                                            <span v-if="product.stock === 0" class="text-red-500 text-[10px] font-bold uppercase">Out of Stock</span>
                                            <span v-else-if="product.stock < 10" class="text-amber-500 text-[10px] font-bold uppercase">Low Stock</span>
                                            <span v-else class="text-emerald-500 text-[10px] font-bold uppercase">In Stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <div class="flex gap-4">
                                        <div class="flex flex-col">
                                            <span class="text-[10px] text-neutral-400 uppercase tracking-wider">Sold</span>
                                            <span class="font-medium text-neutral-900">{{ product.sold }}</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-[10px] text-neutral-400 uppercase tracking-wider">Ret</span>
                                            <span class="font-medium text-red-600">{{ product.returned }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <span :class="{
                                        'bg-emerald-50 text-emerald-700 border-emerald-200': product.status === 'Active',
                                        'bg-neutral-100 text-neutral-600 border-neutral-300': product.status === 'Draft',
                                        'bg-red-50 text-red-700 border-red-200': product.status === 'Archived'
                                    }" class="px-2 py-1 rounded-md text-[10px] font-bold tracking-wide uppercase border">
                                        {{ product.status }}
                                    </span>
                                </td>
                                <td class="p-4 pr-6 text-right">
                                    <button @click="openModal('edit', product)" class="text-neutral-600 hover:text-black font-semibold text-xs transition-colors">Edit Details</button>
                                </td>
                            </tr>
                            <tr v-if="filteredProducts.length === 0">
                                <td colspan="6" class="p-12 text-center text-neutral-400 font-medium">
                                    No products found matching your current filters.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bg-neutral-50/50 border-t border-neutral-200 px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 shrink-0">
                    <span class="text-neutral-500 font-medium">
                        Showing <strong class="text-neutral-900">{{ filteredProducts.length ? startIndex + 1 : 0 }}</strong> to <strong class="text-neutral-900">{{ Math.min(endIndex, filteredProducts.length) }}</strong> of <strong class="text-neutral-900">{{ filteredProducts.length }}</strong> products
                    </span>
                    <div class="flex items-center space-x-2">
                        <button @click="prevPage" :disabled="currentPage === 1" class="px-3 py-2 bg-white border border-neutral-200 rounded-lg font-semibold hover:bg-neutral-50 disabled:opacity-50 disabled:hover:bg-white transition-all text-neutral-700">
                            Previous
                        </button>
                        <button @click="nextPage" :disabled="currentPage >= totalPages" class="px-3 py-2 bg-white border border-neutral-200 rounded-lg font-semibold hover:bg-neutral-50 disabled:opacity-50 disabled:hover:bg-white transition-all text-neutral-700">
                            Next
                        </button>
                    </div>
                </div>
            </div>

        </main>

        <?php include_once "includes/copyright.php" ;?>

        <div v-if="modal.show" class="fixed inset-0 z-50 bg-neutral-900/60 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl relative transform transition-all flex flex-col max-h-[90vh]">
                
                <button @click="closeModal" class="absolute top-4 right-4 p-1 text-neutral-400 hover:text-neutral-900 hover:bg-neutral-100 rounded-full transition-colors z-10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="p-6 md:p-8 border-b border-neutral-200 shrink-0">
                    <h2 class="text-lg font-bold text-neutral-900">{{ modal.type === 'create' ? 'Add New Product' : 'Edit Product Listing' }}</h2>
                    <p class="text-neutral-500 mt-1 text-xs">Configure inventory tracking, financial metrics, and operational flags.</p>
                </div>

                <div class="p-6 md:p-8 overflow-y-auto flex-1">
                    <form id="productForm" @submit.prevent="saveProduct" class="space-y-6">
                        
                        <div class="space-y-1.5">
                            <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Product Name</label>
                            <input type="text" v-model="form.name" required placeholder="e.g. Wireless Noise-Cancelling Headphones" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">SKU (Stock Keeping Unit)</label>
                                <input type="text" v-model="form.sku" required placeholder="WH-1000XM4" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs font-mono">
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Category</label>
                                <input type="text" v-model="form.category" required list="categoryList" placeholder="Electronics" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                                <datalist id="categoryList">
                                    <option v-for="cat in uniqueCategories" :key="cat" :value="cat"></option>
                                </datalist>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Selling Price ($)</label>
                                <input type="number" step="0.01" v-model="form.price" required class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Unit Cost ($)</label>
                                <input type="number" step="0.01" v-model="form.cost" required class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Stock Quantity</label>
                                <input type="number" v-model="form.stock" required class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Status</label>
                                <select v-model="form.status" required class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs text-neutral-700">
                                    <option value="Active">Active</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Archived">Archived</option>
                                </select>
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Image URL</label>
                                <input type="url" v-model="form.image" placeholder="https://example.com/product.jpg" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                        </div>

                        <div v-if="modal.type === 'edit'" class="p-4 bg-amber-50 border border-amber-200 rounded-lg space-y-3">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-amber-700">Operational Overrides (Danger Zone)</span>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="text-[10px] font-semibold text-amber-900">Total Sold Override</label>
                                    <input type="number" v-model="form.sold" class="w-full p-2 bg-white border border-amber-200 rounded text-xs outline-none focus:border-amber-400">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[10px] font-semibold text-amber-900">Total Returned Override</label>
                                    <input type="number" v-model="form.returned" class="w-full p-2 bg-white border border-amber-200 rounded text-xs outline-none focus:border-amber-400">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="p-6 border-t border-neutral-200 shrink-0 flex justify-end space-x-3 bg-neutral-50/50 rounded-b-2xl">
                    <button type="button" @click="closeModal" class="px-5 py-2.5 rounded-lg border border-neutral-300 hover:bg-white font-medium text-neutral-700 transition-colors">Cancel</button>
                    <button type="submit" form="productForm" class="px-5 py-2.5 rounded-lg bg-black text-white hover:bg-neutral-800 font-medium transition-colors">Save Product Details</button>
                </div>
            </div>
        </div>

    </div>

    <script src="vue/products-app.js"></script>
    <?php include_once "includes/footer.php" ;?>
