{{-- extend  --}}
@extends('front-end-layout.app')
@extends('includes-frontend.header')
@extends('includes-frontend.footer')
@section('page_meta')
@php
  $metepage=App\Settings::first();
  $Lorder=App\Linkorder::where('user_id',Auth::user()->id);
@endphp
{!!$metepage->customize_page_meta !!}
@endsection
@section('title', 'Customize Account')
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
<span class="jss1 jss2 MuiTabs-indicator" style="left: 512.675px; width: 255.338px;"></span>
</div>
</div>
</div>
</div>
<div class="CustomizeBackground_root__2CZ9A">
<div class="CustomizeBackground_customizeArea__31nOB">
<div class="CustomizeBackground_title__21Cjo"><span>Style Options</span></div>
<div class="css-z54kij">
<div class="css-16vu25q">
<div>

<div class="CustomizeBackground_optionBox__yDdS0" >
<ul class="MuiGridList-root" style="margin: -2px;">
<li class="MuiGridListTile-root" selectColor='#E5E5EF' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" >
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(229, 229, 239);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root"  selectColor='#282828' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(40, 40, 40);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='#FF646A' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(255, 100, 106);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='#FB7A1D' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(251, 122, 29);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='#FFB577' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(255, 181, 119);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(212, 255, 0)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(212, 255, 0);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(1, 254, 56)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(1, 254, 56);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(130, 253, 137)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(130, 253, 137);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(0, 255, 212)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(0, 255, 212);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(255, 148, 167)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(255, 148, 167);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(255, 103, 133)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(255, 103, 133);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root"  selectColor='rgb(255, 0, 195)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(255, 0, 195);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(0, 164, 207)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(0, 164, 207);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(188, 7, 250)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(188, 7, 250);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(111, 7, 248)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(111, 7, 248);"></div>
</div>
</div>
</li>
<li class="MuiGridListTile-root" selectColor='rgb(0, 30, 255)' style="width: 12.5%; height: 54px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorCircleArea__mfh27" style="border: 3px solid rgb(255, 255, 255);">
<div class="CustomizeBackground_colorCircle__3NJtl" style="background-color: rgb(0, 30, 255);"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="css-1ikfih0">
<div>

<div class="CustomizeBackground_optionBox__yDdS0">
<div class="CustomizeBackground_label__3D-sJ">Background Image</div>
<div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3 MuiGrid-justify-xs-center">
<div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12 MuiGrid-grid-md-12 MuiGrid-grid-lg-12">
<div class="CustomizeBackground_mobileView__ilUXN">
<div class="CustomizeBackground_mobileViewOpacityBackground__27h6-" style="background: rgb(255, 255, 255);"></div>
<div class="CustomizeBackground_mobileViewBackground__1enJS" style="">
<div class="file-drop-area">
  <span class="fake-btn"></span>
  <span class="file-msg"></span>
  <form  method="POST"  id="backgroundImgchange" action="{{ route('links_ajax_user_Template_backgroun_img') }}" enctype="multipart/form-data">
@csrf
  <input class="file-input" type="file"  name="file" accept="image/png, image/jpeg"  >
 
</form> 
   </div> 
<img
alt="upload preview"
@if (!empty($Lorder->first()->bgimg))
src="{{ asset('frontend/assets/img/') }}/{{ $Lorder->first()->bgimg }}"
@else
src="{{ asset('/img/') }}/user_img_not_found.png"
@endif

