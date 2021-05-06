@php
	$userLinker=App\User::where('id',Auth::user()->id)->first();
@endphp
<h3 class="CopyLink_copyLinkTitle__3Yykr">Your Link:</h3>
<h3 class="CopyLink_accountUrl__2ZKBH">{{ route('front-home') }}/{{ $userLinker->usernanme_by_user }}</h3>
<div class="CopyLink_buttonContainer__2woX2">
<p id="texttocopy" style="display: none;"> 
{{ route('front-home') }}/{{ $userLinker->usernanme_by_user }}
</p>

<div class="CopyLink_copyLinkButton__HAu09" onclick="copyToClipboard('#texttocopy')">
  
<img
src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD9SURBVHgBrZIxEoIwFET3RwpKKO2wo/UEcgM9Qm7kEYw30BvgCbSkpLNxxnQ6OviNiqJOAuKwDTBLNpv3Q3AokvvARzFBo3pppsKcbFYs95EArxkcoFn6ADHw7F6RMChgQIFE6ozgS2KaSJ+KsYc6EafZLJy77FjuTA7J27tAR7o3+gYrQCNGO3kVWHqBbRtSNrKALSGihSrYb2DfIf6qbmE7d2FKHu1cLaqhWIN89BYnXKbmJ0k1R7yFmF0083llDdqoUMdyOwT5o2rVYwDft/3AepmrgXYeLVP93Dzy5/drAI7b3j3sNmCtQf+Atfn3BgZs9AHWoWMJ1uZdAYLmcIwEdyPUAAAAAElFTkSuQmCC"
alt=""
class="CopyLink_IconCopy__3_2V1"
/>
Copy Link
</div>

<a  href="{{ route('front-home') }}/{{ $userLinker->usernanme_by_user }}" target="_blank" class="MuiButtonBase-root MuiButton-root MuiButton-contained CopyLink_seePageButton__nj4r6 MuiButton-containedPrimary" tabindex="0" type="button">
<span class="MuiButton-label"><i class="far fa-eye" aria-hidden="true"></i> View Page</span><span class="MuiTouchRipple-root"></span>
</a>
</div>
</div>