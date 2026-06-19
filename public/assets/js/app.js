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

    // DSGT Carousels state storage
    dsgtCarousels: {},

    // Initialize on DOM ready
    init() {
        console.log('🚀 [DSGT METRO v2] App initializing at', new Date().toISOString());
        this.initTheme();
        this.initSidebar();
        this.initNavbar();
        this.initCommandPalette();
        this.initMobileMenu();
        this.initNotificationPanel();
        this.initNProgress();
        this.initKeyboardShortcuts();
        this.initCounters();
        this.initCharts();
        this.initColorPickers();
        this.initPasswordToggle();
        this.initRangeSliders();
        this.initNumberInputs();
        this.initSearchInputs();
        this.initInputGroupDropdowns();
        this.initAccordions();
        this.initAlerts();
        this.initAvatars();
        this.initBadges();
        this.initBreadcrumbs();
        this.initButtons();
        this.initCards();
        this.initCarousels();
        this.initCollapses();
        this.initColors();
        this.initDropdowns();
        this.initGrids();
        this.initImages();
        this.initLinks();
        this.initListGroups();
        this.initModals();
        this.initNotifications();
        this.initOffcanvas();
        this.initPagination();
        this.initPlaceholders();
        this.initPopovers();
        this.initProgress();
        this.initScrollspy();
        this.initSkeletons();
        this.initSpinners();
        this.initTabs();
        this.initTimelines();
        this.initToasts();
        this.initTooltips();
        this.initTypographies();
        this.initVideos();
        this.initFlatpickrs();
        // Touch Spin initialized in touch-spin.js
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

        // Toggle sidebar (from navbar)
        $('#sidebarToggleNav').on('click', () => {
            sidebar.toggleClass('collapsed');
            this.state.sidebarCollapsed = sidebar.hasClass('collapsed');
            localStorage.setItem('sidebar-collapsed', this.state.sidebarCollapsed);
        });

        // Close sidebar on overlay click (mobile)
        $('#sidebarOverlay').on('click', () => {
            sidebar.removeClass('mobile-open');
            $('#sidebarOverlay').removeClass('active');
        });

        // Close sidebar on outside click (mobile)
        $(document).on('click', (e) => {
            if ($(window).width() < 992) {
                if (!$(e.target).closest('.app-sidebar, #mobileToggle').length) {
                    sidebar.removeClass('mobile-open');
                    $('#sidebarOverlay').removeClass('active');
                }
            }
        });

        // Close sidebar when clicking nav link (mobile)
        $('.sidebar-nav .nav-link').on('click', function() {
            if ($(window).width() < 992 && !$(this).parent().hasClass('has-submenu')) {
                sidebar.removeClass('mobile-open');
                $('#sidebarOverlay').removeClass('active');
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

    // Mobile Menu Initialization
    initMobileMenu() {
        // Mobile toggle - Open mobile menu popup
        $('#mobileToggle').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openMobileMenu();
        });

        // Mobile menu close button
        $('#mobileMenuClose').on('click', function() {
            closeMobileMenu();
        });

        // Close mobile menu on overlay click
        $('#mobileMenuOverlay').on('click', function(e) {
            if (e.target === this) {
                closeMobileMenu();
            }
        });

        // Mobile menu search functionality
        $('#mobileMenuSearch').on('input', function() {
            const searchTerm = $(this).val().toLowerCase();
            filterMobileMenu(searchTerm);
        });

        // Mobile submenu toggle
        $('.mobile-menu-group-header').on('click', function() {
            const submenu = $(this).siblings('.mobile-menu-submenu');
            const arrow = $(this).find('.submenu-arrow');
            
            submenu.toggleClass('active');
            arrow.toggleClass('rotated');
        });

        // Mobile menu item click
        $('.mobile-menu-item[data-link]').on('click', function() {
            const link = $(this).data('link');
            if (link && link !== '#') {
                closeMobileMenu();
                setTimeout(() => {
                    window.location.href = link;
                }, 200);
            }
        });

        // Mobile theme toggle
        $('#mobileThemeToggle').on('click', function() {
            MetroAdmin.toggleTheme();
        });

        // Mobile fullscreen toggle
        $('#mobileFullscreenToggle').on('click', function() {
            MetroAdmin.toggleFullscreen();
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
    },

    // ==========================================
    // COLOR PICKER SYNC
    // ==========================================
    initColorPickers() {
        // Find all color picker groups
        $('input[type="color"]').each(function() {
            const colorInput = $(this);
            const parent = colorInput.closest('.form-group');
            const textInput = parent.find('input[type="text"][readonly]');
            
            if (textInput.length) {
                // Sync color picker to text input
                colorInput.on('input', function() {
                    const colorValue = $(this).val();
                    textInput.val(colorValue);
                });
                
                // Sync text input to color picker (if user edits manually)
                textInput.on('input', function() {
                    const textValue = $(this).val();
                    // Validate hex color format
                    if (/^#[0-9A-Fa-f]{6}$/.test(textValue)) {
                        colorInput.val(textValue);
                    }
                });
            }
        });
    },

    // ==========================================
    // PASSWORD VISIBILITY TOGGLE
    // ==========================================
    initPasswordToggle() {
        $(document).on('click', '.input-with-icon-right i.fa-eye, .input-with-icon-right i.fa-eye-slash', function() {
            const icon = $(this);
            const input = icon.siblings('input');
            
            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
                icon.attr('title', 'Hide password');
            } else {
                input.attr('type', 'password');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
                icon.attr('title', 'Toggle password visibility');
            }
        });
    },

    // ==========================================
    // RANGE SLIDER VALUE DISPLAY
    // ==========================================
    initRangeSliders() {
        $('input[type="range"]').each(function() {
            const rangeInput = $(this);
            const helperText = rangeInput.closest('.form-group').find('.helper-text');
            
            // Function to update helper text based on range label
            const updateDisplay = function() {
                const value = rangeInput.val();
                const min = rangeInput.attr('min') || 0;
                const max = rangeInput.attr('max') || 100;
                const label = rangeInput.closest('.form-group').find('label').first().text();
                
                // Update helper text with current value
                if (label.includes('Volume')) {
                    helperText.html('<i class="fa-solid fa-volume-high"></i> Current: ' + value + '%');
                } else if (label.includes('Price')) {
                    helperText.html('<i class="fa-solid fa-dollar-sign"></i> Current: $' + value);
                } else if (label.includes('Brightness')) {
                    helperText.html('<i class="fa-solid fa-sun"></i> Current: ' + value);
                } else {
                    helperText.html('<i class="fa-solid fa-sliders"></i> Current: ' + value + ' (' + min + '-' + max + ')');
                }
            };
            
            // Update on input change
            rangeInput.on('input', updateDisplay);
            
            // Initial display
            updateDisplay();
        });
    },

    // ==========================================
    // NUMBER INPUT SPINNER
    // ==========================================
    initNumberInputs() {
        $('input[type="number"]').each(function() {
            const numberInput = $(this);
            const helperText = numberInput.closest('.form-group').find('.helper-text');
            
            numberInput.on('input change', function() {
                const value = $(this).val();
                const min = $(this).attr('min');
                const max = $(this).attr('max');
                const step = $(this).attr('step');
                
                // Update helper text if exists
                if (helperText.length) {
                    const label = $(this).closest('.form-group').find('label').first().text();
                    
                    if (label.includes('Decimal')) {
                        helperText.html('<i class="fa-solid fa-coins"></i> Value: ' + value + ' (Step: ' + step + ')');
                    } else if (label.includes('Range')) {
                        helperText.html('<i class="fa-solid fa-arrows-left-right"></i> Min: ' + min + ', Max: ' + max + ', Current: ' + value);
                    } else {
                        helperText.html('<i class="fa-solid fa-circle-info"></i> Current value: ' + value);
                    }
                }
            });
        });
    },

    // ==========================================
    // SEARCH INPUT CLEAR BUTTON
    // ==========================================
    initSearchInputs() {
        $('input[type="search"]').each(function() {
            const searchInput = $(this);
            const parent = searchInput.closest('.input-with-icon');
            
            // Add clear button if not exists
            if (!parent.find('.search-clear').length) {
                searchInput.after('<i class="fa-solid fa-xmark search-clear" style="position: absolute; right: 12px; cursor: pointer; color: var(--text-tertiary); display: none;"></i>');
            }
            
            const clearBtn = parent.find('.search-clear');
            
            // Show/hide clear button
            searchInput.on('input', function() {
                if ($(this).val().length > 0) {
                    clearBtn.show();
                } else {
                    clearBtn.hide();
                }
            });
            
            // Clear on click
            clearBtn.on('click', function() {
                searchInput.val('').focus();
                clearBtn.hide();
            });
        });
    },

    // ==========================================
    // INPUT GROUP DROPDOWNS
    // ==========================================
    initInputGroupDropdowns() {
        // Dropdown toggle button click
        $(document).on('click', '.input-group .dropdown-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const btn = $(this);
            const inputGroup = btn.closest('.input-group');
            
            // Check if dropdown menu already exists
            let dropdownMenu = inputGroup.find('.dropdown-menu');
            
            if (!dropdownMenu.length) {
                // Create dropdown menu
                dropdownMenu = $('<div class="dropdown-menu">').html(`
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                    <a class="dropdown-item" href="#">Action 3</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else</a>
                `);
                
                inputGroup.append(dropdownMenu);
            }
            
            // Toggle dropdown
            dropdownMenu.toggleClass('show');
            
            // Position dropdown below input group
            const inputGroupOffset = inputGroup.offset();
            const inputGroupHeight = inputGroup.outerHeight();
            
            dropdownMenu.css({
                position: 'absolute',
                top: inputGroupHeight + 'px',
                left: 0,
                zIndex: 1000
            });
        });
        
        // Close dropdown when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.input-group').length) {
                $('.input-group .dropdown-menu').removeClass('show');
            }
        });
        
        // Handle dropdown item click
        $(document).on('click', '.input-group .dropdown-menu .dropdown-item', function(e) {
            e.preventDefault();
            const text = $(this).text();
            const inputGroup = $(this).closest('.input-group');
            const input = inputGroup.find('input.form-control');
            
            // Update input value
            if (input.length) {
                input.val(text);
            }
            
            // Close dropdown
            inputGroup.find('.dropdown-menu').removeClass('show');
        });
    },

    // ==========================================
    // DSGT METRO TEMPLATE - ACCORDION COMPONENT
    // ==========================================
    initAccordions() {
        // Initialize all DSGT accordions on page load
        $('.dsgt-accordion').each(function() {
            MetroAdmin.setupAccordion($(this));
        });

        // Event delegation for dynamic accordions
        $(document).on('click', '.dsgt-accordion .dsgt-ac-heading', function() {
            MetroAdmin.toggleAccordion($(this));
        });

        console.log('✨ DSGT Metro Template - Accordion Component Initialized');
    },

    /**
     * Setup individual accordion with data attributes
     * @param {jQuery} $accordion - The accordion container
     */
    setupAccordion($accordion) {
        const openIndex = parseInt($accordion.attr('data-open'));
        
        // If data-open attribute exists, open that panel
        if (!isNaN(openIndex) && openIndex >= 0) {
            const $frames = $accordion.find('.dsgt-ac-frame');
            
            // Reset all frames first
            $frames.removeClass('dsgt-ac-active');
            $frames.find('.dsgt-ac-content').hide();
            
            // Open specified panel
            if ($frames[openIndex]) {
                const $targetFrame = $($frames[openIndex]);
                $targetFrame.addClass('dsgt-ac-active');
                $targetFrame.find('.dsgt-ac-content').show();
            }
        } else {
            // Honor already active frames
            $accordion.find('.dsgt-ac-frame.dsgt-ac-active .dsgt-ac-content').show();
        }
    },

    /**
     * Toggle accordion panel
     * @param {jQuery} $heading - The clicked heading element
     */
    toggleAccordion($heading) {
        const $frame = $heading.closest('.dsgt-ac-frame');
        const $accordion = $frame.closest('.dsgt-accordion');
        const $content = $frame.find('.dsgt-ac-content');
        const isActive = $frame.hasClass('dsgt-ac-active');
        const oneOpen = $accordion.attr('data-one-open') === 'true';

        if (oneOpen) {
            // Close all other panels with animation
            $accordion.find('.dsgt-ac-frame.dsgt-ac-active').not($frame).each(function() {
                const $otherFrame = $(this);
                const $otherContent = $otherFrame.find('.dsgt-ac-content');
                
                $otherFrame.removeClass('dsgt-ac-active');
                $otherContent.slideUp(400);
            });
        }

        // Toggle clicked panel
        if (isActive) {
            // Close panel
            $frame.removeClass('dsgt-ac-active');
            $content.slideUp(400);
        } else {
            // Open panel
            $frame.addClass('dsgt-ac-active');
            $content.slideDown(400);
        }
    },

    /**
     * Open specific accordion panel by index
     * @param {jQuery|string} accordionSelector - Accordion selector
     * @param {number} index - Panel index to open
     * @param {boolean} scrollToAccordion - Scroll to accordion after opening
     */
    openAccordionPanel(accordionSelector, index, scrollToAccordion = false) {
        const $accordion = typeof accordionSelector === 'string' 
            ? $(accordionSelector) 
            : accordionSelector;
        
        if ($accordion.length === 0) return;

        const $frames = $accordion.find('.dsgt-ac-frame');
        const $targetFrame = $frames.eq(index);

        if ($targetFrame.length === 0) return;

        // If one-open mode, close all others
        const oneOpen = $accordion.attr('data-one-open') === 'true';
        if (oneOpen) {
            $frames.each(function() {
                const $frame = $(this);
                $frame.removeClass('dsgt-ac-active');
                $frame.find('.dsgt-ac-content').slideUp(400);
            });
        }

        // Open target panel
        $targetFrame.addClass('dsgt-ac-active');
        $targetFrame.find('.dsgt-ac-content').slideDown(400);

        // Optional: scroll to accordion
        if (scrollToAccordion) {
            $('html, body').animate({
                scrollTop: $accordion.offset().top - 100
            }, 500);
        }
    },

    /**
     * Close all panels in an accordion
     * @param {jQuery|string} accordionSelector - Accordion selector
     */
    closeAllAccordionPanels(accordionSelector) {
        const $accordion = typeof accordionSelector === 'string' 
            ? $(accordionSelector) 
            : accordionSelector;
        
        if ($accordion.length === 0) return;

        $accordion.find('.dsgt-ac-frame.dsgt-ac-active').each(function() {
            const $frame = $(this);
            $frame.removeClass('dsgt-ac-active');
            $frame.find('.dsgt-ac-content').slideUp(400);
        });
    },

    /**
     * Open all panels in an accordion (only works if data-one-open="false")
     * @param {jQuery|string} accordionSelector - Accordion selector
     */
    openAllAccordionPanels(accordionSelector) {
        const $accordion = typeof accordionSelector === 'string' 
            ? $(accordionSelector) 
            : accordionSelector;
        
        if ($accordion.length === 0) return;
        if ($accordion.attr('data-one-open') === 'true') return;

        $accordion.find('.dsgt-ac-frame').each(function() {
            const $frame = $(this);
            $frame.addClass('dsgt-ac-active');
            $frame.find('.dsgt-ac-content').slideDown(400);
        });
    },

    /**
     * Dynamically add new panel to accordion
     * @param {jQuery|string} accordionSelector - Accordion selector
     * @param {string} title - Panel title
     * @param {string} content - Panel content (HTML)
     * @param {string} icon - Optional FontAwesome icon class
     */
    addAccordionPanel(accordionSelector, title, content, icon = null) {
        const $accordion = typeof accordionSelector === 'string' 
            ? $(accordionSelector) 
            : accordionSelector;
        
        if ($accordion.length === 0) return;

        let titleHTML = icon 
            ? `<span class="dsgt-ac-title dsgt-ac-heading-icon"><i class="${icon}"></i> ${title}</span>`
            : `<span class="dsgt-ac-title">${title}</span>`;

        const panelHTML = `
            <div class="dsgt-ac-frame">
                <div class="dsgt-ac-heading">
                    ${titleHTML}
                    <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                </div>
                <div class="dsgt-ac-content">
                    ${content}
                </div>
            </div>
        `;

        $accordion.append(panelHTML);
    },

    // ==========================================
    // DSGT METRO TEMPLATE - ALERT COMPONENT
    // ==========================================
    initAlerts() {
        // Event delegation for dismiss buttons
        $(document).on('click', '.dsgt-alert-close', function(e) {
            e.preventDefault();
            e.stopPropagation();
            MetroAdmin.dismissAlert($(this));
        });

        console.log('✨ DSGT Metro Template - Alert Component Initialized');
    },

    /**
     * Dismiss alert with animation
     * @param {jQuery} $button - The close button element
     */
    dismissAlert($button) {
        if (!$button || $button.length === 0) return;
        const $alert = $button.closest('.dsgt-alert');
        if ($alert && $alert.length > 0) {
            $alert.addClass('dsgt-al-fade-out');
            setTimeout(() => $alert.remove(), 300);
        }
    },

    /**
     * Generate alert dynamically
     * @param {string} type - Alert type (success, info, warning, danger)
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {string|jQuery} container - Container selector or jQuery object (default: '.dsgt-al-dynamic-container')
     * @param {boolean} dismissible - Whether alert can be dismissed (default: true)
     * @param {number} autoDismiss - Auto-dismiss time in ms (0 = no auto-dismiss, default: 10000)
     * @param {Object} actions - Optional action buttons {label, class, onClick}
     * @param {Array} listItems - Optional list items for alert content
     */
    generateAlert(type, title, message, container = '.dsgt-al-dynamic-container', dismissible = true, autoDismiss = 10000, actions = null, listItems = null) {
        const $container = typeof container === 'string' ? $(container) : container;
        
        if ($container.length === 0) {
            console.error('DSGT Alert: Container not found');
            return;
        }

        // Alert configuration
        const alertConfig = {
            success: {
                class: 'dsgt-alert-success',
                icon: 'fa-check-circle'
            },
            info: {
                class: 'dsgt-alert-info',
                icon: 'fa-info-circle'
            },
            warning: {
                class: 'dsgt-alert-warning',
                icon: 'fa-exclamation-triangle'
            },
            danger: {
                class: 'dsgt-alert-danger',
                icon: 'fa-times-circle'
            }
        };

        const config = alertConfig[type];
        if (!config) {
            console.error('DSGT Alert: Invalid alert type');
            return;
        }

        // Build alert HTML
        let contentHTML = `
            <div class="dsgt-alert-title">${title}</div>
            <p class="dsgt-alert-message">${message}</p>
        `;

        // Add list items if provided
        if (listItems && listItems.length > 0) {
            contentHTML += '<ul class="dsgt-alert-list">';
            listItems.forEach(item => {
                contentHTML += `<li>${item}</li>`;
            });
            contentHTML += '</ul>';
        }

        // Add action buttons if provided
        if (actions && actions.length > 0) {
            contentHTML += '<div class="dsgt-alert-actions">';
            actions.forEach(action => {
                const onClickAttr = action.onClick ? `onclick="${action.onClick}"` : '';
                contentHTML += `
                    <button class="btn ${action.class} btn-sm" ${onClickAttr}>
                        ${action.icon ? `<i class="${action.icon}"></i> ` : ''}${action.label}
                    </button>
                `;
            });
            contentHTML += '</div>';
        }

        const dismissibleClass = dismissible ? 'dsgt-alert-dismissible' : '';
        const closeBtnHTML = dismissible ? `
            <button class="dsgt-alert-close">
                <i class="fa-solid fa-times"></i>
            </button>
        ` : '';

        const alertHTML = `
            <div class="dsgt-alert ${config.class} ${dismissibleClass}">
                <div class="dsgt-alert-icon">
                    <i class="fa-solid ${config.icon}"></i>
                </div>
                <div class="dsgt-alert-content">
                    ${contentHTML}
                </div>
                ${closeBtnHTML}
            </div>
        `;

        $container.append(alertHTML);

        // Auto-dismiss if enabled
        if (autoDismiss > 0 && dismissible) {
            setTimeout(() => {
                const $alerts = $container.find('.dsgt-alert');
                const $lastAlert = $alerts.last();
                if ($lastAlert.length > 0 && !$lastAlert.hasClass('dsgt-al-fade-out')) {
                    MetroAdmin.dismissAlert($lastAlert.find('.dsgt-alert-close'));
                }
            }, autoDismiss);
        }

        return $container.find('.dsgt-alert').last();
    },

    /**
     * Create inline alert (not in dynamic container)
     * @param {string} type - Alert type (success, info, warning, danger)
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {string|jQuery} insertAfter - Insert after this selector
     * @param {boolean} dismissible - Whether alert can be dismissed (default: true)
     */
    createInlineAlert(type, title, message, insertAfter, dismissible = true) {
        const $insertAfter = typeof insertAfter === 'string' ? $(insertAfter) : insertAfter;
        
        if ($insertAfter.length === 0) {
            console.error('DSGT Alert: Insert target not found');
            return;
        }

        // Use generateAlert but with temporary container
        const $tempContainer = $('<div></div>');
        const $alert = MetroAdmin.generateAlert(type, title, message, $tempContainer, dismissible, 0);
        
        if ($alert) {
            $alert.insertAfter($insertAfter);
        }

        return $alert;
    },

    /**
     * Clear all alerts from container
     * @param {string|jQuery} container - Container selector or jQuery object (default: '.dsgt-al-dynamic-container')
     * @param {boolean} withAnimation - Remove with animation (default: true)
     */
    clearAllAlerts(container = '.dsgt-al-dynamic-container', withAnimation = true) {
        const $container = typeof container === 'string' ? $(container) : container;
        
        if ($container.length === 0) {
            console.error('DSGT Alert: Container not found');
            return;
        }

        const $alerts = $container.find('.dsgt-alert');
        
        if ($alerts.length === 0) {
            // Show info message
            MetroAdmin.generateAlert('info', 'Info', 'No alerts to clear', container, true, 3000);
            return;
        }

        if (withAnimation) {
            $alerts.each((index, alert) => {
                setTimeout(() => {
                    const $alert = $(alert);
                    $alert.addClass('dsgt-al-fade-out');
                    if (index === $alerts.length - 1) {
                        setTimeout(() => {
                            $container.find('.dsgt-alert').remove();
                        }, 300);
                    }
                }, index * 100);
            });
        } else {
            $alerts.remove();
        }
    },

    /**
     * Show success alert
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {string|jQuery} container - Container selector or jQuery object
     */
    showSuccessAlert(title, message, container) {
        return MetroAdmin.generateAlert('success', title, message, container);
    },

    /**
     * Show info alert
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {string|jQuery} container - Container selector or jQuery object
     */
    showInfoAlert(title, message, container) {
        return MetroAdmin.generateAlert('info', title, message, container);
    },

    /**
     * Show warning alert
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {string|jQuery} container - Container selector or jQuery object
     */
    showWarningAlert(title, message, container) {
        return MetroAdmin.generateAlert('warning', title, message, container);
    },

    /**
     * Show danger alert
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {string|jQuery} container - Container selector or jQuery object
     */
    showDangerAlert(title, message, container) {
        return MetroAdmin.generateAlert('danger', title, message, container);
    },

    /**
     * Show alert with action buttons
     * @param {string} type - Alert type (success, info, warning, danger)
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {Array} actions - Action buttons [{label, class, icon, onClick}]
     * @param {string|jQuery} container - Container selector or jQuery object
     */
    showActionAlert(type, title, message, actions, container) {
        return MetroAdmin.generateAlert(type, title, message, container, true, 0, actions);
    },

    /**
     * Show alert with list items
     * @param {string} type - Alert type (success, info, warning, danger)
     * @param {string} title - Alert title
     * @param {string} message - Alert message
     * @param {Array} listItems - List items to display
     * @param {string|jQuery} container - Container selector or jQuery object
     */
    showListAlert(type, title, message, listItems, container) {
        return MetroAdmin.generateAlert(type, title, message, container, true, 0, null, listItems);
    },

    // ==========================================
    // DSGT METRO TEMPLATE - AVATAR COMPONENT
    // ==========================================
    initAvatars() {
        // Initialize avatar builder if exists
        if ($('#avatarSize, #avatarStyle, #avatarShape, #avatarStatus, #avatarText').length > 0) {
            MetroAdmin.updateAvatarPreview();
            console.log('✨ DSGT Metro Template - Avatar Builder Initialized');
        }
    },

    /**
     * Update avatar preview in real-time
     * @param {Object} config - Avatar configuration {size, style, shape, status, text, previewId, codeId}
     */
    updateAvatarPreview(config = {}) {
        const size = config.size || $('#avatarSize').val() || 'dsgt-avatar-lg';
        const style = config.style || $('#avatarStyle').val() || 'initials';
        const shape = config.shape || $('#avatarShape').val() || 'dsgt-avatar-rounded';
        const status = config.status || $('#avatarStatus').val() || '';
        const text = config.text || $('#avatarText').val() || 'JD';
        const color = config.color || window.selectedAvatarColor || '';
        
        const previewId = config.previewId || '#avatarPreview';
        const codeId = config.codeId || '#avatarCode';
        
        const $preview = $(previewId);
        const $code = $(codeId);
        
        if ($preview.length === 0) {
            console.warn('⚠️ Avatar preview element not found:', previewId);
            return;
        }
        
        // Reset classes and styles
        $preview.attr('class', 'dsgt-avatar');
        $preview.removeAttr('style');
        
        // Add size class
        $preview.addClass(size);
        
        // Add shape class
        $preview.addClass(shape);
        
        // Add color class if selected
        if (color) {
            $preview.addClass(color);
        }
        
        // Add status if selected
        if (status) {
            $preview.addClass('dsgt-avatar-status');
            $preview.addClass(status);
        }
        
        // Apply style based on type
        switch(style) {
            case 'initials':
                $preview.text(text);
                break;
            case 'icon':
                $preview.html('<i class="fa-solid fa-user dsgt-avatar-icon"></i>');
                break;
            case 'image':
                $preview.css('background', "url('https://i.pravatar.cc/150?img=12') center/cover");
                $preview.text('');
                break;
            case 'gradient':
                $preview.css('background', 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)');
                $preview.text(text);
                break;
        }
        
        // Generate HTML code for display
        let classList = ['dsgt-avatar', size, shape];
        if (color) classList.push(color);
        if (status) classList.push('dsgt-avatar-status', status);
        
        let styleAttr = '';
        if (style === 'image') {
            styleAttr = " style=\"background: url('https://i.pravatar.cc/150?img=12') center/cover;\"";
        } else if (style === 'gradient') {
            styleAttr = " style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\"";
        }
        
        let content = text;
        if (style === 'icon') {
            content = '<i class="fa-solid fa-user"></i>';
        } else if (style === 'image') {
            content = '';
        }
        
        const htmlCode = `&lt;div class="${classList.join(' ')}"${styleAttr}&gt;${content}&lt;/div&gt;`;
        
        if ($code.length > 0) {
            $code.html(htmlCode);
        }
        
        console.log('✅ Avatar preview updated:', { size, style, shape, status, text, color });
        
        return $preview;
    },

    /**
     * Reset avatar demo to default
     * @param {Object} config - Default configuration
     */
    resetAvatarPreview(config = {}) {
        const defaults = {
            size: config.size || 'dsgt-avatar-lg',
            style: config.style || 'initials',
            shape: config.shape || 'dsgt-avatar-rounded',
            status: config.status || 'online',
            text: config.text || 'JD'
        };
        
        $('#avatarSize').val(defaults.size);
        $('#avatarStyle').val(defaults.style);
        $('#avatarShape').val(defaults.shape);
        $('#avatarStatus').val(defaults.status);
        $('#avatarText').val(defaults.text);
        
        // Reset color picker
        window.selectedAvatarColor = '';
        $('.color-btn').css('border-color', 'transparent');
        $('.color-btn').first().css('border-color', 'var(--text-primary)');
        
        MetroAdmin.updateAvatarPreview();
        console.log('🔄 DSGT Avatar reset to default');
    },

    /**
     * Generate avatar HTML dynamically
     * @param {Object} config - Avatar configuration
     * @param {string} config.size - Size class (dsgt-avatar-xs/sm/md/lg/xl/2xl)
     * @param {string} config.text - Text/initials to display
     * @param {string} config.color - Color class (dsgt-avatar-success/warning/danger/info)
     * @param {string} config.shape - Shape class (dsgt-avatar-rounded/square/rounded-lg)
     * @param {string} config.status - Status class (online/offline/busy/away)
     * @param {string} config.imageUrl - Background image URL
     * @param {string} config.gradient - CSS gradient background
     * @param {string} config.icon - FontAwesome icon class
     * @param {boolean} config.bordered - Add border (default: false)
     * @returns {string} Avatar HTML
     */
    generateAvatar(config = {}) {
        const {
            size = 'dsgt-avatar-md',
            text = '',
            color = '',
            shape = 'dsgt-avatar-rounded',
            status = '',
            imageUrl = '',
            gradient = '',
            icon = '',
            bordered = false
        } = config;
        
        let classes = ['dsgt-avatar', size, shape];
        if (color) classes.push(color);
        if (status) classes.push('dsgt-avatar-status', status);
        if (bordered) classes.push('dsgt-avatar-bordered');
        
        let style = '';
        let content = text;
        
        if (imageUrl) {
            style = `background: url('${imageUrl}') center/cover;`;
            content = '';
        } else if (gradient) {
            style = `background: ${gradient};`;
        } else if (icon) {
            content = `<i class="${icon} dsgt-avatar-icon"></i>`;
        }
        
        const styleAttr = style ? ` style="${style}"` : '';
        
        return `<div class="${classes.join(' ')}"${styleAttr}>${content}</div>`;
    },

    /**
     * Generate avatar group HTML
     * @param {Array} avatars - Array of avatar config objects
     * @param {string} size - Size class for all avatars
     * @param {string} extraLabel - Extra label for last avatar (e.g., "+5")
     * @returns {string} Avatar group HTML
     */
    generateAvatarGroup(avatars = [], size = 'dsgt-avatar-lg', extraLabel = '') {
        if (avatars.length === 0) return '';
        
        let html = '<div class="dsgt-avatar-group">';
        
        avatars.forEach((config, index) => {
            if (index === avatars.length - 1 && extraLabel) {
                config.text = extraLabel;
                if (!config.color) config.color = 'dsgt-avatar-info';
            }
            html += MetroAdmin.generateAvatar({ ...config, size });
        });
        
        html += '</div>';
        return html;
    },

    /**
     * Generate avatar with badge HTML
     * @param {Object} avatarConfig - Avatar configuration
     * @param {number|string} badgeCount - Badge number or text (e.g., 3, "99+")
     * @returns {string} Avatar with badge HTML
     */
    generateAvatarWithBadge(avatarConfig = {}, badgeCount = 0) {
        const avatarHTML = MetroAdmin.generateAvatar(avatarConfig);
        
        return `
            <div class="dsgt-avatar-badge-wrapper">
                ${avatarHTML}
                <div class="dsgt-avatar-badge">${badgeCount}</div>
            </div>
        `;
    },

    // ==========================================
    // DSGT METRO TEMPLATE - BADGE COMPONENT
    // ==========================================
    initBadges() {
        // Badge counter for dynamic generation
        this.state.badgeCount = 0;
        
        // Initialize dynamic badge display if exists
        if ($('#dsgtDynamicBadgeDisplay').length > 0) {
            console.log('✨ DSGT Metro Template - Badge Component Initialized');
        }
    },

    /**
     * Generate badge dynamically
     * @param {Object} config - Badge configuration
     * @param {string} config.type - Badge type (primary, success, warning, danger, info, secondary, dark, light)
     * @param {string} config.style - Badge style (solid, outline, soft) - default: solid
     * @param {string} config.size - Badge size (xs, sm, md, lg, xl) - default: md
     * @param {string} config.text - Badge text content
     * @param {string} config.icon - Optional FontAwesome icon class
     * @param {boolean} config.pill - Pill shape (fully rounded) - default: false
     * @param {boolean} config.dot - Dot badge - default: false
     * @param {boolean} config.notification - Notification badge - default: false
     * @param {string} config.status - Status type (online, offline, busy, away) - for status badges
     * @param {boolean} config.interactive - Make badge clickable - default: false
     * @param {Function} config.onClick - Click handler for interactive badges
     * @returns {string} Badge HTML
     */
    generateBadge(config = {}) {
        const {
            type = 'primary',
            style = 'solid',
            size = 'md',
            text = '',
            icon = '',
            pill = false,
            dot = false,
            notification = false,
            status = '',
            interactive = false,
            onClick = null
        } = config;
        
        let classes = ['dsgt-badge'];
        
        // Apply style and type
        if (dot) {
            classes.push('dsgt-badge-dot');
            if (size === 'lg') classes.push('dsgt-badge-dot-lg');
            classes.push(`dsgt-badge-${type}`);
        } else if (notification) {
            classes.push('dsgt-badge-notification');
            classes.push(`dsgt-badge-${type}`);
        } else if (status) {
            classes.push('dsgt-badge-status', `dsgt-badge-status-${status}`, `dsgt-badge-soft-${type}`);
        } else {
            // Style prefix
            const stylePrefix = style === 'outline' ? 'outline-' : style === 'soft' ? 'soft-' : '';
            classes.push(`dsgt-badge-${stylePrefix}${type}`);
            
            // Size
            if (size !== 'md') classes.push(`dsgt-badge-${size}`);
        }
        
        // Additional modifiers
        if (pill && !dot) classes.push('dsgt-badge-pill');
        if (icon) classes.push('dsgt-badge-with-icon');
        if (interactive) classes.push('dsgt-badge-interactive', 'dsgt-badge-counter');
        
        // Build content
        let content = text;
        if (icon && !text.includes('<i')) {
            content = `<i class="${icon}"></i> ${text}`;
        }
        
        // Add status dot if status badge
        if (status) {
            content = `<span class="dsgt-badge-status-dot"></span> ${text}`;
        }
        
        // Build HTML
        const onclickAttr = interactive && onClick ? `onclick="(${onClick.toString()})()"` : '';
        
        return `<span class="${classes.join(' ')}" ${onclickAttr}>${content}</span>`;
    },

    /**
     * Generate badge and append to dynamic display
     * @param {string} type - Badge type (primary, success, warning, danger, icon)
     * @param {string} displayId - Container ID (default: 'dsgtDynamicBadgeDisplay')
     */
    addDynamicBadge(type, displayId = 'dsgtDynamicBadgeDisplay') {
        const $container = $(`#${displayId}`);
        
        if ($container.length === 0) {
            console.error('DSGT Badge: Display container not found');
            return;
        }
        
        // Clear placeholder text on first badge
        if ($container.find('p').length > 0) {
            $container.empty();
        }
        
        // Increment counter
        this.state.badgeCount++;
        
        const badgeConfigs = {
            primary: {
                type: 'primary',
                text: `Primary ${this.state.badgeCount}`
            },
            success: {
                type: 'success',
                text: `Success ${this.state.badgeCount}`
            },
            warning: {
                type: 'warning',
                text: `Warning ${this.state.badgeCount}`
            },
            danger: {
                type: 'danger',
                text: `Danger ${this.state.badgeCount}`
            },
            icon: {
                type: 'info',
                text: 'Featured',
                icon: 'fa-solid fa-star'
            }
        };
        
        const config = badgeConfigs[type];
        if (!config) {
            console.error('DSGT Badge: Invalid badge type');
            return;
        }
        
        const badgeHTML = MetroAdmin.generateBadge({
            ...config,
            interactive: true,
            onClick: function() { $(this).remove(); }
        });
        
        $container.append(badgeHTML);
        console.log(`🏷️ DSGT Badge generated: ${type} #${this.state.badgeCount}`);
    },

    /**
     * Clear all dynamic badges
     * @param {string} displayId - Container ID (default: 'dsgtDynamicBadgeDisplay')
     * @param {boolean} showInfo - Show info message after clearing (default: true)
     */
    clearAllBadges(displayId = 'dsgtDynamicBadgeDisplay', showInfo = true) {
        const $container = $(`#${displayId}`);
        
        if ($container.length === 0) {
            console.error('DSGT Badge: Display container not found');
            return;
        }
        
        const $badges = $container.find('.dsgt-badge');
        
        if ($badges.length === 0) {
            // Show info badge
            if (showInfo) {
                const infoBadge = MetroAdmin.generateBadge({
                    type: 'info',
                    style: 'soft',
                    text: 'No badges to clear',
                    icon: 'fa-solid fa-info-circle',
                    interactive: true
                });
                
                $container.empty().append(infoBadge);
                
                // Auto-remove info badge
                setTimeout(() => {
                    $container.find('.dsgt-badge').css('opacity', '0');
                    setTimeout(() => $container.empty(), 300);
                }, 3000);
            }
            return;
        }
        
        // Animate removal
        $badges.each((index, badge) => {
            setTimeout(() => {
                const $badge = $(badge);
                $badge.css('animation', 'dsgt-bd-badge-pop 0.3s ease reverse');
                setTimeout(() => $badge.remove(), 300);
                
                // Reset container after last badge
                if (index === $badges.length - 1) {
                    setTimeout(() => {
                        $container.html(`
                            <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0;">
                                <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                                Click buttons above to generate badges here
                            </p>
                        `);
                        MetroAdmin.state.badgeCount = 0;
                    }, 300);
                }
            }, index * 50);
        });
        
        console.log('🧹 DSGT All badges cleared');
    },

    /**
     * Generate badge group HTML
     * @param {Array} badges - Array of badge config objects
     * @returns {string} Badge group HTML
     */
    generateBadgeGroup(badges = []) {
        if (badges.length === 0) return '';
        
        let html = '<div class="dsgt-badge-group">';
        
        badges.forEach(config => {
            html += MetroAdmin.generateBadge(config);
        });
        
        html += '</div>';
        return html;
    },

    // ==========================================
    // DSGT METRO TEMPLATE - BREADCRUMB COMPONENT
    // ==========================================
    initBreadcrumbs() {
        // Initialize breadcrumb click handlers
        $(document).on('click', '.dsgt-breadcrumb-item:not(.dsgt-br-active)', function(e) {
            e.preventDefault();
            e.stopPropagation();
            MetroAdmin.handleBreadcrumbClick($(this));
        });

        console.log('✨ DSGT Metro Template - Breadcrumb Component Initialized');
    },

    /**
     * Handle breadcrumb item click
     * @param {jQuery} $item - The clicked breadcrumb item
     */
    handleBreadcrumbClick($item) {
        const text = $item.text().trim();
        console.log('🔗 DSGT Breadcrumb clicked:', text);
        
        // Show toast notification
        MetroAdmin.showToast(`Navigating to: ${text}`, 'info');
        
        // Optional: Add actual navigation logic here
        // const href = $item.attr('href');
        // if (href) window.location.href = href;
    },

    /**
     * Generate breadcrumb HTML dynamically
     * @param {Object} config - Breadcrumb configuration
     * @param {Array} config.items - Array of breadcrumb items {text, href, icon, active}
     * @param {string} config.separator - Separator type (slash, dot, chevron, angle) - default: chevron
     * @param {string} config.size - Size (sm, md, lg) - default: md
     * @param {string} config.style - Style variant (arrow, card, default) - default: default
     * @param {boolean} config.withIcons - Show icons (default: true)
     * @param {string} config.alignment - Alignment (left, center, right) - default: left
     * @param {boolean} config.withBackground - Add background container (default: false)
     * @returns {string} Breadcrumb HTML
     */
    generateBreadcrumb(config = {}) {
        const {
            items = [],
            separator = 'chevron',
            size = 'md',
            style = 'default',
            withIcons = true,
            alignment = 'left',
            withBackground = false
        } = config;
        
        if (items.length === 0) return '';
        
        // Build classes
        let classes = ['dsgt-breadcrumb'];
        classes.push(`dsgt-breadcrumb-${separator}`);
        if (size !== 'md') classes.push(`dsgt-breadcrumb-${size}`);
        if (style !== 'default') classes.push(`dsgt-breadcrumb-${style}`);
        if (withIcons) classes.push('dsgt-breadcrumb-with-icons');
        if (alignment === 'center') classes.push('dsgt-breadcrumb-centered');
        if (alignment === 'right') classes.push('dsgt-breadcrumb-right');
        
        // Build items HTML
        let itemsHTML = '';
        items.forEach((item, index) => {
            const isActive = item.active || index === items.length - 1;
            const icon = item.icon || (index === 0 && withIcons ? 'fa-solid fa-house' : '');
            
            const iconHTML = icon ? `<i class="${icon}"></i> ` : '';
            const content = `${iconHTML}${item.text}`;
            
            if (isActive) {
                itemsHTML += `
                    <li>
                        <span class="dsgt-breadcrumb-item dsgt-br-active">${content}</span>
                    </li>
                `;
            } else {
                const href = item.href || '#';
                itemsHTML += `
                    <li>
                        <a href="${href}" class="dsgt-breadcrumb-item">${content}</a>
                    </li>
                `;
            }
            
            // Add separator (except after last item)
            if (index < items.length - 1) {
                itemsHTML += '<li><span class="dsgt-br-separator"></span></li>';
            }
        });
        
        const breadcrumbHTML = `<nav aria-label="breadcrumb"><ol class="${classes.join(' ')}">${itemsHTML}</ol></nav>`;
        
        // Wrap with background if requested
        if (withBackground) {
            return `<div class="dsgt-breadcrumb-bg">${breadcrumbHTML}</div>`;
        }
        
        return breadcrumbHTML;
    },

    /**
     * Generate breadcrumb in context card
     * @param {Object} config - Configuration
     * @param {Array} config.items - Breadcrumb items
     * @param {string} config.title - Card title
     * @param {string} config.content - Card body content
     * @param {string} config.separator - Separator type
     * @returns {string} Context card HTML
     */
    generateBreadcrumbContext(config = {}) {
        const {
            items = [],
            title = '',
            content = '',
            separator = 'chevron'
        } = config;
        
        const breadcrumbHTML = MetroAdmin.generateBreadcrumb({ items, separator });
        
        return `
            <div class="dsgt-br-context-card">
                <div class="dsgt-br-context-header">
                    ${breadcrumbHTML}
                </div>
                <div class="dsgt-br-context-body">
                    ${title ? `<h3 style="margin: 0 0 8px 0;">${title}</h3>` : ''}
                    <p style="color: var(--text-secondary); margin: 0;">${content}</p>
                </div>
            </div>
        `;
    },

    /**
     * Add dynamic breadcrumb to container
     * @param {string} type - Breadcrumb type (default, arrow, card, colored)
     * @param {string} containerId - Container ID (default: 'dsgtDynamicBreadcrumbContainer')
     */
    addDynamicBreadcrumb(type = 'default', containerId = 'dsgtDynamicBreadcrumbContainer') {
        const $container = $(`#${containerId}`);
        
        if ($container.length === 0) {
            console.error('DSGT Breadcrumb: Container not found');
            return;
        }
        
        // Clear placeholder text on first breadcrumb
        if ($container.find('p').length > 0) {
            $container.empty();
        }
        
        const breadcrumbConfigs = {
            default: {
                items: [
                    { text: 'Home', href: '#', icon: 'fa-solid fa-house' },
                    { text: 'Library', href: '#' },
                    { text: 'Data', active: true }
                ],
                separator: 'chevron'
            },
            arrow: {
                items: [
                    { text: 'Home', href: '#', icon: 'fa-solid fa-house' },
                    { text: 'Projects', href: '#' },
                    { text: 'Active', href: '#' },
                    { text: 'Current', active: true }
                ],
                style: 'arrow'
            },
            card: {
                items: [
                    { text: 'Home', href: '#', icon: 'fa-solid fa-house' },
                    { text: 'Categories', href: '#', icon: 'fa-solid fa-folder' },
                    { text: 'Products', href: '#', icon: 'fa-solid fa-tag' },
                    { text: 'Details', active: true, icon: 'fa-solid fa-box' }
                ],
                style: 'card',
                separator: 'chevron'
            },
            colored: {
                items: [
                    { text: 'Home', href: '#', icon: 'fa-solid fa-house' },
                    { text: 'Products', href: '#', icon: 'fa-solid fa-box' },
                    { text: 'Electronics', href: '#', icon: 'fa-solid fa-laptop' },
                    { text: 'Mobile', active: true, icon: 'fa-solid fa-mobile' }
                ],
                separator: 'chevron',
                withIcons: true
            }
        };
        
        const config = breadcrumbConfigs[type];
        if (!config) {
            console.error('DSGT Breadcrumb: Invalid breadcrumb type');
            return;
        }
        
        const breadcrumbHTML = MetroAdmin.generateBreadcrumb(config);
        $container.append(breadcrumbHTML);
        console.log(`🔗 DSGT Breadcrumb generated: ${type}`);
    },

    /**
     * Clear all dynamic breadcrumbs
     * @param {string} containerId - Container ID (default: 'dsgtDynamicBreadcrumbContainer')
     * @param {boolean} showInfo - Show info message after clearing (default: true)
     */
    clearAllBreadcrumbs(containerId = 'dsgtDynamicBreadcrumbContainer', showInfo = true) {
        const $container = $(`#${containerId}`);
        
        if ($container.length === 0) {
            console.error('DSGT Breadcrumb: Container not found');
            return;
        }
        
        const $breadcrumbs = $container.find('.dsgt-breadcrumb');
        
        if ($breadcrumbs.length === 0) {
            if (showInfo) {
                $container.html(`
                    <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0;">
                        <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                        Click buttons above to generate breadcrumbs here
                    </p>
                `);
            }
            return;
        }
        
        // Animate removal
        $breadcrumbs.each((index, breadcrumb) => {
            setTimeout(() => {
                const $breadcrumb = $(breadcrumb);
                $breadcrumb.css('opacity', '0');
                setTimeout(() => $breadcrumb.remove(), 300);
                
                // Reset container after last breadcrumb
                if (index === $breadcrumbs.length - 1) {
                    setTimeout(() => {
                        $container.html(`
                            <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0;">
                                <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                                Click buttons above to generate breadcrumbs here
                            </p>
                        `);
                    }, 300);
                }
            }, index * 100);
        });
        
        console.log('🧹 DSGT All breadcrumbs cleared');
    },

    // ==========================================
    // DSGT BUTTON COMPONENT
    // ==========================================
    initButtons() {
        // Button click tracking using event delegation
        $(document).on('click', '.dsgt-btn:not([onclick])', function() {
            const text = $(this).text().trim();
            console.log('🔘 DSGT Button clicked:', text);
        });

        console.log('✅ DSGT Button component initialized');
    },

    /**
     * Toggle loading state on a button
     * @param {HTMLElement|jQuery} button - The button element
     * @param {number} autoRemoveTime - Auto-remove loading after X ms (default: 3000)
     */
    toggleLoading(button, autoRemoveTime = 3000) {
        const $btn = $(button);
        
        if ($btn.hasClass('dsgt-btn-loading')) {
            $btn.removeClass('dsgt-btn-loading');
            console.log('✅ DSGT Loading complete');
        } else {
            $btn.addClass('dsgt-btn-loading');
            console.log('⏳ DSGT Loading started');
            
            // Auto-remove loading after specified time
            if (autoRemoveTime > 0) {
                setTimeout(() => {
                    $btn.removeClass('dsgt-btn-loading');
                    console.log('✅ DSGT Action completed (auto)');
                }, autoRemoveTime);
            }
        }
    },

    /**
     * Generate a dynamic button
     * @param {string} type - Button type: 'solid', 'outline', 'soft', 'ghost', 'pill'
     * @param {string} containerId - Container ID (default: 'dynamicButtonContainer')
     */
    generateButton(type, containerId = 'dynamicButtonContainer') {
        const $container = $(`#${containerId}`);
        
        if ($container.length === 0) {
            console.error('❌ DSGT Container not found:', containerId);
            return;
        }
        
        // Clear placeholder text on first button
        if ($container.find('p').length > 0) {
            $container.html('');
        }
        
        // Increment button counter
        if (!window.dsgtButtonCount) {
            window.dsgtButtonCount = 0;
        }
        window.dsgtButtonCount++;
        
        const buttonConfigs = {
            solid: {
                class: 'dsgt-btn dsgt-btn-primary',
                icon: 'fa-solid fa-check',
                text: `Solid ${window.dsgtButtonCount}`
            },
            outline: {
                class: 'dsgt-btn dsgt-btn-outline-success',
                icon: 'fa-solid fa-star',
                text: `Outline ${window.dsgtButtonCount}`
            },
            soft: {
                class: 'dsgt-btn dsgt-btn-soft-warning',
                icon: 'fa-solid fa-bell',
                text: `Soft ${window.dsgtButtonCount}`
            },
            ghost: {
                class: 'dsgt-btn dsgt-btn-ghost-danger',
                icon: 'fa-solid fa-heart',
                text: `Ghost ${window.dsgtButtonCount}`
            },
            pill: {
                class: 'dsgt-btn dsgt-btn-info dsgt-btn-pill',
                icon: 'fa-solid fa-rocket',
                text: `Pill ${window.dsgtButtonCount}`
            }
        };
        
        const config = buttonConfigs[type];
        
        if (!config) {
            console.error('❌ DSGT Invalid button type:', type);
            return;
        }
        
        const buttonHTML = `
            <button class="${config.class}" onclick="this.style.animation='dsgt-btn-fade-in 0.3s ease reverse'; setTimeout(() => this.remove(), 300)">
                <i class="${config.icon}"></i> ${config.text}
            </button>
        `;
        
        $container.append(buttonHTML);
        console.log(`✅ DSGT Button generated: ${type}`);
    },

    /**
     * Clear all dynamically generated buttons
     * @param {string} containerId - Container ID (default: 'dynamicButtonContainer')
     * @param {string} placeholderHTML - HTML to show after clearing
     */
    clearAllButtons(containerId = 'dynamicButtonContainer', placeholderHTML = null) {
        const $container = $(`#${containerId}`);
        
        if ($container.length === 0) {
            console.error('❌ DSGT Container not found:', containerId);
            return;
        }
        
        const $buttons = $container.find('.dsgt-btn');
        
        if ($buttons.length === 0) {
            console.log('ℹ️ DSGT No buttons to clear');
            return;
        }
        
        const buttonCount = $buttons.length;
        
        // Default placeholder
        if (!placeholderHTML) {
            placeholderHTML = `
                <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0; width: 100%;">
                    <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                    Click buttons above to generate different button styles here
                </p>
            `;
        }
        
        // Animate removal
        $buttons.each((index, button) => {
            setTimeout(() => {
                const $btn = $(button);
                $btn.css('animation', 'dsgt-btn-fade-in 0.3s ease reverse');
                setTimeout(() => $btn.remove(), 300);
                
                // Reset container after last button
                if (index === $buttons.length - 1) {
                    setTimeout(() => {
                        $container.html(placeholderHTML);
                        window.dsgtButtonCount = 0;
                    }, 300);
                }
            }, index * 50);
        });
        
        console.log(`🧹 DSGT Cleared ${buttonCount} buttons`);
    },

    // ==========================================
    // DSGT CARD COMPONENT
    // ==========================================
    initCards() {
        // Social action click handling with event delegation
        $(document).on('click', '.dsgt-cd-social-action', function(e) {
            e.preventDefault();
            const $action = $(this);
            const $icon = $action.find('i');
            
            // Toggle like with animation
            if ($icon.hasClass('fa-heart')) {
                $action.toggleClass('liked');
                
                // Add pop animation
                $action.css('transform', 'scale(1.3)');
                setTimeout(() => {
                    $action.css('transform', 'scale(1)');
                }, 200);
                
                if ($action.hasClass('liked')) {
                    $icon.removeClass('fa-regular').addClass('fa-solid');
                } else {
                    $icon.removeClass('fa-solid').addClass('fa-regular');
                }
            }
            
            // Visual feedback for other actions
            if ($icon.hasClass('fa-comment') || $icon.hasClass('fa-share')) {
                $action.css('transform', 'scale(0.95)');
                setTimeout(() => {
                    $action.css('transform', 'scale(1)');
                }, 150);
            }
        });

        // Stat card hover enhancement
        $(document).on('mouseenter', '.dsgt-cd-stat', function() {
            $(this).find('.dsgt-cd-stat-icon').css('box-shadow', '0 8px 16px rgba(0, 0, 0, 0.15)');
        }).on('mouseleave', '.dsgt-cd-stat', function() {
            $(this).find('.dsgt-cd-stat-icon').css('box-shadow', 'none');
        });

        // Pricing card button click effect
        $(document).on('click', '.dsgt-cd-pricing button', function(e) {
            const $button = $(this);
            $button.css('transform', 'scale(0.95)');
            setTimeout(() => {
                $button.css('transform', 'scale(1)');
            }, 150);
        });

        console.log('✅ DSGT Card component initialized');
    },

    /**
     * Toggle social action like state
     * @param {HTMLElement|jQuery} actionElement - The social action button
     */
    toggleSocialLike(actionElement) {
        const $action = $(actionElement);
        const $icon = $action.find('i');
        
        if (!$icon.hasClass('fa-heart')) {
            console.warn('⚠️ DSGT Element is not a like button');
            return;
        }
        
        $action.toggleClass('liked');
        
        // Add pop animation
        $action.css('transform', 'scale(1.3)');
        setTimeout(() => {
            $action.css('transform', 'scale(1)');
        }, 200);
        
        if ($action.hasClass('liked')) {
            $icon.removeClass('fa-regular').addClass('fa-solid');
            console.log('❤️ DSGT Post liked');
        } else {
            $icon.removeClass('fa-solid').addClass('fa-regular');
            console.log('💔 DSGT Post unliked');
        }
    },

    /**
     * Generate a dynamic card
     * @param {string} type - Card type: 'modern', 'stat', 'profile', 'pricing', 'social', 'testimonial'
     * @param {string} containerId - Container ID (default: 'dynamicCardContainer')
     * @param {object} config - Optional configuration object
     */
    generateCard(type, containerId = 'dynamicCardContainer', config = {}) {
        const $container = $(`#${containerId}`);
        
        if ($container.length === 0) {
            console.error('❌ DSGT Container not found:', containerId);
            return;
        }
        
        // Clear placeholder text on first card
        if ($container.find('p').length > 0) {
            $container.html('');
        }
        
        // Increment card counter
        if (!window.dsgtCardCount) {
            window.dsgtCardCount = 0;
        }
        window.dsgtCardCount++;
        
        const cardConfigs = {
            modern: {
                html: `
                    <div class="dsgt-cd-modern">
                        <div class="dsgt-cd-image-placeholder bg-gradient-1">
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="dsgt-cd-body">
                            <h3 class="dsgt-cd-title">Modern Card ${window.dsgtCardCount}</h3>
                            <p class="dsgt-cd-subtitle">Generated dynamically</p>
                            <p class="dsgt-cd-text">This is a dynamically generated modern card with gradient image placeholder.</p>
                            <button class="dsgt-btn dsgt-btn-primary dsgt-btn-sm">
                                <i class="fa-solid fa-arrow-right"></i> Read More
                            </button>
                        </div>
                    </div>
                `
            },
            stat: {
                html: `
                    <div class="dsgt-cd-stat">
                        <div class="dsgt-cd-stat-icon bg-soft-primary">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="dsgt-cd-stat-content">
                            <h3 class="dsgt-cd-stat-value">${config.value || '1,234'}</h3>
                            <p class="dsgt-cd-stat-label">${config.label || 'Dynamic Stat'}</p>
                            <span class="dsgt-cd-stat-change positive">
                                <i class="fa-solid fa-arrow-up"></i> +${config.change || '10'}%
                            </span>
                        </div>
                    </div>
                `
            },
            profile: {
                html: `
                    <div class="dsgt-cd-profile">
                        <img src="https://ui-avatars.com/api/?name=User+${window.dsgtCardCount}&background=0078D4&color=fff&size=200" class="dsgt-cd-profile-avatar" alt="Profile">
                        <h3 class="dsgt-cd-profile-name">User ${window.dsgtCardCount}</h3>
                        <p class="dsgt-cd-profile-role">${config.role || 'Team Member'}</p>
                        <div class="dsgt-cd-profile-stats">
                            <div class="dsgt-cd-profile-stat-item">
                                <h4 class="dsgt-cd-profile-stat-value">${config.posts || '0'}</h4>
                                <p class="dsgt-cd-profile-stat-label">Posts</p>
                            </div>
                            <div class="dsgt-cd-profile-stat-item">
                                <h4 class="dsgt-cd-profile-stat-value">${config.followers || '0'}</h4>
                                <p class="dsgt-cd-profile-stat-label">Followers</p>
                            </div>
                            <div class="dsgt-cd-profile-stat-item">
                                <h4 class="dsgt-cd-profile-stat-value">${config.following || '0'}</h4>
                                <p class="dsgt-cd-profile-stat-label">Following</p>
                            </div>
                        </div>
                        <button class="dsgt-btn dsgt-btn-primary" style="width: 100%;">
                            <i class="fa-solid fa-user-plus"></i> Follow
                        </button>
                    </div>
                `
            },
            pricing: {
                html: `
                    <div class="dsgt-cd-pricing ${config.featured ? 'featured' : ''}">
                        <h3 class="dsgt-cd-pricing-name">${config.plan || 'Basic'}</h3>
                        <p style="color: var(--text-secondary); margin: 0;">${config.description || 'Starter plan'}</p>
                        <div class="dsgt-cd-pricing-price">
                            $${config.price || '9'}<span>/month</span>
                        </div>
                        <button class="dsgt-btn dsgt-btn-${config.featured ? 'primary' : 'outline-primary'}" style="width: 100%;">
                            Get Started
                        </button>
                    </div>
                `
            },
            testimonial: {
                html: `
                    <div class="dsgt-cd-testimonial">
                        <p class="dsgt-cd-testimonial-quote">${config.quote || 'Great product! Highly recommended.'}</p>
                        <div class="dsgt-cd-testimonial-author">
                            <img src="https://ui-avatars.com/api/?name=Reviewer+${window.dsgtCardCount}&background=16C60C&color=fff&size=96" class="dsgt-cd-testimonial-avatar" alt="Author">
                            <div class="dsgt-cd-testimonial-author-info">
                                <h4>Reviewer ${window.dsgtCardCount}</h4>
                                <p>${config.company || 'Happy Customer'}</p>
                                <div class="dsgt-cd-testimonial-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            }
        };
        
        const cardConfig = cardConfigs[type];
        
        if (!cardConfig) {
            console.error('❌ DSGT Invalid card type:', type);
            return;
        }
        
        $container.append(cardConfig.html);
        console.log(`✅ DSGT Card generated: ${type}`);
    },

    /**
     * Clear all dynamically generated cards
     * @param {string} containerId - Container ID (default: 'dynamicCardContainer')
     * @param {string} placeholderHTML - HTML to show after clearing
     */
    clearAllCards(containerId = 'dynamicCardContainer', placeholderHTML = null) {
        const $container = $(`#${containerId}`);
        
        if ($container.length === 0) {
            console.error('❌ DSGT Container not found:', containerId);
            return;
        }
        
        const $cards = $container.find('.dsgt-cd-modern, .dsgt-cd-stat, .dsgt-cd-profile, .dsgt-cd-pricing, .dsgt-cd-social, .dsgt-cd-testimonial');
        
        if ($cards.length === 0) {
            console.log('ℹ️ DSGT No cards to clear');
            return;
        }
        
        const cardCount = $cards.length;
        
        // Default placeholder
        if (!placeholderHTML) {
            placeholderHTML = `
                <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0; width: 100%;">
                    <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                    Click buttons above to generate different card styles here
                </p>
            `;
        }
        
        // Animate removal
        $cards.each((index, card) => {
            setTimeout(() => {
                const $card = $(card);
                $card.css('opacity', '0');
                setTimeout(() => $card.remove(), 300);
                
                // Reset container after last card
                if (index === $cards.length - 1) {
                    setTimeout(() => {
                        $container.html(placeholderHTML);
                        window.dsgtCardCount = 0;
                    }, 300);
                }
            }, index * 100);
        });
        
        console.log(`🧹 DSGT Cleared ${cardCount} cards`);
    },

    /**
     * DSGT Carousel Component Functions
     * Handles initialization, navigation, autoplay, and dynamic carousel generation
     * @namespace Carousel
     */

    // Carousel state management
    dsgtCarousels: {},
    dsgtVerticalCarousels: {},
    dsgtCardCarouselPosition: 0,

    /**
     * Initialize carousel component
     * Sets up event delegation and initializes existing carousels
     */
    initCarousels() {
    // Initialize ALL carousels on the page that have an ID
    const $carousels = $('.dsgt-cr[id]');
    
    $carousels.each(function() {
        const id = $(this).attr('id');
        const isVertical = $(this).hasClass('dsgt-cr-vertical');
        
        if (id && !isVertical) {
            this.initDSGTCarousel(id);
        }
    }.bind(this));

    // Initialize vertical carousels
    $('.dsgt-cr.dsgt-cr-vertical[id]').each(function() {
        const id = $(this).attr('id');
        if (id) {
            this.initDSGTVerticalCarousel(id);
        }
    }.bind(this));

    // Event delegation for carousel navigation (DISABLED - using inline onclick in HTML)
    // $(document).on('click', '.dsgt-cr-nav-prev', function(e) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     
    //     const $carousel = $(this).closest('.dsgt-cr');
    //     const carouselId = $carousel.attr('id');
    //     if (carouselId) {
    //         const isVertical = $carousel.hasClass('dsgt-cr-vertical');
    //         
    //         if (isVertical) {
    //             if (!MetroAdmin.dsgtVerticalCarousels[carouselId]) {
    //                 MetroAdmin.initDSGTVerticalCarousel(carouselId);
    //             }
    //             MetroAdmin.moveDSGTVerticalCarousel(carouselId, -1);
    //         } else {
    //             if (!MetroAdmin.dsgtCarousels[carouselId]) {
    //                 MetroAdmin.initDSGTCarousel(carouselId);
    //             }
    //             MetroAdmin.moveDSGTCarousel(carouselId, -1);
    //         }
    //     }
    // });

    // $(document).on('click', '.dsgt-cr-nav-next', function(e) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     
    //     const $carousel = $(this).closest('.dsgt-cr');
    //     const carouselId = $carousel.attr('id');
    //     if (carouselId) {
    //         const isVertical = $carousel.hasClass('dsgt-cr-vertical');
    //         
    //         if (isVertical) {
    //             if (!MetroAdmin.dsgtVerticalCarousels[carouselId]) {
    //                 MetroAdmin.initDSGTVerticalCarousel(carouselId);
    //             }
    //             MetroAdmin.moveDSGTVerticalCarousel(carouselId, 1);
    //         } else {
    //             if (!MetroAdmin.dsgtCarousels[carouselId]) {
    //                 MetroAdmin.initDSGTCarousel(carouselId);
    //             }
    //             MetroAdmin.moveDSGTCarousel(carouselId, 1);
    //         }
    //     }
    // });

    // Prevent context menu on carousel navigation buttons
    $(document).on('contextmenu', '.dsgt-cr-nav', function(e) {
        e.preventDefault();
    });

    // Event delegation for carousel indicators (DISABLED - using inline onclick in HTML)
    // $(document).on('click', '.dsgt-cr-indicator', function(e) {
    //     e.preventDefault();
    //     const $indicator = $(this);
    //     const $carousel = $indicator.closest('.dsgt-cr');
    //     const carouselId = $carousel.attr('id');
    //     const index = $indicator.index();
    //     
    //     if (carouselId) {
    //         const isVertical = $carousel.hasClass('dsgt-cr-vertical');
    //         
    //         if (isVertical) {
    //             if (!MetroAdmin.dsgtVerticalCarousels[carouselId]) {
    //                 MetroAdmin.initDSGTVerticalCarousel(carouselId);
    //             }
    //             MetroAdmin.goToDSGTVerticalSlide(carouselId, index);
    //         } else {
    //             if (!MetroAdmin.dsgtCarousels[carouselId]) {
    //                 MetroAdmin.initDSGTCarousel(carouselId);
    //             }
    //             MetroAdmin.goToDSGTSlide(carouselId, index);
    //         }
    //     }
    // });

    // Event delegation for thumbnails
    $(document).on('click', '.dsgt-cr-thumbnail', function(e) {
        e.preventDefault();
        const $thumbnail = $(this);
        const $carousel = $thumbnail.closest('.dsgt-cr');
        const carouselId = $carousel.attr('id');
        const index = $thumbnail.index();
        if (carouselId) {
            MetroAdmin.goToDSGTSlide(carouselId, index);
        }
    });

    // Pause autoplay on hover
    $(document).on('mouseenter', '.dsgt-cr', function() {
        const id = $(this).attr('id');
        if (id && MetroAdmin.dsgtCarousels[id]) {
            MetroAdmin.pauseDSGTAutoplay(id);
        }
    });

    $(document).on('mouseleave', '.dsgt-cr', function() {
        const id = $(this).attr('id');
        if (id && MetroAdmin.dsgtCarousels[id] && MetroAdmin.dsgtCarousels[id].autoplay > 0) {
            MetroAdmin.resumeDSGTAutoplay(id);
        }
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    $(document).on('touchstart', '.dsgt-cr-container', function(e) {
        touchStartX = e.originalEvent.changedTouches[0].screenX;
    });

    $(document).on('touchend', '.dsgt-cr-container', function(e) {
        touchEndX = e.originalEvent.changedTouches[0].screenX;
        const $carousel = $(this).closest('.dsgt-cr');
        const carouselId = $carousel.attr('id');
        MetroAdmin.handleDSGTSwipe(carouselId, touchStartX, touchEndX);
    });

    console.log('✅ DSGT Carousel component initialized');
},

/**
 * Initialize DSGT Collapses component
 * Placeholder - awaits full migration from collapse.blade.php
 */
/**
 * Initialize Collapse components
 */
initCollapses() {
    console.log('✅ DSGT Collapse component initialized');
},

/**
 * Toggle a single collapse
 * @param {HTMLElement} trigger - The trigger element
 */
toggleDSGTCollapse(trigger) {
    const $trigger = $(trigger);
    const $collapseContainer = $trigger.closest('.dsgt-cl-animated, .dsgt-cl-item, .dsgt-cl-nested, .dsgt-cl-success, .dsgt-cl-warning, .dsgt-cl-danger');
    const $content = $collapseContainer.find('.dsgt-cl-content').first();
    
    if (!$content.length) {
        // If not in a container, look for next sibling
        const $nextContent = $trigger.next('.dsgt-cl-content');
        if ($nextContent.length) {
            this._toggleCollapseContent($nextContent, $trigger);
        }
        return;
    }
    
    this._toggleCollapseContent($content, $trigger);
},

/**
 * Internal helper to toggle collapse content
 */
_toggleCollapseContent($content, $trigger) {
    const isOpen = $content.hasClass('open');
    
    if (isOpen) {
        // Close
        $content.removeClass('open');
        $content.slideUp(300);
        $trigger.removeClass('active');
        $trigger.closest('.dsgt-cl-animated, .dsgt-cl-item, .dsgt-cl-nested, .dsgt-cl-success, .dsgt-cl-warning, .dsgt-cl-danger').removeClass('active');
    } else {
        // Open
        $content.addClass('open');
        $content.slideDown(300);
        $trigger.addClass('active');
        $trigger.closest('.dsgt-cl-animated, .dsgt-cl-item, .dsgt-cl-nested, .dsgt-cl-success, .dsgt-cl-warning, .dsgt-cl-danger').addClass('active');
    }
},

/**
 * Toggle accordion (only one open at a time)
 * @param {HTMLElement} trigger - The trigger element
 * @param {string} groupId - The accordion group ID
 */
toggleDSGTAccordion(trigger, groupId) {
    const $group = $(`#${groupId}`);
    if (!$group.length) return;
    
    const $trigger = $(trigger);
    const $parentItem = $trigger.closest('.dsgt-cl-item');
    const $content = $parentItem.find('.dsgt-cl-content').first();
    const isOpen = $content.hasClass('open');
    
    // Close all items in the group
    $group.find('.dsgt-cl-item').each(function() {
        const $item = $(this);
        const $itemContent = $item.find('.dsgt-cl-content');
        const $itemTrigger = $item.find('.dsgt-cl-trigger');
        
        $itemContent.removeClass('open');
        $itemContent.slideUp(300);
        $itemTrigger.removeClass('active');
        $item.removeClass('active');
    });
    
    // If the clicked item was closed, open it
    if (!isOpen) {
        $content.addClass('open');
        $content.slideDown(300);
        $trigger.addClass('active');
        $parentItem.addClass('active');
    }
},

/**
 * Toggle dropdown menu
 * @param {HTMLElement} trigger - The trigger button element
 */
toggleDropdown(trigger) {
    const $trigger = $(trigger);
    const $dropdown = $trigger.closest('.dsgt-dropdown');
    const $menu = $dropdown.find('.dsgt-dropdown-menu');
    const isOpen = $dropdown.hasClass('active');
    
    // Close all dropdowns first
    $('.dsgt-dropdown').removeClass('active');
    $('.dsgt-dropdown-menu').removeClass('show-top');
    
    // Toggle current dropdown
    if (!isOpen) {
        // Calculate position
        const dropdownRect = $dropdown[0].getBoundingClientRect();
        const menuHeight = $menu.outerHeight();
        const viewportHeight = window.innerHeight;
        const spaceBelow = viewportHeight - dropdownRect.bottom;
        const spaceAbove = dropdownRect.top;
        
        // If not enough space below, show above
        if (spaceBelow < menuHeight + 20 && spaceAbove > menuHeight + 20) {
            $menu.addClass('show-top');
        } else {
            $menu.removeClass('show-top');
        }
        
        $dropdown.addClass('active');
    }
},

/**
 * Close all dropdowns
 */
closeAllDropdowns() {
    $('.dsgt-dropdown').removeClass('active');
},

/**
 * Initialize a specific carousel
 * @param {string} carouselId - The ID of the carousel element
 */
initDSGTCarousel(carouselId) {
    const $carousel = $(`#${carouselId}`);
    if (!$carousel.length) {
        console.error(`❌ Carousel element not found: ${carouselId}`);
        return;
    }

    // Check if this is a card carousel (has .dsgt-cr-card-item) or regular carousel (has .dsgt-cr-slide)
    const slideCount = $carousel.find('.dsgt-cr-slide').length;
    const cardCount = $carousel.find('.dsgt-cr-card-item').length;
    const totalSlides = slideCount > 0 ? slideCount : cardCount;

    this.dsgtCarousels[carouselId] = {
        currentSlide: 0,
        totalSlides: totalSlides,
        autoplay: parseInt($carousel.data('autoplay')) || 0,
        autoplayTimer: null,
        progressTimer: null,
        isCardCarousel: cardCount > 0
    };

    console.log(`✅ Carousel initialized: ${carouselId} (${totalSlides} slides, autoplay: ${this.dsgtCarousels[carouselId].autoplay}ms, isCard: ${cardCount > 0})`);

    // Start autoplay if enabled
    if (this.dsgtCarousels[carouselId].autoplay > 0) {
        this.startDSGTAutoplay(carouselId);
    }
},

/**
 * Move carousel forward or backward
 * @param {string} carouselId - The ID of the carousel
 * @param {number} direction - Direction to move (-1 for prev, 1 for next)
 */
moveDSGTCarousel(carouselId, direction) {
    // Lazy initialization if not already initialized
    if (!this.dsgtCarousels[carouselId]) {
        this.initDSGTCarousel(carouselId);
    }

    const state = this.dsgtCarousels[carouselId];
    if (!state) {
        console.error(`❌ Carousel still not found after init: ${carouselId}`);
        return;
    }

    state.currentSlide += direction;

    if (state.currentSlide < 0) {
        state.currentSlide = state.totalSlides - 1;
    } else if (state.currentSlide >= state.totalSlides) {
        state.currentSlide = 0;
    }

    this.updateDSGTCarousel(carouselId);
    this.resetDSGTAutoplay(carouselId);
},

/**
 * Go to a specific slide
 * @param {string} carouselId - The ID of the carousel
 * @param {number} index - The slide index to go to
 */
goToDSGTSlide(carouselId, index) {
    // Lazy initialization if not already initialized
    if (!this.dsgtCarousels[carouselId]) {
        this.initDSGTCarousel(carouselId);
    }

    const state = this.dsgtCarousels[carouselId];
    if (!state || index < 0 || index >= state.totalSlides) return;

    state.currentSlide = index;
    this.updateDSGTCarousel(carouselId);
    this.resetDSGTAutoplay(carouselId);
},

/**
 * Update carousel display
 * @param {string} carouselId - The ID of the carousel
 */
updateDSGTCarousel(carouselId) {
    const state = this.dsgtCarousels[carouselId];
    const $carousel = $(`#${carouselId}`);
    const $track = $carousel.find('.dsgt-cr-track');
    const $indicators = $carousel.find('.dsgt-cr-indicator');
    const $counter = $carousel.find('.dsgt-cr-counter');

    // Move track
    $track.css('transform', `translateX(-${state.currentSlide * 100}%)`);

    // Update indicators
    $indicators.each(function(index) {
        $(this).toggleClass('active', index === state.currentSlide);
    });

    // Update counter
    if ($counter.length) {
        $counter.find('.current').text(state.currentSlide + 1);
    }

    // Update thumbnails
    const $thumbnails = $carousel.find('.dsgt-cr-thumbnail');
    $thumbnails.each(function(index) {
        $(this).toggleClass('active', index === state.currentSlide);
    });
},

/**
 * Start autoplay for a carousel
 * @param {string} carouselId - The ID of the carousel
 */
startDSGTAutoplay(carouselId) {
    const state = this.dsgtCarousels[carouselId];
    if (!state || state.autoplay <= 0) return;

    clearInterval(state.autoplayTimer);
    clearInterval(state.progressTimer);

    let progress = 0;
    const $progressBar = $(`#${carouselId} .dsgt-cr-progress`);

    state.autoplayTimer = setInterval(() => {
        this.moveDSGTCarousel(carouselId, 1);
    }, state.autoplay);

    if ($progressBar.length) {
        state.progressTimer = setInterval(() => {
            progress += 100 / (state.autoplay / 100);
            $progressBar.css('width', `${progress}%`);

            if (progress >= 100) {
                progress = 0;
            }
        }, 100);
    }
},

/**
 * Reset autoplay timer
 * @param {string} carouselId - The ID of the carousel
 */
resetDSGTAutoplay(carouselId) {
    const state = this.dsgtCarousels[carouselId];
    if (!state || state.autoplay <= 0) return;

    clearInterval(state.autoplayTimer);
    clearInterval(state.progressTimer);

    const $progressBar = $(`#${carouselId} .dsgt-cr-progress`);
    if ($progressBar.length) {
        $progressBar.css('width', '0%');
    }

    this.startDSGTAutoplay(carouselId);
},

/**
 * Pause autoplay
 * @param {string} carouselId - The ID of the carousel
 */
pauseDSGTAutoplay(carouselId) {
    const state = this.dsgtCarousels[carouselId];
    if (!state) return;

    clearInterval(state.autoplayTimer);
    clearInterval(state.progressTimer);
},

/**
 * Resume autoplay
 * @param {string} carouselId - The ID of the carousel
 */
resumeDSGTAutoplay(carouselId) {
    const state = this.dsgtCarousels[carouselId];
    if (!state || state.autoplay <= 0) return;

    this.startDSGTAutoplay(carouselId);
},

/**
 * Handle touch swipe gesture
 * @param {string} carouselId - The ID of the carousel
 * @param {number} startX - Touch start X position
 * @param {number} endX - Touch end X position
 */
handleDSGTSwipe(carouselId, startX, endX) {
    const swipeThreshold = 50;
    const diff = startX - endX;

    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            this.moveDSGTCarousel(carouselId, 1); // Swipe left - next
        } else {
            this.moveDSGTCarousel(carouselId, -1); // Swipe right - prev
        }
    }
},

/**
 * Move card carousel
 * @param {string} carouselId - The ID of the carousel
 * @param {number} direction - Direction to move (-1 or 1)
 */
moveDSGTCardCarousel(carouselId, direction) {
    const $carousel = $(`#${carouselId}`);
    const $track = $carousel.find('.dsgt-cr-cards-track');
    const $cards = $track.find('.dsgt-cr-card-item');
    
    if ($cards.length === 0) return;

    const cardWidth = $cards[0].offsetWidth + 16; // Including gap
    const visibleCards = Math.floor($carousel.width() / cardWidth);
    const maxPosition = $cards.length - visibleCards;

    this.dsgtCardCarouselPosition += direction;

    if (this.dsgtCardCarouselPosition < 0) {
        this.dsgtCardCarouselPosition = maxPosition;
    } else if (this.dsgtCardCarouselPosition > maxPosition) {
        this.dsgtCardCarouselPosition = 0;
    }

    $track.css('transform', `translateX(-${this.dsgtCardCarouselPosition * cardWidth}px)`);
},

/**
 * Initialize vertical carousel
 * @param {string} carouselId - The ID of the carousel
 */
initDSGTVerticalCarousel(carouselId) {
    const $carousel = $(`#${carouselId}`);
    if (!$carousel.length) {
        console.error(`❌ Vertical carousel element not found: ${carouselId}`);
        return;
    }

    const slideCount = $carousel.find('.dsgt-cr-slide').length;
    this.dsgtVerticalCarousels[carouselId] = {
        currentSlide: 0,
        totalSlides: slideCount
    };

    console.log(`✅ Vertical carousel initialized: ${carouselId} (${slideCount} slides)`);
},

/**
 * Move vertical carousel
 * @param {string} carouselId - The ID of the carousel
 * @param {number} direction - Direction to move (-1 or 1)
 */
moveDSGTVerticalCarousel(carouselId, direction) {
    // Lazy initialization if not already initialized
    if (!this.dsgtVerticalCarousels[carouselId]) {
        this.initDSGTVerticalCarousel(carouselId);
    }

    const state = this.dsgtVerticalCarousels[carouselId];
    if (!state) return;

    state.currentSlide += direction;

    if (state.currentSlide < 0) {
        state.currentSlide = state.totalSlides - 1;
    } else if (state.currentSlide >= state.totalSlides) {
        state.currentSlide = 0;
    }

    this.updateDSGTVerticalCarousel(carouselId);
},

/**
 * Go to specific slide in vertical carousel
 * @param {string} carouselId - The ID of the carousel
 * @param {number} index - The slide index
 */
goToDSGTVerticalSlide(carouselId, index) {
    // Lazy initialization if not already initialized
    if (!this.dsgtVerticalCarousels[carouselId]) {
        this.initDSGTVerticalCarousel(carouselId);
    }

    const state = this.dsgtVerticalCarousels[carouselId];
    if (!state || index < 0 || index >= state.totalSlides) return;

    state.currentSlide = index;
    this.updateDSGTVerticalCarousel(carouselId);
},

/**
 * Update vertical carousel display
 * @param {string} carouselId - The ID of the carousel
 */
updateDSGTVerticalCarousel(carouselId) {
    const state = this.dsgtVerticalCarousels[carouselId];
    const $carousel = $(`#${carouselId}`);
    const $track = $carousel.find('.dsgt-cr-track');
    const $indicators = $carousel.find('.dsgt-cr-indicator');

    // Use pixel-based calculation instead of percentage
    const slideHeight = 400; // Each slide is 400px
    const offsetPixels = -(state.currentSlide * slideHeight);
    
    console.log(`🔄 Vertical carousel update: ${carouselId}, slide ${state.currentSlide}, translateY(${offsetPixels}px)`);
    
    $track.css('transform', `translateY(${offsetPixels}px)`);

    $indicators.each(function(index) {
        $(this).toggleClass('active', index === state.currentSlide);
    });
},

/**
 * Generate dynamic carousel
 * @param {string} type - Type of carousel (hero, auto, thumbnail, card, vertical)
 * @param {string} containerId - Container ID to append carousel to
 * @param {object} config - Custom configuration
 * @returns {jQuery} The generated carousel element
 */
generateDSGTCarousel(type, containerId = 'dynamicCarouselContainer', config = {}) {
    window.dsgtCarouselCount = (window.dsgtCarouselCount || 0) + 1;
    const carouselId = `dsgtCr${type}${window.dsgtCarouselCount}`;

    const carouselConfigs = {
        hero: {
            slides: config.slides || [
                { icon: 'fa-rocket', title: 'Launch Your Project', description: 'Build amazing experiences', gradient: 'bg-gradient-1' },
                { icon: 'fa-palette', title: 'Beautiful Design', description: 'Create stunning interfaces', gradient: 'bg-gradient-2' },
                { icon: 'fa-chart-line', title: 'Grow Your Business', description: 'Scale with analytics', gradient: 'bg-gradient-3' }
            ],
            autoplay: config.autoplay || 5000,
            hasOverlay: true,
            hasCounter: true
        },
        auto: {
            slides: config.slides || [
                { icon: 'fa-leaf', title: 'Nature Inspired', description: 'Design with natural elements', gradient: 'bg-gradient-4' },
                { icon: 'fa-sun', title: 'Bright & Bold', description: 'Vibrant colors and gradients', gradient: 'bg-gradient-5' },
                { icon: 'fa-cloud', title: 'Cloud Solutions', description: 'Modern cloud infrastructure', gradient: 'bg-gradient-1' }
            ],
            autoplay: config.autoplay || 3000,
            hasOverlay: true,
            hasProgress: true
        },
        thumbnail: {
            slides: config.slides || [
                { icon: 'fa-mountain', gradient: 'bg-gradient-1' },
                { icon: 'fa-water', gradient: 'bg-gradient-2' },
                { icon: 'fa-tree', gradient: 'bg-gradient-3' },
                { icon: 'fa-star', gradient: 'bg-gradient-4' },
                { icon: 'fa-heart', gradient: 'bg-gradient-5' }
            ],
            autoplay: config.autoplay || 0,
            hasThumbnails: true
        },
        card: {
            cards: config.cards || [
                { icon: 'fa-laptop', title: 'Laptop Pro', text: 'High-performance laptop', gradient: 'bg-gradient-1' },
                { icon: 'fa-mobile-screen', title: 'Smartphone X', text: 'Latest smartphone', gradient: 'bg-gradient-2' },
                { icon: 'fa-headphones', title: 'Wireless Headphones', text: 'Premium sound quality', gradient: 'bg-gradient-3' }
            ],
            autoplay: config.autoplay || 0
        },
        vertical: {
            slides: config.slides || [
                { icon: 'fa-globe', title: 'Global Reach', description: 'Connect worldwide', gradient: 'bg-gradient-3' },
                { icon: 'fa-shield-halved', title: 'Secure Platform', description: 'Enterprise security', gradient: 'bg-gradient-1' },
                { icon: 'fa-bolt', title: 'Lightning Fast', description: 'Optimized performance', gradient: 'bg-gradient-2' }
            ],
            autoplay: config.autoplay || 0,
            hasOverlay: true
        }
    };

    const carouselConfig = carouselConfigs[type];
    if (!carouselConfig) {
        console.error(`❌ Invalid carousel type: ${type}`);
        return null;
    }

    // Build slides HTML
    let slidesHTML = '';
    if (type === 'card') {
        slidesHTML = carouselConfig.cards.map(card => `
            <div class="dsgt-cr-card-item">
                <div class="dsgt-cr-card-image ${card.gradient}">
                    <i class="fa-solid ${card.icon}"></i>
                </div>
                <div class="dsgt-cr-card-body">
                    <h4 class="dsgt-cr-card-title">${card.title}</h4>
                    <p class="dsgt-cr-card-text">${card.text}</p>
                </div>
            </div>
        `).join('');
    } else {
        slidesHTML = carouselConfig.slides.map(slide => `
            <div class="dsgt-cr-slide">
                <div class="dsgt-cr-slide-placeholder ${slide.gradient}">
                    <i class="fa-solid ${slide.icon}"></i>
                </div>
                ${carouselConfig.hasOverlay ? `
                <div class="dsgt-cr-overlay">
                    <h3 class="dsgt-cr-slide-title">${slide.title}</h3>
                    <p class="dsgt-cr-slide-description">${slide.description}</p>
                    <button class="dsgt-cr-slide-btn">
                        <i class="fa-solid fa-arrow-right"></i> Learn More
                    </button>
                </div>
                ` : ''}
            </div>
        `).join('');
    }

    // Build indicators HTML
    let indicatorsHTML = '';
    if (type !== 'card') {
        const totalIndicators = type === 'thumbnail' ? carouselConfig.slides.length : carouselConfig.slides.length;
        indicatorsHTML = `
            <div class="dsgt-cr-indicators">
                ${Array.from({length: totalIndicators}, (_, i) => 
                    `<div class="dsgt-cr-indicator${i === 0 ? ' active' : ''}"></div>`
                ).join('')}
            </div>
        `;
    }

    // Build thumbnails HTML
    let thumbnailsHTML = '';
    if (carouselConfig.hasThumbnails) {
        thumbnailsHTML = `
            <div class="dsgt-cr-thumbnails">
                ${carouselConfig.slides.map((slide, i) => `
                    <div class="dsgt-cr-thumbnail${i === 0 ? ' active' : ''}">
                        <div class="dsgt-cr-thumbnail-image ${slide.gradient}" style="display: flex; align-items: center; justify-content: center; color: white;">
                            <i class="fa-solid ${slide.icon}"></i>
                        </div>
                    </div>
                `).join('')}
            </div>
        `;
    }

    // Build carousel HTML
    const verticalClass = type === 'vertical' ? ' dsgt-cr-vertical' : '';
    const trackClass = type === 'card' ? 'dsgt-cr-cards-track' : 'dsgt-cr-track';
    const autoplayAttr = carouselConfig.autoplay > 0 ? `data-autoplay="${carouselConfig.autoplay}"` : '';

    const carouselHTML = `
        <div class="dsgt-cr${verticalClass}" id="${carouselId}" ${autoplayAttr}>
            <div class="dsgt-cr-container">
                <div class="${trackClass}">
                    ${slidesHTML}
                </div>
            </div>
            
            <button class="dsgt-cr-nav dsgt-cr-nav-prev">
                <i class="fa-solid ${type === 'vertical' ? 'fa-chevron-up' : 'fa-chevron-left'}"></i>
            </button>
            <button class="dsgt-cr-nav dsgt-cr-nav-next">
                <i class="fa-solid ${type === 'vertical' ? 'fa-chevron-down' : 'fa-chevron-right'}"></i>
            </button>
            
            ${indicatorsHTML}
            ${carouselConfig.hasCounter ? `
            <div class="dsgt-cr-counter">
                <span class="current">1</span> / <span class="total">${carouselConfig.slides.length}</span>
            </div>
            ` : ''}
            ${carouselConfig.hasProgress ? '<div class="dsgt-cr-progress"></div>' : ''}
        </div>
        ${thumbnailsHTML}
    `;

    $(`#${containerId}`).append(carouselHTML);

    // Initialize the carousel
    if (type === 'vertical') {
        this.initDSGTVerticalCarousel(carouselId);
    } else {
        this.initDSGTCarousel(carouselId);
    }

    console.log(`✨ DSGT ${type} carousel generated: ${carouselId}`);
    return $(`#${carouselId}`);
},

/**
 * Clear all dynamically generated carousels
 * @param {string} containerId - Container ID to clear
 * @param {string} placeholderHTML - Optional placeholder HTML to show after clearing
 */
clearAllDSGTCarousels(containerId = 'dynamicCarouselContainer', placeholderHTML = '<p style="color: var(--text-secondary); font-size: 13px; text-align: center; padding: 20px;">No carousels generated yet. Click a button above to generate one.</p>') {
    const $container = $(`#${containerId}`);
    const $carousels = $container.find('.dsgt-cr');
    const carouselCount = $carousels.length;

    if (carouselCount === 0) {
        console.log('ℹ️ No carousels to clear');
        return;
    }

    // Clean up state
    $carousels.each(function() {
        const id = $(this).attr('id');
        if (id) {
            if (MetroAdmin.dsgtCarousels[id]) {
                clearInterval(MetroAdmin.dsgtCarousels[id].autoplayTimer);
                clearInterval(MetroAdmin.dsgtCarousels[id].progressTimer);
                delete MetroAdmin.dsgtCarousels[id];
            }
            if (MetroAdmin.dsgtVerticalCarousels[id]) {
                delete MetroAdmin.dsgtVerticalCarousels[id];
            }
        }
    });

    // Clear with animation
    $carousels.css({
        'transition': 'opacity 0.3s ease, transform 0.3s ease',
        'opacity': '0',
        'transform': 'scale(0.95)'
    });

    setTimeout(() => {
        $container.html(placeholderHTML);
    }, 300);

    // Reset card carousel position
    this.dsgtCardCarouselPosition = 0;

    console.log(`🧹 DSGT Cleared ${carouselCount} carousels`);
    },

    /**
     * DSGT Colors Component Functions
     * Handles color copying, gradient copying, notifications, and dynamic color generation
     * @namespace Colors
     */

    /**
     * Initialize colors component
     * Sets up event delegation and hover effects
     */
    initColors() {
        // Event delegation for color swatches
        $(document).on('click', '.dsgt-color-swatch', function() {
            const $swatch = $(this);
            const $code = $swatch.find('code').first();
            const color = $code.text();
            const name = $swatch.find('.dsgt-color-swatch-name').text();
            MetroAdmin.copyDSGTColor(color, name);
        });

        // Event delegation for palette items
        $(document).on('click', '.dsgt-color-palette-item', function() {
            const $item = $(this);
            const color = $item.data('tooltip');
            const name = $item.text();
            MetroAdmin.copyDSGTColor(color, `Color ${name}`);
        });

        // Event delegation for gradient boxes
        $(document).on('click', '.dsgt-color-gradient-box', function() {
            const $box = $(this);
            const bg = $box.css('background');
            MetroAdmin.copyDSGTGradient(bg);
        });

        // Event delegation for background color examples
        $(document).on('click', '.cl-example > div > div[style*="background"]', function() {
            const $element = $(this);
            const bg = $element.css('background');
            const name = $element.find('div').first().text() || 'Background';
            if (bg && bg !== 'rgba(0, 0, 0, 0)') {
                MetroAdmin.copyDSGTColor(bg, name);
            }
        });

        // Event delegation for text color examples
        $(document).on('click', '.cl-example > div > div[style*="cursor: pointer"]', function() {
            const $element = $(this);
            const $code = $element.find('code').first();
            const colorText = $code.text();
            const colorMatch = colorText.match(/#[0-9A-Fa-f]{6}/);
            if (colorMatch) {
                const name = $element.find('div').first().text() || 'Text';
                MetroAdmin.copyDSGTColor(colorMatch[0], name);
            }
        });

        // Event delegation for border color examples
        $(document).on('click', '.cl-example > div > div[style*="border"]', function() {
            const $element = $(this);
            const borderColor = $element.css('border-color');
            if (borderColor && borderColor !== 'rgba(0, 0, 0, 0)') {
                const name = $element.find('div').first().text() || 'Border';
                MetroAdmin.copyDSGTColor(borderColor, name);
            }
        });

        // Hover effects for palette items
        $(document).on('mouseenter', '.dsgt-color-palette-item', function() {
            $(this).css('transform', 'scale(1.1)');
        });

        $(document).on('mouseleave', '.dsgt-color-palette-item', function() {
            $(this).css('transform', 'scale(1)');
        });

        console.log('✅ DSGT Colors component initialized');
    },

    /**
     * Copy color to clipboard
     * @param {string} hex - The hex color code
     * @param {string} name - The color name
     */
    copyDSGTColor(hex, name) {
        navigator.clipboard.writeText(hex).then(() => {
            this.showDSGTColorNotification(`Copied ${name}: ${hex}`);
        }).catch(err => {
            // Fallback for older browsers
            const textArea = document.createElement('textarea');
            textArea.value = hex;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            this.showDSGTColorNotification(`Copied ${name}: ${hex}`);
        });
    },

    /**
     * Copy gradient to clipboard
     * @param {string} gradient - The gradient CSS value
     */
    copyDSGTGradient(gradient) {
        navigator.clipboard.writeText(gradient).then(() => {
            this.showDSGTColorNotification('Copied gradient CSS');
        }).catch(() => {
            const textArea = document.createElement('textarea');
            textArea.value = gradient;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            this.showDSGTColorNotification('Copied gradient CSS');
        });
    },

    /**
     * Copy all CSS variables to clipboard
     */
    copyDSGTAllColors() {
        const cssVariables = `:root {
  --accent: #0078D4;
  --success: #16C60C;
  --warning: #FFB900;
  --danger: #E81123;
  --info: #00BCF2;
  --text-primary: #1A1A1A;
  --text-secondary: #808080;
  --bg-card: #FFFFFF;
  --bg-secondary: #F8F9FA;
  --bg-tertiary: #E9ECEF;
  --border-color: #DEE2E6;
}`;

        navigator.clipboard.writeText(cssVariables).then(() => {
            this.showDSGTColorNotification('Copied all CSS variables');
        }).catch(() => {
            this.showDSGTColorNotification('Failed to copy', 'error');
        });
    },

    /**
     * Show copy notification
     * @param {string} message - The notification message
     * @param {string} type - The notification type (success or error)
     */
    showDSGTColorNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = 'dsgt-color-copy-notification show';
        notification.style.background = type === 'error' ? 'var(--danger)' : 'var(--success)';
        notification.innerHTML = `
            <i class="fa-solid fa-${type === 'error' ? 'times-circle' : 'check-circle'}"></i>
            <span>${message}</span>
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    },

    /**
     * Generate dynamic color palette
     * @param {string} type - Type of palette (swatches, palette, gradient)
     * @param {string} containerId - Container ID to append palette to
     * @param {object} config - Custom configuration
     * @returns {jQuery} The generated palette element
     */
    generateDSGTColorPalette(type, containerId = 'dynamicColorContainer', config = {}) {
        window.dsgtColorCount = (window.dsgtColorCount || 0) + 1;
        const paletteId = `dsgtColor${type}${window.dsgtColorCount}`;

        const paletteConfigs = {
            swatches: {
                colors: config.colors || [
                    { hex: '#0078D4', name: 'Accent Primary', css: 'var(--accent)' },
                    { hex: '#16C60C', name: 'Success', css: 'var(--success)' },
                    { hex: '#FFB900', name: 'Warning', css: 'var(--warning)' },
                    { hex: '#E81123', name: 'Danger', css: 'var(--danger)' }
                ]
            },
            palette: {
                baseColor: config.baseColor || '#0078D4',
                shades: config.shades || 10,
                name: config.name || 'Custom Palette'
            },
            gradient: {
                gradients: config.gradients || [
                    { name: 'Purple Dream', css: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' },
                    { name: 'Pink Sunset', css: 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' },
                    { name: 'Ocean Blue', css: 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' }
                ]
            }
        };

        const paletteConfig = paletteConfigs[type];
        if (!paletteConfig) {
            console.error(`❌ Invalid palette type: ${type}`);
            return null;
        }

        let paletteHTML = '';

        if (type === 'swatches') {
            const swatchesHTML = paletteConfig.colors.map(color => `
                <div class="dsgt-color-swatch" onclick="MetroAdmin.copyDSGTColor('${color.hex}', '${color.name}')">
                    <div class="dsgt-color-swatch-preview" style="background: ${color.hex};">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <div class="dsgt-color-swatch-info">
                        <h4 class="dsgt-color-swatch-name">${color.name}</h4>
                        <div class="dsgt-color-swatch-details">
                            <div class="dsgt-color-swatch-detail">
                                <span>HEX:</span>
                                <code>${color.hex}</code>
                            </div>
                            <div class="dsgt-color-swatch-detail">
                                <span>CSS:</span>
                                <code>${color.css}</code>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');

            paletteHTML = `
                <div class="cl-colors-grid" id="${paletteId}">
                    ${swatchesHTML}
                </div>
            `;
        } else if (type === 'palette') {
            const baseColor = paletteConfig.baseColor;
            const shades = paletteConfig.shades;
            
            // Generate shade variations
            const paletteItems = [];
            for (let i = 0; i < shades; i++) {
                const shade = Math.round((i / (shades - 1)) * 100);
                paletteItems.push({
                    hex: baseColor,
                    label: `${shade}`
                });
            }

            const itemsHTML = paletteItems.map((item, index) => `
                <div class="dsgt-color-palette-item" style="background: ${item.hex};" data-tooltip="${item.hex}" onclick="MetroAdmin.copyDSGTColor('${item.hex}', '${paletteConfig.name} ${item.label}')">
                    ${item.label}
                </div>
            `).join('');

            paletteHTML = `
                <div class="dsgt-color-palette-grid" id="${paletteId}">
                    ${itemsHTML}
                </div>
            `;
        } else if (type === 'gradient') {
            const gradientsHTML = paletteConfig.gradients.map(gradient => `
                <div class="dsgt-color-gradient-box" style="background: ${gradient.css};" onclick="MetroAdmin.copyDSGTGradient('${gradient.css}')">
                    ${gradient.name}
                </div>
                <div class="dsgt-color-gradient-info">
                    <span class="dsgt-color-gradient-name">${gradient.name}</span>
                </div>
            `).join('');

            paletteHTML = `
                <div id="${paletteId}">
                    ${gradientsHTML}
                </div>
            `;
        }

        $(`#${containerId}`).append(paletteHTML);

        console.log(`✨ DSGT ${type} palette generated: ${paletteId}`);
        return $(`#${paletteId}`);
    },

    /**
     * Clear all dynamically generated color palettes
     * @param {string} containerId - Container ID to clear
     * @param {string} placeholderHTML - Optional placeholder HTML to show after clearing
     */
    clearDSGTColorPalettes(containerId = 'dynamicColorContainer', placeholderHTML = '<p style="color: var(--text-secondary); font-size: 13px; text-align: center; padding: 20px;">No color palettes generated yet. Click a button above to generate one.</p>') {
        const $container = $(`#${containerId}`);
        const $palettes = $container.find('.dsgt-color-swatch, .dsgt-color-palette-grid, .dsgt-color-gradient-box');
        const paletteCount = $palettes.length;

        if (paletteCount === 0) {
            console.log('ℹ️ No color palettes to clear');
            return;
        }

        // Clear with animation
        $palettes.css({
            'transition': 'opacity 0.3s ease, transform 0.3s ease',
            'opacity': '0',
            'transform': 'translateY(20px)'
        });

        setTimeout(() => {
            $container.html(placeholderHTML);
        }, 300);

        console.log(`🧹 DSGT Cleared ${paletteCount} color palettes`);
    },

    /**
     * DSGT Dropdowns Component Functions
     * Handles dropdown toggling, item selection, filtering, and keyboard navigation
     * @namespace Dropdowns
     */

    /**
     * Initialize dropdowns component
     * Sets up event delegation and keyboard navigation
     */
    initDropdowns() {
        // Close dropdown when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dsgt-dropdown').length) {
                MetroAdmin.closeAllDropdowns();
            }
        });

        // Close on Escape key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') {
                MetroAdmin.closeAllDropdowns();
            }
        });

        console.log('✅ DSGT Dropdowns component initialized');
    },

    /**
     * Toggle dropdown open/close
     * @param {HTMLElement} trigger - The dropdown trigger element
     */
    toggleDSGTDropdown(trigger) {
        const $wrapper = $(trigger).closest('.dsgt-dropdown-wrapper');
        const $menu = $wrapper.find('.dsgt-dropdown-menu');
        const isOpen = $menu.hasClass('show');

        // Close all other dropdowns
        this.closeAllDSGTDropdowns();

        // Toggle current dropdown
        if (!isOpen) {
            $menu.addClass('show');
            $(trigger).addClass('active');
            $wrapper.addClass('active');
        } else {
            $menu.removeClass('show');
            $(trigger).removeClass('active');
            $wrapper.removeClass('active');
        }
    },

    /**
     * Select a dropdown item
     * @param {HTMLElement} item - The dropdown item element
     */
    selectDSGTDropdownItem(item) {
        const $item = $(item);
        const $menu = $item.closest('.dsgt-dropdown-menu');
        const $wrapper = $menu.closest('.dsgt-dropdown-wrapper');
        const $trigger = $wrapper.find('.dsgt-dropdown-trigger');

        // Remove active from all items
        $menu.find('.dsgt-dropdown-item').removeClass('active');

        // Add active to clicked item
        $item.addClass('active');

        // Update trigger text (optional)
        const $title = $item.find('.dsgt-dropdown-item-title');
        if ($title.length && !$trigger.find('.dsgt-notification-badge').length) {
            const text = $title.text();
            const $icon = $trigger.find('i:first-child');
            $trigger.empty();
            if ($icon.length) {
                $trigger.append($icon.clone());
            }
            $trigger.append(document.createTextNode(' ' + text));
            const $chevron = $('<i>').addClass('fa-solid fa-chevron-down dsgt-dropdown-trigger-icon');
            $trigger.append($chevron);
        }

        // Close dropdown
        setTimeout(() => {
            $menu.removeClass('show');
            $trigger.removeClass('active');
            $wrapper.removeClass('active');
        }, 200);

        // Show notification
        const titleText = $title.length ? $title.text() : 'Item';
        if (typeof MetroAdmin !== 'undefined' && MetroAdmin.showToast) {
            MetroAdmin.showToast(`Selected: ${titleText}`, 'success');
        }
    },

    /**
     * Filter dropdown items based on search input
     * @param {HTMLElement} input - The search input element
     */
    filterDSGTDropdown(input) {
        const $input = $(input);
        const searchTerm = $input.val().toLowerCase();
        const $menu = $input.closest('.dsgt-dropdown-menu');
        const $items = $menu.find('.dsgt-dropdown-item');

        $items.each(function() {
            const $title = $(this).find('.dsgt-dropdown-item-title');
            if ($title.length) {
                const text = $title.text().toLowerCase();
                $(this).toggle(text.includes(searchTerm));
            }
        });
    },

    /**
     * Close all open dropdowns
     */
    closeAllDSGTDropdowns() {
        $('.dsgt-dropdown-menu.show').removeClass('show');
        $('.dsgt-dropdown-trigger.active').removeClass('active');
        $('.dsgt-dropdown-wrapper.active').removeClass('active');
    },

    /**
     * Generate dynamic dropdown programmatically
     * @param {object} config - Dropdown configuration
     * @param {string} containerId - Container ID to append dropdown to
     * @returns {jQuery} The generated dropdown wrapper
     */
    generateDSGTDropdown(config, containerId = 'dynamicDropdownContainer') {
        window.dsgtDropdownCount = (window.dsgtDropdownCount || 0) + 1;
        const dropdownId = `dsgtDropdown${window.dsgtDropdownCount}`;

        const {
            triggerText = 'Dropdown',
            triggerIcon = '',
            triggerClass = '',
            menuClass = 'dsgt-dropdown-menu-md',
            position = '', // '', 'position-right', 'position-center'
            header = null,
            items = [],
            footer = null,
            hasSearch = false
        } = config;

        // Build trigger
        let triggerHTML = triggerText;
        if (triggerIcon) {
            triggerHTML = `<i class="${triggerIcon}"></i> ${triggerHTML}`;
        }
        triggerHTML += '<i class="fa-solid fa-chevron-down dsgt-dropdown-trigger-icon"></i>';

        // Build header
        let headerHTML = '';
        if (header) {
            headerHTML = `
                <div class="dsgt-dropdown-header">
                    <h4>${header.title}</h4>
                    ${header.subtitle ? `<p>${header.subtitle}</p>` : ''}
                </div>
            `;
        }

        // Build search
        const searchHTML = hasSearch ? `
            <div class="dsgt-dropdown-search">
                <input type="text" placeholder="Search...">
            </div>
        ` : '';

        // Build items
        const itemsHTML = items.map(item => {
            const iconHTML = item.icon ? `<i class="${item.icon}" style="color: ${item.iconColor || 'var(--text-secondary)'};"></i>` : '';
            const descHTML = item.description ? `<p class="dsgt-dropdown-item-desc">${item.description}</p>` : '';
            const badgeHTML = item.badge ? `<span class="dsgt-dropdown-item-badge ${item.badgeClass || ''}">${item.badge}</span>` : '';
            const itemClass = item.class ? ` ${item.class}` : '';

            return `
                <div class="dsgt-dropdown-item${itemClass}">
                    ${iconHTML}
                    <div class="dsgt-dropdown-item-content">
                        <div class="dsgt-dropdown-item-title">${item.title}</div>
                        ${descHTML}
                    </div>
                    ${badgeHTML}
                </div>
            `;
        }).join('');

        // Build footer
        let footerHTML = '';
        if (footer) {
            footerHTML = `
                <div class="dsgt-dropdown-footer">
                    <button>${footer.text}</button>
                </div>
            `;
        }

        // Build complete dropdown
        const positionClass = position ? ` ${position}` : '';
        const dropdownHTML = `
            <div class="dsgt-dropdown-wrapper" id="${dropdownId}">
                <button class="dsgt-dropdown-trigger ${triggerClass}">
                    ${triggerHTML}
                </button>
                <div class="dsgt-dropdown-menu ${menuClass}${positionClass}">
                    ${headerHTML}
                    ${searchHTML}
                    <div class="dsgt-dropdown-body">
                        ${itemsHTML}
                    </div>
                    ${footerHTML}
                </div>
            </div>
        `;

        $(`#${containerId}`).append(dropdownHTML);

        console.log(`✨ DSGT Dropdown generated: ${dropdownId}`);
        return $(`#${dropdownId}`);
    },

    /**
     * Clear all dynamically generated dropdowns
     * @param {string} containerId - Container ID to clear
     * @param {string} placeholderHTML - Optional placeholder HTML to show after clearing
     */
    clearDSGTDropdowns(containerId = 'dynamicDropdownContainer', placeholderHTML = '<p style="color: var(--text-secondary); font-size: 13px; text-align: center; padding: 20px;">No dropdowns generated yet. Click a button above to generate one.</p>') {
        const $container = $(`#${containerId}`);
        const $dropdowns = $container.find('.dsgt-dropdown-wrapper');
        const dropdownCount = $dropdowns.length;

        if (dropdownCount === 0) {
            console.log('ℹ️ No dropdowns to clear');
            return;
        }

        // Close all dropdowns first
        this.closeAllDSGTDropdowns();

        // Clear with animation
        $dropdowns.css({
            'transition': 'opacity 0.3s ease, transform 0.3s ease',
            'opacity': '0',
            'transform': 'translateY(20px)'
        });

        setTimeout(() => {
            $container.html(placeholderHTML);
        }, 300);

        console.log(`🧹 DSGT Cleared ${dropdownCount} dropdowns`);
    },

    /**
     * DSGT Grid Component Functions
     * Handles grid initialization, responsive labels, and hover effects
     * @namespace Grid
     */

    initGrids() {
        // Initialize responsive labels on page load
        MetroAdmin.updateGridResponsiveLabels();

        // Update responsive labels on window resize
        $(window).on('resize', function() {
            MetroAdmin.updateGridResponsiveLabels();
        });

        console.log('✅ DSGT Grid component initialized');
    },

    updateGridResponsiveLabels() {
        const width = $(window).width();

        $('.dsgt-grid-responsive-labels').each(function() {
            $(this).find('.dsgt-grid-responsive-label').removeClass('active');

            if (width < 576) {
                $(this).find('.dsgt-grid-responsive-label:contains("Mobile")').addClass('active');
            } else if (width < 768) {
                $(this).find('.dsgt-grid-responsive-label:contains("Tablet")').addClass('active');
            } else {
                $(this).find('.dsgt-grid-responsive-label:contains("Desktop")').addClass('active');
            }
        });
    },

    /**
     * Generate a grid layout dynamically
     * @param {Object} config - Grid configuration
     * @param {string} containerId - Target container ID
     * @returns {jQuery} Generated grid element
     */
    generateDSGTGrid(config, containerId = 'dynamicGridContainer') {
        window.dsgtGridCount = (window.dsgtGridCount || 0) + 1;
        const gridId = `dsgtGrid${window.dsgtGridCount}`;

        const {
            columns = 'repeat(3, 1fr)',
            gap = '16px',
            items = [],
            showCode = true,
            codeText = '',
            helperText = ''
        } = config;

        // Build items HTML
        let itemsHTML = '';
        items.forEach((item, index) => {
            const color = item.color || '';
            const content = item.content || `Item ${index + 1}`;
            const minHeight = item.minHeight || '80px';
            const extraClass = item.class || '';

            itemsHTML += `<div class="dsgt-grid-box ${extraClass}" style="${color ? `background: ${color};` : ''} min-height: ${minHeight};">${content}</div>`;
        });

        // Build complete grid HTML
        const gridHTML = `
            <div id="${gridId}" class="dsgt-grid-example">
                ${showCode && codeText ? `<div class="dsgt-grid-code">${codeText}</div>` : ''}
                <div class="dsgt-grid-demo" style="grid-template-columns: ${columns}; gap: ${gap};">
                    ${itemsHTML}
                </div>
                ${helperText ? `
                <div class="dsgt-grid-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    ${helperText}
                </div>` : ''}
            </div>
        `;

        $(`#${containerId}`).append(gridHTML);
        return $(`#${gridId}`);
    },

    /**
     * Clear all dynamically generated grids
     * @param {string} containerId - Container ID to clear
     */
    clearDSGTGrids(containerId = 'dynamicGridContainer') {
        const $container = $(`#${containerId}`);
        const gridCount = $container.find('[id^="dsgtGrid"]').length;

        if (gridCount === 0) {
            console.log('ℹ️ No dynamic grids to clear');
            return;
        }

        // Fade out animation
        $container.find('[id^="dsgtGrid"]').css({
            'opacity': '0',
            'transform': 'translateY(-20px)',
            'transition': 'all 0.3s ease'
        });

        setTimeout(() => {
            $container.html('');
        }, 300);

        console.log(`🧹 DSGT Cleared ${gridCount} grids`);
    },

    /**
     * DSGT Images Component Functions
     * Handles image viewer, zoom, pan, gallery, and lightbox functionality
     * @namespace Images
     */

    initImages() {
        // Initialize lightbox triggers
        $(document).on('click', '.dsgt-lightbox-trigger', function() {
            var imgSrc = $(this).find('img').attr('src');
            MetroAdmin.openDSGTImageViewer(imgSrc);
        });

        // Overlay container clicks
        $(document).on('click', '.dsgt-img-overlay-container:not(.dsgt-lightbox-trigger)', function() {
            var imgSrc = $(this).find('img').attr('src');
            MetroAdmin.openDSGTImageViewer(imgSrc);
        });

        // Gallery item clicks
        $(document).on('click', '.dsgt-gallery-item', function() {
            var imgSrc = $(this).find('img').attr('src');
            MetroAdmin.openDSGTImageViewer(imgSrc);
        });

        console.log('✅ DSGT Images component initialized');
    },

