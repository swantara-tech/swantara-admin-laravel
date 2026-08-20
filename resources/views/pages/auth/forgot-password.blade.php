<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Metro Admin</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/swantara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swal-custom.css') }}">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body, .login-page {
            overflow-y: auto !important; /* Mengizinkan scroll vertikal jika perlu */
            height: auto !important;     /* Membiarkan tinggi menyesuaikan konten */
            min-height: 100vh;           /* Tetap memastikan tinggi minimal selayar penuh */
        }
        
        .forgot-page {
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

        .forgot-page::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1920&q=80') center/cover;
            z-index: 0;
        }

        .forgot-page::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(2px);
            z-index: 1;
        }

        .forgot-card {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 440px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-radius: 16px;
            padding: 48px 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3), 0 0 0 1px rgba(255,255,255,0.2);
            opacity: 0;
            transform: translateY(30px) scale(0.95);
        }

        .forgot-icon {
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

        .forgot-icon i {
            font-size: 36px;
            color: #fff;
        }

        .forgot-title {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .forgot-subtitle {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 32px;
            line-height: 1.5;
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

        .reset-btn {
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

        .reset-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(0, 120, 212, 0.4);
        }

        .reset-btn:active {
            transform: translateY(0);
        }

        .reset-btn.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .reset-btn .spinner {
            display: none;
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
            margin: 0 auto;
        }

        .reset-btn.loading .btn-text { display: none; }
        .reset-btn.loading .spinner { display: block; }

        .back-link {
            text-align: center;
            margin-top: 24px;
            font-size: 13px;
        }

        .back-link a {
            color: #0078D4;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .back-link a:hover {
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
            .forgot-card {
                padding: 32px 24px;
            }
        }
        
        /* Fix SweetAlert scroll */
        .swal2-html-container {
            max-height: 70vh !important;
            overflow-y: auto !important;
        }
    </style>
</head>
<body>
    <div class="forgot-page">
        <div class="particles" id="particles"></div>
        
        <div class="forgot-card" id="forgotCard">
            <div class="forgot-icon">
                <i class="fa-solid fa-key"></i>
            </div>
            <h1 class="forgot-title">Lupa Password?</h1>
            <p class="forgot-subtitle">
                Tidak masalah! Masukkan email Anda dan kami akan mengirimkan link untuk reset password.
            </p>

            <form id="forgotForm" novalidate>
                @csrf
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="Masukkan email terdaftar" value="{{ old('email') }}" required>
                        <i class="fa-solid fa-envelope field-icon"></i>
                    </div>
                    <span class="error-message" id="emailErrorMessage"></span>
                </div>

                <button type="submit" class="reset-btn" id="resetBtn">
                    <span class="btn-text">Kirim Link Reset</span>
                    <div class="spinner"></div>
                </button>
            </form>

            <div class="back-link">
                <a href="{{ route('login') }}">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali ke Login
                </a>
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
            $('#forgotCard').css({
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

            // AJAX Forgot Password Form Submit
            $('#forgotForm').on('submit', function(e) {
                e.preventDefault();
                
                // Clear previous errors
                $('.form-group').removeClass('error');
                $('.error-message').hide();
                
                // Get form data
                const formData = {
                    _token: $('input[name="_token"]').val(),
                    email: $('#email').val()
                };
                
                // Client-side validation
                let hasError = false;
                
                if (!formData.email) {
                    $('#email').closest('.form-group').addClass('error');
                    $('#emailErrorMessage').text('Email wajib diisi').show();
                    hasError = true;
                } else if (!isValidEmail(formData.email)) {
                    $('#email').closest('.form-group').addClass('error');
                    $('#emailErrorMessage').text('Format email tidak valid').show();
                    hasError = true;
                }
                
                if (hasError) return;
                
                // Show loading
                const $btn = $('#resetBtn');
                $btn.addClass('loading');
                
                // AJAX request
                $.ajax({
                    url: '{{ route('password.email') }}',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Email Terkirim!',
                                text: response.message || 'Silakan cek email Anda untuk link reset password',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = '{{ route('login') }}';
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message || 'Terjadi kesalahan'
                            });
                            $btn.removeClass('loading');
                        }
                    },
                    error: function(xhr) {
                        $btn.removeClass('loading');
                        
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            
                            if (errors.email) {
                                $('#email').closest('.form-group').addClass('error');
                                $('#emailErrorMessage').text(errors.email[0]).show();
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
            
            // Email validation helper
            function isValidEmail(email) {
                const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }
        });
    </script>
</body>
</html>
