<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         
        @yield('page_meta')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <title>@yield('title')</title>
        {{-- include all css files and meta tags --}}
        @yield('header')
       <style type="text/css">
           .is-invalid{
                border: 2px solid #de1010 !important;
            }
       </style> 
    </head>
    <body style="">
        <div id="root">
            <div class="App">
                <div class="AppBar_grow__gkU4D">
                    <header class="MuiPaper-root MuiAppBar-root MuiAppBar-positionFixed MuiAppBar-colorPrimary AppBar_appBar__2OUda mui-fixed MuiPaper-elevation4" style="">
                        <div class="MuiToolbar-root MuiToolbar-regular MuiToolbar-gutters">
                            <div class="AppBar_menuButton__3Nnxt"><h3 class="AppBar_logoText__1ZkOm">
                              
                              @php
                               $settings= App\Settings::first();
                              @endphp
                              <img src="{{ asset('frontend/assets/img/') }}/{{$settings->headerlogo }}" alt="" class="img-fluid" style="max-width: 189px;height: auto;">
                            </h3></div>
                            <div class="AppBar_grow__gkU4D"></div>
                            <div class="AppBar_sectionDesktop__2RfQ-">
                                <p class="MuiTypography-root AppBar_accountIconArea__3_JNJ MuiTypography-body1 MuiTypography-noWrap droplogmenu">

                                     @if (!empty(Auth::user()->image))
                                                     <img src="{{ asset('assets/img') }}/{{ Auth::user()->image }}"
                                                    id="showProfileImage"
                                                     class="AppBar_userAvatar__1_pKi"
                                                    >
                                                    @else
                                                     <img src="{{ asset('img') }}/user_img_not_found.png"
                                                    id="showProfileImage"
                                                     class="AppBar_userAvatar__1_pKi"
                                                    >
                                                    @endif
                                    
                        <!-- Dropdown - User Information -->
                       <div class="dropdown-menu dropdown-menu-right dropmenu shadow animated--grow-in " aria-labelledby="userDropdown">
                  
               {{--    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/user_mangement">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a> --}}
                  
                 {{--  <div class="dropdown-divider"></div> --}}
                  <a class="dropdown-item" href="javascript:void" onclick="$('#logout-formlogout').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
            
                                    
<span class="AppBar_accountIconLabel__dChZM">{{ Auth::user()->username }}</span>
                                </p>
                            </div>
                        </div>
                    </header>
                </div>
                <form id="logout-formlogout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
                 @include('includes-frontend.frontEndAlerts')
                @yield('content')
                @yield('footer')
            </div>
        </div>

        <script type="text/javascript">
            
            $(document).ready(function(){
  $(".droplogmenu").click(function(){
    $(".dropmenu").toggleClass("show");
  });
});
        </script>
        <script type="text/javascript">
  function myInputcopyLik() {
  var copyText = document.getElementById("myInputcopyLik");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  toastr.success('Profile Link Copy Successfully...!');

}


$(document).ready(function(){

$('.tempOneclick').click(function(){
$.ajax({
url:"{{ route('links_ajax_user_Template_save') }}",
type:"POST",
dataType:"json",
data:{temp:1,_token:"{{ csrf_token() }}"},
success:function(res)
{
if(res.status=='ok'){
 
toastr.success('Template one Set Successfully...!')
}
}
}) 
})
//////////////////////////////

$('.temptwoclick').click(function(){
$.ajax({
url:"{{ route('links_ajax_user_Template_save') }}",
type:"POST",
dataType:"json",
data:{temp:2,_token:"{{ csrf_token() }}"},
success:function(res)
{
if(res.status=='ok'){
 
toastr.success('Template one Set Successfully...!')
}
}
}) 
})
///////////////////////////////////

  });
</script>
    </body>
</html>