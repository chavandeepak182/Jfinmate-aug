<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forgot Password | JFinserve</title>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    >

    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                         Roboto, Arial, sans-serif;

            background: #f5f8fc;

            color: #1f2937;

            overflow-x: hidden;
        }


        /* =====================================================
           MAIN CONTAINER
        ===================================================== */

        .forgot-container {
            width: 100%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px 20px;

            position: relative;
        }


        /* =====================================================
           BACKGROUND DECORATION
        ===================================================== */

        .forgot-container::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            border-radius: 50%;

            background: rgba(41, 92, 171, 0.07);

            top: -150px;
            left: -120px;
        }

        .forgot-container::after {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background: rgba(0, 171, 235, 0.07);

            bottom: -130px;
            right: -100px;
        }


        /* =====================================================
           FORGOT CARD
        ===================================================== */

        .forgot-card {
            position: relative;

            z-index: 2;

            width: 100%;
            max-width: 470px;

            background: #ffffff;

            padding: 42px 45px;

            border-radius: 20px;

            border: 1px solid #e8edf4;

            box-shadow:
                0 20px 55px rgba(30, 64, 175, 0.12);

            text-align: center;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .forgot-logo {
            display: flex;

            align-items: center;
            justify-content: center;

            margin-bottom: 25px;
        }

        .forgot-logo img {
            display: block;

            width: auto;

            height: 48px;

            max-width: 190px;

            object-fit: contain;
        }


        /* =====================================================
           ICON
        ===================================================== */

        .forgot-icon {
            width: 64px;
            height: 64px;

            margin: 0 auto 18px;

            border-radius: 50%;

            display: flex;

            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #295cab,
                #00abeb
            );

            color: #ffffff;

            font-size: 25px;

            box-shadow:
                0 10px 25px rgba(41, 92, 171, 0.20);
        }


        /* =====================================================
           HEADING
        ===================================================== */

        .forgot-card h3 {
            margin: 0 0 8px;

            color: #1f2937;

            font-size: 27px;

            line-height: 1.25;

            font-weight: 700;
        }


        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .forgot-card p {
            margin: 0 0 27px;

            color: #64748b;

            font-size: 14px;

            line-height: 1.6;
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .error {
            width: 100%;

            margin-bottom: 18px;

            padding: 11px 13px;

            border-radius: 8px;

            background: #fef2f2;

            border: 1px solid #fecaca;

            color: #dc2626;

            font-size: 13px;

            line-height: 1.4;

            text-align: left;
        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success {
            width: 100%;

            margin-bottom: 18px;

            padding: 11px 13px;

            border-radius: 8px;

            background: #ecfdf5;

            border: 1px solid #a7f3d0;

            color: #047857;

            font-size: 13px;

            line-height: 1.4;

            text-align: left;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .forgot-card form {
            width: 100%;

            text-align: left;
        }


        /* =====================================================
           LABEL
        ===================================================== */

        .forgot-card label {
            display: block;

            margin: 0 0 8px;

            color: #374151;

            font-size: 13px;

            font-weight: 600;

            line-height: 1.4;
        }


        /* =====================================================
           INPUT WRAPPER
        ===================================================== */

        .mobile-input-wrapper {
            position: relative;

            width: 100%;
        }

        .mobile-input-wrapper i {
            position: absolute;

            top: 50%;
            left: 15px;

            transform: translateY(-50%);

            color: #94a3b8;

            font-size: 15px;

            pointer-events: none;
        }


        /* =====================================================
           INPUT
        ===================================================== */

        .forgot-card input[type="text"] {
            width: 100%;

            height: 50px;

            padding: 0 15px 0 43px;

            border-radius: 10px;

            border: 1px solid #dce3ec;

            background: #ffffff;

            color: #1f2937;

            font-size: 14px;

            outline: none;

            transition:
                border-color 0.25s ease,
                box-shadow 0.25s ease;
        }

        .forgot-card input[type="text"]::placeholder {
            color: #a0a9b6;
        }

        .forgot-card input[type="text"]:hover {
            border-color: #b9c5d4;
        }

        .forgot-card input[type="text"]:focus {
            outline: none;

            border-color: #295cab;

            box-shadow:
                0 0 0 4px rgba(41, 92, 171, 0.10);
        }


        /* =====================================================
           VERIFY BUTTON
        ===================================================== */

        .btn-verify {
            width: 100%;

            height: 50px;

            margin-top: 20px;

            padding: 0 18px;

            border: none;

            border-radius: 10px;

            background: linear-gradient(
                135deg,
                #295cab 0%,
                #1e4fd8 100%
            );

            color: #ffffff;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

            display: flex;

            align-items: center;
            justify-content: center;

            gap: 9px;

            box-shadow:
                0 8px 18px rgba(41, 92, 171, 0.20);

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .btn-verify:hover {
            transform: translateY(-1px);

            box-shadow:
                0 10px 22px rgba(41, 92, 171, 0.28);
        }

        .btn-verify:active {
            transform: translateY(0);
        }


        /* =====================================================
           BACK TO LOGIN
        ===================================================== */

        .back-login {
            margin-top: 22px;

            text-align: center;

            font-size: 13px;

            color: #64748b;
        }

        .back-login a {
            color: #295cab;

            font-weight: 600;

            text-decoration: none;
        }

        .back-login a:hover {
            color: #00abeb;

            text-decoration: underline;
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            .forgot-container {
                min-height: 100vh;

                padding: 20px 15px;
            }

            .forgot-card {
                max-width: 100%;

                padding: 32px 24px;

                border-radius: 17px;
            }

            .forgot-logo {
                margin-bottom: 20px;
            }

            .forgot-logo img {
                height: 42px;

                max-width: 165px;
            }

            .forgot-icon {
                width: 58px;
                height: 58px;

                font-size: 22px;

                margin-bottom: 16px;
            }

            .forgot-card h3 {
                font-size: 24px;
            }

            .forgot-card p {
                font-size: 13px;

                margin-bottom: 23px;
            }

            .forgot-card input[type="text"] {
                height: 48px;

                font-size: 13px;
            }

            .btn-verify {
                height: 48px;

                font-size: 14px;
            }

        }


        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 400px) {

            .forgot-container {
                padding: 15px 10px;
            }

            .forgot-card {
                padding: 28px 18px;

                border-radius: 15px;
            }

            .forgot-logo img {
                height: 38px;

                max-width: 150px;
            }

            .forgot-icon {
                width: 54px;
                height: 54px;

                font-size: 20px;
            }

            .forgot-card h3 {
                font-size: 22px;
            }

            .forgot-card p {
                font-size: 12px;
            }

            .forgot-card label {
                font-size: 12px;
            }

        }

    </style>

</head>


<body>


<div class="forgot-container">


    <div class="forgot-card">


        <!-- =========================================
             JFINSERVE LOGO
        ========================================== -->

        <div class="forgot-logo">

            <img
                src="{{ asset('theme/dhara-jfin/img/logo.jpg') }}"
                alt="JFinserve Logo"
            >

        </div>


        <!-- =========================================
             ICON
        ========================================== -->

        <div class="forgot-icon">

            <i class="fa-solid fa-lock"></i>

        </div>


        <!-- =========================================
             TITLE
        ========================================== -->

        <h3>
            Forgot Password?
        </h3>


        <p>
            Enter your registered mobile number to receive
            an OTP and reset your password.
        </p>


        {{-- Error message --}}

        @if ($errors->any())

            <div class="error">
                {{ $errors->first() }}
            </div>

        @endif


        {{-- Success message --}}

        @if (session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif


        <!-- =========================================
             EXISTING FORM
             BACKEND NOT CHANGED
        ========================================== -->

        <form
            method="POST"
            action="{{ route('authv3.forgot.submit') }}"
        >

            @csrf


            <label>
                Registered Mobile Number
            </label>


            <div class="mobile-input-wrapper">

                <i class="fa-solid fa-mobile-screen-button"></i>

                <input
                    type="text"
                    name="mobile_no"
                    maxlength="10"
                    placeholder="Enter your 10 digit mobile number"
                    required
                >

            </div>


            <button
                type="submit"
                class="btn-verify"
            >

                <span>
                    Send OTP
                </span>

                <i class="fa-solid fa-arrow-right"></i>

            </button>

        </form>


        <!-- =========================================
             BACK TO LOGIN
        ========================================== -->

        <div class="back-login">

            Remember your password?

            <a href="{{ route('authv3.login.form') }}">
                Back to Login
            </a>

        </div>


    </div>


</div>


</body>
</html>