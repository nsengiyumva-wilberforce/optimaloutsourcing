@extends('layouts.app')
@section('content')
        <section class="pxp-page-header-simple" style="background-color: var(--pxpSecondaryColor);">
            <div class="pxp-container">
                <h1>Search Companies</h1>
                <div class="pxp-hero-subtitle pxp-text-light">Work for the best companies in the world</div>
                <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
                    <form class="row gx-3 align-items-center">
                        <div class="col-12 col-lg">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-search"></span></span>
                                <input type="text" class="form-control" placeholder="Company Name or Keyword">
                            </div>
                        </div>
                        <div class="col-12 col-lg pxp-has-left-border">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-globe"></span></span>
                                <input type="text" class="form-control" placeholder="Location">
                            </div>
                        </div>
                        <div class="col-12 col-lg pxp-has-left-border">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                                <select class="form-select">
                                    <option selected>All Industries</option>
                                    <option>Business Development</option>
                                    <option>Construction</option>
                                    <option>Customer Service</option>
                                    <option>Finance</option>
                                    <option>Healthcare</option>
                                    <option>Human Resources</option>
                                    <option>Marketing & Communication</option>
                                    <option>Project Management</option>
                                    <option>Software Engineering</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto">
                            <button>Find Companies</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <div class="pxp-companies-list-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h2><span class="pxp-text-light">Showing</span> 8,536 <span class="pxp-text-light">companies</span></h2>
                        </div>
                        <div class="col-auto">
                            <select class="form-select">
                                <option value="0" selected>Most relevant</option>
                                <option value="1">Name Asc</option>
                                <option value="2">Name Desc</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-1.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Artistre Studio</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California, it has historically specialized in software for the creation.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-2.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Craftgenics</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-3.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Illuminate Studio</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California, it has historically specialized in software for the creation.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-4.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Syspresoft</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-5.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Gramware</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-6.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Bitbytech</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California, it has historically specialized in software for the creation.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-7.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">CoderBotics</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-border">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-1.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Artistre Studio</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California, it has historically specialized in software for the creation.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                    <div class="col-auto">
                        <nav class="mt-3 mt-sm-0" aria-label="Companies pagination">
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
