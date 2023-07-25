<!doctype html>
<html lang="en" class="pxp-root">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Optimal Outsourcing - Company dashboard - New job offer</title>
</head>

<body style="background-color: var(--pxpMainColorLight);">
    <div class="pxp-preloader"><span>
        <img src="{{ asset('assets/images/loading.gif') }}" alt="logo">
        </span>
    </div>

    <div class="pxp-dashboard-side-panel d-none d-lg-block">
        <a href="/" class="pxp-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
        </a>

        <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
            <div class="pxp-dashboard-side-label">Admin tools</div>
            <ul class="list-unstyled">
                <li class="{{ request()->is('') ? 'pxp-active' : '' }}"><a href="{{ route('home') }}"><span
                            class="fa fa-home"></span>Home</a>
                </li>
                <li class="{{ request()->is('profile') ? 'pxp-active' : '' }}"><a href="{{ route('profile') }}"><span
                            class="fa fa-pencil"></span>Edit Profile</a></li>
                @if (auth()->user()->role === 'employer' || auth()->user()->role === 'admin')
                    <li class="{{ request()->is('jobs/new') ? 'pxp-active' : '' }}"><a
                            href="{{ route('newJob') }}"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                    <li class="{{ request()->is('jobs/manage') ? 'pxp-active' : '' }}"><a
                            href="{{ route('manageJobs') }}"><span class="fa fa-briefcase"></span>Manage
                            Jobs</a></li>
                    <li class="{{ request()->is('candidates/dashboard') ? 'pxp-active' : '' }}"><a
                            href="/candidates/dashboard"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
                    </li>
                @endif
                @if (auth()->user()->role === 'employee' || auth()->user()->role === 'admin')
                    <li class="{{ request()->is('jobs/application') ? 'pxp-active' : '' }}"><a
                            href="{{ route('application') }}"><span class="fa fa-briefcase"></span>Applications</a>
                    </li>
                @endif

                @if (auth()->user()->role === 'admin')
                    <li class="{{ request()->is('settings') ? 'pxp-active' : '' }}"><a
                            href="{{ route('settings') }}"><span class="fa fa-briefcase"></span>Settings</a>
                    </li>
                @endif
            </ul>
        </nav>

        <nav class="pxp-dashboard-side-user-nav-container">
            <div class="pxp-dashboard-side-user-nav">
                <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                    <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="pxp-dashboard-side-user-nav-avatar pxp-cover"
                            style="background-image: url(images/company-logo-1.png);"></div>
                        <div class="pxp-dashboard-side-user-nav-name">
                            {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li> --}}
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Edit profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="pxp-dashboard-content">
        <div class="pxp-dashboard-content-header">
            <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
                <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav"
                    aria-controls="pxpMobileNav">
                    <div class="pxp-line-1"></div>
                    <div class="pxp-line-2"></div>
                    <div class="pxp-line-3"></div>
                </a>
                <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard" tabindex="-1"
                    id="pxpMobileNav">
                    <div class="offcanvas-header">
                        <div class="pxp-logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="pxp-nav-mobile">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="pxp-dropdown-header">Admin tools</li>
                                <li class="nav-item"><a href="{{ route('home') }}"><span
                                            class="fa fa-home"></span>Home</a></li>
                                <li class="nav-item"><a href="{{ route('profile') }}"><span
                                            class="fa fa-pencil"></span>Edit Profile</a></li>
                                @if (auth()->user()->role === 'employer' || auth()->user()->role === 'admin')
                                    <li class="nav-item"><a href="{{ route('newJob') }}"><span
                                                class="fa fa-file-text-o"></span>New Job Offer</a></li>
                                    <li class="nav-item"><a href="/jobs/manage"><span
                                                class="fa fa-briefcase"></span>Manage
                                            Jobs</a></li>
                                    <li class="nav-item"><a href="/candidates/dashboard"><span
                                                class="fa fa-user-circle-o"></span>Candidates</a></li>
                                @endif
                                @if (auth()->user()->role === 'employee' || auth()->user()->role === 'admin')
                                    <li class="nav-item"><a href="{{ route('application') }}"><span
                                                class="fa fa-briefcase"></span>Applications</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <nav class="pxp-user-nav pxp-on-light">
                <div class="dropdown pxp-user-nav-dropdown pxp-user-notifications">
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Scott
                                    Goodwin</strong> applied for <strong>Software Engineer</strong>. <span
                                    class="pxp-is-time">20m</span></a></li>
                        <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Alayna
                                    Becker</strong> sent you a message. <span class="pxp-is-time">1h</span></a></li>
                        <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Erika
                                    Tillman</strong> applied for <strong>Team Leader</strong>. <span
                                    class="pxp-is-time">2h</span></a></li>
                        <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Scott
                                    Goodwin</strong> applied for <strong>Software Engineer</strong>. <span
                                    class="pxp-is-time">5h</span></a></li>
                        <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Alayna
                                    Becker</strong> sent you a message. <span class="pxp-is-time">1d</span></a></li>
                        <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Erika
                                    Tillman</strong> applied for <strong>Software Engineer</strong>. <span
                                    class="pxp-is-time">3d</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item pxp-link" href="company-dashboard-notifications.html">Read All</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown pxp-user-nav-dropdown">
                    <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="pxp-user-nav-avatar pxp-cover"
                            style="background-image: url(images/company-logo-1.png);"></div>
                        <div class="pxp-user-nav-name d-none d-md-block">
                            {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Edit profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')
        <footer>
            <div class="pxp-footer-copyright pxp-text-light">© 2023 Optimal outsourcing. All Right Reserved.</div>
        </footer>
    </div>

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
</body>

</html>
