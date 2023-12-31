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

    <title>Optimal Outsourcing</title>
</head>

<body>
    <div class="pxp-preloader">
        <span>
            {{-- add a spinner gif --}}
            <img src="{{ asset('assets/images/loading.gif') }}" alt="logo">
        </span>
    </div>

    <header class="pxp-header fixed-top">
        <div class="pxp-container">
            <div class="pxp-header-container">
                <div class="pxp-logo">
                    <a href="/" class="pxp-animate">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="pxp-nav-trigger navbar d-xl-none flex-fill">
                    <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav"
                        aria-controls="pxpMobileNav">
                        <div class="pxp-line-1"></div>
                        <div class="pxp-line-2"></div>
                        <div class="pxp-line-3"></div>
                    </a>
                    <div class="offcanvas offcanvas-start pxp-nav-mobile-container" tabindex="-1" id="pxpMobileNav">
                        <div class="offcanvas-header">
                            <div class="pxp-logo">
                                <a href="/" class="pxp-animate">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                </a>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <nav class="pxp-nav-mobile">
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="nav-item dropdown">
                                        <a role="button" href="/">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="/jobs">Find Jobs</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="/candidates">Candidates</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="/cv-generator">CV Generator</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="/register" class="nav-link">Register</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="/login" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="/about-us"class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="/contact-us" class="nav-link">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                    <ul>
                        <li class="dropdown">
                            <a href="/">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="/jobs">Find Jobs</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('candidates') }}">Candidates</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/cv-generator">CV Generator</a>
                        </li>
                        <li class="dropdown">
                            <a href="/about-us">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="/contact-us">Contact Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="/faqs">FAQs</a>
                        </li>
                    </ul>
                </nav>
                <nav class="pxp-user-nav d-none d-sm-flex">
                    <a href="/jobs/new" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn rounded-pill pxp-user-nav-trigger pxp-on-light"
                                role="button">Sign Out</button>
                        </form>
                    @else
                        <a class="btn rounded-pill pxp-user-nav-trigger pxp-on-light" href="{{ route('login') }}"
                            role="button">Sign in</a>
                    @endauth
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="pxp-main-footer mt-100">
        <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
            <div class="pxp-container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                        <div class="pxp-footer-logo">
                            <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">Optimal
                                    Outsourcing</span></a>
                        </div>
                        <div class="pxp-footer-section mt-3 mt-md-4">
                            <h3>Call us</h3>
                            <div class="pxp-footer-phone">+256 200 940 010</div>
                        </div>
                        <div class="mt-3 mt-md-4 pxp-footer-section">
                            <div class="pxp-footer-text">
                                Plot 3 Bata Close,<br>
                                5th Street Industrial Area, UG, Kampala<br>
                                hello@optimaloutsourcing.co.ug
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xxl-8">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                <div class="pxp-footer-section">
                                    <h3>For Candidates</h3>
                                    <ul class="pxp-footer-list">
                                        <li><a href="{{ route('jobs') }}">Find Jobs</a></li>
                                        <li><a href="{{ route('manageJobs') }}">Candidate Dashboard</a></li>
                                        <li><a href="{{ route('application') }}">My Applications</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                <div class="pxp-footer-section">
                                    <h3>For Employers</h3>
                                    <ul class="pxp-footer-list">
                                        <li><a href="/candidates">Find Candidates</a></li>
                                        <li><a href="/jobs/manage">Company Dashboard</a></li>
                                        <li><a href="/jobs/new">Post a Job</a></li>
                                        <li><a href="/jobs/manage">Manage Jobs</a></li>
                                        <li><a href="/candidates/dashboard">Candidates</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                <div class="pxp-footer-section">
                                    <h3>About Us</h3>
                                    <ul class="pxp-footer-list">
                                        <li><a href="/about-us">About Us</a></li>
                                        {{-- <li><a href="pricing.html">Pricing</a></li> --}}
                                        {{-- <li><a href="blog-list-1.html">Blog</a></li> --}}
                                        <li><a href="/contact-us">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                <div class="pxp-footer-section">
                                    <h3>Helpful Resources</h3>
                                    <ul class="pxp-footer-list">
                                        <li><a href="/faqs">FAQs</a></li>
                                        <li><a href="{{ route('login') }}">Sign In</a></li>
                                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
            <div class="pxp-container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-auto">
                        <div class="pxp-footer-copyright pxp-text-light">© 2023 Optmal Outsourcing. All Right Reserved.
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="pxp-footer-social mt-3 mt-lg-0">
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
</body>

</html>
