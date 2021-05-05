{{-- extend  --}}
@extends('front-end-layout.app')
@extends('includes-frontend.header')
@extends('includes-frontend.footer')
@section('page_meta')
@php 
	$metepage=App\Settings::first();
@endphp
{!!$metepage->after_login_page_meta !!}
@endsection
@section('title', 'Account')
@section('content')
<div class="appOpacityBackground"></div>
<div style="background-color: rgb(255, 255, 255);">
<div class="EditProfile_EditProfile__Wtv9t">
<div class="EditProfile_editProfileContainer__p9NJA">
<div class="EditProfile_profileEditContainer__3pCvA">
<div class="CopyLink_copyLinkContainer__39pfe">

 @include('frontEnd.myAccount.copyinvitation')
 
<div class="EditProfile_profileEditArea__39Jlt">
<div class="EditProfile_profileTab__3fYn3">
<div class="MuiPaper-root EditProfile_tabPaper__3ePpd MuiPaper-elevation1">
<div class="MuiTabs-root">
<div class="MuiTabs-scroller MuiTabs-fixed" style="overflow: hidden;">
<div class="MuiTabs-flexContainer" role="tablist">

 @include('frontEnd.myAccount.buttontab')




 
</div>
<span class="jss9 jss10 MuiTabs-indicator" style="left: 0px; width: 255.338px;"></span>
</div>
</div>
</div>
</div>
<div class="BasicInfo_BasicInfo__XBw0y">
<!--   ////////////////////////s -->
<section class="ant-layout">

<main class="ant-layout-content app-edit-profile">

<div class="main-info" style="margin-top: 95px;">
<div class="ant-space ant-space-horizontal ant-space-align-center avatar-wrap">
<div class="ant-space-item" style="margin-right: 8px;">
<div class="avatar">
<span class="ant-avatar ant-avatar-circle ant-avatar-image" style="width: 150px; height: 150px; line-height: 150px; font-size: 18px;">

@if (!empty(Auth::user()->image))
<img src="{{ asset('assets/img') }}/{{ Auth::user()->image }}"
id="showProfileImage2"
>
@else
<img src="{{ asset('img') }}/user_img_not_found.png"
id="showProfileImage2"
>
@endif


</span>
<div class="circle-overlay"></div>
</div>
</div>
<div class="ant-space-item">
<span class="">
<div class="ant-upload ant-upload-select ant-upload-select-text">
<span tabindex="0" class="ant-upload" role="button">
<div class="file-drop-area">
  <span class="fake-btn"></span>
  <span class="file-msg"></span>
  <form  method="POST"  id="Profilepicchange" action="{{ route('updateUserData') }}" enctype="multipart/form-data">
@csrf
  <input class="file-input" type="file"  name="file" accept="image/png, image/jpeg" id="cclikFile" >
  <input type="hidden" name="imagehidden" style="display: none;" value="{{ Auth::user()->image }}">
</form> 
   </div>


<button type="button" class="ant-btn ant-btn-icon-only upload-btn"><img class="icon-camera" src="{{ asset('frontend/assets') }}/img/camera.png" alt="camera"></button>

</span>
</div>
<div class="ant-upload-list ant-upload-list-text"></div>
</span>
</div>
</div>
<h1 class="title">EDIT INFORMATION</h1>
<form id="nest-messages" class="ant-form ant-form-horizontal" method="POST" action="{{ route('updateUserData') }}" enctype="multipart/form-data">
@csrf
{{-- <input type="file" accept="image/png, image/jpeg" class="file-inputAssign" name="image" style="display: none;" id="cclikFile">
<input type="hidden" name="imagehidden" style="display: none;" value="{{ Auth::user()->image }}"> --}}
<div class="title-overlay">
<div class="ant-row ant-form-item">
<div class="ant-col ant-col-8 ant-form-item-label"><label for="nest-messages_user_fullName" class="ant-form-item-required" title="Your name">
Your name</label></div>
<div class="ant-col ant-col-16 ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content">
<input  class="ant-input input" type="text" name="name" id="nest-messages_user_fullName" value="{{ Auth::user()->name }}"></div>
</div>
</div>
</div>
<div class="ant-row ant-form-item">
<div class="ant-col ant-col-8 ant-form-item-label"><label for="nest-messages_user_description" class="" title="Giới thiệu">About</label></div>
<div class="ant-col ant-col-16 ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content"><textarea name="about" id="nest-messages_user_description" class="ant-input input text-area">{{ Auth::user()->about }}</textarea></div>
</div>
</div>
</div> 
<div class="ant-row ant-form-item">
<div class="ant-col ant-col-8 ant-form-item-label"><label for="nest-messages_user_email" class="" title="Email">Email</label></div>
<div class="ant-col ant-col-16 ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content"><input class="ant-input ant-input-disabled input" disabled="" type="text" id="nest-messages_user_email" value="{{ Auth::user()->email }}"></div>
</div>
</div>
</div>
<div class="ant-row ant-form-item">
<div class="ant-col ant-col-8 ant-form-item-label"><label for="nest-messages_user_phone" class="" title="phone">Phone</label></div>
<div class="ant-col ant-col-16 ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content"><input class="ant-input input" type="tel" name="phone" id="nest-messages_user_phone" value="{{Auth::user()->phone}}"></div>
</div>
</div>
</div>
</div>
<div class="ant-row ant-form-item login-btn">
<div class="ant-col ant-col-16 ant-col-offset-8 ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content">
<button type="submit" class="ant-btn ant-btn-primary btn-block"><span>Update</span></button>
</div>
</div>
</div>
</div>
</form>
</div>
</main> 

</section>
<!--  //////////////////////////// -->
<div class="Backdrop BackdropClosed"></div>
</div>
</div>
</div>
 @include('frontEnd.myAccount.mobile_section')
