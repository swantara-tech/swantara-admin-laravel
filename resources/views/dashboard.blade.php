@extends('layouts.app')

@section('title', 'Dashboard - Metro Admin')
@section('breadcrumb', 'Dashboard')

@section('content')
<!-- KPI Cards -->
<div class="stats-grid stagger-children" id="statsGrid">
    <div class="stat-card hover-lift">
        <div class="stat-icon blue"><i class="fa-solid fa-users"></i></div>
        <div class="stat-value counter" data-target="12458">0</div>
        <div class="stat-label">Total Pengguna</div>
        <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +12.5%</span>
    </div>
    <div class="stat-card hover-lift">
        <div class="stat-icon green"><i class="fa-solid fa-box"></i></div>
        <div class="stat-value counter" data-target="3847">0</div>
        <div class="stat-label">Total Produk</div>
        <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +8.2%</span>
    </div>
    <div class="stat-card hover-lift">
        <div class="stat-icon orange"><i class="fa-solid fa-cart-shopping"></i></div>
        <div class="stat-value counter" data-target="7621">0</div>
        <div class="stat-label">Total Pesanan</div>
        <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +23.1%</span>
    </div>
    <div class="stat-card hover-lift">
        <div class="stat-icon red"><i class="fa-solid fa-wallet"></i></div>
        <div class="stat-value counter" data-target="892" data-suffix="M">0</div>
        <div class="stat-label">Total Pendapatan</div>
        <span class="stat-trend up"><i class="fa-solid fa-arrow-up"></i> +15.3%</span>
    </div>
</div>

<!-- Charts Row -->
<div class="charts-grid">
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
            <button class="btn-card-action">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
        <div class="card-body">
            <canvas id="revenueChart" height="260"></canvas>
        </div>
    </div>
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <h3>Pertumbuhan Pengguna</h3>
                    <p class="card-subtitle">Akun baru yang terdaftar per bulan</p>
                </div>
            </div>
            <button class="btn-card-action">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
        <div class="card-body">
            <canvas id="userGrowthChart" height="260"></canvas>
        </div>
    </div>
</div>

<!-- Second Charts Row -->
<div class="charts-grid-equal">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-chart-pie"></i>
                </div>
                <div>
                    <h3>Ringkasan Penjualan</h3>
                    <p class="card-subtitle">Distribusi penjualan per kategori</p>
                </div>
            </div>
            <button class="btn-card-action">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
        <div class="card-body">
            <canvas id="salesChart" height="220"></canvas>
        </div>
    </div>
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <div>
                    <h3>Produk Teratas</h3>
                    <p class="card-subtitle">5 produk dengan penjualan tertinggi</p>
                </div>
            </div>
            <button class="btn-card-action">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
        <div class="card-body">
            <canvas id="topProductsChart" height="220"></canvas>
        </div>
    </div>
</div>

<!-- Activity & Recent Orders -->
<div class="charts-grid">
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
@endsection
