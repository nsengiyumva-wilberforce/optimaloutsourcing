@extends('layouts.app')
@section('content')
    @if (!$candidate->profile->cover_photo)
        <section class="pxp-single-candidate-hero pxp-cover"
            style="background-image: url({{ asset('assets/images/cover_vatar.png') }});">
        @else
            <section class="pxp-single-candidate-hero pxp-cover"
                style="background-image: url({{ asset('storage/' . $candidate->profile->cover_photo) }});">
    @endif
    <div class="pxp-hero-opacity"></div>
    <div class="pxp-single-candidate-hero-caption">
        <div class="pxp-container">
            <div class="pxp-single-candidate-hero-content">
                @if (!$candidate->profile->profile_photo)
                    <div class="pxp-single-candidate-hero-avatar"
                        style="background:black;"></div>
                @else
                    <div class="pxp-single-candidate-hero-avatar"
                        style="background-image: url({{ asset('storage/' . $candidate->profile->profile_photo) }});"></div>
                @endif
                <div class="pxp-single-candidate-hero-name">
                    <h1>{{ $candidate->first_name . ' ' . $candidate->last_name }}</h1>
                    <div class="pxp-single-candidate-hero-title">{{ $candidate->profile->title }}</div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-7 col-xl-8 col-xxl-9">
                    <div class="pxp-single-candidate-content">
                        <h2>About Rebecca</h2>
                        <p>{{ $candidate->profile->about_you }} </p>

                        <div class="mt-4 mt-lg-5">
                            <h2>Skills</h2>
                            <div class="pxp-single-candidate-skills">
                                <ul class="list-unstyled">
                                    @foreach ($skills as $skill)
                                        <li>{{ $skill->skill_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 mt-lg-5">
                            <h2>Work Experience</h2>
                                <div class="pxp-single-candidate-timeline">
                                    @foreach ($experiences as $experience)
                                    <div class="pxp-single-candidate-timeline-item">
                                        <div class="pxp-single-candidate-timeline-dot"></div>
                                        <div class="pxp-single-candidate-timeline-info ms-3">
                                            <div class="pxp-single-candidate-timeline-time"><span
                                                    class="me-3">{{ date('Y', strtotime($experience->start_date)) }} -
                                                    {{ date('Y', strtotime($experience->end_date)) }}</span></div>
                                            <div class="pxp-single-candidate-timeline-position mt-2">
                                                {{ $experience->job_title }}
                                            </div>
                                            <div class="pxp-single-candidate-timeline-company pxp-text-light">
                                                {{ $experience->company_name }}
                                            </div>
                                            <div class="pxp-single-candidate-timeline-about mt-2 pb-4">
                                                {{ $experience->job_description }}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>

                        <div class="mt-4 mt-lg-5">
                            <h2>Education & Training</h2>
                            <div class="pxp-single-candidate-timeline">
                                @foreach ($trainings as $training)
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">{{date('Y',strtotime($training->training_start_date))}} -
                                            {{date('Y',strtotime($training->training_end_date))}}</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">{{$training->training_title}}</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">{{$training->training_institution}}</div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">{{$training->training_description}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-xxl-3">
                    <div class="pxp-single-candidate-side-panel mt-5 mt-lg-0">
                        <div>
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Email</div>
                            <div class="pxp-single-candidate-side-info-data">{{$candidate->profile->email}}</div>
                        </div>
                        <div class="mt-4">
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Location</div>
                            <div class="pxp-single-candidate-side-info-data">{{$candidate->profile->location}}</div>
                        </div>
                        <div class="mt-4">
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Phone</div>
                            <div class="pxp-single-candidate-side-info-data">{{$candidate->profile->phone_number}}</div>
                        </div>
                    </div>

                    <div class="pxp-single-candidate-side-panel mt-4 mt-lg-5">
                        <h3>Contact Rebecca</h3>
                        <form class="mt-4">
                            <div class="mb-3">
                                <label for="contact-candidate-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="contact-candidate-name"
                                    placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="contact-candidate-email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="contact-candidate-email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="mb-3">
                                <label for="contact-candidate-message" class="form-label">Message</label>
                                <textarea class="form-control" id="contact-candidate-message" placeholder="Type your message here..."></textarea>
                            </div>
                            <a href="#" class="btn rounded-pill pxp-section-cta d-block">Send Message</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
