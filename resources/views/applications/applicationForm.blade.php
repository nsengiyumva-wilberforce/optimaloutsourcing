@extends('layouts.app')
@section('content')
<section class="mt-100 pxp-no-hero">
    <div class="pxp-container">
        <h2 class="pxp-section-h2 text-center alert alert-success">Your Application has been sent to the employer!</h2>
        <p class="pxp-text-light text-center">Get in touch with us</p>

        <div class="row mt-100 justify-content-center pxp-animate-in pxp-animate-in-top">
            <div class="col-lg-6 col-xxl-4">
                <h4>We will contact you soon</h4>
                <a href="/jobs" class="btn ms-2 pxp-jobs-tab-pane-apply-btn rounded-pill btn-primary">BACK</a>
            </div>
        </div>
    </div>
</section>
@endsection
