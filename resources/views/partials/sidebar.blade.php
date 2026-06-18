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

            <li class="nav-section">Component</li>

            {{-- BASE UI Components --}}
            <li class="nav-item has-submenu {{ request()->routeIs('utilities.*') ? 'open' : '' }}">
                <a href="#" class="nav-link" data-tooltip="Utilities">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Utilities</span>
                    <i class="fa-solid fa-chevron-right submenu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li class="nav-item {{ request()->routeIs('utilities.accordions') ? 'active' : '' }}">
                        <a href="{{ route('utilities.accordions') }}" class="nav-link">
                            <i class="fa-solid fa-list-ul"></i>
                            <span>Accordions</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.alerts') ? 'active' : '' }}">
                        <a href="{{ route('utilities.alerts') }}" class="nav-link">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <span>Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.images') ? 'active' : '' }}">
                        <a href="{{ route('utilities.images') }}" class="nav-link">
                            <i class="fa-solid fa-image"></i>
                            <span>Images</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.badges') ? 'active' : '' }}">
                        <a href="{{ route('utilities.badges') }}" class="nav-link">
                            <i class="fa-solid fa-certificate"></i>
                            <span>Badges</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.breadcrumb') ? 'active' : '' }}">
                        <a href="{{ route('utilities.breadcrumb') }}" class="nav-link">
                            <i class="fa-solid fa-ellipsis"></i>
                            <span>Breadcrumb</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.buttons') ? 'active' : '' }}">
                        <a href="{{ route('utilities.buttons') }}" class="nav-link">
                            <i class="fa-solid fa-square-check"></i>
                            <span>Buttons</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.cards') ? 'active' : '' }}">
                        <a href="{{ route('utilities.cards') }}" class="nav-link">
                            <i class="fa-solid fa-id-card"></i>
                            <span>Cards</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.carousel') ? 'active' : '' }}">
                        <a href="{{ route('utilities.carousel') }}" class="nav-link">
                            <i class="fa-solid fa-images"></i>
                            <span>Carousel</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.collapse') ? 'active' : '' }}">
                        <a href="{{ route('utilities.collapse') }}" class="nav-link">
                            <i class="fa-solid fa-angle-down"></i>
                            <span>Collapse</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.colors') ? 'active' : '' }}">
                        <a href="{{ route('utilities.colors') }}" class="nav-link">
                            <i class="fa-solid fa-palette"></i>
                            <span>Colors</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.dropdowns') ? 'active' : '' }}">
                        <a href="{{ route('utilities.dropdowns') }}" class="nav-link">
                            <i class="fa-solid fa-caret-down"></i>
                            <span>Dropdowns</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.videos') ? 'active' : '' }}">
                        <a href="{{ route('utilities.videos') }}" class="nav-link">
                            <i class="fa-solid fa-video"></i>
                            <span>Videos</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.grid') ? 'active' : '' }}">
                        <a href="{{ route('utilities.grid') }}" class="nav-link">
                            <i class="fa-solid fa-table-columns"></i>
                            <span>Grid Options</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.links') ? 'active' : '' }}">
                        <a href="{{ route('utilities.links') }}" class="nav-link">
                            <i class="fa-solid fa-link"></i>
                            <span>Links</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.list-group') ? 'active' : '' }}">
                        <a href="{{ route('utilities.list-group') }}" class="nav-link">
                            <i class="fa-solid fa-list"></i>
                            <span>List Group</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.modals') ? 'active' : '' }}">
                        <a href="{{ route('utilities.modals') }}" class="nav-link">
                            <i class="fa-solid fa-window-maximize"></i>
                            <span>Modals</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.notifications') ? 'active' : '' }}">
                        <a href="{{ route('utilities.notifications') }}" class="nav-link">
                            <i class="fa-solid fa-bell"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.offcanvas') ? 'active' : '' }}">
                        <a href="{{ route('utilities.offcanvas') }}" class="nav-link">
                            <i class="fa-solid fa-clone"></i>
                            <span>Offcanvas</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.placeholders') ? 'active' : '' }}">
                        <a href="{{ route('utilities.placeholders') }}" class="nav-link">
                            <i class="fa-solid fa-border-none"></i>
                            <span>Placeholders</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.pagination') ? 'active' : '' }}">
                        <a href="{{ route('utilities.pagination') }}" class="nav-link">
                            <i class="fa-solid fa-angles-right"></i>
                            <span>Pagination</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.popovers') ? 'active' : '' }}">
                        <a href="{{ route('utilities.popovers') }}" class="nav-link">
                            <i class="fa-solid fa-comment-dots"></i>
                            <span>Popovers</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.progress') ? 'active' : '' }}">
                        <a href="{{ route('utilities.progress') }}" class="nav-link">
                            <i class="fa-solid fa-spinner"></i>
                            <span>Progress</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.scrollspy') ? 'active' : '' }}">
                        <a href="{{ route('utilities.scrollspy') }}" class="nav-link">
                            <i class="fa-solid fa-crosshairs"></i>
                            <span>Scrollspy</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.tabs') ? 'active' : '' }}">
                        <a href="{{ route('utilities.tabs') }}" class="nav-link">
                            <i class="fa-solid fa-folder-open"></i>
                            <span>Tabs</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.tooltips') ? 'active' : '' }}">
                        <a href="{{ route('utilities.tooltips') }}" class="nav-link">
                            <i class="fa-solid fa-message"></i>
                            <span>Tooltips</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.typography') ? 'active' : '' }}">
                        <a href="{{ route('utilities.typography') }}" class="nav-link">
                            <i class="fa-solid fa-font"></i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.toasts') ? 'active' : '' }}">
                        <a href="{{ route('utilities.toasts') }}" class="nav-link">
                            <i class="fa-solid fa-bell"></i>
                            <span>Toasts</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.spinners') ? 'active' : '' }}">
                        <a href="{{ route('utilities.spinners') }}" class="nav-link">
                            <i class="fa-solid fa-circle-notch"></i>
                            <span>Spinners</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.skeletons') ? 'active' : '' }}">
                        <a href="{{ route('utilities.skeletons') }}" class="nav-link">
                            <i class="fa-solid fa-border-all"></i>
                            <span>Skeletons</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.avatars') ? 'active' : '' }}">
                        <a href="{{ route('utilities.avatars') }}" class="nav-link">
                            <i class="fa-solid fa-user-circle"></i>
                            <span>Avatars</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('utilities.timelines') ? 'active' : '' }}">
                        <a href="{{ route('utilities.timelines') }}" class="nav-link">
                            <i class="fa-solid fa-timeline"></i>
                            <span>Timelines</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- END BASE UI Components --}}
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
