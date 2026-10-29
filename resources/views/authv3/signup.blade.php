<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<style>

/* =========================================================
   GLOBAL RESET
========================================================= */

*,
*::before,
*::after {
    box-sizing: border-box;
}

html {
    width: 100%;
    min-height: 100%;
    scroll-behavior: smooth;
}

body {
    margin: 0;
    padding: 0;

    width: 100%;
    min-height: 100vh;

    font-family: -apple-system, BlinkMacSystemFont,
                 "Segoe UI", Roboto, Arial, sans-serif;

    background: #f6f9fd;
    color: #1f2937;

    overflow-x: hidden;
}

img {
    max-width: 100%;
}


/* =========================================================
   COMMON CONTAINER
========================================================= */

.container {
    width: 100%;
    max-width: 1140px;

    margin: 0 auto;

    padding-left: 20px;
    padding-right: 20px;
}


/* =========================================================
   HEADER
========================================================= */

header {
    position: fixed;

    top: 0;
    left: 0;

    width: 100%;
    height: 68px;

    background: #ffffff;

    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);

    z-index: 1000;

    transition: all 0.3s ease;
}

header.scrolled {
    width: 94%;
    max-width: 1200px;

    top: 8px;
    left: 50%;

    transform: translateX(-50%);

    height: 66px;

    border-radius: 40px;

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}


/* =========================================================
   NAV
========================================================= */

nav {
    width: 100%;
    height: 68px;

    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 20px;
}

header.scrolled nav {
    height: 66px;
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
    display: block;

    width: auto;
    height: 38px;

    max-width: 180px;

    object-fit: contain;
}

header.scrolled .logo img {
    height: 34px;
}


/* =========================================================
   DESKTOP NAV LINKS
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
    display: flex;

    align-items: center;

    text-decoration: none;

    color: #1f2937;

    font-size: 14px;

    font-weight: 500;

    white-space: nowrap;

    transition: color 0.25s ease;
}

.nav-links a:hover {
    color: #295cab;
}


/* =========================================================
   SERVICES DROPDOWN
========================================================= */

.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;

    top: calc(100% + 12px);
    left: 0;

    min-width: 245px;

    margin: 0;
    padding: 8px 0;

    background: #ffffff;

    border: 1px solid #edf0f4;

    border-radius: 10px;

    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);

    list-style: none;

    opacity: 0;
    visibility: hidden;

    transform: translateY(-8px);

    transition: all 0.25s ease;

    z-index: 1100;
}

.dropdown:hover > .dropdown-menu {
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

    width: 100%;

    padding: 11px 18px;

    color: #333333;

    font-size: 13px;

    white-space: nowrap;
}

.dropdown-menu li a:hover {
    background: #f4f8fd;

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

    min-width: 215px;
}

.signin-menu > li {
    margin: 0 !important;
}

.signin-menu > li > a {
    display: flex;

    align-items: center;

    gap: 10px;

    padding: 11px 18px;
}

.signin-menu > li > a i {
    width: 18px;

    color: #295cab;

    text-align: center;
}


/* =========================================================
   CLIENT SUBMENU
========================================================= */

.has-submenu {
    position: relative;
}

.sub-menu {
    position: absolute;

    top: 0;
    left: 100%;

    min-width: 190px;

    margin: 0;
    padding: 8px 0;

    background: #ffffff;

    border: 1px solid #edf0f4;

    border-radius: 10px;

    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);

    list-style: none;

    opacity: 0;
    visibility: hidden;

    transform: translateX(-8px);

    transition: all 0.25s ease;

    z-index: 1200;
}

.has-submenu:hover > .sub-menu {
    opacity: 1;
    visibility: visible;

    transform: translateX(0);
}

.sub-menu li {
    margin: 0 !important;
}

.sub-menu li a {
    display: flex;

    align-items: center;

    gap: 9px;

    padding: 10px 16px;
}

.sub-menu li a i {
    width: 18px;

    color: #295cab;
}


/* =========================================================
   HEADER CTA
========================================================= */

.cta-nav {
    display: flex;

    align-items: center;

    gap: 12px;

    flex-shrink: 0;
}

.btn-sign {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 40px;

    padding: 9px 20px;

    border-radius: 30px;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    white-space: nowrap;

    transition: all 0.25s ease;
}

