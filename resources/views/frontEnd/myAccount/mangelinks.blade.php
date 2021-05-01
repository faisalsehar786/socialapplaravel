@extends('front-end-layout.app')
@extends('includes-frontend.header')
@extends('includes-frontend.footer')
@section('page_meta')
@php
  $metepage=App\Settings::first(); 
@endphp 
{{  $metepage->mangelinks_page_meta }}
@endsection
@section('title', 'Mange Links')
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
                      <h1 class="title">Manage Shared links</h1>
                      <div id="dynamic_form_nest_item" autocomplete="off" class="ant-form ant-form-horizontal ant-form-large form-link-editor">
                        <div>
                          <div>
                            <div class="addli">
                              
                            </div>
                            <button type="button" class="ant-btn ant-btn-dashed ant-btn-lg ant-btn-block mb-5 add"  data-z="340896456"  data-dir='add' data-toggle="modal" data-target="#myModal">
                            <span role="img" aria-label="plus" class="anticon anticon-plus">
                              <svg viewBox="64 64 896 896" focusable="false" data-icon="plus" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <defs><style></style></defs>
                              <path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8z"></path>
                            <path d="M176 474h672q8 0 8 8v60q0 8-8 8H176q-8 0-8-8v-60q0-8 8-8z"></path>
                          </svg>
                        </span>
                        <span>Add Link</span>
                        </button>
                        <button type="button" class="MainButton_button__1JA3M">Update Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </main>
            </section>
            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Add Share Link</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    
                    <select name="linktype" class="form-control linktype">
                      @php
                      $all_links=App\LinkMockups::where('del','no')->get();
                      @endphp
                      <option value="">Select Type</option>
                      @foreach ($all_links as $element)
                      <option value="{{ $element->id }}">{{ $element->name }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success addsociallink" >Add Share Link</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
                  
                </div>
              </div>
            </div>
            <!--  //////////////////////////// -->
            <div class="Backdrop BackdropClosed"></div>
          </div>
        </div>
      </div>
      

    
  @include('frontEnd.myAccount.mobile_section')
      </div>
    </div>
  </div>
</div> @endsection @section("footer") @parent
<link href="{{ asset('frontend/assets') }}/css/mangeprofile.css" rel="stylesheet" />
<link href="{{ asset('frontend/assets') }}/css/mangeprofilemain.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterlogin.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterloginheader.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script type="text/javascript">
$( document ).ready(function() {
function addli(objt){
var objjson=objt;
temp=objjson.map(function(i,a){
obj =i;
console.log(obj);
return `<div data-z="${obj.link_mock_id}" class="ant-space ant-space-horizontal ant-space-align-baseline licustomize" style="display: flex; margin-bottom: 16px; width: 100%; align-content: flex-start;">
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
                      <img class="action-btn" src="{{ asset('frontend/assets/img/icon/') }}/${obj.linksmockup.icon}" alt="icon">
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
              <input class="ant-input ant-input-lg link-input" name="${obj.linksmockup.slug}" placeholder="${obj.linksmockup.placeholder}" type="text" id="dynamic_form_nest_item_links_0_url" value="${(obj.url)? obj.url:''}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ant-space-item">
    <div>
      <img class="action-btn" data-dir="up" src="{{ asset('frontend/assets/img/up-icon.png') }}" alt="icon">
      <img class="action-btn" data-dir="remove" src="{{ asset('frontend/assets/img/remove-icon.png') }}" alt="icon">
      <img class="action-btn" data-dir="down" src="{{ asset('frontend/assets/img/down-icon.png') }}" alt="icon">
    </div>
  </div>
</div>`;
})
$('.addli').html(temp);
var $list = $('.addli').sortable({
disabled:false,
update: function() {
var sortOrder = $('.addli').sortable('toArray', {attribute: 'data-z'});
$('.info').text(sortOrder);
}
});
$('[data-z]').click(function(e){
var jTarget = $(e.target),
dir = jTarget.data('dir'),
jItem = $(e.currentTarget),
jItems = $('.licustomize'),
index = jItems.index(jItem);

switch (dir) {
case 'up':
if (index != 0) {
var item = $(this).detach().insertBefore(jItems[index - 1]);
var sortOrder = $('.addli').sortable('toArray', {attribute: 'data-z'});

doAjaxSaveOrderData(sortOrder.toString()).then(function(data){
  // console.log(data);
 getShareLinkData();
})
}
break;
case 'down':
if (index != jItems.length - 1) {
var item = $(this).detach().insertAfter(jItems[index + 1]);
var sortOrder = $('.addli').sortable('toArray', {attribute: 'data-z'});
// $('.info').text(sortOrder);
console.log(sortOrder.toString());
doAjaxSaveOrderData(sortOrder.toString()).then(function(data){
 getShareLinkData();

})

}
break;
case 'remove':
var item = $(this).attr('data-z');
$(this).detach().remove()
var sortOrder = $('.addli').sortable('toArray', {attribute: 'data-z'});

doAjaxSaveOrderData(sortOrder.toString()).then(function(data){

  delSharelink(item);


})


 
}

});
} 

function delSharelink(delId){
$.ajax({
url:"{{ route('links_ajax_user_del') }}",
type:"POST",
dataType:"json",
data:{link_id:delId,_token:"{{ csrf_token() }}"},
success:function(res){
  toastr.error('Share Link Removed...!')
 getShareLinkData();
}
})
}

function getShareLinkData(){
$.ajax({
url:"{{ route('links_ajax_shareLink_get') }}",
type:"GET",
dataType:"json",
success:function(res)
{
addli(res);
 if(res.length>0){

  let temp2=res.map(function(i,a){

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
$('.sharelinkshow').html(temp2);
}
}
})
}
getShareLinkData();
function isEmpty(val){
return (val === undefined || val == null || val.length <= 0) ? true : false;
}


async function doAjaxSaveOrderData(args) {
    let result;

    try {
        result = await $.ajax({
           url:"{{ route('links_ajax_user_order_save') }}",
           type:"POST",
           dataType:"json",
           data:{order:args,_token:"{{ csrf_token() }}"},
        });

        return result;
    } catch (error) {
        console.error(error);
    }
}


$('.addsociallink').click(function(){
let linktype= $('.linktype').val();
if(isEmpty(linktype)){
toastr.error('Share Link Cannot be Empty')
}else{
$.ajax({
url:"{{ route('links_ajax_user_save') }}",
type:"POST",
dataType:"json",
data:{link_id:linktype,_token:"{{ csrf_token() }}"},
success:function(res)
{
if(res.status=='ok'){
getShareLinkData();
$('#myModal').modal('hide');
toastr.success('Share Link Add Successfully...!')
}else{
toastr.error('Share Link is Already Exist Add Unique one..!')
}
}
})
}
// var i=0;
// objy.push({'id':6,'name':'whatapp'});
// addli(objy);
})
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