@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Manajemen Produk</h1>
                        <p>Kelola semua produk yang tersedia di toko</p>
                    </div>
                    <button class="btn btn-primary" onclick="showAddProductModal()">
                        <i class="fa-solid fa-plus"></i> Tambah Produk
                    </button>
                </div>
                
                <!-- Stats Overview -->
                <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div class="stat-icon blue"><i class="fa-solid fa-box"></i></div>
                        <div class="stat-value">156</div>
                        <div class="stat-label">Total Produk</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon green"><i class="fa-solid fa-check-circle"></i></div>
                        <div class="stat-value">142</div>
                        <div class="stat-label">Stok Tersedia</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon orange"><i class="fa-solid fa-exclamation-triangle"></i></div>
                        <div class="stat-value">12</div>
                        <div class="stat-label">Stok Menipis</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon red"><i class="fa-solid fa-times-circle"></i></div>
                        <div class="stat-value">2</div>
                        <div class="stat-label">Stok Habis</div>
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
                                    <input type="text" id="searchProduct" placeholder="Cari produk..." 
                                           style="width: 100%; padding: 10px 12px 10px 36px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                </div>
                            </div>
                            
                            <!-- Category Filter -->
                            <div style="min-width: 200px;">
                                <select id="filterCategory" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                    <option value="">Semua Kategori</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="audio">Audio</option>
                                    <option value="aksesoris">Aksesoris</option>
                                    <option value="olahraga">Olahraga</option>
                                    <option value="kesehatan">Kesehatan</option>
                                    <option value="fashion">Fashion</option>
                                </select>
                            </div>
                            
                            <!-- Status Filter -->
                            <div style="min-width: 200px;">
                                <select id="filterStatus" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                    <option value="">Semua Status</option>
                                    <option value="available">Stok Tersedia</option>
                                    <option value="low">Stok Menipis</option>
                                    <option value="out">Stok Habis</option>
                                </select>
                            </div>
                            
                            <!-- Sort -->
                            <div style="min-width: 200px;">
                                <select id="sortBy" style="width: 100%; padding: 10px 12px; border: 1px solid var(--border-color); border-radius: 8px; background: var(--bg-secondary); color: var(--text-primary);">
                                    <option value="newest">Terbaru</option>
                                    <option value="price-low">Harga: Rendah - Tinggi</option>
                                    <option value="price-high">Harga: Tinggi - Rendah</option>
                                    <option value="name">Nama: A - Z</option>
                                    <option value="stock">Stok: Terbanyak</option>
                                </select>
                            </div>
                            
                            <!-- Reset Button -->
                            <button class="btn btn-secondary" onclick="resetFilters()">
                                <i class="fa-solid fa-rotate-right"></i> Reset
                            </button>
                        </div>
                        
                        <!-- Active Filters Display -->
                        <div id="activeFilters" style="display: none; padding: 12px; background: var(--bg-secondary); border-radius: 8px; margin-bottom: 16px;">
                            <div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                                <i class="fa-solid fa-filter" style="color: var(--accent);"></i>
                                <span style="font-weight: 500; font-size: 13px;">Filter Aktif:</span>
                                <div id="filterTags" style="display: flex; gap: 8px; flex-wrap: wrap;"></div>
                                <button class="btn btn-sm btn-danger" onclick="resetFilters()" style="margin-left: auto;">
                                    <i class="fa-solid fa-times"></i> Hapus Semua
                                </button>
                            </div>
                        </div>
                        
                        <!-- View Toggle -->
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <p style="margin: 0; color: var(--text-secondary); font-size: 13px;">
                                Menampilkan <strong id="productCount">6</strong> produk
                            </p>
                            <div style="display: flex; gap: 8px;">
                                <button class="btn btn-sm btn-primary view-toggle active" data-view="grid" onclick="switchView('grid')">
                                    <i class="fa-solid fa-grid-2"></i> Grid
                                </button>
                                <button class="btn btn-sm btn-secondary view-toggle" data-view="list" onclick="switchView('list')">
                                    <i class="fa-solid fa-list"></i> List
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product Grid -->
                <div id="productGrid" class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card hover-lift" data-category="elektronik" data-stock="45" data-price="2500000" data-name="Smartwatch Pro">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=300&fit=crop" alt="Smartwatch Pro">
                            <div class="product-badge badge-success">Tersedia</div>
                            <div class="product-actions-overlay">
                                <button class="btn btn-icon btn-primary" onclick="viewProduct('Smartwatch Pro')">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary" onclick="editProduct('Smartwatch Pro')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-icon btn-danger" onclick="deleteProduct('Smartwatch Pro')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Elektronik</div>
                            <h3 class="product-name">Smartwatch Pro</h3>
                            <div class="product-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <span>(4.5)</span>
                            </div>
                            <div class="product-price">Rp 2.500.000</div>
                            <div class="product-stock">
                                <i class="fa-solid fa-box"></i>
                                <span>Stok: 45</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="product-card hover-lift" data-category="audio" data-stock="120" data-price="1200000" data-name="Headphone Wireless">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop" alt="Headphone Wireless">
                            <div class="product-badge badge-success">Tersedia</div>
                            <div class="product-actions-overlay">
                                <button class="btn btn-icon btn-primary" onclick="viewProduct('Headphone Wireless')">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary" onclick="editProduct('Headphone Wireless')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-icon btn-danger" onclick="deleteProduct('Headphone Wireless')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Audio</div>
                            <h3 class="product-name">Headphone Wireless</h3>
                            <div class="product-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <div class="product-price">Rp 1.200.000</div>
                            <div class="product-stock">
                                <i class="fa-solid fa-box"></i>
                                <span>Stok: 120</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="product-card hover-lift" data-category="aksesoris" data-stock="8" data-price="850000" data-name="Kamera Polaroid">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=400&h=300&fit=crop" alt="Kamera Polaroid">
                            <div class="product-badge badge-warning">Stok Menipis</div>
                            <div class="product-actions-overlay">
                                <button class="btn btn-icon btn-primary" onclick="viewProduct('Kamera Polaroid')">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary" onclick="editProduct('Kamera Polaroid')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-icon btn-danger" onclick="deleteProduct('Kamera Polaroid')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Aksesoris</div>
                            <h3 class="product-name">Kamera Polaroid</h3>
                            <div class="product-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <span>(4.0)</span>
                            </div>
                            <div class="product-price">Rp 850.000</div>
                            <div class="product-stock">
                                <i class="fa-solid fa-box"></i>
                                <span>Stok: 8</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 4 -->
                    <div class="product-card hover-lift" data-category="olahraga" data-stock="67" data-price="750000" data-name="Sepatu Running">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1546868871-af0de0ae72be?w=400&h=300&fit=crop" alt="Sepatu Running">
                            <div class="product-badge badge-success">Tersedia</div>
                            <div class="product-actions-overlay">
                                <button class="btn btn-icon btn-primary" onclick="viewProduct('Sepatu Running')">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary" onclick="editProduct('Sepatu Running')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-icon btn-danger" onclick="deleteProduct('Sepatu Running')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Olahraga</div>
                            <h3 class="product-name">Sepatu Running</h3>
                            <div class="product-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <span>(4.7)</span>
                            </div>
                            <div class="product-price">Rp 750.000</div>
                            <div class="product-stock">
                                <i class="fa-solid fa-box"></i>
                                <span>Stok: 67</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 5 -->
                    <div class="product-card hover-lift" data-category="kesehatan" data-stock="3" data-price="1800000" data-name="Parfum Premium">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?w=400&h=300&fit=crop" alt="Parfum Premium">
                            <div class="product-badge badge-danger">Hampir Habis</div>
                            <div class="product-actions-overlay">
                                <button class="btn btn-icon btn-primary" onclick="viewProduct('Parfum Premium')">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary" onclick="editProduct('Parfum Premium')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-icon btn-danger" onclick="deleteProduct('Parfum Premium')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Kesehatan</div>
                            <h3 class="product-name">Parfum Premium</h3>
                            <div class="product-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(4.9)</span>
                            </div>
                            <div class="product-price">Rp 1.800.000</div>
                            <div class="product-stock">
                                <i class="fa-solid fa-box"></i>
                                <span>Stok: 3</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 6 -->
                    <div class="product-card hover-lift" data-category="fashion" data-stock="12" data-price="3200000" data-name="Sneakers Limited">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=400&h=300&fit=crop" alt="Sneakers Limited">
                            <div class="product-badge badge-warning">Limited</div>
                            <div class="product-actions-overlay">
                                <button class="btn btn-icon btn-primary" onclick="viewProduct('Sneakers Limited')">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-secondary" onclick="editProduct('Sneakers Limited')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-icon btn-danger" onclick="deleteProduct('Sneakers Limited')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">Fashion</div>
                            <h3 class="product-name">Sneakers Limited</h3>
                            <div class="product-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <div class="product-price">Rp 3.200.000</div>
                            <div class="product-stock">
                                <i class="fa-solid fa-box"></i>
                                <span>Stok: 12</span>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('styles')
