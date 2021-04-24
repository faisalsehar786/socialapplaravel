{{-- extend --}} @extends('front-end-layout.app') @extends('includes-frontend.header') @extends('includes-frontend.footer') {{-- page titles --}} @section('title', 'Account') @section('content')
<div class="appOpacityBackground"></div>
<div style="background-color: rgb(255, 255, 255);">
<div class="EditProfile_EditProfile__Wtv9t">
<div class="EditProfile_editProfileContainer__p9NJA">
<div class="EditProfile_profileEditContainer__3pCvA">
<div class="CopyLink_copyLinkContainer__39pfe">
<h3 class="CopyLink_copyLinkTitle__3Yykr">Your Link:</h3>
<h3 class="CopyLink_accountUrl__2ZKBH">https://onthecard.me/mrchloe</h3>
<div class="CopyLink_buttonContainer__2woX2">
<div class="CopyLink_copyLinkButton__HAu09"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD9SURBVHgBrZIxEoIwFET3RwpKKO2wo/UEcgM9Qm7kEYw30BvgCbSkpLNxxnQ6OviNiqJOAuKwDTBLNpv3Q3AokvvARzFBo3pppsKcbFYs95EArxkcoFn6ADHw7F6RMChgQIFE6ozgS2KaSJ+KsYc6EafZLJy77FjuTA7J27tAR7o3+gYrQCNGO3kVWHqBbRtSNrKALSGihSrYb2DfIf6qbmE7d2FKHu1cLaqhWIN89BYnXKbmJ0k1R7yFmF0083llDdqoUMdyOwT5o2rVYwDft/3AepmrgXYeLVP93Dzy5/drAI7b3j3sNmCtQf+Atfn3BgZs9AHWoWMJ1uZdAYLmcIwEdyPUAAAAAElFTkSuQmCC" alt="" class="CopyLink_IconCopy__3_2V1" /> Copy Link </div>
<button class="MuiButtonBase-root MuiButton-root MuiButton-contained CopyLink_seePageButton__nj4r6 MuiButton-containedPrimary" tabindex="0" type="button"> <span class="MuiButton-label"><i class="far fa-eye" aria-hidden="true"></i> View Page</span><span class="MuiTouchRipple-root"></span> </button>
</div>
</div>
<div class="EditProfile_profileEditArea__39Jlt">
<div class="EditProfile_profileTab__3fYn3">
<div class="MuiPaper-root EditProfile_tabPaper__3ePpd MuiPaper-elevation1">
<div class="MuiTabs-root">
<div class="MuiTabs-scroller MuiTabs-fixed" style="overflow: hidden;">
<div class="MuiTabs-flexContainer" role="tablist">
<button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary EditProfile_tabText__31zS7 Mui-selected MuiTab-fullWidth" tabindex="0" type="button" role="tab" aria-selected="true"> <span class="MuiTab-wrapper">Basic Info</span><span class="MuiTouchRipple-root"></span> </button>
<button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary EditProfile_tabText__31zS7 EditProfile_middleTab__XaQ8N MuiTab-fullWidth" tabindex="-1" type="button" role="tab" aria-selected="false"> <span class="MuiTab-wrapper"><a href="{{ route('mangelinks') }}">Manage Link</a></span><span class="MuiTouchRipple-root"></span> </button>
<button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary EditProfile_tabText__31zS7 MuiTab-fullWidth" tabindex="-1" type="button" role="tab" aria-selected="false"> <span class="MuiTab-wrapper"><a href="{{ route('customize_settings') }}">Customize</a></span><span class="MuiTouchRipple-root"></span> </button>
</div> <span class="jss9 jss10 MuiTabs-indicator" style="left: 0px; width: 255.338px;"></span> </div>
</div>
</div>
</div>
<div class="BasicInfo_BasicInfo__XBw0y">
<!--   ////////////////////////s -->
<section class="ant-layout">
<main class="ant-layout-content app-edit-profile">
<div class="link-editor">
<h1 class="title">quản lý liên kết chia sẻ</h1>



<form id="dynamic_form_nest_item" autocomplete="off" class="ant-form ant-form-horizontal ant-form-large form-link-editor">
<div>
<div>
<div class="ant-space ant-space-horizontal ant-space-align-baseline" style="display: flex; margin-bottom: 16px; width: 100%; align-content: flex-start;">
<div class="ant-space-item" style="margin-right: 8px;">
<div style="display: flex; align-items: center;">
<div class="ant-row ant-form-item" style="margin-right: 10px;">
<div class="ant-col ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content">
<div class="ant-select ant-select-lg ant-select-single">
<div class="ant-select-selector">

<span class="ant-select-selection-item">
<div style="display: flex; align-items: center; font-family: GothamBook;">
<img class="action-btn" src="{{ asset('frontend/assets/img/down-icon.png') }}" alt="icon">
</div>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="ant-row ant-form-item">
<div class="ant-col ant-form-item-control">
<div class="ant-form-item-control-input">
<div class="ant-form-item-control-input-content">
<input class="ant-input ant-input-lg link-input" name="0,url" placeholder="Dán liên kết (https://abc.xyz)" type="text" id="dynamic_form_nest_item_links_0_url" value="https://www.facebook.com/mrchloes">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="ant-space-item">
<div>
<img class="action-btn" src="{{ asset('frontend/assets/img/up-icon.png') }}" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets/img/remove-icon.png') }}" alt="icon">
<img class="action-btn" src="{{ asset('frontend/assets/img/down-icon.png') }}" alt="icon">
</div>
</div>
</div>


