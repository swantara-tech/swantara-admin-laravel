<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Metro Admin</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swal-custom.css') }}">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body, .login-page {
            overflow-y: auto !important; /* Mengizinkan scroll vertikal jika perlu */
            height: auto !important;     /* Membiarkan tinggi menyesuaikan konten */
            min-height: 100vh;           /* Tetap memastikan tinggi minimal selayar penuh */
        }
        .register-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            font-family: 'Segoe UI', 'Inter', sans-serif;
            padding: 20px;
        }

        .register-page::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1920&q=80') center/cover;
            z-index: 0;
        }

        .register-page::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(2px);
            z-index: 1;
        }

        .register-card {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 480px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-radius: 16px;
            padding: 48px 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3), 0 0 0 1px rgba(255,255,255,0.2);
            opacity: 0;
            transform: translateY(30px) scale(0.95);
        }

        .register-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0078D4, #00BCF2);
            box-shadow: 0 8px 24px rgba(0, 120, 212, 0.3);
        }

        .register-avatar i {
            font-size: 36px;
            color: #fff;
        }

        .register-title {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .register-subtitle {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 32px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #444;
            margin-bottom: 6px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper i.field-icon {
            position: absolute;
            left: 14px;
            color: #999;
            font-size: 14px;
            transition: color 0.2s;
            pointer-events: none;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 42px 12px 42px;
            border: 2px solid #e8e8e8;
            border-radius: 10px;
            font-size: 14px;
            font-family: inherit;
            background: rgba(255,255,255,0.8);
            transition: all 0.25s ease;
            outline: none;
        }

        .input-wrapper input:focus {
            border-color: #0078D4;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(0, 120, 212, 0.1);
        }

        .input-wrapper input:focus ~ i.field-icon {
            color: #0078D4;
        }

        .input-wrapper .toggle-password {
            position: absolute;
            right: 14px;
            background: none;
            border: none;
            cursor: pointer;
            color: #999;
            font-size: 14px;
            padding: 4px;
            z-index: 1;
        }

        .input-wrapper .toggle-password:hover {
            color: #0078D4;
        }

        .password-strength {
            margin-top: 8px;
            height: 4px;
            background: #e8e8e8;
            border-radius: 2px;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .password-strength-bar.weak { width: 33%; background: #E81123; }
        .password-strength-bar.medium { width: 66%; background: #FF8C00; }
        .password-strength-bar.strong { width: 100%; background: #0078D4; }

        .password-strength-text {
            font-size: 11px;
            margin-top: 4px;
            color: #666;
        }

        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 24px;
            font-size: 13px;
            color: #555;
        }
        
        .terms-checkbox a {
            color: #0078D4;
            text-decoration: none;
            font-weight: 500;
            pointer-events: auto !important;
        }

        .terms-checkbox a:hover {
            text-decoration: underline;
        }

        .register-btn {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #0078D4 0%, #005a9e 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .register-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(0, 120, 212, 0.4);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        .register-btn.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .register-btn .spinner {
            display: none;
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
            margin: 0 auto;
        }

        .register-btn.loading .btn-text { display: none; }
        .register-btn.loading .spinner { display: block; }

        .register-footer {
            text-align: center;
            margin-top: 24px;
            font-size: 13px;
            color: #666;
        }

        .register-footer a {
            color: #0078D4;
            text-decoration: none;
            font-weight: 600;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        .login-link {
            text-align: center;
            margin-top: 16px;
            font-size: 13px;
            color: #666;
        }

        .login-link a {
            color: #0078D4;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            font-size: 12px;
            color: #E81123;
            margin-top: 4px;
            display: none;
        }

        .form-group.error .error-message { display: block; }
        .form-group.error .input-wrapper input { border-color: #E81123; }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Floating particles */
        .particles {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 1;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 32px 24px;
            }
        }
        
        /* Fix SweetAlert scroll */
        .swal2-html-container {
            max-height: 70vh !important;
            overflow-y: auto !important;
        }
        
        #termsContent,
        #privacyContent {
            max-height: 60vh !important;
            overflow-y: auto !important;
            scrollbar-width: thin;
            scrollbar-color: #0078D4 #f0f0f0;
        }
        
        #termsContent::-webkit-scrollbar,
        #privacyContent::-webkit-scrollbar {
            width: 8px;
        }
        
        #termsContent::-webkit-scrollbar-track,
        #privacyContent::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 4px;
        }
        
        #termsContent::-webkit-scrollbar-thumb,
        #privacyContent::-webkit-scrollbar-thumb {
            background: #0078D4;
            border-radius: 4px;
        }
        
        #termsContent::-webkit-scrollbar-thumb:hover,
        #privacyContent::-webkit-scrollbar-thumb:hover {
            background: #005a9e;
        }
    </style>
</head>
<body>
    <div class="register-page">
        <div class="particles" id="particles"></div>
        
        <div class="register-card" id="registerCard">
            <div class="register-avatar">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <h1 class="register-title">Buat Akun Baru</h1>
            <p class="register-subtitle">Daftar untuk mengakses Metro Admin Dashboard</p>

            <form id="registerForm" novalidate>
                @csrf
                
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <div class="input-wrapper">
                        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required>
                        <i class="fa-solid fa-user field-icon"></i>
                    </div>
                    <span class="error-message" id="nameErrorMessage"></span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required>
                        <i class="fa-solid fa-envelope field-icon"></i>
                    </div>
                    <span class="error-message" id="emailErrorMessage"></span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" required>
                        <i class="fa-solid fa-lock field-icon"></i>
                        <button type="button" class="toggle-password" data-target="password">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="passwordStrengthBar"></div>
                    </div>
                    <div class="password-strength-text" id="passwordStrengthText"></div>
                    <span class="error-message" id="passwordErrorMessage"></span>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password" required>
                        <i class="fa-solid fa-lock field-icon"></i>
                        <button type="button" class="toggle-password" data-target="password_confirmation">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    <span class="error-message" id="password_confirmationErrorMessage"></span>
                </div>

                <label class="terms-checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <span>Saya setuju dengan <a href="#" id="showTerms">Syarat & Ketentuan</a> dan <a href="#" id="showPrivacy">Kebijakan Privasi</a></span>
                </label>

                <button type="submit" class="register-btn" id="registerBtn">
                    <span class="btn-text">Daftar Sekarang</span>
                    <div class="spinner"></div>
                </button>
            </form>

            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
            </div>

            <div class="register-footer">
                &copy; {{ date('Y') }} Metro Admin. Built with Fluent Design.
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- SweetAlert2 Custom Config (Global) -->
    <script src="{{ asset('assets/js/swal-config.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            // Animate card entrance with jQuery
            $('#registerCard').css({
                'opacity': 0,
                'transform': 'translateY(30px) scale(0.95)'
            }).animate({
                opacity: 1
            }, {
                duration: 700,
                step: function(now, fx) {
                    if (fx.prop === 'opacity') {
                        const progress = now;
                        const translateY = 30 * (1 - progress);
                        const scale = 0.95 + (0.05 * progress);
                        $(this).css('transform', `translateY(${translateY}px) scale(${scale})`);
                    }
                },
                easing: 'swing'
            });

            // Create particles
            const particlesContainer = document.getElementById('particles');
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particlesContainer.appendChild(particle);

                // Animate particles with jQuery
                function animateParticle($p) {
                    const duration = (Math.random() * 8000) + 5000;
                    $p.animate({
                        opacity: 0
                    }, {
                        duration: duration,
                        step: function(now) {
                            const progress = 1 - (now / 1);
                            const y = -window.innerHeight * progress;
                            const x = (Math.random() - 0.5) * 200 * progress;
                            $(this).css({
                                'transform': `translate(${x}px, ${y}px)`,
                                'opacity': now
                            });
                        },
                        complete: function() {
                            $(this).css({
                                'top': Math.random() * 100 + '%',
                                'left': Math.random() * 100 + '%',
                                'transform': 'translate(0, 0)',
                                'opacity': 1
                            });
                            animateParticle($(this));
                        }
                    });
                }
                
                animateParticle($(particle));
            }

            // Toggle password visibility
            $('.toggle-password').on('click', function() {
                const targetId = $(this).data('target');
                const $input = $('#' + targetId);
                const $icon = $(this).find('i');
                
                if ($input.attr('type') === 'password') {
                    $input.attr('type', 'text');
                    $icon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    $input.attr('type', 'password');
                    $icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
            
            // Show Terms & Conditions
            let termsOpened = false;
            let privacyOpened = false;
            
            $(document).on('click', '#showTerms', function(e) {
                e.preventDefault();
                termsOpened = true;
                openTermsPopup();
            });
            
            // Open Terms Popup
            function openTermsPopup() {
                Swal.fire({
                    title: 'Syarat & Ketentuan',
                    html: `
                        <div id="termsContent" style="text-align: left; max-height: 60vh; overflow-y: auto; padding: 10px;">
                            <h3 style="color: #0078D4; margin-bottom: 16px;">1. Penerimaan Syarat</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Dengan mengakses dan menggunakan Metro Admin Dashboard, Anda menerima dan menyetujui untuk terikat oleh syarat dan ketentuan berikut.</p>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">2. Akun dan Keamanan</h3>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Anda bertanggung jawab untuk menjaga kerahasiaan akun Anda</li>
                                <li>Anda harus memberikan informasi yang akurat dan lengkap</li>
                                <li>Anda bertanggung jawab atas semua aktivitas yang terjadi di akun Anda</li>
                                <li>Segera laporkan jika ada penggunaan yang tidak sah</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">3. Penggunaan yang Diizinkan</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Anda setuju untuk tidak menggunakan platform ini untuk:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Kegiatan ilegal atau tidak sah</li>
                                <li>Melanggar hak kekayaan intelektual pihak lain</li>
                                <li>Menyebarkan malware atau konten berbahaya</li>
                                <li>Mengakses data pengguna lain tanpa izin</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">4. Batasan Tanggung Jawab</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Metro Admin tidak bertanggung jawab atas:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Kehilangan data akibat kelalaian pengguna</li>
                                <li>Gangguan layanan yang disebabkan oleh force majeure</li>
                                <li>Kerugian tidak langsung yang timbul dari penggunaan platform</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">5. Perubahan Syarat</h3>
                            <p style="line-height: 1.6;">Kami berhak mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan efektif setelah dipublikasikan di platform.</p>
                        </div>
                    `,
                    confirmButtonText: 'Saya Mengerti',
                    confirmButtonColor: '#0078D4',
                    width: '700px'
                });
            }
            
            // Show Privacy Policy
            $(document).on('click', '#showPrivacy', function(e) {
                e.preventDefault();
                privacyOpened = true;
                openPrivacyPopup();
            });
            
            // Open Privacy Popup
            function openPrivacyPopup() {
                Swal.fire({
                    title: 'Kebijakan Privasi',
                    html: `
                        <div id="privacyContent" style="text-align: left; max-height: 60vh; overflow-y: auto; padding: 10px;">
                            <h3 style="color: #0078D4; margin-bottom: 16px;">1. Informasi yang Kami Kumpulkan</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Kami mengumpulkan informasi yang Anda berikan saat registrasi:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Nama lengkap</li>
                                <li>Alamat email</li>
                                <li>Data penggunaan platform</li>
                                <li>Log aktivitas sistem</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">2. Bagaimana Kami Menggunakan Informasi</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Informasi Anda digunakan untuk:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Menyediakan dan meningkatkan layanan</li>
                                <li>Verifikasi identitas dan keamanan akun</li>
                                <li>Mengirim notifikasi penting</li>
                                <li>Analitik dan pengembangan fitur</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">3. Perlindungan Data</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Kami menerapkan langkah-langkah keamanan:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Enkripsi password dengan bcrypt</li>
                                <li>Secure socket layer (SSL) encryption</li>
                                <li>Regular security audits</li>
                                <li>Access control dan authentication</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">4. Berbagi Informasi</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Kami TIDAK menjual atau menyewakan data pribadi Anda. Informasi hanya dibagikan kepada:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Penyedia layanan yang membantu operasional kami</li>
                                <li>Aparat hukum jika diwajibkan oleh hukum</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">5. Hak Anda</h3>
                            <p style="margin-bottom: 12px; line-height: 1.6;">Anda memiliki hak untuk:</p>
                            <ul style="margin-bottom: 12px; padding-left: 20px; line-height: 1.8;">
                                <li>Mengakses data pribadi Anda</li>
                                <li>Memperbarui atau mengoreksi informasi</li>
                                <li>Menghapus akun dan data Anda</li>
                                <li>Menarik persetujuan pengolahan data</li>
                            </ul>
                            
                            <h3 style="color: #0078D4; margin-bottom: 16px;">6. Kontak</h3>
                            <p style="line-height: 1.6;">Untuk pertanyaan tentang kebijakan privasi, hubungi: <strong>privacy@metroadmin.com</strong></p>
                        </div>
                    `,
                    confirmButtonText: 'Saya Mengerti',
                    confirmButtonColor: '#0078D4',
                    width: '700px'
                });
            }
            
            // Check if both terms and privacy have been opened
            function checkTermsEnabled() {
                // No longer needed - simple check
            }
            
            // Intercept checkbox click
            $('#terms').on('click', function(e) {
                if ($(this).prop('checked')) {
                    // User is checking - verify if they've opened both
                    if (!termsOpened || !privacyOpened) {
                        e.preventDefault();
                        $(this).prop('checked', false); // Uncheck it
                        
                        // Show which document needs to be opened
                        if (!termsOpened && !privacyOpened) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Baca Syarat & Ketentuan',
                                html: '<p>Silakan buka dan baca kedua dokumen berikut:</p><ul style="text-align: left;"><li>Syarat & Ketentuan</li><li>Kebijakan Privasi</li></ul>',
                                confirmButtonText: 'Buka Sekarang',
                                confirmButtonColor: '#0078D4'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    openTermsPopup();
                                }
                            });
                        } else if (!termsOpened) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Baca Syarat & Ketentuan',
                                html: '<p>Silakan buka dan baca Syarat & Ketentuan terlebih dahulu.</p>',
                                confirmButtonText: 'Buka Sekarang',
                                confirmButtonColor: '#0078D4'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    openTermsPopup();
                                }
                            });
                        } else if (!privacyOpened) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Baca Kebijakan Privasi',
                                html: '<p>Silakan buka dan baca Kebijakan Privasi terlebih dahulu.</p>',
                                confirmButtonText: 'Buka Sekarang',
                                confirmButtonColor: '#0078D4'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    openPrivacyPopup();
                                }
                            });
                        }
                    }
                }
            });

            // Password strength checker
            $('#password').on('input', function() {
                const password = $(this).val();
                const $bar = $('#passwordStrengthBar');
                const $text = $('#passwordStrengthText');
                
                let strength = 0;
                
                if (password.length >= 8) strength++;
                if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
                if (password.match(/[0-9]/)) strength++;
                if (password.match(/[^a-zA-Z0-9]/)) strength++;
                
                $bar.removeClass('weak medium strong');
                
                if (password.length === 0) {
                    $text.text('');
                } else if (strength <= 1) {
                    $bar.addClass('weak');
                    $text.text('Lemah').css('color', '#E81123');
                } else if (strength === 2 || strength === 3) {
                    $bar.addClass('medium');
                    $text.text('Sedang').css('color', '#FF8C00');
                } else {
                    $bar.addClass('strong');
                    $text.text('Kuat').css('color', '#107C10');
                }
            });

            // AJAX Register Form Submit
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                
                // Clear previous errors
                $('.form-group').removeClass('error');
                $('.error-message').hide();
                
                // Get form data
                const formData = {
                    _token: $('input[name="_token"]').val(),
                    name: $('#name').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    password_confirmation: $('#password_confirmation').val(),
                    terms: $('#terms').is(':checked') ? 1 : 0
                };
                
                // Client-side validation
                let hasError = false;
                
                if (!formData.name) {
                    $('#name').closest('.form-group').addClass('error');
                    $('#nameErrorMessage').text('Nama wajib diisi').show();
                    hasError = true;
                }
                
                if (!formData.email) {
                    $('#email').closest('.form-group').addClass('error');
                    $('#emailErrorMessage').text('Email wajib diisi').show();
                    hasError = true;
                }
                
                if (!formData.password) {
                    $('#password').closest('.form-group').addClass('error');
                    $('#passwordErrorMessage').text('Password wajib diisi').show();
                    hasError = true;
                } else if (formData.password.length < 8) {
                    $('#password').closest('.form-group').addClass('error');
                    $('#passwordErrorMessage').text('Password minimal 8 karakter').show();
                    hasError = true;
                }
                
                if (formData.password !== formData.password_confirmation) {
                    $('#password_confirmation').closest('.form-group').addClass('error');
                    $('#password_confirmationErrorMessage').text('Konfirmasi password tidak cocok').show();
                    hasError = true;
                }
                
                if (!formData.terms) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Syarat & Ketentuan',
                        text: 'Anda harus menyetujui Syarat & Ketentuan untuk melanjutkan'
                    });
                    hasError = true;
                }
                
                if (hasError) return;
                
                // Show loading
                const $btn = $('#registerBtn');
                $btn.addClass('loading');
                
                // AJAX request
                $.ajax({
                    url: '{{ route('register.submit') }}',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Registrasi Berhasil!',
                                text: response.message || 'Akun Anda telah berhasil dibuat',
                                showConfirmButton: true,
                                confirmButtonText: 'Login Sekarang'
                            }).then(() => {
                                window.location.href = response.redirect || '{{ route('login') }}';
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Registrasi Gagal',
                                text: response.message || 'Terjadi kesalahan'
                            });
                            $btn.removeClass('loading');
                        }
                    },
                    error: function(xhr) {
                        $btn.removeClass('loading');
                        
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            
                            if (errors.name) {
                                $('#name').closest('.form-group').addClass('error');
                                $('#nameErrorMessage').text(errors.name[0]).show();
                            }
                            
                            if (errors.email) {
                                $('#email').closest('.form-group').addClass('error');
                                $('#emailErrorMessage').text(errors.email[0]).show();
                            }
                            
                            if (errors.password) {
                                $('#password').closest('.form-group').addClass('error');
                                $('#passwordErrorMessage').text(errors.password[0]).show();
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Terjadi kesalahan pada server'
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
