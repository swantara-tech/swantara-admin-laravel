@extends('layouts.app')

@section('title', 'Izin Akses')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Manajemen Permissions</h1>
                        <p>Kelola hak akses dan izin sistem secara granular</p>
                    </div>
                    <button class="btn btn-primary" onclick="showAddPermissionModal()">
                        <i class="fa-solid fa-plus"></i> Tambah Permission
                    </button>
                </div>
                
                <!-- Stats Overview -->
                <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div class="stat-icon blue"><i class="fa-solid fa-key"></i></div>
                        <div class="stat-value">24</div>
                        <div class="stat-label">Total Permissions</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon green"><i class="fa-solid fa-check-circle"></i></div>
                        <div class="stat-value">22</div>
                        <div class="stat-label">Active</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon orange"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="stat-value">6</div>
                        <div class="stat-label">Categories</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon red"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="stat-value">4</div>
                        <div class="stat-label">Linked Roles</div>
                    </div>
                </div>
                
                <!-- Permissions by Category -->
                <div class="permissions-container">
                    <!-- User Management Permissions -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-primary">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div>
                                    <h3>User Management</h3>
                                    <p class="card-subtitle">Permissions untuk mengelola pengguna</p>
                                </div>
                            </div>
                            <span class="badge badge-primary">5 Permissions</span>
                        </div>
                        <div class="card-body">
                            <div class="permission-list">
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">view-users</div>
                                        <div class="permission-desc">Melihat daftar pengguna</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('view-users')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">create-users</div>
                                        <div class="permission-desc">Membuat pengguna baru</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('create-users')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">edit-users</div>
                                        <div class="permission-desc">Mengedit data pengguna</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('edit-users')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">delete-users</div>
                                        <div class="permission-desc">Menghapus pengguna</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('delete-users')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-warning">
                                        <i class="fa-solid fa-user-shield"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">manage-user-roles</div>
                                        <div class="permission-desc">Mengelola role pengguna</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('manage-user-roles')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Role & Permission Management -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-success">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div>
                                    <h3>Role & Permission</h3>
                                    <p class="card-subtitle">Permissions untuk role dan access control</p>
                                </div>
                            </div>
                            <span class="badge badge-success">4 Permissions</span>
                        </div>
                        <div class="card-body">
                            <div class="permission-list">
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">view-roles</div>
                                        <div class="permission-desc">Melihat daftar role</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('view-roles')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-list"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">view-permissions</div>
                                        <div class="permission-desc">Melihat daftar permissions</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('view-permissions')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-warning">
                                        <i class="fa-solid fa-shield-halved"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">manage-roles</div>
                                        <div class="permission-desc">Mengelola role dan permissions</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('manage-roles')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-danger">
                                        <i class="fa-solid fa-key"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">assign-permissions</div>
                                        <div class="permission-desc">Menassign permissions ke role</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('assign-permissions')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Management -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-warning">
                                    <i class="fa-solid fa-box"></i>
                                </div>
                                <div>
                                    <h3>Product Management</h3>
                                    <p class="card-subtitle">Permissions untuk mengelola produk</p>
                                </div>
                            </div>
                            <span class="badge badge-warning">4 Permissions</span>
                        </div>
                        <div class="card-body">
                            <div class="permission-list">
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">view-products</div>
                                        <div class="permission-desc">Melihat daftar produk</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('view-products')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">create-products</div>
                                        <div class="permission-desc">Menambah produk baru</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('create-products')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">edit-products</div>
                                        <div class="permission-desc">Mengedit produk</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('edit-products')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">delete-products</div>
                                        <div class="permission-desc">Menghapus produk</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('delete-products')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Management -->
                    <div class="content-card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <div class="card-icon bg-info">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                                <div>
                                    <h3>Order Management</h3>
                                    <p class="card-subtitle">Permissions untuk mengelola pesanan</p>
                                </div>
                            </div>
                            <span class="badge badge-info">4 Permissions</span>
                        </div>
                        <div class="card-body">
                            <div class="permission-list">
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-eye"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">view-orders</div>
                                        <div class="permission-desc">Melihat daftar pesanan</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('view-orders')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-success">
                                        <i class="fa-solid fa-list-check"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">process-orders</div>
                                        <div class="permission-desc">Memproses pesanan</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('process-orders')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-warning">
                                        <i class="fa-solid fa-truck"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">update-order-status</div>
                                        <div class="permission-desc">Update status pesanan</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('update-order-status')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="permission-item">
                                    <div class="permission-icon bg-danger">
                                        <i class="fa-solid fa-ban"></i>
                                    </div>
                                    <div class="permission-info">
                                        <div class="permission-name">cancel-orders</div>
                                        <div class="permission-desc">Membatalkan pesanan</div>
                                    </div>
                                    <div class="permission-actions">
                                        <button class="btn btn-sm btn-icon btn-secondary" onclick="editPermission('cancel-orders')">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('styles')
<style>
.permissions-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
    gap: 20px;
}

.permission-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.permission-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    background: var(--bg-secondary);
    border-radius: 8px;
    transition: all 0.2s ease;
}

.permission-item:hover {
    background: var(--surface-hover);
    transform: translateX(4px);
}

.permission-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.permission-icon.bg-success {
    background: linear-gradient(135deg, #16C60C, #107C10);
    color: white;
}

.permission-icon.bg-warning {
    background: linear-gradient(135deg, #FFB900, #FF8C00);
    color: white;
}

.permission-icon.bg-danger {
    background: linear-gradient(135deg, #E81123, #D13438);
    color: white;
}

.permission-info {
    flex: 1;
}

.permission-name {
    font-weight: 600;
    font-size: 13px;
    color: var(--text-primary);
    margin-bottom: 2px;
}

.permission-desc {
    font-size: 12px;
    color: var(--text-secondary);
}

.permission-actions {
    display: flex;
    gap: 4px;
}

@media (max-width: 768px) {
    .permissions-container {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@push('scripts')
<script>
function showAddPermissionModal() {
    Swal.fire({
        title: 'Tambah Permission Baru',
        html: `
            <input id="permName" class="swal2-input" placeholder="Nama Permission (contoh: view-users)">
            <textarea id="permDesc" class="swal2-textarea" placeholder="Deskripsi Permission"></textarea>
            <select id="permCategory" class="swal2-select" style="width: 100%; padding: 10px; margin: 10px 0;">
                <option value="">Pilih Kategori</option>
                <option value="user">User Management</option>
                <option value="role">Role & Permission</option>
                <option value="product">Product Management</option>
                <option value="order">Order Management</option>
            </select>
        `,
        confirmButtonText: 'Simpan',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function editPermission(permName) {
    Swal.fire({
        title: `Edit Permission`,
        html: `
            <p style="margin-bottom: 16px;"><strong>${permName}</strong></p>
            <input id="permDesc" class="swal2-input" placeholder="Deskripsi Permission" style="width: 100%;">
        `,
        confirmButtonText: 'Update',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}
</script>
@endpush
