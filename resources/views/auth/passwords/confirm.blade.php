
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
            <form id="basic" class="ant-form ant-form-horizontal" action="{{ route('password.confirm') }}" method="Post">
                @csrf

          
                <div class="login-section" @if(isset($settings) && !empty($settings->sectioncolor)) style="background:{{ $settings->sectioncolor }} !important" @endif>
                    <h1 class="login-title" @if(isset($settings) && !empty($settings->borderpanelcolor)) style="background:{{ $settings->borderpanelcolor }} !important" @endif>{{ __('Confirm Password') }}</h1>
                    <div class="p-15">
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{-- /////////////////////////////////////////////////////////////////////// --}}
                        <div class="ant-row ant-form-item">
                            <div class="ant-col ant-col-16 ant-form-item-control">
                                <div class="ant-form-item-control-input">
                                    <div class="ant-form-item-control-input-content">
                                        <span class="input-background" id="basic_password">
                                            <div class="img-wrap"><img class="icon anticon" src="{{ asset('frontend/assets') }}/img/secret.svg" alt="person"></div>
                                            <input type="password"  class="ant-input input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus >
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


                                              @if (Route::has('password.request'))

                                              <a href="{{ route('password.request') }}" id="basic_remember" style="font-size: 12px; font-family: GothamBook;"> {{ __('Forgot Your Password?') }}</a>

                                  
                                               @endif
                                                
                                            </div>
                                        </div>
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
                                <button type="submit" class="ant-btn ant-btn-primary"  @if(isset($settings) && !empty($settings->buttoncolor)) style="background:{{ $settings->buttoncolor }} !important" @endif><span>{{ __('Confirm Password') }}</span></button>
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























































 {{-- extend  --}}
@extends('front-end-layout.app')
@extends('includes-frontend.header')
@extends('includes-frontend.footer') 
{{-- page titles --}}
@section('title', 'Home')
@section('content')
<div class="container h-100">
    <div class="row justify-content-center">
        <div class="col-md-8 m-5">
            <div class="card p-3">
                <div class="card-title">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
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
 @section("footer")
   @parent
   <style type="text/css">
      html,body {
   height: 100%;
}

body.my-login-page {
   background-color: #f7f9fb;
   font-size: 14px;
}

.my-login-page .brand {
   width: 90px;
   height: 90px;
   overflow: hidden;
   border-radius: 50%;
   margin: 40px auto;
   box-shadow: 0 4px 8px rgba(0,0,0,.05);
   position: relative;
   z-index: 1;
}

.my-login-page .brand img {
   width: 100%;
}

.my-login-page .card-wrapper {
   width: 50%;
}

.my-login-page .card {
   border-color: transparent;
   box-shadow: 0 4px 8px rgba(0,0,0,.05);
}

.my-login-page .card.fat {
   padding: 10px;
}

.my-login-page .card .card-title {
   margin-bottom: 30px;
}

.my-login-page .form-control {
   border-width: 2.3px;
}

.my-login-page .form-group label {
   width: 100%;
}

.my-login-page .btn.btn-block {
   padding: 12px 10px;
}

.my-login-page .footer {
   margin: 40px 0;
   color: #888;
   text-align: center;
}

@media screen and (max-width: 425px) {
   .my-login-page .card-wrapper {
      width: 90%;
      margin: 0 auto;
   }
}

@media screen and (max-width: 320px) {
   .my-login-page .card.fat {
      padding: 0;
   }

   .my-login-page .card.fat .card-body {
      padding: 15px;
   }
}
   </style>
   @endsection
