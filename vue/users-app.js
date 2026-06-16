const { createApp, ref, computed, onMounted } = Vue;

createApp({
    setup() {
        // State variables
        const users = ref([]);
        const currentPage = ref(1);
        const itemsPerPage = ref(10);
        
        const filters = ref({
            search: '',
            status: ''
        });

        const modal = ref({
            show: false,
            type: 'create', // 'create' or 'edit'
            userId: null
        });

        const form = ref({
            name: '',
            email: '',
            phone: '',
            status: 'Active',
            avatar: '',
            notes: ''
        });

        // Fetch user data from backend API
        const fetchUsers = async () => {
            try {
                const response = await fetch('vue/users-api.php?action=list');
                const data = await response.json();
                users.value = data;
            } catch (error) {
                console.error("Failed fetching users data stream:", error);
            }
        };

        // Reactive metrics calculations for top dashboard cards
        const metrics = computed(() => {
            const total = users.value.length;
            const active = users.value.filter(u => u.status === 'Active').length;
            const pending = users.value.filter(u => u.status === 'Pending').length;
            const suspended = users.value.filter(u => u.status === 'Suspended').length;
            
            return { total, active, pending, suspended };
        });

        // Computed filtering layer based on toolbar search inputs
        const filteredUsers = computed(() => {
            return users.value.filter(user => {
                const searchLower = filters.value.search.toLowerCase();
                const matchesSearch = !filters.value.search || 
                    user.name.toLowerCase().includes(searchLower) ||
                    user.email.toLowerCase().includes(searchLower) ||
                    user.phone.toLowerCase().includes(searchLower);

                const matchesStatus = !filters.value.status || user.status === filters.value.status;

                return matchesSearch && matchesStatus;
            });
        });

        // Pagination calculations
        const totalPages = computed(() => Math.ceil(filteredUsers.value.length / itemsPerPage.value) || 1);
        const startIndex = computed(() => (currentPage.value - 1) * itemsPerPage.value);
        const endIndex = computed(() => startIndex.value + itemsPerPage.value);
        
        const paginatedUsers = computed(() => {
            return filteredUsers.value.slice(startIndex.value, endIndex.value);
        });

        // Navigation controls
        const nextPage = () => {
            if (currentPage.value < totalPages.value) currentPage.value++;
        };

        const prevPage = () => {
            if (currentPage.value > 1) currentPage.value--;
        };

        const clearFilters = () => {
            filters.value.search = '';
            filters.value.status = '';
            currentPage.value = 1;
        };

        // Modal visibility triggers
        const openModal = (type, user = null) => {
            modal.value.type = type;
            if (type === 'edit' && user) {
                modal.value.userId = user.id;
                form.value = { ...user };
            } else {
                modal.value.userId = null;
                form.value = { name: '', email: '', phone: '', status: 'Active', avatar: '', notes: '' };
            }
            modal.value.show = true;
        };

        const closeModal = () => {
            modal.value.show = false;
        };

        // Persistence Layer Interaction (Create or Update Database Records)
        const saveUser = async () => {
            const payload = {
                action: modal.value.type === 'create' ? 'create' : 'update',
                id: modal.value.userId,
                ...form.value
            };

            try {
                const response = await fetch('vue/users-api.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                
                if (response.ok) {
                    await fetchUsers();
                    closeModal();
                }
            } catch (error) {
                console.error("Critical failure persisting user record payload:", error);
            }
        };

        // Initialize setup logic on lifecycle hooks
        onMounted(() => {
            fetchUsers();
            
            // ESC key modal safety hook
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });
        });

        return {
            users,
            filters,
            metrics,
            currentPage,
            itemsPerPage,
            modal,
            form,
            filteredUsers,
            paginatedUsers,
            totalPages,
            startIndex,
            endIndex,
            nextPage,
            prevPage,
            clearFilters,
            openModal,
            closeModal,
            saveUser
        };
    }
}).mount('#app');