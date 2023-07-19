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
                        <h2><span class="pxp-text-light">Showing</span> 8,536 <span class="pxp-text-light">candidates</span>
                        </h2>
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
                @if (count($candidates) > 0)
                    @foreach ($candidates as $candidate)
                        <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                            <div class="pxp-candiadates-card-1 pxp-has-border text-center">
                                <div class="pxp-candiadates-card-1-top">
                                    @if (!$candidate->profile->profile_photo)
                                        <div class="pxp-candiadates-card-1-avatar pxp-cover"
                                            style="background-image: url({{ asset('assets/images/profile_avatar.png') }});">
                                        </div>
                                    @else
                                        <div class="pxp-candiadates-card-1-avatar pxp-cover"
                                            style="background-image: url({{ asset('storage/' . $candidate->profile->profile_photo) }});">
                                        </div>
                                    @endif
                                    <div class="pxp-candiadates-card-1-name">
                                        {{ $candidate->first_name .' '. $candidate->last_name }}</div>
                                    <div class="pxp-candiadates-card-1-title">{{ $candidate->profile->title }}</div>
                                    <div class="pxp-candiadates-card-1-location"><span
                                            class="fa fa-globe"></span>{{ $candidate->location }}</div>
                                </div>
                                <div class="pxp-candiadates-card-1-bottom">
                                    <div class="pxp-candiadates-card-1-cta">
                                        <a href="{{ 'candidate-details/' . $candidate->user_id }}">View profile<span
                                                class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No candidates found</p>
                @endif
            </div>
    </section>
@endsection
