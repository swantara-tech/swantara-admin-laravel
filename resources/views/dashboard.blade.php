@extends('layouts.app')

@section('title', 'Dashboard - Metro Admin')
@section('breadcrumb', 'Dashboard')

@section('content')
<!-- KPI Cards -->
<div class="sw-row sw-gap-3 mb-3" id="statsGrid">
    <div class="sw-col-12 sw-col-md-6 sw-col-lg-3">
        <div class="stat-card hover-lift">
            <div class="stat-icon blue"><i class="fa-solid fa-users"></i></div>
            <div class="stat-value counter" data-target="12458">0</div>
            <div class="stat-label">Total Pengguna</div>
            <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +12.5%</span>
        </div>
    </div>
    <div class="sw-col-12 sw-col-md-6 sw-col-lg-3">
        <div class="stat-card hover-lift">
            <div class="stat-icon green"><i class="fa-solid fa-box"></i></div>
            <div class="stat-value counter" data-target="3847">0</div>
            <div class="stat-label">Total Produk</div>
            <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +8.2%</span>
        </div>
    </div>
    <div class="sw-col-12 sw-col-md-6 sw-col-lg-3">
        <div class="stat-card hover-lift">
            <div class="stat-icon orange"><i class="fa-solid fa-cart-shopping"></i></div>
            <div class="stat-value counter" data-target="7621">0</div>
            <div class="stat-label">Total Pesanan</div>
            <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +23.1%</span>
        </div>
    </div>
    <div class="sw-col-12 sw-col-md-6 sw-col-lg-3">
        <div class="stat-card hover-lift">
            <div class="stat-icon red"><i class="fa-solid fa-wallet"></i></div>
            <div class="stat-value counter" data-target="892" data-suffix="M">0</div>
            <div class="stat-label">Total Pendapatan</div>
            <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +15.3%</span>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="sw-row sw-gap-3 mb-3" style="display: flex; align-items: stretch;">
    <div class="sw-col-12">
        <div class="content-card">
            <div class="card-header">
                <div class="card-header-left">
                    <div class="card-icon bg-primary">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div>
                        <h3>Analitik Pendapatan</h3>
                        <p class="card-subtitle">Performa pendapatan 12 bulan terakhir</p>
                    </div>
                </div>
                <div class="sw-dropdown">
                    <button class="btn-card-action" data-dropdown-toggle>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-eye"></i>
                            <span>View Details</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-pen"></i>
                            <span>Edit</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-download"></i>
                            <span>Export</span>
                        </a>
                        <div class="sw-dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item text-danger">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 300px;">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second Row: User Growth + Sales + Top Products -->

<div class="sw-row sw-gap-3 mb-3" style="display: flex; align-items: stretch;">
    <div class="sw-col-4 sw-col-lg-6 sw-col-md-12">
        <div class="content-card">
            <div class="card-header">
                <div class="card-header-left">
                    <div class="card-icon bg-success">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <h3>Pertumbuhan Pengguna</h3>
                        <p class="card-subtitle">Akun baru per bulan</p>
                    </div>
                </div>
                <div class="sw-dropdown">
                    <button class="btn-card-action" data-dropdown-toggle>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-eye"></i>
                            <span>View Details</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-pen"></i>
                            <span>Edit</span>
                        </a>
                        <div class="sw-dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item text-danger">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 280px;">
                    <canvas id="userGrowthChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="sw-col-4 sw-col-lg-6 sw-col-md-12">
        <div class="content-card">
            <div class="card-header">
                <div class="card-header-left">
                    <div class="card-icon bg-warning">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div>
                        <h3>Ringkasan Penjualan</h3>
                        <p class="card-subtitle">Per kategori</p>
                    </div>
                </div>
                <div class="sw-dropdown">
                    <button class="btn-card-action" data-dropdown-toggle>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-eye"></i>
                            <span>View Details</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-download"></i>
                            <span>Export</span>
                        </a>
                        <div class="sw-dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item text-danger">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 280px;">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="sw-col-4 sw-col-lg-6 sw-col-md-12">
        <div class="content-card">
            <div class="card-header">
                <div class="card-header-left">
                    <div class="card-icon bg-info">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div>
                        <h3>Produk Teratas</h3>
                        <p class="card-subtitle">Top 5 penjualan</p>
                    </div>
                </div>
                <div class="sw-dropdown">
                    <button class="btn-card-action" data-dropdown-toggle>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-eye"></i>
                            <span>View Details</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-pen"></i>
                            <span>Edit</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-chart-line"></i>
                            <span>Analytics</span>
                        </a>
                        <div class="sw-dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item text-danger">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 280px;">
                    <canvas id="topProductsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Activity & Recent Orders -->
