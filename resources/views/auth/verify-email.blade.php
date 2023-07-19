@extends('layouts.app')
@section('content')
    <section class="pxp-page-header-simple">
        <div class="card card-body bg-primary container mt-5 text-light pxp-container">
            <h1 class="text-center">Welcome to optimal outsourcing</h1>
            <p class="text-center">Please verify your email address, we have sent an email to your mail inbox</p>
            <p class="text-center">If you did not receive the email</p>
            <form action="{{ route('verification.send') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-warning">Resend Email</button>
            </form>
        </div>
    </section>
@endsection
