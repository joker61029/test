@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>微光</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Login-Box-En.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        html{
            background-image: url({{url('img/login_background.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
        body{
            background-color: transparent;
        }
    </style>
</head>

<body>
<div class="col">
    <div class="d-flex flex-column justify-content-center" id="login-box">
        <div class="login-box-header">
            <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">登入</h4>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-box-content">
                <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" href="#"><i class="fa fa-facebook" style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>使用 Facebook 登入</a></div>
                <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" style="margin-bottom:10px;" href="#"><i class="fa fa-google" style="color:rgb(255,255,255);width:56px;"></i>使用&nbsp;Google+ 登入</a></div>
            </div>
            <div class="d-flex flex-row align-items-center login-box-seperator-container">
                <div class="login-box-seperator"></div>
                <div class="login-box-seperator-text">
                    <p style="margin-bottom:0px;padding-left:10px;padding-right:10px;font-weight:400;color:rgb(201,201,201);">or</p>
                </div>
                <div class="login-box-seperator"></div>
            </div>
            <div class="email-login" style="background-color:#ffffff;">
                <input id="email" type="email" class="email-imput form-control @error('email') is-invalid @enderror" name="email" style="margin-top:10px;" required="" placeholder="Email" minlength="6" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

                <input id="password" type="password" class="password-input form-control @error('password') is-invalid @enderror" name="password" style="margin-top:10px;" required="" placeholder="Password required " autocomplete=current-password" minlength="6">
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
                <button class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit">
                    {{ __('登入') }}
                </button>
                @if (Route::has('password.request'))
                    <a id="forgot-password-link" class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('忘記密碼？') }}
                    </a>
                @endif
                <div class="d-flex justify-content-between">
                    <div class="form-check form-check-inline" id="form-check-rememberMe">
                        <input class="form-check-input" type="checkbox"  for="remember" style="cursor:pointer;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            <span class="label-text">
                                {{ __('記住我') }}
                            </span>
                        </label>
                    </div>
                </div>

            </div>
            <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                <p style="margin-bottom:0px;">還沒有會員？<a id="register-link" href="#">註冊</a></p>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
@endsection
