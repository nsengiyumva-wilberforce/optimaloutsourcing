@extends('layouts.app')
@section('content')
<section class="pxp-hero vh-100" style="background-color: var(--pxpMainColorLight);">
    <div class="pxp-hero-caption">
        <div class="pxp-container">
            <div class="row pxp-pl-80 align-items-center justify-content-between">
                <div class="col-12 col-xl-6 col-xxl-5">
                    <h1>Find the perfect<br><span style="color: var(--pxpMainColor);">job</span> for you</h1>
                    <div class="pxp-hero-subtitle mt-3 mt-lg-4">Search your career opportunity through <strong>{{$jobs}}</strong> jobs</div>

                    <div class="pxp-hero-form pxp-hero-form-round mt-3 mt-lg-4">
                        <form class="row gx-3 align-items-center" action="jobs-list-1.html">
                            <div class="col-12 col-sm">
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control" placeholder="Job Title or Keyword">
                                </div>
                            </div>
                            <div class="col-12 col-sm pxp-has-left-border">
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto">
                                <button><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <div class="pxp-hero-searches-container">
                        <div class="pxp-hero-searches-label">Popular Searches</div>
                        <div class="pxp-hero-searches">
                            <div class="pxp-hero-searches-items">
                                <a href="jobs-list-1.html">Work from home</a>
                                <a href="jobs-list-1.html">Part-time</a>
                                <a href="jobs-list-1.html">Administration</a>
                                <a href="jobs-list-1.html">Finance</a>
                                <a href="jobs-list-1.html">Retail</a>
                                <a href="jobs-list-1.html">IT</a>
                                <a href="jobs-list-1.html">Engineering</a>
                                <a href="jobs-list-1.html">Sales</a>
                                <a href="jobs-list-1.html">Manufacturing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block col-xl-5 position-relative">
                    <div class="pxp-header-side-image pxp-has-animation">
                        <img src="{{asset('assets/images/hero-illustration.png')}}" alt="Find the perfect job for you">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="pxp-hero-logos-carousel-container">
        <div class="pxp-container">
            <div class="row pxp-pl-80">
                <div class="col-12 col-xl-6">
                    <div class="pxp-hero-logos-carousel owl-carousel">
                        <img src="{{ asset('assets/images/hero-logo-1.svg')}}" alt="Logo 1">
                        <img src="{{ asset('assets/images/hero-logo-2.svg')}}" alt="Logo 2">
                        <img src="{{ asset('assets/images/hero-logo-3.svg')}}" alt="Logo 3">
                        <img src="{{ asset('assets/images/hero-logo-4.svg')}}" alt="Logo 4">
                        <img src="{{ asset('assets/images/hero-logo-5.svg')}}" alt="Logo 5">
                        <img src="{{ asset('assets/images/hero-logo-6.svg')}}" alt="Logo 6">
                        <img src="{{ asset('assets/images/hero-logo-7.svg')}}" alt="Logo 7">
                        <img src="{{ asset('assets/images/hero-logo-1.svg')}}" alt="Logo 8">
                        <img src="{{ asset('assets/images/hero-logo-2.svg')}}" alt="Logo 9">
                        <img src="{{ asset('assets/images/hero-logo-3.svg')}}" alt="Logo 10">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="pxp-hero-right-bg-card pxp-has-animation"></div>
</section>