class="CustomizeBackground_ImageResponsive__2wJeB"
/>
</div>
</div>
</div>
<div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12 MuiGrid-grid-md-12 MuiGrid-grid-lg-12">
<div class="CustomizeBackground_mobileViewButtonWrapper__2gajM">
<div class="CustomizeBackground_mobileViewButtonArea__aqXPm">
<label for="file-ip-1" class="CustomizeBackground_btnAddImage__16qi7">
<img
src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIjSURBVHgBrVRdTttAEJ5Zo6jqk63SVn2q89DKeSo3qHsDeoPNCaAnAE5QOECV5QRwg7gnaHhpInio81QJaGP1pQiSHWbWjmMnQSESY9m7np355n8BnphwlcA7fbnlgdqyABmBTS/Mq97agKEe+c/B7vLxDgH5cyopAiUW1MHABOlKwEhfxQq8EwHiNyHAHqLKvSIbsoIWmwI8Afvl3GyePgj4Xl9ve4AnzMzGMG6fm9ensIQifakRvD0B5jR8GpiXyQJgpEdsnbrsBj+3LPQmnZ39DmWd5ylo/CDe/wfVTE2QCV9NBRRYtkghIe1XFXOrja68VZ7IsOk2b/1nYHdmOAVxrmJe0kFn8xgeSX2XP0w4zN0aoBTCeQdgYG0iKZgv7SV/G+BCwrw1kNLcwDSfpVIo35b++6tkeRj3vwVDDvuM9flXfWBuzwGyZ/5iQ9Iybyr7ugaHmpUeTsBjZMsOorh9XDRscyrc0n+cZ33zorloBN/K947ssAAGuDBBD91oOcC1iMPVvJQjqSpnh5y3WJobHkmRvtZFMZMprwRsgDoSL3lSOlKUmqanYvfWwKRwSqYlBbg9mHlcE7qKWagrc0qI+4NOsLQnJYoNUB2Z9wmMP1dHdKG4LRcyfoXiAmAlw2ENc2Hk1pA8UyzRWFTbbPR7VX/p9ZXPbmOPD+McuKaQ8d14eAP/jlLTzOZ1V16wUXv0kRPtM4iv6O7s54oL9snpHpl21MQqWGceAAAAAElFTkSuQmCC"
class="CustomizeBackground_IconPlus__23Xx9"
alt=""
/>
Replace Image
</label>
 <form method="POST" id="upload_form" enctype="multipart/form-data" action="{{ route('links_ajax_user_Template_backgroun_img') }}">
 	@csrf
<input type="file" id="file-ip-1" accept="image/*" class="CustomizeBackground_uploadedImageInput__2zsPN" name="backgroundImage" />
@php
	
	
if ($Lorder->count()>0){
$imh=$Lorder->first()->bgimg;
}else {
	$imh='';
}
		
@endphp

<input type="hidden" name="headerlogoimagehidden" value="{{ $imh }}">

</div>
<div class="CustomizeBackground_mobileViewButtonArea__aqXPm">
<label class="CustomizeBackground_btnReplaceImage__2RY_S">
<img
src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEmSURBVHgB7VPBTcNAEJw1jvAH4RLcAhVACS6BDoJ5gBIJxSekOMoDkwqghJSQdEAHuAS/ACPFl71L7FxOJyuR8sx+Tjc7Ozd72iVYMRrlYRAgtnEpUVaELzFIChMnmzie5N98RHBHUf3iRoikbADfzGZZHklVTJjzm/P9WoohEfeuetd8aQVoMp31ZV0/tFY3AiXJHUnjhJCTIVsu2mLPe2cHK8Z1J1FjU6lI2/xGsJQGj7h2Z5973/bfGTbPd5Fes/zuwsNt9YMZG8flP/qrGsuXQbKwuZ5LQBWz5VR9WPCne0815ginwDFxFjiBgHMOhs+J4EMYEB0kwCsb8kLdoyP0Thj74BuJT34m5Vn/QKcCUEssnNbG0zc1gVGnAKEYPj0um+saOJVgj5NRdrgAAAAASUVORK5CYII="
class="CustomizeBackground_IconTrash__2nZEQ"
alt=""
/>
</label>
</div>
</div>
</div>
</div>
</div>
<div class="Backdrop BackdropClosed"></div>

</div>
</div>
<div class="css-gwb9cz">
<div class="css-z54kij">
<div class="css-1nvkuhr">
<div>

