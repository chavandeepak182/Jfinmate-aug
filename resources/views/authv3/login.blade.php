<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO META DATA FOR LOGIN PAGE --}}
    <title>JFinserve's Loan Login | Secure Customer Portal</title>

    <meta name="description"
          content="Login to the JFSL customer portal to securely access your loan account, applications and financial services. Sign in to manage your JFSL account online.">

    <meta name="keywords"
          content="JFinserve Loan Login, Loan Portal Login, Jfinserve Customer Portal, Loan Account Login, JFSL Login, Secure Login">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<style>

/* =========================================================
   GLOBAL
========================================================= */

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


/* =========================================================
   HEADER
========================================================= */

header {
    position: fixed;

    top: 0;
    left: 0;

    width: 100%;

    height: 72px;

    background: #ffffff;

    box-shadow: 0 2px 12px rgba(0,0,0,0.08);

    z-index: 1000;

    transition: all 0.3s ease;
}

header.scrolled {
    width: 94%;

    max-width: 1250px;

    left: 50%;

    transform: translateX(-50%);

    top: 8px;

    border-radius: 45px;

    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}


/* =========================================================
   HEADER CONTAINER
========================================================= */

.container {
    width: 100%;

    max-width: 1200px;

    margin: 0 auto;

    padding: 0 25px;
}


/* =========================================================
   NAV
========================================================= */

nav {
    height: 72px;

    display: flex;

    align-items: center;

    justify-content: space-between;
}


/* =========================================================
   LOGO
========================================================= */

.logo {
    display: flex;

    align-items: center;

    flex-shrink: 0;
}

.logo a {
    display: flex;

    align-items: center;

    text-decoration: none;
}

.logo img {
    width: auto;

    height: 40px;

    max-width: 180px;

    display: block;

    object-fit: contain;
}

header.scrolled .logo img {
    height: 34px;
}


/* =========================================================
   NAV LINKS
========================================================= */

.nav-links {
    display: flex;

    align-items: center;

    list-style: none;

    margin: 0;

    padding: 0;
}

.nav-links > li {
    position: relative;

    margin-left: 30px;
}

.nav-links a {
    text-decoration: none;

    color: #1f2937;

    font-size: 14px;

    font-weight: 500;

    transition: all 0.3s ease;
}

.nav-links a:hover {
    color: #295cab;
}


/* =========================================================
   DROPDOWN
========================================================= */

.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;

    top: calc(100% + 15px);

    left: 0;

    min-width: 245px;

    margin: 0;

    padding: 8px 0;

    background: #ffffff;

    border-radius: 10px;

    box-shadow: 0 12px 30px rgba(0,0,0,0.12);

    list-style: none;

    opacity: 0;

    visibility: hidden;

    transform: translateY(-8px);

    transition: all 0.25s ease;

    z-index: 1100;
}

.dropdown:hover .dropdown-menu {
    opacity: 1;

    visibility: visible;

    transform: translateY(0);
}

.dropdown-menu li {
    margin: 0 !important;

    padding: 0;
}

.dropdown-menu li a {
    display: block;

    padding: 11px 18px;

    color: #333333;

    white-space: nowrap;
}

.dropdown-menu li a:hover {
    background: #f3f7ff;

    color: #295cab;
}


/* =========================================================
   SIGN IN DROPDOWN
========================================================= */

.signin-dropdown {
    position: relative;
}

.signin-menu {
    right: 0;

    left: auto;

    min-width: 220px;
}

.signin-menu .has-submenu {
    position: relative;
}

.signin-menu .sub-menu {
    position: absolute;

    top: 0;

    left: 100%;

    min-width: 180px;

    padding: 8px 0;

    margin: 0;

    background: #ffffff;

    border-radius: 10px;

    box-shadow: 0 12px 30px rgba(0,0,0,0.12);

    list-style: none;

    opacity: 0;

    visibility: hidden;

    transform: translateX(-8px);

    transition: all 0.25s ease;
}

.signin-menu .has-submenu:hover > .sub-menu {
    opacity: 1;

    visibility: visible;

    transform: translateX(0);
}


/* =========================================================
   HEADER BUTTONS
========================================================= */

.cta-nav {
    display: flex;

    align-items: center;

    gap: 12px;
}

.btn-sign {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    padding: 11px 22px;

    border-radius: 30px;

    text-decoration: none;

    font-size: 14px;

    font-weight: 600;

    transition: all 0.3s ease;
}