<div class="sw-row sw-gap-3" style="display: flex; align-items: stretch;">
    <div class="sw-col-6 sw-col-lg-12">
        <div class="content-card">
            <div class="card-header">
                <div class="card-header-left">
                    <div class="card-icon bg-primary">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <div>
                        <h3>Aktivitas Terbaru</h3>
                        <p class="card-subtitle">Log aktivitas sistem terkini</p>
                    </div>
                </div>
                <button class="btn-card-action">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>
            <div class="card-body">
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-dot" style="background: var(--accent)"></div>
                        <div class="activity-content">
                            <p><strong>Andi Wijaya</strong> membuat pesanan baru #ORD-2891</p>
                            <time>3 menit lalu</time>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-dot" style="background: var(--success)"></div>
                        <div class="activity-content">
                            <p>Pembayaran untuk pesanan <strong>#ORD-2887</strong> dikonfirmasi</p>
                            <time>12 menit lalu</time>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-dot" style="background: var(--warning)"></div>
                        <div class="activity-content">
                            <p>Stok <strong>Laptop Gaming Z</strong> tersisa 5 unit</p>
                            <time>45 menit lalu</time>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-dot" style="background: var(--info)"></div>
                        <div class="activity-content">
                            <p><strong>Siti Rahayu</strong> mendaftar sebagai pengguna baru</p>
                            <time>1 jam lalu</time>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sw-col-6 sw-col-lg-12">
        <div class="content-card">
            <div class="card-header">
                <div class="card-header-left">
                    <div class="card-icon bg-success">
                        <i class="fa-solid fa-receipt"></i>
                    </div>
                    <div>
                        <h3>Pesanan Terbaru</h3>
                        <p class="card-subtitle">Daftar pesanan yang baru masuk</p>
                    </div>
                </div>
                <button class="btn-card-action">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>
            <div class="card-body no-padding">
                <div class="data-table-wrapper">
                    <table>
                        <thead><tr><th>ID</th><th>Pelanggan</th><th>Total</th><th>Status</th></tr></thead>
                        <tbody>
                            <tr><td>#2891</td><td>Andi Wijaya</td><td>Rp 2.450.000</td><td><span class="badge badge-warning">Pending</span></td></tr>
                            <tr><td>#2890</td><td>Budi Santoso</td><td>Rp 890.000</td><td><span class="badge badge-success">Selesai</span></td></tr>
                            <tr><td>#2889</td><td>Dewi Lestari</td><td>Rp 1.250.000</td><td><span class="badge badge-info">Dikirim</span></td></tr>
                            <tr><td>#2888</td><td>Rudi Hartono</td><td>Rp 3.780.000</td><td><span class="badge badge-success">Selesai</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Chart.js Global Configuration
    Chart.defaults.responsive = true;
    Chart.defaults.maintainAspectRatio = false;

    // Store chart instances for resize handling
    var charts = {};

    // Revenue Chart
    var $revenueCanvas = $('#revenueChart');
    if ($revenueCanvas.length) {
        charts.revenue = new Chart($revenueCanvas[0], {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Pendapatan (Rp)',
                    data: [65000000, 78000000, 90000000, 85000000, 95000000, 110000000, 125000000, 118000000, 135000000, 142000000, 155000000, 165000000],
                    fill: true,
                    backgroundColor: 'rgba(76, 175, 80, 0.1)',
                    borderColor: '#4CAF50',
                    borderWidth: 2,
                    tension: 0.4,
                    pointRadius: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#4CAF50',
                    pointBorderWidth: 2,
                    pointHoverRadius: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 750
                },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.8)',
                        padding: 12,
                        cornerRadius: 8,
                        callbacks: {
                            label: function(context) {
                                return 'Rp ' + context.parsed.y.toLocaleString('id-ID');
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + (value / 1000000) + 'M';
                            }
                        },
                        grid: { color: 'rgba(0,0,0,0.05)' }
                    },
                    x: {
                        grid: { display: false }
                    }
                }
            }
        });
    }

    // User Growth Chart
    var $userGrowthCanvas = $('#userGrowthChart');
    if ($userGrowthCanvas.length) {
        charts.userGrowth = new Chart($userGrowthCanvas[0], {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Pengguna Baru',
                    data: [450, 520, 680, 590, 740, 890, 950, 870, 1020, 1150, 1280, 1340],
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    borderColor: '#3B82F6',
                    borderWidth: 1,
                    borderRadius: 6,
                    maxBarThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 750
                },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.8)',
                        padding: 12,
                        cornerRadius: 8
                    }
                },
                scales: {
                    y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.05)' } },
                    x: { grid: { display: false } }
                }
            }
        });
    }

    // Sales Chart
    var $salesCanvas = $('#salesChart');
    if ($salesCanvas.length) {
        charts.sales = new Chart($salesCanvas[0], {
            type: 'doughnut',
            data: {
                labels: ['Elektronik', 'Fashion', 'Makanan', 'Minuman', 'Lainnya'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#3B82F6',
                        '#10B981',
                        '#F59E0B',
                        '#EF4444',
                        '#6B7280'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                animation: {
                    duration: 750
                },
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { padding: 15, usePointStyle: true }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.8)',
                        padding: 12,
                        cornerRadius: 8,
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });
    }

    // Top Products Chart
    var $topProductsCanvas = $('#topProductsChart');
    if ($topProductsCanvas.length) {
        charts.topProducts = new Chart($topProductsCanvas[0], {
            type: 'bar',
            data: {
                labels: ['iPhone 15', 'MacBook Pro', 'AirPods Pro', 'iPad Air', 'Apple Watch'],
                datasets: [{
                    label: 'Penjualan',
                    data: [245000000, 198000000, 156000000, 134000000, 89000000],
                    backgroundColor: 'rgba(168, 85, 247, 0.8)',
                    borderColor: '#A855F7',
                    borderWidth: 1,
                    borderRadius: 6,
                    maxBarThickness: 35
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 750
                },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.8)',
                        padding: 12,
                        cornerRadius: 8,
                        callbacks: {
                            label: function(context) {
                                return 'Rp ' + context.parsed.x.toLocaleString('id-ID');
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + (value / 1000000) + 'M';
                            }
                        },
                        grid: { color: 'rgba(0,0,0,0.05)' }
                    },
                    y: { grid: { display: false } }
                }
            }
        });
    }

    // Force resize all charts on window resize
    var resizeTimeout;
    $(window).on('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            $.each(charts, function(key, chart) {
                if (chart && chart.resize) {
                    chart.resize();
                }
            });
        }, 100);
    });
});
</script>
@endpush
