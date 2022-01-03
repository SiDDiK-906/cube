@extends('auth.master_auth')

@section('master_auth')
    <div class="accountbg" style="background: url('{{ asset('dashboard') }}/assets/images/bg-1.jpg'); background-size: cover;">
    </div>
    <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5 mb-0" style="padding-top: 10px !important">
                            <h2 class="text-uppercase text-center pb-3">
                                <a href="#" class="text-success">
                                    <span><img src="{{ asset('dashboard') }}/assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Full Name</label>
                                        <input class="form-control" type="text" id="username"  placeholder="Enter Your Name" name="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="phone">Phone Number</label>
                                        <input class="form-control" type="text" id="phone"  placeholder="Ex: 01xxxxxxxxxx" name="phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress"  placeholder="Enter Your Email" name="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" id="password" placeholder="Enter your password" name="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input class="form-control" type="password" id="confirm_password" placeholder="Enter your Confirm Password" name="password_confirmation">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox">
                                            <label for="remember">
                                                I accept <a href="#" class="text-custom">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-30">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="{{ route('login') }}" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-10 text-center">
                <p class="account-copyright">{{ \Carbon\Carbon::today()->format('Y') }} © SiD. - www.cube.com</p>
            </div>

    </div>
@endsection