.btn-primary-sign {
    background: #295cab;

    color: #ffffff !important;
}

.btn-primary-sign:hover {
    background: #1e4d96;

    transform: translateY(-1px);
}

.btn-sign-in {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    min-width: 95px;

    padding: 10px 20px;

    border-radius: 30px;

    text-decoration: none;

    background: #ed1b24;

    color: #ffffff !important;

    font-size: 14px;

    font-weight: 600;
}


/* =========================================================
   MOBILE MENU BUTTON
========================================================= */

.menu-toggle {
    display: none;

    width: 42px;

    height: 42px;

    border: 0;

    background: transparent;

    cursor: pointer;

    padding: 8px;

    flex-direction: column;

    justify-content: center;

    gap: 5px;
}

.menu-toggle .bar {
    display: block;

    width: 26px;

    height: 3px;

    border-radius: 3px;

    background: #295cab;

    transition: all 0.3s ease;
}

.menu-toggle.active .bar:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}

.menu-toggle.active .bar:nth-child(2) {
    opacity: 0;
}

.menu-toggle.active .bar:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}


/* =========================================================
   MOBILE MENU
========================================================= */

.mobile-menu {
    position: fixed;

    top: 0;

    left: 0;

    width: 100%;

    height: 100vh;

    background: #ffffff;

    transform: translateX(-100%);

    transition: transform 0.3s ease;

    overflow-y: auto;

    overflow-x: hidden;

    padding-top: 72px;

    z-index: 999;
}

.mobile-menu.active {
    transform: translateX(0);
}

.menu-header {
    padding: 25px 20px;

    background: linear-gradient(
        135deg,
        #295cab 0%,
        #00abeb 100%
    );

    color: #ffffff;
}

.menu-header h3 {
    margin: 0;

    font-size: 16px;

    line-height: 1.5;

    font-weight: 500;
}

.nav-menu {
    list-style: none;

    padding: 0;

    margin: 0;
}

.nav-menu > li {
    border-bottom: 1px solid #edf0f4;
}

.nav-menu a {
    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 16px 20px;

    color: #333333;

    text-decoration: none;

    font-size: 15px;

    font-weight: 500;
}

.nav-menu a:hover {
    background: #f5f8fc;
}

.mobile-cta-item-new {
    padding: 10px 20px !important;

    border-bottom: none !important;
}

.mobile-apply-btn,
.mobile-signin-btn {
    width: 100%;

    display: flex !important;

    align-items: center;

    justify-content: center;

    gap: 10px;

    padding: 14px 18px !important;

    border-radius: 10px;

    color: #ffffff !important;

    text-decoration: none;

    font-weight: 600;
}

.mobile-apply-btn {
    background: #295cab;
}

.mobile-signin-btn {
    background: #ed1b24;
}

.mobile-signin-btn .fa-chevron-right {
    margin-left: auto;
}

.submenu {
    max-height: 0;

    overflow: hidden;

    background: #f7f9fc;

    transition: max-height 0.3s ease;

    list-style: none;

    padding: 0;

    margin: 0;
}

.submenu.active {
    max-height: 600px;
}

.submenu a {
    padding-left: 40px;
}

.nested-submenu a {
    padding-left: 60px;
}


/* =========================================================
   AUTH PAGE
========================================================= */

.auth-page {
    width: 100%;

    min-height: 100vh;

    padding: 105px 25px 35px;

    display: flex;

    align-items: center;

    justify-content: center;
}


/* =========================================================
   MAIN LOGIN WRAPPER
========================================================= */

.auth-wrapper {
    width: 100%;

    max-width: 1180px;

    min-height: 650px;

    display: grid;

    grid-template-columns: 48% 52%;

    background: #ffffff;

    border-radius: 24px;

    overflow: hidden;

    box-shadow:
        0 20px 60px rgba(30, 64, 175, 0.12);

    border: 1px solid #e9eef5;
}


/* =========================================================
   LEFT LOGIN FORM
========================================================= */

.auth-form-column {
    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 50px 60px;

    background: #ffffff;
}

.auth-form-content {
    width: 100%;

    max-width: 430px;

    position: relative;
}


/* =========================================================
   LOGIN LOGO
========================================================= */

.auth-logo-top {
    display: flex;

    align-items: center;

    justify-content: flex-start;

    margin-bottom: 28px;
}

.auth-logo-top img {
    display: block;

    width: auto;

    height: 48px;

    max-width: 190px;

    object-fit: contain;
}


