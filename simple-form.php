<?php include_once "includes/header.php" ;?>
<title>Create New Product</title>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full">
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">New Product Listing</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">Add operational items, specs, and media assets to the virtual catalog</span>
                </div>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-6 max-w-6xl">
                
                <div class="lg:col-span-2 space-y-5 bg-white border border-neutral-200 p-6 rounded-xl shadow-sm">
                    
                    <div class="space-y-1.5">
                        <label for="product_name" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Product Title</label>
                        <input type="text" id="product_name" name="product_name" required placeholder="e.g., Mechanical Gaming Keyboard Pro" 
                               class="w-full px-3 py-2.5 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 placeholder-neutral-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <div class="space-y-1.5">
                            <label for="product_category" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Category Focus</label>
                            <select id="product_category" name="product_category" required 
                                    class="w-full px-3 py-2.5 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150 cursor-pointer">
                                <option value="" disabled selected>Select catalog classification</option>
                                <option value="peripherals">Peripherals</option>
                                <option value="hardware">Hardware</option>
                                <option value="accessories">Accessories</option>
                                <option value="software">Software</option>
                                <option value="audio">Audio</option>
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label for="product_price" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Target Valuation (USD)</label>
                            <input type="number" id="product_price" name="product_price" min="0" step="0.01" placeholder="0.00" 
                                   class="w-full px-3 py-2.5 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 placeholder-neutral-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label for="product_description" class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Technical Specifications & Summary</label>
                        <textarea id="product_description" name="product_description" rows="5" placeholder="Outline custom catalog requirements, specific build architectures, or logistical parameters..." 
                                  class="w-full px-3 py-2.5 bg-white border border-neutral-200 rounded-lg text-xs font-medium text-neutral-800 placeholder-neutral-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-all duration-150 resize-none"></textarea>
                    </div>

                    <div class="pt-4 border-t border-neutral-100 flex items-center justify-end gap-3">
                        <a href="table.php" class="px-4 py-2.5 rounded-lg text-xs font-medium text-neutral-500 hover:text-neutral-900 hover:bg-neutral-50 transition-all duration-150">Cancel</a>
                        <button type="submit" class="px-5 py-2.5 rounded-lg text-xs font-medium bg-blue-600 text-white shadow-sm hover:bg-blue-700 transition-all duration-150">
                            Save Product Listing
                        </button>
                    </div>

                </div>

                <div class="lg:col-span-1 space-y-4">
                    <div class="bg-white border border-neutral-200 p-5 rounded-xl shadow-sm flex flex-col">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block mb-3">Media Upload</span>
                        
                        <div class="relative w-full min-h-[240px] bg-neutral-50 border-2 border-dashed border-neutral-200 rounded-xl flex flex-col items-center justify-center p-4 text-center group transition-colors hover:border-neutral-300">
                            
                            <div id="upload-placeholder" class="space-y-3 flex flex-col items-center justify-center">
                                <div class="w-10 h-10 bg-white border border-neutral-200 text-neutral-400 rounded-xl flex items-center justify-center shadow-xs group-hover:scale-105 transition-transform duration-150">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="space-y-0.5">
                                    <p class="text-xs font-semibold text-neutral-700">Upload primary image</p>
                                    <p class="text-[11px] text-neutral-400">Click to browse file directory</p>
                                </div>
                                <span class="inline-block text-[10px] text-neutral-400 bg-white px-2 py-0.5 border border-neutral-200 rounded font-mono uppercase">PNG, JPG up to 5MB</span>
                            </div>

                            <div id="preview-container" class="hidden absolute inset-0 w-full h-full p-2 bg-white rounded-xl flex flex-col">
                                <div class="relative flex-1 w-full rounded-lg overflow-hidden bg-neutral-100 flex items-center justify-center">
                                    <img id="image-preview" src="" alt="Live Form Asset Preview" class="max-w-full max-h-[190px] object-contain rounded-md shadow-xs">
                                </div>
                                <div class="mt-2 pt-2 border-t border-neutral-100 flex items-center justify-between px-1">
                                    <span id="file-meta-name" class="text-[10px] text-neutral-400 font-medium truncate max-w-[140px]">image.png</span>
                                    <button type="button" id="clear-image" class="text-[10px] font-semibold text-red-600 hover:text-red-700 transition-colors focus:outline-none">
                                        Remove Asset
                                    </button>
                                </div>
                            </div>

                            <input type="file" id="product_image" name="product_image" accept="image/png, image/jpeg, image/jpg" 
                                   class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        </div>

                        <div class="mt-5 pt-4 border-t border-neutral-100 flex items-center justify-between shrink-0">
                            <div class="space-y-0.5">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400 block">Catalog Status</span>
                                <span id="status-label" class="text-xs font-semibold text-emerald-600 inline-block">Active</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer select-none">
                                <input type="checkbox" id="product_status" name="product_status" value="active" checked class="sr-only peer">
                                <div class="w-9 h-5 bg-neutral-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all duration-150 peer-checked:bg-blue-600"></div>
                            </label>
                        </div>

                    </div>
                </div>

            </form>

        </main>
<?php include_once "includes/copyright.php" ;?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Image Upload Selectors
            const fileInput = document.getElementById('product_image');
            const previewContainer = document.getElementById('preview-container');
            const uploadPlaceholder = document.getElementById('upload-placeholder');
            const imagePreview = document.getElementById('image-preview');
            const clearImageBtn = document.getElementById('clear-image');
            const fileMetaName = document.getElementById('file-meta-name');

            // Status Switch Selectors
            const statusInput = document.getElementById('product_status');
            const statusLabel = document.getElementById('status-label');

            // Handle Image Stream Preview
            fileInput.addEventListener('change', function() {
                const selectedFile = this.files[0];
                if (selectedFile) {
                    fileMetaName.innerText = selectedFile.name;
                    const assetReader = new FileReader();
                    assetReader.addEventListener('load', function() {
                        imagePreview.setAttribute('src', this.result);
                        uploadPlaceholder.classList.add('hidden');
                        previewContainer.classList.remove('hidden');
                    });
                    assetReader.readAsDataURL(selectedFile);
                }
            });

            // Clear Image Preview Action
            clearImageBtn.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                fileInput.value = '';
                imagePreview.setAttribute('src', '');
                fileMetaName.innerText = '';
                previewContainer.classList.add('hidden');
                uploadPlaceholder.classList.remove('hidden');
            });

            // Live Status Toggle Engine (Anti-Tremble Layout Control via steady weight classes)
            statusInput.addEventListener('change', function() {
                if (this.checked) {
                    statusLabel.innerText = 'Active';
                    statusLabel.className = 'text-xs font-semibold text-emerald-600 inline-block';
                } else {
                    statusLabel.innerText = 'Inactive';
                    statusLabel.className = 'text-xs font-semibold text-neutral-400 inline-block';
                }
            });
        });
    </script>

    <?php include_once "includes/footer.php" ;?>

