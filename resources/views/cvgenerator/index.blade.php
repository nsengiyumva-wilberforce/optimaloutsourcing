@extends('layouts.app')
@section('content')
    <section class="pxp-page-header-simple">
        <div class="pxp-container text-center">
            <h1>Ensure that your profile information is complete and correct</h1>
            <p>It is important that you provide all the information requested in the profile section. This will help us to
                process your CV faster.</p>
            <div class="btn btn-primary">
                <a href="/create-cv" class="btn btn-primary btn-lg btn-block text-center">Generate CV</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        </div>
    </section>
@endsection
