<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('theme/dist-assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- SB Admin CSS -->
    <link href="{{ asset('theme/dist-assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- FIX: Load same Bootstrap CSS as customer -->
    <link href="{{ asset('theme/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('theme/dist-assets/css/sb-admin-3.css') }}" rel="stylesheet">

    <!-- Summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery (required for SB Admin 2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Bootstrap 4 JS (required for dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @yield('style')

    <style>
        /* =========================================================
           HEADER / ADMIN LAYOUT - UI ONLY
           No routes, Blade logic, AJAX, forms or functionality changed
        ========================================================= */

        :root {
            --jfs-primary: #2563eb;
            --jfs-primary-dark: #1d4ed8;
            --jfs-text: #26344b;
            --jfs-muted: #8a96a8;
            --jfs-border: #e7ebf1;
            --jfs-bg: #f6f8fc;
            --jfs-white: #ffffff;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            overflow: hidden;
            font-family: "Nunito", sans-serif;
            color: var(--jfs-text);
            background: var(--jfs-bg);
        }

        #wrapper {
            display: flex;
            height: 100vh;
            overflow: hidden;
            background: var(--jfs-bg);
        }

        .sidebar {
            height: 100vh;
            overflow: hidden;
            box-shadow: 3px 0 18px rgba(20, 35, 60, .08);
            z-index: 1000;
        }

        /* Keep sidebar functionality/path untouched, improve only appearance */
        .sidebar .nav-item .nav-link {
            transition: background-color .2s ease, color .2s ease;
        }

        .sidebar .nav-item .nav-link:hover {
            background: rgba(255, 255, 255, .08);
        }

        .sidebar .nav-item.active .nav-link {
            background: rgba(255, 255, 255, .10);
            border-left: 3px solid rgba(255, 255, 255, .9);
        }

        .sidebar-dark .nav-item .nav-link i {
            color: #fff;
        }

        .bg-gradient-primary {
            background: linear-gradient(180deg, #263f82 0%, #1f326b 100%) !important;
        }

        #content-wrapper {
            flex: 1;
            min-height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            background: var(--jfs-bg);
        }

        #content {
            padding: 0 22px 30px;
            min-height: 100%;
        }

        body.sidebar-toggled #content-wrapper {
            overflow-y: auto !important;
        }

        /* =========================================================
           TOPBAR
        ========================================================= */

        .topbar {
            min-height: 68px;
            margin: 0 -22px 24px !important;
            padding: 0 24px !important;
            background: rgba(255, 255, 255, .98) !important;
            border-bottom: 1px solid var(--jfs-border);
            box-shadow: 0 4px 18px rgba(20, 35, 60, .05) !important;
        }

        .topbar h4 {
            margin-left: 8px !important;
            margin-bottom: 0;
            color: #234d91 !important;
            font-size: 17px;
            font-weight: 800 !important;
            letter-spacing: .1px;
        }

        #sidebarToggleTop {
            color: var(--jfs-primary);
            font-size: 16px;
        }

        #sidebarToggleTop:hover {
            color: var(--jfs-primary-dark);
        }

        .topbar .navbar-nav {
            align-items: center;
        }

        .topbar .nav-item {
            margin-left: 5px;
        }

        /* =========================================================
           NOTIFICATION
        ========================================================= */

        #notificationDropdown {
            position: relative;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            margin: 0 4px;
            border-radius: 10px;
            color: #68758a;
            background: #f5f7fa;
            transition: all .2s ease;
        }

        #notificationDropdown:hover,
        #notificationDropdown:focus {
            color: var(--jfs-primary);
            background: #edf4ff;
        }

        #notificationDropdown .fa-bell {
            font-size: 14px;
        }

        #notification-count {
            position: absolute;
            top: -2px;
            right: -3px;
            min-width: 17px;
            height: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 4px;
            border: 2px solid #fff;
            border-radius: 20px;
            background: #ef4444 !important;
            font-size: 8px;
            font-weight: 800;
        }

        .notification-item {
            padding: 11px 15px !important;
            border-bottom: 1px solid #f0f2f5;
            color: #475467 !important;
            font-size: 11px;
            line-height: 1.45;
            white-space: normal;
        }

        .notification-item:hover {
            background: #f7faff !important;
        }

        .notification-item strong {
            color: #26344b;
            font-size: 11px;
        }

        .notification-item small {
            color: #98a2b3;
            font-size: 9px;
        }

        #notificationDropdown + .dropdown-menu {
            width: 310px;
            max-width: calc(100vw - 30px);
            padding: 0;
            overflow: hidden;
            border: 1px solid var(--jfs-border);
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(20, 35, 60, .12) !important;
        }

        #notificationDropdown + .dropdown-menu .dropdown-header {
            padding: 13px 15px;
            background: #f8fafc;
            border-bottom: 1px solid #edf0f4;
            color: #344054;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        /* =========================================================
           USER PROFILE
        ========================================================= */

        #userDropdown {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 5px 8px 5px 10px;
            border-radius: 10px;
            transition: background-color .2s ease;
        }

        #userDropdown:hover,
        #userDropdown:focus {
            background: #f5f7fa;
        }

        #userDropdown .small {
            color: #475467 !important;
            font-size: 11px;
            font-weight: 700;
        }

        #userDropdown .img-profile {
            width: 34px;
            height: 34px;
            border: 2px solid #edf2f8;
            padding: 2px;
            background: #fff;
        }

        .topbar .dropdown-menu {
            min-width: 190px;
            margin-top: 8px;
            padding: 7px;
            border: 1px solid var(--jfs-border);
            border-radius: 11px;
            box-shadow: 0 12px 30px rgba(20, 35, 60, .10) !important;
        }

        .topbar .dropdown-item {
            padding: 9px 11px;
            border-radius: 7px;
            color: #475467;
            font-size: 11px;
            font-weight: 600;
        }

        .topbar .dropdown-item:hover {
            background: #f3f7fd;
            color: var(--jfs-primary);
        }

        .topbar .dropdown-divider {
            margin: 5px 0;
            border-color: #edf0f4;
        }

        /* =========================================================
           PAGE CONTENT / FORMS
        ========================================================= */

        .content .container,
        .content .container-fluid {
            max-width: 1140px;
            margin: auto;
        }

        .form-control,
        .form-select {
            height: calc(2.5rem + 2px);
            border-radius: 0.5rem;
            border-color: #dfe5ed;
            background: #fbfcfe;
            color: #344054;
            box-shadow: none;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #a9c5ef;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .06);
        }

        .step,
        .step-active {
            background: var(--jfs-primary) !important;
            color: #fff;
        }

        .form-group,
        .form-floating {
            margin-bottom: 12px;
        }

        .form-select {
            margin-bottom: 10px;
        }

        /* General cards used by pages inside content */
        #content .card {
            border: 1px solid var(--jfs-border);
            border-radius: 13px;
            box-shadow: 0 5px 20px rgba(20, 35, 60, .04);
        }

        #content .card-header {
            background: #fff;
            border-bottom: 1px solid #edf0f4;
        }

        /* =========================================================
           SCROLLBAR
        ========================================================= */

        #content-wrapper::-webkit-scrollbar {
            width: 7px;
        }

        #content-wrapper::-webkit-scrollbar-track {
            background: #f1f4f8;
        }

        #content-wrapper::-webkit-scrollbar-thumb {
            background: #cbd4df;
            border-radius: 10px;
        }

        #content-wrapper::-webkit-scrollbar-thumb:hover {
            background: #aeb9c8;
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 767px) {
            #content {
                padding: 0 12px 20px;
            }

            .topbar {
                min-height: 62px;
                margin: 0 -12px 18px !important;
                padding: 0 14px !important;
            }

            .topbar h4 {
                font-size: 14px;
                margin-left: 3px !important;
            }

            #userDropdown .small {
                display: none !important;
            }

            #userDropdown {
                padding: 4px;
            }

            #userDropdown .img-profile {
                width: 32px;
                height: 32px;
            }

            #notificationDropdown {
                width: 34px;
                height: 34px;
            }

            #notificationDropdown + .dropdown-menu {
                width: 290px;
            }
        }

        @media (max-width: 480px) {
            .topbar h4 {
                font-size: 12px;
            }

            .topbar .nav-item {
                margin-left: 2px;
            }

            #content {
                padding-left: 8px;
                padding-right: 8px;
            }

            .topbar {
                margin-left: -8px !important;
                margin-right: -8px !important;
            }
        }
    </style>
