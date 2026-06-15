<?php include_once "includes/header.php" ;?>
<title>User Management Dashboard</title>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div id="app" class="flex-1 flex flex-col h-full overflow-hidden w-full" v-cloak>
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Users</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">Manage platform members, account status, and system permissions</span>
                </div>
                <div>
                    <button @click="openModal('create')" class="px-4 py-2.5 bg-black text-white text-xs font-semibold rounded-lg shadow-sm hover:bg-neutral-800 transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Add New User
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Total Users</span>
                        <h3 class="text-2xl font-bold text-neutral-900 tracking-tight">{{ metrics.total }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-neutral-100 text-neutral-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Active Status</span>
                        <h3 class="text-2xl font-bold text-emerald-600 tracking-tight">{{ metrics.active }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Pending Actions</span>
                        <h3 class="text-2xl font-bold text-amber-600 tracking-tight">{{ metrics.pending }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Suspended Users</span>
                        <h3 class="text-2xl font-bold text-red-600 tracking-tight">{{ metrics.suspended }}</h3>
                    </div>
                    <div class="w-9 h-9 bg-red-50 text-red-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-neutral-200 rounded-xl p-4 shadow-sm grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-neutral-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </span>
                    <input type="text" v-model="filters.search" placeholder="Search by name, email or phone..." class="w-full pl-9 pr-4 py-2.5 bg-neutral-50 border border-neutral-200 rounded-lg text-xs outline-none focus:border-neutral-400 transition-colors">
                </div>
                <div>
                    <select v-model="filters.status" class="w-full px-3 py-2.5 bg-neutral-50 border border-neutral-200 rounded-lg text-xs outline-none focus:border-neutral-400 transition-colors text-neutral-600">
                        <option value="">All Statuses</option>
                        <option value="Active">Active</option>
                        <option value="Suspended">Suspended</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
                <div class="flex justify-end items-center">
                    <button @click="clearFilters" class="text-xs font-medium text-neutral-500 hover:text-neutral-900 transition-colors">Clear Filters</button>
                </div>
            </div>

            <div class="bg-white border border-neutral-200 rounded-xl shadow-sm overflow-hidden flex flex-col">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-neutral-50/75 border-b border-neutral-200 text-[10px] uppercase tracking-wider text-neutral-500 font-bold">
                                <th class="p-4 pl-6">User Details</th>
                                <th class="p-4">Phone Number</th>
                                <th class="p-4">Registration Date</th>
                                <th class="p-4">Status</th>
                                <th class="p-4">Notes / Observations</th>
                                <th class="p-4 pr-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-100 text-neutral-700">
                            <tr v-for="user in paginatedUsers" :key="user.id" class="hover:bg-neutral-50/50 transition-colors">
                                <td class="p-4 pl-6">
                                    <div class="flex items-center gap-3">
                                        <img :src="user.avatar || 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'" class="w-8 h-8 rounded-full bg-neutral-100 border border-neutral-200 object-cover shrink-0" alt="Avatar">
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-neutral-900 text-sm">{{ user.name }}</span>
                                            <span class="text-neutral-400 text-[11px] font-mono">{{ user.email }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 font-medium text-neutral-600">{{ user.phone }}</td>
                                <td class="p-4 text-neutral-500 font-mono text-[11px]">{{ user.created_at }}</td>
                                <td class="p-4">
                                    <span :class="{
                                        'bg-emerald-50 text-emerald-700 border-emerald-200/60': user.status === 'Active',
                                        'bg-amber-50 text-amber-700 border-amber-200/60': user.status === 'Pending',
                                        'bg-red-50 text-red-700 border-red-200/60': user.status === 'Suspended'
                                    }" class="px-2 py-1 rounded-md text-[10px] font-bold tracking-wide uppercase border">
                                        {{ user.status }}
                                    </span>
                                </td>
                                <td class="p-4 max-w-xs truncate text-neutral-500" :title="user.notes">
                                    {{ user.notes || '—' }}
                                </td>
                                <td class="p-4 pr-6 text-right">
                                    <button @click="openModal('edit', user)" class="text-neutral-600 hover:text-black font-semibold text-xs transition-colors">Edit</button>
                                </td>
                            </tr>
                            <tr v-if="filteredUsers.length === 0">
                                <td colspan="6" class="p-12 text-center text-neutral-400 font-medium">
                                    No users found matching the selected criteria.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bg-neutral-50/50 border-t border-neutral-200 px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 shrink-0">
                    <span class="text-neutral-500 font-medium">
                        Showing <strong class="text-neutral-900">{{ startIndex + 1 }}</strong> to <strong class="text-neutral-900">{{ Math.min(endIndex, filteredUsers.length) }}</strong> of <strong class="text-neutral-900">{{ filteredUsers.length }}</strong> members
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
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-xl relative transform transition-all overflow-hidden">
                
                <button @click="closeModal" class="absolute top-4 right-4 p-1 text-neutral-400 hover:text-neutral-900 hover:bg-neutral-100 rounded-full transition-colors z-10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="p-6 md:p-8">
                    <div class="border-b border-neutral-200 pb-4 mb-6">
                        <h2 class="text-lg font-bold text-neutral-900">{{ modal.type === 'create' ? 'Create User Account' : 'Modify User Profile' }}</h2>
                        <p class="text-neutral-500 mt-1">Populate or update user credentials, status records, and operational summaries.</p>
                    </div>

                    <form @submit.prevent="saveUser" class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Full Name</label>
                                <input type="text" v-model="form.name" required placeholder="John Doe" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Email Address</label>
                                <input type="email" v-model="form.email" required placeholder="johndoe@example.com" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Phone Number</label>
                                <input type="text" v-model="form.phone" required placeholder="+1 (555) 000-0000" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Account Status</label>
                                <select v-model="form.status" required class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs text-neutral-700">
                                    <option value="Active">Active</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Suspended">Suspended</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Profile Image URL (Optional)</label>
                            <input type="url" v-model="form.avatar" placeholder="https://example.com/image.jpg" class="w-full p-2.5 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs">
                        </div>

                        <div class="space-y-1.5">
                            <label class="font-bold text-neutral-700 uppercase tracking-wider text-[10px]">Internal Notes / Observations</label>
                            <textarea rows="3" v-model="form.notes" placeholder="Enter specific account logs or administrative remarks..." class="w-full p-3 bg-neutral-50 border border-neutral-200 rounded-lg focus:ring-1 focus:ring-black outline-none text-xs"></textarea>
                        </div>

                        <div class="flex justify-end space-x-3 pt-4 border-t border-neutral-200 mt-6">
                            <button type="button" @click="closeModal" class="px-4 py-2 rounded-lg border border-neutral-300 hover:bg-neutral-50 font-medium text-neutral-700">Cancel</button>
                            <button type="submit" class="px-4 py-2 rounded-lg bg-black text-white hover:bg-neutral-800 font-medium">Save Record</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <script src="vue/users-app.js"></script>
    <?php include_once "includes/footer.php" ;?>