<button type="button" class="ant-btn ant-btn-dashed ant-btn-lg ant-btn-block mb-5">
<span role="img" aria-label="plus" class="anticon anticon-plus">
<svg viewBox="64 64 896 896" focusable="false" data-icon="plus" width="1em" height="1em" fill="currentColor" aria-hidden="true">
<defs><style></style></defs>
<path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8z"></path>
<path d="M176 474h672q8 0 8 8v60q0 8-8 8H176q-8 0-8-8v-60q0-8 8-8z"></path>
</svg>
</span>
<span>Thêm liên kết chia sẻ</span>
</button>


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
<div class="EditProfile_profilePreviewArea__IAV__">
<div class="DesktopPreview_SocialMediaList__JRKcC">
<div class="DesktopPreview_desktopPreviewArea__36Oq2">
<div class="DesktopPreview_desktopPreviewOpacityBg__2MJCv"></div>
<div class="DesktopPreview_previewPhoneArea__3AKzq" style="background: rgb(255, 255, 255);">
<div style="position: fixed;
right: 20px;
top: 50%;">
<button type="" class="btn-outline-info btn-lg shadow-lg tempOneclick">Template 1</button>
<br>
<br>
<button type="" class="btn-outline-info btn-lg shadow-lg temptwoclick">Template 2</button>
</div>
<div id="desktop-preview" class="DesktopPreview_desktopPreview__2fT6p">

  <div class="temptwo" style="display:none;">
    <div class="image" style="width: 170px;
    height: 170px;
    border-radius: 90px;
    margin: 25px auto 5px;
    overflow: hidden;">
                    <img src="https://profilebuilder.sialkotians.com/uploads/79334bd1dc4c05ac55e1a9e6bfae97c2.png" class="img-thumbnail img-fluid rounded-circle">
                </div>
                <div class="name" style="width: 100%;
    text-align: center;
    color: #000;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding: 5px 0 10px;">
                    <h3><strong>CHI NGUYEN</strong></h3>
                    <p  class="mb-0">In the name of love</p>
                </div>
                <div  style="height: 5px;
    border-bottom: 1px solid #000;">
                    
                </div>
                <div>
                     <p  class="mb-0">Title</p>
                </div>
                <div>
                <h5  class="mb-0">Compny Name</h5>
                </div>
                 <div>
                <a href="" class="mt-3" style="font-size: 14px;
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
<section class="ant-layout " >
<div class="public-profile-wrap pt-5">
<main class="ant-layout-content profile-page">
 
<div class="site-card-border-less-wrapper tempOne" style="margin: 0 auto 32px;">
<div class="avatar-wrap">
<span class="ant-avatar ant-avatar-circle ant-avatar-image avatar" style="width: 150px; height: 150px; line-height: 150px; font-size: 18px;">
<img src="https://api.tapply.vn/v1/static/avatars/1616553185104-444365451-94351756_10157378221426270_9121484640815677440_n.jpeg">
</span>
<div class="circle-overlay"></div>
</div>
<h2 class="ant-typography name">Hải Anh (Jenny Nguyễn)</h2>
<div class="ant-typography ant-typography-secondary description">🎗Cuộc sống chỉ mang đến cho bạn 10% cơ hội, 90% còn lại là cách mà bạn phản ứng với nó.</div>
<div class="ant-space ant-space-horizontal ant-space-align-center contact-tab">
<div class="ant-space-item" style="margin-right: 8px; display: none;">
<a href="tel:0988747388">
<span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="http://127.0.0.1:8000/frontend/assets/img/call.png" alt="icon" style="width: 25px; margin-right: 10px;">Gọi điện</span>
</a>
</div>
<div class="ant-space-item" style="border-bottom-left-radius: 30px;
border-bottom-right-radius: 30px; width: 100%;">
<a href="https://api.tapply.vn/v1/users/60545cad7d57a23e064d4dd2/vcard">
<span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="http://127.0.0.1:8000/frontend/assets/img/phone-book.png" alt="icon" style="width: 25px; margin-right: 10px;">Lưu danh bạ</span>
</a>
</div>
</div>
</div>
<div class="ant-list ant-list-split ant-list-bordered social-listing">
<div class="ant-spin-nested-loading">
<div class="ant-spin-container">
<ul class="ant-list-items">
<a href="mailto:haianhmmo@gmail.com" rel="noreferrer" target="_blank">
<li href="haianhmmo@gmail.com" class="ant-list-item social-item">
<div class="ant-list-item-meta">
<div class="ant-list-item-meta-avatar">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon-social">
<img src="http://127.0.0.1:8000/frontend/assets/img/phone-book.png" alt="icon" style="width: 40px; margin-right: 40px;">
</svg>
</div> 
<div class="ant-list-item-meta-content">
<h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Email</span></h4>
</div>
</div>
<div class="more-option"></div>
</li>
</a>




</ul>
</div>
</div>
</div>


</section>
</div>
</main>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> @endsection @section("footer") @parent
<link href="{{ asset('frontend/assets') }}/css/mangeprofile.css" rel="stylesheet" />
<link href="{{ asset('frontend/assets') }}/css/mangeprofilemain.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterlogin.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterloginheader.css">

<script type="text/javascript">
$( document ).ready(function() {


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


});
</script>
<style type="text/css">
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
</style> @endsection
