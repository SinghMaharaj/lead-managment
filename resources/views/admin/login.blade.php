<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Administrator Login' }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-primary" style="background-image: url('{{ asset('admin/images/lead-management.jpg') }}'); background-size: 100%; background-repeat-x: no-repeat; opacity: 0.9;">
<div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="login-content">
                        <div class="login-form">
                            <div class="login-logo">
                                <a href="index.html"><span>{{ __('Lead Managment') }}</span></a>
                            </div>
                            <h4>{{ __('Administrator Login') }}</h4>

                            @if (session('status'))
                            <div class="card-body">
                                <div class="alert alert-{{session('error')?'danger':'success'}} alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                            @endif

                            <form method="POST" action="{{ route('adminlogin') }}">
                                @csrf

                                <div class="form-group">
                                    <label>{{ __('Email address') }}</label>
                                    <input type="email" id="Email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label>{{ __('Password') }}</label>
                                    <input type="password" name="password" id="Password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">{{ __('Sign in') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
