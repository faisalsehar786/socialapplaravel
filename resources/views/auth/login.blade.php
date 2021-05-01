{{-- extend  --}}
@extends('front-end-layout.login_register_layout')
@php
  $metepage=App\Settings::first();
@endphp
@section('page_meta')
@php
  $metepage=App\Settings::first();
@endphp
{{  $metepage->login_page_meta }}
@endsection
@section('title', 'Login')
@section('content')
<main class="ant-layout-content app-login p-15">
    <h1 class="logo">

        
 @php
                          $settings=App\Settings::first(); 

                         @endphp
                         @if (isset($settings) && !empty($settings->headerlogo))
                          <img src="{{ asset('frontend/assets') }}/img/{{ $settings->headerlogo }}" class="mt-5" alt="Logo">
                         @else
                          <img src="{{ asset('frontend/assets') }}/img/footer-logo.png" alt="Logo">
                         @endif

    </h1>
    <div class="ant-row">
        <div class="ant-col ant-col-24">
            <form id="basic" class="ant-form ant-form-horizontal" action="{{ route('login') }}" method="Post">
                @csrf
                <div class="login-section" @if(isset($settings) && !empty($settings->sectioncolor)) style="background:{{ $settings->sectioncolor }} !important" @endif>
                    <h1 class="login-title" @if(isset($settings) && !empty($settings->borderpanelcolor)) style="background:{{ $settings->borderpanelcolor }} !important" @endif>Signin</h1>
                    <div class="p-15">
                        {{--   ////////////////////////////////////////////////////////////////     --}}
                      <div type="username" class="ant-row ant-form-item ant-form-item-with-help ant-form-item-has-error">
                            <div class="ant-col ant-col-16 ant-form-item-control">
                                <div class="ant-form-item-control-input">
                                    <div class="ant-form-item-control-input-content">
                                        <span class="input-background" id="basic_username" value="">
                                            <div class="img-wrap"><img class="icon anticon" src="{{ asset('frontend/assets') }}/img/person.svg" alt="person"></div>
                                            <input type="username"  class="ant-input input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus placeholder="JohnDoe">
                                        </span>
                                    </div>
                                </div>
                                @error('username')
                                <div class="ant-form-item-explain ant-form-item-explain-error"><div role="alert">{{ $message }}</div></div>
                                @enderror
                                
                            </div>
                        </div>
                        {{-- /////////////////////////////////////////////////////////////////////// --}}
                        <div class="ant-row ant-form-item">
                            <div class="ant-col ant-col-16 ant-form-item-control">
                                <div class="ant-form-item-control-input">
                                    <div class="ant-form-item-control-input-content">
                                        <span class="input-background" id="basic_password">
                                            <div class="img-wrap"><img class="icon anticon" src="{{ asset('frontend/assets') }}/img/secret.svg" alt="person"></div>
                                            <input type="password"  class="ant-input input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Password">
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                <div class="ant-form-item-explain ant-form-item-explain-error"><div role="alert">{{ $message }}</div></div>
                                @enderror
                            </div>
                        </div>
                        <div class="login-option">
                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-col-16 ant-col-offset-8 ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="form-group">
                                            <div class="">
                                                <input type="checkbox" name="remember">
                                                <label for="remember" class="">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-col-16 ant-col-offset-8 ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content"><a href="{{ route('password.request') }}" id="basic_remember" style="font-size: 12px; font-family: GothamBook;">Forget Password ?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ant-row ant-form-item login-btn">
                    <div class="ant-col ant-col-16 ant-col-offset-8 ant-form-item-control">
                        <div class="ant-form-item-control-input">
                            <div class="ant-form-item-control-input-content">
                                <button type="submit" class="ant-btn ant-btn-primary" @if(isset($settings) && !empty($settings->buttoncolor)) style="background:{{ $settings->buttoncolor }} !important" @endif><span>Signin</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
@section("footer")
@parent
@endsection