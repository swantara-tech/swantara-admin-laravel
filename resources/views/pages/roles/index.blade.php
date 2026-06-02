@extends('layouts.app')

@section('title', 'Role & Permissions')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Manajemen Role</h1>
                        <p>Kelola role dan hak akses pengguna dalam sistem</p>
                    </div>
                    <button class="btn btn-primary" onclick="showAddRoleModal()">
                        <i class="fa-solid fa-plus"></i> Tambah Role Baru
                    </button>
                </div>
                
                <!-- Stats Overview -->
                <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr); margin-bottom: 24px;">
                    <div class="stat-card hover-lift">
                        <div class="stat-icon blue"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="stat-value">4</div>
                        <div class="stat-label">Total Role</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon green"><i class="fa-solid fa-check-circle"></i></div>
                        <div class="stat-value">4</div>
                        <div class="stat-label">Role Aktif</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon orange"><i class="fa-solid fa-users"></i></div>
                        <div class="stat-value">31</div>
                        <div class="stat-label">Total Pengguna</div>
                    </div>
                    <div class="stat-card hover-lift">
                        <div class="stat-icon red"><i class="fa-solid fa-key"></i></div>
                        <div class="stat-value">24</div>
                        <div class="stat-label">Total Permissions</div>
                    </div>
                </div>
                
                <!-- Roles Grid -->
                <div class="roles-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 20px; margin-bottom: 32px;">
                    <!-- Administrator Role -->
                    <div class="content-card hover-lift" style="border-left: 4px solid #0078D4;">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #0078D4, #005a9e); display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-shield-halved" style="font-size: 24px; color: white;"></i>
                                    </div>
                                    <div>
                                        <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Administrator</h3>
                                        <p style="margin: 4px 0 0; font-size: 12px; color: var(--text-secondary);">Super Admin Access</p>
                                    </div>
                                </div>
                                <span class="badge badge-success" style="font-size: 11px;">Aktif</span>
                            </div>
                            
                            <p style="color: var(--text-secondary); font-size: 13px; margin-bottom: 16px; line-height: 1.6;">
                                Akses penuh ke semua fitur sistem termasuk manajemen pengguna, role, dan pengaturan sistem.
                            </p>
                            
                            <div style="display: flex; gap: 16px; margin-bottom: 16px; padding: 12px; background: var(--bg-secondary); border-radius: 8px;">
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: var(--accent);">3</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Pengguna</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: var(--accent);">24</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Permissions</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: var(--success);">100%</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Access</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 8px;">
                                <button class="btn btn-sm btn-primary" style="flex: 1;" onclick="showRoleDetail('Administrator')">
                                    <i class="fa-solid fa-eye"></i> Detail
                                </button>
                                <button class="btn btn-sm btn-secondary" onclick="editRole('Administrator')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="deleteRole('Administrator')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Editor Role -->
                    <div class="content-card hover-lift" style="border-left: 4px solid #16C60C;">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #16C60C, #107C10); display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-pen-to-square" style="font-size: 24px; color: white;"></i>
                                    </div>
                                    <div>
                                        <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Editor</h3>
                                        <p style="margin: 4px 0 0; font-size: 12px; color: var(--text-secondary);">Content Manager</p>
                                    </div>
                                </div>
                                <span class="badge badge-success" style="font-size: 11px;">Aktif</span>
                            </div>
                            
                            <p style="color: var(--text-secondary); font-size: 13px; margin-bottom: 16px; line-height: 1.6;">
                                Dapat mengedit dan mengelola konten termasuk produk, pesanan, dan laporan.
                            </p>
                            
                            <div style="display: flex; gap: 16px; margin-bottom: 16px; padding: 12px; background: var(--bg-secondary); border-radius: 8px;">
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: #16C60C;">8</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Pengguna</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: #16C60C;">16</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Permissions</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: var(--success);">67%</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Access</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 8px;">
                                <button class="btn btn-sm btn-primary" style="flex: 1;" onclick="showRoleDetail('Editor')">
                                    <i class="fa-solid fa-eye"></i> Detail
                                </button>
                                <button class="btn btn-sm btn-secondary" onclick="editRole('Editor')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="deleteRole('Editor')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Manager Role -->
                    <div class="content-card hover-lift" style="border-left: 4px solid #00BCF2;">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #00BCF2, #0078D4); display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-chart-line" style="font-size: 24px; color: white;"></i>
                                    </div>
                                    <div>
                                        <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Manager</h3>
                                        <p style="margin: 4px 0 0; font-size: 12px; color: var(--text-secondary);">Team Lead</p>
                                    </div>
                                </div>
                                <span class="badge badge-success" style="font-size: 11px;">Aktif</span>
                            </div>
                            
                            <p style="color: var(--text-secondary); font-size: 13px; margin-bottom: 16px; line-height: 1.6;">
                                Mengelola tim dan laporan, monitoring performa, dan analisis bisnis.
                            </p>
                            
                            <div style="display: flex; gap: 16px; margin-bottom: 16px; padding: 12px; background: var(--bg-secondary); border-radius: 8px;">
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: #00BCF2;">5</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Pengguna</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: #00BCF2;">12</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Permissions</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: var(--success);">50%</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Access</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 8px;">
                                <button class="btn btn-sm btn-primary" style="flex: 1;" onclick="showRoleDetail('Manager')">
                                    <i class="fa-solid fa-eye"></i> Detail
                                </button>
                                <button class="btn btn-sm btn-secondary" onclick="editRole('Manager')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="deleteRole('Manager')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Viewer Role -->
                    <div class="content-card hover-lift" style="border-left: 4px solid #FFB900;">
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #FFB900, #FF8C00); display: flex; align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-eye" style="font-size: 24px; color: white;"></i>
                                    </div>
                                    <div>
                                        <h3 style="margin: 0; font-size: 18px; font-weight: 600;">Viewer</h3>
                                        <p style="margin: 4px 0 0; font-size: 12px; color: var(--text-secondary);">Read Only</p>
                                    </div>
                                </div>
                                <span class="badge badge-success" style="font-size: 11px;">Aktif</span>
                            </div>
                            
                            <p style="color: var(--text-secondary); font-size: 13px; margin-bottom: 16px; line-height: 1.6;">
                                Hanya dapat melihat data dan laporan tanpa hak edit atau hapus.
                            </p>
                            
                            <div style="display: flex; gap: 16px; margin-bottom: 16px; padding: 12px; background: var(--bg-secondary); border-radius: 8px;">
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: #FFB900;">15</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Pengguna</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: #FFB900;">6</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Permissions</div>
                                </div>
                                <div style="width: 1px; background: var(--border-color);"></div>
                                <div style="flex: 1; text-align: center;">
                                    <div style="font-size: 20px; font-weight: 600; color: var(--success);">25%</div>
                                    <div style="font-size: 11px; color: var(--text-tertiary);">Access</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 8px;">
                                <button class="btn btn-sm btn-primary" style="flex: 1;" onclick="showRoleDetail('Viewer')">
                                    <i class="fa-solid fa-eye"></i> Detail
                                </button>
                                <button class="btn btn-sm btn-secondary" onclick="editRole('Viewer')">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="deleteRole('Viewer')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('scripts')
<script>
function showAddRoleModal() {
    Swal.fire({
        title: 'Tambah Role Baru',
        html: `
            <input id="roleName" class="swal2-input" placeholder="Nama Role">
            <textarea id="roleDesc" class="swal2-textarea" placeholder="Deskripsi Role"></textarea>
        `,
        confirmButtonText: 'Simpan',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function showRoleDetail(roleName) {
    Swal.fire({
        title: `Detail Role: ${roleName}`,
        html: `<p>Menampilkan detail permissions untuk role ${roleName}</p>`,
        confirmButtonText: 'Tutup',
        confirmButtonColor: '#0078D4'
    });
}

function editRole(roleName) {
    Swal.fire({
        title: `Edit Role: ${roleName}`,
        html: `<p>Form edit role ${roleName}</p>`,
        confirmButtonText: 'Update',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function deleteRole(roleName) {
    Swal.fire({
        title: 'Hapus Role?',
        html: `Apakah Anda yakin ingin menghapus role <strong>${roleName}</strong>?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#E81123',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, Hapus!'
    });
}
</script>
@endpush
