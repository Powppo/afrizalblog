@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <title>Galaxy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{asset('Template/img/favicon.ico')}}" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('Template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Template/css/style.min.css')}}" rel="stylesheet">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 20px;">
                <div class="container-fluid page-header mb-5">
                    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 300px">
                        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Login</h4>
                        <div class="d-inline-flex">
                            <p class="m-0 text-white">Login</p>
                            <p class="m-0 text-white px-2">/</p>
                            <p class="m-0 text-white"><a class="text-white" href="/register">Register</a></p>
                        </div>
                    </div>
                </div>
                    <div class="d-flex flex-column text-center mb-5">
                        <h4 class="text-primary font-weight-bold">Please Fill in Your Data to Login !</h4>
                <div class="card-body">
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input style="border-radius: 7px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input style="border-radius: 7px" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <div>
                                    <button style="border-radius: 7px" class="btn btn-outline-primary" type="submit" id="sendMessageButton">Login</button>
                                </div>
<br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