.btn-primary-sign {
    background: #295cab;

    color: #ffffff !important;

    border: 1px solid #295cab;
}

.btn-primary-sign:hover {
    background: #1e4d96;

    transform: translateY(-1px);
}

.btn-sign-in {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-width: 88px;
    min-height: 40px;

    padding: 9px 18px;

    border-radius: 30px;

    background: #ed1b24;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    cursor: pointer;

    transition: all 0.25s ease;
}

.btn-sign-in:hover {
    background: #c9141c;

    transform: translateY(-1px);
}


/* =========================================================
   MOBILE TOGGLE
========================================================= */

.menu-toggle {
    display: none;

    width: 42px;
    height: 42px;

    padding: 7px;

    border: none;

    background: transparent;

    cursor: pointer;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    gap: 5px;

    flex-shrink: 0;
}

.menu-toggle .bar {
    display: block;

    width: 26px;
    height: 3px;

    border-radius: 4px;

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

    padding-top: 68px;

    background: #ffffff;

    overflow-y: auto;
    overflow-x: hidden;

    transform: translateX(-100%);

    transition: transform 0.3s ease;

    z-index: 999;
}

.mobile-menu.active {
    transform: translateX(0);
}

.menu-header {
    padding: 22px 20px;

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
    margin: 0;
    padding: 0;

    list-style: none;
}

.nav-menu > li {
    border-bottom: 1px solid #edf0f4;
}

.nav-menu a {
    display: flex;

    align-items: center;
    justify-content: space-between;

    width: 100%;

    padding: 15px 20px;

    color: #333333;

    text-decoration: none;

    font-size: 15px;

    font-weight: 500;
}

.nav-menu a:active {
    background: #f5f8fc;
}

.nav-menu .fa-chevron-right {
    font-size: 11px;

    color: #94a3b8;

    transition: transform 0.25s ease;
}


/* =========================================================
   MOBILE CTA
========================================================= */

.mobile-cta-item-new {
    padding: 10px 20px !important;

    border-bottom: none !important;
}

.mobile-apply-btn,
.mobile-signin-btn {
    position: relative;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    width: 100%;

    min-height: 48px;

    padding: 13px 20px !important;

    border-radius: 10px;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 14px;

    font-weight: 600;

    gap: 9px;
}

.mobile-apply-btn {
    background: #295cab;
}

.mobile-signin-btn {
    background: #ed1b24;
}

.mobile-signin-btn .fa-chevron-right {
    position: absolute;

    right: 20px;

    margin: 0;
}

.mobile-signin-btn.active .fa-chevron-right {
    transform: rotate(90deg);
}


/* =========================================================
   MOBILE SUBMENU
========================================================= */

.submenu {
    max-height: 0;

    overflow: hidden;

    margin: 0;
    padding: 0;

    background: #f6f8fb;

    list-style: none;

    transition: max-height 0.3s ease;
}

.submenu.active {
    max-height: 600px;
}

.submenu li {
    border-bottom: 1px solid #e7ebf0;
}

.submenu li:last-child {
    border-bottom: none;
}

.submenu a {
    padding: 13px 20px 13px 40px;

    font-size: 14px;

    font-weight: 400;
}

.signin-submenu {
    background: #ffffff;
}

.nested-submenu {
    background: #eef2f7;
}

.nested-submenu a {
    padding-left: 60px;
}

.has-submenu > a.active .fa-chevron-right {
    transform: rotate(90deg);
}


/* =========================================================
   SIGNUP PAGE
========================================================= */

.auth-page {
    width: 100%;

    min-height: calc(100vh - 68px);

    margin-top: 68px;

    padding: 35px 20px;

    display: flex;

    align-items: center;
    justify-content: center;

    background:
        radial-gradient(
            circle at 5% 15%,
            rgba(41, 92, 171, 0.07),
            transparent 25%
        ),
        radial-gradient(
            circle at 95% 85%,
            rgba(0, 171, 235, 0.07),
            transparent 25%
        ),
        #f6f9fd;
}


/* =========================================================
   MAIN AUTH CARD
========================================================= */

