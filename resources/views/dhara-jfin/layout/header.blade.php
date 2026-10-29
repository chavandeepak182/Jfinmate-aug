<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6MXC2Y0NT7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-6MXC2Y0NT7');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Jfinserv | Financial Services in Pune | Lowest Loan Interest')</title>

    <meta name="description"
          content="@yield('meta_description', 'JFinserve offers financial services and loan solutions in Pune.')">

    <meta name="keywords"
          content="@yield('meta_keywords', 'Financial Services in Pune, Loan Consultant in Pune')">

    {{-- ✅ CHANGE THIS LINE --}}
    @stack('schema')

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{ asset('theme/dhara-jfin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/dhara-jfin/css/main.css') }}">
    <script src="{{ asset('theme/dhara-jfin/js/header.js') }}"></script>

    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('theme/dhara-jfin/img/jci.png') }}">
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
           
           <li class="dropdown">

    <a href="{{ url('/services') }}">
        Services
        <i class="fas fa-chevron-down dropdown-arrow"></i>
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
             <li><a href="{{ url('/refer-earn') }}">Refer & Earn </a></li>
            <li><a href="{{ url('/properties') }}">Properties</a></li>
            <li class="dropdown">

    <a href="#">
        Resources
        <i class="fas fa-chevron-down dropdown-arrow"></i>
    </a>

    <ul class="dropdown-menu">

        <li>
            <a href="{{ url('/blogs') }}">
                Blogs
            </a>
        </li>

        <li>
            <a href="{{ url('/eligibility-calculator') }}">
                Calculator
            </a>
        </li>

    </ul>

</li>
           
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>

        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

            <div class="cta-nav">

    <a href="{{ route('authv3.login.form') }}" class="header-apply btn btn-primary">
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
    <a href="javascript:void(0)">
        <i class="fa-solid fa-caret-down"></i> Client
    </a>

    <ul class="sub-menu">

        {{-- IF USER IS LOGGED IN --}}
        @if(Session::has('role_id'))

            @php $role = session('role_id'); @endphp

                    <li>
                    @if($role == config('roles.customer'))
                        <a href="/customer/dashboard">

                    @elseif($role == config('roles.agent'))
                        <a href="/agent/dashboard">

                    @elseif($role == config('roles.dsa'))
                        <a href="/dsa/dashboard">

                    @elseif($role == config('roles.partner'))
                        <a href="/partner/dashboard">

                    @elseif($role == config('roles.admin'))
                        <a href="/admin/dashboard">

                    @else
                        <a href="/my-profile">
                    @endif

                            <i class="fa-solid fa-chart-line"></i> Dashboard
                        </a>
                    </li>

         <li>
    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit" class="dropdown-link logout-link">
            <i class="fas fa-sign-out-alt" style="margin-left:16px"></i>
            <span style="margin-left:16px;"> <b>Logout</b></span>
        </button>
    </form>
         </li>


        {{-- IF USER IS NOT LOGGED IN --}}
           @else

            <li>
                <a href="{{ route('authv3.login.form') }}">
                    <i class="fa-solid fa-coins"></i> Finance
                </a>
            </li>

            <li>
                <a href="{{ route('property.login') }}">
                    <i class="fa-solid fa-building"></i> Property
                </a>
            </li>

            @endif

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
        <li><a href="{{ url('/refer-earn') }}">Refer & Earn</a></li>
        <li><a href="{{ url('/properties') }}">Properties</a></li>

        <!-- ✅ RESOURCES with arrow + toggle -->
        <li class="has-submenu">
            <a href="javascript:void(0)" id="resourcesToggle">
                <span>Resources</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="submenu" id="resourcesSubmenu">
                <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                <li><a href="{{ url('/eligibility-calculator') }}">Calculator</a></li>
            </ul>
        </li>

        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    initMobileMenu();

    let resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if (window.innerWidth <= 1024) {
                initMobileMenu();
            }
        }, 200);
    });
});

