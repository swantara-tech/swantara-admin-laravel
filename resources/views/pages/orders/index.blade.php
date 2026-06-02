@extends('layouts.app')

@section('title', 'Pesanan')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Manajemen Pesanan</h1>
                        <p>Pantau dan kelola semua pesanan pelanggan</p>
                    </div>
                    <div style="display: flex; gap: 12px;">
                        <button class="btn btn-secondary" onclick="exportOrders()">
                            <i class="fa-solid fa-download"></i> Export
                        </button>
                        <button class="btn btn-primary" onclick="showCreateOrderModal()">
                            <i class="fa-solid fa-plus"></i> Pesanan Baru
                        </button>
                    </div>
                </div>
                
                <!-- Stats Overview -->
                <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div class="stat-icon blue"><i class="fa-solid fa-clock"></i></div>
                        <div class="stat-value">12</div>
                        <div class="stat-label">Menunggu Pembayaran</div>
                        <div class="stat-change text-warning">+3 hari ini</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon orange"><i class="fa-solid fa-gear"></i></div>
                        <div class="stat-value">18</div>
                        <div class="stat-label">Sedang Diproses</div>
                        <div class="stat-change text-warning">+5 hari ini</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon cyan"><i class="fa-solid fa-truck-fast"></i></div>
                        <div class="stat-value">24</div>
                        <div class="stat-label">Dalam Pengiriman</div>
                        <div class="stat-change text-success">+8 hari ini</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon green"><i class="fa-solid fa-circle-check"></i></div>
                        <div class="stat-value">156</div>
                        <div class="stat-label">Selesai</div>
                        <div class="stat-change text-success">+12 hari ini</div>
                    </div>
                </div>
                
                <!-- Revenue Stats -->
                <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div class="stat-icon purple"><i class="fa-solid fa-money-bill-wave"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">Rp 45.2M</span>
                            <span class="stat-label">Total Pendapatan</span>
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon blue"><i class="fa-solid fa-chart-line"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">Rp 8.5M</span>
                            <span class="stat-label">Bulan Ini</span>
                        </div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon green"><i class="fa-solid fa-receipt"></i></div>
                        <div class="stat-info">
                            <span class="stat-value">Rp 2.1M</span>
                            <span class="stat-label">Rata-rata Pesanan</span>
                        </div>
                    </div>
                </div>
                
                <!-- Filters & Search -->
                <div class="content-card" style="margin-bottom: 24px;">
                    <div class="card-body">
                        <div style="display: flex; gap: 16px; margin-bottom: 20px; flex-wrap: wrap;">
                            <!-- Search -->
                            <div style="flex: 1; min-width: 250px;">
                                <div class="input-group">
                                    <i class="fa-solid fa-search"></i>
                                    <input type="text" id="searchOrder" placeholder="Cari ID pesanan atau pelanggan..." 
                                           style="width: 100%; padding: 10px 12px 10px 36px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                </div>
                            </div>
                            
                            <!-- Status Filter -->
                            <div style="min-width: 200px;">
                                <select id="filterStatus" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                    <option value="">Semua Status</option>
                                    <option value="pending">Menunggu</option>
                                    <option value="processing">Diproses</option>
                                    <option value="shipped">Dikirim</option>
                                    <option value="delivered">Selesai</option>
                                    <option value="cancelled">Dibatalkan</option>
                                </select>
                            </div>
                            
                            <!-- Date Range -->
                            <div style="min-width: 200px;">
                                <input type="date" id="filterDateFrom" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                            </div>
                            <div style="min-width: 200px;">
                                <input type="date" id="filterDateTo" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                            </div>
                            
                            <!-- Reset Button -->
                            <button class="btn btn-secondary" onclick="resetOrderFilters()">
                                <i class="fa-solid fa-rotate-right"></i> Reset
                            </button>
                        </div>
                        
                        <!-- Quick Status Tabs -->
                        <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 16px;">
                            <button class="btn btn-sm status-tab active" data-status="all" onclick="filterByStatus('all')">
                                <i class="fa-solid fa-layer-group"></i> Semua (210)
                            </button>
                            <button class="btn btn-sm btn-warning status-tab" data-status="pending" onclick="filterByStatus('pending')">
                                <i class="fa-solid fa-clock"></i> Menunggu (12)
                            </button>
                            <button class="btn btn-sm status-tab" data-status="processing" onclick="filterByStatus('processing')">
                                <i class="fa-solid fa-gear"></i> Diproses (18)
                            </button>
                            <button class="btn btn-sm btn-info status-tab" data-status="shipped" onclick="filterByStatus('shipped')">
                                <i class="fa-solid fa-truck"></i> Dikirim (24)
                            </button>
                            <button class="btn btn-sm btn-success status-tab" data-status="delivered" onclick="filterByStatus('delivered')">
                                <i class="fa-solid fa-check"></i> Selesai (156)
                            </button>
                            <button class="btn btn-sm btn-danger status-tab" data-status="cancelled" onclick="filterByStatus('cancelled')">
                                <i class="fa-solid fa-ban"></i> Dibatalkan (3)
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Orders Table -->
                <div class="content-card">
                    <div class="card-header">
                        <div class="card-header-left">
                            <div class="card-icon bg-primary">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div>
                                <h3>Daftar Pesanan</h3>
                                <p class="card-subtitle">Menampilkan <strong id="orderCount">10</strong> pesanan</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 8px;">
                            <button class="btn btn-sm btn-secondary" onclick="bulkAction()">
                                <i class="fa-solid fa-list-check"></i> Bulk Action
                            </button>
                            <button class="btn btn-sm btn-secondary" onclick="refreshOrders()">
                                <i class="fa-solid fa-rotate-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body no-padding">
                        <div class="data-table-wrapper">
                            <table id="ordersTable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 40px;">
                                            <input type="checkbox" id="selectAll" onchange="toggleSelectAll()">
                                        </th>
                                        <th>ID Pesanan</th>
                                        <th>Pelanggan</th>
                                        <th>Produk</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Pembayaran</th>
                                        <th>Tanggal</th>
                                        <th style="width: 120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="order-checkbox" data-id="ORD-001"></td>
                                        <td><a href="#" onclick="viewOrderDetail('ORD-001'); return false;"><strong>#ORD-001</strong></a></td>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <img src="https://ui-avatars.com/api/?name=Andi+Wijaya&background=0078D4&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <div>
                                                    <div style="font-weight: 500;">Andi Wijaya</div>
                                                    <div style="font-size: 12px; color: var(--text-secondary);">andi@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-weight: 500;">Smartwatch Pro</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">1 item</div>
                                        </td>
                                        <td><strong>Rp 2.500.000</strong></td>
                                        <td>
                                            <select class="status-select badge-warning" onchange="updateOrderStatus('ORD-001', this.value)">
                                                <option value="pending">Menunggu</option>
                                                <option value="processing" selected>Diproses</option>
                                                <option value="shipped">Dikirim</option>
                                                <option value="delivered">Selesai</option>
                                                <option value="cancelled">Dibatalkan</option>
                                            </select>
                                        </td>
                                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle"></i> Lunas</span></td>
                                        <td>
                                            <div style="font-weight: 500;">28 Mei 2024</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">14:30 WIB</div>
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 4px;">
                                                <button class="btn btn-sm btn-icon btn-primary" onclick="viewOrderDetail('ORD-001')" title="Detail">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary" onclick="printInvoice('ORD-001')" title="Invoice">
                                                    <i class="fa-solid fa-file-invoice"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-danger" onclick="cancelOrder('ORD-001')" title="Batalkan">
                                                    <i class="fa-solid fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="checkbox" class="order-checkbox" data-id="ORD-002"></td>
                                        <td><a href="#" onclick="viewOrderDetail('ORD-002'); return false;"><strong>#ORD-002</strong></a></td>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=16C60C&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <div>
                                                    <div style="font-weight: 500;">Budi Santoso</div>
                                                    <div style="font-size: 12px; color: var(--text-secondary);">budi@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-weight: 500;">Headphone Wireless</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">2 item</div>
                                        </td>
                                        <td><strong>Rp 2.400.000</strong></td>
                                        <td>
                                            <select class="status-select badge-info" onchange="updateOrderStatus('ORD-002', this.value)">
                                                <option value="pending">Menunggu</option>
                                                <option value="processing">Diproses</option>
                                                <option value="shipped" selected>Dikirim</option>
                                                <option value="delivered">Selesai</option>
                                                <option value="cancelled">Dibatalkan</option>
                                            </select>
                                        </td>
                                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle"></i> Lunas</span></td>
                                        <td>
                                            <div style="font-weight: 500;">27 Mei 2024</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">10:15 WIB</div>
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 4px;">
                                                <button class="btn btn-sm btn-icon btn-primary" onclick="viewOrderDetail('ORD-002')" title="Detail">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary" onclick="printInvoice('ORD-002')" title="Invoice">
                                                    <i class="fa-solid fa-file-invoice"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-danger" onclick="cancelOrder('ORD-002')" title="Batalkan">
                                                    <i class="fa-solid fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="checkbox" class="order-checkbox" data-id="ORD-003"></td>
                                        <td><a href="#" onclick="viewOrderDetail('ORD-003'); return false;"><strong>#ORD-003</strong></a></td>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <img src="https://ui-avatars.com/api/?name=Dewi+Lestari&background=FFB900&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <div>
                                                    <div style="font-weight: 500;">Dewi Lestari</div>
                                                    <div style="font-size: 12px; color: var(--text-secondary);">dewi@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-weight: 500;">Kamera Polaroid</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">1 item</div>
                                        </td>
                                        <td><strong>Rp 850.000</strong></td>
                                        <td>
                                            <select class="status-select badge-success" onchange="updateOrderStatus('ORD-003', this.value)">
                                                <option value="pending">Menunggu</option>
                                                <option value="processing">Diproses</option>
                                                <option value="shipped">Dikirim</option>
                                                <option value="delivered" selected>Selesai</option>
                                                <option value="cancelled">Dibatalkan</option>
                                            </select>
                                        </td>
                                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle"></i> Lunas</span></td>
                                        <td>
                                            <div style="font-weight: 500;">25 Mei 2024</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">16:45 WIB</div>
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 4px;">
                                                <button class="btn btn-sm btn-icon btn-primary" onclick="viewOrderDetail('ORD-003')" title="Detail">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary" onclick="printInvoice('ORD-003')" title="Invoice">
                                                    <i class="fa-solid fa-file-invoice"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-danger" onclick="cancelOrder('ORD-003')" title="Batalkan">
                                                    <i class="fa-solid fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="checkbox" class="order-checkbox" data-id="ORD-004"></td>
                                        <td><a href="#" onclick="viewOrderDetail('ORD-004'); return false;"><strong>#ORD-004</strong></a></td>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <img src="https://ui-avatars.com/api/?name=Rudi+Hartono&background=E81123&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <div>
                                                    <div style="font-weight: 500;">Rudi Hartono</div>
                                                    <div style="font-size: 12px; color: var(--text-secondary);">rudi@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-weight: 500;">Sepatu Running</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">1 item</div>
                                        </td>
                                        <td><strong>Rp 750.000</strong></td>
                                        <td>
                                            <select class="status-select badge-success" onchange="updateOrderStatus('ORD-004', this.value)">
                                                <option value="pending">Menunggu</option>
                                                <option value="processing">Diproses</option>
                                                <option value="shipped">Dikirim</option>
                                                <option value="delivered" selected>Selesai</option>
                                                <option value="cancelled">Dibatalkan</option>
                                            </select>
                                        </td>
                                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle"></i> Lunas</span></td>
                                        <td>
                                            <div style="font-weight: 500;">24 Mei 2024</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">09:20 WIB</div>
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 4px;">
                                                <button class="btn btn-sm btn-icon btn-primary" onclick="viewOrderDetail('ORD-004')" title="Detail">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary" onclick="printInvoice('ORD-004')" title="Invoice">
                                                    <i class="fa-solid fa-file-invoice"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-danger" onclick="cancelOrder('ORD-004')" title="Batalkan">
                                                    <i class="fa-solid fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="checkbox" class="order-checkbox" data-id="ORD-005"></td>
                                        <td><a href="#" onclick="viewOrderDetail('ORD-005'); return false;"><strong>#ORD-005</strong></a></td>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 10px;">
                                                <img src="https://ui-avatars.com/api/?name=Maya+Putri&background=00BCF2&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <div>
                                                    <div style="font-weight: 500;">Maya Putri</div>
                                                    <div style="font-size: 12px; color: var(--text-secondary);">maya@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-weight: 500;">Parfum Premium</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">3 item</div>
                                        </td>
                                        <td><strong>Rp 5.400.000</strong></td>
                                        <td>
                                            <select class="status-select badge-danger" onchange="updateOrderStatus('ORD-005', this.value)">
                                                <option value="pending">Menunggu</option>
                                                <option value="processing">Diproses</option>
                                                <option value="shipped">Dikirim</option>
                                                <option value="delivered">Selesai</option>
                                                <option value="cancelled" selected>Dibatalkan</option>
                                            </select>
                                        </td>
                                        <td><span class="badge badge-warning"><i class="fa-solid fa-clock"></i> Pending</span></td>
                                        <td>
                                            <div style="font-weight: 500;">23 Mei 2024</div>
                                            <div style="font-size: 12px; color: var(--text-secondary);">11:00 WIB</div>
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 4px;">
                                                <button class="btn btn-sm btn-icon btn-primary" onclick="viewOrderDetail('ORD-005')" title="Detail">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary" onclick="printInvoice('ORD-005')" title="Invoice">
                                                    <i class="fa-solid fa-file-invoice"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-danger" onclick="cancelOrder('ORD-005')" title="Batalkan">
                                                    <i class="fa-solid fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