.auth-wrapper {
    width: 100%;

    max-width: 1180px;

    min-height: 650px;

    display: grid;

    grid-template-columns: 0.95fr 1.05fr;

    background: #ffffff;

    border: 1px solid #e6ebf2;

    border-radius: 24px;

    overflow: hidden;

    box-shadow:
        0 25px 70px rgba(24, 48, 85, 0.12);
}


/* =========================================================
   LEFT FORM
========================================================= */

.auth-form-column {
    display: flex;

    align-items: center;
    justify-content: center;

    padding: 50px 60px;

    background: #ffffff;
}

.auth-form-content {
    width: 100%;

    max-width: 430px;
}


/* =========================================================
   LOGIN/SIGNUP LOGO
========================================================= */

.auth-logo-top {
    display: flex;

    align-items: center;
    justify-content: flex-start;

    margin-bottom: 25px;
}

/*
    IMPORTANT:
    The old .logo-icon and .logo-text are intentionally not used.
    Your actual logo image should be placed in the HTML.
*/

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
    margin: 0 0 26px;

    color: #172033;

    font-size: 32px;

    line-height: 1.25;

    font-weight: 700;
}


/* =========================================================
   ERROR ALERT
========================================================= */

.auth-form-content .alert-danger {
    width: 100%;

    margin: 0 0 20px;

    padding: 12px 15px;

    background: #fef2f2;

    border: 1px solid #fecaca;

    border-radius: 10px;

    color: #dc2626;

    font-size: 13px;

    line-height: 1.45;
}

.auth-form-content .alert-danger ul {
    margin: 0;

    padding-left: 18px;
}

.auth-form-content .alert-danger li {
    margin-bottom: 3px;
}

.auth-form-content .alert-danger li:last-child {
    margin-bottom: 0;
}


/* =========================================================
   FORM
========================================================= */

.auth-form-content form {
    width: 100%;

    margin: 0;
}


/* =========================================================
   FORM FIELD
========================================================= */

.form-field {
    width: 100%;

    margin-bottom: 18px;
}

.form-field label {
    display: block;

    width: 100%;

    margin-bottom: 8px;

    color: #344054;

    font-size: 13px;

    line-height: 1.4;

    font-weight: 600;
}


/* =========================================================
   ALL INPUT BOXES
========================================================= */

.form-field input,
.form-field select,
.form-field textarea {
    display: block;

    width: 100%;

    max-width: 100%;

    height: 50px;

    margin: 0;

    padding: 0 15px;

    border: 1px solid #d9e1eb;

    border-radius: 10px;

    background: #ffffff;

    color: #1f2937;

    font-family: inherit;

    font-size: 14px;

    line-height: normal;

    outline: none;

    box-shadow: none;

    transition:
        border-color 0.2s ease,
        box-shadow 0.2s ease,
        background 0.2s ease;
}

.form-field textarea {
    height: auto;

    min-height: 110px;

    padding-top: 13px;

    padding-bottom: 13px;

    resize: vertical;
}

.form-field input::placeholder,
.form-field textarea::placeholder {
    color: #a0a9b6;
}

.form-field input:hover,
.form-field select:hover,
.form-field textarea:hover {
    border-color: #b8c5d6;
}

.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus {
    border-color: #295cab;

    background: #ffffff;

    box-shadow:
        0 0 0 4px rgba(41, 92, 171, 0.09);
}


/* =========================================================
   PASSWORD FIELD
========================================================= */

.password-wrapper {
    position: relative;

    width: 100%;
}

.password-wrapper input {
    width: 100% !important;

    padding-right: 48px !important;
}

.password-wrapper i {
    position: absolute;

    top: 50%;
    right: 16px;

    width: auto !important;

    transform: translateY(-50%);

    color: #94a3b8;

    font-size: 16px;

    cursor: pointer;

    z-index: 2;

    transition: color 0.2s ease;
}

.password-wrapper i:hover {
    color: #295cab;
}


/* =========================================================
   VALIDATION TEXT
========================================================= */

.form-field .text-danger {
    display: block;

    margin-top: 6px;

    color: #dc2626 !important;

    font-size: 12px;

    line-height: 1.4;
}


/* =========================================================
   PRIMARY BUTTON
========================================================= */