/**
 * Initialize DSGT Links component
 * Placeholder - awaits full migration from links.blade.php
 */
initLinks() {
    // TODO: Migrate links component from links.blade.php
    console.log('✅ DSGT Links component initialized (placeholder)');
},

    // Image viewer state
    imageViewerState: {
        scale: 1,
        panning: false,
        pointX: 0,
        pointY: 0,
        startX: 0,
        startY: 0,
        minScale: 0.5,
        maxScale: 5
    },

    openDSGTImageViewer(imgSrc) {
        // Create modal if doesn't exist
        if ($('#dsgtImageViewerModal').length === 0) {
            var modalHTML = `
                <div id="dsgtImageViewerModal" class="dsgt-image-viewer-modal">
                    <button class="dsgt-viewer-close" onclick="MetroAdmin.closeDSGTImageViewer()">
                        <i class="fa-solid fa-times"></i>
                    </button>
                    
                    <div class="dsgt-viewer-hint">
                        <i class="fa-solid fa-mouse" style="margin-right: 6px;"></i>
                        Scroll to zoom • Drag to pan • Double-click to reset
                    </div>
                    
                    <div class="dsgt-image-viewer-container" id="dsgtViewerContainer">
                        <img src="${imgSrc}" class="dsgt-image-viewer-img" id="dsgtViewerImage" alt="Viewer">
                    </div>
                    
                    <div class="dsgt-image-viewer-controls">
                        <button class="dsgt-viewer-btn" onclick="MetroAdmin.zoomDSGTImageIn()" title="Zoom In">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                        <button class="dsgt-viewer-btn" onclick="MetroAdmin.zoomDSGTImageOut()" title="Zoom Out">
                            <i class="fa-solid fa-magnifying-glass-minus"></i>
                        </button>
                        <div class="dsgt-viewer-zoom-level" id="dsgtZoomLevel">100%</div>
                        <button class="dsgt-viewer-btn" onclick="MetroAdmin.resetDSGTZoom()" title="Reset">
                            <i class="fa-solid fa-compress"></i>
                        </button>
                        <button class="dsgt-viewer-btn" onclick="MetroAdmin.fitDSGTImageToScreen()" title="Fit to Screen">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                </div>
            `;
            $('body').append(modalHTML);
            
            // Initialize event listeners
            MetroAdmin.initializeDSGTViewerEvents();
        }
        
        // Reset state
        MetroAdmin.resetDSGTViewerState();
        
        // Update image source
        $('#dsgtViewerImage').attr('src', imgSrc);
        
        // Show modal
        $('#dsgtImageViewerModal').addClass('active');
        $('body').css('overflow', 'hidden');
        
        // Center the image after modal is shown
        setTimeout(function() {
            MetroAdmin.centerDSGTImage();
        }, 50);
    },

    closeDSGTImageViewer() {
        $('#dsgtImageViewerModal').removeClass('active');
        $('body').css('overflow', '');
        MetroAdmin.resetDSGTViewerState();
    },

    resetDSGTViewerState() {
        MetroAdmin.imageViewerState = {
            scale: 1,
            panning: false,
            pointX: 0,
            pointY: 0,
            startX: 0,
            startY: 0,
            minScale: 0.5,
            maxScale: 5
        };
        MetroAdmin.updateDSGTViewerTransform();
        MetroAdmin.centerDSGTImage();
    },

    centerDSGTImage() {
        var $container = $('#dsgtViewerContainer');
        var $image = $('#dsgtViewerImage');
        
        if ($container.length === 0 || $image.length === 0) return;
        
        var containerWidth = $container.width();
        var containerHeight = $container.height();
        var imgWidth = $image[0].naturalWidth || $image.width();
        var imgHeight = $image[0].naturalHeight || $image.height();
        
        // Calculate centered position
        var centeredX = (containerWidth - imgWidth * MetroAdmin.imageViewerState.scale) / 2;
        var centeredY = (containerHeight - imgHeight * MetroAdmin.imageViewerState.scale) / 2;
        
        MetroAdmin.imageViewerState.pointX = centeredX;
        MetroAdmin.imageViewerState.pointY = centeredY;
        
        MetroAdmin.updateDSGTViewerTransform();
    },

    initializeDSGTViewerEvents() {
        var $container = $('#dsgtViewerContainer');
        var $image = $('#dsgtViewerImage');
        
        // Mouse wheel zoom
        $container.off('wheel').on('wheel', function(e) {
            e.preventDefault();
            var delta = e.originalEvent.deltaY > 0 ? -0.1 : 0.1;
            var newScale = Math.min(MetroAdmin.imageViewerState.maxScale, Math.max(MetroAdmin.imageViewerState.minScale, MetroAdmin.imageViewerState.scale + delta));
            
            // Zoom towards mouse position
            var rect = this.getBoundingClientRect();
            var mouseX = e.clientX - rect.left - rect.width / 2 - MetroAdmin.imageViewerState.pointX;
            var mouseY = e.clientY - rect.top - rect.height / 2 - MetroAdmin.imageViewerState.pointY;
            
            MetroAdmin.imageViewerState.pointX -= mouseX * (newScale / MetroAdmin.imageViewerState.scale - 1);
            MetroAdmin.imageViewerState.pointY -= mouseY * (newScale / MetroAdmin.imageViewerState.scale - 1);
            MetroAdmin.imageViewerState.scale = newScale;
            
            MetroAdmin.updateDSGTViewerTransform();
        });
        
        // Mouse drag pan - on image itself
        $image.off('mousedown').on('mousedown', function(e) {
            if (MetroAdmin.imageViewerState.scale > 1) {
                e.preventDefault();
                e.stopPropagation();
                MetroAdmin.imageViewerState.panning = true;
                MetroAdmin.imageViewerState.startX = e.clientX - MetroAdmin.imageViewerState.pointX;
                MetroAdmin.imageViewerState.startY = e.clientY - MetroAdmin.imageViewerState.pointY;
                $container.addClass('dragging');
            }
        });
        
        // Also on container as fallback
        $container.off('mousedown').on('mousedown', function(e) {
            if (MetroAdmin.imageViewerState.scale > 1 && !$(e.target).hasClass('dsgt-viewer-btn') && !$(e.target).closest('.dsgt-image-viewer-controls').length) {
                e.preventDefault();
                MetroAdmin.imageViewerState.panning = true;
                MetroAdmin.imageViewerState.startX = e.clientX - MetroAdmin.imageViewerState.pointX;
                MetroAdmin.imageViewerState.startY = e.clientY - MetroAdmin.imageViewerState.pointY;
                $container.addClass('dragging');
            }
        });
        
        // Remove old event listeners before adding new ones
        $(document).off('mousemove.dsgtViewer mouseup.dsgtViewer');
        
        $(document).on('mousemove.dsgtViewer', function(e) {
            if (!MetroAdmin.imageViewerState.panning) return;
            e.preventDefault();
            MetroAdmin.imageViewerState.pointX = e.clientX - MetroAdmin.imageViewerState.startX;
            MetroAdmin.imageViewerState.pointY = e.clientY - MetroAdmin.imageViewerState.startY;
            MetroAdmin.updateDSGTViewerTransform();
        });
        
        $(document).on('mouseup.dsgtViewer', function() {
            if (MetroAdmin.imageViewerState.panning) {
                MetroAdmin.imageViewerState.panning = false;
                $container.removeClass('dragging');
            }
        });
        
        // Double click to reset
        $container.on('dblclick', function() {
            MetroAdmin.resetDSGTViewerState();
        });
        
        // Touch support
        var lastTouchDistance = 0;
        
        $container.on('touchstart', function(e) {
            if (e.originalEvent.touches.length === 1) {
                // Single touch - start dragging
                if (MetroAdmin.imageViewerState.scale > 1) {
                    MetroAdmin.imageViewerState.panning = true;
                    var touch = e.originalEvent.touches[0];
                    MetroAdmin.imageViewerState.startX = touch.clientX - MetroAdmin.imageViewerState.pointX;
                    MetroAdmin.imageViewerState.startY = touch.clientY - MetroAdmin.imageViewerState.pointY;
                }
            } else if (e.originalEvent.touches.length === 2) {
                // Two fingers - start pinch zoom
                MetroAdmin.imageViewerState.panning = false;
                var touch1 = e.originalEvent.touches[0];
                var touch2 = e.originalEvent.touches[1];
                lastTouchDistance = Math.hypot(
                    touch2.clientX - touch1.clientX,
                    touch2.clientY - touch1.clientY
                );
            }
        });
        
        $container.on('touchmove', function(e) {
            if (e.originalEvent.touches.length === 1 && MetroAdmin.imageViewerState.panning) {
                // Single touch drag
                e.preventDefault();
                var touch = e.originalEvent.touches[0];
                MetroAdmin.imageViewerState.pointX = touch.clientX - MetroAdmin.imageViewerState.startX;
                MetroAdmin.imageViewerState.pointY = touch.clientY - MetroAdmin.imageViewerState.startY;
                MetroAdmin.updateDSGTViewerTransform();
            } else if (e.originalEvent.touches.length === 2) {
                // Pinch zoom
                e.preventDefault();
                var touch1 = e.originalEvent.touches[0];
                var touch2 = e.originalEvent.touches[1];
                var distance = Math.hypot(
                    touch2.clientX - touch1.clientX,
                    touch2.clientY - touch1.clientY
                );
                
                var delta = (distance - lastTouchDistance) * 0.005;
                var newScale = Math.min(MetroAdmin.imageViewerState.maxScale, Math.max(MetroAdmin.imageViewerState.minScale, MetroAdmin.imageViewerState.scale + delta));
                MetroAdmin.imageViewerState.scale = newScale;
                lastTouchDistance = distance;
                
                MetroAdmin.updateDSGTViewerTransform();
            }
        });
        
        $container.on('touchend', function() {
            MetroAdmin.imageViewerState.panning = false;
            lastTouchDistance = 0;
        });
    },

    updateDSGTViewerTransform() {
        var $image = $('#dsgtViewerImage');
        var transform = `translate(${MetroAdmin.imageViewerState.pointX}px, ${MetroAdmin.imageViewerState.pointY}px) scale(${MetroAdmin.imageViewerState.scale})`;
        $image.css('transform', transform);
        
        // Update zoom level display
        $('#dsgtZoomLevel').text(Math.round(MetroAdmin.imageViewerState.scale * 100) + '%');
        
        // Update cursor based on zoom level
        var $container = $('#dsgtViewerContainer');
        if (MetroAdmin.imageViewerState.scale > 1) {
            $container.css('cursor', MetroAdmin.imageViewerState.panning ? 'grabbing' : 'grab');
        } else {
            $container.css('cursor', 'default');
        }
    },

    zoomDSGTImageIn() {
        var oldScale = MetroAdmin.imageViewerState.scale;
        MetroAdmin.imageViewerState.scale = Math.min(MetroAdmin.imageViewerState.maxScale, MetroAdmin.imageViewerState.scale + 0.2);
        
        // Zoom from center
        var $container = $('#dsgtViewerContainer');
        var $image = $('#dsgtViewerImage');
        var containerWidth = $container.width();
        var containerHeight = $container.height();
        var imgWidth = $image[0].naturalWidth || $image.width();
        var imgHeight = $image[0].naturalHeight || $image.height();
        
        var centerX = containerWidth / 2;
        var centerY = containerHeight / 2;
        
        var mouseX = centerX - imgWidth * oldScale / 2 - MetroAdmin.imageViewerState.pointX;
        var mouseY = centerY - imgHeight * oldScale / 2 - MetroAdmin.imageViewerState.pointY;
        
        MetroAdmin.imageViewerState.pointX -= mouseX * (MetroAdmin.imageViewerState.scale / oldScale - 1);
        MetroAdmin.imageViewerState.pointY -= mouseY * (MetroAdmin.imageViewerState.scale / oldScale - 1);
        
        MetroAdmin.updateDSGTViewerTransform();
    },

    zoomDSGTImageOut() {
        var oldScale = MetroAdmin.imageViewerState.scale;
        MetroAdmin.imageViewerState.scale = Math.max(MetroAdmin.imageViewerState.minScale, MetroAdmin.imageViewerState.scale - 0.2);
        
        // Zoom from center
        var $container = $('#dsgtViewerContainer');
        var $image = $('#dsgtViewerImage');
        var containerWidth = $container.width();
        var containerHeight = $container.height();
        var imgWidth = $image[0].naturalWidth || $image.width();
        var imgHeight = $image[0].naturalHeight || $image.height();
        
        var centerX = containerWidth / 2;
        var centerY = containerHeight / 2;
        
        var mouseX = centerX - imgWidth * oldScale / 2 - MetroAdmin.imageViewerState.pointX;
        var mouseY = centerY - imgHeight * oldScale / 2 - MetroAdmin.imageViewerState.pointY;
        
        MetroAdmin.imageViewerState.pointX -= mouseX * (MetroAdmin.imageViewerState.scale / oldScale - 1);
        MetroAdmin.imageViewerState.pointY -= mouseY * (MetroAdmin.imageViewerState.scale / oldScale - 1);
        
        if (MetroAdmin.imageViewerState.scale <= 1) {
            MetroAdmin.centerDSGTImage();
        } else {
            MetroAdmin.updateDSGTViewerTransform();
        }
    },

    resetDSGTZoom() {
        MetroAdmin.imageViewerState.scale = 1;
        MetroAdmin.centerDSGTImage();
    },

    fitDSGTImageToScreen() {
        var $container = $('#dsgtViewerContainer');
        var $image = $('#dsgtViewerImage');
        
        // Get natural image dimensions
        var img = $image[0];
        if (img.complete) {
            var containerWidth = $container.width();
            var containerHeight = $container.height();
            var imgWidth = img.naturalWidth;
            var imgHeight = img.naturalHeight;
            
            var scale = Math.min(
                containerWidth / imgWidth,
                containerHeight / imgHeight
            ) * 0.9;
            
            MetroAdmin.imageViewerState.scale = scale;
            MetroAdmin.centerDSGTImage();
        }
    },

    /**
     * Generate an image showcase dynamically
     * @param {Object} config - Image configuration
     * @param {string} containerId - Target container ID
     * @returns {jQuery} Generated image element
     */
    generateDSGTImage(config, containerId = 'dynamicImageContainer') {
        window.dsgtImageCount = (window.dsgtImageCount || 0) + 1;
        const imageId = `dsgtImage${window.dsgtImageCount}`;

        const {
            src = 'https://picsum.photos/600/400',
            alt = 'Image',
            style = 'default',
            caption = '',
            helperText = '',
            withOverlay = false,
            withLightbox = true
        } = config;

        // Determine classes based on style
        let classes = 'dsgt-demo-image';
        if (style === 'rounded') classes += ' dsgt-img-rounded';
        else if (style === 'bordered') classes += ' dsgt-img-bordered';
        else if (style === 'shadow') classes += ' dsgt-img-shadow';
        else if (style === 'thumbnail') classes += ' dsgt-img-thumbnail';
        else if (style === 'circular') classes += ' dsgt-img-circular';

        // Build image HTML
        let imageHTML = '';
        if (withLightbox) {
            imageHTML = `
                <div id="${imageId}" class="dsgt-lightbox-trigger">
                    <img src="${src}" class="${classes}" alt="${alt}">
                    <div class="dsgt-lightbox-icon">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>
            `;
        } else if (withOverlay) {
            imageHTML = `
                <div id="${imageId}" class="dsgt-img-overlay-container">
                    <img src="${src}" class="${classes}" alt="${alt}">
                    <div class="dsgt-img-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
            `;
        } else {
            imageHTML = `<img id="${imageId}" src="${src}" class="${classes}" alt="${alt}">`;
        }

        // Build complete showcase HTML
        const showcaseHTML = `
            <div class="dsgt-images-example">
                ${imageHTML}
                ${caption ? `
                <div class="dsgt-img-caption">
                    <h4>${caption}</h4>
                </div>` : ''}
                ${helperText ? `
                <div class="dsgt-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    ${helperText}
                </div>` : ''}
            </div>
        `;

        $(`#${containerId}`).append(showcaseHTML);
        return $(`#${imageId}`);
    },