</div>
</div>
</div>

@endsection
@section("footer")
@parent
{{-- <link href="{{ asset('frontend/assets') }}/css/mangeprofile.css" rel="stylesheet" />
<link href="{{ asset('frontend/assets') }}/css/mangeprofilemain.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterlogin.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/ afterloginheader.css"> --}}


<script src="{{ asset('js') }}/sweetalert.min.js"></script>
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function(e) {
$('#showProfileImage').attr('src', e.target.result);
$('#showProfileImage2').attr('src', e.target.result);
$('.profilecimg').attr('src', e.target.result);

}

reader.readAsDataURL(input.files[0]); // convert to base64 string
swal({
title: "Are you sure Want To Change Profile Picture...!?",
text: "",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
 
$('#Profilepicchange').submit();
}
})

}
}
$( ".upload-btn" ).click(function() {


$("#cclikFile").trigger('click');
$("#cclikFile").change(function(e) {
readURL(this);
});
}); 
$( document ).ready(function() {

$('#nest-messages_user_fullName').keyup(function(){
$('.nameupdateC').text($(this).val());

})

$('#nest-messages_user_description').keyup(function(){
$('.aboutupdateC').text($(this).val());

})



function getShareLinkData(){
$.ajax({
url:"{{ route('links_ajax_shareLink_get') }}",
type:"GET",
dataType:"json",
success:function(res)
{

console.log(res);
 if(res.length>0){
temp=res.map(function(i,a){

return `<a href="${(i.url==null)?'#':i.url}" rel="noreferrer" target="_blank">
                                <li href="${(i.url==null)?'#':i.url}" class="ant-list-item social-item">
                                  <div class="ant-list-item-meta">
                                    <div class="ant-list-item-meta-avatar">
                                     
                                        <img src="{{ asset('frontend/assets/img/icon/') }}/${i.linksmockup.icon}" alt="icon" style="width: 40px; margin-right: 40px;">
                                     
                                    </div>
                                    <div class="ant-list-item-meta-content">
                                      <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">${i.linksmockup.name}</span></h4>
                                    </div>
                                  </div>
                                  <div class="more-option"></div>
                                </li>
                              </a>`;
})
$('.sharelinkshow').html(temp);
 }

}
})
}
getShareLinkData()

$('.tempOneclick').click(function(){
$('.tempOne').show();
$('.temptwo').hide();
$('.public-profile-wrap').addClass('pt-5');
});
$('.temptwoclick').click(function(){
$('.tempOne').hide();
$('.temptwo').show();
$('.public-profile-wrap').removeClass('pt-5');
});

var $fileInput = $('.file-input');
var $droparea = $('.file-drop-area');

// highlight drag area
$fileInput.on('dragenter focus click', function() {
  $droparea.addClass('is-active');
});

// back to normal state
$fileInput.on('dragleave blur drop', function() {
  $droparea.removeClass('is-active');
});


// change inner text
$fileInput.on('change', function() {
  var filesCount = $(this)[0].files.length;
  var $textContainer = $(this).prev();
 

  if (filesCount === 1) {
    // if single file is selected, show file name
    var fileName = $(this).val().split('\\').pop();
    //$textContainer.text(fileName);

 
  

    readURL(this) 
    
  } else {
    // otherwise show number of files
    //$textContainer.text(filesCount + ' files selected');
  }
});


});
</script>
<style type="text/css">


.file-drop-area {
  height: 160px;
    position: relative;
    display: flex;
    top: -81px;
    left: -202px;
  align-items: center;
  width: 450px;
  max-width: 100%;
  padding: 25px;
  border: 1px dashed rgba(255, 255, 255, 0.4);
  border-radius: 3px;
  transition: 0.2s;
  &.is-active {
    background-color: rgba(255, 255, 255, 0.05);
  }
}

.fake-btn {
  flex-shrink: 0;
  background-color: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 3px;
  padding: 8px 15px;
  margin-right: 10px;
  font-size: 12px;
  text-transform: uppercase;
}

.file-msg {
  font-size: small;
  font-weight: 300;
  line-height: 1.4;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.file-input {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  cursor: pointer;
  opacity: 0;
  &:focus {
    outline: none;
  }
}
.anticon {
display: inline-block;
color: inherit;
font-style: normal;
line-height: 0;
text-align: center;
text-transform: none;
vertical-align: -0.125em;
text-rendering: optimizeLegibility;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.anticon > * {
line-height: 1;
}
.anticon svg {
display: inline-block;
}
.anticon::before {
display: none;
}
.anticon .anticon-icon {
display: block;
}
.anticon[tabindex] {
cursor: pointer;
}
.anticon-spin::before,
.anticon-spin {
display: inline-block;
-webkit-animation: loadingCircle 1s infinite linear;
animation: loadingCircle 1s infinite linear;
}
@-webkit-keyframes loadingCircle {
100% {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
@keyframes loadingCircle {
100% {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
.anticon {
display: inline-block;
color: inherit;
font-style: normal;
line-height: 0;
text-align: center;
text-transform: none;
vertical-align: -0.125em;
text-rendering: optimizeLegibility;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.anticon > * {
line-height: 1;
}
.anticon svg {
display: inline-block;
}
.anticon::before {
display: none;
}
.anticon .anticon-icon {
display: block;
}
.anticon[tabindex] {
cursor: pointer;
}
.anticon-spin::before,
.anticon-spin {
display: inline-block;
-webkit-animation: loadingCircle 1s infinite linear;
animation: loadingCircle 1s infinite linear;
}
@-webkit-keyframes loadingCircle {
100% {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
@keyframes loadingCircle {
100% {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
</style>
@endsection