@push('styles')
<style>
.input-group {
    position: relative;
}

.input-group i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-tertiary);
    pointer-events: none;
}

.status-tab {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.2s ease;
}

.status-tab.active {
    background: var(--accent);
    color: white;
    border-color: var(--accent);
}

.status-tab:hover {
    transform: translateY(-2px);
}

.status-select {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    border: none;
    cursor: pointer;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23fff' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 8px center;
    padding-right: 24px;
}

.status-select.badge-warning {
    background-color: #FFB900;
    color: white;
}

.status-select.badge-info {
    background-color: #00BCF2;
    color: white;
}

.status-select.badge-success {
    background-color: #16C60C;
    color: white;
}

.status-select.badge-danger {
    background-color: #E81123;
    color: white;
}

.stat-change {
    font-size: 11px;
    margin-top: 4px;
    font-weight: 500;
}

.text-warning {
    color: #FFB900;
}

.text-success {
    color: #16C60C;
}

.text-danger {
    color: #E81123;
}

#ordersTable tbody tr {
    cursor: pointer;
    transition: all 0.2s ease;
}

#ordersTable tbody tr:hover {
    background: var(--surface-hover);
}

#ordersTable tbody tr:hover td:first-child input[type="checkbox"] {
    opacity: 1;
}

.order-checkbox {
    opacity: 0.5;
    transition: opacity 0.2s ease;
    cursor: pointer;
}

