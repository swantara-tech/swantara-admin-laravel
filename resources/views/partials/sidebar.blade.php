<!-- Sidebar -->
<aside class="app-sidebar" id="appSidebar">
    <div class="sidebar-header">
        <div class="sidebar-brand">
            <div class="brand-icon">
                <i class="fa-solid fa-cube"></i>
            </div>
            <span class="brand-text">Swantara Admin</span>
        </div>
    </div>

    <nav class="sidebar-nav" id="sidebarNav">
        <ul class="nav-list">
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link" data-tooltip="Dashboard">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="nav-section">Manajemen Pengguna</li>
            <li class="nav-item has-submenu {{ request()->routeIs('users.*') || request()->routeIs('roles.*') || request()->routeIs('permissions.*') ? 'open' : '' }}">
                <a href="#" class="nav-link" data-tooltip="Pengguna">
                    <i class="fa-solid fa-users"></i>
                    <span>Pengguna</span>
                    <i class="fa-solid fa-chevron-right submenu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li class="{{ request()->routeIs('users.index') ? 'active' : '' }}"><a href="{{ route('users.index') }}" class="nav-link"><span>Daftar Pengguna</span></a></li>
                    <li class="{{ request()->routeIs('roles.index') ? 'active' : '' }}"><a href="{{ route('roles.index') }}" class="nav-link"><span>Role</span></a></li>
                    <li class="{{ request()->routeIs('permissions.index') ? 'active' : '' }}"><a href="{{ route('permissions.index') }}" class="nav-link"><span>Izin</span></a></li>
                </ul>
            </li>

            <li class="nav-section">Manajemen Produk</li>
            <li class="nav-item has-submenu {{ request()->routeIs('products.*') || request()->routeIs('inventory.*') ? 'open' : '' }}">
                <a href="#" class="nav-link" data-tooltip="Produk">
                    <i class="fa-solid fa-box"></i>
                    <span>Produk</span>
                    <i class="fa-solid fa-chevron-right submenu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li class="{{ request()->routeIs('products.index') ? 'active' : '' }}"><a href="{{ route('products.index') }}" class="nav-link"><span>Daftar Produk</span></a></li>
                    <li class="{{ request()->routeIs('inventory.index') ? 'active' : '' }}"><a href="{{ route('inventory.index') }}" class="nav-link"><span>Inventori</span></a></li>
                </ul>
            </li>

            <li class="nav-section">Penjualan</li>
            <li class="nav-item {{ request()->routeIs('orders.index') ? 'active' : '' }}">
                <a href="{{ route('orders.index') }}" class="nav-link" data-tooltip="Pesanan">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Pesanan</span>
                    <span class="nav-badge">12</span>
                </a>
            </li>

            <li class="nav-section">Laporan</li>
            <li class="nav-item {{ request()->routeIs('reports.index') ? 'active' : '' }}">
                <a href="{{ route('reports.index') }}" class="nav-link" data-tooltip="Laporan">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <li class="nav-section">Tables</li>
            <li class="nav-item has-submenu {{ request()->routeIs('tables.*') ? 'open' : '' }}">
                <a href="#" class="nav-link" data-tooltip="Tables">
                    <i class="fa-solid fa-table"></i>
                    <span>Tables</span>
                    <i class="fa-solid fa-chevron-right submenu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li class="{{ request()->routeIs('tables.basic') ? 'active' : '' }}">
                        <a href="{{ route('tables.basic') }}" class="nav-link"><span>Basic Table</span></a>
                    </li>
                    <li class="{{ request()->routeIs('tables.datatable') ? 'active' : '' }}">
                        <a href="{{ route('tables.datatable') }}" class="nav-link"><span>DataTable</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-section">Forms</li>
            <li class="nav-item has-submenu {{ request()->routeIs('forms.*') ? 'open' : '' }}">
                <a href="#" class="nav-link" data-tooltip="Forms">
                    <i class="fa-solid fa-file-lines"></i>
                    <span>Forms</span>
                    <i class="fa-solid fa-chevron-right submenu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li class="{{ request()->routeIs('forms.elements') ? 'active' : '' }}">
                        <a href="{{ route('forms.elements') }}" class="nav-link"><span>Form Elements</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.validation') ? 'active' : '' }}">
                        <a href="{{ route('forms.validation') }}" class="nav-link"><span>Form Validation</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.base-input') ? 'active' : '' }}">
                        <a href="{{ route('forms.base-input') }}" class="nav-link"><span>Base Input</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.checkbox-radio') ? 'active' : '' }}">
                        <a href="{{ route('forms.checkbox-radio') }}" class="nav-link"><span>Checkbox & Radio</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.input-groups') ? 'active' : '' }}">
                        <a href="{{ route('forms.input-groups') }}" class="nav-link"><span>Input Groups</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.input-masks') ? 'active' : '' }}">
                        <a href="{{ route('forms.input-masks') }}" class="nav-link"><span>Input Masks</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.floating-labels') ? 'active' : '' }}">
                        <a href="{{ route('forms.floating-labels') }}" class="nav-link"><span>Floating Labels</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.datetimepicker') ? 'active' : '' }}">
                        <a href="{{ route('forms.datetimepicker') }}" class="nav-link"><span>Datetimepicker</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.touch-spin') ? 'active' : '' }}">
                        <a href="{{ route('forms.touch-spin') }}" class="nav-link"><span>Touch Spin</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.select2') ? 'active' : '' }}">
                        <a href="{{ route('forms.select2') }}" class="nav-link"><span>Select2</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.switch') ? 'active' : '' }}">
                        <a href="{{ route('forms.switch') }}" class="nav-link"><span>Switch</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.range-slider') ? 'active' : '' }}">
                        <a href="{{ route('forms.range-slider') }}" class="nav-link"><span>Range Slider</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.typeahead') ? 'active' : '' }}">
                        <a href="{{ route('forms.typeahead') }}" class="nav-link"><span>Typeahead</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.textarea') ? 'active' : '' }}">
                        <a href="{{ route('forms.textarea') }}" class="nav-link"><span>Textarea</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.clipboard') ? 'active' : '' }}">
                        <a href="{{ route('forms.clipboard') }}" class="nav-link"><span>Clipboard</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.file-upload') ? 'active' : '' }}">
                        <a href="{{ route('forms.file-upload') }}" class="nav-link"><span>File Upload</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.dual-list') ? 'active' : '' }}">
                        <a href="{{ route('forms.dual-list') }}" class="nav-link"><span>Dual List Boxes</span></a>
                    </li>
                    <li class="{{ request()->routeIs('forms.default') ? 'active' : '' }}">
                        <a href="{{ route('forms.default') }}" class="nav-link"><span>Default Forms</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-section">Sistem</li>
            <li class="nav-item {{ request()->routeIs('notifications.index') ? 'active' : '' }}">
                <a href="{{ route('notifications.index') }}" class="nav-link" data-tooltip="Notifikasi">
                    <i class="fa-solid fa-bell"></i>
                    <span>Notifikasi</span>
                    <span class="nav-badge pulse">5</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('settings.index') ? 'active' : '' }}">
                <a href="{{ route('settings.index') }}" class="nav-link" data-tooltip="Pengaturan">
                    <i class="fa-solid fa-gear"></i>
                    <span>Pengaturan</span>
                </a>
            </li>

            <li class="nav-section">Akun</li>
            <li class="nav-item {{ request()->routeIs('profile.index') ? 'active' : '' }}">
                <a href="{{ route('profile.index') }}" class="nav-link" data-tooltip="Profil">
                    <i class="fa-solid fa-user-circle"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link nav-logout" data-tooltip="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</aside>
