@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
                <div class="page-header">
                    <div>
                        <h1>Profil Pengguna</h1>
                        <p>Kelola informasi pribadi dan pengaturan akun Anda</p>
                    </div>
                </div>
                
                <div class="profile-container">
                    <!-- Left Column - Profile Info -->
                    <div class="profile-sidebar">
                        <!-- Profile Card -->
                        <div class="content-card">
                            <div class="card-body" style="text-align: center; padding: 32px 24px;">
                                <div class="avatar-wrapper">
                                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=0078D4&color=fff&size=120" 
                                         style="width: 120px; height: 120px; border-radius: 50%; border: 4px solid var(--accent);">
                                    <button class="avatar-edit-btn" onclick="changeAvatar()">
                                        <i class="fa-solid fa-camera"></i>
                                    </button>
                                </div>
                                <h2 style="margin: 16px 0 8px; font-size: 24px;">Admin User</h2>
                                <p style="color: var(--text-secondary); margin: 0 0 12px;">admin@metroadmin.com</p>
                                <span class="badge badge-primary" style="font-size: 13px; padding: 6px 16px;">Administrator</span>
                                
                                <div class="profile-stats" style="margin-top: 24px; padding-top: 24px; border-top: 1px solid var(--border-color);">
                                    <div class="stat-item">
                                        <div class="stat-value">156</div>
                                        <div class="stat-label">Login</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-value">12</div>
                                        <div class="stat-label">Bulan</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-value">Aktif</div>
                                        <div class="stat-label">Status</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quick Links -->
                        <div class="content-card">
                            <div class="card-body no-padding">
                                <ul class="profile-menu">
                                    <li class="active">
                                        <a href="#profile" onclick="switchTab('profile')">
                                            <i class="fa-solid fa-user"></i>
                                            <span>Profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#security" onclick="switchTab('security')">
                                            <i class="fa-solid fa-shield-halved"></i>
                                            <span>Keamanan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#notifications" onclick="switchTab('notifications')">
                                            <i class="fa-solid fa-bell"></i>
                                            <span>Notifikasi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#preferences" onclick="switchTab('preferences')">
                                            <i class="fa-solid fa-palette"></i>
                                            <span>Preferensi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#activity" onclick="switchTab('activity')">
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <span>Aktivitas</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column - Content -->
                    <div class="profile-content">
                        <!-- Profile Tab -->
                        <div id="tab-profile" class="profile-tab active">
                            <!-- Personal Information -->
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-primary">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div>
                                            <h3>Informasi Pribadi</h3>
                                            <p class="card-subtitle">Data diri dan informasi kontak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="profileForm">
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label>Nama Depan</label>
                                                <input type="text" class="form-control" value="Admin" placeholder="Masukkan nama depan">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control" value="User" placeholder="Masukkan nama belakang">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="admin@metroadmin.com" placeholder="Masukkan email">
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label>No. Telepon</label>
                                                <input type="tel" class="form-control" value="+62 812-3456-7890" placeholder="Masukkan no. telepon">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" value="1990-01-15">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3" placeholder="Masukkan alamat lengkap">Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 10220</textarea>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <input type="text" class="form-control" value="Jakarta Pusat">
                                            </div>
                                            <div class="form-group">
                                                <label>Provinsi</label>
                                                <select class="form-control">
                                                    <option value="dki-jakarta" selected>DKI Jakarta</option>
                                                    <option value="jawa-barat">Jawa Barat</option>
                                                    <option value="jawa-tengah">Jawa Tengah</option>
                                                    <option value="jawa-timur">Jawa Timur</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input type="text" class="form-control" value="10220">
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-primary" onclick="saveProfile()">
                                                <i class="fa-solid fa-save"></i> Simpan Perubahan
                                            </button>
                                            <button type="button" class="btn btn-secondary" onclick="resetProfile()">
                                                <i class="fa-solid fa-rotate-right"></i> Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <!-- Social Links -->
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-success">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </div>
                                        <div>
                                            <h3>Social Media</h3>
                                            <p class="card-subtitle">Hubungkan akun sosial media Anda</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="social-links">
                                        <div class="social-link-item">
                                            <div class="social-icon" style="background: #1877F2;">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </div>
                                            <div class="social-info">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" placeholder="https://facebook.com/username">
                                            </div>
                                        </div>
                                        
                                        <div class="social-link-item">
                                            <div class="social-icon" style="background: #1DA1F2;">
                                                <i class="fa-brands fa-twitter"></i>
                                            </div>
                                            <div class="social-info">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" placeholder="https://twitter.com/username">
                                            </div>
                                        </div>
                                        
                                        <div class="social-link-item">
                                            <div class="social-icon" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                                                <i class="fa-brands fa-instagram"></i>
                                            </div>
                                            <div class="social-info">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" placeholder="https://instagram.com/username">
                                            </div>
                                        </div>
                                        
                                        <div class="social-link-item">
                                            <div class="social-icon" style="background: #0A66C2;">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                            <div class="social-info">
                                                <label>LinkedIn</label>
                                                <input type="text" class="form-control" placeholder="https://linkedin.com/in/username">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Security Tab -->
                        <div id="tab-security" class="profile-tab">
                            <!-- Change Password -->
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-warning">
                                            <i class="fa-solid fa-key"></i>
                                        </div>
                                        <div>
                                            <h3>Ubah Password</h3>
                                            <p class="card-subtitle">Pastikan password Anda aman</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="passwordForm">
                                        <div class="form-group">
                                            <label>Password Saat Ini</label>
                                            <div class="input-icon-wrapper">
                                                <input type="password" class="form-control" id="currentPassword" placeholder="Masukkan password saat ini">
                                                <i class="fa-solid fa-eye toggle-password" onclick="togglePassword('currentPassword')"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <div class="input-icon-wrapper">
                                                <input type="password" class="form-control" id="newPassword" placeholder="Masukkan password baru">
                                                <i class="fa-solid fa-eye toggle-password" onclick="togglePassword('newPassword')"></i>
                                            </div>
                                            <div class="password-strength" style="margin-top: 8px;">
                                                <div class="strength-bar"></div>
                                                <div class="strength-text" style="font-size: 12px; margin-top: 4px;">Kekuatan password</div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Konfirmasi Password Baru</label>
                                            <div class="input-icon-wrapper">
                                                <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi password baru">
                                                <i class="fa-solid fa-eye toggle-password" onclick="togglePassword('confirmPassword')"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-primary" onclick="changePassword()">
                                                <i class="fa-solid fa-lock"></i> Ubah Password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <!-- Two-Factor Authentication -->
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-success">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </div>
                                        <div>
                                            <h3>Two-Factor Authentication</h3>
                                            <p class="card-subtitle">Keamanan tambahan untuk akun Anda</p>
                                        </div>
                                    </div>
                                    <label class="toggle-switch">
                                        <input type="checkbox" id="twoFactorToggle" onchange="toggleTwoFactor()">
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>
                                <div class="card-body">
                                    <div class="info-box" style="padding: 16px; background: var(--bg-secondary); border-radius: 8px; border-left: 4px solid var(--accent);">
                                        <i class="fa-solid fa-info-circle" style="color: var(--accent); margin-right: 8px;"></i>
                                        <span style="font-size: 13px;">Two-factor authentication menambahkan lapisan keamanan ekstra dengan memerlukan kode verifikasi dari aplikasi authenticator.</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Active Sessions -->
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-info">
                                            <i class="fa-solid fa-laptop"></i>
                                        </div>
                                        <div>
                                            <h3>Sesi Aktif</h3>
                                            <p class="card-subtitle">Perangkat yang sedang login</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-danger" onclick="revokeAllSessions()">
                                        <i class="fa-solid fa-trash"></i> Hapus Semua
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="session-list">
                                        <div class="session-item current">
                                            <div class="session-icon">
                                                <i class="fa-solid fa-desktop"></i>
                                            </div>
                                            <div class="session-info">
                                                <div class="session-device">Chrome on Windows</div>
                                                <div class="session-meta">
                                                    <i class="fa-solid fa-location-dot"></i> Jakarta, Indonesia
                                                    <span style="margin: 0 8px;">•</span>
                                                    <i class="fa-solid fa-clock"></i> Aktif sekarang
                                                </div>
                                            </div>
                                            <span class="badge badge-success">Current</span>
                                        </div>
                                        
                                        <div class="session-item">
                                            <div class="session-icon">
                                                <i class="fa-solid fa-mobile-screen"></i>
                                            </div>
                                            <div class="session-info">
                                                <div class="session-device">Safari on iPhone</div>
                                                <div class="session-meta">
                                                    <i class="fa-solid fa-location-dot"></i> Jakarta, Indonesia
                                                    <span style="margin: 0 8px;">•</span>
                                                    <i class="fa-solid fa-clock"></i> 2 jam yang lalu
                                                </div>
                                            </div>
                                            <button class="btn btn-sm btn-danger" onclick="revokeSession('mobile')">
                                                <i class="fa-solid fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notifications Tab -->
                        <div id="tab-notifications" class="profile-tab">
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-warning">
                                            <i class="fa-solid fa-bell"></i>
                                        </div>
                                        <div>
                                            <h3>Pengaturan Notifikasi</h3>
                                            <p class="card-subtitle">Atur notifikasi yang ingin Anda terima</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="notification-settings">
                                        <div class="notification-item">
                                            <div class="notification-info">
                                                <i class="fa-solid fa-envelope"></i>
                                                <div>
                                                    <div class="notification-title">Email Notifications</div>
                                                    <div class="notification-desc">Terima notifikasi melalui email</div>
                                                </div>
                                            </div>
                                            <label class="toggle-switch">
                                                <input type="checkbox" checked>
                                                <span class="toggle-slider"></span>
                                            </label>
                                        </div>
                                        
                                        <div class="notification-item">
                                            <div class="notification-info">
                                                <i class="fa-solid fa-mobile-screen"></i>
                                                <div>
                                                    <div class="notification-title">SMS Notifications</div>
                                                    <div class="notification-desc">Terima notifikasi melalui SMS</div>
                                                </div>
                                            </div>
                                            <label class="toggle-switch">
                                                <input type="checkbox">
                                                <span class="toggle-slider"></span>
                                            </label>
                                        </div>
                                        
                                        <div class="notification-item">
                                            <div class="notification-info">
                                                <i class="fa-solid fa-bell"></i>
                                                <div>
                                                    <div class="notification-title">Push Notifications</div>
                                                    <div class="notification-desc">Terima notifikasi push di browser</div>
                                                </div>
                                            </div>
                                            <label class="toggle-switch">
                                                <input type="checkbox" checked>
                                                <span class="toggle-slider"></span>
                                            </label>
                                        </div>
                                        
                                        <div class="notification-item">
                                            <div class="notification-info">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <div>
                                                    <div class="notification-title">Order Updates</div>
                                                    <div class="notification-desc">Notifikasi status pesanan baru</div>
                                                </div>
                                            </div>
                                            <label class="toggle-switch">
                                                <input type="checkbox" checked>
                                                <span class="toggle-slider"></span>
                                            </label>
                                        </div>
                                        
                                        <div class="notification-item">
                                            <div class="notification-info">
                                                <i class="fa-solid fa-box"></i>
                                                <div>
                                                    <div class="notification-title">Stock Alerts</div>
                                                    <div class="notification-desc">Notifikasi stok menipis</div>
                                                </div>
                                            </div>
                                            <label class="toggle-switch">
                                                <input type="checkbox" checked>
                                                <span class="toggle-slider"></span>
                                            </label>
                                        </div>
                                        
                                        <div class="notification-item">
                                            <div class="notification-info">
                                                <i class="fa-solid fa-chart-line"></i>
                                                <div>
                                                    <div class="notification-title">Reports</div>
                                                    <div class="notification-desc">Laporan mingguan/bulanan</div>
                                                </div>
                                            </div>
                                            <label class="toggle-switch">
                                                <input type="checkbox">
                                                <span class="toggle-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-actions" style="margin-top: 24px;">
                                        <button class="btn btn-primary" onclick="saveNotificationSettings()">
                                            <i class="fa-solid fa-save"></i> Simpan Pengaturan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Preferences Tab -->
                        <div id="tab-preferences" class="profile-tab">
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-purple">
                                            <i class="fa-solid fa-palette"></i>
                                        </div>
                                        <div>
                                            <h3>Preferensi Tampilan</h3>
                                            <p class="card-subtitle">Kustomisasi tampilan dashboard</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="preference-item">
                                        <div class="preference-info">
                                            <i class="fa-solid fa-moon"></i>
                                            <div>
                                                <div class="preference-title">Dark Mode</div>
                                                <div class="preference-desc">Gunakan tema gelap</div>
                                            </div>
                                        </div>
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="darkModeToggle" onchange="toggleDarkMode()">
                                            <span class="toggle-slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="preference-item">
                                        <div class="preference-info">
                                            <i class="fa-solid fa-sidebar-flip"></i>
                                            <div>
                                                <div class="preference-title">Compact Sidebar</div>
                                                <div class="preference-desc">Sidebar lebih kecil dengan icon saja</div>
                                            </div>
                                        </div>
                                        <label class="toggle-switch">
                                            <input type="checkbox">
                                            <span class="toggle-slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-group" style="margin-top: 24px;">
                                        <label>Bahasa</label>
                                        <select class="form-control">
                                            <option value="id" selected>Bahasa Indonesia</option>
                                            <option value="en">English</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Timezone</label>
                                        <select class="form-control">
                                            <option value="asia-jakarta" selected>Asia/Jakarta (WIB, UTC+7)</option>
                                            <option value="asia-makassar">Asia/Makassar (WITA, UTC+8)</option>
                                            <option value="asia-jayapura">Asia/Jayapura (WIT, UTC+9)</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button class="btn btn-primary" onclick="savePreferences()">
                                            <i class="fa-solid fa-save"></i> Simpan Preferensi
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Activity Tab -->
                        <div id="tab-activity" class="profile-tab">
                            <div class="content-card">
                                <div class="card-header">
                                    <div class="card-header-left">
                                        <div class="card-icon bg-info">
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                        </div>
                                        <div>
                                            <h3>Riwayat Aktivitas</h3>
                                            <p class="card-subtitle">Log aktivitas akun Anda</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-secondary">
                                        <i class="fa-solid fa-download"></i> Export
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="activity-timeline">
                                        <div class="activity-item">
                                            <div class="activity-icon bg-success">
                                                <i class="fa-solid fa-right-to-bracket"></i>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-title">Login Berhasil</div>
                                                <div class="activity-desc">Login dari Chrome on Windows</div>
                                                <div class="activity-time">2 menit yang lalu</div>
                                            </div>
                                        </div>
                                        
                                        <div class="activity-item">
                                            <div class="activity-icon bg-primary">
                                                <i class="fa-solid fa-pen"></i>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-title">Profil Diperbarui</div>
                                                <div class="activity-desc">Mengubah informasi profil</div>
                                                <div class="activity-time">1 jam yang lalu</div>
                                            </div>
                                        </div>
                                        
                                        <div class="activity-item">
                                            <div class="activity-icon bg-warning">
                                                <i class="fa-solid fa-key"></i>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-title">Password Diubah</div>
                                                <div class="activity-desc">Password berhasil diubah</div>
                                                <div class="activity-time">3 jam yang lalu</div>
                                            </div>
                                        </div>
                                        
                                        <div class="activity-item">
                                            <div class="activity-icon bg-info">
                                                <i class="fa-solid fa-user-plus"></i>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-title">Pengguna Baru</div>
                                                <div class="activity-desc">Menambahkan pengguna baru: John Doe</div>
                                                <div class="activity-time">5 jam yang lalu</div>
                                            </div>
                                        </div>
                                        
                                        <div class="activity-item">
                                            <div class="activity-icon bg-success">
                                                <i class="fa-solid fa-box"></i>
                                            </div>
                                            <div class="activity-content">
                                                <div class="activity-title">Produk Ditambahkan</div>
                                                <div class="activity-desc">Menambahkan produk baru: Smartwatch Pro</div>
                                                <div class="activity-time">1 hari yang lalu</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('styles')