/**
 * Clear all dynamically generated images
 * @param {string} containerId - Container ID to clear
 */
clearDSGTImages(containerId = 'dynamicImageContainer') {
    const $container = $(`#${containerId}`);
    const imageCount = $container.find('[id^="dsgtImage"]').length;

    if (imageCount === 0) {
        console.log('ℹ️ No dynamic images to clear');
        return;
    }

    // Fade out animation
    $container.find('[id^="dsgtImage"]').css({
        'opacity': '0',
        'transform': 'scale(0.9)',
        'transition': 'all 0.3s ease'
    });

    setTimeout(() => {
        $container.html('');
    }, 300);

    console.log(`🧹 DSGT Cleared ${imageCount} images`);
},

// ==========================================
// DSGT List Group Component Functions
// ==========================================

/**
 * Initialize DSGT List Group component
 * Sets up event handlers for checkboxes, switches, clickable items, and search
 */
initListGroups() {
    // Checkbox interaction
    $(document).on('change', '.dsgt-list-group-checkbox', function() {
        MetroAdmin.handleDSGTListGroupCheckbox($(this));
    });

    // Switch interaction
    $(document).on('change', '.dsgt-metro-switch input', function() {
        MetroAdmin.handleDSGTListGroupSwitch($(this));
    });

    // Clickable items
    $(document).on('click', '.dsgt-list-group-item-clickable', function() {
        MetroAdmin.handleDSGTListGroupItemClick($(this));
    });

    // Action buttons
    $(document).on('click', '.dsgt-list-group-action-btn', function(e) {
        e.stopPropagation();
        MetroAdmin.handleDSGTListGroupAction($(this));
    });

    // List item clicks
    $(document).on('click', '.dsgt-list-group-item', function(e) {
        if (!$(e.target).is('input, button, .dsgt-list-group-action-btn')) {
            MetroAdmin.handleDSGTListItemClick($(this));
        }
    });

    console.log('✅ DSGT List Group component initialized');
},