/* =========================================================
   HEADING
========================================================= */

.auth-heading {
    margin: 0 0 8px;

    color: #1f2937;

    font-size: 32px;

    line-height: 1.2;

    font-weight: 700;
}

.auth-subheading {
    margin: 0 0 28px;

    color: #6b7280;

    font-size: 14px;

    line-height: 1.6;
}


/* =========================================================
   LOGIN TYPE SWITCH
========================================================= */

.login-switch {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 8px;

    padding: 5px;

    margin-bottom: 25px;

    background: #f3f6fa;

    border-radius: 10px;
}

.login-switch label {
    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    min-height: 42px;

    margin: 0;

    padding: 8px;

    border-radius: 7px;

    color: #64748b;

    font-size: 13px;

    font-weight: 600;

    cursor: pointer;

    transition: all 0.25s ease;
}

.login-switch label:hover {
    color: #295cab;
}

.login-switch input {
    accent-color: #295cab;

    margin: 0;
}


/* =========================================================
   FORM FIELD
========================================================= */

.form-field {
    margin-bottom: 19px;
}

.form-field label {
    display: block;

    margin-bottom: 8px;

    color: #374151;

    font-size: 13px;

    font-weight: 600;
}

.form-field input {
    width: 100%;

    height: 50px;

    padding: 0 15px;

    border: 1px solid #dce3ec;

    border-radius: 10px;

    background: #ffffff;

    color: #1f2937;

    font-size: 14px;

    outline: none;

    transition: all 0.25s ease;
}

.form-field input::placeholder {
    color: #a0a9b6;
}

.form-field input:focus {
    border-color: #295cab;

    box-shadow:
        0 0 0 4px rgba(41,92,171,0.10);
}


/* =========================================================
   PASSWORD
========================================================= */

.password-wrapper {
    position: relative;

    width: 100%;
}

.password-wrapper input {
    padding-right: 48px;
}

.password-wrapper i {
    position: absolute;

    top: 50%;

    right: 15px;

    transform: translateY(-50%);

    color: #94a3b8;

    font-size: 16px;

    cursor: pointer;

    transition: color 0.2s ease;
}

.password-wrapper i:hover {
    color: #295cab;
}


/* =========================================================
   LOGIN BUTTON
========================================================= */

.btn-primary {
    width: 100%;

    height: 50px;

    margin-top: 5px;

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

    box-shadow:
        0 8px 18px rgba(41,92,171,0.20);

    transition: all 0.25s ease;
}

.btn-primary:hover {
    transform: translateY(-1px);

    box-shadow:
        0 10px 22px rgba(41,92,171,0.27);
}


/* =========================================================
   FOOTER LINKS
========================================================= */

.auth-footer-link {
    margin-top: 22px;

    text-align: center;

    color: #64748b;

    font-size: 13px;
}

.auth-footer-link a,
.auth-form-content > div a {
    color: #295cab;

    font-weight: 600;

    text-decoration: none;
}

.auth-footer-link a:hover,
.auth-form-content > div a:hover {
    color: #00abeb;

    text-decoration: underline;
}


/* =========================================================
   RIGHT PROMO AREA
========================================================= */

.auth-promo-column {
    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 45px;

    background:
        radial-gradient(
            circle at 80% 20%,
            rgba(0,171,235,0.30),
            transparent 35%
        ),
        linear-gradient(
            145deg,
            #295cab 0%,
            #173e85 100%
        );

    overflow: hidden;
}

.auth-promo-column::before {
    content: "";

    position: absolute;

    width: 300px;

    height: 300px;

    border-radius: 50%;

    background: rgba(255,255,255,0.06);

    top: -100px;

    right: -100px;
}

.auth-promo-column::after {
    content: "";

    position: absolute;

    width: 220px;

    height: 220px;

    border-radius: 50%;

    background: rgba(0,171,235,0.12);

    bottom: -80px;

    left: -80px;
}

.promo-content {
    position: relative;

    z-index: 2;

    width: 100%;

    max-width: 490px;
}


/* =========================================================
   PROMO TITLE
========================================================= */

.promo-text {
    margin-top: 28px;

    color: #ffffff;
}

.promo-text h2 {
    margin: 0 0 18px;

    font-size: 30px;

    line-height: 1.25;

    font-weight: 700;

    color: #ffffff;
}

.promo-text p {
    margin: 0 0 20px;

    color: rgba(255,255,255,0.82);

    font-size: 14px;

    line-height: 1.7;
}


