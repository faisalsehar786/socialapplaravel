{{-- extend  --}}
@extends('front-end-layout.app')
@extends('includes-frontend.header')
@extends('includes-frontend.footer')
{{-- page titles --}}
@section('title', 'Account')
@section('content')
<div class="appOpacityBackground"></div>
<div style="background-color: rgb(255, 255, 255);">
    <div class="EditProfile_EditProfile__Wtv9t">
        <div class="EditProfile_editProfileContainer__p9NJA">
            <div class="EditProfile_profileEditContainer__3pCvA">
                <div class="CopyLink_copyLinkContainer__39pfe">
                    <h3 class="CopyLink_copyLinkTitle__3Yykr">Your Link:</h3>
                    <h3 class="CopyLink_accountUrl__2ZKBH">https://onthecard.me/mrchloe</h3>
                    <div class="CopyLink_buttonContainer__2woX2">
                        <div class="CopyLink_copyLinkButton__HAu09">
                            <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD9SURBVHgBrZIxEoIwFET3RwpKKO2wo/UEcgM9Qm7kEYw30BvgCbSkpLNxxnQ6OviNiqJOAuKwDTBLNpv3Q3AokvvARzFBo3pppsKcbFYs95EArxkcoFn6ADHw7F6RMChgQIFE6ozgS2KaSJ+KsYc6EafZLJy77FjuTA7J27tAR7o3+gYrQCNGO3kVWHqBbRtSNrKALSGihSrYb2DfIf6qbmE7d2FKHu1cLaqhWIN89BYnXKbmJ0k1R7yFmF0083llDdqoUMdyOwT5o2rVYwDft/3AepmrgXYeLVP93Dzy5/drAI7b3j3sNmCtQf+Atfn3BgZs9AHWoWMJ1uZdAYLmcIwEdyPUAAAAAElFTkSuQmCC"
                            alt=""
                            class="CopyLink_IconCopy__3_2V1"
                            />
                            Copy Link
                        </div>
                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained CopyLink_seePageButton__nj4r6 MuiButton-containedPrimary" tabindex="0" type="button">
                        <span class="MuiButton-label"><i class="far fa-eye" aria-hidden="true"></i> View Page</span><span class="MuiTouchRipple-root"></span>
                        </button>
                    </div>
                </div>
                <div class="EditProfile_profileEditArea__39Jlt">
                    <div class="EditProfile_profileTab__3fYn3">
                        <div class="MuiPaper-root EditProfile_tabPaper__3ePpd MuiPaper-elevation1">
                            <div class="MuiTabs-root">
                                <div class="MuiTabs-scroller MuiTabs-fixed" style="overflow: hidden;">
                                    <div class="MuiTabs-flexContainer" role="tablist">
                                        <button
                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary EditProfile_tabText__31zS7 Mui-selected MuiTab-fullWidth"
                                        tabindex="0"
                                        type="button"
                                        role="tab"
                                        aria-selected="true"
                                        >
                                        <span class="MuiTab-wrapper">Basic Info</span><span class="MuiTouchRipple-root"></span>
                                        </button>
                                        <button
                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary EditProfile_tabText__31zS7 EditProfile_middleTab__XaQ8N MuiTab-fullWidth"
                                        tabindex="-1"
                                        type="button"
                                        role="tab"
                                        aria-selected="false"
                                        >
                                        <span class="MuiTab-wrapper"><a href="{{ route('mangelinks') }}">Manage Link</a></span><span class="MuiTouchRipple-root"></span>
                                        </button>
                                        <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary EditProfile_tabText__31zS7 MuiTab-fullWidth" tabindex="-1" type="button" role="tab" aria-selected="false">
                                        <span class="MuiTab-wrapper">Customize</span><span class="MuiTouchRipple-root"></span>
                                        </button>
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
                                                    id="showProfileImage"
                                                    >
                                                    @else
                                                     <img src="{{ asset('img') }}/user_img_not_found.png"
                                                    id="showProfileImage"
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
                                        <input type="file" accept="image/png, image/jpeg" name="image" style="display: none;" id="cclikFile">
                                        <input type="hidden" name="imagehidden" style="display: none;" value="{{ Auth::user()->image }}">
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
                                    right: 50px;
                                    top: 50%;">
                                    <button type="" class="btn-outline-info btn-lg shadow-lg ">Template 1</button>
                                    <br>
                                    <br>
                                    <button type="" class="btn-outline-info btn-lg shadow-lg ">Template 2</button>
                                </div>
                                
                                <div id="desktop-preview" class="DesktopPreview_desktopPreview__2fT6p">
                                    <div class="UploadImage_root__3TLjz">
                                        <div class="UploadImage_formInput__1cdKA">
                                            <div class="UploadImage_preview__nI1vI">
                                                <img
                                                src="https://firebasestorage.googleapis.com/v0/b/onthecard2021.appspot.com/o/images%2Fnmnntlc%40gmail.com%2F20294206_1381002262007004_3791877910360430513_n.jpg?alt=media&amp;token=3cb6eff2-f3a8-474c-a769-9d6850f0ec60"
                                                alt="avatarImg"
                                                id="file-ip-1-preview"
                                                class="UploadImage_userAvatar__3n992"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="HeaderBox_HeaderBox__u3Xaf">
                                        <div class="Logo_logo__jBiav">
                                            <p style="color: rgb(0, 0, 0);">insta</p>
                                            <img alt="" />
                                        </div>
                                        <p class="HeaderBox_bio__3KQQD" style="color: rgb(66, 68, 74);">uuuhh</p>
                                    </div>
                                    <div class="DesktopPreview_downloadButtonWrapper__2gDBj">
                                        <div class="DownloadButton_downloadButton__2l6oy">
                                            <img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAVCAYAAAB2Wd+JAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACxSURBVHgB7ZOxDQIxDEVtODEBA1ChwDRsgJkEbpLABKzAGHTQ0eRWINgcRCEXB3GCjidFtuT/ohQxgIKhy0SONq+0AcLoFNoMA+jJX/ypOCW3eBeOM3dxRs12CLg31Gw0ac4zyXC1QfTgD1L5i6xzskieZ9JfMWRbDDlCQNteBDU+glzrp+TR09GOdy9iKqfEUkfU5FTKip1nZ6QiIpuVW8K3wdKWl6iiTf9M5HOGHtwAoMdDkNMZFjEAAAAASUVORK5CYII="
                                            alt=""
                                            class="DownloadButton_IconDownload__3vb_d"
                                            />
                                            Save Contact
                                        </div>
                                    </div>
                                    <div class="DesktopPreview_socialLinkBoxWrapper__2ZC3C">
                                        <div class="NewLinkBox_LinkBox__2yOnc NewLinkBox_LinkBoxPreview__3O43r">
                                            <div class="NewLinkBox_socialIconWrapper__3mG8g">
                                                <div class="NewLinkBox_iconPlate__2U1zL" style="background-color: rgb(246, 246, 246);">
                                                    <img src="/static/media/instagram.1d59b7f2.png" class="NewLinkBox_socialIcon__2R97u" alt="url" />
                                                </div>
                                            </div>
                                            <h2 class="NewLinkBox_content__1VcIC">
                                            <p class="NewLinkBox_p__3jgz2 NewLinkBox_pPreview__2iHEO">Instagram</p>
                                            <p class="NewLinkBox_p__3jgz2 NewLinkBox_pPreview__2iHEO"></p>
                                            </h2>
                                            <div class="NewLinkBox_directIcon__D9hsR"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="NewLinkBox_LinkBox__2yOnc NewLinkBox_LinkBoxPreview__3O43r">
                                            <div class="NewLinkBox_socialIconWrapper__3mG8g">
                                                <div class="NewLinkBox_iconPlate__2U1zL" style="background-color: rgb(246, 246, 246);">
                                                    <img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAYAAAA5ZDbSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAATKSURBVHgB7d3PbxRlHMfx7/MspZUItAa1BUwGPdHEtsNJ8ECLCSacRDEe+WHi2SalR2lvpqWx/AHoevDkwXqEA64HkZPdgNKTYWPAbiKRRYiiy87XeYadZilb2LTz7M58n88rGZjubpM278wzz+w82SpqUf/EtVGt6SATj4Rfms0jaKcKMRVJUZGD2rfls36hlW9Sz3pB/+mrJ8IXHQ9fOUqQJiVmmi7PDuWf9qI1A/d/vOiprtwXCJt6pXAbX54ZWmj2pG724K7Jn4+rzblFxM0EL9y+2Tl57UyzJ584gk3cgII8QeYoUlO/z7w+/fhjDcxESmn+jiCzVkdeCRydczfnTFyPINPCWfZYPMteOQfr7pwZwz2CzFM6nBzXRYHN0RtOuU8QSOGZy1uzEwWuH70gSPTeBdXPwQOTV28Qhmd5ujZ5un9icZQQV6Zq9ahWpEcIRGKlhnU4SHsEIinmEc2KegmEUr2aQDQEFg6BhUNg4RBYOAQWDoGF20SwLrv7umiwv5u29eSi/Y24cuPvaLMBgVu0rUfT4b1b6e3BrfTGni3R10n57NJtBO4Uc3Se2t9H7+/rTTRquyDwGkzM8UMv0qkDfZRlCNzE4b3P09x7OzN5xK6GwKucOfJy5o/aRgjcYO7dATq2bztJguvgOolxDQSmR8OyxLiG84E/PPCCqHPuak4HNte4nxx5iSRzOrAZmqVzNvAxf3t0vSuds4HH39pBLnAysLlZsLt3Y3eAssLJwGZ4doWTgfe/uoVc4Vxgl4Znw7nAgwM95BLnbjYMDnSTTReW7tPF6/forwdBuNVa+p6blSrZ4lzgVywOzx+c/83a0pv1cm6INovkbPjR4sK5jXAv8HN2fuU0xjVwu1A4BBYOgYVDYOEQWDgEFg6BhUNg4RBYOAQWDoGFQ2DhEFg4BBYOgYXL5IqOHyZeS93CufFDO6Jto27eqdKbc79SUnAEp8yVUrILBxA4Zc5fvkNJQuAUub78b7g9oCQhcIp8fvlPShoCp4RZQ31h6R4lDYFT4uLS/WixfNIQOCWSnlzFEDgFbEyuYgicAjYmVzEE7jBbk6sYAneYrclVDIE7zNbkKobAHWRzchVD4A6yObmKIXCH2J5cxRC4Q2xPrmII3CFf/3SX2iGTKzp+CScmZuXDephP2bHxtxjMB6m0+jOZI7ddnwiQycAffXWL1sss97ER2ByR85duU9pgiBYOgYVDYOEQWDgEFg6BhUNg4RBYOAQWDoGFQ2DhEFg4BBYOgYVDYOEQWDgEFg6BhUNg4RBYOAQWDoGFQ2DhEFg4BBYOgYXTiqlCIBIzlTSF/xCIpDTf1fphUCCQiamgb837xXAXw7RADzkoPJpkMX9JIAwX/5j1i1FgzgXzBKIwq3Pm/yhw+VO/FD5yjkAILpVnh/Jmb+U6uLsaTJknCDKPdTAW768ELs37FQ6CkwSZxsTT0Yhc99g7WeWzfoG5hsgZFcWdGZ5qfOyJtyrLs36earWjhEunTGkW12j6XvTynL/AuubjnJwFXOKgNtYsrrHmzQYzji/PDO8J3888idCpVDFH7T//Bb45ta71omd+TlZ9up3fdXpxpKb0O+EU7SAp9hSRR9A2HM6DFXEl3PmeOVh4WtRG/wOUJWsGmZxVhgAAAABJRU5ErkJggg=="
                                                    class="NewLinkBox_socialIcon__2R97u"
                                                    alt="url"
                                                    />
                                                </div>
                                            </div>
                                            <h2 class="NewLinkBox_content__1VcIC">
                                            <p class="NewLinkBox_p__3jgz2 NewLinkBox_pPreview__2iHEO">Facebook</p>
                                            <p class="NewLinkBox_p__3jgz2 NewLinkBox_pPreview__2iHEO"></p>
                                            </h2>
                                            <div class="NewLinkBox_directIcon__D9hsR"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="NewLinkBox_LinkBox__2yOnc NewLinkBox_LinkBoxPreview__3O43r">
                                            <div class="NewLinkBox_socialIconWrapper__3mG8g">
                                                <div class="NewLinkBox_iconPlate__2U1zL" style="background-color: rgb(246, 246, 246);">
                                                    <img src="/static/media/phoneNumber.d04e08da.svg" class="NewLinkBox_socialIcon__2R97u" alt="url" />
                                                </div>
                                            </div>
                                            <h2 class="NewLinkBox_content__1VcIC">
                                            <p class="NewLinkBox_p__3jgz2 NewLinkBox_pPreview__2iHEO">Phone Number</p>
                                            <p class="NewLinkBox_p__3jgz2 NewLinkBox_pPreview__2iHEO"></p>
                                            </h2>
                                            <div class="NewLinkBox_directIcon__D9hsR"><i class="fas fa-angle-right" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                    <div class="DesktopPreview_footer__2mUEM">
                                        <div class="Footer_footerContainer__3JsTV">
                                            <div class="Footer_logoContainer__3k4ru">
                                                <img src="/static/media/appicon.52664920.svg" alt="" />
                                                <h3>OnTheCard</h3>
                                            </div>
                                            <div>
                                                <p class="Footer_leading__374eE">Leading Smart Business Card Solution in Vietnam <br class="Footer_break__3bkEg" /></p>
                                            </div>
                                            <div class="Footer_socialMedia__tmrP-">
                                                <a href="https://www.facebook.com/everythingis.onthecard/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                                <a href="https://www.instagram.com/onthecard/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                <a href="https://youtube.com/"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                                <a href="https://www.linkedin.com/company/on-the-card/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
    @section("footer")
    @parent
    <link href="{{ asset('frontend/assets') }}/css/mangeprofile.css" rel="stylesheet" />
    <link href="{{ asset('frontend/assets') }}/css/mangeprofilemain.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterlogin.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterloginheader.css">
    <script type="text/javascript">
    function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
    $('#showProfileImage').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }
    $( ".upload-btn" ).click(function() {
    
    
    $("#cclikFile").trigger('click');
    $("#cclikFile").change(function(e) {
    readURL(this);
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
    </style>
    @endsection