</head>

<body id="page-top">

<div id="wrapper">

    {{-- SIDEBAR --}}
    @include('layouts.sidebar')

    {{-- CONTENT WRAPPER --}}
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            {{-- TOPBAR --}}
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <h4 class="ml-3 font-weight-bold text-primary">
                    WELCOME TO JFINSERV
                </h4>

                <ul class="navbar-nav ml-auto">

                    {{-- 🔔 Notifications --}}
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" data-toggle="dropdown">
                            <i class="fas fa-bell"></i>

                            @php
                            $count = \App\Models\NotificationLog::where('user_id', session('user_id'))
                                ->where('seen_by_user', 0)
                                ->count();
                            @endphp

                            <span class="badge badge-danger" id="notification-count">
                                {{ $count }}
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="notificationDropdown">

                            <h6 class="dropdown-header">Notifications</h6>

                            @php
                                $notifications = \App\Models\NotificationLog::where('user_id', session('user_id'))
                                    ->latest()
                                    ->take(5)
                                    ->get();
                            @endphp

                            <div id="notification-list">

                                @if($notifications->count())

                                    @foreach($notifications as $n)

                                        <a href="{{ $n->url }}"
                                           class="dropdown-item notification-item {{ $n->seen_by_user ? '' : 'font-weight-bold' }}"
                                           data-id="{{ $n->id }}">

                                            <strong>{{ $n->title }}</strong><br>
                                            <small>{{ $n->description }}</small>

                                        </a>

                                    @endforeach

                                @else

                                    <div class="dropdown-item text-muted text-center">
                                        No notifications
                                    </div>

                                @endif

                            </div>

                        </div>

                    </li>

                    {{-- 👤 USER --}}
                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">

                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Session::get('username') }}
                            </span>

                            <img class="img-profile rounded-circle"
                                 src="{{ asset('theme/dist-assets/img/undraw_profile.svg') }}">

                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

                            <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- ✅ CORRECT LOGOUT -->
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>

                    </li>

                </ul>
            </nav>

            {{-- PAGE CONTENT --}}
            @yield('content')

        </div>
    </div>
</div>

{{-- JS --}}

<script src="{{ asset('theme/dist-assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('theme/dist-assets/js/sb-admin-2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@yield('script')
@stack('scripts')

</body>
</html>