/* =========================================================
   FEATURES
========================================================= */

.feature-item {
    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 12px;

    color: rgba(255,255,255,0.92);

    font-size: 14px;
}

.feature-item i {
    color: #59e0bd;

    font-size: 15px;
}


/* =========================================================
   ANALYTICS CARD
========================================================= */

.analytics-card {
    width: 100%;

    padding: 22px;

    background: rgba(255,255,255,0.97);

    border: 1px solid rgba(255,255,255,0.5);

    border-radius: 18px;

    box-shadow:
        0 20px 45px rgba(0,0,0,0.15);
}

.analytics-header {
    display: flex;

    align-items: flex-start;

    justify-content: space-between;

    gap: 15px;

    margin-bottom: 15px;
}

.analytics-header h3 {
    margin: 0 0 4px;

    color: #1f2937;

    font-size: 17px;

    font-weight: 700;
}

.card-subtitle {
    margin: 0;

    color: #64748b;

    font-size: 11px;
}

.chart-value {
    color: #10b981;

    font-size: 17px;

    font-weight: 700;

    white-space: nowrap;
}

.line-chart-premium {
    width: 100%;

    height: 190px;
}

.line-chart-premium svg {
    width: 100%;

    height: 100%;

    display: block;
}


/* =========================================================
   ERROR / SUCCESS
========================================================= */

.auth-message-success {
    padding: 11px 13px;

    margin-bottom: 18px;

    border-radius: 8px;

    background: #ecfdf5;

    color: #047857;

    font-size: 13px;
}

