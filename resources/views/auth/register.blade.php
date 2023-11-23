@extends('layouts.auth')

@section('title')
    Register Portal Client
@endsection

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    {{-- <div class="page-content page-auth mb-5 mt-10" id="register">
        <div class="section-store-auth " data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <h2>
                            Webcare Client Portal <br />
                            Register
                        </h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>


                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password Confirmation</label>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">


                            </div>
                            <div class="form-group">


                                <button type="submit" class="btn btn-success btn-block mt-4">
                                    Sign Up
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">
                                    Sign In
                                </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <section class="signinup " style="background-color: white;">
        <div class="container-signinup active shadow-lg" style="border-radius: 20px;">
            <div class="user signupBx">
                <div class="formBx">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h2>Create an account</h2>
                        <input id="name" type="text" @error('name') class="is-invalid @enderror" name="name"
                            placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror






                        <input id="email" type="email" @error('email') class="is-invalid @enderror" name="email"
                            placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                        <input id="password" type="password" class="@error('password') is-invalid @enderror"
                            name="password" placeholder="Create Password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                        <input id="password-confirm" placeholder="Confirm Password" type="password"
                            name="password_confirmation" required autocomplete="new-password">

                        <input type="submit" name="" value="Sign Up" />
                        <p class="signup">
                            Already have an account ?
                            <a href="#" onclick="toggleForm('./login');">Sign In.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx"><img src="/images/signin-up/signup.svg" alt="" /></div>
            </div>
        </div>
    </section>
@endsection
