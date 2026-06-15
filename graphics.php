<?php include_once "includes/header.php" ;?>
<title>Product Distribution Analytics</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-[#fafafa] text-neutral-900 antialiased h-screen overflow-hidden text-xs flex flex-col md:flex-row">

    <?php include_once "includes/sidebar.php" ;?>

    <div class="flex-1 flex flex-col h-full overflow-hidden w-full">
        
        <?php include_once "includes/menu.php" ;?>

        <main class="flex-1 overflow-y-auto p-4 md:p-8 space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-neutral-200/60 pb-6">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-neutral-900">Category Performance</h1>
                    <span class="text-[11px] uppercase font-semibold tracking-wider text-neutral-400">Volumetric distribution analysis of items sold and logistical velocity</span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Total Products</span>
                        <h3 id="metric-total" class="text-2xl font-bold text-neutral-900 tracking-tight">2,880</h3>
                    </div>
                    <div class="w-9 h-9 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Top Category</span>
                        <h3 id="metric-top" class="text-base font-bold text-blue-600 truncate max-w-[140px] tracking-tight">Accessories</h3>
                    </div>
                    <div class="w-9 h-9 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Sector Average</span>
                        <h3 id="metric-average" class="text-2xl font-bold text-neutral-900 tracking-tight">576</h3>
                    </div>
                    <div class="w-9 h-9 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                </div>

                <div class="bg-white border border-neutral-200 p-4 rounded-xl shadow-sm flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-neutral-400">Demand Peak</span>
                        <h3 id="metric-growth" class="text-2xl font-bold text-emerald-600 tracking-tight">+12.4%</h3>
                    </div>
                    <div class="w-9 h-9 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                </div>
            </div>

          <div class="w-full bg-white border border-neutral-200 px-3 py-2.5 rounded-xl shadow-sm flex items-center justify-start overflow-x-auto whitespace-nowrap class-estavel">
    <div class="flex items-center gap-3">
        <button data-period="daily" class="filter-btn px-5 py-2.5 rounded-lg text-xs font-medium text-neutral-500 hover:text-neutral-900 hover:bg-neutral-50 transition-all duration-150 inline-block shrink-0">Daily</button>
        <button data-period="seven_days" class="filter-btn px-5 py-2.5 rounded-lg text-xs font-medium text-neutral-500 hover:text-neutral-900 hover:bg-neutral-50 transition-all duration-150 inline-block shrink-0">Last 7 Days</button>
        <button data-period="thirty_days" class="filter-btn px-5 py-2.5 rounded-lg text-xs font-medium bg-blue-600 text-white shadow-sm transition-all duration-150 inline-block shrink-0">30 Days</button>
        <button data-period="sixty_days" class="filter-btn px-5 py-2.5 rounded-lg text-xs font-medium text-neutral-500 hover:text-neutral-900 hover:bg-neutral-50 transition-all duration-150 inline-block shrink-0">60 Days</button>
        <button data-period="ninety_days" class="filter-btn px-5 py-2.5 rounded-lg text-xs font-medium text-neutral-500 hover:text-neutral-900 hover:bg-neutral-50 transition-all duration-150 inline-block shrink-0">90 Days</button>
        <button data-period="year" class="filter-btn px-5 py-2.5 rounded-lg text-xs font-medium text-neutral-500 hover:text-neutral-900 hover:bg-neutral-50 transition-all duration-150 inline-block shrink-0">Year</button>
    </div>
</div>

            <div class="bg-white border border-neutral-200 rounded-xl p-6 shadow-sm flex flex-col h-[460px]">
                <div class="mb-4 flex items-center justify-between shrink-0">
                    <div>
                        <h3 class="text-sm font-bold text-neutral-900">02. Product Category Distribution</h3>
                        <p class="text-neutral-400 text-[11px]">Gross transactional volume and distribution metrics mapped to the active filter</p>
                    </div>
                    <span id="timeline-badge" class="text-[10px] bg-blue-50 text-blue-700 font-mono font-bold px-2.5 py-1 rounded-md uppercase tracking-wider whitespace-nowrap shrink-0">
                        Timeline: 30 Days
                    </span>
                </div>
                
                <div class="flex-1 min-h-0 relative">
                    <canvas id="categoryDistributionChart"></canvas>
                </div>
            </div>

        </main>
        <?php include_once "includes/copyright.php" ;?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let chartInstance = null;

            // Database lookup mapped in English
            const mockDatabase = {
                daily: { 
                    label: 'Daily', labels: ['Peripherals', 'Hardware', 'Accessories', 'Software', 'Audio'], data: [14, 8, 22, 5, 11], 
                    metrics: { total: '60', top: 'Accessories', average: '12', growth: '+4.2%' } 
                },
                seven_days: { 
                    label: 'Last 7 Days', labels: ['Peripherals', 'Hardware', 'Accessories', 'Software', 'Audio'], data: [112, 74, 185, 39, 91], 
                    metrics: { total: '501', top: 'Accessories', average: '100', growth: '+8.7%' } 
                },
                thirty_days: { 
                    label: '30 Days', labels: ['Peripherals', 'Hardware', 'Accessories', 'Software', 'Audio'], data: [640, 480, 920, 310, 530], 
                    metrics: { total: '2,880', top: 'Accessories', average: '576', growth: '+12.4%' } 
                },
                sixty_days: { 
                    label: '60 Days', labels: ['Peripherals', 'Hardware', 'Accessories', 'Software', 'Audio'], data: [1190, 890, 1640, 580, 990], 
                    metrics: { total: '5,290', top: 'Accessories', average: '1,058', growth: '+14.1%' } 
                },
                ninety_days: { 
                    label: '90 Days', labels: ['Peripherals', 'Hardware', 'Accessories', 'Software', 'Audio'], data: [1840, 1310, 2410, 910, 1480], 
                    metrics: { total: '7,950', top: 'Accessories', average: '1,590', growth: '+19.5%' } 
                },
                year: { 
                    label: 'Year', labels: ['Peripherals', 'Hardware', 'Accessories', 'Software', 'Audio'], data: [7800, 5900, 11200, 3400, 6800], 
                    metrics: { total: '35,100', top: 'Accessories', average: '7,020', growth: '+26.8%' } 
                }
            };

            // Initialize or render the Chart natively
            function switchPeriod(periodId) {
                const targetData = mockDatabase[periodId];
                if (!targetData) return;

                // 1. Update text metrics via explicit DOM IDs
                document.getElementById('metric-total').innerText = targetData.metrics.total;
                document.getElementById('metric-top').innerText = targetData.metrics.top;
                document.getElementById('metric-average').innerText = targetData.metrics.average;
                document.getElementById('metric-growth').innerText = targetData.metrics.growth;
                document.getElementById('timeline-badge').innerText = `Timeline: ${targetData.label}`;

                // 2. Update active style triggers on the Tailwind filters
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    if(btn.getAttribute('data-period') === periodId) {
                        btn.className = "filter-btn px-4 py-2 rounded-lg text-xs font-semibold bg-blue-600 text-white shadow-sm transition-all duration-150 inline-block shrink-0";
                    } else {
                        btn.className = "filter-btn px-4 py-2 rounded-lg text-xs font-medium text-neutral-600 hover:text-neutral-950 hover:bg-neutral-50 transition-all duration-150 inline-block shrink-0";
                    }
                });

                // 3. Render or swap data within ChartJS
                if (chartInstance) {
                    chartInstance.data.labels = targetData.labels;
                    chartInstance.data.datasets[0].data = targetData.data;
                    chartInstance.update();
                } else {
                    const ctx = document.getElementById('categoryDistributionChart').getContext('2d');
                    chartInstance = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: targetData.labels,
                            datasets: [{
                                label: 'Product Volume',
                                data: targetData.data,
                                backgroundColor: '#2563eb',
                                hoverBackgroundColor: '#1d4ed8',
                                borderRadius: 6,
                                borderSkipped: false,
                                barThickness: 32
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } },
                            scales: {
                                x: {
                                    grid: { display: false },
                                    ticks: { font: { family: 'ui-sans-serif, system-ui', size: 11 }, color: '#6b7280' }
                                },
                                y: {
                                    grid: { color: '#f3f4f6' },
                                    ticks: { font: { family: 'ui-sans-serif, system-ui', size: 10 }, color: '#9ca3af' }
                                }
                            }
                        }
                    });
                }
            }

            // Bind click events directly to buttons
            document.querySelectorAll('.filter-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const selectedPeriod = button.getAttribute('data-period');
                    switchPeriod(selectedPeriod);
                });
            });

            // Fire initial 30 days layer load
            switchPeriod('thirty_days');
        });
    </script>
    <?php include_once "includes/footer.php" ;?>
