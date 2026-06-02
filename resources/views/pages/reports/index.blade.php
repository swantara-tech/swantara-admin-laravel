@extends('layouts.app')

@section('title', 'Laporan')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Laporan & Analitik</h1>
                        <p>Analisis performa bisnis dan statistik lengkap</p>
                    </div>
                    <div style="display: flex; gap: 12px;">
                        <button class="btn btn-secondary" onclick="exportReport('pdf')">
                            <i class="fa-solid fa-file-pdf"></i> Export PDF
                        </button>
                        <button class="btn btn-secondary" onclick="exportReport('excel')">
                            <i class="fa-solid fa-file-excel"></i> Export Excel
                        </button>
                        <button class="btn btn-primary" onclick="printReport()">
                            <i class="fa-solid fa-print"></i> Print
                        </button>
                    </div>
                </div>
                
                <!-- Date Range & Filters -->
                <div class="content-card" style="margin-bottom: 24px;">
                    <div class="card-body">
                        <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
                            <!-- Quick Date Range -->
                            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                <button class="btn btn-sm date-range-btn active" data-range="7" onclick="setDateRange(7)">
                                    <i class="fa-solid fa-calendar-day"></i> 7 Hari
                                </button>
                                <button class="btn btn-sm date-range-btn" data-range="30" onclick="setDateRange(30)">
                                    <i class="fa-solid fa-calendar-week"></i> 30 Hari
                                </button>
                                <button class="btn btn-sm date-range-btn" data-range="90" onclick="setDateRange(90)">
                                    <i class="fa-solid fa-calendar-days"></i> 3 Bulan
                                </button>
                                <button class="btn btn-sm date-range-btn" data-range="365" onclick="setDateRange(365)">
                                    <i class="fa-solid fa-calendar"></i> 1 Tahun
                                </button>
                                <button class="btn btn-sm date-range-btn" data-range="custom" onclick="setCustomDateRange()">
                                    <i class="fa-solid fa-calendar-range"></i> Custom
                                </button>
                            </div>
                            
                            <div style="flex: 1;"></div>
                            
                            <!-- Custom Date Range (Hidden by default) -->
                            <div id="customDateRange" style="display: none; gap: 12px; align-items: center;">
                                <input type="date" id="dateFrom" style="padding: 8px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                <span style="color: var(--text-secondary);">sampai</span>
                                <input type="date" id="dateTo" style="padding: 8px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                <button class="btn btn-sm btn-primary" onclick="applyCustomDate()">
                                    <i class="fa-solid fa-check"></i> Apply
                                </button>
                            </div>
                            
                            <!-- Category Filter -->
                            <div style="min-width: 200px;">
                                <select id="filterCategory" style="width: 100%; padding: 8px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                    <option value="">Semua Kategori</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="audio">Audio</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="olahraga">Olahraga</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Overview -->
                <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div class="stat-icon green"><i class="fa-solid fa-money-bill-trend-up"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">Rp 45.2M</span>
                            <span class="stat-label">Total Pendapatan</span>
                        </div>
                        <div class="stat-change positive">
                            <i class="fa-solid fa-arrow-up"></i> +12.5% dari bulan lalu
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon blue"><i class="fa-solid fa-cart-shopping"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">210</span>
                            <span class="stat-label">Total Pesanan</span>
                        </div>
                        <div class="stat-change positive">
                            <i class="fa-solid fa-arrow-up"></i> +8.3% dari bulan lalu
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon purple"><i class="fa-solid fa-users"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">1,245</span>
                            <span class="stat-label">Total Pelanggan</span>
                        </div>
                        <div class="stat-change positive">
                            <i class="fa-solid fa-arrow-up"></i> +15.2% dari bulan lalu
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon orange"><i class="fa-solid fa-receipt"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">Rp 215K</span>
                            <span class="stat-label">Rata-rata Pesanan</span>
                        </div>
                        <div class="stat-change negative">
                            <i class="fa-solid fa-arrow-down"></i> -2.1% dari bulan lalu
                        </div>
                    </div>
                </div>
                
                <!-- Conversion & Performance Stats -->
                <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div style="display: flex; justify-content: space-between; align-items: start;">
                            <div class="stat-icon cyan"><i class="fa-solid fa-chart-line"></i></div>
                            <span class="badge badge-success">+5.2%</span>
                        </div>
                        <div class="stat-info" style="margin-top: 12px;">
                            <span class="stat-value">3.8%</span>
                            <span class="stat-label">Conversion Rate</span>
                        </div>
                        <div style="margin-top: 12px;">
                            <div class="progress-bar" style="height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                <div class="progress-fill" style="width: 65%; height: 100%; background: linear-gradient(90deg, #00BCF2, #0078D4); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div style="display: flex; justify-content: space-between; align-items: start;">
                            <div class="stat-icon red"><i class="fa-solid fa-rotate-left"></i></div>
                            <span class="badge badge-danger">+1.8%</span>
                        </div>
                        <div class="stat-info" style="margin-top: 12px;">
                            <span class="stat-value">2.4%</span>
                            <span class="stat-label">Return Rate</span>
                        </div>
                        <div style="margin-top: 12px;">
                            <div class="progress-bar" style="height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                <div class="progress-fill" style="width: 24%; height: 100%; background: linear-gradient(90deg, #E81123, #D13438); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div style="display: flex; justify-content: space-between; align-items: start;">
                            <div class="stat-icon green"><i class="fa-solid fa-face-smile"></i></div>
                            <span class="badge badge-success">+3.5%</span>
                        </div>
                        <div class="stat-info" style="margin-top: 12px;">
                            <span class="stat-value">94.2%</span>
                            <span class="stat-label">Customer Satisfaction</span>
                        </div>
                        <div style="margin-top: 12px;">
                            <div class="progress-bar" style="height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                <div class="progress-fill" style="width: 94%; height: 100%; background: linear-gradient(90deg, #16C60C, #107C10); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Charts Grid -->
                <div class="charts-grid">
                    <!-- Revenue Chart -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-primary">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                <div>
                                    <h3>Pendapatan Bulanan</h3>
                                    <p class="card-subtitle">Trend pendapatan 12 bulan terakhir</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 8px;">
                                <button class="btn btn-sm chart-type-btn active" data-type="line" onclick="changeChartType('revenue', 'line')">
                                    <i class="fa-solid fa-chart-line"></i>
                                </button>
                                <button class="btn btn-sm chart-type-btn" data-type="bar" onclick="changeChartType('revenue', 'bar')">
                                    <i class="fa-solid fa-chart-bar"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="revenueChart" height="280"></canvas>
                        </div>
                    </div>
                    
                    <!-- Category Chart -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-success">
                                    <i class="fa-solid fa-chart-pie"></i>
                                </div>
                                <div>
                                    <h3>Penjualan per Kategori</h3>
                                    <p class="card-subtitle">Distribusi penjualan berdasarkan kategori</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="categoryChart" height="280"></canvas>
                        </div>
                    </div>
                    
                    <!-- Orders Chart -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-warning">
                                    <i class="fa-solid fa-chart-column"></i>
                                </div>
                                <div>
                                    <h3>Pesanan Harian</h3>
                                    <p class="card-subtitle">Jumlah pesanan 7 hari terakhir</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="ordersChart" height="280"></canvas>
                        </div>
                    </div>
                    
                    <!-- Payment Methods Chart -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-info">
                                    <i class="fa-solid fa-credit-card"></i>
                                </div>
                                <div>
                                    <h3>Metode Pembayaran</h3>
                                    <p class="card-subtitle">Distribusi metode pembayaran</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="paymentChart" height="280"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- Top Products & Recent Transactions -->
                <div class="reports-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-top: 24px;">
                    <!-- Top Products -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-success">
                                    <i class="fa-solid fa-trophy"></i>
                                </div>
                                <div>
                                    <h3>Produk Terlaris</h3>
                                    <p class="card-subtitle">Top 5 produk dengan penjualan tertinggi</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body no-padding">
                            <div class="top-products-list">
                                <div class="top-product-item">
                                    <div class="rank-badge gold">1</div>
                                    <div class="product-info">
                                        <div class="product-name">Smartwatch Pro</div>
                                        <div class="product-category">Elektronik</div>
                                    </div>
                                    <div class="product-stats">
                                        <div class="sales-count">245 terjual</div>
                                        <div class="sales-revenue">Rp 612.5M</div>
                                    </div>
                                </div>
                                
                                <div class="top-product-item">
                                    <div class="rank-badge silver">2</div>
                                    <div class="product-info">
                                        <div class="product-name">Headphone Wireless</div>
                                        <div class="product-category">Audio</div>
                                    </div>
                                    <div class="product-stats">
                                        <div class="sales-count">198 terjual</div>
                                        <div class="sales-revenue">Rp 237.6M</div>
                                    </div>
                                </div>
                                
                                <div class="top-product-item">
                                    <div class="rank-badge bronze">3</div>
                                    <div class="product-info">
                                        <div class="product-name">Sneakers Limited</div>
                                        <div class="product-category">Fashion</div>
                                    </div>
                                    <div class="product-stats">
                                        <div class="sales-count">156 terjual</div>
                                        <div class="sales-revenue">Rp 499.2M</div>
                                    </div>
                                </div>
                                
                                <div class="top-product-item">
                                    <div class="rank-badge">4</div>
                                    <div class="product-info">
                                        <div class="product-name">Sepatu Running</div>
                                        <div class="product-category">Olahraga</div>
                                    </div>
                                    <div class="product-stats">
                                        <div class="sales-count">142 terjual</div>
                                        <div class="sales-revenue">Rp 106.5M</div>
                                    </div>
                                </div>
                                
                                <div class="top-product-item">
                                    <div class="rank-badge">5</div>
                                    <div class="product-info">
                                        <div class="product-name">Parfum Premium</div>
                                        <div class="product-category">Kesehatan</div>
                                    </div>
                                    <div class="product-stats">
                                        <div class="sales-count">128 terjual</div>
                                        <div class="sales-revenue">Rp 230.4M</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Transactions -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-primary">
                                    <i class="fa-solid fa-receipt"></i>
                                </div>
                                <div>
                                    <h3>Transaksi Terbaru</h3>
                                    <p class="card-subtitle">5 transaksi terakhir</p>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="viewAllTransactions()">
                                Lihat Semua <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="card-body no-padding">
                            <div class="transactions-list">
                                <div class="transaction-item">
                                    <div class="transaction-icon bg-success">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="transaction-info">
                                        <div class="transaction-title">#ORD-210 - Andi Wijaya</div>
                                        <div class="transaction-desc">Smartwatch Pro • 28 Mei 2024</div>
                                    </div>
                                    <div class="transaction-amount positive">+Rp 2.500.000</div>
                                </div>
                                
                                <div class="transaction-item">
                                    <div class="transaction-icon bg-success">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="transaction-info">
                                        <div class="transaction-title">#ORD-209 - Budi Santoso</div>
                                        <div class="transaction-desc">Headphone Wireless x2 • 27 Mei 2024</div>
                                    </div>
                                    <div class="transaction-amount positive">+Rp 2.400.000</div>
                                </div>
                                
                                <div class="transaction-item">
                                    <div class="transaction-icon bg-warning">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="transaction-info">
                                        <div class="transaction-title">#ORD-208 - Dewi Lestari</div>
                                        <div class="transaction-desc">Kamera Polaroid • 25 Mei 2024</div>
                                    </div>
                                    <div class="transaction-amount">Rp 850.000</div>
                                </div>
                                
                                <div class="transaction-item">
                                    <div class="transaction-icon bg-danger">
                                        <i class="fa-solid fa-times"></i>
                                    </div>
                                    <div class="transaction-info">
                                        <div class="transaction-title">#ORD-207 - Maya Putri</div>
                                        <div class="transaction-desc">Parfum Premium x3 • 23 Mei 2024</div>
                                    </div>
                                    <div class="transaction-amount negative">-Rp 5.400.000</div>
                                </div>
                                
                                <div class="transaction-item">
                                    <div class="transaction-icon bg-success">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="transaction-info">
                                        <div class="transaction-title">#ORD-206 - Rudi Hartono</div>
                                        <div class="transaction-desc">Sepatu Running • 24 Mei 2024</div>
                                    </div>
                                    <div class="transaction-amount positive">+Rp 750.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('styles')
<style>
.date-range-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.2s ease;
}

.date-range-btn.active {
    background: var(--accent);
    color: white;
    border-color: var(--accent);
}

.date-range-btn:hover {
    transform: translateY(-2px);
}

.stat-change {
    font-size: 11px;
    margin-top: 8px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.stat-change.positive {
    color: var(--success);
}

.stat-change.negative {
    color: var(--danger);
}

.charts-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.chart-type-btn {
    padding: 6px 10px;
    border-radius: 6px;
    font-size: 14px;
}

.chart-type-btn.active {
    background: var(--accent);
    color: white;
    border-color: var(--accent);
}

.top-products-list {
    display: flex;
    flex-direction: column;
}

.top-product-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 20px;
    border-bottom: 1px solid var(--border-color);
    transition: all 0.2s ease;
}

.top-product-item:last-child {
    border-bottom: none;
}

.top-product-item:hover {
    background: var(--surface-hover);
}

.rank-badge {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    background: var(--bg-secondary);
    color: var(--text-primary);
}

.rank-badge.gold {
    background: linear-gradient(135deg, #FFD700, #FFA500);
    color: white;
}

.rank-badge.silver {
    background: linear-gradient(135deg, #C0C0C0, #A0A0A0);
    color: white;
}

.rank-badge.bronze {
    background: linear-gradient(135deg, #CD7F32, #B87333);
    color: white;
}

.product-info {
    flex: 1;
}

.product-name {
    font-weight: 600;
    margin-bottom: 4px;
}

.product-category {
    font-size: 12px;
    color: var(--text-secondary);
}

.product-stats {
    text-align: right;
}

.sales-count {
    font-weight: 600;
    margin-bottom: 4px;
}

.sales-revenue {
    font-size: 13px;
    color: var(--accent);
    font-weight: 600;
}

.transactions-list {
    display: flex;
    flex-direction: column;
}

.transaction-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 20px;
    border-bottom: 1px solid var(--border-color);
    transition: all 0.2s ease;
}

.transaction-item:last-child {
    border-bottom: none;
}

.transaction-item:hover {
    background: var(--surface-hover);
}

.transaction-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    flex-shrink: 0;
}

.transaction-icon.bg-success {
    background: linear-gradient(135deg, #16C60C, #107C10);
}

.transaction-icon.bg-warning {
    background: linear-gradient(135deg, #FFB900, #FF8C00);
}

.transaction-icon.bg-danger {
    background: linear-gradient(135deg, #E81123, #D13438);
}

.transaction-icon.bg-primary {
    background: linear-gradient(135deg, #0078D4, #005a9e);
}

.transaction-icon.bg-info {
    background: linear-gradient(135deg, #00BCF2, #0090C8);
}

.transaction-info {
    flex: 1;
}

.transaction-title {
    font-weight: 600;
    margin-bottom: 4px;
}

.transaction-desc {
    font-size: 12px;
    color: var(--text-secondary);
}

.transaction-amount {
    font-weight: 700;
    font-size: 15px;
}

.transaction-amount.positive {
    color: var(--success);
}

.transaction-amount.negative {
    color: var(--danger);
}

@media (max-width: 1024px) {
    .charts-grid {
        grid-template-columns: 1fr;
    }
    
    .reports-grid {
        grid-template-columns: 1fr !important;
    }
}

@media print {
    .page-header,
    .content-card:first-of-type,
    .stats-grid,
    .card-header button,
    .chart-type-btn {
        display: none;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    console.log('Reports page loaded, initializing charts...');
    
    // Wait a bit to ensure DOM is fully ready
    setTimeout(function() {
        initCharts();
    }, 100);
});

function initCharts() {
    // Destroy existing charts safely using Chart.getChart() - Chart.js v3+ API
    ['revenueChart', 'categoryChart', 'ordersChart', 'paymentChart'].forEach(function(id) {
        const canvas = document.getElementById(id);
        if (canvas) {
            const existingChart = Chart.getChart(canvas);
            if (existingChart) {
                existingChart.destroy();
                console.log('Destroyed existing chart:', id);
            }
        }
    });
    
    console.log('All old charts cleared, creating new charts...');
    
    // Revenue Chart
    const revenueCanvas = document.getElementById('revenueChart');
    if (revenueCanvas) {
        const revenueCtx = revenueCanvas.getContext('2d');
        window.revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Pendapatan 2024',
                    data: [28, 32, 35, 30, 38, 42, 45, 43, 48, 52, 49, 55],
                    borderColor: '#0078D4',
                    backgroundColor: 'rgba(0, 120, 212, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    borderWidth: 3
                }, {
                    label: 'Pendapatan 2023',
                    data: [24, 28, 30, 27, 33, 37, 40, 38, 42, 46, 43, 48],
                    borderColor: '#00BCF2',
                    backgroundColor: 'rgba(0, 188, 242, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': Rp ' + context.parsed.y + 'M';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + value + 'M';
                            }
                        }
                    }
                }
            }
        });
        console.log('✓ Revenue chart initialized');
    }
    
    // Category Chart
    const categoryCanvas = document.getElementById('categoryChart');
    if (categoryCanvas) {
        const categoryCtx = categoryCanvas.getContext('2d');
        window.categoryChart = new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Elektronik', 'Audio', 'Fashion', 'Olahraga', 'Kesehatan', 'Aksesoris'],
                datasets: [{
                    data: [35, 25, 20, 10, 7, 3],
                    backgroundColor: [
                        '#0078D4',
                        '#16C60C',
                        '#FFB900',
                        '#00BCF2',
                        '#E81123',
                        '#8E8E93'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 15,
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });
        console.log('✓ Category chart initialized');
    }
    
    // Orders Chart
    const ordersCanvas = document.getElementById('ordersChart');
    if (ordersCanvas) {
        const ordersCtx = ordersCanvas.getContext('2d');
        window.ordersChart = new Chart(ordersCtx, {
            type: 'bar',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Jumlah Pesanan',
                    data: [24, 32, 28, 35, 42, 38, 22],
                    backgroundColor: 'rgba(0, 120, 212, 0.8)',
                    borderColor: '#0078D4',
                    borderWidth: 2,
                    borderRadius: 8,
                    borderSkipped: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y + ' pesanan';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 10
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        console.log('✓ Orders chart initialized');
    }
    
    // Payment Methods Chart
    const paymentCanvas = document.getElementById('paymentChart');
    if (paymentCanvas) {
        const paymentCtx = paymentCanvas.getContext('2d');
        window.paymentChart = new Chart(paymentCtx, {
            type: 'pie',
            data: {
                labels: ['Transfer Bank', 'E-Wallet', 'Kartu Kredit', 'COD', 'Cicilan'],
                datasets: [{
                    data: [40, 30, 15, 10, 5],
                    backgroundColor: [
                        '#0078D4',
                        '#16C60C',
                        '#FFB900',
                        '#00BCF2',
                        '#E81123'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 15,
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });
        console.log('✓ Payment chart initialized');
    }
    
    console.log('✅ All charts initialization complete');
}

function setDateRange(days) {
    $('.date-range-btn').removeClass('active');
    $(`.date-range-btn[data-range="${days}"]`).addClass('active');
    $('#customDateRange').hide();
    
    Swal.fire({
        icon: 'success',
        title: 'Periode Diubah',
        text: `Menampilkan data ${days} hari terakhir`,
        timer: 1500,
        showConfirmButton: false
    });
}

function setCustomDateRange() {
    $('.date-range-btn').removeClass('active');
    $('.date-range-btn[data-range="custom"]').addClass('active');
    $('#customDateRange').css('display', 'flex');
}

function applyCustomDate() {
    const dateFrom = $('#dateFrom').val();
    const dateTo = $('#dateTo').val();
    
    if (!dateFrom || !dateTo) {
        Swal.fire({
            icon: 'warning',
            title: 'Pilih Tanggal',
            text: 'Silakan pilih tanggal awal dan akhir',
            confirmButtonColor: '#0078D4'
        });
        return;
    }
    
    Swal.fire({
        icon: 'success',
        title: 'Periode Diterapkan',
        text: `Menampilkan data ${dateFrom} sampai ${dateTo}`,
        timer: 1500,
        showConfirmButton: false
    });
}

function changeChartType(chartName, type) {
    $(`.chart-type-btn[data-type="${type}"]`).addClass('active').siblings().removeClass('active');
    
    Swal.fire({
        icon: 'info',
        title: 'Chart Updated',
        timer: 1000,
        showConfirmButton: false
    });
}

function exportReport(format) {
    Swal.fire({
        icon: 'success',
        title: 'Export Berhasil',
        text: `Laporan berhasil di-export dalam format ${format.toUpperCase()}`,
        confirmButtonColor: '#0078D4'
    });
}

function printReport() {
    window.print();
}

function viewAllTransactions() {
    Swal.fire({
        title: 'Semua Transaksi',
        html: '<p>Menampilkan halaman semua transaksi</p>',
        confirmButtonText: 'OK',
        confirmButtonColor: '#0078D4'
    });
}
</script>
@endpush
