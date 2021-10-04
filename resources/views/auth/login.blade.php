@extends('layouts.app')
@section('Head')

    <link href="{{ asset('css/login/login-4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/plugins.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/style.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/header/base/light.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/header/menu/light.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/brand/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/aside/dark.css') }}" rel="stylesheet">
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('media/favicon.ico') }}" />

<style>
    body{
        background-image: url({{ asset('media/bg-2.jpg') }});
        color: #595B68;
    }

    .navbar{
        display: none;
    }
    .card{
        background-color: #fff0;
        border: none;
    }
</style>
@endsection
@section('content')
<div class="container" >
    <div class="kt-login__logo text-center pb-5 pt-5">
        <a href="{{ url('/') }}">
            <img src="{{ asset('media/logo-5.png') }}">
        </a>
    </div>
    <div class="text-center">
        <h3>Sign In</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-6 offset-md-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            <div class="col-md-6 offset-md-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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