function initMobileMenu() {
    const menuToggle      = document.getElementById('mobile-menu');
    const mobileMenu      = document.getElementById('mobileMenu');
    const signInBtn       = document.getElementById('signInBtnNew');
    const signInMenu      = document.getElementById('signInMenu');
    const servicesToggle  = document.getElementById('servicesToggle');
    const servicesSubmenu = document.getElementById('servicesSubmenu');
    const clientToggle    = document.getElementById('clientToggle');
    const clientSubmenu   = document.getElementById('clientSubmenu');
    const resourcesToggle = document.getElementById('resourcesToggle');
    const resourcesSubmenu= document.getElementById('resourcesSubmenu');

    if (!menuToggle || !mobileMenu) return;

    // ✅ GUARD: prevent re-binding listeners on multiple resize calls
    if (menuToggle.dataset.bound === 'true') return;
    menuToggle.dataset.bound = 'true';

    // ===== HAMBURGER TOGGLE =====
    menuToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        menuToggle.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.classList.toggle('menu-open');

        document.body.style.overflow =
            mobileMenu.classList.contains('active') ? 'hidden' : '';
    });

    // ===== SIGN-IN TOGGLE =====
    if (signInBtn && signInMenu) {
        signInBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = signInMenu.style.display === 'block';
            signInMenu.style.display = isOpen ? 'none' : 'block';
            signInBtn.classList.toggle('active', !isOpen);

            const arrow = signInBtn.querySelector('.fa-chevron-right');
            if (arrow) arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(90deg)';

            if (isOpen && clientSubmenu) {
                clientSubmenu.classList.remove('active');
                if (clientToggle) {
                    clientToggle.classList.remove('active');
                    const ca = clientToggle.querySelector('.fa-chevron-right');
                    if (ca) ca.style.transform = 'rotate(0deg)';
                }
            }
        });
    }

    // ===== SERVICES TOGGLE =====
    if (servicesToggle && servicesSubmenu) {
        servicesToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = servicesSubmenu.classList.toggle('active');
            servicesToggle.classList.toggle('active', isOpen);

            const arrow = servicesToggle.querySelector('.fa-chevron-right');
            if (arrow) arrow.style.transform = isOpen ? 'rotate(90deg)' : 'rotate(0deg)';
        });
    }

    // ===== CLIENT SUBMENU TOGGLE =====
    if (clientToggle && clientSubmenu) {
        clientToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = clientSubmenu.classList.toggle('active');
            clientToggle.classList.toggle('active', isOpen);

            const arrow = clientToggle.querySelector('.fa-chevron-right');
            if (arrow) arrow.style.transform = isOpen ? 'rotate(90deg)' : 'rotate(0deg)';
        });
    }

    // ===== RESOURCES TOGGLE =====
    if (resourcesToggle && resourcesSubmenu) {
        resourcesToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = resourcesSubmenu.classList.toggle('active');
            resourcesToggle.classList.toggle('active', isOpen);

            const arrow = resourcesToggle.querySelector('.fa-chevron-right');
            if (arrow) arrow.style.transform = isOpen ? 'rotate(90deg)' : 'rotate(0deg)';
        });
    }

    // ===== AUTO-CLOSE ON REAL LINK CLICK =====
    mobileMenu.addEventListener('click', function (e) {
        const link = e.target.closest('a');
        if (!link) return;
        if (link.id === 'signInBtnNew') return;
        if (link.id === 'servicesToggle') return;
        if (link.id === 'clientToggle') return;
        if (link.id === 'resourcesToggle') return;
        if (link.classList.contains('mobile-signin-btn')) return;
        // Don't close if it's a toggle anchor
        if (link.getAttribute('href') === 'javascript:void(0)') return;

        menuToggle.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
    });
}
</script>
<style>
```css
/* =========================================
   MOBILE HEADER RESPONSIVE FIX
   Keeps Apply Now & Sign In button design
   ========================================= */

@media screen and (max-width: 1024px) {

    html body header nav.container {
        width: 100% !important;
        min-height: 70px !important;
        height: auto !important;
        padding: 10px 15px !important;
        margin: 0 !important;

        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 10px !important;

        box-sizing: border-box !important;
    }

    /* Logo on the left */
    html body header .logo {
        display: block !important;
        flex: 0 1 120px !important;
        width: 120px !important;
        min-width: 0 !important;
        max-width: 120px !important;
        margin: 0 !important;
        padding: 0 !important;
        order: 1 !important;
    }

    html body header .logo a {
        display: block !important;
        line-height: 0 !important;
    }

    html body header .logo img {
        display: block !important;
        width: 100% !important;
        max-width: 120px !important;
        height: auto !important;
        max-height: 46px !important;
        object-fit: contain !important;
    }

    /* Hide desktop navigation links */
    html body header .nav-links {
        display: none !important;
    }

    /* Show both CTA buttons on mobile */
    html body header .cta-nav {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
        flex: 0 0 auto !important;
        gap: 8px !important;
        margin: 0 !important;
        padding: 0 !important;
        order: 2 !important;
    }

    /* Apply Now - same desktop design */
    html body header .cta-nav .header-apply {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;

        width: 105px !important;
        min-width: 105px !important;
        height: 42px !important;
        padding: 0 10px !important;
        margin: 0 !important;

        background: #2969df !important;
        color: #fff !important;
        border: 1px solid #2969df !important;
        border-radius: 10px !important;

        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1 !important;
        text-decoration: none !important;
        white-space: nowrap !important;
        box-sizing: border-box !important;
    }

    /* Sign In - same desktop design */
    html body header .cta-nav .signin-dropdown > .btn-sign-in {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;

        width: 82px !important;
        min-width: 82px !important;
        height: 42px !important;
        padding: 0 8px !important;
        margin: 0 !important;

        background: #fff !important;
        color: #2166ff !important;
        border: 1px solid #2166ff !important;
        border-radius: 10px !important;

        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1 !important;
        text-decoration: none !important;
        white-space: nowrap !important;
        box-sizing: border-box !important;
    }

    /* Keep Sign In dropdown positioned correctly */
    html body header .signin-dropdown {
        position: relative !important;
        flex: 0 0 auto !important;
    }

    html body header .signin-dropdown .signin-menu {
        display: none;
        position: absolute !important;
        top: calc(100% + 8px) !important;
        right: 0 !important;
        left: auto !important;
        z-index: 10000000 !important;
        min-width: 190px !important;
        background: #fff !important;
        box-shadow: 0 5px 20px rgba(0,0,0,.15) !important;
    }

    html body header .signin-dropdown:hover .signin-menu,
    html body header .signin-dropdown:focus-within .signin-menu {
        display: block !important;
    }

    /* Hamburger on the right */
    html body header #mobile-menu {
        display: flex !important;
        align-items: stretch !important;
        justify-content: space-between !important;
        flex-direction: column !important;

        width: 27px !important;
        min-width: 27px !important;
        max-width: 27px !important;
        height: 22px !important;
        min-height: 22px !important;

        margin: 0 0 0 auto !important;
        padding: 0 !important;
        border: 0 !important;
        background: transparent !important;
        flex: 0 0 27px !important;
        order: 3 !important;
        cursor: pointer !important;
        z-index: 10000001 !important;
    }

    html body header #mobile-menu .bar {
        display: block !important;
        width: 27px !important;
        min-width: 27px !important;
        height: 3px !important;
        min-height: 3px !important;
        margin: 0 !important;
        padding: 0 !important;
        background: #295cab !important;
        border-radius: 3px !important;
        transition: transform .3s ease, opacity .3s ease !important;
    }

    html body header #mobile-menu.active .bar:nth-child(1) {
        transform: translateY(9.5px) rotate(45deg) !important;
    }

    html body header #mobile-menu.active .bar:nth-child(2) {
        opacity: 0 !important;
    }

    html body header #mobile-menu.active .bar:nth-child(3) {
        transform: translateY(-9.5px) rotate(-45deg) !important;
    }
}

/* =========================================
   SMALL MOBILE SCREENS
   ========================================= */

@media screen and (max-width: 480px) {

    html body header nav.container {
        min-height: 62px !important;
        padding: 8px 10px !important;
        gap: 6px !important;
    }

    html body header .logo {
        flex-basis: 88px !important;
        max-width: 88px !important;
    }

    html body header .logo img {
        max-width: 88px !important;
        max-height: 38px !important;
    }

    html body header .cta-nav {
        gap: 5px !important;
    }

    html body header .cta-nav .header-apply {
        width: 84px !important;
        min-width: 84px !important;
        height: 36px !important;
        padding: 0 5px !important;
        font-size: 12px !important;
        border-radius: 8px !important;
    }

    html body header .cta-nav .signin-dropdown > .btn-sign-in {
        width: 65px !important;
        min-width: 65px !important;
        height: 36px !important;
        padding: 0 5px !important;
        font-size: 12px !important;
        border-radius: 8px !important;
    }

    html body header #mobile-menu {
        width: 23px !important;
        min-width: 23px !important;
        max-width: 23px !important;
        flex-basis: 23px !important;
        height: 20px !important;
        min-height: 20px !important;
    }

    html body header #mobile-menu .bar {
        width: 23px !important;
        min-width: 23px !important;
    }
}

/* Extra-small screens */
@media screen and (max-width: 350px) {

    html body header nav.container {
        padding-left: 7px !important;
        padding-right: 7px !important;
        gap: 4px !important;
    }

    html body header .logo {
        flex-basis: 76px !important;
        max-width: 76px !important;
    }

    html body header .logo img {
        max-width: 76px !important;
    }

    html body header .cta-nav .header-apply {
        width: 76px !important;
        min-width: 76px !important;
        font-size: 11px !important;
    }

    html body header .cta-nav .signin-dropdown > .btn-sign-in {
        width: 57px !important;
        min-width: 57px !important;
        font-size: 11px !important;
    }

    html body header #mobile-menu {
        width: 20px !important;
        min-width: 20px !important;
        max-width: 20px !important;
        flex-basis: 20px !important;
    }

    html body header #mobile-menu .bar {
        width: 20px !important;
        min-width: 20px !important;
    }
}
```css
/* ==========================================
   CLEAN MOBILE HEADER & MENU
   ========================================== */

