@extends('layouts.app')
@section('content')
    <section class="pxp-single-candidate-hero pxp-cover" style="background-image: url({{asset('assets/images/ph-big.jpg')}});">
        <div class="pxp-hero-opacity"></div>
        <div class="pxp-single-candidate-hero-caption">
            <div class="pxp-container">
                <div class="pxp-single-candidate-hero-content">
                    <div class="pxp-single-candidate-hero-avatar" style="background-image: url({{asset('assets/images/ph-small.jpg')}});"></div>
                    <div class="pxp-single-candidate-hero-name">
                        <h1>{{$candidate->first_name.' '.$candidate->last_name}}</h1>
                        <div class="pxp-single-candidate-hero-title">UX/UI Designer</div>
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
                        <p>Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler
                            text, lipsum, and mock-content. In publishing and graphic design, lorem ipsum is a filler text
                            or greeking commonly used to demonstrate the textual elements of a graphic document or visual
                            presentation.</p>
                        <p>In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to
                            demonstrate the textual elements of a graphic document or visual presentation. Lorem Ipsum is
                            also known as: Greeked text. </p>

                        <div class="mt-4 mt-lg-5">
                            <h2>Skills</h2>
                            <div class="pxp-single-candidate-skills">
                                <ul class="list-unstyled">
                                    <li>Work from home</li>
                                    <li>Part-time</li>
                                    <li>Administration</li>
                                    <li>Finance</li>
                                    <li>Retail</li>
                                    <li>IT</li>
                                    <li>Engineering</li>
                                    <li>Sales</li>
                                    <li>Manufacturing</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 mt-lg-5">
                            <h2>Work Experience</h2>
                            <div class="pxp-single-candidate-timeline">
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2005 -
                                                2013</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">Senior UI/UX Designer</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Adobe Corporation
                                        </div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic
                                            design, lorem ipsum is a filler text or greeking commonly used to demonstrate
                                            the textual elements of a graphic document or visual presentation. Lorem Ipsum
                                            is also known as: Greeked text.</div>
                                    </div>
                                </div>
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2013 -
                                                2018</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">Senior UI/UX Designer</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Adobe Corporation
                                        </div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic
                                            design, lorem ipsum is a filler text or greeking commonly used to demonstrate
                                            the textual elements of a graphic document or visual presentation. Lorem Ipsum
                                            is also known as: Greeked text.</div>
                                    </div>
                                </div>
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2018 -
                                                2021</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">Senior UI/UX Designer</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Adobe Corporation
                                        </div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic
                                            design, lorem ipsum is a filler text or greeking commonly used to demonstrate
                                            the textual elements of a graphic document or visual presentation. Lorem Ipsum
                                            is also known as: Greeked text.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mt-lg-5">
                            <h2>Education & Training</h2>
                            <div class="pxp-single-candidate-timeline">
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2011 -
                                                2017</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">Architecure</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Politehnica
                                            University of Timisoara: Bachelor of Architecture</div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic
                                            design, lorem ipsum is a filler text or greeking commonly used to demonstrate
                                            the textual elements of a graphic document or visual presentation. Lorem Ipsum
                                            is also known as: Greeked text.</div>
                                    </div>
                                </div>
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2020 -
                                                2020</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">Front End Web Developer
                                        </div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Udacity Nanodegree
                                            Program</div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic
                                            design, lorem ipsum is a filler text or greeking commonly used to demonstrate
                                            the textual elements of a graphic document or visual presentation. Lorem Ipsum
                                            is also known as: Greeked text.</div>
                                    </div>
                                </div>
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2021 -
                                                2021</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">Build Responsive Real World
                                            Websites with HTML5 and CSS3</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Udemy</div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic
                                            design, lorem ipsum is a filler text or greeking commonly used to demonstrate
                                            the textual elements of a graphic document or visual presentation. Lorem Ipsum
                                            is also known as: Greeked text.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-xxl-3">
                    <div class="pxp-single-candidate-side-panel mt-5 mt-lg-0">
                        <div>
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Email</div>
                            <div class="pxp-single-candidate-side-info-data">rebecca@pixelprime.co</div>
                        </div>
                        <div class="mt-4">
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Location</div>
                            <div class="pxp-single-candidate-side-info-data">San Francisco, CA</div>
                        </div>
                        <div class="mt-4">
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Phone</div>
                            <div class="pxp-single-candidate-side-info-data">(+123) 456 7890</div>
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
