@extends('layouts.app')
@section('content')
        <section class="pxp-hero vh-100" style="background-color: var(--pxpMainColorLight);">
            <div class="row align-items-center pxp-sign-hero-container">
                <div class="col-xl-6 pxp-column">
                    <div class="pxp-sign-hero-fig text-center pb-100 pt-100">
                        <img src="{{asset('assets/images/signup-big-fig.png')}}" alt="Sign up">
                        <h1 class="mt-4 mt-lg-5">Create an account</h1>
                    </div>
                </div>
                <div class="col-xl-6 pxp-column pxp-is-light">
                    <div class="pxp-sign-hero-form pb-100 pt-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-xl-7 col-xxl-5">
                                <div class="pxp-sign-hero-form-content">
                                    <h5 class="text-center">Sign Up</h5>
                                    <form class="mt-4" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="pxp-signup-page-email" placeholder="Email address">
                                            <label for="pxp-signup-page-email">Email address</label>
                                            <span class="fa fa-envelope-o"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="first_name" class="form-control" id="pxp-signup-page-password" placeholder="Email address">
                                            <label for="pxp-signup-page-email">First Name</label>
                                            <span class="fa fa-pen-o"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="last_name" class="form-control" id="pxp-signup-page-password" placeholder="Email address">
                                            <label for="pxp-signup-page-email">Last Name</label>
                                            <span class="fa fa-pen-o"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="te" name="phone_number" class="form-control" id="pxp-signup-page-phone" placeholder="Email address">
                                            <label for="pxp-signup-page-phone">Telephone Number</label>
                                            <span class="fa fa-pen-o"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select name="role" id="pxp-signup-page-role" class="form-control">
                                                <option value="employee">Employee</option>
                                                <option value="employer">Employer</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control" id="pxp-signup-page-password" placeholder="Create password">
                                            <label for="pxp-signup-page-password">Create password</label>
                                            <span class="fa fa-lock"></span>
                                        </div>
                                        <button type="submit" class="btn rounded-pill pxp-sign-hero-form-cta">Continue</button>
                                        <div class="mt-4 text-center pxp-sign-hero-form-small">
                                            Already have an account? <a href="{{route('login')}}">Sign in</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
