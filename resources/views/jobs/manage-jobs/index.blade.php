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
            <img src="{{asset('assets/images/logo.png')}}" alt="logo">
        </div>

        <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
            <div class="pxp-dashboard-side-label">Admin tools</div>
            <ul class="list-unstyled">
                <li><a href="company-dashboard.html"><span class="fa fa-home"></span>Dashboard</a></li>
                <li><a href="{{route('profile')}}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                <li><a href="{{ route('newJob') }}"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                <li class="pxp-active"><a href="{{route('manageJobs')}}"><span class="fa fa-briefcase"></span>Manage
                        Jobs</a></li>
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
                        <div class="pxp-dashboard-side-user-nav-name">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}
                        </div>
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
                                <li class="nav-item"><a href="{{ route('newJob') }}"><span
                                            class="fa fa-file-text-o"></span>New Job Offer</a></li>
                                <li class="nav-item"><a href="company-dashboard-jobs.html"><span
                                            class="fa fa-briefcase"></span>Manage Jobs</a></li>
                                <li class="nav-item"><a href="{{route('application')}}"><span
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
                <a href="/jobs/new" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
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
                        <div class="pxp-user-nav-name d-none d-md-block">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{route('profile')}}">Edit profile</a></li>
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

        <div class="pxp-dashboard-content-details">
            <h1>Manage Jobs</h1>
            <p class="pxp-text-light">Detailed list with all your job offers.</p>

            <div class="mt-4 mt-lg-5">
                <div class="row justify-content-between align-content-center">
                    <div class="col-auto order-2 order-sm-1">
                        <div class="pxp-company-dashboard-jobs-bulk-actions mb-3">
                            <select class="form-select">
                                <option>Bulk actions</option>
                                <option>Edit</option>
                                <option>Delete</option>
                            </select>
                            <button class="btn ms-2">Apply</button>
                        </div>
                    </div>
                    <div class="col-auto order-1 order-sm-2">
                        <div class="pxp-company-dashboard-jobs-search mb-3">
                            <div class="pxp-company-dashboard-jobs-search-results me-3">{{$number_of_jobs}} jobs</div>
                            <div class="pxp-company-dashboard-jobs-search-search-form">
                                <div class="input-group">
                                    <span class="input-group-text"><span class="fa fa-search"></span></span>
                                    <input type="text" class="form-control" placeholder="Search jobs...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th class="pxp-is-checkbox" style="width: 1%;"><input type="checkbox"
                                        class="form-check-input"></th>
                                <th style="width: 25%;">Job</th>
                                <th style="width: 20%;">Category</th>
                                <th style="width: 12%;">Type</th>
                                <th style="width: 15%;">Applications</th>
                                <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($availableJobs as $job)
                                <tr>
                                    <td><input type="checkbox" class="form-check-input"></td>
                                    <td>
                                        <a href="#">
                                            <div class="pxp-company-dashboard-job-title">{{$job->job_title}}</div>
                                            <div class="pxp-company-dashboard-job-location"><span
                                                    class="fa fa-globe me-1"></span>{{$job->location}}</div>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="pxp-company-dashboard-job-category">{{$job->category}}</div>
                                    </td>
                                    <td>
                                        <div class="pxp-company-dashboard-job-type">{{$job->experience}}</div>
                                    </td>
                                    <td><a href="#" class="pxp-company-dashboard-job-applications">{{$job->application_count}}
                                            Candidates</a></td>
                                    <td>
                                        <div class="pxp-company-dashboard-job-status">
                                            @if ($job->published)
                                            <span
                                            class="badge rounded-pill bg-success">Published</span>
                                            @else
                                            <span class="badge rounded-pill bg-secondary">Draft</span>
                                            @endif

                                            </div>
                                        <div class="pxp-company-dashboard-job-date mt-1">{{$job->created_at}}</div>
                                    </td>
                                    <td>
                                        <div class="pxp-dashboard-table-options">
                                            <ul class="list-unstyled">
                                                <li><button title="Edit"><span class="fa fa-pencil"></span></button>
                                                </li>
                                                <li><button title="Preview"><span class="fa fa-eye"></span></button>
                                                </li>
                                                <li><button title="Delete"><span
                                                            class="fa fa-trash-o"></span></button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$availableJobs->links()}}
                </div>
            </div>
        </div>

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
</body>

</html>