.btn-primary {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 100%;

    height: 50px;

    margin-top: 5px;

    padding: 0 20px;

    border: none;

    border-radius: 10px;

    background: linear-gradient(
        135deg,
        #295cab 0%,
        #1e4fd8 100%
    );

    color: #ffffff;

    font-family: inherit;

    font-size: 15px;

    font-weight: 600;

    cursor: pointer;

    box-shadow:
        0 9px 22px rgba(41, 92, 171, 0.20);

    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease,
        background 0.2s ease;
}

.btn-primary:hover {
    transform: translateY(-1px);

    background: linear-gradient(
        135deg,
        #244f97 0%,
        #1743bd 100%
    );

    box-shadow:
        0 12px 26px rgba(41, 92, 171, 0.28);
}

.btn-primary:active {
    transform: translateY(0);
}


/* =========================================================
   DIVIDER
========================================================= */

.auth-divider {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 100%;

    margin: 24px 0;

    color: #98a2b3;

    font-size: 12px;

    font-weight: 500;
}

.auth-divider::before,
.auth-divider::after {
    content: "";

    flex: 1;

    height: 1px;

    background: #e7ebf0;
}

.auth-divider::before {
    margin-right: 14px;
}

.auth-divider::after {
    margin-left: 14px;
}


/* =========================================================
   SOCIAL BUTTON
========================================================= */

.social-btn {
    width: 100%;

    height: 48px;

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 10px;

    border: 1px solid #e5e7eb;

    border-radius: 10px;

    background: #ffffff;

    color: #374151;

    font-size: 14px;

    font-weight: 600;

    text-decoration: none;

    cursor: pointer;

    transition: all 0.2s ease;
}

.social-btn:hover {
    background: #f9fafb;

    border-color: #d1d5db;

    transform: translateY(-1px);
}

.social-btn i {
    font-size: 17px;
}

.google-btn i {
    color: #db4437;
}


/* =========================================================
   FOOTER LINK
========================================================= */

.auth-footer-link {
    width: 100%;

    margin-top: 20px;

    text-align: center;

    color: #667085;

    font-size: 13px;

    line-height: 1.5;
}

.auth-footer-link a {
    color: #295cab;

    font-weight: 600;

    text-decoration: none;
}

.auth-footer-link a:hover {
    color: #00abeb;

    text-decoration: underline;
}


/* =========================================================
   RIGHT PROMO
========================================================= */

.auth-promo-column {
    position: relative;

    display: flex;

    align-items: center;
    justify-content: center;

    padding: 50px;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 85% 15%,
            rgba(0, 171, 235, 0.35),
            transparent 30%
        ),
        linear-gradient(
            145deg,
            #173f8a 0%,
            #295cab 48%,
            #00a7df 100%
        );
}

.auth-promo-column::before {
    content: "";

    position: absolute;

    width: 290px;
    height: 290px;

    top: -130px;
    right: -100px;

    border: 1px solid rgba(255,255,255,0.12);

    border-radius: 50%;
}

.auth-promo-column::after {
    content: "";

    position: absolute;

    width: 350px;
    height: 350px;

    bottom: -190px;
    left: -150px;

    border: 1px solid rgba(255,255,255,0.08);

    border-radius: 50%;
}

.promo-content {
    position: relative;

    z-index: 2;

    width: 100%;

    max-width: 470px;
}


/* =========================================================
   PROMO TEXT
========================================================= */

.promo-text {
    margin-bottom: 30px;

    color: #ffffff;
}

.promo-text h2 {
    margin: 0 0 20px;

    color: #ffffff;

    font-size: 34px;

    line-height: 1.2;

    font-weight: 700;
}

.promo-features {
    display: flex;

    flex-direction: column;

    gap: 13px;
}

.feature-item {
    display: flex;

    align-items: center;

    gap: 11px;

    color: rgba(255,255,255,0.94);

    font-size: 14px;

    line-height: 1.5;
}

.feature-item i {
    flex: 0 0 auto;

    color: #7ff1c2;

    font-size: 17px;
}


/* =========================================================
   ANALYTICS CARD
========================================================= */

.analytics-card {
    width: 100%;

    margin-bottom: 0;

    padding: 24px;

    background: #ffffff;

    border-radius: 18px;

    box-shadow:
        0 20px 45px rgba(0,0,0,0.18);
}

