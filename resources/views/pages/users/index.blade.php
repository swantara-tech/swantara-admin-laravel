@extends('layouts.app')

@section('title', 'Manajemen Pengguna')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Manajemen Pengguna</h1>
                        <p>Kelola semua pengguna yang terdaftar di sistem</p>
                    </div>
                    <button class="btn btn-primary" onclick="MetroAdmin.showToast('Fitur tambah pengguna', 'success')">
                        <i class="fa-solid fa-plus"></i> Tambah Pengguna
                    </button>
                </div>
                
                <div class="content-card">
                    <div class="card-body no-padding">
                        <div class="data-table-wrapper">
                            <table id="usersTable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Pengguna</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Bergabung</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:10px">
                                                <img src="https://ui-avatars.com/api/?name=Andi+Wijaya&background=0078D4&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <span>Andi Wijaya</span>
                                            </div>
                                        </td>
                                        <td>andi.wijaya@email.com</td>
                                        <td><span class="badge badge-primary">Admin</span></td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>15 Jan 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:10px">
                                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=16C60C&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <span>Budi Santoso</span>
                                            </div>
                                        </td>
                                        <td>budi@email.com</td>
                                        <td><span class="badge badge-info">Editor</span></td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>22 Feb 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:10px">
                                                <img src="https://ui-avatars.com/api/?name=Dewi+Lestari&background=FFB900&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <span>Dewi Lestari</span>
                                            </div>
                                        </td>
                                        <td>dewi@email.com</td>
                                        <td><span class="badge badge-warning">Viewer</span></td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>10 Mar 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:10px">
                                                <img src="https://ui-avatars.com/api/?name=Rudi+Hartono&background=E81123&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <span>Rudi Hartono</span>
                                            </div>
                                        </td>
                                        <td>rudi@email.com</td>
                                        <td><span class="badge badge-info">Editor</span></td>
                                        <td><span class="badge badge-danger">Nonaktif</span></td>
                                        <td>5 Apr 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:10px">
                                                <img src="https://ui-avatars.com/api/?name=Maya+Putri&background=00BCF2&color=fff&size=32" style="width:32px;height:32px;border-radius:50%">
                                                <span>Maya Putri</span>
                                            </div>
                                        </td>
                                        <td>maya@email.com</td>
                                        <td><span class="badge badge-primary">Admin</span></td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>18 Mei 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

@push('scripts')
<script>
$(function(){
    if($.fn.DataTable) {
        $('#usersTable').DataTable({
            pageLength: 10,
            language: {
                search: "Cari:",
                paginate: {
                    previous: "Sebelumnya",
                    next: "Selanjutnya"
                }
            }
        });
    }
});
</script>
@endpush
