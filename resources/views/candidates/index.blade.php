@extends('layouts.app')
@section('content')
<section class="pxp-page-header-simple" style="background-color: var(--pxpSecondaryColor);">
            <div class="pxp-container">
                <h1>Search Candidates</h1>
                <div class="pxp-hero-subtitle pxp-text-light">Work with the most talented candidates in the world</div>
                <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
                    <form class="row gx-3 align-items-center">
                        <div class="col-12 col-lg">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-search"></span></span>
                                <input type="text" class="form-control" placeholder="Candidate Name or Keyword">
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
                            <button>Find Candidates</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <div class="pxp-candidates-list-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h2><span class="pxp-text-light">Showing</span> 8,536 <span class="pxp-text-light">candidates</span></h2>
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
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Scott Goodwin</div>
                                <div class="pxp-candiadates-card-1-title">UI Designer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>London, UK</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="#">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Kenneth Spiers</div>
                                <div class="pxp-candiadates-card-1-title">Software Developer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>San Francisco, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Rebecca Eason</div>
                                <div class="pxp-candiadates-card-1-title">Marketing Expert</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Los Angeles, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Susanne Weil</div>
                                <div class="pxp-candiadates-card-1-title">Architect</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Paris, France</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Rebecca Eason</div>
                                <div class="pxp-candiadates-card-1-title">UI Designer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>London, UK</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Susanne Weil</div>
                                <div class="pxp-candiadates-card-1-title">Software Developer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>San Francisco, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(images/ph-small.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Scott Goodwin</div>
                                <div class="pxp-candiadates-card-1-title">Marketing Expert</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Los Angeles, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                                <div class="pxp-candiadates-card-1-name">Kenneth Spiers</div>
                                <div class="pxp-candiadates-card-1-title">Architect</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Paris, France</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                    <div class="col-auto">
                        <nav class="mt-3 mt-sm-0" aria-label="Candidates pagination">
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

        <div class="modal fade pxp-user-modal" id="pxp-signin-modal" aria-hidden="true" aria-labelledby="signinModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="pxp-user-modal-fig text-center">
                            <img src="{{asset('assets/images/signin-fig.png')}}" alt="Sign in">
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
                            <img src="{{asset('assets/images/signup-fig.png')}}" alt="Sign up">
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
