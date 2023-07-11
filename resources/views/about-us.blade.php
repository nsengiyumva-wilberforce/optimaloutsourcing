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
                <div class="col-xl-12 col-xxl-11">
                    <h2 class="pxp-section-h2 text-center">About Us</h2>
                    <p class="pxp-text-light text-center">Together, we can achieve greatness.</p>

                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/about-us.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>At OPTIMAL <strong>OUTSOURCING</strong>, we are passionate about empowering organizations to
                                unlock their true
                                potential by providing a comprehensive range of top-notch business solutions. With a proven
                                track record in recruitment services, workforce management, training, PR management, Sales &
                                Marketing and call center set up and management, we are your trusted partner in driving
                                success and achieving excellence</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/vision.png') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p><strong>Our Vision</strong> is To become the leading provider of innovative and tailored
                                business solutions,
                                revolutionizing the way organizations attract, develop, and retain talent while enhancing
                                overall operational efficiency and brand reputation.</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/mission.png') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>As <strong>Our Mission</strong>, We are dedicated to delivering exceptional services that
                                enable our clients
                                to build dynamic and high-performing teams, optimize resource utilization, foster continuous
                                learning, and establish strong customer-centric operation</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/core-values.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>
                            <h4>Core Values</h4>
                            <ul list-style="none">
                                <li>Customer-centricity</li>
                                <li>Value-centricity</li>
                                <li>Simplicity</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/recruitment.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>As experts in the <strong>Recruitment</strong> industry, we leverage our extensive network
                                and cutting-edge
                                methodologies to connect businesses with the brightest talent. Our seasoned recruitment
                                specialists employ a meticulous selection process, ensuring that every candidate recommended
                                aligns perfectly with your organizational culture and requirement</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/work-force.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>Under our <strong>Workforce Management services</strong>, we know that efficiently managing a
                                workforce is
                                vital for sustainable growth. We provide comprehensive solutions tailored to your unique
                                needs, including resource planning, performance management, workforce analytics, and
                                compliance assurance. By optimizing productivity, reducing costs, and enhancing employee
                                engagement, we help you achieve operational excellence</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/training.png') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>Investing in employee development is investing in the future of your organization. Our
                                <strong>Training Services</strong> are designed to equip your workforce with the skills,
                                knowledge, and
                                attitudes necessary for continued success. From leadership development to technical
                                training, we offer customized programs that align with your strategic objectives and foster
                                a culture of continuous learning
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/pr-management.png') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>Maintaining a positive brand image and building strong relationships with stakeholders is
                                crucial in today's competitive landscape. Our <strong>PR Management Services</strong>
                                provide comprehensive
                                solutions for effective communication, reputation management, media relations, crisis
                                handling, and strategic brand positioning. We help you create a compelling narrative that
                                resonates with your target audience and cultivates trust and loyalty</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/call-center-solutions.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>Delivering exceptional customer experiences is at the core of our <strong>Call Center
                                    Solutions</strong>. We
                                offer end-to- end services, from setting up state-of-the-art call centers to managing
                                day-to-day operations. Our comprehensive approach includes workforce planning, performance
                                monitoring, quality assurance, technology integration, and customer relationship management,
                                enabling you to optimize customer satisfaction and drive business growth</p>
                        </div>
                    </div>
                    <div class="mt-4 mt-md-5 text-center row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/images/sales-and-marketing.png') }}" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p>Unlock the full potential of your sales revenue with our specialized <strong>Sales And
                                    Marketing
                                    Services</strong>. Our team of experts works closely with you to develop effective sales
                                strategies,
                                customer acquisition and retention plans, digital marketing campaigns, brand positioning,
                                market research, and competitor analysis. We help you maximize your market share and achieve
                                sustainable growt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
