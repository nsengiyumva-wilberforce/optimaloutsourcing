@extends('layouts.app')
@section('content')
    <section class="pxp-page-image-hero pxp-cover" style="background-image: url(images/ph-big.jpg);">
        <div class="pxp-hero-opacity"></div>
        <div class="pxp-page-image-hero-caption">
            <div class="pxp-container">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-8 col-xl-7 col-xxl-6">
                        <h1 class="text-center">We help companies and candidates find the right fit</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-xxl-6">
                    <h2 class="pxp-section-h2 text-center">About Us</h2>
                    <p class="pxp-text-light text-center">Together, we can achieve greatness.</p>

                    <div class="mt-4 mt-md-5 text-center">
                        <p>At OPTIMAL OUTSOURCING, we are passionate about empowering
                            organizations to unlock their true potential by providing a comprehensive
                            range of top-notch business solutions. With a proven track record in
                            recruitment services, workforce management, training, PR management,
                            Sales & Marketing and call center set up and management, we are your
                            trusted partner in driving success and achieving excellence.</p>
                        <p>As experts in the Recruitment industry, we leverage our extensive network and cutting-edge methodologies
                            to connect businesses with the brightest talent. Our seasoned recruitment specialists employ a meticulous
                            selection process, ensuring that every candidate recommended aligns perfectly with your organizational
                            culture and requirements.Under our Workforce Management services, we know that efficiently managing a workforce is vital for
                            sustainable growth. We provide comprehensive solutions tailored to your unique needs, including
                            resource planning, performance management, workforce analytics, and compliance assurance. By
                            optimizing productivity, reducing costs, and enhancing employee engagement, we help you achieve
                            operational excellence.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">We want to know more about you</h2>
            <p class="pxp-text-light text-center">Select your profile</p>

            <div class="row justify-content-evenly mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                <div class="col-lg-4 col-xl-3 pxp-services-1-item-container">
                    <div class="pxp-services-1-item text-center pxp-animate-icon">
                        <div class="pxp-services-1-item-icon">
                            <img src="{{asset('assets/images/service-1-icon.png')}}" alt="Candidate">
                        </div>
                        <div class="pxp-services-1-item-title">I am a candidate</div>
                        <div class="pxp-services-1-item-text pxp-text-light">You don’t want just any job, you want the right
                            fit. Find it here.</div>
                        <div class="pxp-services-1-item-cta">
                            <a href="/jobs">Read more<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 pxp-services-1-item-container">
                    <div class="pxp-services-1-item text-center pxp-animate-icon">
                        <div class="pxp-services-1-item-icon">
                            <img src="{{asset('assets/images/service-2-icon.png')}}" alt="Employer">
                        </div>
                        <div class="pxp-services-1-item-title">I am an employer</div>
                        <div class="pxp-services-1-item-text pxp-text-light">You don’t want just any candidate, you want the
                            right fit.</div>
                        <div class="pxp-services-1-item-cta">
                            <a href="/candidates">Read more<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 pxp-services-1-item-container">
                    <div class="pxp-services-1-item text-center pxp-animate-icon">
                        <div class="pxp-services-1-item-icon">
                            <img src="{{asset('assets/images/service-3-icon.png')}}" alt="Press">
                        </div>
                        <div class="pxp-services-1-item-title">I am a member of the press</div>
                        <div class="pxp-services-1-item-text pxp-text-light">See what is happening at optimal outsourcing.</div>
                        <div class="pxp-services-1-item-cta">
                            <a href="/about-us">Read more<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <div class="row justify-content-between align-items-center mt-4 mt-md-5">
                <div class="col-lg-6 col-xxl-5">
                    <div class="pxp-info-fig pxp-animate-in pxp-animate-in-right">
                        <div class="pxp-info-fig-image pxp-cover" style="background-image: url(images/ph-big.jpg);"></div>
                        <div class="pxp-info-stats">
                            <div class="pxp-info-stats-item pxp-animate-in pxp-animate-bounce">
                                <div class="pxp-info-stats-item-number">130<span>job offers</span></div>
                                <div class="pxp-info-stats-item-description">in Business Development</div>
                            </div>
                            <div class="pxp-info-stats-item pxp-animate-in pxp-animate-bounce">
                                <div class="pxp-info-stats-item-number">480<span>job offers</span></div>
                                <div class="pxp-info-stats-item-description">in Marketing & Communication</div>
                            </div>
                            <div class="pxp-info-stats-item pxp-animate-in pxp-animate-bounce">
                                <div class="pxp-info-stats-item-number">312<span>job offers</span></div>
                                <div class="pxp-info-stats-item-description">in Human Resources</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <div class="pxp-info-caption pxp-animate-in pxp-animate-in-top mt-4 mt-sm-5 mt-lg-0">
                        <h2 class="pxp-section-h2">Millions of jobs.<br>Find the one that suits you.</h2>
                        <p class="pxp-text-light">Search all the open positions on the web. Get your own personalized salary
                            estimate. Read reviews on over 600,000 companies worldwide.</p>
                        <div class="pxp-info-caption-list">
                            <div class="pxp-info-caption-list-item">
                                <img src="{{asset('assets/images/check.svg')}}" alt="-"><span>Bring to the table win-win survival</span>
                            </div>
                            <div class="pxp-info-caption-list-item">
                                <img src="{{asset('assets/images/check.svg')}}" alt="-"><span>Capitalize on low hanging fruit to
                                    identify</span>
                            </div>
                            <div class="pxp-info-caption-list-item">
                                <img src="{{asset('assets/images/check.svg')}}" alt="-"><span>But I must explain to you how all
                                    this</span>
                            </div>
                        </div>
                        <div class="pxp-info-caption-cta">
                            <a href="jobs-list-1.html" class="btn rounded-pill pxp-section-cta">Get Started Now<span
                                    class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">Why Customers Love Us</h2>
            <p class="pxp-text-light text-center">What our customers say about us</p>

            <div class="pxp-testimonials-1">
                <div class="pxp-testimonials-1-circles d-none d-md-block">
                    <div class="pxp-testimonials-1-circles-item pxp-item-1 pxp-cover pxp-animate-in pxp-animate-bounce"
                        style="background-image: url(images/customer-1.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-2 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-3 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-4 pxp-cover pxp-animate-in pxp-animate-bounce"
                        style="background-image: url(images/customer-2.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-5 pxp-cover pxp-animate-in pxp-animate-bounce"
                        style="background-image: url(images/customer-3.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-6 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-7 pxp-cover pxp-animate-in pxp-animate-bounce"
                        style="background-image: url(images/customer-4.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-8 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-9 pxp-cover pxp-animate-in pxp-animate-bounce"
                        style="background-image: url(images/customer-5.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-10 pxp-cover pxp-animate-in pxp-animate-bounce"
                        style="background-image: url(images/customer-6.png);"></div>
                </div>

                <div class="pxp-testimonials-1-carousel-container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-10 col-md-6 col-lg-6 col-xl-5 col-xxl-4">
                            <div class="pxp-testimonials-1-carousel pxp-animate-in pxp-animate-in-top">
                                <div id="pxpTestimonials1Carousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item text-center active">
                                            <div class="pxp-testimonials-1-carousel-item-text">optimal outsourcing is an ever-changing
                                                workplace, striving to innovate by bringing employers and candidates
                                                together. We are dedicated to improving our clients’ lives as well as our
                                                own employees.</div>
                                            <div class="pxp-testimonials-1-carousel-item-name">Susanne Weil</div>
                                            <div class="pxp-testimonials-1-carousel-item-company">Illuminate Studio</div>
                                        </div>
                                        <div class="carousel-item text-center">
                                            <div class="pxp-testimonials-1-carousel-item-text">Each day, I’m inspired by my
                                                colleagues to drive innovation that accomplishes this. optimal outsourcing fosters an
                                                environment of trust and support where I can drive customer success.</div>
                                            <div class="pxp-testimonials-1-carousel-item-name">Kenneth Spiers</div>
                                            <div class="pxp-testimonials-1-carousel-item-company">Syspresoft</div>
                                        </div>
                                        <div class="carousel-item text-center">
                                            <div class="pxp-testimonials-1-carousel-item-text">optimal outsourcing is an ever-changing
                                                workplace, striving to innovate by bringing employers and candidates
                                                together. We are dedicated to improving our clients’ lives as well as our
                                                own employees.</div>
                                            <div class="pxp-testimonials-1-carousel-item-name">Rebecca Eason</div>
                                            <div class="pxp-testimonials-1-carousel-item-company">Craftgenics</div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#pxpTestimonials1Carousel" data-bs-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#pxpTestimonials1Carousel" data-bs-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">Stay Up to Date</h2>
            <p class="pxp-text-light text-center">Subscribe to our newsletter to receive our weekly feed.</p>

            <div class="row mt-4 mt-md-5 justify-content-center">
                <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="pxp-subscribe-1-container pxp-animate-in pxp-animate-in-top">
                        <div class="pxp-subscribe-1-image">
                            <img src="{{asset('assets/images/subscribe.png')}}" alt="Stay Up to Date">
                        </div>
                        <div class="pxp-subscribe-1-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your email...">
                                    <button class="btn btn-primary" type="button">Subscribe<span
                                            class="fa fa-angle-right"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
