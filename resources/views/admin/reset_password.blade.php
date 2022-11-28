<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Administrator Reset Password' }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ url('admin1/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin1/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ url('admin1/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin1/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ url('admin1/css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-primary" style="background-image: url('{{ url('admin1/images/car.jpg') }}'); background-size: 100%; background-repeat-x: no-repeat; opacity: 0.9;">
<div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>{{ __('Car Rental') }}</span></a>
                        </div>
                        <div class="login-form">
                            <h4>{{ __('Reset Password') }}</h4>
                            <form>
                                <div class="form-group">
                                    <label>{{ __('Email address') }}</label>
                                    <input type="email" id="Email" class="form-control" placeholder="Email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-15">{{ __('Submit') }}</button>
                                <div class="register-link text-center">
                                    <p>{{ __('Back to') }} <a href="{{ route('adminlogin') }}"> {{ __('Login') }}</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