<style>
.profile-container {
    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 24px;
}

.profile-sidebar {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.profile-content {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.avatar-wrapper {
    position: relative;
    display: inline-block;
}

.avatar-edit-btn {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--accent);
    color: white;
    border: 3px solid var(--bg-primary);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
}

.avatar-edit-btn:hover {
    transform: scale(1.1);
    background: var(--accent-dark);
}

.profile-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.profile-stats .stat-item {
    text-align: center;
}

.profile-stats .stat-value {
    font-size: 20px;
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 4px;
}

.profile-stats .stat-label {
    font-size: 12px;
    color: var(--text-secondary);
}

.profile-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.profile-menu li {
    border-bottom: 1px solid var(--border-color);
}

.profile-menu li:last-child {
    border-bottom: none;
}

.profile-menu li a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 20px;
    color: var(--text-primary);
    text-decoration: none;
    transition: all 0.2s ease;
}

.profile-menu li:hover a {
    background: var(--surface-hover);
    color: var(--accent);
}

.profile-menu li.active a {
    background: var(--accent-light);
    color: var(--accent);
    font-weight: 500;
}

.profile-menu li a i {
    width: 20px;
    text-align: center;
}

.profile-tab {
    display: none;
}

.profile-tab.active {
    display: block;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.form-actions {
    display: flex;
    gap: 12px;
    margin-top: 24px;
}

.input-icon-wrapper {
    position: relative;
}

.input-icon-wrapper .form-control {
    padding-right: 40px;
}

.input-icon-wrapper .toggle-password {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: var(--text-tertiary);
    transition: color 0.2s ease;
}

.input-icon-wrapper .toggle-password:hover {
    color: var(--accent);
}

.social-links {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.social-link-item {
    display: flex;
    align-items: center;
    gap: 16px;
}

.social-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.social-info {
    flex: 1;
}

.social-info label {
    display: block;
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 6px;
}

.session-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.session-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px;
    background: var(--bg-secondary);
    border-radius: 8px;
    border: 2px solid transparent;
    transition: all 0.2s ease;
}

.session-item.current {
    border-color: var(--success);
}

.session-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: var(--accent-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    font-size: 20px;
}

.session-info {
    flex: 1;
}

.session-device {
    font-weight: 600;
    margin-bottom: 4px;
}

.session-meta {
    font-size: 12px;
    color: var(--text-secondary);
}

.notification-settings,
.preference-item {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.notification-item,
.preference-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px;
    background: var(--bg-secondary);
    border-radius: 8px;
}

.notification-info,
.preference-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.notification-info i,
.preference-info i {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: var(--accent-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
}

.notification-title,
.preference-title {
    font-weight: 600;
    margin-bottom: 4px;
}

.notification-desc,
.preference-desc {
    font-size: 12px;
    color: var(--text-secondary);
}

.toggle-switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 26px;
}

.toggle-switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.toggle-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--border-color);
    transition: 0.3s;
    border-radius: 26px;
}

