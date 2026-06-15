<!-- Mobile Menu Popup -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay">
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <div class="mobile-menu-logo">
                <i class="fa-solid fa-cube"></i>
                <span>Swantara Admin</span>
            </div>
            <button class="mobile-menu-close" id="mobileMenuClose">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        
        <div class="mobile-menu-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="mobileMenuSearch" placeholder="Cari menu...">
        </div>
        
        <div class="mobile-menu-content" id="mobileMenuContent">
            <!-- Dashboard -->
            <div class="mobile-menu-item" data-link="{{ route('dashboard') }}">
                <div class="mobile-menu-icon bg-primary">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="mobile-menu-text">
                    <div class="mobile-menu-title">Dashboard</div>
                    <div class="mobile-menu-desc">Home overview</div>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            
            <!-- Forms -->
            <div class="mobile-menu-group">
                <div class="mobile-menu-group-header">
                    <div class="mobile-menu-item">
                        <div class="mobile-menu-icon bg-success">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div class="mobile-menu-text">
                            <div class="mobile-menu-title">Forms</div>
                            <div class="mobile-menu-desc">Input & controls</div>
                        </div>
                        <i class="fa-solid fa-chevron-down submenu-arrow"></i>
                    </div>
                </div>
                <div class="mobile-menu-submenu">
                    <a href="#" class="mobile-submenu-item">
                        <i class="fa-solid fa-circle"></i>
                        <span>Basic Form</span>
                    </a>
                    <a href="#" class="mobile-submenu-item">
                        <i class="fa-solid fa-circle"></i>
                        <span>Advanced Form</span>
                    </a>
                </div>
            </div>
            
            <!-- Tables -->
            <div class="mobile-menu-group">
                <div class="mobile-menu-group-header">
                    <div class="mobile-menu-item">
                        <div class="mobile-menu-icon bg-info">
                            <i class="fa-solid fa-table"></i>
                        </div>
                        <div class="mobile-menu-text">
                            <div class="mobile-menu-title">Tables</div>
                            <div class="mobile-menu-desc">Data tables</div>
                        </div>
                        <i class="fa-solid fa-chevron-down submenu-arrow"></i>
                    </div>
                </div>
                <div class="mobile-menu-submenu">
                    <a href="{{ route('tables.basic') }}" class="mobile-submenu-item">
                        <i class="fa-solid fa-circle"></i>
                        <span>Basic Table</span>
                    </a>
                    <a href="{{ route('tables.datatable') }}" class="mobile-submenu-item">
                        <i class="fa-solid fa-circle"></i>
                        <span>DataTable</span>
                    </a>
                </div>
            </div>
            
            <!-- Charts -->
            <div class="mobile-menu-item" data-link="#">
                <div class="mobile-menu-icon bg-warning">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div class="mobile-menu-text">
                    <div class="mobile-menu-title">Charts</div>
                    <div class="mobile-menu-desc">Analytics & reports</div>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            
            <!-- Settings -->
            <div class="mobile-menu-item" data-link="#">
                <div class="mobile-menu-icon bg-secondary">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="mobile-menu-text">
                    <div class="mobile-menu-title">Settings</div>
                    <div class="mobile-menu-desc">Configuration</div>
                </div>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
        
        <div class="mobile-menu-footer">
            <div class="mobile-menu-user">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0078D4&color=fff&size=40" alt="User">
                <div class="mobile-user-info">
                    <div class="mobile-user-name">Admin User</div>
                    <div class="mobile-user-role">Administrator</div>
                </div>
            </div>
            <div class="mobile-menu-actions">
                <button class="mobile-action-btn" id="mobileThemeToggle" title="Toggle Theme">
                    <i class="fa-solid fa-moon"></i>
                </button>
                <button class="mobile-action-btn" id="mobileFullscreenToggle" title="Fullscreen">
                    <i class="fa-solid fa-expand"></i>
                </button>
                <a href="#" class="mobile-action-btn" title="Logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        </div>
    </div>
</div>