<style>
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.product-card {
    background: var(--bg-primary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.product-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.product-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    z-index: 2;
}

.product-badge.badge-success {
    background: linear-gradient(135deg, #16C60C, #107C10);
    color: white;
}

.product-badge.badge-warning {
    background: linear-gradient(135deg, #FFB900, #FF8C00);
    color: white;
}

.product-badge.badge-danger {
    background: linear-gradient(135deg, #E81123, #D13438);
    color: white;
}

.product-actions-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 16px;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    display: flex;
    gap: 8px;
    justify-content: center;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s ease;
}

.product-card:hover .product-actions-overlay {
    opacity: 1;
    transform: translateY(0);
}

.product-info {
    padding: 16px;
}

.product-category {
    font-size: 11px;
    color: var(--accent);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 6px;
}

.product-name {
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0 0 8px;
    line-height: 1.3;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 4px;
    margin-bottom: 10px;
    font-size: 12px;
    color: #FFB900;
}

.product-rating span {
    color: var(--text-secondary);
    margin-left: 4px;
}

.product-price {
    font-size: 20px;
    font-weight: 700;
    color: var(--accent);
    margin-bottom: 8px;
}

.product-stock {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: var(--text-secondary);
}

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

/* List View */
.product-grid.list-view {
    grid-template-columns: 1fr;
}

.product-grid.list-view .product-card {
    display: grid;
    grid-template-columns: 200px 1fr;
}

.product-grid.list-view .product-image {
    height: 100%;
}

.view-toggle.active {
    background: var(--accent);
    color: white;
    border-color: var(--accent);
}

.filter-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    background: var(--accent-light);
    color: var(--accent);
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
}

.filter-tag button {
    background: none;
    border: none;
    color: var(--accent);
    cursor: pointer;
    padding: 0;
    font-size: 14px;
    line-height: 1;
}

@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: 1fr;
    }
    
    .product-grid.list-view .product-card {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Filter functionality
$('#filterCategory, #filterStatus, #sortBy').on('change', function() {
    applyFilters();
});

$('#searchProduct').on('keyup', function() {
    applyFilters();
});

function applyFilters() {
    const category = $('#filterCategory').val();
    const status = $('#filterStatus').val();
    const search = $('#searchProduct').val().toLowerCase();
    const sortBy = $('#sortBy').val();
    
    let visibleCount = 0;
    
    $('.product-card').each(function() {
        const cardCategory = $(this).data('category');
        const cardStock = $(this).data('stock');
        const cardName = $(this).data('name').toLowerCase();
        
        let show = true;
        
        // Filter by category
        if (category && cardCategory !== category) {
            show = false;
        }
        
        // Filter by status
        if (status) {
            if (status === 'available' && cardStock < 10) show = false;
            if (status === 'low' && (cardStock < 10 || cardStock > 20)) show = false;
            if (status === 'out' && cardStock > 0) show = false;
        }
        
        // Filter by search
        if (search && !cardName.includes(search)) {
            show = false;
        }
        
        $(this).toggle(show);
        if (show) visibleCount++;
    });
    
    $('#productCount').text(visibleCount);
    updateActiveFilters(category, status, search);
}

function updateActiveFilters(category, status, search) {
    const tags = [];
    
    if (category) {
        tags.push(`<span class="filter-tag">${category} <button onclick="$('#filterCategory').val(''); applyFilters();">×</button></span>`);
    }
    if (status) {
        tags.push(`<span class="filter-tag">${status} <button onclick="$('#filterStatus').val(''); applyFilters();">×</button></span>`);
    }
    if (search) {
        tags.push(`<span class="filter-tag">"${search}" <button onclick="$('#searchProduct').val(''); applyFilters();">×</button></span>`);
    }
    
    if (tags.length > 0) {
        $('#activeFilters').show();
        $('#filterTags').html(tags.join(''));
    } else {
        $('#activeFilters').hide();
    }
}

function resetFilters() {
    $('#filterCategory').val('');
    $('#filterStatus').val('');
    $('#searchProduct').val('');
    $('#sortBy').val('newest');
    applyFilters();
}

function switchView(view) {
    $('.view-toggle').removeClass('active');
    $(`.view-toggle[data-view="${view}"]`).addClass('active');
    
    if (view === 'list') {
        $('#productGrid').addClass('list-view');
    } else {
        $('#productGrid').removeClass('list-view');
    }
}

function showAddProductModal() {
    Swal.fire({
        title: 'Tambah Produk Baru',
        width: '600px',
        html: `
            <input id="productName" class="swal2-input" placeholder="Nama Produk">
            <input id="productPrice" class="swal2-input" placeholder="Harga">
            <input id="productStock" class="swal2-input" placeholder="Stok">
            <select id="productCategory" class="swal2-select" style="width: 100%; padding: 10px; margin: 10px 0;">
                <option value="">Pilih Kategori</option>
                <option value="elektronik">Elektronik</option>
                <option value="audio">Audio</option>
                <option value="aksesoris">Aksesoris</option>
                <option value="olahraga">Olahraga</option>
                <option value="kesehatan">Kesehatan</option>
                <option value="fashion">Fashion</option>
            </select>
            <textarea id="productDesc" class="swal2-textarea" placeholder="Deskripsi Produk"></textarea>
        `,
        confirmButtonText: 'Simpan',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function viewProduct(name) {
    Swal.fire({
        title: name,
        html: `<p>Detail produk ${name}</p>`,
        confirmButtonText: 'Tutup',
        confirmButtonColor: '#0078D4'
    });
}

function editProduct(name) {
    Swal.fire({
        title: `Edit: ${name}`,
        html: `<p>Form edit produk ${name}</p>`,
        confirmButtonText: 'Update',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function deleteProduct(name) {
    Swal.fire({
        title: 'Hapus Produk?',
        html: `Apakah Anda yakin ingin menghapus <strong>${name}</strong>?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#E81123',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Hapus!'
    });
}
</script>
@endpush
