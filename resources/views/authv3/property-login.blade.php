@include('dhara-jfin.layout.header')
    
    <style>
        /* ----- GLOBAL & LAYOUT ----- */
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #eef2ff, #f8f9fa);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            padding: 2rem 1rem;
            margin: 0;
        }

        /* ----- MAIN CARD ----- */
        .auth-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 600px;
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 55px rgba(0, 0, 0, 0.12), 0 8px 20px rgba(0, 0, 0, 0.06);
            display: flex;
            transition: all 0.2s ease;
        }

        /* ----- LEFT IMAGE PANEL ----- */
        .auth-image {
            width: 50%;
            position: relative;
            overflow: hidden;
            min-height: 600px;
            background: #e9ecef;
        }

        .auth-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .auth-image:hover img {
            transform: scale(1.02);
        }

        /* Gradient overlay */
        .auth-image::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.55));
            pointer-events: none;
        }

        /* Text overlay on image */
        .image-content {
            position: absolute;
            z-index: 2;
            left: 40px;
            right: 40px;
            bottom: 45px;
            color: #fff;
        }

        .image-content h1 {
            font-size: 2.375rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            line-height: 1.2;
            letter-spacing: -0.01em;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .image-content p {
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
            max-width: 430px;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
        }

        /* ----- RIGHT FORM PANEL ----- */
        .auth-form {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 55px 65px;
            background: #fff;
        }

        .form-inner {
            width: 100%;
            max-width: 390px;
        }

        /* ----- BRAND ICON ----- */
        .login-icon {
            width: 58px;
            height: 58px;
            border-radius: 16px;
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.25);
            transition: transform 0.2s ease;
        }

        .login-icon:hover {
            transform: scale(1.02);
        }

        /* ----- TYPOGRAPHY ----- */
        .auth-title {
            font-weight: 700;
            color: #1a1e2b;
            font-size: 1.875rem;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .auth-sub {
            font-size: 0.875rem;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1.75rem;
        }

        /* ----- FORM CONTROLS ----- */
        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            display: block;
        }

        .input-group {
            border: 1px solid #dee2e6;
            border-radius: 12px;
            overflow: hidden;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            background: #fff;
        }

        .input-group:focus-within {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.12);
        }

        .input-group-text {
            background: #fff;
            border: 0;
            color: #6c757d;
            padding-left: 1rem;
            padding-right: 0.5rem;
            font-size: 1rem;
        }

        .form-control {
            height: 52px;
            border: 0 !important;
            box-shadow: none !important;
            font-size: 0.9375rem;
            padding-left: 0.25rem;
            background: #fff;
        }

        .form-control::placeholder {
            color: #adb5bd;
            font-weight: 400;
        }

        .form-control:focus {
            background: #fff;
        }

        /* ----- BUTTONS ----- */
        .btn-login {
            height: 52px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9375rem;
            border: 0;
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            box-shadow: 0 8px 18px rgba(13, 110, 253, 0.2);
            transition: all 0.2s ease;
            letter-spacing: 0.01em;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(13, 110, 253, 0.3);
            background: linear-gradient(135deg, #0b5ed7, #0a58ca);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* ----- ALERTS ----- */
        .alert {
            border-radius: 10px;
            font-size: 0.8125rem;
            padding: 0.75rem 1rem;
            border: 0;
        }

        .alert-success {
            background-color: #d1e7dd;
            color: #0a3622;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #58151c;
        }

        /* ----- DIVIDER ----- */
        .divider {
            text-align: center;
            margin: 1.75rem 0;
            position: relative;
        }

        .divider::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #e9ecef;
            transform: translateY(-50%);
        }

        .divider span {
            background: #fff;
            padding: 0 1rem;
            position: relative;
            font-size: 0.75rem;
            color: #adb5bd;
            font-weight: 500;
            letter-spacing: 0.03em;
            text-transform: uppercase;
        }

        /* ----- SIGNUP LINK ----- */
        .signup-link {
            color: #6c757d;
            font-size: 0.875rem;
            margin-bottom: 0;
        }

        .signup-link a {
            text-decoration: none;
            font-weight: 600;
            color: #0d6efd;
            transition: color 0.2s ease;
        }

        .signup-link a:hover {
            text-decoration: underline;
            color: #0a58ca;
        }

        /* ----- RESPONSIVE: TABLET ----- */
        @media (max-width: 850px) {
            .auth-wrapper {
                max-width: 650px;
            }

            .auth-image {
                width: 45%;
                min-height: 560px;
            }

            .auth-form {
                width: 55%;
                padding: 40px 30px;
            }

            .image-content {
                left: 25px;
                right: 25px;
                bottom: 30px;
            }

            .image-content h1 {
                font-size: 1.75rem;
            }

            .image-content p {
                font-size: 0.875rem;
            }
        }

        /* ----- RESPONSIVE: MOBILE ----- */
        @media (max-width: 767px) {
            body {
                padding: 1rem;
                align-items: center;
            }

            .auth-wrapper {
                display: block;
                max-width: 480px;
                min-height: auto;
                border-radius: 20px;
            }

            .auth-image {
                width: 100%;
                height: 220px;
                min-height: 220px;
            }

            .auth-image img {
                height: 220px;
            }

            .image-content {
                left: 25px;
                right: 25px;
                bottom: 22px;
            }

            .image-content h1 {
                font-size: 1.5rem;
                margin-bottom: 0.25rem;
            }

            .image-content p {
                font-size: 0.8125rem;
                line-height: 1.4;
            }

            .auth-form {
                width: 100%;
                padding: 35px 25px 30px;
            }

            .auth-title {
                font-size: 1.5rem;
            }

            .login-icon {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
                margin-bottom: 1rem;
            }

            .auth-sub {
                margin-bottom: 1.5rem;
            }
        }

        /* ----- RESPONSIVE: SMALL MOBILE ----- */
        @media (max-width: 400px) {
            body {
                padding: 0.625rem;
            }

            .auth-image {
                height: 190px;
                min-height: 190px;
            }

            .auth-image img {
                height: 190px;
            }

            .auth-form {
                padding: 30px 18px 25px;
            }

            .image-content h1 {
                font-size: 1.375rem;
            }

            .auth-title {
                font-size: 1.375rem;
            }

            .form-control, .btn-login {
                height: 48px;
            }
        }
    </style>
</head>
<body>

<div class="auth-wrapper" style="margin-top: 60px;">

    <!-- LEFT IMAGE SECTION -->
    <div class="auth-image">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
             alt="Modern property interior"
             class="property-login-image"
             loading="lazy">

        <div class="image-content">
            <h1>Find Your Dream Property</h1>
            <p>
                Manage your property journey with a simple,
                secure and seamless experience.
            </p>
        </div>
    </div>

    <!-- RIGHT LOGIN SECTION -->
    <div class="auth-form">
        <div class="form-inner">

            <!-- Brand icon -->
            <div class="login-icon">
                <i class="fas fa-building"></i>
            </div>

            <h3 class="auth-title">
                Login to continue
            </h3>

            <p class="auth-sub">
                Enter your mobile number to receive OTP
            </p>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error Message --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <!-- BACKEND FORM (structure preserved, only layout enhanced) -->
            <form method="POST" action="{{ route('property.login.otp') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Mobile Number
                    </label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-mobile-alt"></i>
                        </span>

                        <input type="text"
                               name="mobile_no"
                               class="form-control"
                               placeholder="Enter your mobile number"
                               maxlength="10"
                               required>
                    </div>
                </div>

                <button type="submit"
                        class="btn btn-primary w-100 btn-login" style="margin-top:20px">
                    <i class="fas fa-paper-plane me-2"></i>
                    Send OTP
                </button>
            </form>

            <div class="divider">
                <span>OR</span>
            </div>

            <p class="text-center signup-link">
                New user?
                <a href="{{ route('property.signup') }}">
                    Create an account
                </a>
            </p>

        </div>
    </div>

</div>