.auth-message-error {
    padding: 11px 13px;

    margin-bottom: 18px;

    border-radius: 8px;

    background: #fef2f2;

    color: #dc2626;

    font-size: 13px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1024px) {

    .container {
        padding-left: 20px;
        padding-right: 20px;
    }

    .nav-links,
    .cta-nav {
        display: none;
    }

    .menu-toggle {
        display: flex;
    }

    .auth-page {
        padding: 100px 20px 30px;
    }

    .auth-wrapper {
        max-width: 850px;

        grid-template-columns: 1fr 1fr;

        min-height: 600px;
    }

    .auth-form-column {
        padding: 40px 35px;
    }

    .auth-promo-column {
        padding: 35px;
    }

    .promo-text h2 {
        font-size: 26px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {

    header {
        height: 66px;
    }

    header.scrolled {
        width: 100%;

        top: 0;

        border-radius: 0;

        transform: none;

        left: 0;
    }

    nav {
        height: 66px;
    }

    .logo img,
    header.scrolled .logo img {
        height: 36px;

        max-width: 160px;
    }

    .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .auth-page {
        min-height: 100vh;

        padding: 88px 12px 25px;

        align-items: flex-start;
    }

    .auth-wrapper {
        width: 100%;

        max-width: 100%;

        display: block;

        min-height: 0;

        border-radius: 18px;

        box-shadow:
            0 10px 35px rgba(30,64,175,0.10);
    }

    .auth-form-column {
        width: 100%;

        padding: 30px 22px 35px;
    }

    .auth-form-content {
        max-width: 100%;
    }

    .auth-logo-top {
        margin-bottom: 22px;
    }

    .auth-logo-top img {
        height: 42px;

        max-width: 170px;
    }

    .auth-heading {
        font-size: 27px;

        margin-bottom: 7px;
    }

    .auth-subheading {
        font-size: 13px;

        margin-bottom: 22px;
    }

    .login-switch {
        margin-bottom: 22px;
    }

    .login-switch label {
        font-size: 12px;
    }

    .form-field input {
        height: 48px;
    }

    .btn-primary {
        height: 48px;
    }

    .auth-promo-column {
        display: none;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .auth-page {
        padding: 82px 10px 20px;
    }

    .auth-form-column {
        padding: 25px 17px 30px;
    }

    .auth-wrapper {
        border-radius: 15px;
    }

    .auth-logo-top img {
        height: 38px;

        max-width: 155px;
    }

    .auth-heading {
        font-size: 24px;
    }

    .auth-subheading {
        font-size: 12px;

        line-height: 1.5;
    }

    .login-switch {
        gap: 5px;

        padding: 4px;
    }

    .login-switch label {
        min-height: 40px;

        font-size: 11px;
    }

    .form-field label {
        font-size: 12px;
    }

    .form-field input {
        height: 46px;

        font-size: 13px;
    }

    .btn-primary {
        height: 46px;

        font-size: 14px;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 360px) {

    .auth-page {
        padding-left: 8px;
        padding-right: 8px;
    }

    .auth-form-column {
        padding-left: 14px;
        padding-right: 14px;
    }

    .auth-heading {
        font-size: 22px;
    }

    .login-switch label {
        font-size: 10px;
    }

}


/* =========================================================
   DESKTOP MOBILE MENU HIDE
========================================================= */

@media (min-width: 1025px) {

    .mobile-menu,
    .menu-toggle {
        display: none !important;
    }

}

</style>

</head>


<body>


<!-- =========================================================
     HEADER
========================================================= -->

<header>

    <nav class="container">

        <!-- LOGO -->
        <div class="logo">

            <a href="{{ url('/') }}">

                <img
                    src="{{ asset('theme/dhara-jfin/img/logo.jpg') }}"
                    alt="JFinserve Logo"
                >

            </a>

        </div>


        <!-- DESKTOP NAV -->
        <ul class="nav-links">

            <li>
                <a href="{{ url('/') }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ url('/about') }}">
                    About Us
                </a>
            </li>


            <li class="dropdown">

                <a href="{{ url('/services') }}">
                    Services
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a href="{{ url('/home-loan') }}">
                            Home Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/loan-against-property') }}">
                            Loan Against Property
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/project-loan') }}">
                            Project Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/overdraft-facility') }}">
                            Overdraft Facility
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/msme-loan') }}">
                            MSME Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/lease-rental-discounting') }}">
                            Lease Rental Discounting
                        </a>
                    </li>

                </ul>

            </li>


            <li>
                <a href="{{ url('/eligibility-calculator') }}">
                    Calculator
                </a>
            </li>


            <li>
                <a href="{{ url('/contact') }}">
                    Contact
                </a>
            </li>

        </ul>


        <!-- DESKTOP CTA -->
        <div class="cta-nav">

            <a
                href="{{ route('authv3.login.form') }}"
                class="btn-sign btn-primary-sign"
            >
                Apply Now
            </a>


            <!-- SIGN IN -->
            <div class="dropdown signin-dropdown">

                <a
                    href="javascript:void(0)"
                    class="btn-sign-in"
                >
                    Sign In
                </a>


                <ul class="nav-links dropdown-menu signin-menu">

                    <li class="has-submenu">

                        <a href="{{ route('login') }}">
                            <i class="fas fa-user-tie"></i>
                            Employee
                        </a>

                    </li>


                    <li class="has-submenu">

                        <a href="{{ route('login') }}">
                            <i class="fa-regular fa-handshake"></i>
                            Channel Partner
                        </a>

                    </li>


                    <li class="has-submenu">

                        <a href="javascript:void(0)">
                            <i class="fa-solid fa-caret-down"></i>
                            Client
                        </a>

                        <ul class="sub-menu">

                            <li>
                                <a href="{{ route('authv3.login.form') }}">
                                    <i class="fa-solid fa-coins"></i>
                                    Finance
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('property.login') }}">
                                    <i class="fa-solid fa-building"></i>
                                    Property
                                </a>
                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>


        <!-- MOBILE TOGGLE -->
        <div
            class="menu-toggle"
            id="mobile-menu"
        >

            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>

        </div>

    </nav>

</header>


<!-- =========================================================
     MOBILE MENU
========================================================= -->

<div
    class="mobile-menu"
    id="mobileMenu"
>

    <div class="menu-header">

        <h3>
            Trust is our foundation. We guide clients.
        </h3>

    </div>


    <ul class="nav-menu">


        <!-- APPLY -->
        <li class="mobile-cta-item-new">

            <a
                href="{{ route('authv3.login.form') }}"
                class="mobile-apply-btn"
            >

                <i class="fas fa-file-alt"></i>

                Apply Now

            </a>

        </li>


        <!-- SIGN IN -->
        <li class="mobile-cta-item-new">

            <a
                href="javascript:void(0)"
                id="signInBtnNew"
                class="mobile-signin-btn"
            >

                <i class="fas fa-sign-in-alt"></i>

                Sign In

                <i class="fas fa-chevron-right"></i>

            </a>

        </li>


        <!-- SIGN IN SUBMENU -->
        <li
            class="has-submenu"
            id="signInMenu"
            style="display:none;"
        >

            <ul class="submenu signin-submenu">

                <li>
                    <a href="{{ route('login') }}">
                        Employee
                    </a>
                </li>

                <li>
                    <a href="{{ route('login') }}">
                        Channel Partner
                    </a>
                </li>

                <li class="has-submenu">

                    <a
                        href="javascript:void(0)"
                        id="clientToggle"
                    >

                        <span>
                            Client
                        </span>

                        <i class="fas fa-chevron-right"></i>

                    </a>


                    <ul
                        class="submenu nested-submenu"
                        id="clientSubmenu"
                    >

                        <li>
                            <a href="{{ route('authv3.login.form') }}">
                                Finance
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('property.login') }}">
                                Property
                            </a>
                        </li>

                    </ul>

                </li>

            </ul>

        </li>


        <!-- HOME -->
        <li>
            <a href="{{ url('/') }}">
                Home
            </a>
        </li>


        <!-- ABOUT -->
        <li>
            <a href="{{ url('/about') }}">
                About Us
            </a>
        </li>


        <!-- SERVICES -->
        <li class="has-submenu">

            <a
                href="{{ url('/services') }}"
                id="servicesToggle"
            >

                <span>
                    Services
                </span>

                <i class="fas fa-chevron-right"></i>

            </a>


            <ul
                class="submenu"
                id="servicesSubmenu"
            >

                <li>
                    <a href="{{ url('/home-loan') }}">
                        Home Loan
                    </a>
                </li>

                <li>
                    <a href="{{ url('/loan-against-property') }}">
                        Loan Against Property
                    </a>
                </li>

                <li>
                    <a href="{{ url('/project-loan') }}">
                        Project Loan
                    </a>
                </li>

                <li>
                    <a href="{{ url('/overdraft-facility') }}">
                        Overdraft Facility
                    </a>
                </li>

                <li>
                    <a href="{{ url('/msme-loan') }}">
                        MSME Loan
                    </a>
                </li>

                <li>
                    <a href="{{ url('/lease-rental-discounting') }}">
                        Lease Rental Discounting
                    </a>
                </li>

            </ul>

        </li>


        <!-- CALCULATOR -->
        <li>

            <a href="{{ url('/eligibility-calculator') }}">
                Calculator
            </a>

        </li>


        <!-- CONTACT -->
        <li>

            <a href="{{ url('/contact') }}">
                Contact
            </a>

        </li>

    </ul>

