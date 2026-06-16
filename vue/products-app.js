const { createApp, ref, computed, onMounted } = Vue;

createApp({
    setup() {
        const products = ref([]);
        const currentPage = ref(1);
        const itemsPerPage = ref(10);
        
        const filters = ref({
            search: '',
            category: '',
            stockStatus: ''
        });

        const modal = ref({
            show: false,
            type: 'create',
            productId: null
        });

        const form = ref({
            name: '',
            sku: '',
            category: '',
            price: 0,
            cost: 0,
            stock: 0,
            sold: 0,
            returned: 0,
            status: 'Active',
            image: ''
        });

        const fetchProducts = async () => {
            try {
                const response = await fetch('vue/products-api.php?action=list');
                const data = await response.json();
                products.value = data;
            } catch (error) {
                console.error("Failed fetching product catalog:", error);
            }
        };

        const uniqueCategories = computed(() => {
            const categories = products.value.map(p => p.category);
            return [...new Set(categories)].sort();
        });

        const metrics = computed(() => {
            const totalProducts = products.value.length;
            const totalSold = products.value.reduce((sum, p) => sum + Number(p.sold), 0);
            const totalReturned = products.value.reduce((sum, p) => sum + Number(p.returned), 0);
            const lowStock = products.value.filter(p => p.stock < 10).length;
            
            return { totalProducts, totalSold, totalReturned, lowStock };
        });

        const filteredProducts = computed(() => {
            return products.value.filter(product => {
                const searchStr = filters.value.search.toLowerCase();
                const matchesSearch = !filters.value.search || 
                    product.name.toLowerCase().includes(searchStr) ||
                    product.sku.toLowerCase().includes(searchStr);

                const matchesCategory = !filters.value.category || product.category === filters.value.category;

                let matchesStock = true;
                if (filters.value.stockStatus === 'in_stock') matchesStock = product.stock >= 10;
                if (filters.value.stockStatus === 'low_stock') matchesStock = product.stock > 0 && product.stock < 10;
                if (filters.value.stockStatus === 'out_of_stock') matchesStock = product.stock === 0;

                return matchesSearch && matchesCategory && matchesStock;
            });
        });

        const totalPages = computed(() => Math.ceil(filteredProducts.value.length / itemsPerPage.value) || 1);
        const startIndex = computed(() => (currentPage.value - 1) * itemsPerPage.value);
        const endIndex = computed(() => startIndex.value + itemsPerPage.value);
        
        const paginatedProducts = computed(() => {
            return filteredProducts.value.slice(startIndex.value, endIndex.value);
        });

        const nextPage = () => { if (currentPage.value < totalPages.value) currentPage.value++; };
        const prevPage = () => { if (currentPage.value > 1) currentPage.value--; };

        const openModal = (type, product = null) => {
            modal.value.type = type;
            if (type === 'edit' && product) {
                modal.value.productId = product.id;
                form.value = { ...product };
            } else {
                modal.value.productId = null;
                form.value = { name: '', sku: '', category: '', price: 0, cost: 0, stock: 0, sold: 0, returned: 0, status: 'Active', image: '' };
            }
            modal.value.show = true;
        };

        const closeModal = () => modal.value.show = false;

        const saveProduct = async () => {
            const payload = {
                action: modal.value.type === 'create' ? 'create' : 'update',
                id: modal.value.productId,
                ...form.value
            };

            try {
                const response = await fetch('vue/products-api.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                if (response.ok) {
                    await fetchProducts();
                    closeModal();
                }
            } catch (error) {
                console.error("Failed persisting product:", error);
            }
        };

        const formatCurrency = (value) => {
            return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(value);
        };

        onMounted(() => {
            fetchProducts();
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });
        });

        return {
            products, filters, metrics, uniqueCategories, currentPage, itemsPerPage,
            modal, form, filteredProducts, paginatedProducts, totalPages,
            startIndex, endIndex, nextPage, prevPage, openModal, closeModal, saveProduct, formatCurrency
        };
    }
}).mount('#app');