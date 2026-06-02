@extends('layouts.app')

@section('title', 'Pengaturan')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Pengaturan Sistem</h1>
                        <p>Konfigurasi pengaturan aplikasi</p>
                    </div>
                    <button class="btn btn-primary"><i class="fa-solid fa-save"></i> Simpan Pengaturan</button>
                </div>
                
                <div class="content-card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 16px;">Pengaturan Umum</h3>
                        <div class="form-group">
                            <label>Nama Aplikasi</label>
                            <input type="text" class="form-control" value="Metro Admin">
                        </div>
                        <div class="form-group">
                            <label>Email Admin</label>
                            <input type="email" class="form-control" value="admin@metroadmin.com">
                        </div>
                        <div class="form-group">
                            <label>Timezone</label>
                            <select class="form-control">
                                <option>Asia/Jakarta (WIB)</option>
                                <option>Asia/Makassar (WITA)</option>
                                <option>Asia/Jayapura (WIT)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bahasa Default</label>
                            <select class="form-control">
                                <option>Bahasa Indonesia</option>
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                </div>
@endsection
