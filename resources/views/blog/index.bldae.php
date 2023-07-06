@extends('layouts.app')
@section('content')
        <section>
            <div class="pxp-container">
                <div class="pxp-blog-hero">
                    <h1>Top Career Advice</h1>
                    <div class="pxp-hero-subtitle pxp-text-light">Browse the latest career advices</div>
                </div>

                <div id="pxp-blog-featured-posts-carousel" class="carousel slide carousel-fade pxp-blog-featured-posts-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="pxp-featured-posts-item pxp-cover" style="background-image: url(images/ph-big.jpg);">
                                <div class="pxp-hero-opacity"></div>
                                <div class="pxp-featured-posts-item-caption">
                                    <div class="pxp-featured-posts-item-caption-content">
                                        <div class="row align-content-center justify-content-center">
                                            <div class="col-9 col-md-8 col-xl-7 col-xxl-6">
                                                <div class="pxp-featured-posts-item-date">August 31, 2021</div>
                                                <div class="pxp-featured-posts-item-title">10 awesome free career self assessments</div>
                                                <div class="pxp-featured-posts-item-summary pxp-text-light mt-2">Figuring out what you want to be when you grow up is hard, but a career test can make it easier to find...</div>
                                                <div class="mt-4 mt-md-5 text-center">
                                                    <a href="single-blog-post.html" class="btn rounded-pill pxp-section-cta">Read Article<span class="fa fa-angle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="pxp-featured-posts-item pxp-cover" style="background-image: url(images/ph-big.jpg);">
                                <div class="pxp-hero-opacity"></div>
                                <div class="pxp-featured-posts-item-caption">
                                    <div class="pxp-featured-posts-item-caption-content">
                                        <div class="row align-content-center justify-content-center">
                                            <div class="col-9 col-md-8 col-xl-7 col-xxl-6">
                                                <div class="pxp-featured-posts-item-date">September 5, 2021</div>
                                                <div class="pxp-featured-posts-item-title">How to start looking for a job</div>
                                                <div class="pxp-featured-posts-item-summary pxp-text-light mt-2">Your resume is perfect. It's keyword-optimized, industry-specified, full of achievements, backed by data...</div>
                                                <div class="mt-4 mt-md-5 text-center">
                                                    <a href="single-blog-post.html" class="btn rounded-pill pxp-section-cta">Read Article<span class="fa fa-angle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="pxp-featured-posts-item pxp-cover" style="background-image: url(images/ph-big.jpg);">
                                <div class="pxp-hero-opacity"></div>
                                <div class="pxp-featured-posts-item-caption">
                                    <div class="pxp-featured-posts-item-caption-content">
                                        <div class="row align-content-center justify-content-center">
                                            <div class="col-9 col-md-8 col-xl-7 col-xxl-6">
                                                <div class="pxp-featured-posts-item-date">September 10, 2021</div>
                                                <div class="pxp-featured-posts-item-title">Resume samples</div>
                                                <div class="pxp-featured-posts-item-summary pxp-text-light mt-2">Need help writing a resume? Looking for resume examples for specific industries? You’ll find a variety...</div>
                                                <div class="mt-4 mt-md-5 text-center">
                                                    <a href="single-blog-post.html" class="btn rounded-pill pxp-section-cta">Read Article<span class="fa fa-angle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="pxp-featured-posts-item pxp-cover" style="background-image: url(images/ph-big.jpg);">
                                <div class="pxp-hero-opacity"></div>
                                <div class="pxp-featured-posts-item-caption">
                                    <div class="pxp-featured-posts-item-caption-content">
                                        <div class="row align-content-center justify-content-center">
                                            <div class="col-9 col-md-8 col-xl-7 col-xxl-6">
                                                <div class="pxp-featured-posts-item-date">September 15, 2021</div>
                                                <div class="pxp-featured-posts-item-title">100 top interview questions - be prepared</div>
                                                <div class="pxp-featured-posts-item-summary pxp-text-light mt-2">While there are as many different possible interview questions as there are interviewers, it always helps...</div>
                                                <div class="mt-4 mt-md-5 text-center">
                                                    <a href="single-blog-post.html" class="btn rounded-pill pxp-section-cta">Read Article<span class="fa fa-angle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#pxp-blog-featured-posts-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#pxp-blog-featured-posts-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="mt-4 mt-lg-5">
                    <div class="row">
                        <div class="col-lg-7 col-xl-8 col-xxl-9">
                            <div class="pxp-posts-card-2-container">
                                <div class="pxp-posts-card-2 pxp-has-border">
                                    <div class="pxp-posts-card-2-fig">
                                        <div class="pxp-cover" style="background-image: url(images/ph-medium.jpg);"></div>
                                    </div>
                                    <div class="pxp-posts-card-2-content">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <a href="blog-list-1.html" class="pxp-posts-card-2-category">Assessments</a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="pxp-posts-card-2-date">August 31, 2021</div>
                                            </div>
                                        </div>
                                        <div class="pxp-posts-card-2-title mt-4">
                                            <a href="single-blog-post.html">10 awesome free career self assessments</a>
                                        </div>
                                        <div class="pxp-posts-card-2-summary pxp-text-light">Figuring out what you want to be when you grow up is hard, but a career test can make it easier to find...</div>
                                        <div class="pxp-posts-card-2-cta">
                                            <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-2-container">
                                <div class="pxp-posts-card-2 pxp-has-border">
                                    <div class="pxp-posts-card-2-fig">
                                        <div class="pxp-cover" style="background-image: url(images/ph-medium.jpg);"></div>
                                    </div>
                                    <div class="pxp-posts-card-2-content">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <a href="blog-list-1.html" class="pxp-posts-card-2-category">Jobs</a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="pxp-posts-card-2-date">September 5, 2021</div>
                                            </div>
                                        </div>
                                        <div class="pxp-posts-card-2-title mt-4">
                                            <a href="single-blog-post.html">How to start looking for a job</a>
                                        </div>
                                        <div class="pxp-posts-card-2-summary pxp-text-light">Your resume is perfect. It's keyword-optimized, industry-specified, full of achievements, backed by data...</div>
                                        <div class="pxp-posts-card-2-cta">
                                            <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-2-container">
                                <div class="pxp-posts-card-2 pxp-has-border">
                                    <div class="pxp-posts-card-2-fig">
                                        <div class="pxp-cover" style="background-image: url(images/ph-medium.jpg);"></div>
                                    </div>
                                    <div class="pxp-posts-card-2-content">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <a href="blog-list-1.html" class="pxp-posts-card-2-category">Resume</a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="pxp-posts-card-2-date">September 10, 2021</div>
                                            </div>
                                        </div>
                                        <div class="pxp-posts-card-2-title mt-4">
                                            <a href="single-blog-post.html">Resume samples</a>
                                        </div>
                                        <div class="pxp-posts-card-2-summary pxp-text-light">Need help writing a resume? Looking for resume examples for specific industries? You’ll find a variety...</div>
                                        <div class="pxp-posts-card-2-cta">
                                            <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-2-container">
                                <div class="pxp-posts-card-2 pxp-has-border">
                                    <div class="pxp-posts-card-2-fig">
                                        <div class="pxp-cover" style="background-image: url(images/ph-medium.jpg);"></div>
                                    </div>
                                    <div class="pxp-posts-card-2-content">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <a href="blog-list-1.html" class="pxp-posts-card-2-category">Interview</a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="pxp-posts-card-2-date">September 15, 2021</div>
                                            </div>
                                        </div>
                                        <div class="pxp-posts-card-2-title mt-4">
                                            <a href="single-blog-post.html">100 top interview questions - be prepared</a>
                                        </div>
                                        <div class="pxp-posts-card-2-summary pxp-text-light">While there are as many different possible interview questions as there are interviewers, it always helps...</div>
                                        <div class="pxp-posts-card-2-cta">
                                            <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                                <div class="col-auto">
                                    <nav class="mt-3 mt-sm-0" aria-label="Blog articles pagination">
                                        <ul class="pagination pxp-pagination">
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">1</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Show me more<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4 col-xxl-3">
                            <div class="pxp-blogs-list-side-panel">
                                <h3>Search Articles</h3>
                                <div class="mt-2 mt-lg-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search by keyword">
                                    </div>
                                </div>

                                <h3 class="mt-3 mt-lg-4">Categories</h3>
                                <ul class="list-unstyled pxp-blogs-side-list mt-2 mt-lg-3">
                                    <li><a href="blog-list-1.html">Assessments</a></li>
                                    <li><a href="blog-list-1.html">Jobs</a></li>
                                    <li><a href="blog-list-1.html">Resume</a></li>
                                    <li><a href="blog-list-1.html">Future of Work</a></li>
                                    <li><a href="blog-list-1.html">Interview</a></li>
                                </ul>

                                <h3 class="mt-3 mt-lg-4">Recent Articles</h3>
                                <ul class="list-unstyled pxp-blogs-side-articles-list mt-2 mt-lg-3">
                                    <li class="mb-3">
                                        <a href="single-blog-post.html" class="pxp-blogs-side-articles-list-item">
                                            <div class="pxp-blogs-side-articles-list-item-fig pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                            <div class="pxp-blogs-side-articles-list-item-content ms-3">
                                                <div class="pxp-blogs-side-articles-list-item-title">10 awesome free career self assessments</div>
                                                <div class="pxp-blogs-side-articles-list-item-date pxp-text-light">September 3, 2021</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="single-blog-post.html" class="pxp-blogs-side-articles-list-item">
                                            <div class="pxp-blogs-side-articles-list-item-fig pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                            <div class="pxp-blogs-side-articles-list-item-content ms-3">
                                                <div class="pxp-blogs-side-articles-list-item-title">How to start looking for a job</div>
                                                <div class="pxp-blogs-side-articles-list-item-date pxp-text-light">September 5, 2021</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="single-blog-post.html" class="pxp-blogs-side-articles-list-item">
                                            <div class="pxp-blogs-side-articles-list-item-fig pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                            <div class="pxp-blogs-side-articles-list-item-content ms-3">
                                                <div class="pxp-blogs-side-articles-list-item-title">Resume samples</div>
                                                <div class="pxp-blogs-side-articles-list-item-date pxp-text-light">September 10, 2021</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="single-blog-post.html" class="pxp-blogs-side-articles-list-item">
                                            <div class="pxp-blogs-side-articles-list-item-fig pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                            <div class="pxp-blogs-side-articles-list-item-content ms-3">
                                                <div class="pxp-blogs-side-articles-list-item-title">100 top interview questions - be prepared</div>
                                                <div class="pxp-blogs-side-articles-list-item-date pxp-text-light">September 15, 2021</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-blog-post.html" class="pxp-blogs-side-articles-list-item">
                                            <div class="pxp-blogs-side-articles-list-item-fig pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                            <div class="pxp-blogs-side-articles-list-item-content ms-3">
                                                <div class="pxp-blogs-side-articles-list-item-title">10 awesome free career self assessments</div>
                                                <div class="pxp-blogs-side-articles-list-item-date pxp-text-light">September 20, 2021</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <h3 class="mt-3 mt-lg-4">Tags</h3>
                                <div class="mt-2 mt-lg-3 pxp-blogs-side-tags">
                                    <a href="blog-list-1.html">Work from home</a>
                                    <a href="blog-list-1.html">Part-time</a>
                                    <a href="blog-list-1.html">Administration</a>
                                    <a href="blog-list-1.html">Finance</a>
                                    <a href="blog-list-1.html">Retail</a>
                                    <a href="blog-list-1.html">IT</a>
                                    <a href="blog-list-1.html">Engineering</a>
                                    <a href="blog-list-1.html">Sales</a>
                                    <a href="blog-list-1.html">Manufacturing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="pxp-main-footer mt-100">
            <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
                <div class="pxp-container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                            <div class="pxp-footer-logo">
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
                            </div>
                            <div class="pxp-footer-section mt-3 mt-md-4">
                                <h3>Call us</h3>
                                <div class="pxp-footer-phone">(123) 456-7890</div>
                            </div>
                            <div class="mt-3 mt-md-4 pxp-footer-section">
                                <div class="pxp-footer-text">
                                    90 Fifth Avenue, 3rd Floor<br>
                                    San Francisco, CA 1980<br>
                                    office@jobster.com
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xxl-8">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>For Candidates</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="jobs-list-1.html">Find Jobs</a></li>
                                            <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                            <li><a href="candidate-dashboard-applications.html">My Applications</a></li>
                                            <li><a href="candidate-dashboard-fav-jobs.html">Favourite Jobs</a></li>
                                            <li><a href="candidate-dashboard-inbox.html">My inbox</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>For Employers</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="candidates-list-1.html">Find Candidates</a></li>
                                            <li><a href="company-dashboard.html">Company Dashboard</a></li>
                                            <li><a href="company-dashboard-new-job.html">Post a Job</a></li>
                                            <li><a href="company-dashboard-jobs.html">Manage Jobs</a></li>
                                            <li><a href="company-dashboard-candidates.html">Candidates</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>About Us</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="blog-list-1.html">Blog</a></li>
                                            <li><a href="blog-list-1.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>Helpful Resources</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="faqs.html">FAQs</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                            <li><a href="404.html">404 Page</a></li>
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
                            <div class="pxp-footer-copyright pxp-text-light">© 2021 Jobster. All Right Reserved.</div>
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

        <div class="modal fade pxp-user-modal" id="pxp-signin-modal" aria-hidden="true" aria-labelledby="signinModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="pxp-user-modal-fig text-center">
                            <img src="images/signin-fig.png" alt="Sign in">
                        </div>
                        <h5 class="modal-title text-center mt-4" id="signinModal">Welcome back!</h5>
                        <form class="mt-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="pxp-signin-email" placeholder="Email address">
                                <label for="pxp-signin-email">Email address</label>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="pxp-signin-password" placeholder="Password">
                                <label for="pxp-signin-password">Password</label>
                                <span class="fa fa-lock"></span>
                            </div>
                            <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                            <div class="mt-4 text-center pxp-modal-small">
                                <a href="#" class="pxp-modal-link">Forgot password</a>
                            </div>
                            <div class="mt-4 text-center pxp-modal-small">
                                New to Jobster? <a role="button" class="" data-bs-target="#pxp-signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Create an account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade pxp-user-modal" id="pxp-signup-modal" aria-hidden="true" aria-labelledby="signupModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="pxp-user-modal-fig text-center">
                            <img src="images/signup-fig.png" alt="Sign up">
                        </div>
                        <h5 class="modal-title text-center mt-4" id="signupModal">Create an account</h5>
                        <form class="mt-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="pxp-signup-email" placeholder="Email address">
                                <label for="pxp-signup-email">Email address</label>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="pxp-signup-password" placeholder="Create password">
                                <label for="pxp-signup-password">Create password</label>
                                <span class="fa fa-lock"></span>
                            </div>
                            <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                            <div class="mt-4 text-center pxp-modal-small">
                                Already have an account? <a role="button" class="" data-bs-target="#pxp-signin-modal" data-bs-toggle="modal">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