.analytics-header {
    display: flex;

    align-items: flex-start;

    justify-content: space-between;

    gap: 15px;

    margin-bottom: 15px;
}

.analytics-header h3 {
    margin: 0 0 5px;

    color: #172033;

    font-size: 17px;

    line-height: 1.3;

    font-weight: 700;
}

.card-subtitle {
    margin: 0;

    color: #64748b;

    font-size: 12px;
}

.chart-value {
    color: #10b981;

    font-size: 17px;

    font-weight: 700;

    white-space: nowrap;
}

.line-chart-premium {
    width: 100%;

    height: 180px;
}

.line-chart-premium svg {
    display: block;

    width: 100%;

    height: 100%;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .container {
        padding-left: 18px;
        padding-right: 18px;
    }

    .nav-links > li {
        margin-left: 20px;
    }

    .auth-form-column {
        padding: 45px 40px;
    }

    .auth-promo-column {
        padding: 45px 35px;
    }

    .promo-text h2 {
        font-size: 30px;
    }
}


/* =========================================================
   MOBILE HEADER + AUTH
========================================================= */

@media (max-width: 1024px) {

    header {
        height: 66px;
    }

    header.scrolled {
        width: 100%;

        top: 0;
        left: 0;

        transform: none;

        border-radius: 0;

        height: 66px;
    }

    nav,
    header.scrolled nav {
        height: 66px;
    }

    .nav-links,
    .cta-nav {
        display: none !important;
    }

    .menu-toggle {
        display: flex;
    }

    .auth-page {
        margin-top: 66px;

        min-height: calc(100vh - 66px);

        padding: 25px 15px;
    }

    .auth-wrapper {
        max-width: 650px;

        display: block;

        min-height: auto;

        border-radius: 20px;
    }

    .auth-form-column {
        width: 100%;

        padding: 42px 38px;
    }

    .auth-promo-column {
        display: none;
    }

    .auth-form-content {
        max-width: 100%;
    }
}


/* =========================================================
   MOBILE 768
========================================================= */

@media (max-width: 768px) {

    .logo img {
        height: 36px;

        max-width: 165px;
    }

    .auth-page {
        padding: 22px 12px 30px;

        align-items: flex-start;
    }

    .auth-wrapper {
        width: 100%;

        border-radius: 18px;
    }

    .auth-form-column {
        padding: 35px 25px;
    }

    .auth-logo-top {
        margin-bottom: 22px;
    }

    .auth-logo-top img {
        height: 43px;

        max-width: 175px;
    }

    .auth-heading {
        font-size: 28px;

        margin-bottom: 23px;
    }

    .form-field {
        margin-bottom: 17px;
    }

    .form-field input,
    .form-field select {
        height: 49px;
    }

    .btn-primary {
        height: 49px;
    }
}


/* =========================================================
   MOBILE 600
========================================================= */

@media (max-width: 600px) {

    .container {
        padding-left: 14px;
        padding-right: 14px;
    }

    .logo img {
        height: 34px;

        max-width: 155px;
    }

    .auth-page {
        margin-top: 66px;

        padding: 18px 10px 25px;
    }

    .auth-wrapper {
        border-radius: 16px;

        box-shadow:
            0 12px 35px rgba(24,48,85,0.10);
    }

    .auth-form-column {
        padding: 30px 20px 32px;
    }

    .auth-logo-top {
        justify-content: flex-start;

        margin-bottom: 20px;
    }

    .auth-logo-top img {
        height: 40px;

        max-width: 160px;
    }

    .auth-heading {
        font-size: 25px;

        margin-bottom: 21px;
    }

    .form-field label {
        font-size: 12px;
    }

    .form-field input,
    .form-field select,
    .form-field textarea {
        height: 48px;

        font-size: 13px;
    }

    .form-field textarea {
        height: auto;

        min-height: 100px;
    }

    .password-wrapper input {
        padding-right: 46px !important;
    }

    .password-wrapper i {
        right: 14px;

        font-size: 15px;
    }

    .btn-primary {
        height: 48px;

        font-size: 14px;
    }

    .auth-divider {
        margin: 22px 0;
    }

    .auth-footer-link {
        font-size: 12px;
    }
}


/* =========================================================
   SMALL MOBILE 480
========================================================= */