<section class="mt-100">
    <div class="pxp-container">
        <div class="row justify-content-between align-items-end">
            <div class="col-auto">
                <h2 class="pxp-section-h2">Search by Category</h2>
                <p class="pxp-text-light">Search your career opportunity with our categories</p>
            </div>
            <div class="col-auto">
                <div class="text-right">
                    <a href="jobs-list-1.html" class="btn pxp-section-cta-o">All Categories<span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </div>

        <div class="pxp-categories-carousel owl-carousel mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-pie-chart"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Business Development</div>
                <div class="pxp-categories-card-2-subtitle">139 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-bullhorn"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Marketing & Communication</div>
                <div class="pxp-categories-card-2-subtitle">366 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-address-card-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Human Resources</div>
                <div class="pxp-categories-card-2-subtitle">435 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-calendar-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Project Management</div>
                <div class="pxp-categories-card-2-subtitle">324 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-comments-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Customer Service</div>
                <div class="pxp-categories-card-2-subtitle">39 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-terminal"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Software Engineering</div>
                <div class="pxp-categories-card-2-subtitle">439 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-bank"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Finance</div>
                <div class="pxp-categories-card-2-subtitle">139 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-building-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Construction</div>
                <div class="pxp-categories-card-2-subtitle">366 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-stethoscope"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Healtcare</div>
                <div class="pxp-categories-card-2-subtitle">435 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-pie-chart"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Business Development</div>
                <div class="pxp-categories-card-2-subtitle">139 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-bullhorn"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Marketing & Communication</div>
                <div class="pxp-categories-card-2-subtitle">366 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-address-card-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Human Resources</div>
                <div class="pxp-categories-card-2-subtitle">435 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-calendar-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Project Management</div>
                <div class="pxp-categories-card-2-subtitle">324 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-comments-o"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Customer Service</div>
                <div class="pxp-categories-card-2-subtitle">39 open positions</div>
            </a>
            <a href="jobs-list-1.html" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-terminal"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">Software Engineering</div>
                <div class="pxp-categories-card-2-subtitle">439 open positions</div>
            </a>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="pxp-container">
        <div class="pxp-promo-img pxp-cover pt-100 pb-100 pxp-animate-in pxp-animate-in-top" style="background:black">
            <div class="row">
                <div class="col-sm-7 col-lg-5">
                    <h2 class="pxp-section-h2 text-white">See right away whether candidates are the right fit</h2>
                    <p class="pxp-text-light text-white">We help candidates know whether they’re qualified for a job – and allow you to see their match potential – giving you a better pool of qualified candidates to choose from.</p>
                    <div class="mt-4 mt-md-5">
                        <a href="/jobs" class="btn rounded-pill pxp-section-cta">All Job Offers<span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="pxp-container">
        <h2 class="pxp-section-h2">Explore Jobs by Location</h2>
        <p class="pxp-text-light">Start your next carrer in a beautiful location</p>

        <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background: black"></div>
                        <div class="pxp-cities-card-1-name">Kampala, Uganda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">366 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Mbarara, Uganda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">288 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Lagos, Nigeria</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">452 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Nairobi, Kenya</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">123 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Kinshasha, Congo</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">423 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Kigali, Rwanda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">1245 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Fort Portal, Uganda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">123 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Adis Ababa, Ethiopia</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">423 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Mombasa, Kenya</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">1245 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Ntinda, Uganda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">366 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Ruhengeri, Rwanda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">288 open positions</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-cities-card-1-container">
                <a href="jobs-list-1.html" class="pxp-cities-card-1 text-center">
                    <div class="pxp-cities-card-1-top">
                        <div class="pxp-cities-card-1-image pxp-cover" style="background:black"></div>
                        <div class="pxp-cities-card-1-name">Salt, uganda</div>
                    </div>
                    <div class="pxp-cities-card-1-bottom">
                        <div class="pxp-cities-card-1-jobs">452 open positions</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
            <a href="jobs-list-1.html" class="btn rounded-pill pxp-section-cta">More Locations<span class="fa fa-angle-right"></span></a>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="pxp-container">
        <h2 class="pxp-section-h2">Popular in USA</h2>
        <p class="pxp-text-light">Popular job categoris, titles, locations, and searches</p>

        <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-list-container">
                <div class="pxp-list mt-3 mt-md-4">
                    <h3>Popular Job Categories</h3>
                    <ul class="list-unstyled">
                        <li><a href="jobs-list-1.html">Business Development</a></li>
                        <li><a href="jobs-list-1.html">Marketing & Communication</a></li>
                        <li><a href="jobs-list-1.html">Human Resources</a></li>
                        <li><a href="jobs-list-1.html">Project Management</a></li>
                        <li><a href="jobs-list-1.html">Customer Service</a></li>
                        <li><a href="jobs-list-1.html">Software Engineering</a></li>
                        <li><a href="jobs-list-1.html">Finance</a></li>
                        <li><a href="jobs-list-1.html">Construction</a></li>
                        <li><a href="jobs-list-1.html">Healthcare</a></li>
                        <li><a href="jobs-list-1.html">Transportation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-list-container">
                <div class="pxp-list mt-3 mt-md-4">
                    <h3>Popular Job Titles</h3>
                    <ul class="list-unstyled">
                        <li><a href="jobs-list-1.html">Senior Editor</a></li>
                        <li><a href="jobs-list-1.html">Software Engineering Team Leader</a></li>
                        <li><a href="jobs-list-1.html">Techincal Support Engineer</a></li>
                        <li><a href="jobs-list-1.html">Javascript Developer</a></li>
                        <li><a href="jobs-list-1.html">Technical Writer</a></li>
                        <li><a href="jobs-list-1.html">Human Resources Coordinator</a></li>
                        <li><a href="jobs-list-1.html">Fullstack Web Developer</a></li>
                        <li><a href="jobs-list-1.html">Social Media Expert</a></li>
                        <li><a href="jobs-list-1.html">Senior Editor</a></li>
                        <li><a href="jobs-list-1.html">Team Leader</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-list-container">
                <div class="pxp-list mt-3 mt-md-4">
                    <h3>Popular Job Locations</h3>
                    <ul class="list-unstyled">
                        <li><a href="jobs-list-1.html">jobs in Kampala</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Ibadan</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Enugu</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Abuja</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Portharcourt</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Embu</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Nakuru</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Oyo</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Meru</a></li>
                        <li><a href="jobs-list-1.html">Jobs in Kaduna</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3 pxp-list-container">
                <div class="pxp-list mt-3 mt-md-4">
                    <h3>Popular Job Searches</h3>
                    <ul class="list-unstyled">
                        <li><a href="jobs-list-1.html">Work from home</a></li>
                        <li><a href="jobs-list-1.html">Part-time</a></li>
                        <li><a href="jobs-list-1.html">Administration</a></li>
                        <li><a href="jobs-list-1.html">Finance</a></li>
                        <li><a href="jobs-list-1.html">Retail</a></li>
                        <li><a href="jobs-list-1.html">IT</a></li>
                        <li><a href="jobs-list-1.html">Engineering</a></li>
                        <li><a href="jobs-list-1.html">Sales</a></li>
                        <li><a href="jobs-list-1.html">Manufacturing</a></li>
                        <li><a href="jobs-list-1.html">Work from home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
