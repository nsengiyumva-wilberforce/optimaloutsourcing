@extends('layouts.app')
@section('content')
    <section class="pxp-page-header-simple">
        <div class="pxp-container">
            <h1>Search Jobs</h1>
            <div class="pxp-hero-subtitle pxp-text-light">Search your career opportunity through <strong>12,800</strong>
                jobs</div>

            <div class="pxp-hero-form pxp-hero-form-round pxp-large pxp-has-border mt-3 mt-lg-4">
                <form class="row gx-3 align-items-center" action="/jobs" method="GET">
                    @csrf
                    <div class="col-12 col-lg">
                        <div class="input-group mb-3 mb-lg-0">
                            <span class="input-group-text"><span class="fa fa-search"></span></span>
                            <input type="text" class="form-control" name="key_word" placeholder="Job Title or Keyword">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="input-group mb-3 mb-lg-0">
                            <span class="input-group-text"><span class="fa fa-globe"></span></span>
                            <input type="text" class="form-control" name="location" placeholder="Location">
                        </div>
                    </div>
                    <div class="col-12 col-lg pxp-has-left-border">
                        <div class="input-group mb-3 mb-lg-0">
                            <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                            <select class="form-select" name="category">
                                <option selected="">All categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->category_id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                        <button type="submit">Find Jobs</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-5 col-xl-4 col-xxl-6">
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="pxp-jobs-list-side-filter pxp-with-details">
                                <div class="pxp-list-side-filter-header d-flex d-xxl-none">
                                    <div class="pxp-list-side-filter-header-label">Filter Jobs</div>
                                    <a role="button"><span class="fa fa-sliders"></span></a>
                                </div>
                                <div class="mt-4 mt-xxl-0 d-xxl-block pxp-list-side-filter-panel">
                                    <h3>Type of Employment</h3>
                                    <div class="list-group mt-2 mt-lg-3">
                                        @foreach ($employmentTypes as $employmentType)
                                            <label
                                                class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                                <span class="d-flex">
                                                    <input class="form-check-input me-2" type="checkbox"
                                                        value="{{ $employmentType->employment_type_id }}">
                                                    {{ $employmentType->name }}
                                                </span>
                                                <span class="badge rounded-pill">{{ $employmentType->jobs->count() }}</span>
                                            </label>
                                        @endforeach
                                    </div>

                                    <h3 class="mt-3 mt-lg-4">Experience Level</h3>
                                    <div class="list-group mt-2 mt-lg-3">
                                        @foreach ($experienceLevels as $experienceLevel)
                                            <label
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="d-flex">
                                                    <input class="form-check-input me-2" type="checkbox"
                                                        value="{{ $experienceLevel->experience_level_id }}">
                                                    {{ $experienceLevel->name }}
                                                </span>
                                                <span
                                                    class="badge rounded-pill">{{ $experienceLevel->jobs->count() }}</span>
                                            </label>
                                        @endforeach
                                    </div>

                                    <h3 class="mt-3 mt-lg-4">Salary Range</h3>
                                    <div class="list-group mt-2 mt-lg-3">
                                        @foreach ($salaryRanges as $salaryRange)
                                            <label
                                                class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                                <span class="d-flex">
                                                    <input class="form-check-input me-2" type="checkbox"
                                                        value="{{ $salaryRange->salary_range_id }}">
                                                    {{ 'UGX' . $salaryRange->starting_salary }} -
                                                    {{ 'UGX' . $salaryRange->ending_salary }}
                                                </span>
                                                <span class="badge rounded-pill">{{ $salaryRange->jobs->count() }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="pxp-jobs-list-single-column nav mt-4 mt-xxl-0" role="tablist">
                                @foreach ($jobs as $index => $job)
                                    @if ($index == 0)
                                        <a class="pxp-jobs-card-4 pxp-has-border active" id="{{ 'job-' . $job->job_id }}"
                                            data-bs-toggle="tab" data-bs-target="{{ '#job-details-' . $job->job_id }}"
                                            role="tab" aria-controls="{{ 'job-details-' . $job->job_id }}"
                                            aria-selected="true">
                                            <div class="pxp-jobs-card-4-company-top">
                                                <div class="pxp-jobs-card-4-company-logo"
                                                    style="background-image: url({{ asset('assets/images/company-logo-1.png') }});">
                                                </div>
                                                <div class="pxp-jobs-card-4-info">
                                                    <div class="pxp-jobs-card-4-title">{{ $job->job_title }}</div>
                                                    <div class="pxp-jobs-card-4-details">
                                                        <div class="pxp-jobs-card-4-location pxp-text-light">
                                                            <span class="fa fa-globe"></span>{{ $job->location }}
                                                        </div>
                                                        <div class="pxp-jobs-card-4-type">{{ $job->employment_type->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pxp-jobs-card-4-company-bottom">
                                                <div class="pxp-jobs-card-4-category">
                                                    <span
                                                        class="pxp-jobs-card-4-company">{{ $job->user->first_name . ' ' . $job->user->last_name }}</span>
                                                </div>
                                                <div class="pxp-jobs-card-4-bottom-right">
                                                    <span
                                                        class="pxp-jobs-card-4-date pxp-text-light">{{ $job->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    @else
                                        <a class="pxp-jobs-card-4 pxp-has-border" id="{{ 'job-' . $job->job_id }}"
                                            data-bs-toggle="tab" data-bs-target="{{ '#job-details-' . $job->job_id }}"
                                            role="tab" aria-controls="{{ 'job-details-' . $job->job_id }}"
                                            aria-selected="true">
                                            <div class="pxp-jobs-card-4-company-top">
                                                <div class="pxp-jobs-card-4-company-logo"
                                                    style="background-image: url({{ asset('assets/images/company-logo-2.png') }});">
                                                </div>
                                                <div class="pxp-jobs-card-4-info">
                                                    <div class="pxp-jobs-card-4-title">{{ $job->job_title }}</div>
                                                    <div class="pxp-jobs-card-4-details">
                                                        <div class="pxp-jobs-card-4-location pxp-text-light">
                                                            <span class="fa fa-globe"></span>{{ $job->location }}
                                                        </div>
                                                        <div class="pxp-jobs-card-4-type">{{ $job->employment_type->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pxp-jobs-card-4-company-bottom">
                                                <div class="pxp-jobs-card-4-category">
                                                    <span class="pxp-jobs-card-4-company">Craftgenics</span>
                                                </div>
                                                <div class="pxp-jobs-card-4-bottom-right">
                                                    <span
                                                        class="pxp-jobs-card-4-date pxp-text-light">{{ $job->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8 col-xxl-6">
                    <div class="tab-content pxp-jobs-tab-content">
                        @foreach ($jobs as $index => $job)
                            @if ($index == 0)
                                <div class="tab-pane active" id="{{ 'job-details-' . $job->job_id }}" role="tabpanel"
                                    aria-labelledby="{{ 'job-' . $job->job_id }}">
                                    <div class="pxp-jobs-tab-pane-cover pxp-cover"
                                        style="background:black"></div>
                                    <div class="pxp-jobs-tab-pane-logo"
                                        style="background-image: url({{ asset('assets/images/company-logo-1.png') }});">
                                    </div>
                                    <div class="pxp-jobs-tab-pane-content">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-xl-6">
                                                <h3>{{ $job->job_title }}</h3>
                                                <div class="pxp-jobs-tab-pane-company-location">
                                                    by <a href="single-company-1.html"
                                                        class="pxp-jobs-tab-pane-company">{{ $job->user->first_name . ' ' . $job->user->last_name }}</a>
                                                    in
                                                    <a href="jobs-list-1.html"
                                                        class="pxp-jobs-tab-pane-location">{{ $job->location }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-auto">
                                                <div class="pxp-jobs-tab-pane-options mt-4 mt-xl-0">
                                                    <button class="btn pxp-jobs-tab-pane-save-btn"><span
                                                            class="fa fa-heart-o"></span></button>
                                                    <div class="dropdown ms-2">
                                                        <button class="btn pxp-jobs-tab-pane-share-btn dropdown-toggle"
                                                            type="button" id="socialShareBtn-1"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="fa fa-share-alt"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pxp-jobs-tab-pane-share-dropdown"
                                                            aria-labelledby="socialShareBtn-1">
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-facebook"></span> Facebook</a></li>
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-twitter"></span> Twitter</a></li>
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-pinterest"></span> Pinterest</a></li>
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-linkedin"></span> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                    @if (session('error'))
                                                        <div class="alert alert-danger">
                                                            {{ session('error') }}
                                                        </div>
                                                    @endif

                                                    <a href="{{ route('apply', $job->job_id) }}"
                                                        class="btn ms-2 pxp-jobs-tab-pane-apply-btn rounded-pill">Apply
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 justify-content-between align-items-center">
                                            <div class="col-6">
                                                <a href="jobs-list-1.html" class="pxp-jobs-tab-pane-category">
                                                    <div class="pxp-jobs-tab-pane-category-icon"><span
                                                            class="fa fa-bullhorn"></span></div>
                                                    <div class="pxp-jobs-tab-pane-category-label">
                                                        {{ $job->category->name }}
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="pxp-jobs-tab-pane-date pxp-text-light">
                                                    {{ $job->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mt-lg-5 align-items-center">
                                            <div class="col-6">
                                                <div>
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">
                                                        Experience
                                                    </div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->experience }}</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">Work
                                                        Level
                                                    </div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->career_level }}</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mt-4">
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">
                                                        Employment
                                                        Type</div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->employment_type->name }}</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mt-4">
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">Salary
                                                    </div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->salary_range->starting_salary . '-' . $job->salary_range->ending_salary }}
                                                        / year</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pxp-jobs-tab-pane-content-details mt-4 mt-lg-5">
                                            <h4>Overview</h4>
                                            <p>{!! html_entity_decode($job->description) !!}</p>
                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                            <div class="mt-4 mt-lg-5">

                                                <a href="{{ route('apply', $job->job_id) }}"
                                                    class="btn rounded-pill pxp-section-cta">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn rounded-pill pxp-jobs-tab-pane-close-btn d-inline-block d-lg-none"><span
                                            class="fa fa-angle-left"></span> Back</button>
                                </div>
                            @else
                                <div class="tab-pane" id="{{ 'job-details-' . $job->job_id }}" role="tabpanel"
                                    aria-labelledby="{{ 'job-' . $job->job_id }}">
                                    <div class="pxp-jobs-tab-pane-cover pxp-cover"
                                        style="background: black;"></div>
                                    <div class="pxp-jobs-tab-pane-logo"
                                        style="background-image: url({{ asset('assets/images/company-logo-2.png') }});">
                                    </div>
                                    <div class="pxp-jobs-tab-pane-content">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-xl-6">
                                                <h3>{{ $job->job_title }}</h3>
                                                <div class="pxp-jobs-tab-pane-company-location">
                                                    by <a href="single-company-1.html"
                                                        class="pxp-jobs-tab-pane-company">{{ $job->user->first_name . ' ' . $job->user->last_name }}</a>
                                                    in
                                                    <a href="jobs-list-1.html"
                                                        class="pxp-jobs-tab-pane-location">{{ $job->location }}</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-auto">
                                                <div class="pxp-jobs-tab-pane-options mt-4 mt-xl-0">
                                                    <button class="btn pxp-jobs-tab-pane-save-btn"><span
                                                            class="fa fa-heart-o"></span></button>
                                                    <div class="dropdown ms-2">
                                                        <button class="btn pxp-jobs-tab-pane-share-btn dropdown-toggle"
                                                            type="button" id="socialShareBtn-2"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="fa fa-share-alt"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pxp-jobs-tab-pane-share-dropdown"
                                                            aria-labelledby="socialShareBtn-2">
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-facebook"></span> Facebook</a></li>
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-twitter"></span> Twitter</a></li>
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-pinterest"></span> Pinterest</a></li>
                                                            <li><a class="dropdown-item" href="#"><span
                                                                        class="fa fa-linkedin"></span> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                    @if (session('error'))
                                                        <div class="alert alert-danger">
                                                            {{ session('error') }}
                                                        </div>
                                                    @endif

                                                    <a href="{{ route('apply', $job->job_id) }}"
                                                        class="btn ms-2 pxp-jobs-tab-pane-apply-btn rounded-pill">Apply
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 justify-content-between align-items-center">
                                            <div class="col-6">
                                                <a href="jobs-list-1.html" class="pxp-jobs-tab-pane-category">
                                                    <div class="pxp-jobs-tab-pane-category-icon"><span
                                                            class="fa fa-calendar-o"></span></div>
                                                    <div class="pxp-jobs-tab-pane-category-label">
                                                        {{ $job->category->name }}
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <div class="pxp-jobs-tab-pane-date pxp-text-light">
                                                    {{ $job->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mt-lg-5 align-items-center">
                                            <div class="col-sm-6">
                                                <div>
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">
                                                        Experience
                                                    </div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->experience }}</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div>
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">Work
                                                        Level
                                                    </div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->career_level }}</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-4">
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">
                                                        Employment
                                                        Type</div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->employment_type->name }}</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-4">
                                                    <div class="pxp-jobs-tab-pane-content-info-label pxp-text-light">Salary
                                                    </div>
                                                    <div class="pxp-jobs-tab-pane-content-info-data">
                                                        {{ $job->salary_range->starting_salary . '-' . $job->salary_range->ending_salary }}/
                                                        year</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pxp-jobs-tab-pane-content-details mt-4 mt-lg-5">
                                            <h4>Overview</h4>
                                            <p>{!! html_entity_decode($job->description) !!}</p>
                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                            <div class="mt-4 mt-lg-5">
                                                <a href="{{ route('apply', $job->job_id) }}"
                                                    class="btn rounded-pill pxp-section-cta">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn rounded-pill pxp-jobs-tab-pane-close-btn d-inline-block d-lg-none"><span
                                            class="fa fa-angle-left"></span> Back</button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
