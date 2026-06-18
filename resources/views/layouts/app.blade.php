<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Swantara Admin - Windows 11 Dashboard')</title>
    
    <!-- Prevent FOUC (Flash of Unstyled Content) - Apply theme before render -->
    <script>
        (function() {
            try {
                var theme = localStorage.getItem('metro-theme');
                if (theme === 'dark') {
                    document.documentElement.setAttribute('data-theme', 'dark');
                }
            } catch (e) {}
        })();
    </script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Metro UI -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/metro-ui/metro.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animate.min.css') }}">
    
    <!-- NProgress -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/nprogress/nprogress.min.css') }}">
    
    <!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swal-custom.css') }}">
    
    @stack('styles')
</head>
<body>
    <!-- App Container -->
    <div class="app-container">
        
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Sidebar Overlay (Mobile) -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- Main Content Area -->
        <div class="app-main">
            <!-- Top Navbar -->
            @include('partials.navbar')

            <!-- Page Content -->
            <main class="app-content">
                @yield('content')
                
                <!-- Footer -->
                <footer class="app-footer">
                    <div class="footer-content">
                        <div class="footer-left">
                            <span>&copy; {{ date('Y') }}, made with <i class="fa-solid fa-heart heartbeat-icon"></i> by <strong>Swantara</strong></span>
                        </div>
                        <div class="footer-right">
                            <a href="#">License</a>
                            <a href="#">More Themes</a>
                            <a href="#">Documentation</a>
                            <a href="#">Support</a>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </div>

    <!-- Command Palette -->
    @include('partials.command-palette')

    <!-- Mobile Menu Popup -->
    @include('partials.mobile-menu')


    <!-- Scripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metro-ui/metro.js') }}"></script>
    <script src="{{ asset('assets/plugins/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nprogress/nprogress.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/chart.umd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
    
    <!-- SweetAlert2 Custom Config -->
    <script src="{{ asset('assets/js/swal-config.js') }}"></script>
    
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/touch-spin.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
