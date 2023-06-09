@extends('authpanel')
@section('auth')
<div class="row">
    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
        <div class="card mt-3 mb-3">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12 mb-3">

                        <h2>Sign In</h2>
                        <p>Enter your email and password to login</p>

                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="form-check form-check-primary form-check-inline">
                                <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                <label class="form-check-label" for="form-check-default">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-secondary w-100">SIGN IN</button>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="">
                            <div class="seperator">
                                <hr>
                                <div class="seperator-text"> <span>Or</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <p class="mb-0">Forgot Password ? <a href="{{ URL::to('reset-password') }}" class="text-warning">Click Here</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
@stop