</div>


<!-- =========================================================
     LOGIN PAGE
========================================================= -->

<div class="auth-page">


    <div class="auth-wrapper">


        <!-- =================================================
             LEFT SIDE - LOGIN FORM
        ================================================== -->

        <div class="auth-form-column">

            <div class="auth-form-content">


                <!-- JF LOGO -->
                <div class="auth-logo-top">

                    <img
                        src="{{ asset('theme/dhara-jfin/img/logo.jpg') }}"
                        alt="JFinserve Logo"
                    >

                </div>


                <!-- HEADING -->
                <h2 class="auth-heading">
                    Welcome To JFinmate
                </h2>


                <p class="auth-subheading">
                    Sign in securely to access your financial account.
                </p>


                <!-- SUCCESS -->
                @if(session('success'))

                    <div class="auth-message-success">

                        {{ session('success') }}

                    </div>

                @endif


                <!-- ERRORS -->
                @if($errors->any())

                    <div class="auth-message-error">

                        {{ $errors->first() }}

                    </div>

                @endif


                <!-- LOGIN TYPE -->
                <div class="login-switch">

                    <label>

                        <input
                            type="radio"
                            name="loginType"
                            checked
                            onclick="toggleLogin('email')"
                        >

                        <i class="fa-solid fa-envelope"></i>

                        Email Login

                    </label>


                    <label>

                        <input
                            type="radio"
                            name="loginType"
                            onclick="toggleLogin('otp')"
                        >

                        <i class="fa-solid fa-mobile-screen"></i>

                        OTP Login

                    </label>

                </div>


                <!-- =================================================
                     EMAIL LOGIN
                ================================================== -->

                <form
                    method="POST"
                    action="{{ route('authv3.login.email') }}"
                    id="emailBox"
                >

                    @csrf


                    <div class="form-field">

                        <label>
                            Email Address
                        </label>

                        <input
                            type="email"
                            name="email_id"
                            placeholder="Enter your email address"
                            required
                        >

                    </div>


                    <div class="form-field">

                        <label>
                            Password
                        </label>


                        <div class="password-wrapper">

                            <input
                                type="password"
                                name="password"
                                id="passwordInput"
                                placeholder="Enter your password"
                                required
                            >

                            <i
                                class="fa-solid fa-eye"
                                id="togglePassword"
                            ></i>

                        </div>

                    </div>


                    <button
                        type="submit"
                        class="btn-primary"
                    >

                        Login

                        <i
                            class="fa-solid fa-arrow-right"
                            style="margin-left:8px;"
                        ></i>

                    </button>

                </form>


                <!-- =================================================
                     OTP LOGIN
                ================================================== -->

                <form
                    method="POST"
                    action="{{ route('authv3.login.otp') }}"
                    id="otpBox"
                    style="display:none;"
                >

                    @csrf


                    <div class="form-field">

                        <label>
                            Mobile Number
                        </label>

                        <input
                            type="text"
                            name="mobile_no"
                            maxlength="10"
                            placeholder="Enter 10 digit mobile number"
                            required
                        >

                    </div>


                    <button
                        type="submit"
                        class="btn-primary"
                    >

                        Send OTP

                        <i
                            class="fa-solid fa-paper-plane"
                            style="margin-left:8px;"
                        ></i>

                    </button>

                </form>


                <!-- CREATE ACCOUNT -->
                <div class="auth-footer-link">

                    New user?

                    <a href="{{ route('authv3.signup.form') }}">
                        Create Account
                    </a>

                </div>


                <!-- FORGOT PASSWORD -->
                <div
                    style="
                        text-align:center;
                        margin-top:10px;
                        font-size:13px;
                    "
                >

                    <a href="{{ route('authv3.forgot.form') }}">
                        Forgot Password?
                    </a>

                </div>


            </div>

        </div>


        <!-- =================================================
             RIGHT SIDE - PROMO
        ================================================== -->

        <div class="auth-promo-column">

            <div class="promo-content">


                <!-- GRAPH -->
                <div class="analytics-card">

                    <div class="analytics-header">

                        <div>

                            <h3>
                                Portfolio Growth
                            </h3>

                            <p class="card-subtitle">
                                Last 6 Months Performance
                            </p>

                        </div>


                        <div class="chart-value">
                            +28.5%
                        </div>

                    </div>


                    <div class="line-chart-premium">

                        <svg
                            viewBox="0 0 300 180"
                            preserveAspectRatio="none"
                        >

                            <!-- GRID -->

                            <line
                                x1="0"
                                y1="150"
                                x2="300"
                                y2="150"
                                stroke="#e5e7eb"
                            />

                            <line
                                x1="0"
                                y1="110"
                                x2="300"
                                y2="110"
                                stroke="#e5e7eb"
                            />

                            <line
                                x1="0"
                                y1="70"
                                x2="300"
                                y2="70"
                                stroke="#e5e7eb"
                            />


                            <!-- LINE -->

                            <polyline
                                fill="none"
                                stroke="#295cab"
                                stroke-width="4"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                points="
                                10,140
                                60,120
                                110,100
                                160,75
                                210,55
                                260,35
                                "
                            />


                            <!-- DOTS -->

                            <circle
                                cx="10"
                                cy="140"
                                r="4"
                                fill="#295cab"
                            />

                            <circle
                                cx="60"
                                cy="120"
                                r="4"
                                fill="#295cab"
                            />

                            <circle
                                cx="110"
                                cy="100"
                                r="4"
                                fill="#295cab"
                            />

                            <circle
                                cx="160"
                                cy="75"
                                r="4"
                                fill="#295cab"
                            />

                            <circle
                                cx="210"
                                cy="55"
                                r="4"
                                fill="#295cab"
                            />

                            <circle
                                cx="260"
                                cy="35"
                                r="4"
                                fill="#295cab"
                            />

                        </svg>

                    </div>

                </div>


                <!-- PROMO -->
                <div class="promo-text">

                    <h2>
                        Secure & Smart
                        <br>
                        Financial Platform
                    </h2>


                    <p>
                        Manage your financial journey with a secure,
                        simple and trusted platform designed for you.
                    </p>


                    <div class="feature-item">

                        <i class="fas fa-check-circle"></i>

                        Fast OTP Login

                    </div>


                    <div class="feature-item">

                        <i class="fas fa-check-circle"></i>

                        Secure Authentication

                    </div>


                    <div class="feature-item">

                        <i class="fas fa-check-circle"></i>

                        Trusted Financial Services

                    </div>

                </div>


            </div>

        </div>


    </div>

