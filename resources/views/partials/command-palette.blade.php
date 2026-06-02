<!-- Command Palette -->
<div class="command-palette-overlay" id="commandPaletteOverlay">
    <div class="command-palette" id="commandPalette">
        <div class="command-input-wrapper">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="commandInput" placeholder="Ketik perintah atau cari...">
            <kbd>ESC</kbd>
        </div>
        <div class="command-results" id="commandResults">
            <div class="command-group">
                <div class="command-group-title">Halaman</div>
                <div class="command-item" data-action="navigate" data-target="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i><span>Dashboard</span>
                </div>
                <div class="command-item" data-action="navigate" data-target="#">
                    <i class="fa-solid fa-users"></i><span>Pengguna</span>
                </div>
                <div class="command-item" data-action="navigate" data-target="#">
                    <i class="fa-solid fa-box"></i><span>Produk</span>
                </div>
                <div class="command-item" data-action="navigate" data-target="#">
                    <i class="fa-solid fa-cart-shopping"></i><span>Pesanan</span>
                </div>
                <div class="command-item" data-action="navigate" data-target="#">
                    <i class="fa-solid fa-chart-line"></i><span>Laporan</span>
                </div>
                <div class="command-item" data-action="navigate" data-target="#">
                    <i class="fa-solid fa-gear"></i><span>Pengaturan</span>
                </div>
            </div>
            <div class="command-group">
                <div class="command-group-title">Aksi Cepat</div>
                <div class="command-item" data-action="theme">
                    <i class="fa-solid fa-moon"></i><span>Ganti Tema</span>
                </div>
                <div class="command-item" data-action="fullscreen">
                    <i class="fa-solid fa-expand"></i><span>Fullscreen</span>
                </div>
            </div>
        </div>
    </div>
</div>
