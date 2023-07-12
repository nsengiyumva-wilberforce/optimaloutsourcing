@extends('layouts.app')
@section('content')
        <section class="mt-100 pxp-no-hero">
            <div class="pxp-container">
                <h2 class="pxp-section-h2 text-center">We'd love to hear from you</h2>
                <p class="pxp-text-light text-center">Get in touch with us</p>

                <div class="row mt-4 mt-md-5 justify-content-center pxp-animate-in pxp-animate-in-top">
                    <div class="col-lg-4 col-xxl-3 pxp-contact-card-1-container">
                        <a href="#" class="pxp-contact-card-1">
                            <div class="pxp-contact-card-1-icon-container">
                                <div class="pxp-contact-card-1-icon">
                                    <span class="fa fa-globe"></span>
                                </div>
                            </div>
                            <div class="pxp-contact-card-1-title">Kampala, Uganda</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xxl-3 pxp-contact-card-1-container">
                        <a href="#" class="pxp-contact-card-1">
                            <div class="pxp-contact-card-1-icon-container">
                                <div class="pxp-contact-card-1-icon">
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                            <div class="pxp-contact-card-1-title">+256 200 940 010</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xxl-3 pxp-contact-card-1-container">
                        <a href="#" class="pxp-contact-card-1">
                            <div class="pxp-contact-card-1-icon-container">
                                <div class="pxp-contact-card-1-icon">
                                    <span class="fa fa-envelope-o"></span>
                                </div>
                            </div>
                            <div class="pxp-contact-card-1-title">hello@optimaloutsourcing.co.ug</div>
                        </a>
                    </div>
                </div>

                <div class="row mt-100 justify-content-center pxp-animate-in pxp-animate-in-top">
                    <div class="col-lg-6 col-xxl-4">
                        <div class="pxp-contact-us-form pxp-has-animation pxp-animate">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif
                            <h2 class="pxp-section-h2 text-center">Contact Us</h2>
                            <form class="mt-4" method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="contact-us-name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="contact-us-name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-us-email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="contact-us-email" placeholder="Enter your email address">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-us-message" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="contact-us-message" placeholder="Type your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn rounded-pill pxp-section-cta d-block">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
