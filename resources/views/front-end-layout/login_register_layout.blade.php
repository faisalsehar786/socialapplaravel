<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="{{ asset('frontend/assets') }}/css/login.css" rel="stylesheet">
        <link href="{{ asset('frontend/assets') }}/css/loginmain.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets') }}/css/toaster.min.css">
          <script src="{{ asset('frontend/assets') }}/js/toaster.min.js"></script>

          <script type="text/javascript">
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "2000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
          </script>
        <style type="text/css">

            
            .is-invalid{
                border: 2px solid #de1010 !important;
            }
        </style>
    </head>
      @php
      $settings=App\Settings::first(); 

      @endphp
    <body data-new-gr-c-s-check-loaded="14.1003.0" data-gr-ext-installed="">
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root">
            <div class="App">
                <section class="ant-layout" @if(isset($settings) && !empty($settings->backgroundcolor)) style="background:{{ $settings->backgroundcolor }} !important" @endif>
                      @include('includes-frontend.frontEndAlerts')
                      @yield('content')
                    
                    <footer class="ant-layout-footer"  @if(isset($settings) && !empty($settings->backgroundcolor)) style="background:{{ $settings->backgroundcolor }} !important" @endif>


                        <div class="footer-logo">
                       
                         @if (isset($settings) && !empty($settings->footerlogo))
                          <img src="{{ asset('frontend/assets') }}/img/{{ $settings->footerlogo }}" alt="logo">
                         @else
                          <img src="{{ asset('frontend/assets') }}/img/footer-logo.png" alt="logo">
                         @endif
                         

                        </div>
                        <div class="contact"><span  @if(isset($settings) && !empty($settings->backgroundcolor)) style="background:{{ $settings->backgroundcolor }} !important" @endif>
                          @if (isset($settings) && !empty($settings->footrtext))
                         {{ $settings->footrtext }}
                        
                         @endif

                        </span></div>

                           @if (isset($settings) && $settings->social_link_show=='on')
                        <div class="social-wrap">
                            <a href="{{$settings->fblink}}"><img class="icon" src="{{ asset('frontend/assets') }}/img/fb-contact.png" alt="facebook"></a>
                            <a href="{{$settings->mslink}}"><img class="icon" src="{{ asset('frontend/assets') }}/img/message-contact.png" alt="facebook"></a>
                        </div>
                         @endif
                        <div style="font-family: GothamBook; font-size: 12px; margin-top: 20px;">
                           @if (isset($settings) && !empty($settings->copyright_text))
                         {{ $settings->copyright_text }}
                        
                         @endif
                        </div>
                    </footer>
                </section>
            </div>
        </div>
         @yield('footer')
        
    </body></html>