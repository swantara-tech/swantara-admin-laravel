@extends('layouts.app')

@section('title', 'Notifikasi')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Pusat Notifikasi</h1>
                        <p>Kelola semua notifikasi sistem</p>
                    </div>
                    <button class="btn btn-primary"><i class="fa-solid fa-check"></i> Tandai Semua Dibaca</button>
                </div>
                
                <div class="content-card">
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-dot" style="background: var(--accent)"></div>
                                <div class="activity-content">
                                    <p><strong>Pengguna baru terdaftar</strong> - Budi Santoso baru saja mendaftar</p>
                                    <time>2 menit lalu</time>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-dot" style="background: var(--success)"></div>
                                <div class="activity-content">
                                    <p><strong>Pembayaran dikonfirmasi</strong> - Pesanan #ORD-2847 berhasil diproses</p>
                                    <time>15 menit lalu</time>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-dot" style="background: var(--warning)"></div>
                                <div class="activity-content">
                                    <p><strong>Stok produk rendah</strong> - Stok Mouse Wireless tersisa 5 unit</p>
                                    <time>1 jam lalu</time>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-dot" style="background: var(--info)"></div>
                                <div class="activity-content">
                                    <p><strong>Update sistem</strong> - Versi 2.5.0 telah tersedia</p>
                                    <time>3 jam lalu</time>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
@endsection
