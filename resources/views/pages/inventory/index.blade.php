@extends('layouts.app')

@section('title', 'Inventori')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Manajemen Inventori</h1>
                        <p>Pantau stok dan ketersediaan produk</p>
                    </div>
                    <button class="btn btn-primary" onclick="MetroAdmin.showToast('Update Stok', 'success')"><i class="fa-solid fa-plus"></i> Update Stok</button>
                </div>
                
                <div class="content-card">
                    <div class="card-body no-padding">
                        <div class="data-table-wrapper">
                            <table id="dataTable" class="display" style="width:100%">
                                <thead><tr><th>Produk</th><th>SKU</th><th>Stok</th><th>Status</th><th>Terakhir Update</th><th>Aksi</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    <tr><td>Smartwatch Pro</td><td>SKU-001</td><td>45</td><td>Tersedia</td><td>28 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Headphone Wireless</td><td>SKU-002</td><td>120</td><td>Tersedia</td><td>28 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Kamera Polaroid</td><td>SKU-003</td><td>8</td><td>Hampir Habis</td><td>27 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Sepatu Running</td><td>SKU-004</td><td>67</td><td>Tersedia</td><td>27 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Parfum Premium</td><td>SKU-005</td><td>3</td><td>Hampir Habis</td><td>26 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Sneakers Limited</td><td>SKU-006</td><td>12</td><td>Tersedia</td><td>26 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Laptop Gaming</td><td>SKU-007</td><td>0</td><td>Habis</td><td>25 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
                                <tr><td>Mouse Wireless</td><td>SKU-008</td><td>234</td><td>Tersedia</td><td>25 Mei 2024</td><td><button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-pen"></i></button> <button class="btn btn-sm btn-icon btn-secondary"><i class="fa-solid fa-trash"></i></button></td></tr>
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
        $('#dataTable').DataTable({
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
