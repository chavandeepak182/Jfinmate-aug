@include('dhara-jfin.layout.header')





    
    <!-- Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->

    <style>
   

        /* =========================================================
           LOGIN SECTION - SPLIT LAYOUT
           ========================================================= */
        .login-wrapper {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            justify-content: center;
           padding: 137px 158px;
            background: linear-gradient(135deg, #f0f4ff 0%, #e8edf5 100%);
            position: relative;
            overflow: hidden;
        }

        .login-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(103, 126, 255, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }

        .login-wrapper::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(103, 126, 255, 0.03) 0%, transparent 70%);
            border-radius: 50%;
        }

        .login-card {
            width: 100%;
            max-width: 1000px;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            display: flex;
            overflow: hidden;
            position: relative;
            z-index: 1;
            animation: slideUp 0.6s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== LEFT SIDE - IMAGE ===== */
        .login-image {
            flex: 0 0 50%;
            background: linear-gradient(135deg, #677eff, #5a6ee0);
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 500px;
        }

        .login-image::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -30%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .login-image::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -30%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 50%;
        }

        .login-image .brand-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .login-image .brand-icon i {
            font-size: 40px;
            color: #fff;
        }

        .login-image h1 {
            font-size: 32px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
            letter-spacing: 1px;
        }

        .login-image .tagline {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .login-image .features {
            display: flex;
            flex-direction: column;
            gap: 14px;
            width: 100%;
            max-width: 320px;
            position: relative;
            z-index: 1;
        }

        .login-image .features .feature-item {
            display: flex;
            align-items: center;
            gap: 14px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            font-weight: 400;
            padding: 12px 18px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: 0.3s ease;
        }

        .login-image .features .feature-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .login-image .features .feature-item i {
            font-size: 20px;
            color: #fff;
            width: 30px;
            text-align: center;
        }

        /* ===== RIGHT SIDE - FORM ===== */
        .login-form {
            flex: 0 0 50%;
            padding: 45px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }

        .login-form .form-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .login-form .form-header .form-logo-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #677eff, #5a6ee0);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 14px;
            color: white;
            font-size: 28px;
            box-shadow: 0 8px 25px rgba(103, 126, 255, 0.3);
        }

        .login-form .form-header h2 {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .login-form .form-header p {
            font-size: 14px;
            color: #888;
            font-weight: 300;
        }

        /* Login Type Toggle */
        .login-type-toggle {
            display: flex;
            background: #f5f7fa;
            border-radius: 12px;
            padding: 4px;
            margin-bottom: 22px;
            border: 1px solid #eef2f7;
        }

        .login-type-toggle .toggle-option {
            flex: 1;
            padding: 10px 15px;
            text-align: center;
            font-size: 13px;
            font-weight: 500;
            color: #888;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s ease;
            border: none;
            background: transparent;
        }

        .login-type-toggle .toggle-option.active {
            background: #ffffff;
            color: #677eff;
            box-shadow: 0 2px 15px rgba(103, 126, 255, 0.15);
        }

        .login-type-toggle .toggle-option:hover:not(.active) {
            color: #555;
        }

        .login-type-toggle .toggle-option i {
            margin-right: 8px;
        }

        /* Form Fields */
        .form-group {
            margin-bottom: 18px;
            position: relative;
        }

        .form-group label {
            font-size: 13px;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }

        .form-group .input-group-custom {
            position: relative;
        }

        .form-group .input-group-custom .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
            font-size: 18px;
            z-index: 2;
        }

        .form-group .input-group-custom input {
            width: 100%;
            padding: 14px 45px 14px 48px;
            border: 2px solid #eef2f7;
            border-radius: 12px;
            font-size: 14px;
            color: #333;
            transition: 0.3s ease;
            background: #fafbfc;
            height: 52px;
        }

        .form-group .input-group-custom input:focus {
            border-color: #677eff;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(103, 126, 255, 0.1);
            outline: none;
        }

        .form-group .input-group-custom input::placeholder {
            color: #bbb;
            font-weight: 300;
        }

        .form-group .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
            font-size: 18px;
            z-index: 2;
            transition: 0.3s ease;
        }

        .form-group .password-toggle:hover {
            color: #677eff;
        }

        .form-group .text-danger {
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }

        /* OTP Field (hidden by default) */
        #otp_field {
            display: none;
        }

        /* Remember Me & Forgot Password */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 16px 0 22px;
        }

        .form-options .form-check {
            display: flex;
            align-items: center;
        }

        .form-options .form-check input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #677eff;
            margin-right: 8px;
            cursor: pointer;
        }

        .form-options .form-check label {
            font-size: 13px;
            color: #666;
            cursor: pointer;
        }

        .form-options .forgot-link {
            font-size: 13px;
            color: #677eff;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .form-options .forgot-link:hover {
            color: #5a6ee0;
            text-decoration: underline;
        }

        /* Login Button */
        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #677eff, #5a6ee0);
            color: #ffffff;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.3s ease;
            text-transform: uppercase;
            height: 52px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(103, 126, 255, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .btn-login i {
            margin-right: 10px;
        }

        /* Sign Up Link */
        .signup-link {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
            color: #888;
        }

        .signup-link a {
            color: #677eff;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .signup-link a:hover {
            color: #5a6ee0;
            text-decoration: underline;
        }

        /* Alerts */
        .alert-custom {
            padding: 12px 18px;
            border-radius: 12px;
            margin-bottom: 16px;
            font-size: 13px;
            border: none;
            position: relative;
            animation: slideDown 0.4s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-custom.alert-danger {
            background: #fee8e8;
            color: #c0392b;
            border-left: 4px solid #c0392b;
        }

        .alert-custom.alert-success {
            background: #e8f5e9;
            color: #2e7d32;
            border-left: 4px solid #2e7d32;
        }

        .alert-custom .close-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 20px;
            color: inherit;
            cursor: pointer;
            opacity: 0.6;
            transition: 0.3s ease;
        }

        .alert-custom .close-btn:hover {
            opacity: 1;
        }

        .alert-custom ul {
            margin: 0;
            padding-left: 20px;
        }

        /* =========================================================
           RESPONSIVE
           ========================================================= */

        @media (max-width: 991px) {
            .login-card {
                max-width: 600px;
                flex-direction: column;
            }

            .login-image {
                flex: 0 0 auto;
                padding: 40px 30px;
                min-height: 300px;
            }

            .login-image h1 {
                font-size: 28px;
            }

            .login-image .features {
                max-width: 100%;
            }

            .login-form {
                flex: 0 0 auto;
                padding: 35px 30px;
            }
        }

        @media (max-width: 576px) {
            .login-wrapper {
                padding: 20px 12px;
                min-height: calc(100vh - 70px);
            }

            .login-card {
                border-radius: 18px;
            }

            .login-image {
                padding: 30px 20px;
                min-height: 220px;
            }

            .login-image .brand-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 20px;
            }

            .login-image .brand-icon i {
                font-size: 30px;
            }

            .login-image h1 {
                font-size: 22px;
            }

            .login-image .tagline {
                font-size: 14px;
                margin-bottom: 20px;
            }

            .login-image .features .feature-item {
                font-size: 12px;
                padding: 10px 14px;
            }

            .login-image .features .feature-item i {
                font-size: 16px;
                width: 24px;
            }

            .login-form {
                padding: 28px 18px;
            }

            .login-form .form-header h2 {
                font-size: 20px;
            }

            .login-form .form-header p {
                font-size: 13px;
            }

            .login-type-toggle .toggle-option {
                font-size: 12px;
                padding: 8px 10px;
            }

            .form-group .input-group-custom input {
                height: 48px;
                padding: 11px 40px 11px 42px;
                font-size: 13px;
            }

            .form-options {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 10px;
                margin: 12px 0 18px;
            }

            .form-options .form-check label,
            .form-options .forgot-link {
                font-size: 12px;
            }

            .btn-login {
                height: 48px;
                font-size: 14px;
                padding: 12px;
            }

            .signup-link {
                font-size: 13px;
                margin-top: 18px;
            }

            .login-form .form-header .form-logo-icon {
                width: 50px;
                height: 50px;
                font-size: 22px;
            }
        }

        @media (max-width: 375px) {
            .login-wrapper {
                padding: 12px 8px;
            }

            .login-form {
                padding: 22px 14px;
            }

            .login-form .form-header h2 {
                font-size: 18px;
            }

            .login-type-toggle .toggle-option {
                font-size: 11px;
                padding: 6px 6px;
            }

            .form-group .input-group-custom input {
                height: 44px;
                padding: 10px 36px 10px 38px;
                font-size: 12px;
            }
        }
    </style>


    <!-- =========================================================
         LOGIN SECTION - SPLIT LAYOUT
         ========================================================= -->
    <section class="login-wrapper">
        <div class="login-card">

            <!-- LEFT SIDE - IMAGE & BRANDING -->
            <div class="login-image">
                <div class="brand-icon">
                    <i class="bi bi-bank2"></i>
                </div>
                <h1>JFINSERV</h1>
                <p class="tagline">CONSULTANT INDIA PVT LTD</p>

                <div class="features">
                    <div class="feature-item">
                        <i class="bi bi-shield-check"></i>
                        <span>Secure & Trusted Platform</span>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-clock-history"></i>
                        <span>Quick Loan Approvals</span>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-headset"></i>
                        <span>24/7 Customer Support</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE - LOGIN FORM -->
            <div class="login-form">

                <!-- Header -->
                <div class="form-header">
                    <div class="form-logo-icon">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </div>
                    <h2>Welcome Back</h2>
                    <p>Sign in to access your loan dashboard</p>
                </div>

                <!-- Alerts -->
                @if (session('error'))
                    <div class="alert-custom alert-danger">
                        {{ session('error') }}
                        <button class="close-btn" data-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert-custom alert-success">
                        {{ session('status') }}
                        <button class="close-btn" data-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert-custom alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button class="close-btn" data-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif

                <!-- Form -->
                <form action="{{ Route('userLogin') }}" method="POST">
                    @csrf

                    <!-- Login Type Toggle -->
                    <div class="login-type-toggle" role="group">
                        <button type="button" class="toggle-option active" data-type="email">
                            <i class="bi bi-envelope"></i> Email
                        </button>
                        <button type="button" class="toggle-option" data-type="mobile">
                            <i class="bi bi-phone"></i> Mobile
                        </button>
                    </div>

                    <!-- Hidden input for login type -->
                    <input type="hidden" name="login_type" id="login_type_input" value="email">

                    <!-- Email Field -->
                    <div id="email_login" class="form-group">
                        <label>Email Address</label>
                        <div class="input-group-custom">
                            <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                            <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div id="password_login" class="form-group">
                        <label>Password</label>
                        <div class="input-group-custom">
                            <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" name="password" id="password" placeholder="Enter your password">
                            <span class="password-toggle" onclick="togglePassword()">
                                <i class="bi bi-eye" id="toggleIcon"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Mobile Field -->
                    <div id="mobile_login" class="form-group" style="display: none;">
                        <label>Mobile Number</label>
                        <div class="input-group-custom">
                            <span class="input-icon"><i class="bi bi-phone-fill"></i></span>
                            <input type="text" name="mobile_no" placeholder="Enter your mobile number" value="{{ old('mobile_no') }}">
                        </div>
                        @error('mobile_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- OTP Field -->
                    <div id="otp_field" class="form-group">
                        <label>OTP</label>
                        <div class="input-group-custom">
                            <span class="input-icon"><i class="bi bi-shield-lock-fill"></i></span>
                            <input type="text" name="otp" placeholder="Enter OTP">
                        </div>
                        @error('otp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Options -->
                    <div class="form-options">
                        <div class="form-check">
                            <input type="checkbox" id="rememberMe">
                            <label for="rememberMe">Remember me</label>
                        </div>
                        <a href="{{ route('forgot') }}" class="forgot-link">Forgot Password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn-login">
                        <i class="bi bi-box-arrow-in-right"></i> Sign In
                    </button>

                    <!-- Sign Up Link -->
                    <div class="signup-link">
                        Don't have an account? <a href="{{ route('registerPage') }}">Sign Up Now</a>
                    </div>

                </form>
            </div>

        </div>
    </section>

    <!-- Scripts -->
    <script src="{{ asset('theme') }}/dist-assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // ===== Login Type Toggle =====
        document.addEventListener('DOMContentLoaded', function() {
            const toggleOptions = document.querySelectorAll('.toggle-option');
            const emailLogin = document.getElementById('email_login');
            const passwordLogin = document.getElementById('password_login');
            const mobileLogin = document.getElementById('mobile_login');
            const otpField = document.getElementById('otp_field');
            const loginTypeInput = document.getElementById('login_type_input');

            toggleOptions.forEach(option => {
                option.addEventListener('click', function() {
                    toggleOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');

                    const type = this.dataset.type;
                    loginTypeInput.value = type;

                    if (type === 'email') {
                        emailLogin.style.display = 'block';
                        passwordLogin.style.display = 'block';
                        mobileLogin.style.display = 'none';
                        otpField.style.display = 'none';
                        document.querySelector('input[name="email"]').required = true;
                        document.querySelector('input[name="mobile_no"]').required = false;
                    } else {
                        emailLogin.style.display = 'none';
                        passwordLogin.style.display = 'none';
                        mobileLogin.style.display = 'block';
                        otpField.style.display = 'block';
                        document.querySelector('input[name="email"]').required = false;
                        document.querySelector('input[name="mobile_no"]').required = true;
                    }
                });
            });
        });

        // ===== Toggle Password Visibility =====
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.getElementById('toggleIcon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }

        // ===== Auto Dismiss Alerts =====
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert-danger").fadeOut(500, function() { $(this).remove(); });
            }, 5000);

            setTimeout(function() {
                $(".alert-success").fadeOut(500, function() { $(this).remove(); });
            }, 6000);

            $('.close-btn').on('click', function() {
                $(this).closest('.alert-custom').fadeOut(300, function() { $(this).remove(); });
            });
        });

        // ===== Prevent Back After Login =====
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };

        // ===== Timezone Detection =====
        $(document).ready(function() {
            var zone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            console.log('Timezone:', zone);
        });
    </script>