.order-checkbox:hover {
    opacity: 1;
}

@media print {
    .page-header,
    .stats-grid,
    .content-card:first-of-type,
    .card-header {
        display: none;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(function(){
    if($.fn.DataTable) {
        $('#ordersTable').DataTable({
            pageLength: 10,
            order: [[7, 'desc']],
            columnDefs: [
                { orderable: false, targets: [0, 8] },
                { searchable: false, targets: [0] }
            ],
            language: { 
                search: "Cari:", 
                paginate: { 
                    previous: "Sebelumnya", 
                    next: "Selanjutnya" 
                },
                info: "Menampilkan _START_-_END_ dari _TOTAL_ pesanan",
                lengthMenu: "Tampilkan _MENU_ pesanan"
            }
        });
    }
});

function toggleSelectAll() {
    const isChecked = $('#selectAll').is(':checked');
    $('.order-checkbox').prop('checked', isChecked);
}

function filterByStatus(status) {
    $('.status-tab').removeClass('active');
    $(`.status-tab[data-status="${status}"]`).addClass('active');
    
    if (status === 'all') {
        $('#ordersTable').DataTable().search('').draw();
    } else {
        // Filter logic here
        $('#ordersTable').DataTable().search(status).draw();
    }
}

function viewOrderDetail(orderId) {
    Swal.fire({
        title: `Detail Pesanan #${orderId}`,
        width: '700px',
        html: `
            <div style="text-align: left; padding: 20px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                    <div>
                        <label style="font-size: 12px; color: var(--text-secondary);">ID Pesanan</label>
                        <div style="font-weight: 600;">#${orderId}</div>
                    </div>
                    <div>
                        <label style="font-size: 12px; color: var(--text-secondary);">Tanggal</label>
                        <div style="font-weight: 600;">28 Mei 2024, 14:30 WIB</div>
                    </div>
                    <div>
                        <label style="font-size: 12px; color: var(--text-secondary);">Pelanggan</label>
                        <div style="font-weight: 600;">Andi Wijaya</div>
                    </div>
                    <div>
                        <label style="font-size: 12px; color: var(--text-secondary);">Status</label>
                        <div><span class="badge badge-warning">Diproses</span></div>
                    </div>
                </div>
                
                <div style="border-top: 1px solid var(--border-color); padding-top: 16px;">
                    <h4 style="margin-bottom: 12px;">Produk</h4>
                    <div style="display: flex; justify-content: space-between; padding: 12px; background: var(--bg-secondary); border-radius: 8px; margin-bottom: 8px;">
                        <div>
                            <div style="font-weight: 600;">Smartwatch Pro</div>
                            <div style="font-size: 12px; color: var(--text-secondary);">Qty: 1</div>
                        </div>
                        <div style="font-weight: 600;">Rp 2.500.000</div>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px; background: var(--accent-light); border-radius: 8px; font-weight: 600;">
                        <div>Total</div>
                        <div>Rp 2.500.000</div>
                    </div>
                </div>
            </div>
        `,
        confirmButtonText: 'Tutup',
        confirmButtonColor: '#0078D4'
    });
}

function updateOrderStatus(orderId, newStatus) {
    const statusLabels = {
        'pending': 'Menunggu',
        'processing': 'Diproses',
        'shipped': 'Dikirim',
        'delivered': 'Selesai',
        'cancelled': 'Dibatalkan'
    };
    
    Swal.fire({
        title: 'Update Status?',
        html: `Ubah status pesanan <strong>#${orderId}</strong> menjadi <strong>${statusLabels[newStatus]}</strong>?`,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#0078D4',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Update!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: `Status pesanan #${orderId} berhasil diubah`,
                confirmButtonColor: '#0078D4'
            });
        }
    });
}