/**
 * Handle checkbox change in list group
 * @param {jQuery} $checkbox - Checkbox element
 */
handleDSGTListGroupCheckbox($checkbox) {
    const $item = $checkbox.closest('.dsgt-list-group-item');
    if ($checkbox.is(':checked')) {
        $item.css('background', 'rgba(22, 198, 12, 0.05)');
    } else {
        $item.css('background', '');
    }
},

/**
 * Handle switch toggle in list group
 * @param {jQuery} $switch - Switch input element
 */
handleDSGTListGroupSwitch($switch) {
    const state = $switch.is(':checked') ? 'enabled' : 'disabled';
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.showToast(`Toggle ${state}`, 'success');
    }
},

/**
 * Handle clickable list item click
 * @param {jQuery} $item - List item element
 */
handleDSGTListGroupItemClick($item) {
    $('.dsgt-list-group-item-clickable').removeClass('active');
    $item.addClass('active');
},

/**
 * Handle action button click
 * @param {jQuery} $button - Action button element
 */
handleDSGTListGroupAction($button) {
    const action = $button.attr('title');
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.showToast(`${action} clicked`, 'info');
    }
},

/**
 * Handle general list item click
 * @param {jQuery} $item - List item element
 */
handleDSGTListItemClick($item) {
    if (typeof MetroAdmin !== 'undefined') {
        const title = $item.find('.dsgt-list-group-title').text();
        if (title) {
            MetroAdmin.showToast(`Selected: ${title}`, 'success');
        }
    }
},

/**
 * Initialize search functionality for list group
 * @param {string} searchInputId - Search input element ID
 * @param {string} listGroupId - List group element ID
 */
