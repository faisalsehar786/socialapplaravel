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
    <body data-new-gr-c-s-check-loaded="14.1003.0" data-gr-ext-installed="">
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root">
            <div class="App">
                <section class="ant-layout">
                      @include('includes-frontend.frontEndAlerts')
                      @yield('content')
                    
                    <footer class="ant-layout-footer">
                        <div class="footer-logo"><img src="{{ asset('frontend/assets') }}/img/footer-logo.png" alt="logo"></div>
                        <div class="contact"><span style="font-family: GothamBook; font-size: 12px;">Liên hệ với chúng tôi:</span></div>
                        <div class="social-wrap">
                            <a href="http://facebook.com/tapply.vn"><img class="icon" src="{{ asset('frontend/assets') }}/img/fb-contact.png" alt="facebook"></a>
                            <a href="http://m.me/tapply.vn"><img class="icon" src="{{ asset('frontend/assets') }}/img/message-contact.png" alt="facebook"></a>
                        </div>
                        <div style="font-family: GothamBook; font-size: 12px; margin-top: 20px;">©2020 All rights reserved Tapply Vietnam</div>
                    </footer>
                </section>
            </div>
        </div>
         @yield('footer')
        
    </body></html>