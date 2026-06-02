/* ============================================
   Metro Admin - Core Application Logic
   ============================================ */

'use strict';

const MetroAdmin = {
    // App State
    state: {
        theme: localStorage.getItem('metro-theme') || 'light',
        sidebarCollapsed: localStorage.getItem('sidebar-collapsed') === 'true',
        currentPage: 'dashboard',
    },

    // Initialize on DOM ready
    init() {
        this.initTheme();
        this.initSidebar();
        this.initNavbar();
        this.initCommandPalette();
        this.initNotificationPanel();
        this.initNProgress();
        this.initKeyboardShortcuts();
        this.initCounters();
        this.initCharts();
    },

    // ==========================================
    // THEME SYSTEM
    // ==========================================
    initTheme() {
        document.documentElement.setAttribute('data-theme', this.state.theme);
        this.updateThemeIcon();

        $('#themeToggle').on('click', () => {
            this.toggleTheme();
        });
    },

    toggleTheme() {
        this.state.theme = this.state.theme === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', this.state.theme);
        localStorage.setItem('metro-theme', this.state.theme);
        this.updateThemeIcon();
    },

    updateThemeIcon() {
        const icon = $('#themeToggle i');
        if (this.state.theme === 'dark') {
            icon.removeClass('fa-moon').addClass('fa-sun');
        } else {
            icon.removeClass('fa-sun').addClass('fa-moon');
        }
    },

    // ==========================================
    // SIDEBAR
    // ==========================================
    initSidebar() {
        const sidebar = $('#appSidebar');
        
        if (this.state.sidebarCollapsed) {
            sidebar.addClass('collapsed');
        }

        // Toggle sidebar
        $('#sidebarToggle').on('click', () => {
            sidebar.toggleClass('collapsed');
            this.state.sidebarCollapsed = sidebar.hasClass('collapsed');
            localStorage.setItem('sidebar-collapsed', this.state.sidebarCollapsed);
        });

        // Mobile toggle
        $('#mobileToggle').on('click', () => {
            sidebar.toggleClass('mobile-open');
        });

        // Close sidebar on outside click (mobile)
        $(document).on('click', (e) => {
            if ($(window).width() < 992) {
                if (!$(e.target).closest('.app-sidebar, #mobileToggle').length) {
                    sidebar.removeClass('mobile-open');
                }
            }
        });

        // Submenu toggle
        $('.nav-item.has-submenu > .nav-link').on('click', function(e) {
            e.preventDefault();
            $(this).parent().toggleClass('open');
        });

        // Menu search
        $('#menuSearch').on('input', function() {
            const query = $(this).val().toLowerCase();
            $('.nav-item').each(function() {
                const text = $(this).find('.nav-link span').first().text().toLowerCase();
                if (query === '' || text.includes(query)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
            $('.nav-section').toggle(query === '');
        });
    },

    // ==========================================
    // NAVBAR
    // ==========================================
    initNavbar() {
        // Fullscreen toggle
        $('#fullscreenToggle').on('click', () => {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
                $('#fullscreenToggle i').removeClass('fa-expand').addClass('fa-compress');
            } else {
                document.exitFullscreen();
                $('#fullscreenToggle i').removeClass('fa-compress').addClass('fa-expand');
            }
        });

        // Notification dropdown toggle
        $('#notifBtn').on('click', (e) => {
            e.stopPropagation();
            const dropdown = $('#notifDropdown .navbar-dropdown');
            const isShowing = dropdown.hasClass('show');
            
            // Close all dropdowns first
            $('.navbar-dropdown').removeClass('show');
            
            if (!isShowing) {
                dropdown.addClass('show');
            }
        });

        // Message dropdown toggle
        $('#msgBtn').on('click', (e) => {
            e.stopPropagation();
            const dropdown = $('#msgDropdown .navbar-dropdown');
            const isShowing = dropdown.hasClass('show');
            
            // Close all dropdowns first
            $('.navbar-dropdown').removeClass('show');
            
            if (!isShowing) {
                dropdown.addClass('show');
            }
        });

        // User dropdown toggle
        $('#userDropdown').on('click', (e) => {
            e.stopPropagation();
            const dropdown = $('#userDropdownWrapper .navbar-dropdown');
            const isShowing = dropdown.hasClass('show');
            
            // Close all dropdowns first
            $('.navbar-dropdown').removeClass('show');
            
            if (!isShowing) {
                dropdown.addClass('show');
            }
        });

        // Close dropdowns when clicking outside
        $(document).on('click', (e) => {
            if (!$(e.target).closest('.navbar-dropdown-wrapper').length) {
                $('.navbar-dropdown').removeClass('show');
            }
        });

        // Close dropdowns on escape
        $(document).on('keydown', (e) => {
            if (e.key === 'Escape') {
                $('.navbar-dropdown').removeClass('show');
            }
        });
    },

    // ==========================================
    // COMMAND PALETTE (CTRL+K)
    // ==========================================
    initCommandPalette() {
        const overlay = $('#commandPaletteOverlay');
        const input = $('#commandInput');
        const results = $('#commandResults');

        // Open command palette
        $('#searchTrigger').on('click', () => this.openCommandPalette());

        // Close on overlay click
        overlay.on('click', (e) => {
            if ($(e.target).is(overlay)) {
                this.closeCommandPalette();
            }
        });

        // Filter commands
        input.on('input', function() {
            const query = $(this).val().toLowerCase();
            $('.command-item').each(function() {
                const text = $(this).find('span').text().toLowerCase();
                $(this).toggle(text.includes(query));
            });
            // Hide empty groups
            $('.command-group').each(function() {
                const visible = $(this).find('.command-item:visible').length;
                $(this).toggle(visible > 0);
            });
        });

        // Command item click
        $(document).on('click', '.command-item', function() {
            const action = $(this).data('action');
            const target = $(this).data('target');

            if (action === 'navigate' && target) {
                window.location.href = target;
            } else if (action === 'theme') {
                MetroAdmin.toggleTheme();
            } else if (action === 'fullscreen') {
                $('#fullscreenToggle').click();
            }
            MetroAdmin.closeCommandPalette();
        });
    },

    openCommandPalette() {
        $('#commandPaletteOverlay').addClass('active');
        setTimeout(() => $('#commandInput').focus(), 100);
    },

    closeCommandPalette() {
        $('#commandPaletteOverlay').removeClass('active');
        $('#commandInput').val('');
        $('.command-item').show();
        $('.command-group').show();
    },

    // ==========================================
    // NOTIFICATION PANEL
    // ==========================================
    initNotificationPanel() {
        const panel = $('#notifPanel');

        $('#notifBtn').on('click', (e) => {
            e.stopPropagation();
            panel.toggleClass('open');
        });

        $(document).on('click', (e) => {
            if (!$(e.target).closest('#notifPanel, #notifBtn').length) {
                panel.removeClass('open');
            }
        });

        // Mark all read
        $('.mark-all-read').on('click', () => {
            $('.notif-item').removeClass('unread');
            $('.notif-badge').text('0').hide();
        });
    },

    // ==========================================
    // NPROGRESS
    // ==========================================
    initNProgress() {
        NProgress.configure({
            showSpinner: false,
            minimum: 0.15,
            speed: 400,
            trickleSpeed: 200
        });
    },

    // ==========================================
    // KEYBOARD SHORTCUTS
    // ==========================================
    initKeyboardShortcuts() {
        $(document).on('keydown', (e) => {
            // Ctrl+K - Command Palette
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                this.openCommandPalette();
            }
            // Escape
            if (e.key === 'Escape') {
                this.closeCommandPalette();
                $('#notifPanel').removeClass('open');
            }
        });
    },

    // ==========================================
    // KEYBOARD SHORTCUTS
    // ==========================================
    showToast(message, type = 'info') {
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-times-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };
        
        const toast = $(`
            <div class="toast-notification">
                <i class="fa-solid ${icons[type]}" style="color: var(--${type === 'error' ? 'danger' : type})"></i>
                <span style="font-size: 13px">${message}</span>
            </div>
        `).appendTo('body');

        setTimeout(() => {
            toast.addClass('exit');
            setTimeout(() => toast.remove(), 300);
        }, 3500);
    },

    animateCounter(element, target, duration = 1500) {
        const start = 0;
        const startTime = performance.now();
        const suffix = element.dataset.suffix || '';

        const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(start + (target - start) * eased);
            
            element.textContent = current.toLocaleString('id-ID') + suffix;
            
            if (progress < 1) {
                requestAnimationFrame(update);
            }
        };

        requestAnimationFrame(update);
    },

    // Init counters
    initCounters() {
        document.querySelectorAll('.counter').forEach(el => {
            const target = parseInt(el.dataset.target);
            if (target) this.animateCounter(el, target);
        });
        
        // Stagger animation
        setTimeout(() => {
            document.querySelectorAll('.stagger-children').forEach(el => el.classList.add('visible'));
        }, 100);
    },

    // Init charts (if on dashboard)
    initCharts() {
        if (typeof Chart === 'undefined') return;
        
        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart');
        if (revenueCtx) {
            new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                        label: 'Pendapatan (Juta)',
                        data: [65, 72, 68, 85, 92, 78, 95, 88, 102, 110, 98, 125],
                        borderColor: '#0078D4',
                        backgroundColor: 'rgba(0, 120, 212, 0.06)',
                        borderWidth: 2.5,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { grid: { display: false }, ticks: { font: { size: 11 } } },
                        y: { grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 11 } } }
                    },
                    interaction: { intersect: false, mode: 'index' }
                }
            });
        }

        // User Growth
        const userCtx = document.getElementById('userGrowthChart');
        if (userCtx) {
            new Chart(userCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                    datasets: [{
                        label: 'Pengguna Baru',
                        data: [320, 450, 380, 520, 610, 740],
                        backgroundColor: 'rgba(0, 120, 212, 0.7)',
                        borderRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { grid: { display: false }, ticks: { font: { size: 11 } } },
                        y: { grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 11 } } }
                    }
                }
            });
        }

        // Sales Chart
        const salesCtx = document.getElementById('salesChart');
        if (salesCtx) {
            new Chart(salesCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Elektronik', 'Fashion', 'Makanan', 'Kesehatan', 'Lainnya'],
                    datasets: [{
                        data: [35, 25, 20, 12, 8],
                        backgroundColor: ['#0078D4', '#16C60C', '#FFB900', '#E81123', '#00BCF2'],
                        borderWidth: 0,
                        spacing: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '65%',
                    plugins: { legend: { position: 'bottom', labels: { padding: 16, font: { size: 11 } } } }
                }
            });
        }

        // Top Products
        const topCtx = document.getElementById('topProductsChart');
        if (topCtx) {
            new Chart(topCtx, {
                type: 'bar',
                data: {
                    labels: ['Laptop Pro', 'Headphone X', 'Mouse Wireless', 'Keyboard Mech', 'Monitor 27"'],
                    datasets: [{
                        label: 'Terjual',
                        data: [142, 98, 87, 76, 65],
                        backgroundColor: ['#0078D4', '#00BCF2', '#16C60C', '#FFB900', '#E81123'],
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y',
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { grid: { color: 'rgba(0,0,0,0.04)' } },
                        y: { grid: { display: false } }
                    }
                }
            });
        }
    }
};

// Initialize on DOM ready
$(document).ready(() => {
    MetroAdmin.init();
});