@media (max-width: 1024px) {

    /* Header */
    body header {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 76px !important;
        background: #fff !important;
        z-index: 999999 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,.08) !important;
    }

    body header nav.container {
        height: 76px !important;
        min-height: 76px !important;
        padding: 0 16px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 10px !important;
    }

    body header .logo {
        width: 155px !important;
        max-width: 155px !important;
        flex: 0 1 155px !important;
        margin: 0 !important;
    }

    body header .logo img {
        width: 100% !important;
        max-width: 155px !important;
        height: auto !important;
        max-height: 52px !important;
        object-fit: contain !important;
    }

    /* Hide desktop navigation */
    body header nav.container > .nav-links {
        display: none !important;
    }

    /* Header action buttons */
    body header .cta-nav {
        display: none !important;
    }

    /* Hamburger / close icon */
    body header #mobile-menu {
        display: flex !important;
        width: 30px !important;
        min-width: 30px !important;
        height: 25px !important;
        margin-left: auto !important;
        flex: 0 0 30px !important;
        flex-direction: column !important;
        justify-content: space-between !important;
        position: relative !important;
        z-index: 1000001 !important;
        cursor: pointer !important;
    }

    body header #mobile-menu .bar {
        width: 30px !important;
        height: 3px !important;
        background: #295cab !important;
        border-radius: 3px !important;
        transition: .25s ease !important;
    }

    body header #mobile-menu.active .bar:nth-child(1) {
        transform: translateY(11px) rotate(45deg) !important;
    }

    body header #mobile-menu.active .bar:nth-child(2) {
        opacity: 0 !important;
    }

    body header #mobile-menu.active .bar:nth-child(3) {
        transform: translateY(-11px) rotate(-45deg) !important;
    }

    /* Menu panel */
    body .mobile-menu {
        display: block !important;
        position: fixed !important;
        top: 76px !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100% !important;
        height: calc(100vh - 76px) !important;
        height: calc(100dvh - 76px) !important;
        padding: 0 0 25px !important;
        margin: 0 !important;
        overflow-x: hidden !important;
        overflow-y: auto !important;
        background: #fff !important;
        z-index: 999998 !important;
        box-sizing: border-box !important;

        visibility: hidden;
        opacity: 0;
        pointer-events: none;
        transform: translateX(100%);
        transition: transform .28s ease, opacity .28s ease,
                    visibility .28s ease !important;
    }

    body .mobile-menu.active {
        visibility: visible !important;
        opacity: 1 !important;
        pointer-events: auto !important;
        transform: translateX(0) !important;
    }

    /* Blue heading */
    body .mobile-menu .menu-header {
        min-height: 80px !important;
        padding: 18px 22px !important;
        display: flex !important;
        align-items: center !important;
        background: linear-gradient(110deg,#2458ef,#124ca7) !important;
        box-sizing: border-box !important;
    }

    body .mobile-menu .menu-header h3 {
        margin: 0 !important;
        color: #fff !important;
        font-size: 18px !important;
        font-weight: 700 !important;
        line-height: 1.4 !important;
    }

    /* Menu list */
    body .mobile-menu .nav-menu {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 12px 0 0 !important;
        list-style: none !important;
        gap: 0 !important;
    }

    /* CTA rows */
    body .mobile-menu .nav-menu > li.mobile-cta-item-new {
        margin: 13px 23px !important;
        padding: 0 !important;
        width: auto !important;
        border: 0 !important;
        list-style: none !important;
    }

    body .mobile-menu .mobile-apply-btn,
    body .mobile-menu .mobile-signin-btn {
        position: relative !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 10px !important;
        width: 100% !important;
        height: 60px !important;
        padding: 0 18px !important;
        border-radius: 10px !important;
        color: #fff !important;
        font-size: 17px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        box-sizing: border-box !important;
    }

    body .mobile-menu .mobile-apply-btn {
        background: linear-gradient(110deg,#2458ef,#124ca7) !important;
    }

    body .mobile-menu .mobile-signin-btn {
        background: #dc3044 !important;
    }

    body .mobile-menu .mobile-signin-btn .fa-chevron-right {
        position: absolute !important;
        right: 16px !important;
    }

    /* Navigation items */
    body .mobile-menu .nav-menu > li:not(.mobile-cta-item-new) {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        border-bottom: 1px solid #ededed !important;
        box-sizing: border-box !important;
    }

    body .mobile-menu .nav-menu > li > a {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        min-height: 69px !important;
        padding: 16px 23px !important;
        color: #171717 !important;
        background: #fff !important;
        font-size: 17px !important;
        font-weight: 500 !important;
        text-decoration: none !important;
        box-sizing: border-box !important;
    }

    body .mobile-menu .nav-menu > li > a i {
        color: #8794a7 !important;
    }

    /* Submenus */
    body .mobile-menu .submenu {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        background: #f7f9fc !important;
        list-style: none !important;
    }

    body .mobile-menu .submenu > li > a {
        display: flex !important;
        align-items: center !important;
        min-height: 48px !important;
        padding: 12px 32px !important;
        color: #333 !important;
        font-size: 15px !important;
        text-decoration: none !important;
    }

    /* Content begins below fixed header */
    body {
        padding-top: 76px !important;
    }
}

/* Small phones */
@media (max-width: 480px) {

    body header,
    body header nav.container {
        height: 64px !important;
        min-height: 64px !important;
    }

    body header nav.container {
        padding: 0 13px !important;
    }

    body header .logo {
        width: 135px !important;
        max-width: 135px !important;
        flex-basis: 135px !important;
    }

    body header .logo img {
        max-width: 135px !important;
        max-height: 45px !important;
    }

    body .mobile-menu {
        top: 64px !important;
        height: calc(100vh - 64px) !important;
        height: calc(100dvh - 64px) !important;
    }

    body {
        padding-top: 64px !important;
    }
}
```
    
/* ===== SUBMENU ARROW SMOOTHNESS ===== */
.mobile-menu .has-submenu > a .fa-chevron-right,
.mobile-menu #signInBtnNew .fa-chevron-right {
    transition: transform 0.3s ease;
    display: inline-block;
}

/* ===== SUBMENU ANIMATION ===== */
.mobile-menu .submenu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.mobile-menu .submenu.active {
    max-height: 500px;
}

/* Nested submenu */
.mobile-menu .nested-submenu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.mobile-menu .nested-submenu.active {
    max-height: 300px;
}

/* ===== LOGOUT FORM ===== */
.logout-form button {
    background: none;
    border: none;
    padding: 0;
    width: 100%;
    text-align: left;
    cursor: pointer;
}
.logout-link {
    width: 100%;
    text-align: left;
}
.logout-link:hover {
    background-color: #f3f4f6;
}

/* ===== MOBILE LOGO FIX ===== */
@media (max-width: 1024px) {
    header nav.container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 15px;
        position: relative;
    }
    .logo { flex: 0 0 auto; max-width: 140px; }
    .logo a { display: block; line-height: 0; }
    .logo img {
        width: 100%; height: auto;
        max-height: 50px;
        object-fit: contain;
        display: block;
    }
    .nav-links, .cta-nav { display: none; }

    .menu-toggle {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 28px;
        height: 22px;
        cursor: pointer;
        z-index: 1001;
        margin-left: auto;
    }
    .menu-toggle .bar {
        display: block;
        height: 3px;
        width: 100%;
        background: #000;
        border-radius: 2px;
        transition: 0.3s;
    }
    .menu-toggle.active .bar:nth-child(1) { transform: translateY(9px) rotate(45deg); }
    .menu-toggle.active .bar:nth-child(2) { opacity: 0; }
    .menu-toggle.active .bar:nth-child(3) { transform: translateY(-9px) rotate(-45deg); }
}
@media (max-width: 480px) {
    .logo { max-width: 110px; }
    .logo img { max-height: 42px; }
}
/* =========================================================
   FORCE MOBILE HAMBURGER - LIVE FIX
   ========================================================= */

@media screen and (max-width: 1024px) {

   html body header {
    width: 100% !important;
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;

    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;

    z-index: 999999 !important;

    margin: 0 !important;
    padding: 0 !important;

    background: #fff !important;

    box-shadow: 0 2px 10px rgba(0,0,0,0.08) !important;
}

    html body header nav.container {
        width: 100% !important;
        min-height: 64px !important;
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: space-between !important;
        position: relative !important;
        padding: 10px 15px !important;
        margin: 0 !important;
    }

    /* LOGO */
    html body header .logo {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        width: auto !important;
        max-width: 140px !important;
        flex: 0 0 auto !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    html body header .logo a {
        display: block !important;
        visibility: visible !important;
    }

    html body header .logo img {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        width: 120px !important;
        max-width: 120px !important;
        height: auto !important;
        max-height: 45px !important;
        object-fit: contain !important;
    }

    /* HAMBURGER MAIN BOX */
    html body header #mobile-menu {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;

        position: relative !important;
        z-index: 9999999 !important;

        width: 30px !important;
        min-width: 30px !important;
        max-width: 30px !important;

        height: 24px !important;
        min-height: 24px !important;
        max-height: 24px !important;

        margin-left: auto !important;
        margin-right: 0 !important;

        padding: 0 !important;
        border: 0 !important;
        background: transparent !important;

        flex: 0 0 30px !important;

        flex-direction: column !important;
        justify-content: space-between !important;
        align-items: stretch !important;

        cursor: pointer !important;
    }

    /* HAMBURGER LINES */
    html body header #mobile-menu .bar {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;

        width: 30px !important;
        min-width: 30px !important;
        height: 3px !important;
        min-height: 3px !important;

        margin: 0 !important;
        padding: 0 !important;

        background-color: #295cab !important;
        border-radius: 3px !important;

        transform: none;
    }
    

    /* ACTIVE */
    html body header #mobile-menu.active .bar:nth-child(1) {
        transform: translateY(10px) rotate(45deg) !important;
    }

    html body header #mobile-menu.active .bar:nth-child(2) {
        opacity: 0 !important;
    }

    html body header #mobile-menu.active .bar:nth-child(3) {
        transform: translateY(-10px) rotate(-45deg) !important;
    }

    /* DESKTOP ITEMS HIDE */
    html body header .nav-links,
    html body header .cta-nav {
        display: none !important;
    }
}


/* VERY SMALL MOBILE */
@media screen and (max-width: 480px) {

    html body header nav.container {
        min-height: 60px !important;
        padding: 8px 12px !important;
    }

    html body header .logo img {
        width: 110px !important;
        max-width: 110px !important;
        max-height: 42px !important;
    }

    html body header #mobile-menu {
        width: 28px !important;
        min-width: 28px !important;
        max-width: 28px !important;

        height: 22px !important;
        min-height: 22px !important;
        max-height: 22px !important;

        flex-basis: 28px !important;
    }

    html body header #mobile-menu .bar {
        width: 28px !important;
        min-width: 28px !important;
    }
}
/* ===== MOBILE HEADER TO BANNER GAP FIX ===== */

html,
body {
    margin: 0 !important;
    padding: 0 !important;
}

@media screen and (max-width: 1024px) {

    body {
        margin: 0 !important;
        padding: 0 !important;
    }

    header {
        margin: 0 !important;
        padding: 0 !important;
        border: 0 !important;
    }

    header nav.container {
        margin: 0 !important;
    }

    main {
        margin: 0 !important;
        padding: 0 !important;
    }

    .video-hero {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
        position: relative !important;
        top: 0 !important;
    }

    .video-hero video {
        display: block !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }
}
/* ===== MOBILE BANNER TOP GAP FIX ===== */
@media screen and (max-width: 1024px) {
    .video-hero {
        margin-top: 0 !important;
    }
}
@media screen and (max-width: 1024px) {
    html body header .logo img {
        /* display: block !important; */
        /* visibility: visible !important; */
        /* opacity: 1 !important; */
        width: 200px !important;
        max-width: 252px !important;
        height: auto !important;
        max-height: 144px !important;
        /* object-fit: contain !important; */
    }
}
/* =====================================================
   MOBILE FIXED HEADER + FULL BANNER
   ===================================================== */

@media screen and (max-width: 1024px) {

    html,
    body {
        margin: 0 !important;
    }

    body {
        padding-top: 64px !important;
    }

    html body header {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;

        width: 100% !important;
        z-index: 999999 !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #fff !important;
    }

    /*
       Banner should start normally below header
    */
    main {
        margin-top: 0 !important;
    }

    .video-hero {
        margin-top: 0 !important;
    }
}


/* SMALL MOBILE */
@media screen and (max-width: 480px) {

    body {
        padding-top: 60px !important;
    }

}


/* ===== HEADER BUTTON DESIGN ===== */

header .cta-nav {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Apply Now Button */
header .cta-nav .header-apply {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    width: 131px;
    height: 47px;
    padding: 0 20px !important;
    margin: 0 !important;
    background-color: #2969df !important;
    color: #ffffff !important;
    border: 1px solid #2969df !important;
    border-radius: 10px !important;
    font-size: 18px;
    font-weight: 400;
    line-height: 1;
    text-decoration: none !important;
    box-sizing: border-box;
}

/* Login / Sign In Button */
header .cta-nav .signin-dropdown > .btn-sign-in {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    width: 113px;
    height: 44px;
    padding: 0 15px !important;
    margin: 0 !important;
    background: #ffffff !important;
    color: #2166ff !important;
    border: 1px solid #2166ff !important;
    border-radius: 10px !important;
    font-size: 18px;
    font-weight: 400;
    line-height: 1;
    text-decoration: none !important;
    box-sizing: border-box;
    white-space: nowrap;
}

/* Hover Effects */
header .cta-nav .header-apply:hover {
    background-color: #1f58c4 !important;
    border-color: #1f58c4 !important;
}

header .cta-nav .signin-dropdown > .btn-sign-in:hover {
    background-color: #f4f7ff !important;
}

/* Mobile */
@media (max-width: 1024px) {
    header .cta-nav {
        display: none !important;
    }
}

</style>
</body>
</html>