{{-- extend  --}}
@extends('front-end-layout.login_register_layout')
@section('title', 'login')
@section('content')
@if (in_array(request()->route()->getName(), ['register']))

 <script>window.location = "/";</script>

@else



@endif
<main class="ant-layout-content app-login p-15">
    <h1 class="logo"><img src="{{ asset('frontend/assets') }}/img/logo.svg" alt="Logo"></h1>
    <div class="ant-row">
        <div class="ant-col ant-col-24">
            <form id="basic" class="ant-form ant-form-horizontal" action="{{ route('update_register_user') }}"  method="POST">
                    @csrf

        <input type="hidden" name="usernamepre" value="{{ $username }}">
          <input type="hidden" name="emailpre" value="{{ $singleUser->email }}">
                <div class="login-section">
                    <h1 class="login-title">Signup</h1>
                    <div class="p-15">
                        <div type="username" class="ant-row ant-form-item ant-form-item-with-help ant-form-item-has-error">
                            <div class="ant-col ant-col-16 ant-form-item-control">
                                <div class="ant-form-item-control-input">
                                    <div class="ant-form-item-control-input-content">
                                        <span class="input-background" id="basic_username" value="">
                                            <div class="img-wrap"><img class="icon anticon" src="{{ asset('frontend/assets') }}/img/person.svg" alt="person"></div>
            <input  type="text"  class="ant-input input @error('username') is-invalid @enderror" name="username" value="{{ $username }}" required autocomplete="username" autofocus placeholder="JohnDoe">
                                        </span>
                                    </div>
                                </div>

                                 @if(session('error'))
                                {{--  @error('email') --}}
                             <div class="ant-form-item-explain ant-form-item-explain-error"><div role="alert">{{ session('error') }}</div></div>
                        {{--  @enderror --}}
                        @endif
                           
                            </div>
                        </div>

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
                                 @if(session('error'))
                                {{--  @error('email') --}}
                             <div class="ant-form-item-explain ant-form-item-explain-error"><div role="alert">{{ session('error') }}</div></div>
                        {{--  @enderror --}}
                        @endif
                           
                            </div>
                        </div>

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
                                <button type="submit" class="ant-btn ant-btn-primary"><span>Signup</span></button>
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