@media (max-width: 480px) {

    .mobile-menu {
        padding-top: 66px;
    }

    .menu-header {
        padding: 18px 17px;
    }

    .menu-header h3 {
        font-size: 14px;
    }

    .mobile-cta-item-new {
        padding: 8px 15px !important;
    }

    .mobile-apply-btn,
    .mobile-signin-btn {
        min-height: 46px;

        font-size: 13px;
    }

    .nav-menu a {
        padding: 14px 17px;

        font-size: 14px;
    }

    .submenu a {
        padding-left: 35px;

        font-size: 13px;
    }

    .nested-submenu a {
        padding-left: 52px;
    }

    .auth-page {
        padding-left: 8px;
        padding-right: 8px;
    }

    .auth-form-column {
        padding: 27px 16px 30px;
    }

    .auth-logo-top img {
        height: 37px;

        max-width: 150px;
    }

    .auth-heading {
        font-size: 23px;
    }

    .form-field input,
    .form-field select {
        height: 46px;

        padding-left: 13px;
        padding-right: 13px;

        font-size: 13px;
    }

    .password-wrapper input {
        padding-right: 44px !important;
    }

    .btn-primary {
        height: 46px;
    }
}


/* =========================================================
   VERY SMALL MOBILE 360
========================================================= */

@media (max-width: 360px) {

    .logo img {
        height: 31px;

        max-width: 140px;
    }

    .auth-page {
        padding-left: 6px;
        padding-right: 6px;
    }

    .auth-form-column {
        padding-left: 13px;
        padding-right: 13px;
    }

    .auth-heading {
        font-size: 21px;
    }

    .auth-logo-top img {
        height: 34px;

        max-width: 140px;
    }

    .form-field label {
        font-size: 11px;
    }

    .form-field input,
    .form-field select {
        height: 45px;

        font-size: 12px;
    }

    .btn-primary {
        height: 45px;

        font-size: 13px;
    }
}


