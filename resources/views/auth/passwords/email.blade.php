
@extends('front-end-layout.login_register_layout')
@section('title', 'login')
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
            <form id="basic" class="ant-form ant-form-horizontal" action="{{ route('password.email') }}" method="Post">
                @csrf

             <div class="login-section" @if(isset($settings) && !empty($settings->sectioncolor)) style="background:{{ $settings->sectioncolor }} !important" @endif>
                    <h1 class="login-title" @if(isset($settings) && !empty($settings->borderpanelcolor)) style="background:{{ $settings->borderpanelcolor }} !important" @endif>Reset Password</h1>
                    <div class="p-15">
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{--   ////////////////////////////////////////////////////////////////     --}}
                        <div type="username" class="ant-row ant-form-item ant-form-item-with-help ant-form-item-has-error">
                            <div class="ant-col ant-col-16 ant-form-item-control">
                                <div class="ant-form-item-control-input">
                                    <div class="ant-form-item-control-input-content">
                                        <span class="input-background" id="basic_username" value="">
                                            <div class="img-wrap"><img class="icon anticon" src="{{ asset('frontend/assets') }}/img/person.svg" alt="person"></div>
                                            <input type="email"  class="ant-input input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="JohnDoe@gmail.com">
                                        </span>
                                    </div>
                                </div>
                                @error('email')
                                <div class="ant-form-item-explain ant-form-item-explain-error"><div role="alert">{{ $message }}</div></div>
                                @enderror
                                
                            </div>
                        </div>
                   
                        <div class="login-option">
                          
                         
                        </div>
                    </div>
                </div>
                
                <div class="ant-row ant-form-item login-btn">
                    <div class="ant-col ant-col-16 ant-col-offset-8 ant-form-item-control">
                        <div class="ant-form-item-control-input">
                            <div class="ant-form-item-control-input-content">
                                <button type="submit" class="ant-btn ant-btn-primary" @if(isset($settings) && !empty($settings->buttoncolor)) style="background:{{ $settings->buttoncolor }} !important" @endif><span>Send Password Reset Link</span></button>
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



