<div class="CustomizeBackground_optionBox__yDdS0">
<div class="CustomizeBackground_label__3D-sJ">Style</div>
<ul class="MuiGridList-root" style="margin: -2px;">
<li class="MuiGridListTile-root" style="width: 33.3333%; height: 94px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorStyleOutline__2ySaB" >
<div class="CustomizeBackground_colorStyleInline__3OLpk" style="border: rgb(255, 255, 255);">
<div class="CustomizeBackground_styleTriangle__1Hku4" setbackcolor='rgb(255, 255, 255)' style="background-color: rgb(255, 255, 255);"></div>
</div>
</div>
<p class="CustomizeBackground_styleText__3aRph">Light</p>
</div>
</li>
<li class="MuiGridListTile-root" style="width: 33.3333%; height: 94px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorStyleOutline__2ySaB" style="">
<div class="CustomizeBackground_colorStyleInline__3OLpk" style="border: rgb(255, 255, 255);">
<div class="CustomizeBackground_styleTriangle__1Hku4" setbackcolor='rgb(229, 229, 239)' style="background-color: rgb(229, 229, 239);"></div>
</div>
</div>
<p class="CustomizeBackground_styleText__3aRph">Color</p>
</div>
</li>
<li class="MuiGridListTile-root" style="width: 33.3333%; height: 94px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorStyleOutline__2ySaB">
<div class="CustomizeBackground_colorStyleInline__3OLpk" style="border: rgb(255, 255, 255);">
<div class="CustomizeBackground_styleTriangle__1Hku4" style="background-color: rgb(204, 204, 204);" setbackcolor='rgb(204, 204, 204)'></div>
</div>
</div>
<p class="CustomizeBackground_styleText__3aRph">Dark</p>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="css-16vu25q">
<div>

{{-- <div class="CustomizeBackground_optionBox__yDdS0">
<div class="CustomizeBackground_label__3D-sJ">Icon Color</div>
<ul class="MuiGridList-root" style="margin: -2px;">
<li class="MuiGridListTile-root" style="width: 33.3333%; height: 94px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorStyleOutline__2ySaB" style="border: 3px solid rgb(41, 96, 237);">
<div class="CustomizeBackground_colorStyleInline__3OLpk" style="border: 1px solid rgb(199, 199, 199);">
<div
class="CustomizeBackground_styleTriangle__1Hku4"
style="
background-image: url('data:image/png;base64,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');

background-repeat: no-repeat;
background-size: contain;
"
></div>
</div>
</div>
<p class="CustomizeBackground_styleText__3aRph" style="font-weight: 700;">Original</p>
</div>
</li>
<li class="MuiGridListTile-root" style="width: 33.3333%; height: 94px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorStyleOutline__2ySaB">
<div class="CustomizeBackground_colorStyleInline__3OLpk" style="border: 1px solid rgb(199, 199, 199);">
<div class="CustomizeBackground_styleTriangle__1Hku4" style="background-color: black;"></div>
</div>
</div>
<p class="CustomizeBackground_styleText__3aRph">Black</p>
</div>
</li>
<li class="MuiGridListTile-root" style="width: 33.3333%; height: 94px; padding: 2px;">
<div class="MuiGridListTile-tile">
<div class="CustomizeBackground_colorStyleOutline__2ySaB">
<div class="CustomizeBackground_colorStyleInline__3OLpk" style="border: 1px solid rgb(199, 199, 199);">
<div class="CustomizeBackground_styleTriangle__1Hku4" style="background-color: blue;"></div>
</div>
</div>
<p class="CustomizeBackground_styleText__3aRph">Blue</p>
</div>
</li>
</ul>
</div> --}}
</div>
</div>
</div>
</div>
</div>
<div class="CustomizeBackground_saveButtonArea__3Q-rf"><button type="submit" class="MainButton_button__1JA3M">Update Background Image</button></div>
</div>
</form>
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
<script src="{{ asset('js') }}/sweetalert.min.js"></script>
{{-- <link href="{{ asset('frontend/assets') }}/css/mangeprofile.css" rel="stylesheet" />
<link href="{{ asset('frontend/assets') }}/css/mangeprofilemain.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterlogin.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterloginheader.css">
 --}}