function cancelOrder(orderId) {
    Swal.fire({
        title: 'Batalkan Pesanan?',
        html: `Apakah Anda yakin ingin membatalkan pesanan <strong>#${orderId}</strong>?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#E81123',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Batalkan!'
    });
}

function printInvoice(orderId) {
    Swal.fire({
        icon: 'info',
        title: 'Print Invoice',
        text: `Mencetak invoice untuk pesanan #${orderId}`,
        confirmButtonColor: '#0078D4'
    });
}

function showCreateOrderModal() {
    Swal.fire({
        title: 'Pesanan Baru',
        width: '600px',
        html: `
            <input id="customerName" class="swal2-input" placeholder="Nama Pelanggan">
            <input id="customerEmail" class="swal2-input" placeholder="Email Pelanggan">
            <input id="productName" class="swal2-input" placeholder="Nama Produk">
            <input id="quantity" class="swal2-input" placeholder="Jumlah" type="number">
            <textarea id="orderNotes" class="swal2-textarea" placeholder="Catatan Pesanan"></textarea>
        `,
        confirmButtonText: 'Buat Pesanan',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function exportOrders() {
    Swal.fire({
        icon: 'success',
        title: 'Export Berhasil',
        text: 'Data pesanan berhasil di-export',
        confirmButtonColor: '#0078D4'
    });
}

function bulkAction() {
    const selected = $('.order-checkbox:checked').length;
    
    if (selected === 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Pilih Pesanan',
            text: 'Pilih minimal 1 pesanan untuk bulk action',
            confirmButtonColor: '#0078D4'
        });
        return;
    }
    
    Swal.fire({
        title: `Bulk Action (${selected} pesanan)`,
        html: `
            <select id="bulkActionType" class="swal2-select" style="width: 100%; padding: 10px;">
                <option value="">Pilih Aksi</option>
                <option value="update-status">Update Status</option>
                <option value="print-invoice">Print Invoice</option>
                <option value="cancel">Batalkan Pesanan</option>
            </select>
        `,
        confirmButtonText: 'Eksekusi',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function refreshOrders() {
    Swal.fire({
        icon: 'info',
        title: 'Refresh',
        text: 'Memuat data pesanan terbaru...',
        timer: 1000,
        showConfirmButton: false
    });
}

function resetOrderFilters() {
    $('#searchOrder').val('');
    $('#filterStatus').val('');
    $('#filterDateFrom').val('');
    $('#filterDateTo').val('');
    $('.status-tab').removeClass('active');
    $('.status-tab[data-status="all"]').addClass('active');
    
    Swal.fire({
        icon: 'success',
        title: 'Filter Direset',
        timer: 1000,
        showConfirmButton: false
    });
}
</script>
@endpush