initDSGTListGroupSearch(searchInputId = 'searchInput', listGroupId = 'contactList') {
    $(`#${searchInputId}`).on('keyup', function() {
        const value = $(this).val().toLowerCase();
        $(`#${listGroupId} li`).filter(function() {
            const searchText = $(this).data('search') || '';
            const nameText = $(this).find('.dsgt-list-group-title').text().toLowerCase() || '';
            const descText = $(this).find('.dsgt-list-group-desc').text().toLowerCase() || '';
            
            if (searchText.includes(value) || nameText.includes(value) || descText.includes(value)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
},

/**
 * Generate a list group item dynamically
 * @param {Object} config - Item configuration
 * @param {string} containerSelector - Container selector
 */
generateDSGTListGroupItem(config, containerSelector = '.dsgt-modern-list-group') {
    const {
        type = 'default', // default, icon, badge, avatar, checkbox, switch, actions
        title = 'Item Title',
        description = '',
        meta = '',
        icon = null,
        iconColor = 'primary', // primary, success, warning, danger, info
        badge = null,
        badgeColor = 'accent',
        avatar = null,
        avatarSize = 'md', // sm, md
        checked = false,
        hasActions = false,
        clickable = false,
        active = false,
        colorVariant = null, // success, warning, danger, info
        customClass = ''
    } = config;

    // Build classes
    let classes = 'dsgt-list-group-item';
    if (type !== 'default') classes += ` dsgt-list-group-item-with-${type}`;
    if (active) classes += ' active';
    if (clickable) classes += ' dsgt-list-group-item-clickable';
    if (colorVariant) classes += ` dsgt-list-group-item-${colorVariant}`;
    if (customClass) classes += ` ${customClass}`;

    let html = `<li class="${classes}"`;
    if (config.dataSearch) html += ` data-search="${config.dataSearch}"`;
    html += '>';

    // Checkbox
    if (type === 'checkbox') {
        html += `<input type="checkbox" class="dsgt-list-group-checkbox" ${checked ? 'checked' : ''}>`;
    }

    // Icon
    if (icon && type === 'icon') {
        html += `<div class="dsgt-list-group-icon dsgt-list-group-icon-${iconColor}">`;
        html += `<i class="${icon}"></i></div>`;
    }

    // Avatar
    if (avatar && type === 'avatar') {
        const sizeClass = avatarSize === 'sm' ? ' dsgt-list-group-avatar-sm' : '';
        html += `<img src="${avatar}" class="dsgt-list-group-avatar${sizeClass}" alt="${title}">`;
    }

    // Content
    html += '<div class="dsgt-list-group-content">';
    html += `<div class="dsgt-list-group-title">${title}</div>`;
    if (description) html += `<p class="dsgt-list-group-desc">${description}</p>`;
    if (meta) html += `<p class="dsgt-list-group-meta">${meta}</p>`;
    html += '</div>';

    // Badge
    if (badge && type === 'badge') {
        html += `<span class="dsgt-list-group-badge" style="background: var(--${badgeColor}); color: white;">${badge}</span>`;
    }

    // Switch
    if (type === 'switch') {
        html += '<label class="dsgt-metro-switch">';
        html += `<input type="checkbox" ${checked ? 'checked' : ''}>`;
        html += '<span class="dsgt-metro-switch-slider"></span>';
        html += '</label>';
    }

    // Actions
    if (hasActions) {
        html += '<div class="dsgt-list-group-actions">';
        html += '<button class="dsgt-list-group-action-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>';
        html += '<button class="dsgt-list-group-action-btn danger" title="Delete"><i class="fa-solid fa-trash"></i></button>';
        html += '</div>';
    }

    html += '</li>';

    // Append to container
    const $container = $(containerSelector);
    if ($container.length) {
        $container.append(html);
    }

    return html;
},

/**
 * Clear all items from list group
 * @param {string} containerSelector - Container selector
 */
clearDSGTListGroupItems(containerSelector = '.dsgt-modern-list-group') {
    const $container = $(containerSelector);
    if ($container.length) {
        $container.find('.dsgt-list-group-item').remove();
    }
},

/**
 * DSGT METRO TEMPLATE - MODALS COMPONENT
 * Reusable modal functions with dynamic configuration
 */

/**
 * Initialize DSGT Modals component
 * Sets up event handlers for backdrop clicks, escape key, and form validation
 */
initModals() {
    // Close on backdrop click
    $(document).on('click', '.dsgt-custom-modal', function(e) {
        if (e.target === this) {
            MetroAdmin.handleDSGTModalBackdropClick($(this));
        }
    });

    // Close on Escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            MetroAdmin.handleDSGTModalEscape();
        }
    });

    // Form validation demo
    $(document).on('click', '#form-modal .btn-primary', function() {
        MetroAdmin.handleDSGTModalFormValidation();
    });

    console.log('✅ DSGT Modals component initialized');
},

/**
 * Open a modal by ID
 * @param {string} modalId - The modal element ID
 */
openDSGTModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
},

/**
 * Close a modal by ID
 * @param {string} modalId - The modal element ID
 */
closeDSGTModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('show');
        
        // Check if any modals are still open
        const openModals = document.querySelectorAll('.dsgt-custom-modal.show');
        if (openModals.length === 0) {
            document.body.style.overflow = '';
        }
    }
},

/**
 * Close all open modals
 */
closeAllDSGTModals() {
    document.querySelectorAll('.dsgt-custom-modal.show').forEach(modal => {
        modal.classList.remove('show');
    });
    document.body.style.overflow = '';
},

/**
 * Handle backdrop click based on dismissible attribute
 * @param {jQuery} $modal - The modal jQuery object
 */
handleDSGTModalBackdropClick($modal) {
    const isDismissible = $modal.attr('data-dismissible');
    if (isDismissible === 'false') {
        // Modal is locked - cannot close by clicking backdrop
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showToast('Please use the close button to dismiss this modal', 'warning');
        }
    } else {
        // Modal is dismissible (default behavior)
        MetroAdmin.closeDSGTModal($modal.attr('id'));
    }
},

/**
 * Handle Escape key press
 * Checks for non-dismissible modals before closing
 */
handleDSGTModalEscape() {
    const openModals = document.querySelectorAll('.dsgt-custom-modal.show');
    let hasNonDismissible = false;
    
    openModals.forEach(modal => {
        if ($(modal).attr('data-dismissible') === 'false') {
            hasNonDismissible = true;
        }
    });
    
    if (!hasNonDismissible) {
        MetroAdmin.closeAllDSGTModals();
    } else {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showToast('Please use the close button to dismiss this modal', 'warning');
        }
    }
},

/**
 * Handle modal form validation
 * Validates all inputs in the form modal
 */
handleDSGTModalFormValidation() {
    const inputs = $('#form-modal .dsgt-modal-form-input');
    let filled = true;
    
    inputs.each(function() {
        if (!$(this).val()) {
            filled = false;
            $(this).css('border-color', 'var(--danger)');
            setTimeout(() => {
                $(this).css('border-color', '');
            }, 2000);
        }
    });
    
    if (filled) {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showToast('Registration successful!', 'success');
        }
        MetroAdmin.closeDSGTModal('form-modal');
    }
},

/**
 * Handle agreement checkbox change in required form modal
 */
handleDSGTModalAgreementChange() {
    const isChecked = $('#agreement-checkbox').is(':checked');
    
    if (isChecked) {
        $('#required-form-close').prop('disabled', false).css({ 'opacity': '1', 'cursor': 'pointer' });
        $('#required-form-cancel').prop('disabled', false).css({ 'opacity': '1', 'cursor': 'pointer' });
        $('#required-form-accept').prop('disabled', false).css({ 'opacity': '1', 'cursor': 'pointer' });
        $('#agreement-label').css('border-color', 'var(--success)');
    } else {
        $('#required-form-close').prop('disabled', true).css({ 'opacity': '0.5', 'cursor': 'not-allowed' });
        $('#required-form-cancel').prop('disabled', true).css({ 'opacity': '0.5', 'cursor': 'not-allowed' });
        $('#required-form-accept').prop('disabled', true).css({ 'opacity': '0.5', 'cursor': 'not-allowed' });
        $('#agreement-label').css('border-color', 'var(--border-color)');
    }
},

/**
 * Handle required form close attempt
 * Shows warning if agreement not checked
 */
handleDSGTModalRequiredFormClose() {
    if (!$('#agreement-checkbox').is(':checked')) {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showToast('Please agree to the terms before closing', 'warning');
        }
        // Shake animation on checkbox
        $('#agreement-label').css('animation', 'dsgt-modals-shake 0.5s ease');
        setTimeout(() => {
            $('#agreement-label').css('animation', '');
        }, 500);
    } else {
        MetroAdmin.closeDSGTModal('required-form-modal');
    }
},

/**
 * Handle agreement accept action
 */
handleDSGTModalAgreementAccept() {
    if ($('#agreement-checkbox').is(':checked')) {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showToast('Agreement accepted! You can now continue.', 'success');
        }
        MetroAdmin.closeDSGTModal('required-form-modal');
        // Reset form
        setTimeout(() => {
            $('#agreement-checkbox').prop('checked', false);
            MetroAdmin.handleDSGTModalAgreementChange();
        }, 300);
    }
},

/**
 * Generate a modal dynamically
 * @param {Object} config - Modal configuration
 * @returns {string} Modal HTML
 */
