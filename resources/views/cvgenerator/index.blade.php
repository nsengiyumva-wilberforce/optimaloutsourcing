@extends('layouts.app')
@section('content')
    <section class="pxp-page-header-simple">
        <div class="pxp-container text-center">
            <div class="container card card-body text-start">
                <h2>Resume templates</h2>
                <p>Land your dream job with captivativating CVs you can professionally customize to reflect your true
                    potential with our free resume templates and easy-to-use design editor</p>
            </div>
            <div class="row">
                <div class="col-md-3 card card-body m-1 shadow w-25">
                    <a href="/cv-generator/edit-cv/international">
                        <img src="{{ asset('assets/images/international_template.png') }}" alt="cv2 placeholder" class="img-fluid">
                    </a>
                    <h3>International</h3>
                </div>
                <div class="col-md-3 card card-body m-1 shadow w-25">
                    <a href="/cv-generator/edit-cv/modern">
                        <img src="{{ asset('assets/images/modern_template.png') }}" alt="cv3 placeholder" class="img-fluid">
                    </a>
                    <h3>Modern</h3>
                </div>
                <div class="col-md-3 card card-body m-1 shadow w-25">
                    <a href="/cv-generator/edit-cv/classic">
                        <img src="{{ asset('assets/images/classic_template.png') }}" alt="cv4 placeholder" class="img-fluid">
                    </a>
                    <h3>Classic</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