</div>


<!-- =========================================================
     LOGIN TYPE SCRIPT
========================================================= -->

<script>

function toggleLogin(type) {

    document.getElementById('emailBox').style.display =
        type === 'email' ? 'block' : 'none';

    document.getElementById('otpBox').style.display =
        type === 'otp' ? 'block' : 'none';

}

</script>


<!-- =========================================================
     PASSWORD TOGGLE
========================================================= -->

<script>

document
    .getElementById('togglePassword')
    .addEventListener('click', function () {

        const passwordInput =
            document.getElementById('passwordInput');

        if (passwordInput.type === 'password') {

            passwordInput.type = 'text';

            this.classList.remove('fa-eye');

            this.classList.add('fa-eye-slash');

        } else {

            passwordInput.type = 'password';

            this.classList.remove('fa-eye-slash');

            this.classList.add('fa-eye');

        }

    });

</script>


<!-- =========================================================
     MOBILE MENU SCRIPT
========================================================= -->

<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {

        initializeMobileMenu();

    }
);


function initializeMobileMenu() {

    const menuToggle =
        document.getElementById('mobile-menu');

    const mobileMenu =
        document.getElementById('mobileMenu');

    const signInBtn =
        document.getElementById('signInBtnNew');

    const signInMenu =
        document.getElementById('signInMenu');

    const servicesToggle =
        document.getElementById('servicesToggle');

    const servicesSubmenu =
        document.getElementById('servicesSubmenu');

    const clientToggle =
        document.getElementById('clientToggle');

    const clientSubmenu =
        document.getElementById('clientSubmenu');


    if (!menuToggle || !mobileMenu) {

        return;

    }


    /* =============================================
       MOBILE MENU
    ============================================= */

    menuToggle.onclick = function () {

        menuToggle.classList.toggle('active');

        mobileMenu.classList.toggle('active');

        if (mobileMenu.classList.contains('active')) {

            document.body.style.overflow = 'hidden';

        } else {

            document.body.style.overflow = '';

        }

    };


    /* =============================================
       SIGN IN
    ============================================= */

    if (signInBtn && signInMenu) {

        signInBtn.onclick = function (e) {

            e.preventDefault();

            e.stopPropagation();


            const isHidden =
                signInMenu.style.display === 'none' ||
                signInMenu.style.display === '';


            if (isHidden) {

                signInMenu.style.display = 'block';

                signInBtn.classList.add('active');

                const arrow =
                    signInBtn.querySelector('.fa-chevron-right');

                if (arrow) {

                    arrow.style.transform =
                        'rotate(90deg)';

                }

            } else {

                signInMenu.style.display = 'none';

                signInBtn.classList.remove('active');

                const arrow =
                    signInBtn.querySelector('.fa-chevron-right');

                if (arrow) {

                    arrow.style.transform =
                        'rotate(0deg)';

                }

                if (clientSubmenu) {

                    clientSubmenu.classList.remove('active');

                }

                if (clientToggle) {

                    clientToggle.classList.remove('active');

                }

            }

        };

    }


    /* =============================================
       SERVICES
    ============================================= */

    if (servicesToggle && servicesSubmenu) {

        servicesToggle.onclick = function (e) {

            e.preventDefault();

            servicesSubmenu.classList.toggle('active');

            servicesToggle.classList.toggle('active');

        };

    }


    /* =============================================
       CLIENT
    ============================================= */

    if (clientToggle && clientSubmenu) {

        clientToggle.onclick = function (e) {

            e.preventDefault();

            clientSubmenu.classList.toggle('active');

            clientToggle.classList.toggle('active');

        };

    }


    /* =============================================
       CLOSE MOBILE MENU
    ============================================= */

    mobileMenu.onclick = function (e) {

        if (
            e.target.tagName === 'A' &&
            e.target.id !== 'signInBtnNew' &&
            !e.target.closest('.has-submenu') &&
            !e.target.classList.contains('mobile-signin-btn')
        ) {

            menuToggle.classList.remove('active');

            mobileMenu.classList.remove('active');

            document.body.style.overflow = '';

        }

    };

}

</script>


<!-- =========================================================
     HEADER SCROLL EFFECT
========================================================= -->

<script>

window.addEventListener(
    'scroll',
    function () {

        const header =
            document.querySelector('header');

        if (!header) {

            return;

        }

        if (window.scrollY > 30) {

            header.classList.add('scrolled');

        } else {

            header.classList.remove('scrolled');

        }

    }
);

</script>


</body>

</html>