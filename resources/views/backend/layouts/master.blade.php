<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('admin/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

    @stack('style')

</head>

<body>

<div class="page">
    <!-- app-header -->
    <header class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="{{ route('dashboard') }}" class="header-logo">
                            <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="desktop-logo">
                            <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="toggle-logo">
                            <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="desktop-dark">
                            <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="toggle-dark">
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">
                <!-- Start::header-element -->
                <div class="header-element notifications-dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                        <i class="bx bx-bell header-link-icon"></i>
                        <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <!-- Start::main-header-dropdown -->
                    <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled mb-0" id="header-notification-scroll">
                            <li class="dropdown-item">
                                <div class="d-flex align-items-start">
                                    <div class="pe-2">
                                        <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-gift fs-18"></i></span>
                                    </div>
                                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has Been Shipped</a></p>
                                            <span class="text-muted fw-normal fs-12 header-notification-text">Order No: 123456 Has Shipped To Your Delivery Address</span>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="p-3 empty-header-item1 border-top">
                            <div class="d-grid">
                                <a href="notifications.html" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="p-5 empty-item1 d-none">
                            <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                <h6 class="fw-semibold mt-3">No New Notifications</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End::main-header-dropdown -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="me-sm-2 me-0">
                                <img src="{{ asset('admin/assets/images/joshua.jpg') }}" alt="img" width="32" height="32" class="rounded-circle">
                            </div>
                            <div class="d-sm-block d-none">
                                <p class="fw-semibold mb-0 lh-1">Joshua Singer</p>
                                <span class="op-7 fw-normal d-block fs-11">Business Expert</span>
                            </div>
                        </div>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success-transparent ms-auto">25</span></a></li>
                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                    </ul>
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

    </header>
    <!-- /app-header -->
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="{{ route('dashboard') }}" class="header-logo">
                <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="desktop-logo">
                <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="toggle-logo">
                <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="desktop-dark">
                <img src="{{ asset('admin/assets/images/logo.jpeg') }}" alt="logo" class="toggle-dark">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="{{ route('dashboard') }}" class="{{ request()->is('/') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-home side-menu__icon"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('kingInsoles.index') }}" class="{{ request()->is('kingInsoles') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">King Insoles</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('cosmicComfort.index') }}" class="{{ request()->is('cosmicComfort') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Cosmic Comfort (FUSGO)</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('zerosock.index') }}" class="{{ request()->is('zerosock') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">ZeroSock</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('longxinInsoles.index') }}" class="{{ request()->is('longxinInsoles') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Longxin Insoles</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('jiangxiZhicheng.index') }}" class="{{ request()->is('jiangxiZhicheng') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Jiangxi Zhicheng Health</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('spottedSocks.index') }}" class="{{ request()->is('spottedSocks') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Spotted Socks</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('jianxingShoe.index') }}" class="{{ request()->is('jianxingShoe') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Jianxing Shoe Co</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('jarWrestler.index') }}" class="{{ request()->is('jarWrestler') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">JarWrestler</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('postFlag.index') }}" class="{{ request()->is('postFlag') ? 'active' : '' }} side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Post Flag</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
    <!-- End::app-sidebar -->

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>
    <!-- End::app-content -->

    <!-- Footer Start -->
    <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a
                            href="javascript:void(0);" class="text-dark fw-semibold">12Labels</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Noor</span>
                    </a> All
                    rights
                    reserved
                </span>
        </div>
    </footer>
    <!-- Footer End -->
</div>

<div id="responsive-overlay"></div>

<!-- Popper JS -->
<script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Defaultmenu JS -->
<script src="{{ asset('admin/assets/js/defaultmenu.min.js') }}"></script>


<!-- Sticky JS -->
<script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- Apex Charts JS -->
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Chartjs Chart JS -->
<script src="{{ asset('admin/assets/libs/chart.js/chart.min.js') }}"></script>

<!-- Form Validation JS -->
<script src="{{ asset('admin/assets/js/validation.js') }}"></script>

<!-- Main Theme Js -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>

@stack('script')

</body>
</html>