<script type="text/javascript">
$( document ).ready(function() {
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



$('.MuiGridListTile-root').click(function(){

let TabBgColor=$(this).attr('selectcolor');

$('.public-profile-wrap').css('background-color',TabBgColor);
$('#desktop-preview').css('background-color',TabBgColor);
$.ajax({
url:"{{ route('links_ajax_user_Template_save') }}",
type:"POST",
dataType:"json",
data:{bccolor:TabBgColor,_token:"{{ csrf_token() }}"},
success:function(res)
{
if(res.status=='ok'){
 
toastr.success('Template Background Set Successfully...!')
}
}
}) 


})


 //////////////////////////////////////////////////////

$('.CustomizeBackground_styleTriangle__1Hku4').click(function(){

let TabBgColor=$(this).attr('setbackcolor');

$('.public-profile-wrap').css('background-color',TabBgColor);
$('#desktop-preview').css('background-color',TabBgColor);

$.ajax({
url:"{{ route('links_ajax_user_Template_save') }}",
type:"POST",
dataType:"json",
data:{bccolor:TabBgColor,_token:"{{ csrf_token() }}"},
success:function(res)
{
if(res.status=='ok'){
 
toastr.success('Template Background Set Successfully...!')
}
}
}) 
})

 
$('.CustomizeBackground_btnReplaceImage__2RY_S').click(function(){


$('.public-profile-wrap').css('background-image', 'none');
$('.CustomizeBackground_ImageResponsive__2wJeB').attr('src','{{ asset('/img/user_img_not_found.png') }}');

$.ajax({
url:"{{ route('links_ajax_user_Template_save') }}",
type:"POST",
dataType:"json",
data:{removeimg:'ok',_token:"{{ csrf_token() }}"},
success:function(res)
{ 
if(res.status=='ok'){
 
toastr.success('Template Background Image Removed...!')
}
}
})

})



///////////////////////////////////////////////////////////////

function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function(e) {
$('.CustomizeBackground_ImageResponsive__2wJeB').attr('src', e.target.result);
$('.public-profile-wrap').css('background-image', 'url(' + e.target.result + ')')

}

reader.readAsDataURL(input.files[0]); // convert to base64 string



swal({
title: "Are you sure Want To Change Background Image...!?",
text: "",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
 
$('#backgroundImgchange').submit();
}
})
}
}
$(".CustomizeBackground_btnAddImage__16qi7" ).click(function() {


// $("#file-ip-1").trigger('click');
$("#file-ip-1").change(function(e) {
readURL(this); 
});
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
  position: absolute;
    display: flex;
    top: -3px;
    left: -1px;
    height: 189px;
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
.CustomizeBackground_colorCircle__3NJtl {
width: 19px;
height: 19px;
border-radius: 69px;
margin: 0 auto;
cursor: pointer;
}
.CustomizeBackground_styleTriangle__1Hku4 {
width: 28px;
height: 25px;
/* height: 40px; */
border-radius: 3px;
margin: 0 auto;
cursor: pointer;
background-color: #fff;
}
.css-1ikfih0 {
width: 50%;
/* padding-top: 30px;*/
padding-bottom:15px;
padding-right: 15px;
}

.css-gwb9cz {
width: 50%;
/*padding-top: 30px;*/
padding-bottom: 15px;
}

.css-z54kij {
box-sizing: border-box;
margin: 0px;
min-width: 0px;
flex-wrap: wrap;
display: flex;
}
.css-1nvkuhr {
box-sizing: border-box;
margin: 0px;
min-width: 0px;
width: 100%;
padding-bottom: 15px;
}

.css-16vu25q {
box-sizing: border-box;
margin: 0px;
min-width: 0px;
width: 100%;
padding-bottom: 15px;
}

.CustomizeBackground_title__21Cjo {
margin-bottom: 15px;
}

/* @media screen and (min-width: 52em) */
/*{
.css-1ikfih0 {
width: 50%;
padding-top: 30px;
padding-bottom: 30px;
padding-right: 30px;
}
}
@media screen and (min-width: 40em)
{
.css-1ikfih0 {
width: 100%;
padding-top: 20px;
padding-bottom: 20px;
padding-right: 20px;
}
}*/
</style>

@endsection
