<!doctype html>
<html lang="en" class="pxp-root">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ 'images/favicon.png' }}" type="image/x-icon">
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
    <div class="pxp-preloader"><span>Loading...</span></div>

    <div class="pxp-dashboard-side-panel d-none d-lg-block">
        <div class="pxp-logo">
            <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
        </div>

        <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
            <div class="pxp-dashboard-side-label">Admin tools</div>
            <ul class="list-unstyled">
                <li><a href="company-dashboard.html"><span class="fa fa-home"></span>Dashboard</a></li>
                <li><a href="{{route('profile')}}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                <li class="pxp-active"><a href="company-dashboard-new-job.html"><span
                            class="fa fa-file-text-o"></span>New Job Offer</a></li>
                <li><a href="{{ route('manageJobs') }}"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                <li class="nav-item"><a href="{{route('application')}}"><span
                    class="fa fa-briefcase"></span>Applications</a></li>
                <li><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a>
                </li>
                <li><a href="company-dashboard-subscriptions.html"><span
                            class="fa fa-credit-card"></span>Subscriptions</a></li>
                <li><a href="company-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
            </ul>
            <div class="pxp-dashboard-side-label mt-3 mt-lg-4">Insights</div>
            <ul class="list-unstyled">
                <li>
                    <a href="company-dashboard-inbox.html" class="d-flex justify-content-between align-items-center">
                        <div><span class="fa fa-envelope-o"></span>Inbox</div>
                        <span class="badge rounded-pill">14</span>
                    </a>
                </li>
                <li>
                    <a href="company-dashboard-notifications.html"
                        class="d-flex justify-content-between align-items-center">
                        <div><span class="fa fa-bell-o"></span>Notifications</div>
                        <span class="badge rounded-pill">5</span>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="pxp-dashboard-side-user-nav-container">
            <div class="pxp-dashboard-side-user-nav">
                <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                    <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="pxp-dashboard-side-user-nav-avatar pxp-cover"
                            style="background-image: url(images/company-logo-1.png);"></div>
                        <div class="pxp-dashboard-side-user-nav-name">
                            {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{route('profile')}}">Edit profile</a></li>
                        <li><a class="dropdown-item" href="index.html">Logout</a></li>
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
                            <a href="index.html" class="pxp-animate"><span
                                    style="color: var(--pxpMainColor)">j</span>obster</a>
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="pxp-nav-mobile">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="pxp-dropdown-header">Admin tools</li>
                                <li class="nav-item"><a href="company-dashboard.html"><span
                                            class="fa fa-home"></span>Dashboard</a></li>
                                <li class="nav-item"><a href="{{route('profile')}}"><span
                                            class="fa fa-pencil"></span>Edit Profile</a></li>
                                <li class="nav-item"><a href="company-dashboard-new-job.html"><span
                                            class="fa fa-file-text-o"></span>New Job Offer</a></li>
                                <li class="nav-item"><a href="{{ route('manageJobs') }}"><span
                                            class="fa fa-briefcase"></span>Manage Jobs</a></li>
                                <li class="nav-item"><a href="/jobs/applications"><span
                                            class="fa fa-briefcase"></span>Applications</a></li>
                                <li class="nav-item"><a href="company-dashboard-candidates.html"><span
                                            class="fa fa-user-circle-o"></span>Candidates</a></li>
                                <li class="nav-item"><a href="company-dashboard-subscriptions.html"><span
                                            class="fa fa-credit-card"></span>Subscriptions</a></li>
                                <li class="nav-item"><a href="company-dashboard-password.html"><span
                                            class="fa fa-lock"></span>Change Password</a></li>
                                <li class="pxp-dropdown-header mt-4">Insights</li>
                                <li class="nav-item">
                                    <a href="company-dashboard-inbox.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div><span class="fa fa-envelope-o"></span>Inbox</div>
                                        <span class="badge rounded-pill">14</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="company-dashboard-notifications.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div><span class="fa fa-bell-o"></span>Notifications</div>
                                        <span class="badge rounded-pill">5</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <nav class="pxp-user-nav pxp-on-light">
                <a href="company-dashboard-new-job.html" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                <div class="dropdown pxp-user-nav-dropdown pxp-user-notifications">
                    <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="fa fa-bell-o"></span>
                        <div class="pxp-user-notifications-counter">5</div>
                    </a>
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
                        <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{route('profile')}}">Edit profile</a></li>
                        <li><a class="dropdown-item" href="index.html">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="pxp-dashboard-content-details">
            <h1>New Job Offer</h1>
            <p class="pxp-text-light">Add a new job to your company's jobs list.</p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <form method="POST" action="{{ route('storeJob') }}">
                @csrf
                <div class="row mt-4 mt-lg-5">
                    <div class="col-xxl-6">
                        <div class="mb-3">
                            <label for="pxp-company-job-title" class="form-label">Job title</label>
                            <input type="text" name="job_title" id="pxp-company-job-title" class="form-control"
                                placeholder="Add title">
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <label for="pxp-company-job-location" class="form-label">Location</label>
                        <input type="text" name="location" id="pxp-company-job-location" class="form-control"
                            placeholder="E.g. San Francisco, CA">
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-category" class="form-label">Category</label>
                            <select id="pxp-company-job-category" name="category" class="form-select">
                                <option>Select a category</option>
                                <option>Marketing & Communication</option>
                                <option>Software Engineering</option>
                                <option>Project Management</option>
                                <option>Finance</option>
                                <option>Retail</option>
                                <option>Sales</option>
                                <option>Manufacturing</option>
                                <option>IT</option>
                                <option>Business Development</option>
                                <option>Human Resources</option>
                                <option>Customer Service</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pxp-company-job-description" class="form-label">Job description</label>
                    <textarea class="form-control" name="description" id="pxp-company-job-description"
                        placeholder="Type the description here..."></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-experience" class="form-label">Experience</label>
                            <input type="text" name="experience" id="pxp-company-job-experience"
                                class="form-control" placeholder="E.g. Minimum 3 years">
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-level" class="form-label">Career level</label>
                            <select id="pxp-company-job-level" name="career_level" class="form-select">
                                <option>No Experience</option>
                                <option>Entry-Level</option>
                                <option>Mid-Level</option>
                                <option>Senior-Level</option>
                                <option>Manager / Executive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-type" class="form-label">Employment type</label>
                            <select id="pxp-company-job-type" name="employment_type" class="form-select">
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Remote</option>
                                <option>Internship</option>
                                <option>Contract</option>
                                <option>Training</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="mb-3">
                            <label for="pxp-company-job-salary" class="form-label">Salary range</label>
                            <select id="pxp-company-job-salary" name="salary_range" class="form-select">
                                <option>Select range</option>
                                <option>UGx700 - UGx1000</option>
                                <option>UGx1000 - UGx1200</option>
                                <option>UGx1200 - UGx1400</option>
                                <option>UGx1500 - UGx1800</option>
                                <option>UGx2000 - UGx3000</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mt-lg-5">
                    <button class="btn rounded-pill pxp-section-cta" type="submit" name="published"
                        value="true">Publish Job</button>
                    <button class="btn rounded-pill pxp-section-cta-o ms-3" type="submit" name="published"
                        value="false">Save Draft</button>
                </div>
            </form>
        </div>

        <footer>
            <div class="pxp-footer-copyright pxp-text-light">© 2023 Optimal Outsourcing. All Right Reserved.</div>
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
</body>

</html>