generateDSGTModal(config) {
    const {
        id = 'dynamic-modal',
        title = 'Modal Title',
        content = 'Modal content goes here',
        size = 'md', // sm, md, lg, xl, full
        type = 'default', // default, success, warning, danger, info
        animation = 'slideUp', // slideUp, zoom, slideLeft, slideRight, flip
        dismissible = true,
        showCloseButton = true,
        showFooter = true,
        cancelText = 'Cancel',
        confirmText = 'OK',
        onConfirm = null
    } = config;

    // Build size class
    let sizeClass = 'dsgt-modal-dialog-md';
    if (size === 'sm') sizeClass = 'dsgt-modal-dialog-sm';
    else if (size === 'lg') sizeClass = 'dsgt-modal-dialog-lg';
    else if (size === 'xl') sizeClass = 'dsgt-modal-dialog-xl';
    else if (size === 'full') sizeClass = 'dsgt-modal-dialog-full';

    // Build animation class
    let animClass = '';
    if (animation === 'zoom') animClass = 'dsgt-modal-dialog-zoom';
    else if (animation === 'slideLeft') animClass = 'dsgt-modal-dialog-slide-left';
    else if (animation === 'slideRight') animClass = 'dsgt-modal-dialog-slide-right';
    else if (animation === 'flip') animClass = 'dsgt-modal-dialog-flip';

    // Build dismissible attribute
    const dismissibleAttr = dismissible ? '' : 'data-dismissible="false"';

    // Build icon header for type modals
    let headerContent = '';
    if (type !== 'default') {
        headerContent = `
            <div class="dsgt-modal-icon-header">
                <div class="dsgt-modal-icon dsgt-modal-icon-${type}">
                    <i class="fa-solid fa-${type === 'success' ? 'check' : type === 'warning' ? 'exclamation-triangle' : type === 'danger' ? 'trash' : 'info'}"></i>
                </div>
                <h3 class="dsgt-modal-title">${title}</h3>
            </div>
        `;
    } else {
        headerContent = `
            <div class="dsgt-modal-header">
                <h3 class="dsgt-modal-title">${title}</h3>
                ${showCloseButton ? `<button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('${id}')"><i class="fa-solid fa-times"></i></button>` : ''}
            </div>
        `;
    }

    // Build HTML
    let html = `
        <div id="${id}" class="dsgt-custom-modal" ${dismissibleAttr}>
            <div class="dsgt-modal-dialog ${sizeClass} ${animClass}">
                ${headerContent}
                <div class="dsgt-modal-body">
                    ${content}
                </div>
                ${showFooter ? `
                    <div class="dsgt-modal-footer">
                        <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('${id}')">${cancelText}</button>
                        <button class="btn btn-primary" onclick="MetroAdmin.closeDSGTModal('${id}')">${confirmText}</button>
                    </div>
                ` : ''}
            </div>
        </div>
    `;

    // Append to body
    $('body').append(html);

    return html;
},

/**
 * DSGT METRO TEMPLATE - NOTIFICATIONS COMPONENT
 * Reusable notification functions with dynamic configuration
 */

/**
 * Initialize DSGT Notifications component
 * Sets up event handlers for preview close buttons
 */
initNotifications() {
    // Preview close button functionality
    $(document).on('click', '.dsgt-notif-preview-close', function() {
        MetroAdmin.handleDSGTNotifPreviewClose($(this));
    });

    console.log('✅ DSGT Notifications component initialized');
},

/**
 * Handle notification preview close button click
 * @param {jQuery} $closeBtn - The close button jQuery object
 */
handleDSGTNotifPreviewClose($closeBtn) {
    const preview = $closeBtn.closest('.dsgt-notif-preview');
    preview.css({
        'opacity': '0',
        'transform': 'translateX(20px)',
        'transition': 'all 0.3s ease'
    });
    setTimeout(() => {
        preview.hide();
    }, 300);
},

/**
 * Show a basic toast notification
 * @param {string} message - Toast message
 */
showDSGTBasicToast(message = 'This is a basic notification!') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'info');
    }
},

/**
 * Show an info toast notification
 * @param {string} message - Toast message
 */
showDSGTInfoToast(message = 'Here is some useful information for you.') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'info');
    }
},

/**
 * Show a success toast notification
 * @param {string} message - Toast message
 */
showDSGTSuccessToast(message = 'Your action was completed successfully!') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'success');
    }
},

/**
 * Show a warning toast notification
 * @param {string} message - Toast message
 */
showDSGTWarningToast(message = 'Please review carefully before proceeding.') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'warning');
    }
},

/**
 * Show an error toast notification
 * @param {string} message - Toast message
 */
showDSGTErrorToast(message = 'Something went wrong. Please try again.') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'error');
    }
},

/**
 * Show a toast at specific position
 * @param {string} position - Toast position (top-left, top-center, top-right, bottom-left, bottom-center, bottom-right)
 * @param {string} message - Toast message
 */
showDSGTToastAt(position, message = null) {
    if (!message) {
        message = `Toast positioned at ${position}`;
    }
    if (typeof showToast !== 'undefined') {
        showToast(message, 'info', position);
    }
},

/**
 * Show a short duration toast (2 seconds)
 * @param {string} message - Toast message
 */
showDSGTShortToast(message = 'This toast disappears in 2 seconds') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'info', 'top-right');
    }
},

/**
 * Show a medium duration toast (5 seconds)
 * @param {string} message - Toast message
 */
showDSGTMediumToast(message = 'This toast disappears in 5 seconds') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'success', 'top-right');
    }
},

/**
 * Show a long duration toast (10 seconds)
 * @param {string} message - Toast message
 */
showDSGTLongToast(message = 'This toast disappears in 10 seconds') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'warning', 'top-right');
    }
},

/**
 * Show a persistent toast (no auto-dismiss)
 * @param {string} message - Toast message
 */
showDSGTPersistentToast(message = 'This toast stays until you close it') {
    if (typeof showToast !== 'undefined') {
        showToast(message, 'error', 'top-right');
    }
},

/**
 * Show an action toast with SweetAlert2
 * @param {Object} config - Toast configuration
 */
showDSGTActionToast(config = {}) {
    const {
        title = 'System Update',
        text = 'New update available. Would you like to install it now?',
        confirmText = 'Install Now',
        cancelText = 'Later',
        confirmColor = '#0078d4',
        cancelColor = '#8a8a8a',
        onConfirm = null,
        onCancel = null
    } = config;

    if (typeof Swal !== 'undefined') {
        Swal.fire({
            title: title,
            text: text,
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: confirmText,
            cancelButtonText: cancelText,
            confirmButtonColor: confirmColor,
            cancelButtonColor: cancelColor
        }).then((result) => {
            if (result.isConfirmed) {
                if (onConfirm) {
                    onConfirm();
                } else {
                    MetroAdmin.showDSGTSuccessToast('Action confirmed!');
                }
            } else {
                if (onCancel) {
                    onCancel();
                } else {
                    MetroAdmin.showDSGTWarningToast('Action cancelled');
                }
            }
        });
    }
},

/**
 * Show an HTML content toast with SweetAlert2
 * @param {Object} config - HTML toast configuration
 */
showDSGTHTMLToast(config = {}) {
    const {
        title = '<strong>Rich Content</strong>',
        html = 'This notification contains <em>HTML</em> content with <a href="#">a link</a>',
        confirmText = 'OK',
        confirmColor = '#0078d4'
    } = config;

    if (typeof Swal !== 'undefined') {
        Swal.fire({
            title: title,
            html: html,
            icon: 'info',
            confirmButtonText: confirmText,
            confirmButtonColor: confirmColor
        });
    }
},

/**
 * Show multiple toasts in sequence
 * @param {Array} messages - Array of toast messages with type
 */
showDSGTMultipleToasts(messages = null) {
    if (!messages) {
        messages = [
            { message: 'First notification', type: 'info' },
            { message: 'Second notification', type: 'success' },
            { message: 'Third notification', type: 'warning' }
        ];
    }

    if (typeof showToast !== 'undefined') {
        messages.forEach((item, index) => {
            setTimeout(() => {
                showToast(item.message, item.type, 'top-right');
            }, index * 500);
        });
    }
},

/**
 * Generate a notification preview dynamically
 * @param {Object} config - Preview configuration
 * @param {string} containerSelector - Container selector
 */
generateDSGTNotifPreview(config, containerSelector = '.dsgt-notif-preview-container') {
    const {
        type = 'info', // info, success, warning, error
        title = 'Notification Title',
        message = 'Notification message goes here',
        icon = null
    } = config;

    // Set icon based on type
    let iconClass = icon;
    let bgColor;
    let colorVar;

    switch(type) {
        case 'success':
            iconClass = iconClass || 'fa-solid fa-check-circle';
            bgColor = 'rgba(22, 198, 12, 0.1)';
            colorVar = 'var(--success)';
            break;
        case 'warning':
            iconClass = iconClass || 'fa-solid fa-exclamation-triangle';
            bgColor = 'rgba(255, 185, 0, 0.1)';
            colorVar = 'var(--warning)';
            break;
        case 'error':
            iconClass = iconClass || 'fa-solid fa-times-circle';
            bgColor = 'rgba(232, 17, 35, 0.1)';
            colorVar = 'var(--danger)';
            break;
        default:
            iconClass = iconClass || 'fa-solid fa-info-circle';
            bgColor = 'rgba(0, 188, 242, 0.1)';
            colorVar = 'var(--info)';
    }

    const html = `
        <div class="dsgt-notif-preview">
            <div class="dsgt-notif-preview-icon" style="background: ${bgColor}; color: ${colorVar};">
                <i class="${iconClass}"></i>
            </div>
            <div class="dsgt-notif-preview-content">
                <h4 class="dsgt-notif-preview-title">${title}</h4>
                <p class="dsgt-notif-preview-message">${message}</p>
            </div>
            <button class="dsgt-notif-preview-close">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
    `;

    // Append to container
    const $container = $(containerSelector);
    if ($container.length) {
        $container.append(html);
    }

    return html;
},

/**
 * Initialize DSGT Offcanvas component
 * Sets up event handlers for offcanvas interactions
 */
initOffcanvas() {
    // Close offcanvas when backdrop is clicked
    $(document).on('click', '.dsgt-offcanvas-backdrop', function() {
        MetroAdmin.closeAllDSGTOffcanvas();
    });

    // Close offcanvas close buttons
    $(document).on('click', '.dsgt-offcanvas-close', function() {
        const offcanvasId = $(this).closest('.dsgt-offcanvas').attr('id');
        if (offcanvasId) {
            MetroAdmin.closeDSGTOffcanvas(offcanvasId);
        }
    });

    // Filter chip toggle
    $(document).on('click', '.dsgt-offcanvas-filter-chip', function() {
        $(this).toggleClass('active');
    });

    // Menu item click
    $(document).on('click', '.dsgt-offcanvas-menu-item', function() {
        const $this = $(this);
        const $parent = $this.closest('.dsgt-offcanvas-body');
        $parent.find('.dsgt-offcanvas-menu-item').removeClass('active');
        $this.addClass('active');
    });

    // Cart item remove
    $(document).on('click', '.dsgt-offcanvas-cart-item-remove', function() {
        $(this).closest('.dsgt-offcanvas-cart-item').fadeOut(300, function() {
            $(this).remove();
        });
    });

    // Close on Escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            MetroAdmin.closeAllDSGTOffcanvas();
        }
    });

    console.log('✅ DSGT Offcanvas component initialized');
},

/**
 * Open an offcanvas panel by ID
 * @param {string} offcanvasId - The offcanvas element ID
 */
openDSGTOffcanvas(offcanvasId) {
    const offcanvas = document.getElementById(offcanvasId);
    const backdrop = document.getElementById('dsgt-offcanvas-backdrop');
    
    if (offcanvas) {
        // Close all other offcanvas first
        MetroAdmin.closeAllDSGTOffcanvas();
        
        // Show backdrop
        if (backdrop) {
            backdrop.classList.add('dsgt-offcanvas-show');
        }
        
        // Show offcanvas
        setTimeout(() => {
            offcanvas.classList.add('dsgt-offcanvas-show');
        }, 10);
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }
},

/**
 * Close an offcanvas panel by ID
 * @param {string} offcanvasId - The offcanvas element ID
 */
closeDSGTOffcanvas(offcanvasId) {
    const offcanvas = document.getElementById(offcanvasId);
    const backdrop = document.getElementById('dsgt-offcanvas-backdrop');
    
    if (offcanvas) {
        offcanvas.classList.remove('dsgt-offcanvas-show');
        
        // Check if any offcanvas is still open
        const openOffcanvas = document.querySelectorAll('.dsgt-offcanvas.dsgt-offcanvas-show');
        if (openOffcanvas.length === 0 && backdrop) {
            backdrop.classList.remove('dsgt-offcanvas-show');
            document.body.style.overflow = '';
        }
    }
},

/**
 * Close all open offcanvas panels
 */
closeAllDSGTOffcanvas() {
    document.querySelectorAll('.dsgt-offcanvas.dsgt-offcanvas-show').forEach(offcanvas => {
        offcanvas.classList.remove('dsgt-offcanvas-show');
    });
    const backdrop = document.getElementById('dsgt-offcanvas-backdrop');
    if (backdrop) {
        backdrop.classList.remove('dsgt-offcanvas-show');
    }
    document.body.style.overflow = '';
},

/**
 * Toggle filter chip active state
 * @param {jQuery} $chip - The filter chip jQuery object
 */
toggleDSGTOffcanvasFilterChip($chip) {
    $chip.toggleClass('active');
},

/**
 * Handle menu item click in offcanvas
 * @param {jQuery} $menuItem - The menu item jQuery object
 */
handleDSGTOffcanvasMenuItemClick($menuItem) {
    const $parent = $menuItem.closest('.dsgt-offcanvas-body');
    $parent.find('.dsgt-offcanvas-menu-item').removeClass('active');
    $menuItem.addClass('active');
},

/**
 * Remove cart item with fade animation
 * @param {jQuery} $removeBtn - The remove button jQuery object
 */
removeDSGTOffcanvasCartItem($removeBtn) {
    $removeBtn.closest('.dsgt-offcanvas-cart-item').fadeOut(300, function() {
        $(this).remove();
    });
},

/**
 * Initialize DSGT Pagination component
 * Sets up event handlers for pagination interactions
 */
initPagination() {
    // Pagination item click
    $(document).on('click', '.dsgt-pagination-item', function() {
        MetroAdmin.handleDSGTPaginationItemClick($(this));
    });

    // Pager button click
    $(document).on('click', '.dsgt-pager-btn', function() {
        MetroAdmin.handleDSGTPagerBtnClick($(this));
    });

    // Load more button
    $(document).on('click', '.dsgt-load-more-btn', function() {
        MetroAdmin.handleDSGTLoadMoreClick($(this));
    });

    console.log('✅ DSGT Pagination component initialized');
},

/**
 * Handle pagination item click
 * @param {jQuery} $item - The pagination item jQuery object
 */
handleDSGTPaginationItemClick($item) {
    if (!$item.hasClass('disabled') && !$item.hasClass('active')) {
        const $pagination = $item.closest('.dsgt-pagination');
        $pagination.find('.dsgt-pagination-item').removeClass('active');
        $item.addClass('active');
    }
},

/**
 * Handle pager button click
 * @param {jQuery} $btn - The pager button jQuery object
 */
handleDSGTPagerBtnClick($btn) {
    if (!$btn.hasClass('disabled')) {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showDSGTSuccessToast('Navigating to next page');
        }
    }
},

/**
 * Handle load more button click with loading animation
 * @param {jQuery} $btn - The load more button jQuery object
 */
handleDSGTLoadMoreClick($btn) {
    const originalHTML = $btn.html();
    $btn.html('<i class="fa-solid fa-spinner fa-spin"></i> Loading...');
    $btn.prop('disabled', true);
    
    setTimeout(() => {
        $btn.html('<i class="fa-solid fa-check"></i> Loaded!');
        setTimeout(() => {
            $btn.html(originalHTML);
            $btn.prop('disabled', false);
        }, 2000);
    }, 1500);
},

/**
 * Generate pagination dynamically
 * @param {Object} config - Pagination configuration
 * @param {string} containerSelector - Container selector
 */
generateDSGTPagination(config, containerSelector) {
    const {
        currentPage = 1,
        totalPages = 10,
        showEllipsis = true,
        size = 'md', // xs, sm, md, lg, xl
        style = '', // rounded, bordered, shadow
        alignment = 'center', // left, center, right
        showPrevNext = true
    } = config;

    let sizeClass = '';
    if (size !== 'md') {
        sizeClass = `dsgt-pagination-${size}`;
    }

    let styleClass = style ? `dsgt-pagination-${style}` : '';
    let alignmentClass = `dsgt-pagination-${alignment}`;

    let html = `<ul class="dsgt-pagination ${sizeClass} ${styleClass} ${alignmentClass}">`;

    // Previous button
    if (showPrevNext) {
        const prevDisabled = currentPage === 1 ? 'disabled' : '';
        html += `<li class="dsgt-pagination-item ${prevDisabled}"><i class="fa-solid fa-chevron-left"></i></li>`;
    }

    // Page numbers
    for (let i = 1; i <= totalPages; i++) {
        if (i === currentPage) {
            html += `<li class="dsgt-pagination-item active">${i}</li>`;
        } else if (showEllipsis && i > 3 && i < totalPages - 2 && Math.abs(i - currentPage) > 2) {
            if (i === 4 || i === totalPages - 3) {
                html += `<li class="dsgt-pagination-ellipsis">...</li>`;
            }
        } else {
            html += `<li class="dsgt-pagination-item">${i}</li>`;
        }
    }

    // Next button
    if (showPrevNext) {
        const nextDisabled = currentPage === totalPages ? 'disabled' : '';
        html += `<li class="dsgt-pagination-item ${nextDisabled}"><i class="fa-solid fa-chevron-right"></i></li>`;
    }

    html += '</ul>';

    // Append to container
    const $container = $(containerSelector);
    if ($container.length) {
        $container.html(html);
    }

    return html;
},

/**
 * Initialize DSGT Placeholders component
 * Sets up placeholder toggle functionality
 */
initPlaceholders() {
    console.log('✅ DSGT Placeholders component initialized');
},

/**
 * Toggle all placeholders animation (pause/resume)
 * @param {string} containerSelector - Optional container selector to limit scope
 */
toggleDSGTAllPlaceholders(containerSelector = 'body') {
    const $container = $(containerSelector);
    const placeholders = $container.find(
        '.dsgt-placeholder, ' +
        '.dsgt-placeholder-card-image, ' +
        '.dsgt-placeholder-card-title, ' +
        '.dsgt-placeholder-card-text, ' +
        '.dsgt-placeholder-table-header, ' +
        '.dsgt-placeholder-table-row, ' +
        '.dsgt-placeholder-list-avatar, ' +
        '.dsgt-placeholder-list-title, ' +
        '.dsgt-placeholder-list-desc, ' +
        '.dsgt-placeholder-profile-avatar, ' +
        '.dsgt-placeholder-profile-name, ' +
        '.dsgt-placeholder-profile-email, ' +
        '.dsgt-placeholder-stat-value, ' +
        '.dsgt-placeholder-stat-label, ' +
        '.dsgt-placeholder-chat-avatar, ' +
        '.dsgt-placeholder-chat-text'
    );
    
    placeholders.each(function() {
        const el = $(this);
        if (el.css('animationPlayState') === 'paused') {
            el.css('animationPlayState', 'running');
        } else {
            el.css('animationPlayState', 'paused');
        }
    });
    
    return placeholders.length;
},

/**
 * Pause all placeholder animations
 * @param {string} containerSelector - Optional container selector
 */
pauseDSGTPlaceholders(containerSelector = 'body') {
    const $container = $(containerSelector);
    const placeholders = $container.find(
        '.dsgt-placeholder, ' +
        '.dsgt-placeholder-card-image, ' +
        '.dsgt-placeholder-card-title, ' +
        '.dsgt-placeholder-card-text, ' +
        '.dsgt-placeholder-table-header, ' +
        '.dsgt-placeholder-table-row, ' +
        '.dsgt-placeholder-list-avatar, ' +
        '.dsgt-placeholder-list-title, ' +
        '.dsgt-placeholder-list-desc, ' +
        '.dsgt-placeholder-profile-avatar, ' +
        '.dsgt-placeholder-profile-name, ' +
        '.dsgt-placeholder-profile-email, ' +
        '.dsgt-placeholder-stat-value, ' +
        '.dsgt-placeholder-stat-label, ' +
        '.dsgt-placeholder-chat-avatar, ' +
        '.dsgt-placeholder-chat-text'
    );
    
    placeholders.css('animationPlayState', 'paused');
    return placeholders.length;
},

/**
 * Resume all placeholder animations
 * @param {string} containerSelector - Optional container selector
 */
resumeDSGTPlaceholders(containerSelector = 'body') {
    const $container = $(containerSelector);
    const placeholders = $container.find(
        '.dsgt-placeholder, ' +
        '.dsgt-placeholder-card-image, ' +
        '.dsgt-placeholder-card-title, ' +
        '.dsgt-placeholder-card-text, ' +
        '.dsgt-placeholder-table-header, ' +
        '.dsgt-placeholder-table-row, ' +
        '.dsgt-placeholder-list-avatar, ' +
        '.dsgt-placeholder-list-title, ' +
        '.dsgt-placeholder-list-desc, ' +
        '.dsgt-placeholder-profile-avatar, ' +
        '.dsgt-placeholder-profile-name, ' +
        '.dsgt-placeholder-profile-email, ' +
        '.dsgt-placeholder-stat-value, ' +
        '.dsgt-placeholder-stat-label, ' +
        '.dsgt-placeholder-chat-avatar, ' +
        '.dsgt-placeholder-chat-text'
    );
    
    placeholders.css('animationPlayState', 'running');
    return placeholders.length;
},

/**
 * Generate a placeholder element dynamically
 * @param {Object} config - Placeholder configuration
 * @returns {string} HTML string
 */
generateDSGTPlaceholder(config = {}) {
    const {
        size = 'md', // xs, sm, md, lg, xl
        width = '100', // 25, 50, 75, 100, auto
        shape = '', // circle, rounded
        customWidth = null, // Custom width in px or %
        customHeight = null // Custom height in px
    } = config;

    let classes = 'dsgt-placeholder';
    classes += ` dsgt-placeholder-${size}`;
    
    if (width !== 'auto') {
        classes += ` dsgt-placeholder-w${width}`;
    } else {
        classes += ' dsgt-placeholder-w-auto';
    }
    
    if (shape) {
        classes += ` dsgt-placeholder-${shape}`;
    }

    let style = '';
    if (customWidth) {
        style += `width: ${customWidth}; `;
    }
    if (customHeight) {
        style += `height: ${customHeight}; `;
    }

    const styleAttr = style ? ` style="${style}"` : '';
    
    return `<div class="${classes}"${styleAttr}></div>`;
},

/**
 * Generate a card placeholder skeleton
 * @param {Object} config - Card placeholder configuration
 * @returns {string} HTML string
 */
generateDSGTCardPlaceholder(config = {}) {
    const {
        showImage = true,
        titleWidth = '75%',
        textLines = 3,
        lastLineWidth = '85%'
    } = config;

    let html = '<div class="dsgt-placeholder-card">';
    
    if (showImage) {
        html += '<div class="dsgt-placeholder-card-image"></div>';
    }
    
    html += `<div class="dsgt-placeholder-card-title" style="width: ${titleWidth};"></div>`;
    
    for (let i = 0; i < textLines; i++) {
        const width = i === textLines - 1 ? lastLineWidth : '100%';
        html += `<div class="dsgt-placeholder-card-text" style="width: ${width};"></div>`;
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate a list placeholder skeleton
 * @param {Object} config - List placeholder configuration
 * @returns {string} HTML string
 */
generateDSGTListPlaceholder(config = {}) {
    const {
        items = 3,
        showAvatar = true,
        titleWidth = '60%',
        descWidth = '80%'
    } = config;

    let html = '';
    
    for (let i = 0; i < items; i++) {
        html += '<div class="dsgt-placeholder-list-item">';
        
        if (showAvatar) {
            html += '<div class="dsgt-placeholder-list-avatar"></div>';
        }
        
        html += '<div class="dsgt-placeholder-list-content">';
        html += `<div class="dsgt-placeholder-list-title" style="width: ${titleWidth};"></div>`;
        html += `<div class="dsgt-placeholder-list-desc" style="width: ${descWidth};"></div>`;
        html += '</div>';
        
        html += '</div>';
    }
    
    return html;
},

/**
 * Generate a profile placeholder skeleton
 * @returns {string} HTML string
 */
generateDSGTProfilePlaceholder() {
    return `
        <div class="dsgt-placeholder-profile">
            <div class="dsgt-placeholder-profile-avatar"></div>
            <div class="dsgt-placeholder-profile-name"></div>
            <div class="dsgt-placeholder-profile-email"></div>
        </div>
    `;
},

/**
 * Generate a stats placeholder skeleton
 * @param {Object} config - Stats placeholder configuration
 * @returns {string} HTML string
 */
generateDSGTStatsPlaceholder(config = {}) {
    const {
        stats = 3
    } = config;

    let html = '<div class="dsgt-placeholder-stats">';
    
    for (let i = 0; i < stats; i++) {
        html += '<div class="dsgt-placeholder-stat-item">';
        html += '<div class="dsgt-placeholder-stat-value"></div>';
        html += '<div class="dsgt-placeholder-stat-label"></div>';
        html += '</div>';
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate a chat placeholder skeleton
 * @param {Object} config - Chat placeholder configuration
 * @returns {string} HTML string
 */
generateDSGTChatPlaceholder(config = {}) {
    const {
        messages = [
            { type: 'received', lines: 2 },
            { type: 'sent', lines: 3 },
            { type: 'received', lines: 2 }
        ]
    } = config;

    let html = '<div class="dsgt-placeholder-chat">';
    
    messages.forEach(msg => {
        const isSent = msg.type === 'sent';
        html += `<div class="dsgt-placeholder-chat-message${isSent ? ' dsgt-placeholder-chat-sent' : ''}">`;
        html += '<div class="dsgt-placeholder-chat-avatar"></div>';
        html += `<div class="dsgt-placeholder-chat-bubble${isSent ? ' dsgt-placeholder-chat-sent' : ''}">`;
        
        for (let i = 0; i < msg.lines; i++) {
            html += '<div class="dsgt-placeholder-chat-text"></div>';
        }
        
        html += '</div>';
        html += '</div>';
    });
    
    html += '</div>';
    
    return html;
},

/**
 * Initialize DSGT Popovers component
 * Sets up event handlers for popover interactions
 */
initPopovers() {
    // Close popover on ANY interaction
    const eventsToClose = [
        'scroll',         // Scroll page
        'resize',         // Resize window
        'wheel',          // Mouse wheel
        'touchstart',     // Touch screen
    ];
    
    eventsToClose.forEach(event => {
        window.addEventListener(event, () => MetroAdmin.hideAllDSGTPopovers(), { passive: true });
    });
    
    // Close on outside click
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dsgt-popovers-trigger, .dsgt-custom-popover').length) {
            MetroAdmin.hideAllDSGTPopovers();
        }
    });
    
    // Close on Escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') MetroAdmin.hideAllDSGTPopovers();
    });
    
    console.log('✅ DSGT Popovers component initialized');
},

/**
 * Open a DSGT popover with smart auto-positioning
 * @param {string} popoverId - The ID of the popover element
 * @param {HTMLElement} triggerElement - The trigger button element
 */
openDSGTPopover(popoverId, triggerElement) {
    const popover = document.getElementById(popoverId);
    const trigger = triggerElement || event.target.closest('.dsgt-popovers-trigger');
    
    if (!popover || !trigger) return;
    
    const isShowing = popover.classList.contains('dsgt-custom-popover-show');
    
    // Hide all popovers first
    this.hideAllDSGTPopovers();
    
    if (!isShowing) {
        // Move to body for viewport-relative positioning
        document.body.appendChild(popover);
        popover.style.position = 'fixed';
        popover.style.zIndex = '99999';
        
        // Calculate and set position
        this.positionDSGTPopover(popover, trigger);
        
        // Show with animation
        requestAnimationFrame(() => {
            popover.classList.add('dsgt-custom-popover-show');
            trigger.classList.add('active');
        });
    }
},

/**
 * Position popover with smart auto-positioning
 * @param {HTMLElement} popover - The popover element
 * @param {HTMLElement} trigger - The trigger element
 */
positionDSGTPopover(popover, trigger) {
    const triggerRect = trigger.getBoundingClientRect();
    
    // Measure popover dimensions (temporarily show)
    popover.style.visibility = 'hidden';
    popover.style.display = 'block';
    popover.style.opacity = '0';
    popover.classList.add('dsgt-custom-popover-show');
    
    const popoverW = popover.offsetWidth;
    const popoverH = popover.offsetHeight;
    
    popover.classList.remove('dsgt-custom-popover-show');
    popover.style.visibility = '';
    popover.style.display = '';
    popover.style.opacity = '';
    
    // Get desired position from class
    const positionClass = Array.from(popover.classList).find(c => 
        ['dsgt-popover-top', 'dsgt-popover-bottom', 'dsgt-popover-left', 'dsgt-popover-right'].includes(c)
    );
    const desiredPosition = positionClass ? positionClass.replace('dsgt-popover-', '') : 'bottom';
    
    const GAP = 12;
    let position = desiredPosition;
    
    // Try desired position first
    const positions = this.calculateDSGTPopoverPositions(triggerRect, popoverW, popoverH, GAP);
    
    // Check if desired position fits in viewport
    if (this.fitsDSGTPopoverInViewport(positions[desiredPosition], popoverW, popoverH)) {
        position = desiredPosition;
    } else {
        // Find best alternative position
        position = this.findBestDSGTPopoverPosition(positions, popoverW, popoverH);
        
        // Update arrow class to match new position
        popover.classList.remove(`dsgt-popover-${desiredPosition}`);
        popover.classList.add(`dsgt-popover-${position}`);
    }
    
    let top = positions[position].top;
    let left = positions[position].left;
    
    // Clamp to viewport
    left = Math.max(12, Math.min(left, window.innerWidth - popoverW - 12));
    top = Math.max(12, Math.min(top, window.innerHeight - popoverH - 12));
    
    popover.style.top = `${top}px`;
    popover.style.left = `${left}px`;
    popover.style.bottom = 'auto';
    popover.style.right = 'auto';
},

/**
 * Calculate all possible popover positions
 * @param {DOMRect} triggerRect - The trigger element's bounding rectangle
 * @param {number} popoverW - Popover width
 * @param {number} popoverH - Popover height
 * @param {number} GAP - Gap between trigger and popover
 * @returns {Object} Position coordinates for all directions
 */
calculateDSGTPopoverPositions(triggerRect, popoverW, popoverH, GAP) {
    return {
        top: {
            top: triggerRect.top - popoverH - GAP,
            left: triggerRect.left + (triggerRect.width / 2) - (popoverW / 2)
        },
        bottom: {
            top: triggerRect.bottom + GAP,
            left: triggerRect.left + (triggerRect.width / 2) - (popoverW / 2)
        },
        left: {
            top: triggerRect.top + (triggerRect.height / 2) - (popoverH / 2),
            left: triggerRect.left - popoverW - GAP
        },
        right: {
            top: triggerRect.top + (triggerRect.height / 2) - (popoverH / 2),
            left: triggerRect.right + GAP
        }
    };
},

/**
 * Check if position fits in viewport
 * @param {Object} pos - Position coordinates
 * @param {number} popoverW - Popover width
 * @param {number} popoverH - Popover height
 * @returns {boolean} Whether position fits in viewport
 */
fitsDSGTPopoverInViewport(pos, popoverW, popoverH) {
    const margin = 12;
    return (
        pos.top >= margin &&
        pos.left >= margin &&
        pos.top + popoverH <= window.innerHeight - margin &&
        pos.left + popoverW <= window.innerWidth - margin
    );
},

/**
 * Find best popover position based on viewport fit
 * @param {Object} positions - All possible positions
 * @param {number} popoverW - Popover width
 * @param {number} popoverH - Popover height
 * @returns {string} Best position (top/bottom/left/right)
 */
findBestDSGTPopoverPosition(positions, popoverW, popoverH) {
    // Priority order: bottom > top > right > left
    const priority = ['bottom', 'top', 'right', 'left'];
    
    for (const pos of priority) {
        if (this.fitsDSGTPopoverInViewport(positions[pos], popoverW, popoverH)) {
            return pos;
        }
    }
    
    // If none fit perfectly, return the one with most visible area
    return 'bottom'; // Default fallback
},

/**
 * Hide all DSGT popovers
 */
hideAllDSGTPopovers() {
    document.querySelectorAll('.dsgt-custom-popover.dsgt-custom-popover-show').forEach(popover => {
        popover.classList.remove('dsgt-custom-popover-show');
    });
    document.querySelectorAll('.dsgt-popovers-trigger.active').forEach(trigger => {
        trigger.classList.remove('active');
    });
},

/**
 * Hide a specific DSGT popover
 * @param {string} popoverId - The ID of the popover to hide
 */
hideDSGTPopover(popoverId) {
    const popover = document.getElementById(popoverId);
    if (popover) {
        popover.classList.remove('dsgt-custom-popover-show');
    }
    
    // Remove active state from all triggers
    document.querySelectorAll('.dsgt-popovers-trigger.active').forEach(trigger => {
        trigger.classList.remove('active');
    });
},

/**
 * Toggle a specific DSGT popover
 * @param {string} popoverId - The ID of the popover to toggle
 * @param {HTMLElement} triggerElement - The trigger button element
 */
toggleDSGTPopover(popoverId, triggerElement) {
    const popover = document.getElementById(popoverId);
    const trigger = triggerElement || event.target.closest('.dsgt-popovers-trigger');
    
    if (!popover || !trigger) return;
    
    if (popover.classList.contains('dsgt-custom-popover-show')) {
        this.hideDSGTPopover(popoverId);
    } else {
        this.openDSGTPopover(popoverId, trigger);
    }
},

/**
 * Initialize DSGT Progress component
 * Sets up progress animations and event handlers
 */
initProgress() {
    // Animate circular progress on load
    this.animateDSGTCircularProgress();
    
    // Animate progress bars on load
    setTimeout(() => {
        this.animateAllDSGTProgress();
    }, 500);
    
    console.log('✅ DSGT Progress component initialized');
},

/**
 * Animate all DSGT progress bars from 0 to target width
 * @param {string} containerSelector - Optional container selector to limit scope
 */
animateAllDSGTProgress(containerSelector = 'body') {
    const $container = $(containerSelector);
    const progressBars = $container.find('.dsgt-progress-bar-fill');
    
    progressBars.each(function() {
        const bar = $(this);
        const targetWidth = bar.css('width');
        const targetPercent = bar.attr('style').match(/width:\s*(\d+)%/);
        
        if (targetPercent) {
            bar.css('width', '0%');
            
            setTimeout(() => {
                bar.css('width', targetPercent[1] + '%');
            }, 100);
        }
    });
    
    return progressBars.length;
},

/**
 * Animate DSGT circular progress indicators
 * @param {string} containerSelector - Optional container selector
 */
animateDSGTCircularProgress(containerSelector = 'body') {
    const $container = $(containerSelector);
    const circularProgress = $container.find('.dsgt-circular-progress');
    
    circularProgress.each(function() {
        const cp = $(this);
        const progress = parseInt(cp.attr('data-progress'));
        const fill = cp.find('.dsgt-circular-progress-fill');
        
        if (fill.length && progress) {
            const circumference = parseFloat(fill.attr('stroke-dasharray'));
            const offset = circumference - (circumference * progress / 100);
            
            fill.css('stroke-dashoffset', offset);
        }
    });
    
    return circularProgress.length;
},

/**
 * Set DSGT progress bar to specific value with animation
 * @param {string} selector - Progress bar container selector
 * @param {number} percent - Progress percentage (0-100)
 * @param {boolean} animate - Whether to animate the change
 */
setDSGTProgress(selector, percent, animate = true) {
    const $container = $(selector);
    const $fill = $container.find('.dsgt-progress-bar-fill');
    
    if ($fill.length) {
        percent = Math.max(0, Math.min(100, percent));
        
        if (animate) {
            $fill.css('width', percent + '%');
        } else {
            $fill.css('transition', 'none').css('width', percent + '%');
            setTimeout(() => {
                $fill.css('transition', '');
            }, 50);
        }
        
        // Update label if exists
        const $label = $container.find('.dsgt-progress-label-value');
        if ($label.length) {
            $label.text(percent + '%');
        }
        
        return true;
    }
    
    return false;
},

/**
 * Generate DSGT progress bar HTML dynamically
 * @param {Object} config - Progress bar configuration
 * @returns {string} HTML string
 */
generateDSGTProgressBar(config = {}) {
    const {
        percent = 0,
        size = 'md', // xs, sm, md, lg, xl
        color = 'primary', // primary, success, warning, danger, info
        showLabel = true,
        labelText = 'Progress',
        striped = false,
        animated = false,
        gradient = false
    } = config;
    
    let containerClasses = 'dsgt-progress-bar-container';
    containerClasses += ` dsgt-progress-${size}`;
    containerClasses += ` dsgt-progress-${color}`;
    
    if (striped) containerClasses += ' dsgt-progress-striped';
    if (animated) containerClasses += ' dsgt-progress-animated';
    if (gradient) containerClasses += ' dsgt-progress-gradient';
    
    let html = '';
    
    if (showLabel) {
        html += '<div class="dsgt-progress-with-label">';
        html += '  <div class="dsgt-progress-label">';
        html += `    <span class="dsgt-progress-label-text">${labelText}</span>`;
        html += `    <span class="dsgt-progress-label-value">${percent}%</span>`;
        html += '  </div>';
    }
    
    html += `  <div class="${containerClasses}">`;
    html += `    <div class="dsgt-progress-bar-fill" style="width: ${percent}%;"></div>`;
    html += '  </div>';
    
    if (showLabel) {
        html += '</div>';
    }
    
    return html;
},

/**
 * Generate DSGT circular progress HTML dynamically
 * @param {Object} config - Circular progress configuration
 * @returns {string} HTML string
 */
generateDSGTCircularProgress(config = {}) {
    const {
        percent = 0,
        size = 'md', // xs, sm, md, lg, xl
        showText = true
    } = config;
    
    const sizes = {
        xs: { width: 60, radius: 26, circumference: 163.36, fontSize: 14 },
        sm: { width: 90, radius: 41, circumference: 257.61, fontSize: 18 },
        md: { width: 120, radius: 56, circumference: 351.86, fontSize: 24 },
        lg: { width: 150, radius: 71, circumference: 446.11, fontSize: 28 },
        xl: { width: 180, radius: 86, circumference: 540.35, fontSize: 32 }
    };
    
    const s = sizes[size] || sizes.md;
    const offset = s.circumference - (s.circumference * percent / 100);
    
    let html = `<div class="dsgt-circular-progress dsgt-circular-progress-${size}" data-progress="${percent}">`;
    html += `  <svg width="100%" height="100%" viewBox="0 0 ${s.width} ${s.width}">`;
    html += `    <circle class="dsgt-circular-progress-bg" cx="${s.width/2}" cy="${s.width/2}" r="${s.radius}"></circle>`;
    html += `    <circle class="dsgt-circular-progress-fill" cx="${s.width/2}" cy="${s.width/2}" r="${s.radius}"`;
    html += `            stroke-dasharray="${s.circumference}"`;
    html += `            stroke-dashoffset="${offset.toFixed(2)}"></circle>`;
    html += '  </svg>';
    
    if (showText) {
        html += `  <span class="dsgt-circular-progress-text">${percent}%</span>`;
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT step progress HTML dynamically
 * @param {Object} config - Step progress configuration
 * @returns {string} HTML string
 */
generateDSGTStepProgress(config = {}) {
    const {
        steps = [],
        currentStep = 1
    } = config;
    
    if (steps.length === 0) {
        steps = [
            { label: 'Step 1', icon: '1' },
            { label: 'Step 2', icon: '2' },
            { label: 'Step 3', icon: '3' },
            { label: 'Step 4', icon: '4' }
        ];
    }
    
    const lineWidth = ((currentStep - 1) / (steps.length - 1)) * 100;
    
    let html = '<div class="dsgt-step-progress">';
    html += `  <div class="dsgt-step-progress-line" style="width: ${lineWidth}%;"></div>`;
    
    steps.forEach((step, index) => {
        const stepNum = index + 1;
        let statusClass = '';
        let content = step.icon || stepNum;
        
        if (stepNum < currentStep) {
            statusClass = 'completed';
            content = '<i class="fa-solid fa-check"></i>';
        } else if (stepNum === currentStep) {
            statusClass = 'active';
        }
        
        html += `  <div class="dsgt-step-item ${statusClass}">`;
        html += `    <div class="dsgt-step-circle">${content}</div>`;
        html += `    <div class="dsgt-step-label">${step.label}</div>`;
        html += '  </div>';
    });
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT loading spinner HTML
 * @param {Object} config - Spinner configuration
 * @returns {string} HTML string
 */
generateDSGTLoadingSpinner(config = {}) {
    const {
        type = 'spinner', // spinner, dots, skeleton
        size = 'md' // xs, sm, md, lg
    } = config;
    
    if (type === 'spinner') {
        const sizes = { xs: '20px', sm: '30px', md: '40px', lg: '50px' };
        const borderWidths = { xs: '2px', sm: '3px', md: '4px', lg: '5px' };
        const size = sizes[size] || sizes.md;
        const borderWidth = borderWidths[size] || borderWidths.md;
        
        return `<div class="dsgt-loading-spinner" style="width: ${size}; height: ${size}; border-width: ${borderWidth};"></div>`;
    } else if (type === 'dots') {
        const dotSizes = { xs: '6px', sm: '8px', md: '12px', lg: '16px' };
        const dotSize = dotSizes[size] || dotSizes.md;
        
        let html = '<div class="dsgt-loading-dots">';
        html += `  <div class="dsgt-loading-dot" style="width: ${dotSize}; height: ${dotSize};"></div>`;
        html += `  <div class="dsgt-loading-dot" style="width: ${dotSize}; height: ${dotSize};"></div>`;
        html += `  <div class="dsgt-loading-dot" style="width: ${dotSize}; height: ${dotSize};"></div>`;
        html += '</div>';
        
        return html;
    } else if (type === 'skeleton') {
        const lines = config.lines || 3;
        let html = '<div>';
        
        for (let i = 0; i < lines; i++) {
            const widths = ['75%', '100%', '85%', '60%'];
            const heights = ['20px', '12px', '12px', '12px'];
            const width = widths[i % widths.length];
            const height = heights[i % heights.length];
            const marginBottom = i < lines - 1 ? '8px' : '0';
            
            html += `<div class="dsgt-skeleton" style="height: ${height}; width: ${width}; margin-bottom: ${marginBottom};"></div>`;
        }
        
        html += '</div>';
        return html;
    }
    
    return '';
},

/**
 * Initialize DSGT Scrollspy component
 * Sets up vertical and horizontal scrollspy with active section tracking
 */
initScrollspy() {
    // Initialize vertical scrollspy
    this.initDSGTVerticalScrollspy();
    
    // Initialize horizontal scrollspy
    this.initDSGTHorizontalScrollspy();
    
    // Setup smooth scroll for nav links
    this.initDSGTScrollspySmoothScroll();
    
    console.log('✅ DSGT Scrollspy component initialized');
},

/**
 * Initialize DSGT vertical scrollspy with active section tracking
 * @param {string} navSelector - Navigation container selector
 * @param {string} contentSelector - Content container selector
 * @param {Object} options - Configuration options
 */
initDSGTVerticalScrollspy(navSelector = '.dsgt-scrollspy-nav', contentSelector = '.dsgt-scrollspy-content', options = {}) {
    const {
        offset = 120,
        enableProgress = true
    } = options;
    
    const navLinks = document.querySelectorAll(`${navSelector} .dsgt-scrollspy-nav-link`);
    const content = document.querySelector(contentSelector);
    const progressBar = document.querySelector(`${navSelector} .dsgt-scrollspy-progress-bar`);
    
    if (!content || navLinks.length === 0) return false;
    
    let ticking = false;
    
    const updateScrollspy = () => {
        const sections = content.querySelectorAll('.dsgt-scrollspy-section');
        const scrollTop = content.scrollTop;
        const scrollHeight = content.scrollHeight - content.clientHeight;
        
        // Update progress bar
        if (enableProgress && progressBar && scrollHeight > 0) {
            const progress = Math.min((scrollTop / scrollHeight) * 100, 100);
            progressBar.style.width = progress + '%';
        }
        
        // Find active section
        let activeSection = null;
        
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const containerRect = content.getBoundingClientRect();
            const relativeTop = rect.top - containerRect.top;
            
            // Check if section is in viewport
            if (relativeTop <= offset && relativeTop > -section.offsetHeight + 100) {
                activeSection = section.id;
            }
        });
        
        // Update active nav link
        if (activeSection) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + activeSection) {
                    link.classList.add('active');
                    
                    // Scroll nav to keep active link visible
                    link.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            });
        }
    };
    
    // Throttle scroll events for better performance
    content.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateScrollspy();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Initial call
    updateScrollspy();
    
    return true;
},

/**
 * Initialize DSGT horizontal scrollspy with active section tracking
 * @param {string} navSelector - Navigation container selector
 * @param {string} contentSelector - Content container selector
 * @param {Object} options - Configuration options
 */
initDSGTHorizontalScrollspy(navSelector = '.dsgt-horizontal-scrollspy-nav', contentSelector = '.dsgt-horizontal-scrollspy-content', options = {}) {
    const {
        offset = 100
    } = options;
    
    const navLinks = document.querySelectorAll(`${navSelector} .dsgt-horizontal-scrollspy-link`);
    const content = document.querySelector(contentSelector);
    
    if (!content || navLinks.length === 0) return false;
    
    let ticking = false;
    
    content.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                const sections = content.querySelectorAll('section');
                
                sections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    const containerRect = content.getBoundingClientRect();
                    const relativeTop = rect.top - containerRect.top;
                    
                    if (relativeTop <= offset && relativeTop > -section.offsetHeight + 80) {
                        navLinks.forEach(link => link.classList.remove('active'));
                        const activeLink = document.querySelector(`${navSelector} a[href="#${section.id}"]`);
                        if (activeLink) {
                            activeLink.classList.add('active');
                        }
                    }
                });
                
                ticking = false;
            });
            ticking = true;
        }
    });
    
    return true;
},

/**
 * Setup smooth scroll behavior for scrollspy navigation links
 * @param {string} navLinkSelector - Navigation link selector
 */
initDSGTScrollspySmoothScroll(navLinkSelector = '.dsgt-scrollspy-nav-link, .dsgt-horizontal-scrollspy-link') {
    $(document).on('click', navLinkSelector, function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        const targetId = href.substring(1);
        const target = document.getElementById(targetId);
        
        if (!target) return;
        
        // Update active state immediately for better UX
        if ($(this).hasClass('dsgt-scrollspy-nav-link')) {
            $('.dsgt-scrollspy-nav-link').removeClass('active');
            $(this).addClass('active');
            
            // Scroll to section in vertical content
            const content = $(this).closest('.dsgt-scrollspy-layout').find('.dsgt-scrollspy-content');
            if (content.length) {
                const offsetTop = target.offsetTop - content[0].offsetTop - 20;
                content[0].scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        } else if ($(this).hasClass('dsgt-horizontal-scrollspy-link')) {
            $('.dsgt-horizontal-scrollspy-link').removeClass('active');
            $(this).addClass('active');
            
            // Scroll to section in horizontal content
            const content = $(this).closest('.dsgt-horizontal-scrollspy').find('.dsgt-horizontal-scrollspy-content');
            if (content.length) {
                const offsetTop = target.offsetTop - content[0].offsetTop - 20;
                content[0].scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    });
},

/**
 * Scroll DSGT scrollspy content to a specific section
 * @param {string} sectionId - Section ID to scroll to
 * @param {string} contentSelector - Content container selector
 * @param {number} offset - Offset from top in pixels
 */
scrollToDSGTSection(sectionId, contentSelector = '.dsgt-scrollspy-content', offset = 20) {
    const section = document.getElementById(sectionId);
    const content = document.querySelector(contentSelector);
    
    if (section && content) {
        const offsetTop = section.offsetTop - content.offsetTop - offset;
        content.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
        return true;
    }
    
    return false;
},

/**
 * Scroll DSGT scrollspy content to top
 * @param {string} contentSelector - Content container selector
 */
scrollDSGTToTop(contentSelector = '.dsgt-scrollspy-content') {
    const content = document.querySelector(contentSelector);
    if (content) {
        content.scrollTo({ top: 0, behavior: 'smooth' });
        return true;
    }
    return false;
},

/**
 * Get current active DSGT scrollspy section
 * @param {string} contentSelector - Content container selector
 * @returns {string|null} Active section ID
 */
getDSGTActiveSection(contentSelector = '.dsgt-scrollspy-content') {
    const content = document.querySelector(contentSelector);
    if (!content) return null;
    
    const sections = content.querySelectorAll('.dsgt-scrollspy-section');
    const offset = 120;
    
    let activeSection = null;
    
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const containerRect = content.getBoundingClientRect();
        const relativeTop = rect.top - containerRect.top;
        
        if (relativeTop <= offset && relativeTop > -section.offsetHeight + 100) {
            activeSection = section.id;
        }
    });
    
    return activeSection;
},

/**
 * Generate DSGT scrollspy navigation HTML dynamically
 * @param {Object} config - Scrollspy configuration
 * @returns {string} HTML string
 */
generateDSGTScrollspyNav(config = {}) {
    const {
        items = [],
        showProgress = false,
        title = 'Contents',
        sticky = true
    } = config;
    
    let html = `<nav class="dsgt-scrollspy-nav"${sticky ? ' style="position: sticky; top: 80px;"' : ''}>`;
    
    if (title) {
        html += `  <h3 class="dsgt-scrollspy-nav-title"><i class="fa-solid fa-compass" style="margin-right: 8px;"></i>${title}</h3>`;
    }
    
    html += '  <ul class="dsgt-scrollspy-nav-list">';
    
    items.forEach(item => {
        const levelClass = item.level ? ` level-${item.level}` : '';
        const icon = item.icon ? `<i class="${item.icon}"></i> ` : '';
        const activeClass = item.active ? ' active' : '';
        
        html += `    <li class="dsgt-scrollspy-nav-item">`;
        html += `      <a href="#${item.id}" class="dsgt-scrollspy-nav-link${levelClass}${activeClass}">${icon}${item.label}`;
        if (item.badge) {
            html += `        <span class="dsgt-scrollspy-badge">${item.badge}</span>`;
        }
        html += `      </a>`;
        html += `    </li>`;
    });
    
    html += '  </ul>';
    
    if (showProgress) {
        html += '  <div class="dsgt-scrollspy-progress">';
        html += '    <div class="dsgt-scrollspy-progress-bar"></div>';
        html += '  </div>';
    }
    
    html += '</nav>';
    
    return html;
},

/**
 * Generate DSGT scrollspy content section HTML dynamically
 * @param {Object} config - Section configuration
 * @returns {string} HTML string
 */
generateDSGTScrollspySection(config = {}) {
    const {
        id,
        title,
        subtitle,
        blocks = [],
        isLast = false
    } = config;
    
    let html = `<section id="${id}" class="dsgt-scrollspy-section"${isLast ? ' style="border-bottom: none;"' : ''}>`;
    
    if (title) {
        html += `  <h2 class="dsgt-scrollspy-section-title">${title}</h2>`;
    }
    
    if (subtitle) {
        html += `  <p class="dsgt-scrollspy-section-subtitle">${subtitle}</p>`;
    }
    
    blocks.forEach(block => {
        html += '  <div class="dsgt-scrollspy-content-block">';
        
        if (block.title) {
            html += `    <h4>${block.title}</h4>`;
        }
        
        if (block.content) {
            html += `    <p>${block.content}</p>`;
        }
        
        if (block.code) {
            html += `    <div class="code-block">${block.code}</div>`;
        }
        
        html += '  </div>';
    });
    
    html += '</section>';
    
    return html;
},

/**
 * Initialize DSGT Skeletons component
 * Sets up skeleton animations and interactive demos
 */
initSkeletons() {
    console.log('✅ DSGT Skeletons component initialized');
},

/**
 * Simulate DSGT loading state with smooth transitions
 * @param {string} contentAreaId - Content area element ID
 * @param {string} buttonId - Button element ID
 * @param {string} statusId - Status indicator element ID
 * @param {number} duration - Loading duration in milliseconds
 * @param {Object} content - Content to show after loading
 */
simulateDSGTLoading(contentAreaId = 'contentArea', buttonId = 'loadingBtn', statusId = 'statusIndicator', duration = 3000, content = null) {
    const contentArea = document.getElementById(contentAreaId);
    const loadingBtn = document.getElementById(buttonId);
    const statusIndicator = document.getElementById(statusId);
    
    if (!contentArea || !loadingBtn) return false;
    
    // Prevent duplicate calls
    if (loadingBtn.dataset.loading === 'true') return false;
    loadingBtn.dataset.loading = 'true';
    
    // Update button to loading state
    loadingBtn.disabled = true;
    loadingBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i><span>Loading...</span>';
    loadingBtn.className = 'btn btn-warning btn-lg';
    
    // Update status indicator
    if (statusIndicator) {
        statusIndicator.style.background = 'rgba(255, 152, 0, 0.1)';
        statusIndicator.innerHTML = `
            <i class="fa-solid fa-circle-notch fa-spin" style="color: var(--warning);"></i>
            <span style="font-size: 13px; color: var(--warning); font-weight: 600;">Loading content... Please wait</span>
        `;
    }
    
    // Fade out effect
    contentArea.style.opacity = '0.5';
    
    console.log('💀 DSGT Skeleton loading simulation started');
    
    // Simulate content loading
    setTimeout(() => {
        // Fade out completely
        contentArea.style.opacity = '0';
        
        setTimeout(() => {
            // Show success content
            if (content) {
                contentArea.innerHTML = content;
            } else {
                contentArea.innerHTML = `
                    <div style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(16, 185, 129, 0.05) 100%); border: 2px solid var(--success); border-radius: 12px; padding: 32px; text-align: center;">
                        <div style="width: 80px; height: 80px; background: var(--success); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fa-solid fa-check" style="font-size: 40px; color: white;"></i>
                        </div>
                        <h3 style="margin-bottom: 12px; color: var(--success); font-size: 24px;">Loading Complete!</h3>
                        <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 24px;">Content has been successfully loaded.</p>
                        <div style="display: flex; gap: 12px; justify-content: center;">
                            <button class="btn btn-success" onclick="MetroAdmin.resetDSGTLoadingDemo()">
                                <i class="fa-solid fa-rotate"></i> Replay Demo
                            </button>
                        </div>
                    </div>
                `;
            }
            
            // Fade in
            contentArea.style.opacity = '1';
            
            // Update button
            loadingBtn.disabled = false;
            loadingBtn.innerHTML = '<i class="fa-solid fa-check"></i><span>Complete!</span>';
            loadingBtn.className = 'btn btn-success btn-lg';
            
            // Update status
            if (statusIndicator) {
                statusIndicator.style.background = 'rgba(16, 185, 129, 0.1)';
                statusIndicator.innerHTML = `
                    <i class="fa-solid fa-check-circle" style="color: var(--success);"></i>
                    <span style="font-size: 13px; color: var(--success); font-weight: 600;">Content loaded successfully! ✨</span>
                `;
            }
            
            console.log('✨ DSGT Content loaded successfully');
            
            // Reset button after 2 seconds
            setTimeout(() => {
                loadingBtn.innerHTML = '<i class="fa-solid fa-play"></i><span>Start Demo</span>';
                loadingBtn.className = 'btn btn-primary btn-lg';
                loadingBtn.dataset.loading = 'false';
            }, 2000);
        }, 300);
    }, duration);
    
    return true;
},

/**
 * Reset DSGT loading demo to initial state
 * @param {string} contentAreaId - Content area element ID
 * @param {string} buttonId - Button element ID
 * @param {string} statusId - Status indicator element ID
 * @param {string} initialContent - Initial skeleton HTML
 */
resetDSGTLoadingDemo(contentAreaId = 'contentArea', buttonId = 'loadingBtn', statusId = 'statusIndicator', initialContent = null) {
    const contentArea = document.getElementById(contentAreaId);
    const loadingBtn = document.getElementById(buttonId);
    const statusIndicator = document.getElementById(statusId);
    
    if (!contentArea) return false;
    
    // Reset button
    if (loadingBtn) {
        loadingBtn.disabled = false;
        loadingBtn.innerHTML = '<i class="fa-solid fa-play"></i><span>Start Demo</span>';
        loadingBtn.className = 'btn btn-primary btn-lg';
        loadingBtn.dataset.loading = 'false';
    }
    
    // Reset status
    if (statusIndicator) {
        statusIndicator.style.background = 'rgba(0, 0, 0, 0.03)';
        statusIndicator.innerHTML = `
            <i class="fa-solid fa-circle-info" style="color: var(--accent);"></i>
            <span style="font-size: 13px; color: var(--text-secondary);">Click "Start Demo" to see skeleton loading animation</span>
        `;
    }
    
    // Reset content area
    if (initialContent) {
        contentArea.innerHTML = initialContent;
    }
    contentArea.style.opacity = '1';
    
    console.log('🔄 DSGT Loading demo reset');
    return true;
},

/**
 * Generate DSGT skeleton text HTML dynamically
 * @param {Object} config - Skeleton configuration
 * @returns {string} HTML string
 */
generateDSGTSkeletonText(config = {}) {
    const {
        lines = 3,
        showTitle = true,
        titleWidth = '60%',
        lastLineWidth = '80%'
    } = config;
    
    let html = '<div>';
    
    if (showTitle) {
        html += `  <div class="dsgt-skeleton dsgt-skeleton-title" style="width: ${titleWidth};"></div>`;
    }
    
    for (let i = 0; i < lines; i++) {
        const width = i === lines - 1 ? lastLineWidth : '100%';
        html += `  <div class="dsgt-skeleton dsgt-skeleton-text" style="width: ${width};"></div>`;
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT skeleton card HTML dynamically
 * @param {Object} config - Card configuration
 * @returns {string} HTML string
 */
generateDSGTSkeletonCard(config = {}) {
    const {
        type = 'default', // default, image, profile
        showImage = false,
        showAvatar = false,
        avatarSize = 'lg',
        textLines = 3
    } = config;
    
    let html = '<div class="dsgt-skeleton-card">';
    
    if (type === 'profile' || showAvatar) {
        html += '  <div class="dsgt-skeleton-card-header">';
        html += `    <div class="dsgt-skeleton dsgt-skeleton-avatar${avatarSize === 'lg' ? '-lg' : ''}"></div>`;
        html += '    <div style="flex: 1;">';
        html += '      <div class="dsgt-skeleton dsgt-skeleton-text" style="width: 70%; height: 20px; margin-bottom: 8px;"></div>';
        html += '      <div class="dsgt-skeleton dsgt-skeleton-text" style="width: 50%;"></div>';
        html += '    </div>';
        html += '  </div>';
    }
    
    if (type === 'image' || showImage) {
        html += '  <div class="dsgt-skeleton dsgt-skeleton-image"></div>';
        html += '  <div style="padding-top: 16px;">';
    }
    
    html += '  <div>';
    html += `    <div class="dsgt-skeleton dsgt-skeleton-title"></div>`;
    
    for (let i = 0; i < textLines; i++) {
        const width = i === textLines - 1 ? '60%' : '100%';
        html += `    <div class="dsgt-skeleton dsgt-skeleton-text" style="width: ${width};"></div>`;
    }
    
    html += '  </div>';
    
    if (type === 'image' || showImage) {
        html += '  </div>';
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT skeleton list HTML dynamically
 * @param {Object} config - List configuration
 * @returns {string} HTML string
 */
generateDSGTSkeletonList(config = {}) {
    const {
        items = 3,
        showAvatar = true
    } = config;
    
    let html = '<div>';
    
    for (let i = 0; i < items; i++) {
        html += '  <div class="dsgt-skeleton-list-item">';
        
        if (showAvatar) {
            html += '    <div class="dsgt-skeleton dsgt-skeleton-circle-md"></div>';
        }
        
        html += '    <div style="flex: 1;">';
        const width1 = `${70 + Math.random() * 20}%`;
        const width2 = `${40 + Math.random() * 20}%`;
        html += `      <div class="dsgt-skeleton dsgt-skeleton-text" style="width: ${width1};"></div>`;
        html += `      <div class="dsgt-skeleton dsgt-skeleton-text" style="width: ${width2};"></div>`;
        html += '    </div>';
        html += '  </div>';
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT skeleton table HTML dynamically
 * @param {Object} config - Table configuration
 * @returns {string} HTML string
 */
generateDSGTSkeletonTable(config = {}) {
    const {
        rows = 3,
        columns = 3
    } = config;
    
    let html = '<div class="dsgt-skeleton-table">';
    
    for (let i = 0; i < rows; i++) {
        html += '  <div class="dsgt-skeleton-table-row">';
        
        for (let j = 0; j < columns; j++) {
            html += '    <div class="dsgt-skeleton dsgt-skeleton-table-cell"></div>';
        }
        
        html += '  </div>';
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Show DSGT skeleton loading on element
 * @param {string} selector - Target element selector
 * @param {string} type - Skeleton type (text, card, list, table)
 * @param {Object} config - Skeleton configuration
 */
showDSGTSkeleton(selector, type = 'text', config = {}) {
    const $element = $(selector);
    
    if (!$element.length) return false;
    
    let skeletonHTML = '';
    
    switch (type) {
        case 'text':
            skeletonHTML = this.generateDSGTSkeletonText(config);
            break;
        case 'card':
            skeletonHTML = this.generateDSGTSkeletonCard(config);
            break;
        case 'list':
            skeletonHTML = this.generateDSGTSkeletonList(config);
            break;
        case 'table':
            skeletonHTML = this.generateDSGTSkeletonTable(config);
            break;
        default:
            skeletonHTML = this.generateDSGTSkeletonText(config);
    }
    
    $element.html(skeletonHTML);
    return true;
},

/**
 * Hide DSGT skeleton and show content
 * @param {string} selector - Target element selector
 * @param {string} content - HTML content to show
 */
hideDSGTSkeleton(selector, content) {
    const $element = $(selector);
    
    if (!$element.length) return false;
    
    $element.html(content);
    return true;
},

/**
 * Initialize DSGT Spinners component
 * Sets up spinner animations and overlay controls
 */
initSpinners() {
    console.log('✅ DSGT Spinners component initialized');
},

/**
 * Show DSGT full-screen spinner overlay
 * @param {string} overlayId - Overlay element ID
 * @param {number} autoHide - Auto-hide duration in ms (0 = don't auto-hide)
 * @param {string} message - Loading message to display
 */
showDSGTFullScreenSpinner(overlayId = 'fullScreenSpinner', autoHide = 3000, message = null) {
    const overlay = document.getElementById(overlayId);
    
    if (!overlay) return false;
    
    // Update message if provided
    if (message) {
        const messageEl = overlay.querySelector('p');
        if (messageEl) {
            messageEl.textContent = message;
        }
    }
    
    overlay.classList.add('active');
    
    // Auto-hide after specified duration
    if (autoHide > 0) {
        setTimeout(() => {
            this.hideDSGTFullScreenSpinner(overlayId);
        }, autoHide);
    }
    
    console.log('✨ DSGT Full-screen spinner shown');
    return true;
},

/**
 * Hide DSGT full-screen spinner overlay
 * @param {string} overlayId - Overlay element ID
 */
hideDSGTFullScreenSpinner(overlayId = 'fullScreenSpinner') {
    const overlay = document.getElementById(overlayId);
    
    if (!overlay) return false;
    
    overlay.classList.remove('active');
    
    console.log('👁 DSGT Full-screen spinner hidden');
    return true;
},

/**
 * Show DSGT button loading state with spinner
 * @param {string} buttonSelector - Button selector
 * @param {string} loadingText - Text to show during loading
 */
showDSGTButtonLoading(buttonSelector, loadingText = 'Loading...') {
    const $button = $(buttonSelector);
    
    if (!$button.length) return false;
    
    // Store original content
    if (!$button.data('original-content')) {
        $button.data('original-content', $button.html());
    }
    
    // Add spinner class and update content
    $button.addClass('dsgt-btn-spinner').prop('disabled', true);
    $button.html(`<div class="dsgt-spinner-demo"></div><span>${loadingText}</span>`);
    
    return true;
},

/**
 * Hide DSGT button loading state and restore original content
 * @param {string} buttonSelector - Button selector
 */
hideDSGTButtonLoading(buttonSelector) {
    const $button = $(buttonSelector);
    
    if (!$button.length) return false;
    
    // Restore original content
    const originalContent = $button.data('original-content');
    if (originalContent) {
        $button.removeClass('dsgt-btn-spinner').prop('disabled', false);
        $button.html(originalContent);
        $button.removeData('original-content');
    }
    
    return true;
},

/**
 * Generate DSGT circular spinner HTML dynamically
 * @param {Object} config - Spinner configuration
 * @returns {string} HTML string
 */
generateDSGTSpinner(config = {}) {
    const {
        size = 'md', // sm, md, lg, xl
        color = 'default', // default, success, warning, danger, info
        inline = false
    } = config;
    
    const sizes = {
        sm: 'dsgt-spinner-sm',
        md: 'dsgt-spinner-md',
        lg: 'dsgt-spinner-lg',
        xl: 'dsgt-spinner-xl'
    };
    
    const colors = {
        success: 'dsgt-spinner-success',
        warning: 'dsgt-spinner-warning',
        danger: 'dsgt-spinner-danger',
        info: 'dsgt-spinner-info'
    };
    
    const sizeClass = sizes[size] || sizes.md;
    const colorClass = colors[color] || '';
    
    return `<div class="dsgt-spinner-demo ${sizeClass} ${colorClass}"${inline ? ' style="display: inline-block;"' : ''}></div>`;
},

/**
 * Generate DSGT dots spinner HTML dynamically
 * @param {Object} config - Dots configuration
 * @returns {string} HTML string
 */
generateDSGTDotsSpinner(config = {}) {
    const {
        count = 3,
        color = 'var(--accent)'
    } = config;
    
    let html = '<div class="dsgt-spinner-dots">';
    
    for (let i = 0; i < count; i++) {
        html += `  <div class="dsgt-spinner-dot" style="background: ${color};"></div>`;
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT pulse spinner HTML dynamically
 * @param {Object} config - Pulse configuration
 * @returns {string} HTML string
 */
generateDSGTPulseSpinner(config = {}) {
    const {
        color = 'var(--accent)',
        size = 40
    } = config;
    
    return `<div class="dsgt-spinner-pulse" style="background: ${color}; width: ${size}px; height: ${size}px;"></div>`;
},

/**
 * Generate DSGT bars spinner HTML dynamically
 * @param {Object} config - Bars configuration
 * @returns {string} HTML string
 */
generateDSGTBarsSpinner(config = {}) {
    const {
        count = 5,
        color = 'var(--accent)',
        height = 40
    } = config;
    
    let html = `<div class="dsgt-spinner-bars" style="height: ${height}px;">`;
    
    for (let i = 0; i < count; i++) {
        html += `  <div class="dsgt-spinner-bar" style="background: ${color};"></div>`;
    }
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT ring spinner HTML dynamically
 * @param {Object} config - Ring configuration
 * @returns {string} HTML string
 */
generateDSGTRingSpinner(config = {}) {
    const {
        color = 'var(--accent)',
        size = 50
    } = config;
    
    return `<div class="dsgt-spinner-ring" style="border-top-color: ${color}; border-right-color: ${color}; width: ${size}px; height: ${size}px;"></div>`;
},

/**
 * Generate DSGT growing spinner HTML dynamically
 * @param {Object} config - Growing configuration
 * @returns {string} HTML string
 */
generateDSGTGrowingSpinner(config = {}) {
    const {
        color = 'var(--accent)',
        size = 40
    } = config;
    
    return `<div class="dsgt-spinner-growing" style="border-color: ${color}; width: ${size}px; height: ${size}px;"></div>`;
},

/**
 * Generate DSGT spinner overlay HTML dynamically
 * @param {Object} config - Overlay configuration
 * @returns {string} HTML string
 */
generateDSGTSpinnerOverlay(config = {}) {
    const {
        id = 'dsgtSpinnerOverlay',
        message = 'Loading, please wait...',
        spinnerSize = 'lg',
        spinnerColor = 'default'
    } = config;
    
    const spinnerHTML = this.generateDSGTSpinner({
        size: spinnerSize,
        color: spinnerColor
    });
    
    let html = `<div class="dsgt-spinner-overlay" id="${id}">`;
    html += '  <div class="dsgt-spinner-overlay-content">';
    html += `    ${spinnerHTML}`;
    html += `    <p>${message}</p>`;
    html += '  </div>';
    html += '</div>';
    
    return html;
}
,

/**
 * Initialize DSGT Tabs component
 * Sets up tab switching, keyboard navigation, and ARIA attributes
 */
initTabs() {
    this.initDSGTTabsKeyboardNavigation();
    this.initDSGTTabsARIA();
    console.log('✅ DSGT Tabs component initialized');
},

/**
 * Switch DSGT horizontal tab by index and group
 * @param {number} index - Tab index to activate
 * @param {string} group - Tab group identifier
 */
switchDSGTTab(index, group) {
    const tabs = document.querySelectorAll(`[data-tab-group="${group}"] .dsgt-tab-item`);
    const contents = document.querySelectorAll(`[id^="${group}-content-"]`);
    
    // Remove active from all tabs
    tabs.forEach(tab => tab.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));
    
    // Add active to selected tab
    if (tabs[index]) {
        tabs[index].classList.add('active');
        
        // Add ripple effect
        this.addDSGTRippleEffect(tabs[index]);
    }
    
    // Show corresponding content with animation
    const targetContent = document.getElementById(`${group}-content-${index}`);
    if (targetContent) {
        targetContent.classList.add('active');
        
        // Trigger custom event for content animation
        targetContent.dispatchEvent(new CustomEvent('tab:activated', {
            detail: { index, group }
        }));
    }
    
    console.log(`🔄 DSGT Tab switched: ${group}[${index}]`);
    return true;
},

/**
 * Switch DSGT vertical tab by index
 * @param {number} index - Tab index to activate
 */
switchDSGTVerticalTab(index) {
    const tabs = document.querySelectorAll('.dsgt-vertical-tabs-nav .dsgt-tab-item');
    const contents = document.querySelectorAll('.dsgt-vertical-tabs-content .dsgt-tab-content');
    
    // Remove active from all tabs
    tabs.forEach(tab => tab.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));
    
    // Add active to selected tab
    if (tabs[index]) {
        tabs[index].classList.add('active');
        this.addDSGTRippleEffect(tabs[index]);
    }
    
    // Show corresponding content
    const targetContent = document.getElementById(`vertical-tabs-content-${index}`);
    if (targetContent) {
        targetContent.classList.add('active');
        targetContent.dispatchEvent(new CustomEvent('tab:activated', {
            detail: { index, group: 'vertical' }
        }));
    }
    
    console.log(`⬆️ DSGT Vertical tab switched: [${index}]`);
    return true;
},

/**
 * Add ripple effect to DSGT tab element for better UX
 * @param {HTMLElement} element - Tab element
 */
addDSGTRippleEffect(element) {
    const ripple = document.createElement('span');
    const rect = element.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = rect.width / 2 - size / 2;
    const y = rect.height / 2 - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: dsgtRippleEffect 0.6s ease-out;
        pointer-events: none;
    `;
    
    element.style.position = 'relative';
    element.style.overflow = 'hidden';
    element.appendChild(ripple);
    
    setTimeout(() => ripple.remove(), 600);
},

