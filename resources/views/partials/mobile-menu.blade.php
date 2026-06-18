<!-- Mobile Menu Popup -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay">
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <div class="mobile-menu-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cube"><path d="m5 7 7-4 7 4v10l-7 4-7-4Z"></path><path d="M5 7v10L12 21V11"></path><path d="M12 11 19 7"></path><path d="M12 11v10"></path></svg>
                <span>Swantara Admin</span>
            </div>
            <button class="mobile-menu-close" id="mobileMenuClose">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
            </button>
        </div>
        
        <div class="mobile-menu-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
            <input type="text" id="mobileMenuSearch" placeholder="Cari menu...">
        </div>
        
        <div class="mobile-menu-content" id="mobileMenuContent">
            <!-- Mobile menu will be auto-generated from sidebar by JavaScript -->
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>
                </button>
                <button class="mobile-action-btn" id="mobileFullscreenToggle" title="Fullscreen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-expand"><path d="m21 21-6-6m6 6v-4.8m0 4.8h-4.8"></path><path d="M3 16.2V21m0 0h4.8M3 21l6-6"></path><path d="M21 7.8V3m0 0h-4.8M21 3l-6 6"></path><path d="M3 7.8V3m0 0h4.8M3 3l6 6"></path></svg>
                </button>
                <a href="#" class="mobile-action-btn" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg>
                </a>
            </div>
        </div>
    </div>
</div>
