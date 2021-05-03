@extends('front-end-layout.login_register_layout')
@section('page_meta')
@php
$metepage=App\Settings::first();
@endphp
{!!$metepage->profile_page_meta !!}
@endsection
@section('title', 'Profile')
@section('content')
@php
$username=Request::segment(1);
$userObj= App\User::where('username',$username);
$userObj2= App\User::where('usernanme_by_user',$username);
if ($userObj->count()>0) {
$userData=App\User::where('id', $userObj->first()->id)->first();
$linkorderCheck= App\Linkorder::where('user_id', $userObj->first()->id);
}elseif ($userObj2->count()>0) {
$userData=App\User::where('id', $userObj2->first()->id)->first();
$linkorderCheck= App\Linkorder::where('user_id',$userObj2->first()->id);
} else {
return redirect('/login');
}
@endphp

<h1 class="logo" style='margin-bottom: 0px !important;margin-top: 15px;'>
@php
$settings=App\Settings::first();
@endphp
@if (isset($settings) && !empty($settings->headerlogo))
<img src="{{ asset('frontend/assets') }}/img/{{ $settings->headerlogo }}" class="mb-3" alt="Logo" style="max-width: 230px;
margin-bottom: 0px !important;">
@else
<img src="{{ asset('frontend/assets') }}/img/footer-logo.png" alt="Logo">
@endif
</h1>

<div class="temptwo" style="position: relative;
  max-width: 800px;
  width: 100%;margin: 0 auto 55px;margin-bottom: 0px;display:@if( $linkorderCheck->count()>0 && $linkorderCheck->first()->temp==2) block  @else none @endif;">
  <div class="image" style="width: 150px;
    height: 150px;
    border-radius: 90px;
    margin: 25px auto 5px;
    overflow: hidden;">
    <img  class='profilecimg' src="{{ asset('assets/img/') }}/{{ $userData->image }}">
  </div>
  <div class="name" style="width: 100%;
    text-align: center;
    color: #000;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding: 5px 0 10px;">
    <h3><strong class="nameupdateC">{{ $userData->name }}</strong></h3>
    <p  class="mb-0 aboutupdateC" style="word-break: break-all;">{{ $userData->about }}</p>
  </div>
  <div  style="height: 5px;
    border-bottom: 1px solid #000;">
    
  </div>
  {{-- <div>
    <p  class="mb-0">Title</p>
  </div>
  <div>
    <h5  class="mb-0">Compny Name</h5>
  </div> --}}
  <div>
    <a href="{{ route('saveVacard',['id'=>$userData->id]) }}" class="mt-3 mb-3 saveVacard"  style="font-size: 14px;
      color: #000;
      text-decoration: none;
      display: inline-block;
      background-color: #fff;
      padding: 10px 23px;
      box-shadow: unset;
      text-transform: uppercase;
      border: 1px solid #000;
      border-radius: 20px;
      font-weight: 700;
      border-radius: 14px;
      margin: 0;
    margin-top: -5px;">SAVE CONTACT</a>
  </div>
</div>
<div class="site-card-border-less-wrapper tempOne" style="margin: 0 auto 32px;margin-top: 79px; display:@if( $linkorderCheck->count()>0 && $linkorderCheck->first()->temp==1) block @else
  @if ($linkorderCheck->count()<1 )
  block
  @else
  none
  @endif
  @endif;">
  <div class="avatar-wrap">
    <span class="ant-avatar ant-avatar-circle ant-avatar-image avatar" style="width: 150px; height: 150px; line-height: 150px; font-size: 18px;">
      <img class='profilecimg' src="{{ asset('assets/img/') }}/{{ $userData->image }}">
    </span>
    <div class="circle-overlay"></div>
  </div>
  <h2 class="ant-typography name nameupdateC">{{ $userData->name }}</h2>
  <div class="ant-typography ant-typography-secondary description aboutupdateC">{{ $userData->about }}</div>
  <div class="ant-space ant-space-horizontal ant-space-align-center contact-tab">
    {{--   <div class="ant-space-item" style="margin-right: 8px; display: none;">
      <a href="tel:0988747388">
        <span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="http://127.0.0.1:8000/frontend/assets/img/call.png" alt="icon" style="width: 25px; margin-right: 10px;">Gọi điện</span>
      </a>
    </div> --}}
    <div class="ant-space-item" style="border-bottom-left-radius: 30px;
      border-bottom-right-radius: 30px; width: 100%;">
      <a href="{{ route('saveVacard',['id'=>$userData->id]) }}" class="saveVacard">
        <span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="{{ asset('frontend/assets/img/phone-book.png') }}" alt="icon" style="width: 25px; margin-right: 10px;">Phone</span>
      </a>
    </div>
  </div>
</div>
<div class="ant-list ant-list-split ant-list-bordered social-listing">
  <div class="ant-spin-nested-loading">
    <div class="ant-spin-container">
      <ul class="ant-list-items sharelinkshow">
        
        
      </ul>
    </div>
  </div>
</div>

@endsection
@section("footer")
@parent

<style type="text/css">

.public-profile-wrap {
background-color: #ffffff08;
overflow: hidden;
}
.ant-layout{
background-position: center;
background-repeat: no-repeat;
background-size: cover;
/**/
@if (!empty($linkorderCheck->first()))
{{-- expr --}}

@if (!empty($linkorderCheck->first()->bgimg))
background-image: url("{{ asset('frontend/assets/img/') }}/{{$linkorderCheck->first()->bgimg }}");
@else
background-color:{{ $linkorderCheck->first()->bgcolor }};
@endif
@endif
}
</style>
<script type="text/javascript">
$( document ).ready(function() {
// $('.saveVacard').click(function(e){
// e.preventDefault();
// $.ajax({
// url:"",
// type:"GET",
// dataType:"json",
// success:function(res)
// {
// console.log(res);
// }
// })
// });
function getShareLinkDataPr0file(){
$.ajax({
url:"{{ route('links_ajax_shareLink_get_order_display',['id'=>$userData->id]) }}",
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
getShareLinkDataPr0file()
});
</script>
@endsection