/**
 * Initialize DSGT tabs keyboard navigation with improved accessibility
 * Supports: ArrowLeft, ArrowRight, Home, End keys
 */
initDSGTTabsKeyboardNavigation() {
    document.addEventListener('keydown', (e) => {
        const activeElement = document.activeElement;
        
        if (activeElement.classList.contains('dsgt-tab-item')) {
            const tabGroup = activeElement.closest('[data-tab-group]');
            if (!tabGroup) return;
            
            const tabs = Array.from(tabGroup.querySelectorAll('.dsgt-tab-item'));
            const currentIndex = tabs.indexOf(activeElement);
            let newIndex = currentIndex;
            
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                newIndex = currentIndex > 0 ? currentIndex - 1 : tabs.length - 1;
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                newIndex = currentIndex < tabs.length - 1 ? currentIndex + 1 : 0;
            } else if (e.key === 'Home') {
                e.preventDefault();
                newIndex = 0;
            } else if (e.key === 'End') {
                e.preventDefault();
                newIndex = tabs.length - 1;
            }
            
            if (newIndex !== currentIndex) {
                tabs[newIndex].focus();
                tabs[newIndex].click();
            }
        }
    });
},

/**
 * Initialize DSGT tabs ARIA attributes for accessibility
 */
initDSGTTabsARIA() {
    // Add ARIA attributes to all tabs
    $('.dsgt-tab-item').each(function(index) {
        $(this).attr({
            'tabindex': '0',
            'role': 'tab',
            'aria-selected': $(this).hasClass('active') ? 'true' : 'false'
        });
    });
    
    // Update ARIA when tab changes
    $(document).on('click', '.dsgt-tab-item', function() {
        const group = $(this).closest('[data-tab-group]').data('tab-group');
        $(`[data-tab-group="${group}"] .dsgt-tab-item`).attr('aria-selected', 'false');
        $(this).attr('aria-selected', 'true');
    });
},

/**
 * Generate DSGT tabs HTML dynamically
 * @param {Object} config - Tabs configuration
 * @returns {string} HTML string
 */
generateDSGTTabs(config = {}) {
    const {
        group = 'dynamic-tabs',
        tabs = [],
        style = 'default', // default, pill, border, icon
        showBadges = false
    } = config;
    
    const styleClasses = {
        default: 'dsgt-modern-tabs',
        pill: 'dsgt-modern-tabs dsgt-pill-tabs',
        border: 'dsgt-modern-tabs dsgt-border-tabs',
        icon: 'dsgt-modern-tabs dsgt-icon-tabs'
    };
    
    let html = `<div class="${styleClasses[style] || styleClasses.default}" data-tab-group="${group}">`;
    
    tabs.forEach((tab, index) => {
        const activeClass = index === 0 ? ' active' : '';
        const iconHTML = tab.icon ? `<i class="${tab.icon}"></i> ` : '';
        const badgeHTML = showBadges && tab.badge ? ` <span class="dsgt-tab-badge">${tab.badge}</span>` : '';
        
        html += `<button class="dsgt-tab-item${activeClass}" onclick="MetroAdmin.switchDSGTTab(${index}, '${group}')">${iconHTML}${tab.label}${badgeHTML}</button>`;
    });
    
    html += '</div>';
    
    return html;
},

/**
 * Generate DSGT tab content HTML dynamically
 * @param {Object} config - Content configuration
 * @returns {string} HTML string
 */
generateDSGTTabContent(config = {}) {
    const {
        group = 'dynamic-tabs',
        contents = []
    } = config;
    
    let html = '';
    
    contents.forEach((content, index) => {
        const activeClass = index === 0 ? ' active' : '';
        html += `
            <div id="${group}-content-${index}" class="dsgt-tab-content${activeClass}">
                <div class="dsgt-tab-content-card">
                    <h4>${content.title || 'Tab Content'}</h4>
                    <p>${content.description || 'This is the tab content.'}</p>
                </div>
            </div>
        `;
    });
    
    return html;
},

/**
 * Update DSGT tabs builder preview dynamically
 * @param {Object} config - Builder configuration
 */
updateDSGTTabsBuilder(config = {}) {
    const {
        style = 'default',
        count = 4,
        showIcons = true,
        showBadges = false,
        previewId = 'tabsBuilderPreview'
    } = config;
    
    const templates = [
        { icon: 'fa-solid fa-house', label: 'Dashboard' },
        { icon: 'fa-solid fa-chart-line', label: 'Analytics' },
        { icon: 'fa-solid fa-users', label: 'Users' },
        { icon: 'fa-solid fa-gear', label: 'Settings' },
        { icon: 'fa-solid fa-bell', label: 'Notifications' },
        { icon: 'fa-solid fa-shield-halved', label: 'Security' }
    ];
    
    const badgeValues = ['12', '5', '3', '8', '2', '15'];
    
    // Build tabs HTML
    let tabsHTML = this.generateDSGTTabs({
        group: 'builder-tabs',
        tabs: templates.slice(0, count).map((tab, i) => ({
            ...tab,
            icon: showIcons ? tab.icon : null,
            badge: showBadges ? badgeValues[i] : null
        })),
        style: style,
        showBadges: showBadges
    });
    
    // Build content HTML
    let contentHTML = this.generateDSGTTabContent({
        group: 'builder-tabs',
        contents: templates.slice(0, count).map(tab => ({
            title: `${tab.label} Content`,
            description: `This is the ${tab.label.toLowerCase()} tab content. Switch between tabs to see different sections.`
        }))
    });
    
    // Update preview
    const preview = document.getElementById(previewId);
    if (preview) {
        preview.innerHTML = tabsHTML + contentHTML;
    }
    
    console.log(`🏗️ DSGT Tabs builder updated: style=${style}, count=${count}`);
    return true;
}
,

/**
 * Initialize DSGT Timelines component
 * Sets up interactive timeline builder and demos
 */
initTimelines() {
    console.log('✅ DSGT Timelines component initialized');
},

/**
 * Update DSGT timeline preview dynamically
 * @param {Object} config - Timeline configuration
 */
updateDSGTTimeline(config = {}) {
    const {
        type = 'vertical',
        count = 4,
        colorTheme = 'mixed',
        showDates = true,
        previewId = 'timelinePreview'
    } = config;
    
    const timelineData = [
        { title: 'Project Initiated', date: 'Jan 1, 2024', desc: 'Project setup and planning phase', icon: 'fa-solid fa-flag' },
        { title: 'Design Completed', date: 'Jan 15, 2024', desc: 'UI/UX design approved by stakeholders', icon: 'fa-solid fa-palette' },
        { title: 'Development Started', date: 'Feb 1, 2024', desc: 'Core features implementation begins', icon: 'fa-solid fa-code' },
        { title: 'Testing Phase', date: 'Mar 1, 2024', desc: 'QA testing and bug fixing', icon: 'fa-solid fa-vial' },
        { title: 'Beta Release', date: 'Mar 15, 2024', desc: 'Beta version released to early users', icon: 'fa-solid fa-rocket' },
        { title: 'Production Launch', date: 'Apr 1, 2024', desc: 'Official production deployment', icon: 'fa-solid fa-check-circle' }
    ];
    
    const preview = document.getElementById(previewId);
    if (!preview) return false;
    
    if (type === 'horizontal') {
        this.renderDSGTHorizontalTimeline(preview, timelineData, count, colorTheme, showDates);
    } else {
        this.renderDSGTVerticalTimeline(preview, timelineData, type === 'icons', count, colorTheme, showDates);
    }
    
    console.log(`🕐 DSGT Timeline updated: ${type}, ${count} items, ${colorTheme}`);
    return true;
},

/**
 * Render DSGT vertical timeline
 * @param {HTMLElement} container - Container element
 * @param {Array} data - Timeline data array
 * @param {boolean} withIcons - Show icons
 * @param {number} count - Number of items
 * @param {string} colorTheme - Color theme
 * @param {boolean} showDates - Show dates
 */
renderDSGTVerticalTimeline(container, data, withIcons, count, colorTheme, showDates) {
    container.className = 'dsgt-demo-timeline';
    container.innerHTML = '';
    
    const dotColors = ['dsgt-timeline-dot-success', 'dsgt-timeline-dot-warning', 'dsgt-timeline-dot-info', 'dsgt-timeline-dot-danger'];
    const gradientColors = [
        'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
        'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
        'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
        'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)',
        'linear-gradient(135deg, #fa709a 0%, #fee140 100%)',
        'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)'
    ];
    
    for (let i = 0; i < count && i < data.length; i++) {
        const item = data[i];
        let dotClass = '';
        let dotStyle = '';
        
        // Apply color theme
        if (colorTheme === 'mixed') {
            dotClass = dotColors[i % dotColors.length];
        } else if (colorTheme === 'gradient') {
            dotStyle = `background: ${gradientColors[i]}; box-shadow: 0 0 0 2px transparent;`;
        }
        
        const itemHTML = `
            <div class="dsgt-timeline-item">
                ${withIcons ? `
                    <div class="dsgt-timeline-icon" style="${dotStyle || ''}">
                        <i class="${item.icon}"></i>
                    </div>
                ` : `
                    <div class="dsgt-timeline-dot ${dotClass}" style="${dotStyle}"></div>
                `}
                <div class="dsgt-timeline-content">
                    <h4 class="dsgt-timeline-title">${item.title}</h4>
                    ${showDates ? `<div class="dsgt-timeline-date">${item.date}</div>` : ''}
                    <p class="dsgt-timeline-description">${item.desc}</p>
                </div>
            </div>
        `;
        
        container.innerHTML += itemHTML;
    }
},

/**
 * Render DSGT horizontal timeline
 * @param {HTMLElement} container - Container element
 * @param {Array} data - Timeline data array
 * @param {number} count - Number of items
 * @param {string} colorTheme - Color theme
 * @param {boolean} showDates - Show dates
 */
renderDSGTHorizontalTimeline(container, data, count, colorTheme, showDates) {
    container.className = 'dsgt-timeline-horizontal';
    container.innerHTML = '';
    
    const gradientColors = [
        'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
        'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
        'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
        'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)',
        'linear-gradient(135deg, #fa709a 0%, #fee140 100%)',
        'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)'
    ];
    
    for (let i = 0; i < count && i < data.length; i++) {
        const item = data[i];
        let dotStyle = '';
        
        if (colorTheme === 'mixed') {
            const colors = ['var(--accent)', 'var(--success)', 'var(--warning)', 'var(--info)', 'var(--danger)'];
            const color = colors[i % colors.length];
            dotStyle = `background: ${color}; box-shadow: 0 0 0 2px ${color};`;
        } else if (colorTheme === 'gradient') {
            dotStyle = `background: ${gradientColors[i]}; box-shadow: 0 0 0 2px transparent;`;
        }
        
        const itemHTML = `
            <div class="dsgt-timeline-horizontal-item">
                ${showDates ? `<div class="dsgt-timeline-horizontal-date">${item.date}</div>` : ''}
                <div class="dsgt-timeline-horizontal-dot" style="${dotStyle}"></div>
                <div class="dsgt-timeline-horizontal-title">${item.title}</div>
            </div>
        `;
        
        container.innerHTML += itemHTML;
    }
},

/**
 * Reset DSGT timeline demo to default settings
 * @param {Object} selectors - Element selectors
 */
resetDSGTTimelineDemo(selectors = {}) {
    const {
        typeSelector = 'timelineType',
        itemsSelector = 'timelineItems',
        colorSelector = 'timelineColor',
        datesSelector = 'showDates'
    } = selectors;
    
    const typeEl = document.getElementById(typeSelector);
    const itemsEl = document.getElementById(itemsSelector);
    const colorEl = document.getElementById(colorSelector);
    const datesEl = document.getElementById(datesSelector);
    
    if (typeEl) typeEl.value = 'vertical';
    if (itemsEl) itemsEl.value = 4;
    if (colorEl) colorEl.value = 'mixed';
    if (datesEl) datesEl.value = 'yes';
    
    // Update items count display
    const countDisplay = document.getElementById('itemsCount');
    if (countDisplay) countDisplay.textContent = '4';
    
    this.updateDSGTTimeline({
        type: 'vertical',
        count: 4,
        colorTheme: 'mixed',
        showDates: true
    });
    
    console.log('🔄 DSGT Timeline demo reset to default');
    return true;
},

/**
 * Generate DSGT timeline HTML dynamically
 * @param {Object} config - Timeline configuration
 * @returns {string} HTML string
 */
generateDSGTTimeline(config = {}) {
    const {
        type = 'vertical', // vertical, horizontal, centered
        data = [],
        withIcons = false,
        colorTheme = 'accent',
        showDates = true
    } = config;
    
    const dotColors = ['dsgt-timeline-dot-success', 'dsgt-timeline-dot-warning', 'dsgt-timeline-dot-info', 'dsgt-timeline-dot-danger'];
    
    if (type === 'horizontal') {
        let html = '<div class="dsgt-timeline-horizontal">';
        
        data.forEach((item, index) => {
            let dotStyle = '';
            if (colorTheme === 'mixed') {
                const colors = ['var(--accent)', 'var(--success)', 'var(--warning)', 'var(--info)', 'var(--danger)'];
                const color = colors[index % colors.length];
                dotStyle = `style="background: ${color}; box-shadow: 0 0 0 2px ${color};"`;
            }
            
            html += `
                <div class="dsgt-timeline-horizontal-item">
                    ${showDates ? `<div class="dsgt-timeline-horizontal-date">${item.date || ''}</div>` : ''}
                    <div class="dsgt-timeline-horizontal-dot" ${dotStyle}></div>
                    <div class="dsgt-timeline-horizontal-title">${item.title}</div>
                </div>
            `;
        });
        
        html += '</div>';
        return html;
    }
    
    // Vertical or centered timeline
    const containerClass = type === 'centered' ? 'dsgt-demo-timeline dsgt-timeline-centered' : 'dsgt-demo-timeline';
    let html = `<div class="${containerClass}">`;
    
    data.forEach((item, index) => {
        let dotClass = '';
        if (colorTheme === 'mixed') {
            dotClass = dotColors[index % dotColors.length];
        }
        
        html += `
            <div class="dsgt-timeline-item">
                ${withIcons && item.icon ? `
                    <div class="dsgt-timeline-icon">
                        <i class="${item.icon}"></i>
                    </div>
                ` : `
                    <div class="dsgt-timeline-dot ${dotClass}"></div>
                `}
                <div class="dsgt-timeline-content">
                    <h4 class="dsgt-timeline-title">${item.title}</h4>
                    ${showDates && item.date ? `<div class="dsgt-timeline-date">${item.date}</div>` : ''}
                    ${item.description ? `<p class="dsgt-timeline-description">${item.description}</p>` : ''}
                </div>
            </div>
        `;
    });
    
    html += '</div>';
    return html;
},

/**
 * Initialize DSGT Toasts component
 * Sets up toast demo functionality
 */
initToasts() {
    console.log('✅ DSGT Toasts component initialized');
},

/**
 * Show DSGT demo toast notification
 * @param {string} type - Toast type (success, danger, warning, info)
 * @param {string} position - Toast position (top-right, bottom-right, etc.)
 * @param {string} size - Toast size (sm, md, lg)
 * @param {number} duration - Auto-dismiss duration in ms
 */
showDSGTDemoToast(type = 'success', position = 'top-right', size = 'md', duration = 4000) {
    const messages = {
        success: 'Operation completed successfully.',
        danger: 'Something went wrong. Please try again.',
        warning: 'Please review before continuing.',
        info: 'Here is some helpful information.'
    };
    
    const message = messages[type] || messages.info;
    
    // Use showToast from swal-config.js if available
    if (typeof showToast === 'function') {
        showToast(message, type, position);
    } else {
        console.warn('⚠️ showToast function not available');
    }
    
    console.log(`✨ DSGT ${type} toast shown at ${position} (${size}) for ${duration}ms`);
    return true;
},

/**
 * Show multiple DSGT toasts in sequence
 * @param {string} position - Position for all toasts
 * @param {number} interval - Delay between toasts in ms
 */
showDSGTMultipleToasts(position = 'top-right', interval = 300) {
    if (typeof showToast !== 'function') {
        console.warn('⚠️ showToast function not available');
        return false;
    }
    
    showToast('First notification', 'success', position);
    
    setTimeout(() => {
        showToast('Second notification', 'warning', position);
    }, interval);
    
    setTimeout(() => {
        showToast('Third notification', 'info', position);
    }, interval * 2);
    
    console.log('📚 DSGT Multiple toasts shown');
    return true;
},

/**
 * Show DSGT custom HTML content toast
 * @param {string} position - Toast position
 */
showDSGTCustomHtmlToast(position = 'top-right') {
    if (typeof showToast !== 'function') {
        console.warn('⚠️ showToast function not available');
        return false;
    }
    
    showToast('This toast supports rich content and HTML formatting.', 'info', position);
    console.log('🎨 DSGT Custom HTML toast shown');
    return true;
},

/**
 * Show DSGT toast with action button
 * @param {string} position - Toast position
 */
showDSGTActionToast(position = 'top-right') {
    if (typeof showToast !== 'function') {
        console.warn('⚠️ showToast function not available');
        return false;
    }
    
    showToast('File has been moved to trash. Action available.', 'danger', position);
    console.log('⚡ DSGT Action toast shown');
    return true;
},

/**
 * Initialize DSGT Tooltips component
 * Sets up tooltip manager with keyboard navigation and accessibility
 */
initTooltips() {
    this.setupTooltipKeyboardAccess();
    this.setupTooltipClickOutside();
    this.setupTooltipEscapeKey();
    this.setupTooltipHoverIntent();
    console.log('✅ DSGT Tooltips component initialized');
},

/**
 * Setup keyboard accessibility for DSGT tooltips
 */
setupTooltipKeyboardAccess() {
    if (typeof $ === 'undefined') return;
    
    $('.dsgt-tooltip-wrapper').attr({
        'tabindex': '0',
        'role': 'tooltip-trigger',
        'aria-haspopup': 'true'
    });
    
    $('.dsgt-tooltip-wrapper').on('focus', function() {
        $(this).addClass('dsgt-tooltip-show');
        $(this).attr('aria-expanded', 'true');
    }).on('blur', function() {
        $(this).removeClass('dsgt-tooltip-show');
        $(this).attr('aria-expanded', 'false');
    });
},

/**
 * Setup click outside to close DSGT tooltips
 */
setupTooltipClickOutside() {
    if (typeof $ === 'undefined') return;
    
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dsgt-tooltip-wrapper').length) {
            $('.dsgt-tooltip-wrapper.dsgt-tooltip-show').removeClass('dsgt-tooltip-show');
        }
    });
},

/**
 * Setup escape key to close all DSGT tooltips
 */
setupTooltipEscapeKey() {
    if (typeof $ === 'undefined') return;
    
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            MetroAdmin.hideAllDSGTTooltips();
        }
    });
},

/**
 * Setup hover intent detection for DSGT tooltips
 */