.toggle-slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: 0.3s;
    border-radius: 50%;
}

input:checked + .toggle-slider {
    background-color: var(--accent);
}

input:checked + .toggle-slider:before {
    transform: translateX(24px);
}

.activity-timeline {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.activity-item {
    display: flex;
    gap: 16px;
    padding: 16px;
    background: var(--bg-secondary);
    border-radius: 8px;
    position: relative;
}

.activity-item:not(:last-child)::after {
    content: '';
    position: absolute;
    left: 40px;
    top: 64px;
    bottom: -16px;
    width: 2px;
    background: var(--border-color);
}

.activity-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.activity-content {
    flex: 1;
}

.activity-title {
    font-weight: 600;
    margin-bottom: 4px;
}

.activity-desc {
    font-size: 13px;
    color: var(--text-secondary);
    margin-bottom: 4px;
}

.activity-time {
    font-size: 11px;
    color: var(--text-tertiary);
}

@media (max-width: 1024px) {
    .profile-container {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@push('scripts')
<script>
function switchTab(tabName) {
    // Hide all tabs
    $('.profile-tab').removeClass('active');
    $('.profile-menu li').removeClass('active');
    
    // Show selected tab
    $(`#tab-${tabName}`).addClass('active');
    $(`.profile-menu li a[href="#${tabName}"]`).parent().addClass('active');
}

function changeAvatar() {
    Swal.fire({
        title: 'Ubah Avatar',
        html: `
            <input type="file" id="avatarFile" accept="image/*" class="swal2-file">
            <p style="font-size: 12px; color: var(--text-secondary); margin-top: 8px;">Max size: 2MB (JPG, PNG)</p>
        `,
        confirmButtonText: 'Upload',
        confirmButtonColor: '#0078D4',
        showCancelButton: true,
        cancelButtonText: 'Batal'
    });
}

function saveProfile() {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Profil berhasil diperbarui',
        confirmButtonColor: '#0078D4'
    });
}

function resetProfile() {
    Swal.fire({
        title: 'Reset Form?',
        text: 'Semua perubahan akan dibatalkan',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0078D4',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Reset'
    });
}

function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const icon = input.nextElementSibling;
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

function changePassword() {
    const current = $('#currentPassword').val();
    const newPass = $('#newPassword').val();
    const confirm = $('#confirmPassword').val();
    
    if (!current || !newPass || !confirm) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Semua field harus diisi',
            confirmButtonColor: '#E81123'
        });
        return;
    }
    
    if (newPass !== confirm) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Password tidak cocok',
            confirmButtonColor: '#E81123'
        });
        return;
    }
    
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Password berhasil diubah',
        confirmButtonColor: '#0078D4'
    });
}

function toggleTwoFactor() {
    const enabled = $('#twoFactorToggle').is(':checked');
    
    Swal.fire({
        icon: enabled ? 'success' : 'info',
        title: enabled ? '2FA Diaktifkan' : '2FA Dinonaktifkan',
        text: enabled ? 'Two-factor authentication berhasil diaktifkan' : 'Two-factor authentication dinonaktifkan',
        confirmButtonColor: '#0078D4'
    });
}

function revokeSession(device) {
    Swal.fire({
        title: 'Hapus Sesi?',
        text: 'Perangkat akan logout',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#E81123',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus'
    });
}

function revokeAllSessions() {
    Swal.fire({
        title: 'Hapus Semua Sesi?',
        text: 'Semua perangkat akan logout kecuali yang ini',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#E81123',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus Semua'
    });
}

function saveNotificationSettings() {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Pengaturan notifikasi berhasil disimpan',
        confirmButtonColor: '#0078D4'
    });
}

function toggleDarkMode() {
    const enabled = $('#darkModeToggle').is(':checked');
    MetroAdmin.toggleDarkMode();
}

function savePreferences() {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Preferensi berhasil disimpan',
        confirmButtonColor: '#0078D4'
    });
}
</script>
@endpush