/* =========================================================
   DESKTOP ONLY
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
<header>
    <nav class="container">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('theme/dhara-jfin/img/logo.jpg') }}" alt="Jfinserv Logo">
            </a>
        </div>

        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <!-- <li><a href="{{ url('/dhara-services') }}">Services</a></li>
              -->
            <li class="dropdown">
                <a href="{{ url('/services') }}">Services</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/home-loan') }}">Home Loan</a></li>
                    <li><a href="{{ url('/loan-against-property') }}">Loan Against Property</a></li>
                    <li><a href="{{ url('/project-loan') }}">Project Loan</a></li>
                    <li><a href="{{ url('/overdraft-facility') }}">Overdraft Facility</a></li>
                    <li><a href="{{ url('/msme-loan') }}">MSME Loan</a></li>
                    <li><a href="{{ url('/lease-rental-discounting') }}">Lease Rental Discounting</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/eligibility-calculator') }}">Calculator</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>

        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

            <div class="cta-nav">

    <a href="{{ route('authv3.login.form') }}" class="header-apply btn-sign btn-primary-sign">
        Apply Now
    </a>

    <!-- Sign In Dropdown -->
    <div class="dropdown signin-dropdown">
        <a href="javascript:void(0)" class="btn-sign-in">Sign In</a>

        <ul class="nav-links dropdown-menu signin-menu">
            <li class="has-submenu">
                <a href="{{ route('login') }}"><i class="fas fa-user-tie"></i> Employee</a>
            </li>
            <li class="has-submenu">
                <a href="{{ route('login') }}"><i class="fa-regular fa-handshake"></i> Channel Partner</a>
            </li>
            <li class="has-submenu">
                <a href="javascript:void(0)"><i class="fa-solid fa-caret-down"></i> Client</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('authv3.login.form') }}"><i class="fa-solid fa-coins"></i> Finance</a></li>
                    <li><a href="{{ route('property.login') }}"><i class="fa-solid fa-building"></i> Property</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>

            
            
        </div>
    </nav>
</header>
<div class="mobile-menu" id="mobileMenu">
    <div class="menu-header">
        <h3>Trust is our foundation. We guide clients</h3>
    </div>

    <ul class="nav-menu">
        <li class="mobile-cta-item-new">
            <a href="{{ route('authv3.login.form') }}" class="mobile-apply-btn">
                <i class="fas fa-file-alt"></i>
                Apply Now
            </a>
        </li>
        <li class="mobile-cta-item-new">
            <a href="javascript:void(0)" id="signInBtnNew" class="mobile-signin-btn">
                <i class="fas fa-sign-in-alt"></i>
                Sign In
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>

        <li class="has-submenu" id="signInMenu" style="display: none;">
            <ul class="submenu signin-submenu active">
                <li><a href="{{ route('login') }}">Employee</a></li>
                <li><a href="{{ route('login') }}">Channel Partner</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)" id="clientToggle">
                        <span>Client</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="submenu nested-submenu" id="clientSubmenu">
                        <li><a href="{{ route('authv3.login.form') }}">Finance</a></li>
                        <li><a href="{{ route('property.login') }}">Property</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        
        <li class="has-submenu">
            <a href="{{ url('/services') }}" id="servicesToggle">
                <span>Services</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="submenu" id="servicesSubmenu">
                <li><a href="{{ url('/home-loan') }}">Home Loan</a></li>
                <li><a href="{{ url('/loan-against-property') }}">Loan Against Property</a></li>
                <li><a href="{{ url('/project-loan') }}">Project Loan</a></li>
                <li><a href="{{ url('/overdraft-facility') }}">Overdraft Facility</a></li>
                <li><a href="{{ url('/msme-loan') }}">MSME Loan</a></li>
                <li><a href="{{ url('/lease-rental-discounting') }}">Lease Rental Discounting</a></li>
            </ul>
        </li>

        <li><a href="{{ url('/eligibility-calculator') }}">Calculator</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</div>
<div class="auth-page">
  <div class="auth-wrapper">

    <!-- ================= LEFT FORM ================= -->
    <div class="auth-form-column">
      <div class="auth-form-content">

     <div class="auth-logo-top">

    <img
        src="{{ asset('theme/dhara-jfin/img/logo.jpg') }}"
        alt="JFinserve Logo"
    >

</div>

        <h2 class="auth-heading">Create Account</h2>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <form method="POST" action="{{ route('authv3.signup.submit') }}">
          @csrf

          <div class="form-field">
              <label>Full Name</label>
              <input type="text" name="name" value="{{ old('name') }}">
              @error('name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <div class="form-field">
              <label>Mobile Number</label>
              <input type="text" name="mobile_no" value="{{ old('mobile_no') }}">
              @error('mobile_no')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <div class="form-field">
              <label>Email Address</label>
              <input type="email" name="email_id" value="{{ old('email_id') }}">
              @error('email_id')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

         <div class="form-field">
    <label>Password</label>

    <div class="password-wrapper">
        <input type="password" name="password" id="passwordInput">
        <i class="fa-solid fa-eye" id="togglePassword"></i>
    </div>

    @error('password')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

          <button class="btn-primary">Signup & Get OTP</button>
        </form>

        <div class="auth-divider">OR</div>

        <!-- <a href="{{ route('authv3.google.login') }}" class="social-btn google-btn">
          <i class="fab fa-google"></i>
          <span>Sign up with Google</span>
        </a> -->


        <div class="auth-footer-link">
          Already have an account?
          <a href="{{ route('authv3.login.form') }}">Login</a>
        </div>

      </div>
    </div>
    <!-- ================= RIGHT PROMO ================= -->
    <div class="auth-promo-column">
      <div class="promo-content">

        <!-- ===== PROMO TEXT (TOP) ===== -->
        <div class="promo-text">
          <h2>Smart Financial Strategies for Wealth Creation</h2>

          <div class="promo-features">
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              Diversified Investment Portfolio
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              Real-time Market Analytics
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              Expert Financial Advisory
            </div>
          </div>
        </div>

        <!-- ===== GRAPH CARD (BOTTOM) ===== -->
        <div class="analytics-card">
          <div class="analytics-header">
            <div>
              <h3>Financial Growth Strategy</h3>
              <p class="card-subtitle">Portfolio Performance</p>
            </div>
            <div class="chart-value">+28.5%</div>
          </div>

          <div class="line-chart-premium">
            <svg viewBox="0 0 280 180" preserveAspectRatio="none">
              <!-- GRID -->
              <line x1="0" y1="150" x2="280" y2="150" stroke="#e5e7eb"/>
              <line x1="0" y1="110" x2="280" y2="110" stroke="#e5e7eb"/>
              <line x1="0" y1="70"  x2="280" y2="70"  stroke="#e5e7eb"/>

              <!-- LINE -->
              <polyline
                fill="none"
                stroke="#3B82F6"
                stroke-width="4"
                points="20,140 60,120 100,95 140,70 180,55 220,40 260,30"
              />

              <!-- DOTS -->
              <circle cx="20"  cy="140" r="4" fill="#3B82F6"/>
              <circle cx="60"  cy="120" r="4" fill="#3B82F6"/>
              <circle cx="100" cy="95"  r="4" fill="#3B82F6"/>
              <circle cx="140" cy="70"  r="4" fill="#3B82F6"/>
              <circle cx="180" cy="55"  r="4" fill="#3B82F6"/>
              <circle cx="220" cy="40"  r="4" fill="#3B82F6"/>
              <circle cx="260" cy="30"  r="4" fill="#3B82F6"/>
            </svg>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
<script>
// document.getElementById('mobile-menu').addEventListener('click', function () {
//     document.querySelector('.nav-links').classList.toggle('active');
// });
// document.querySelectorAll('.dropdown > a').forEach(item => {
//     item.addEventListener('click', function (e) {
//         if (window.innerWidth <= 1024) {
//             e.preventDefault();
//             this.parentElement.classList.toggle('active');
//         }
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    // Only initialize mobile menu on mobile devices
    if (window.innerWidth <= 1024) {
        initializeMobileMenu();
    }
    
    // Reinitialize on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 1024) {
            initializeMobileMenu();
        }
    });
});

function initializeMobileMenu() {
    const menuToggle = document.getElementById('mobile-menu');
    const mobileMenu = document.getElementById('mobileMenu');
    const signInBtn = document.getElementById('signInBtnNew');
    const signInMenu = document.getElementById('signInMenu');
    const servicesToggle = document.getElementById('servicesToggle');
    const servicesSubmenu = document.getElementById('servicesSubmenu');
    const clientToggle = document.getElementById('clientToggle');
    const clientSubmenu = document.getElementById('clientSubmenu');

    // Return if elements don't exist
    if (!menuToggle || !mobileMenu) return;

    // Toggle mobile menu
    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.classList.toggle('menu-open');
        // Prevent body scroll when menu is open
        if (mobileMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });

    // Sign In button toggle
    if (signInBtn && signInMenu) {
        signInBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Prevent event from bubbling up to mobileMenu click listener
            
            if (signInMenu.style.display === 'none' || signInMenu.style.display === '') {
                signInMenu.style.display = 'block';
                signInBtn.classList.add('active');
                signInBtn.querySelector('.fa-chevron-right').style.transform = 'rotate(90deg)';
            } else {
                signInMenu.style.display = 'none';
                signInBtn.classList.remove('active');
                signInBtn.querySelector('.fa-chevron-right').style.transform = 'rotate(0deg)';
                if (clientSubmenu) {
                    clientSubmenu.classList.remove('active');
                }
                if (clientToggle) {
                    clientToggle.classList.remove('active');
                }
            }
        });
    }

    // Services toggle
    if (servicesToggle && servicesSubmenu) {
        servicesToggle.addEventListener('click', function(e) {
            e.preventDefault();
            servicesSubmenu.classList.toggle('active');
            servicesToggle.classList.toggle('active');
        });
    }

    // Client toggle
    if (clientToggle && clientSubmenu) {
        clientToggle.addEventListener('click', function(e) {
            e.preventDefault();
            clientSubmenu.classList.toggle('active');
            clientToggle.classList.toggle('active');
        });
    }

    // Close menu when clicking on regular links
    mobileMenu.addEventListener('click', function(e) {
        // Only close if it's a link AND it's not the Sign In button AND not inside a submenu toggle
        if (e.target.tagName === 'A' && 
            e.target.id !== 'signInBtnNew' && 
            !e.target.closest('.has-submenu') &&
            !e.target.classList.contains('mobile-signin-btn')) {
            menuToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
}
</script>
<script>
document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordInput = document.getElementById('passwordInput');

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
w
</body>

</html>