setupTooltipHoverIntent() {
    if (typeof $ === 'undefined') return;
    
    let hoverTimeout;
    const delay = 100; // ms before showing
    
    $('.dsgt-tooltip-wrapper').on('mouseenter', function() {
        const $wrapper = $(this);
        clearTimeout(hoverTimeout);
        
        hoverTimeout = setTimeout(() => {
            $wrapper.addClass('dsgt-tooltip-show');
        }, delay);
    }).on('mouseleave', function() {
        const $wrapper = $(this);
        clearTimeout(hoverTimeout);
        $wrapper.removeClass('dsgt-tooltip-show');
    });
},

/**
 * Toggle DSGT tooltip visibility
 * @param {string} selector - CSS selector for tooltip wrapper
 */
toggleDSGTTooltip(selector) {
    const tooltipWrapper = document.querySelector(selector);
    if (!tooltipWrapper) return false;
    
    const isActive = tooltipWrapper.classList.contains('dsgt-tooltip-show');
    
    // Close all other tooltips first
    document.querySelectorAll('.dsgt-tooltip-wrapper.dsgt-tooltip-show').forEach(wrapper => {
        if (wrapper !== tooltipWrapper) {
            wrapper.classList.remove('dsgt-tooltip-show');
        }
    });
    
    tooltipWrapper.classList.toggle('dsgt-tooltip-show');
    
    // Auto-hide after 3 seconds if showing
    if (!isActive) {
        setTimeout(() => {
            tooltipWrapper.classList.remove('dsgt-tooltip-show');
        }, 3000);
    }
    
    console.log(`🔄 DSGT Tooltip toggled: ${selector}`);
    return true;
},

/**
 * Show specific DSGT tooltip
 * @param {string} selector - CSS selector for tooltip wrapper
 */
showDSGTTooltip(selector) {
    const tooltip = document.querySelector(selector);
    if (!tooltip) return false;
    
    // Close others
    document.querySelectorAll('.dsgt-tooltip-wrapper.dsgt-tooltip-show').forEach(wrapper => {
        if (wrapper !== tooltip) {
            wrapper.classList.remove('dsgt-tooltip-show');
        }
    });
    
    tooltip.classList.add('dsgt-tooltip-show');
    console.log(`👁️ DSGT Tooltip shown: ${selector}`);
    return true;
},

/**
 * Hide specific DSGT tooltip
 * @param {string} selector - CSS selector for tooltip wrapper
 */
hideDSGTTooltip(selector) {
    const tooltip = document.querySelector(selector);
    if (!tooltip) return false;
    
    tooltip.classList.remove('dsgt-tooltip-show');
    console.log(`🙈 DSGT Tooltip hidden: ${selector}`);
    return true;
},

/**
 * Hide all DSGT tooltips
 */
hideAllDSGTTooltips() {
    document.querySelectorAll('.dsgt-tooltip-wrapper.dsgt-tooltip-show').forEach(wrapper => {
        wrapper.classList.remove('dsgt-tooltip-show');
    });
    console.log('🚪 All DSGT tooltips closed');
    return true;
},

/**
 * Create dynamic DSGT tooltip
 * @param {HTMLElement} element - Target element
 * @param {string} content - Tooltip content
 * @param {string} position - Tooltip position (top, bottom, left, right)
 * @param {string} color - Tooltip color (primary, success, warning, danger, info)
 */
createDSGTTooltip(element, content, position = 'top', color = 'primary') {
    if (!element || typeof $ === 'undefined') return null;
    
    const tooltip = $(`<div class="dsgt-tooltip dsgt-tooltip-${position} dsgt-tooltip-${color}" style="position: fixed; z-index: 10001;">${content}</div>`);
    $('body').append(tooltip);
    
    $(element).on('mouseenter', function(e) {
        const rect = this.getBoundingClientRect();
        let top, left;
        
        switch(position) {
            case 'top':
                top = rect.top - tooltip.outerHeight() - 8;
                left = rect.left + rect.width / 2 - tooltip.outerWidth() / 2;
                break;
            case 'bottom':
                top = rect.bottom + 8;
                left = rect.left + rect.width / 2 - tooltip.outerWidth() / 2;
                break;
            case 'left':
                top = rect.top + rect.height / 2 - tooltip.outerHeight() / 2;
                left = rect.left - tooltip.outerWidth() - 8;
                break;
            case 'right':
                top = rect.top + rect.height / 2 - tooltip.outerHeight() / 2;
                left = rect.right + 8;
                break;
        }
        
        tooltip.css({ top, left }).addClass('dsgt-tooltip-show');
    }).on('mouseleave', function() {
        tooltip.removeClass('dsgt-tooltip-show');
    });
    
    console.log(`✨ DSGT Dynamic tooltip created for element`);
    return tooltip;
},

/**
 * Initialize DSGT Typography component
 * Sets up interactive typography features
 */
initTypographies() {
    this.setupTypoCopyCodeButtons();
    this.setupTypoHeadingClickToCopy();
    console.log('✅ DSGT Typography component initialized');
},

/**
 * Setup copy code buttons for DSGT code blocks
 */
setupTypoCopyCodeButtons() {
    if (typeof $ === 'undefined') return;
    
    $('.dsgt-typo-pre, .dsgt-typo-code-block').each(function() {
        const $codeBlock = $(this);
        const $copyBtn = $(`
            <button class="dsgt-typo-copy-btn" style="
                position: absolute;
                top: 8px;
                right: 8px;
                padding: 6px 12px;
                background: var(--accent);
                color: white;
                border: none;
                border-radius: 4px;
                font-size: 11px;
                cursor: pointer;
                transition: all 0.2s;
                opacity: 0;
            ">
                <i class="fa-solid fa-copy"></i> Copy
            </button>
        `);
        
        $codeBlock.css('position', 'relative');
        $codeBlock.append($copyBtn);
        
        $codeBlock.on('mouseenter', () => {
            $copyBtn.css('opacity', '1');
        }).on('mouseleave', () => {
            if (!$copyBtn.data('copied')) {
                $copyBtn.css('opacity', '0');
            }
        });
        
        $copyBtn.on('click', function(e) {
            e.preventDefault();
            const code = $codeBlock.text().replace('Copy', '').trim();
            
            navigator.clipboard.writeText(code).then(() => {
                $copyBtn.html('<i class="fa-solid fa-check"></i> Copied!');
                $copyBtn.css({
                    'opacity': '1',
                    'background': 'var(--success)'
                });
                $copyBtn.data('copied', true);
                
                setTimeout(() => {
                    $copyBtn.html('<i class="fa-solid fa-copy"></i> Copy');
                    $copyBtn.css({
                        'opacity': '0',
                        'background': 'var(--accent)'
                    });
                    $copyBtn.data('copied', false);
                }, 2000);
            });
        });
    });
},

/**
 * Setup heading click to copy for DSGT typography
 */
setupTypoHeadingClickToCopy() {
    if (typeof $ === 'undefined') return;
    
    $('.dsgt-heading-showcase h1, .dsgt-heading-showcase h2, .dsgt-heading-showcase h3').on('click', function(e) {
        if ($(e.target).hasClass('dsgt-heading-meta')) return;
        
        const $heading = $(this);
        const text = $heading.text().replace(/\d+px\s*\/\s*\d+/, '').trim();
        
        navigator.clipboard.writeText(text).then(() => {
            const $tooltip = $(`
                <div style="
                    position: absolute;
                    background: var(--success);
                    color: white;
                    padding: 6px 12px;
                    border-radius: 4px;
                    font-size: 11px;
                    z-index: 1000;
                    animation: fadeIn 0.3s;
                ">
                    <i class="fa-solid fa-check"></i> Copied!
                </div>
            `);
            
            $heading.css('position', 'relative');
            $heading.append($tooltip);
            
            setTimeout(() => {
                $tooltip.remove();
            }, 1500);
        });
    });
},

/**
 * Copy text to clipboard utility
 * @param {string} text - Text to copy
 */
copyDSGTTextToClipboard(text) {
    return navigator.clipboard.writeText(text);
},

/**
 * Adjust heading sizes dynamically
 * @param {string} selector - Heading container selector
 * @param {number} change - Size change in pixels
 */
adjustDSGTHeadingsSize(selector, change) {
    const container = document.querySelector(selector);
    if (!container) return false;
    
    const headings = container.querySelectorAll('h1, h2, h3, h4, h5, h6');
    headings.forEach(heading => {
        const currentSize = parseFloat(window.getComputedStyle(heading).fontSize);
        const newSize = currentSize + change;
        heading.style.fontSize = newSize + 'px';
    });
    
    console.log(`📏 DSGT Headings size adjusted by ${change}px`);
    return true;
},

/**
 * Reset heading sizes to original
 * @param {string} selector - Heading container selector
 */
resetDSGTHeadingsSize(selector) {
    const container = document.querySelector(selector);
    if (!container) return false;
    
    const headings = container.querySelectorAll('h1, h2, h3, h4, h5, h6');
    headings.forEach(heading => {
        heading.style.fontSize = '';
    });
    
    console.log('🔄 DSGT Headings size reset to default');
    return true;
},

/**
 * Initialize DSGT Videos component
 * Sets up video modal and playlist interactions
 */
initVideos() {
    this.setupVideoModal();
    this.setupVideoPlaylists();
    this.setupVideoCardClicks();
    console.log('✅ DSGT Videos component initialized');
},

/**
 * Initialize Flatpickr date/time pickers
 */
initFlatpickrs() {
    if (typeof flatpickr === 'undefined') {
        console.log('⚠️ [DSGT] Flatpickr not loaded, skipping');
        return;
    }

    // Initialize all flatpickr inputs
    $('.dsgt-flatpickr').each(function() {
        const $input = $(this);
        const config = {
            locale: 'id',
            dateFormat: 'd/m/Y',
            allowInput: true,
            disableMobile: true
        };
        
        // Check if time picker is enabled
        if ($input.data('show-time') === true || $input.data('enable-time')) {
            config.enableTime = true;
            config.time_24hr = true;
            config.dateFormat = 'd/m/Y H:i';
        }
        
        // Min/Max dates
        if ($input.data('min-date')) {
            config.minDate = $input.data('min-date');
        }
        if ($input.data('max-date')) {
            config.maxDate = $input.data('max-date');
        }
        
        // Week numbers
        if ($input.data('week-numbers') === true) {
            config.weekNumbers = true;
        }
        
        $input.flatpickr(config);
    });
    
    // Initialize inline calendars
    $('.dsgt-flatpickr-inline').each(function() {
        const $container = $(this);
        const config = {
            inline: true,
            locale: 'id',
            dateFormat: 'd/m/Y',
            disableMobile: true
        };
        
        if ($container.data('show-time')) {
            config.enableTime = true;
            config.time_24hr = true;
        }
        
        if ($container.data('multi-select')) {
            config.mode = 'multiple';
        }
        
        if ($container.data('week-numbers') === true) {
            config.weekNumbers = true;
        }
        
        $container.flatpickr(config);
    });
    
    console.log('✅ [DSGT] Flatpickr initialized');
},

/**
 * Setup video modal functionality
 * Handles opening and closing video modal with YouTube embeds
 */
setupVideoModal() {
    if (typeof $ === 'undefined') return;
    
    const modal = document.querySelector('.dsgt-video-modal');
    
    // ESC Key Handler - Block if locked
    $(document).off('keydown.dsgtVideo').on('keydown.dsgtVideo', function(e) {
        if (e.key === 'Escape' || e.key === 'Esc') {
            if (modal && modal.dataset.locked === 'true') {
                console.log('🔒 DSGT Video modal is LOCKED - ESC blocked');
                e.preventDefault();
                e.stopPropagation();
                return false;
            }
            MetroAdmin.closeDSGTVideoModal();
        }
    });
    
    // Backdrop Click Handler - Block ALL clicks if locked
    if (modal) {
        // Remove old handlers
        modal.onclick = null;
        
        // Add new handler with capture phase
        modal.addEventListener('click', function(e) {
            // LOCKED MODE - Block everything
            if (this.dataset.locked === 'true') {
                console.log('%c🔒 LOCKED', 'background: #dc3545; color: white; padding: 2px 6px; border-radius: 3px; font-weight: bold;', '- All clicks blocked on locked modal');
                
                // Visual feedback - flash red border
                this.style.transition = 'box-shadow 0.2s ease';
                this.style.boxShadow = 'inset 0 0 0 4px rgba(220, 53, 69, 0.5)';
                
                setTimeout(() => {
                    this.style.boxShadow = 'none';
                }, 300);
                
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                return false;
            }
            
            // NORMAL MODE - Only close if clicking backdrop (not content)
            if (e.target === this) {
                MetroAdmin.closeDSGTVideoModal();
            }
        }, true); // Use capture phase for maximum control
    }
},

/**
 * Open video modal with YouTube video
 * @param {string} videoId - YouTube video ID
 * @param {boolean} locked - If true, modal cannot be closed by user
 */
openDSGTVideoModal(videoId, locked = false) {
    const modal = document.querySelector('.dsgt-video-modal');
    const iframe = document.querySelector('#videoModalIframe');
    
    console.log('🎬 openDSGTVideoModal called:', { videoId, locked, modalExists: !!modal, iframeExists: !!iframe });
    
    if (modal && iframe) {
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        modal.classList.add('show');
        
        // Set locked mode
        if (locked) {
            console.log('🔒 Setting modal to LOCKED mode');
            modal.classList.add('modal-locked');
            modal.dataset.locked = 'true';
            console.log('✅ Modal classList:', Array.from(modal.classList).join(', '));
            console.log('✅ Modal dataset.locked:', modal.dataset.locked);
            console.log('🔒 DSGT Video modal opened in LOCKED mode: ${videoId}');
            console.log('   - X button: HIDDEN');
            console.log('   - ESC key: BLOCKED');
            console.log('   - Backdrop click: BLOCKED');
            console.log('   - Close only via: MetroAdmin.forceCloseVideoModal()');
        } else {
            console.log('🔓 Setting modal to NORMAL (closable) mode');
            modal.classList.remove('modal-locked');
            modal.dataset.locked = 'false';
            console.log(`🎬 DSGT Video modal opened (closable): ${videoId}`);
        }
        
        document.body.style.overflow = 'hidden';
        return true;
    }
    console.error('❌ DSGT Video modal elements not found');
    return false;
},

/**
 * Open locked video modal (cannot be closed by user)
 * @param {string} videoId - YouTube video ID
 */
openDSGTVideoModalLocked(videoId) {
    console.log('🔑 openDSGTVideoModalLocked called with:', videoId);
    // Call with explicit locked=true parameter
    MetroAdmin.openDSGTVideoModal(videoId, true);
},

/**
 * Force close locked modal (programmatically)
 */
forceCloseVideoModal() {
    const modal = document.querySelector('.dsgt-video-modal');
    const iframe = document.querySelector('#videoModalIframe');
    
    if (modal && iframe) {
        // Remove locked state first
        modal.classList.remove('modal-locked');
        modal.dataset.locked = 'false';
        
        // Then close modal
        modal.classList.remove('show');
        iframe.src = '';
        document.body.style.overflow = '';
        console.log('🔓 DSGT Video modal FORCE CLOSED - locked state removed');
        return true;
    }
    console.error('❌ Cannot force close - modal elements not found');
    return false;
},

/**
 * Close video modal
 * @param {Event} event - Click event (optional)
 */
closeDSGTVideoModal(event) {
    const modal = document.querySelector('.dsgt-video-modal');
    
    // Check if modal is locked - BLOCK ALL CLOSE ATTEMPTS
    if (modal && modal.dataset.locked === 'true') {
        console.log('🔒 DSGT Video modal is LOCKED - close prevented');
        return false;
    }
    
    // If event is provided, check if it's a backdrop click
    if (event && event.target !== event.currentTarget) {
        return;
    }
    
    const iframe = document.querySelector('#videoModalIframe');
    
    if (modal && iframe) {
        modal.classList.remove('show');
        iframe.src = '';
        document.body.style.overflow = '';
        console.log('🎬 DSGT Video modal closed');
        return true;
    }
    return false;
},

/**
 * Setup video playlist interactions
 * Handles active state switching when clicking playlist items
 */
setupVideoPlaylists() {
    if (typeof $ === 'undefined') return;
    
    $('.dsgt-video-playlist-item').on('click', function() {
        $(this).siblings('.dsgt-video-playlist-item').removeClass('active');
        $(this).addClass('active');
        console.log('📋 DSGT Playlist item activated');
    });
},

/**
 * Setup video card click handlers
 * Makes video cards clickable to open modal
 */
setupVideoCardClicks() {
    if (typeof $ === 'undefined') return;
    
    // Only add click handler to cards WITHOUT inline onclick attribute
    // This prevents overriding locked video cards
    $('.dsgt-video-card:not([onclick])').on('click', function() {
        const videoId = $(this).data('video-id') || 'dQw4w9WgXcQ';
        MetroAdmin.openDSGTVideoModal(videoId);
    });
    
    console.log('✅ DSGT Video card clicks setup (skipping cards with inline onclick)');
}
};

// Initialize on DOM ready
$(document).ready(() => {
    MetroAdmin.init();
});

// Keyboard shortcuts for DSGT Image Viewer
$(document).on('keydown', function(e) {
    if (!$('#dsgtImageViewerModal').hasClass('active')) return;
    
    switch(e.key) {
        case 'Escape':
            MetroAdmin.closeDSGTImageViewer();
            break;
        case '+':
        case '=':
            MetroAdmin.zoomDSGTImageIn();
            break;
        case '-':
            MetroAdmin.zoomDSGTImageOut();
            break;
        case '0':
            MetroAdmin.resetDSGTZoom();
            break;
    }
});

// Global Mobile Menu Functions
function openMobileMenu() {
    $('#mobileMenuOverlay').addClass('active');
    $('body').css('overflow', 'hidden');
    setTimeout(() => {
        $('#mobileMenuSearch').focus();
    }, 300);
}

function closeMobileMenu() {
    $('#mobileMenuOverlay').removeClass('active');
    $('body').css('overflow', '');
}

function filterMobileMenu(searchTerm) {
    const items = $('.mobile-menu-item, .mobile-submenu-item');
    
    items.each(function() {
        const text = $(this).text().toLowerCase();
        if (text.includes(searchTerm)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

/**
 * DSGT Avatar Page - Interactive Features
 * Initialize avatar builder and event handlers
 */
$(document).ready(function() {
    // Only run on avatars page
    if ($('#avatarSize').length > 0 || $('#avatarPreview').length > 0) {
        console.log('✨ DSGT Metro Template - Avatars page loaded successfully');
        console.log('💡 Interactive avatar builder ready');
        
        // Avatar builder event handlers
        $('#avatarSize, #avatarStyle, #avatarShape, #avatarStatus, #avatarText').on('change input', function() {
            MetroAdmin.updateAvatarPreview();
        });
        
        // Color picker handler
        $('.color-btn').on('click', function() {
            // Remove active state from all buttons
            $('.color-btn').css('border-color', 'transparent');
            
            // Add active state to clicked button
            $(this).css('border-color', 'var(--text-primary)');
            
            // Store selected color
            window.selectedAvatarColor = $(this).data('color');
            
            // Update preview
            MetroAdmin.updateAvatarPreview();
            
            console.log('🎨 Avatar color selected:', window.selectedAvatarColor || 'default');
        });
        
        // Reset button handler
        $('#resetAvatarBtn').on('click', function() {
            MetroAdmin.resetAvatarPreview();
            
            // Reset color picker
            $('.color-btn').css('border-color', 'transparent');
            $('.color-btn').first().css('border-color', 'var(--text-primary)');
            window.selectedAvatarColor = '';
            
            console.log('🔄 Avatar builder reset to default');
        });
        
        // Initial update
        MetroAdmin.updateAvatarPreview();
        
        // Set initial color button state
        $('.color-btn').first().css('border-color', 'var(--text-primary)');
        window.selectedAvatarColor = '';
        
        // Add tooltip to avatars
        $('.dsgt-avatar').each(function() {
            const title = $(this).attr('title');
            if (title) {
                $(this).attr('data-tooltip', title);
            }
        });
        
        console.log('✅ Avatar interactive features initialized');
    }
});

/**
 * Auto-generate mobile menu from sidebar navigation
 * This ensures mobile menu always matches sidebar content
 */
function generateMobileMenuFromSidebar() {
    const $sidebarNav = $('#sidebarNav');
    const $mobileContent = $('#mobileMenuContent');
    
    if ($sidebarNav.length === 0 || $mobileContent.length === 0) {
        console.warn('⚠️ Sidebar or mobile menu container not found');
        return;
    }
    
    // Clear existing content
    $mobileContent.empty();
    
    // Color mapping for menu icons
    const bgColors = ['bg-primary', 'bg-success', 'bg-info', 'bg-warning', 'bg-danger', 'bg-secondary'];
    let colorIndex = 0;
    
    console.log('🔄 Generating mobile menu from sidebar...');
    
    // Process each nav item in sidebar
    $sidebarNav.find('.nav-list > li').each(function(index) {
        const $li = $(this);
        
        // Handle section headers
        if ($li.hasClass('nav-section')) {
            const sectionText = $li.text().trim();
            $mobileContent.append(`
                <div class="mobile-menu-section-title">${sectionText}</div>
            `);
            console.log(`  📁 Section: ${sectionText}`);
            return;
        }
        
        // Handle nav items
        const $navLink = $li.find('> .nav-link');
        if ($navLink.length === 0) return;
        
        const isActive = $li.hasClass('active');
        const hasSubmenu = $li.hasClass('has-submenu');
        
        // Get icon - try multiple selectors
        let iconHtml = '';
        const $icon = $navLink.find('i.fas, i.fa-solid, i.far, i.fa-regular, svg').first();
        if ($icon.length > 0) {
            iconHtml = $icon.prop('outerHTML');
            console.log(`  ✓ Icon found:`, iconHtml.substring(0, 50));
        } else {
            console.warn(`  ⚠ No icon found for: ${$navLink.find('> span').text()}`);
        }
        
        const menuText = $navLink.find('> span').first().text().trim();
        const href = $navLink.attr('href') || '#';
        const badge = $navLink.find('.nav-badge').length > 0 ? $navLink.find('.nav-badge').prop('outerHTML') : '';
        
        // Get description (use parent section or default)
        const $sectionHeader = $li.prevAll('.nav-section').first();
        const sectionText = $sectionHeader.length > 0 ? $sectionHeader.text().trim() : 'Menu';
        
        if (hasSubmenu) {
            // Create menu group with submenu
            const $submenu = $li.find('> .submenu');
            let submenuItems = '';
            
            $submenu.find('li').each(function() {
                const $subLink = $(this).find('.nav-link');
                const subHref = $subLink.attr('href') || '#';
                const subText = $subLink.find('span').text().trim();
                const subActive = $(this).hasClass('active');
                
                // Check if submenu item has icon
                let subIconHtml = '';
                const $subIcon = $subLink.find('i.fas, i.fa-solid, i.far, i.fa-regular, svg').first();
                if ($subIcon.length > 0) {
                    // Clone the icon from sidebar
                    subIconHtml = $subIcon.prop('outerHTML');
                } else {
                    // Use bullet dot if no icon
                    subIconHtml = '<span class="submenu-bullet">•</span>';
                }
                
                submenuItems += `
                    <a href="${subHref}" class="mobile-submenu-item ${subActive ? 'active' : ''}">
                        ${subIconHtml}
                        <span>${subText}</span>
                    </a>
                `;
            });
            
            const bgColor = bgColors[colorIndex % bgColors.length];
            colorIndex++;
            
            $mobileContent.append(`
                <div class="mobile-menu-group">
                    <div class="mobile-menu-group-header">
                        <div class="mobile-menu-item ${isActive ? 'active' : ''}" data-link="${href}">
                            <div class="mobile-menu-icon ${bgColor}">
                                ${iconHtml}
                            </div>
                            <div class="mobile-menu-text">
                                <div class="mobile-menu-title">${menuText}</div>
                                <div class="mobile-menu-desc">${sectionText}</div>
                            </div>
                            ${badge}
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down"><path d="m6 9 6 6 6-6"></path></svg>
                        </div>
                    </div>
                    <div class="mobile-menu-submenu">
                        ${submenuItems}
                    </div>
                </div>
            `);
            
            console.log(`  📂 Menu (with submenu): ${menuText}`);
        } else {
            // Create simple menu item
            const bgColor = bgColors[colorIndex % bgColors.length];
            colorIndex++;
            
            $mobileContent.append(`
                <div class="mobile-menu-item ${isActive ? 'active' : ''}" data-link="${href}">
                    <div class="mobile-menu-icon ${bgColor}">
                        ${iconHtml}
                    </div>
                    <div class="mobile-menu-text">
                        <div class="mobile-menu-title">${menuText}</div>
                        <div class="mobile-menu-desc">${sectionText}</div>
                    </div>
                    ${badge}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"></path></svg>
                </div>
            `);
            
            console.log(`  📄 Menu: ${menuText}`);
        }
    });
    
    // Add click handlers for menu items
    setupMobileMenuClickHandlers();
    
    console.log('✅ Mobile menu generated from sidebar');
}

/**
 * Setup click handlers for mobile menu items
 */
function setupMobileMenuClickHandlers() {
    // Simple menu items - navigate to link
    $('.mobile-menu-item[data-link]').on('click', function(e) {
        const $item = $(this);
        const $group = $item.closest('.mobile-menu-group');
        
        // If this is a group header, toggle submenu
        if ($group.length > 0) {
            e.preventDefault();
            e.stopPropagation();
            
            const $submenu = $group.find('.mobile-menu-submenu');
            const $arrow = $item.find('svg.lucide-chevron-down, svg.lucide-chevron-right');
            
            if ($submenu.hasClass('open')) {
                $submenu.slideUp(200).removeClass('open');
                $arrow.css('transform', 'rotate(0deg)');
                console.log('🔽 Submenu closed');
            } else {
                $submenu.slideDown(200).addClass('open');
                $arrow.css('transform', 'rotate(180deg)');
                console.log('🔼 Submenu opened');
            }
            return;
        }
        
        // Simple menu item - navigate
        const link = $item.data('link');
        if (link && link !== '#') {
            console.log('🔗 Navigating to:', link);
            window.location.href = link;
        }
    });
    
    // Submenu items - navigate directly
    $('.mobile-submenu-item').on('click', function(e) {
        const href = $(this).attr('href');
        if (href && href !== '#') {
            e.preventDefault();
            console.log('🔗 Navigating to submenu:', href);
            window.location.href = href;
        }
    });
    
    console.log('✅ Mobile menu click handlers setup');
}

/**
 * Setup mobile menu search functionality
 */
function setupMobileMenuSearch() {
    const $searchInput = $('#mobileMenuSearch');
    
    if ($searchInput.length === 0) {
        console.warn('⚠️ Mobile menu search input not found');
        return;
    }
    
    $searchInput.on('input', function() {
        const searchTerm = $(this).val().toLowerCase().trim();
        
        console.log('🔍 Search term:', searchTerm || '(empty)');
        
        if (searchTerm === '') {
            // Show all items when search is empty
            $('.mobile-menu-item').show();
            $('.mobile-menu-submenu').hide().removeClass('open');
            $('.mobile-menu-section-title').show();
            $('.mobile-submenu-item').show();
            console.log('✅ All menu items shown');
            return;
        }
        
        // Hide all first
        $('.mobile-menu-item').hide();
        $('.mobile-menu-section-title').hide();
        $('.mobile-menu-submenu').hide().removeClass('open');
        
        let matchCount = 0;
        
        // Search through section titles and their children
        $('.mobile-menu-section-title').each(function() {
            const $sectionTitle = $(this);
            let sectionHasMatch = false;
            
            // Get all items until next section title
            const $items = $sectionTitle.nextUntil('.mobile-menu-section-title');
            
            $items.each(function() {
                const $item = $(this);
                
                // Check menu groups (with submenus)
                if ($item.hasClass('mobile-menu-group')) {
                    const $header = $item.find('.mobile-menu-item').first();
                    const menuTitle = $header.find('.mobile-menu-title').text().toLowerCase();
                    const menuDesc = $header.find('.mobile-menu-desc').text().toLowerCase();
                    
                    let groupHasMatch = menuTitle.includes(searchTerm) || menuDesc.includes(searchTerm);
                    
                    // Check submenu items
                    $item.find('.mobile-submenu-item').each(function() {
                        const subText = $(this).text().toLowerCase();
                        if (subText.includes(searchTerm)) {
                            $(this).show();
                            groupHasMatch = true;
                        } else {
                            $(this).hide();
                        }
                    });
                    
                    if (groupHasMatch) {
                        $header.show();
                        $item.find('.mobile-menu-submenu').slideDown(200).addClass('open');
                        sectionHasMatch = true;
                        matchCount++;
                    }
                }
                // Check simple menu items
                else if ($item.hasClass('mobile-menu-item')) {
                    const menuTitle = $item.find('.mobile-menu-title').text().toLowerCase();
                    const menuDesc = $item.find('.mobile-menu-desc').text().toLowerCase();
                    
                    if (menuTitle.includes(searchTerm) || menuDesc.includes(searchTerm)) {
                        $item.show();
                        sectionHasMatch = true;
                        matchCount++;
                    }
                }
            });
            
            // Show section title only if it has matching children
            if (sectionHasMatch) {
                $sectionTitle.show();
            }
        });
        
        console.log(`✅ Found ${matchCount} matching menu items`);
    });
    
    console.log('✅ Mobile menu search functionality setup');
}

// Generate mobile menu on page load
$(document).ready(function() {
    generateMobileMenuFromSidebar();
    setupMobileMenuSearch();
    initAdvancedSearchFilters();
});

/* ============================================
   DSGT ADVANCED SEARCH FILTER COMPONENT
   ============================================ */

function initAdvancedSearchFilters() {
    console.log('🔍 [DSGT] Advanced Search Filter initializing');
    
    // Initialize all advanced search toggles
    $('.dsgt-advanced-search-toggle').each(function() {
        const $toggle = $(this);
        const targetId = $toggle.attr('href');
        const $icon = $toggle.find('.fa-chevron-down');
        const $filterForm = $(targetId);
        
        if ($filterForm.length === 0) return;
        
        // Set initial state
        let isExpanded = true;
        $filterForm.addClass('dsgt-filter-expanded');
        
        // Toggle click handler
        $toggle.on('click', function(e) {
            e.preventDefault();
            
            if (isExpanded) {
                // Collapse
                $filterForm.removeClass('dsgt-filter-expanded').addClass('dsgt-filter-collapsed');
                if ($icon) $icon.css('transform', 'rotate(-90deg)');
                isExpanded = false;
            } else {
                // Expand
                $filterForm.removeClass('dsgt-filter-collapsed').addClass('dsgt-filter-expanded');
                if ($icon) $icon.css('transform', 'rotate(0deg)');
                isExpanded = true;
            }
        });
    });
    
    console.log('✅ [DSGT] Advanced Search Filter initialized');
}

// Toggle date inputs for BETWEEN operator
function dsgtToggleDateInputs(operatorId, containerId, input1Id) {
    const operator = document.getElementById(operatorId)?.value;
    const container = document.getElementById(containerId);
    
    if (!operator || !container) return;
    
    // Check if second date input already exists
    let dateInput2 = container.querySelector('.dsgt-filter-input.dsgt-date-input-2');
    let separator = container.querySelector('.dsgt-date-separator');
    
    if (operator === 'BETWEEN') {
        // Add second date input if not exists
        if (!dateInput2) {
            // Create separator "to"
            separator = document.createElement('span');
            separator.className = 'dsgt-date-separator';
            separator.textContent = 'to';
            
            // Create second date input with flatpickr
            dateInput2 = document.createElement('input');
            dateInput2.type = 'text';
            dateInput2.className = 'dsgt-filter-input dsgt-date-input-2 dsgt-flatpickr';
            dateInput2.setAttribute('data-date-format', 'd/m/Y');
            dateInput2.placeholder = 'Select end date...';
            
            // Append to container
            container.appendChild(separator);
            container.appendChild(dateInput2);
            
            // Initialize flatpickr for new element
            if (typeof flatpickr !== 'undefined') {
                flatpickr(dateInput2, {
                    locale: 'id',
                    dateFormat: 'd/m/Y',
                    allowInput: true,
                    disableMobile: true
                });
            }
        }
    } else {
        // Remove second date input if exists
        if (dateInput2) {
            // Destroy flatpickr instance before removing
            if (dateInput2._flatpickr) {
                dateInput2._flatpickr.destroy();
            }
            dateInput2.remove();
        }
        if (separator) separator.remove();
    }
}

// Reset filter form
function dsgtResetFilterForm(formId, dateOperatorId) {
    const form = document.getElementById(formId);
    if (form) {
        form.reset();
        
        // Reset date inputs if date operator exists
        if (dateOperatorId) {
            const operator = document.getElementById(dateOperatorId);
            if (operator) {
                dsgtToggleDateInputs(
                    dateOperatorId,
                    operator.closest('.dsgt-filter-inputs')?.id || '',
                    ''
                );
            }
        }
    }
}
