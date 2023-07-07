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
                <li><a href="{{ route('profile') }}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                <li class="pxp-active"><a href="company-dashboard-new-job.html"><span
                            class="fa fa-file-text-o"></span>New Job Offer</a></li>
                <li><a href="{{ route('manageJobs') }}"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                <li class="nav-item"><a href="{{ route('application') }}"><span
                            class="fa fa-briefcase"></span>Applications</a></li>
                <li><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a>
                </li>
                {{-- <li><a href="company-dashboard-subscriptions.html"><span
                                class="fa fa-credit-card"></span>Subscriptions</a></li> --}}
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
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Edit profile</a></li>
                        <li><a class="dropdown-item" href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="pxp-dashboard-content">
        <div class="pxp-dashboard-content-header pxp-is-candidate">
            <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
                <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav"
                    aria-controls="pxpMobileNav">
                    <div class="pxp-line-1"></div>
                    <div class="pxp-line-2"></div>
                    <div class="pxp-line-3"></div>
                </a>
                <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard pxp-is-candidate"
                    tabindex="-1" id="pxpMobileNav">
                    <div class="offcanvas-header">
                        <div class="pxp-logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="pxp-nav-mobile">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="pxp-dropdown-header">Admin tools</li>
                                <li class="nav-item"><a href="candidate-dashboard.html"><span
                                            class="fa fa-home"></span>Dashboard</a></li>
                                <li class="nav-item"><a href="candidate-dashboard-profile.html"><span
                                            class="fa fa-pencil"></span>Edit Profile</a></li>
                                <li class="nav-item"><a href="candidate-dashboard-applications.html"><span
                                            class="fa fa-file-text-o"></span>Apllications</a></li>
                                <li class="nav-item"><a href="candidate-dashboard-fav-jobs.html"><span
                                            class="fa fa-heart-o"></span>Favourite Jobs</a></li>
                                <li class="nav-item"><a href="candidate-dashboard-password.html"><span
                                            class="fa fa-lock"></span>Change Password</a></li>
                                <li class="pxp-dropdown-header mt-4">Insights</li>
                                <li class="nav-item">
                                    <a href="candidate-dashboard-inbox.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div><span class="fa fa-envelope-o"></span>Inbox</div>
                                        <span class="badge rounded-pill">14</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="candidate-dashboard-notifications.html"
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
                <div class="dropdown pxp-user-nav-dropdown pxp-user-notifications">
                    <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="fa fa-bell-o"></span>
                        <div class="pxp-user-notifications-counter">5</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Artistre
                                    Studio</strong> viewed your profile. <span class="pxp-is-time">20m</span></a></li>
                        <li><a class="dropdown-item"
                                href="candidate-dashboard-notifications.html"><strong>CoderBotics</strong> sent you a
                                message. <span class="pxp-is-time">1h</span></a></li>
                        <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Illuminate
                                    Studio</strong> viewed your profile. <span class="pxp-is-time">2h</span></a></li>
                        <li><a class="dropdown-item"
                                href="candidate-dashboard-notifications.html"><strong>Syspresoft</strong> sent you a
                                message. <span class="pxp-is-time">5h</span></a></li>
                        <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Artistre
                                    Studio</strong> viewed your profile. <span class="pxp-is-time">1d</span></a></li>
                        <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Illuminate
                                    Studio</strong> viewed your profile. <span class="pxp-is-time">3d</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item pxp-link" href="candidate-dashboard-notifications.html">Read
                                All</a></li>
                    </ul>
                </div>
                <div class="dropdown pxp-user-nav-dropdown">
                    <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="pxp-user-nav-avatar pxp-cover"
                            style="background-image: url(images/ph-small.jpg);"></div>
                        <div class="pxp-user-nav-name d-none d-md-block">
                            {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="candidate-dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="candidate-dashboard-profile.html">Edit profile</a></li>
                        <li><a class="dropdown-item" href="index.html">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="pxp-dashboard-content-details">
            <h1>Edit Profile</h1>
            <p class="pxp-text-light">Edit your candidate profile page info.</p>

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-4 mt-lg-5">
                    <div class="col-xxl-8">
                        <div class="mb-3">
                            <label for="pxp-candidate-first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="pxp-candidate-first-name"
                                class="form-control" placeholder="Add Your First Name"
                                value="{{ $profile->first_name ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="pxp-candidate-last-name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="pxp-last-name" class="form-control"
                                placeholder="Add Your Last Name" value="{{ $profile->last_name ?? '' }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-title" class="form-label">Title</label>
                                    <input type="text" name="title" id="pxp-candidate-title"
                                        class="form-control" placeholder="E.g. Web Designer"
                                        value="{{ $profile->title ?? '' }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-location" class="form-label">Location</label>
                                    <input type="tel" name="location" id="pxp-candidate-location"
                                        class="form-control" placeholder="E.g. San Francisco, CA"
                                        value="{{ $profile->location ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-email" class="form-label">Email</label>
                                    <input type="email" name="email" id="pxp-candidate-email"
                                        class="form-control" placeholder="candidate@email.com"
                                        value="{{ $profile->email ?? '' }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-phone" class="form-label">Phone</label>
                                    <input type="tel" name="phone_number" id="pxp-candidate-phone"
                                        class="form-control" placeholder="(+12) 345 6789"
                                        value="{{ $profile->phone_number ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="form-label">&nbsp;</div>
                        <div class="pxp-candidate-cover mb-3">
                            <input type="file" name="cover_photo" id="pxp-candidate-cover-choose-file"
                                accept="image/*">
                            <label for="pxp-candidate-cover-choose-file" class="pxp-cover">
                                @if ($profile_photo)
                                    <img src="{{ asset('storage/' . $cover_photo) }}" alt="Cover Photo" height="100%" width="100%">
                                @else
                                    <span>Upload Cover
                                        Image</span>
                                @endif
                            </label>
                        </div>
                        <div class="pxp-candidate-photo mb-3">
                            <input type="file" name="profile_photo" id="pxp-candidate-photo-choose-file"
                                accept="image/*">
                            <label for="pxp-candidate-photo-choose-file"
                                class="pxp-cover">
                                @if ($profile_photo)
                                    <img src="{{ asset('storage/' . $profile_photo) }}" alt="Cover Photo" height="100%" width="100%">
                                @else
                                <span>Upload<br>Photo</span>
                                @endif
                                </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pxp-candidate-about" class="form-label">About you</label>
                    <textarea class="form-control" name="about_you" id="pxp-candidate-about" placeholder="Type your info here...">{{ $profile->about_you}}</textarea>
                </div>

                <div class="mt-4 mt-lg-5">
                    <h2>Skills</h2>
                    <div class="pxp-candidate-dashboard-skills mb-3">
                        <ul id="selectedSkillsList" class="list-unstyled">
                            @if ($skills)
                                @foreach ($skills as $skill)
                                    <li data-id="{{ $skill->skill_id }}">{{ $skill->skill_name }}<span
                                            class="fa fa-trash-o"></span></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <input type="hidden" name="skills" id="selectedSkillsInput">
                    <div class="input-group mb-3">
                        <select id="skillsSelect" class="form-select">
                            <option value="">Select a skill</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->skill_id }}">{{ $skill->skill_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4 mt-lg-5">
                    <h2>Work Experience</h2>
                    <div class="table-responsive">
                        <table class="table align-middle" id="experience-table">
                            <tbody>
                                @if ($experiences)
                                    @foreach ($experiences as $experience)
                                        <tr data-id="{{ $experience->experience_id }}">
                                            <td style="width: 30%;">
                                                <div class="pxp-candidate-dashboard-experience-title">
                                                    {{ $experience->job_title }}</div>
                                            </td>
                                            <td style="width: 25%;">
                                                <div class="pxp-candidate-dashboard-experience-company">
                                                    {{ $experience->company_name }}</div>
                                            </td>
                                            <td style="width: 25%;">
                                                <div class="pxp-candidate-dashboard-experience-time">
                                                    {{ $experience->start_date }} - {{ $experience->end_date }}</div>
                                            </td>
                                            <td>
                                                <div class="pxp-dashboard-table-options">
                                                    <ul class="list-unstyled">
                                                        <li><button title="Edit" class="edit-btn"><span
                                                                    class="fa fa-pencil"></span></button></li>
                                                        <li><button title="Delete" class="delete-btn"><span
                                                                    class="fa fa-trash-o"></span></button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-3 mt-lg-4">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-work-title" class="form-label">Job title</label>
                                <input type="text" name="job_title" id="pxp-candidate-work-title"
                                    class="form-control" placeholder="E.g. Web Designer">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-work-company" class="form-label">Company</label>
                                <input type="text" name="company_name" id="pxp-candidate-work-company"
                                    class="form-control" placeholder="Company name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-start-date" class="form-label">Start Date</label>
                                <input type="date" name="start_date" id="pxp-candidate-start-date"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-end-date" class="form-label">End Date</label>
                                <input type="date" name="end_date" id="pxp-candidate-end-date"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pxp-candidate-work-about" class="form-label">Description</label>
                        <textarea class="form-control pxp-smaller" name="job_description" id="pxp-candidate-work-about"
                            placeholder="Type a short description here..."></textarea>
                    </div>
                    <input type="hidden" name="experiences" id="experiences-hidden-field">
                    <button class="btn rounded-pill pxp-subsection-cta" id="add-experience-btn">Add
                        Experience</button>
                </div>

                <div class="mt-4 mt-lg-5">
                    <h2>Education & Training</h2>
                    <div class="table-responsive">
                        <table class="table align-middle" id="training-table">
                            <tbody>
                                @if ($trainings)
                                    @foreach ($trainings as $training)
                                        <tr data-id="{{ $training->training_id }}">
                                            <td style="width: 30%;">
                                                <div class="pxp-candidate-dashboard-experience-title">
                                                    {{ $training->training_title }}</div>
                                            </td>
                                            <td style="width: 25%;">
                                                <div class="pxp-candidate-dashboard-experience-company">
                                                    {{ $training->training_institution }}</div>
                                            </td>
                                            <td style="width: 25%;">
                                                <div class="pxp-candidate-dashboard-experience-time">
                                                    {{ $training->start_date }} - {{ $training->end_date }}</div>
                                            </td>
                                            <td>
                                                <div class="pxp-dashboard-table-options">
                                                    <ul class="list-unstyled">
                                                        <li><button title="Edit" class="edit-btn"><span
                                                                    class="fa fa-pencil"></span></button></li>
                                                        <li><button title="Delete" class="delete-btn"><span
                                                                    class="fa fa-trash-o"></span></button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-3 mt-lg-4">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-title" class="form-label">Title</label>
                                <input type="text" name="training_title" id="pxp-candidate-edu-title"
                                    class="form-control" placeholder="E.g. Architecure">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-school" class="form-label">School</label>
                                <input type="text" name="training_institution" id="pxp-candidate-edu-school"
                                    class="form-control" placeholder="School name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-start-time" class="form-label">Start Date</label>
                                <input type="date" name="training_start_date" id="pxp-candidate-edu-start-time"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-end-time" class="form-label">End Date</label>
                                <input type="date" name="training_end_date" id="pxp-candidate-edu-end-time"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pxp-candidate-edu-about" class="form-label">Description</label>
                        <textarea class="form-control pxp-smaller" name="training_description" id="pxp-candidate-edu-about"
                            placeholder="Type a short description here..."></textarea>
                    </div>
                    <input type="hidden" name="trainings" id="trainings-hidden-field">
                    <button class="btn rounded-pill pxp-subsection-cta" id="add-edu-btn">Add Education</button>
                </div>

                <div class="mt-4 mt-lg-5">
                    <button class="btn rounded-pill pxp-section-cta" type="submit">Save Profile</button>
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
