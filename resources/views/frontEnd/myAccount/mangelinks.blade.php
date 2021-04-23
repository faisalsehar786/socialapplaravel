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
                                        <span class="MuiTab-wrapper"><a href="{{ route('customize_settings') }}">Customize</a></span><span class="MuiTouchRipple-root"></span>
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
                                                                                    <span class="ant-select-selection-search">
                                                                                        <input id="dynamic_form_nest_item_links_0_type" autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="dynamic_form_nest_item_links_0_type_list" aria-autocomplete="list" aria-controls="dynamic_form_nest_item_links_0_type_list" aria-activedescendant="dynamic_form_nest_item_links_0_type_list_0" readonly="" unselectable="on" value="" style="opacity: 0;">
                                                                                    </span>
                                                                                    <span class="ant-select-selection-item">
                                                                                        <div style="display: flex; align-items: center; font-family: GothamBook;">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon anticon" style="margin-right: 5px;">
                                                                                                <image width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                                                            </svg>
                                                                                            <span class="select-label">Facebook</span>
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
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/up-icon.png" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets') }}/img/remove-icon.png" alt="icon">
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/down-icon.png" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                                    <span class="ant-select-selection-search">
                                                                                        <input id="dynamic_form_nest_item_links_1_type" autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="dynamic_form_nest_item_links_1_type_list" aria-autocomplete="list" aria-controls="dynamic_form_nest_item_links_1_type_list" aria-activedescendant="dynamic_form_nest_item_links_1_type_list_0" readonly="" unselectable="on" value="" style="opacity: 0;">
                                                                                    </span>
                                                                                    <span class="ant-select-selection-item">
                                                                                        <div style="display: flex; align-items: center; font-family: GothamBook;">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon anticon" style="margin-right: 5px;">
                                                                                                <image width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                                                            </svg>
                                                                                            <span class="select-label">Behance</span>
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
                                                                            <input class="ant-input ant-input-lg link-input" name="1,url" placeholder="Nhập username" type="text" id="dynamic_form_nest_item_links_1_url" value="mrchloes">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-space-item">
                                                        <div>
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/up-icon.png" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets') }}/img/remove-icon.png" alt="icon">
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/down-icon.png" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                                    <span class="ant-select-selection-search">
                                                                                        <input id="dynamic_form_nest_item_links_2_type" autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="dynamic_form_nest_item_links_2_type_list" aria-autocomplete="list" aria-controls="dynamic_form_nest_item_links_2_type_list" aria-activedescendant="dynamic_form_nest_item_links_2_type_list_0" readonly="" unselectable="on" value="" style="opacity: 0;">
                                                                                    </span>
                                                                                    <span class="ant-select-selection-item">
                                                                                        <div style="display: flex; align-items: center; font-family: GothamBook;">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon anticon" style="margin-right: 5px;">
                                                                                                <defs>
                                                                                                <style>
                                                                                                .cls-1 {
                                                                                                fill: #181818;
                                                                                                filter: url(#filter);
                                                                                                }
                                                                                                </style>
                                                                                                <filter id="filter" x="0.469" y="0.469" width="78.906" height="78.906" filterUnits="userSpaceOnUse">
                                                                                                <feFlood result="flood" flood-color="#313131"></feFlood>
                                                                                                <feComposite result="composite" operator="in" in2="SourceGraphic"></feComposite>
                                                                                                <feBlend result="blend" in2="SourceGraphic"></feBlend>
                                                                                                </filter>
                                                                                                </defs>
                                                                                                <circle class="cls-1" cx="39.922" cy="39.922" r="39.453"></circle>
                                                                                                <image x="14" y="16" width="52" height="48" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAwCAYAAABe6Vn9AAAFXElEQVRogdWaa4weYxTH/7trq7ZairRsFKsVFKVaqdYlLnWLEiQk6ErE7QNhE0m1oiERG0L0A5aEIKRUGqkPSi/u1yotLVstWuluL6uqatHLavuXkzljnnfOM887u/tuRn/JJPOec+Z55j8zz+08bxVJZDAawEUAjgBQC6ADwOcA3kqFjwMwUeOEDQA+A7DQX2wuJuhxJIA6AFsA/AxgPoDVwQJEUOoYR3IZs/mV5BUkx5D8NjOKXE/yek/5WUcNydtIrjUllbKY5PkZZRhBzeby3vO6r+LUMTyHkDQLSdaGBN1vLqkcb3hExMekXtSyjuQQn6BTTWjlafSIGUlyVy9rWkmynytoAMnXTFjlafUIWlGhWp5yBV1OcqsJSfiQ5ExjtcwlOdtYSxnviJlqvKXs1E91BslFxmsZGwu6x7gS3nVuIBQ3y4mbYbwJjTnfzhySg1Jv8wSSP5rIhOdIVlUD2N/05QlLnPNPjNcf94HxJuyrZ6MAHG+8EbMAXAmgM2VvBXAcgJ/MFRGXAbhABO0yroQq57zGeP1xIeJR/KxAzBRjSdgN4C5jjRgCYGS1MfcMV1AecYcZS8Q8AO3GWspHAP4y1oj6SgnqLnUZ8b8Yi0XE/G6sEf2LEvSnsUQMNxbLQQCGGmvEtqIErTOWiDMBjDHWUqTx9zPWiPaiBL1jLAlPGEvC0QCeNNaINgDLixIkS4EvjTViPIAfAJyWsk8GsCowzEh3/3FRgoQWY0k4BsBi7fEWayfwMoB9TGQE4/KKFPSiLthCHK5v6sBAjDAdwFoULEi4BsBGY+0esjJ+KL6iaEEyvTkXwG/Gkw8Rc6EbWU5Q3ilNb1il+Yi53SzjkbSYWFCtCU1w528hcW5jDT2kLN82AJO0vcwz3tK453VgnWq8eiNvAvgbQJdO/mIOSTVameXeB2A7gD2BuGUAHtDPKZ6MysMYrNmgEF8BuATAAQDOAzBMH/gOACsBvJ+q2xBKY+2VZH0Cey1ZA1XMCAAn62tfo6O775XKwuskfUDSyL8xEd1HpjmjdFG4VT/H8r2hJ3HRn+QUkqvNIpfsJPkMycEaO53kBhNFbtGleL2n/NBxFMlHSbabEiO+JtlEcmBWGWnD2DIJk5hNmhPLw2RfxZ7jsZzlCbtJ3uApo0TQ2eayynGnr3I9JBmytIc1tWQJklfYYcIryykeMSiTR8/DCz5BD/exGGreLi3mJRPVM25xBcmn1hYopovkdmO17MwR1+CIudR4LV3apvcYTymb446iWrvlYab7i9io3ed+AOYYb8IKXetL3KfGm+Aur0PpKkmW3KhlHqz315wxZEBjmuJu+0GjN+Fx54meY7wJ05y4q4w34WaNGRpI0q/RocPX3s4w0Qnfy55VuUTjP855JeJiJgYSl7fq3M2HvP27jTVCBvfR5aY+1RnnaWpyxsWfzAjjiVhSJoEivBL49BpClfclgzLKbjUWi+z1rjfWiIFFCeoyloisjI6LzO0GGKuWW5SgDmOJuFh7thCn69rKR0dRgr4wlog6zeCEaM7w/SH5vKIELYrTTh6a3CyOwwDtMCYYT8QCAO+VWw/1JdJbTcso/14A1wJ4Vf90cSyA6wJtR3hadiaKFCRv4SbdqPLRoMLyMFvzDcExo6+RxExjBerodHf1is4pLNCZQU/Zodub/2Vf/w9Jkme1uw6mpzy0aVJ/uesql2h021hfJhrn64y5JYcwSZjcof/UMhtnciOSGHxbE4juxFLSs0ud35v0E5HtRDchKQV/5/yWLRDZ2t/s3Jw8jPoyfw2TG71dO4KrAZwI4FCdGUh7k+mO/LVAEqP+uRyAfwFFpzYceoRtnAAAAABJRU5ErkJggg=="></image>
                                                                                            </svg>
                                                                                            <span class="select-label">Momo</span>
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
                                                                            <input class="ant-input ant-input-lg link-input" name="2,url" placeholder="Nhập số điện thoại" type="text" id="dynamic_form_nest_item_links_2_url" value="0855031018">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-space-item">
                                                        <div>
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/up-icon.png" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets') }}/img/remove-icon.png" alt="icon">
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/down-icon.png" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                                    <span class="ant-select-selection-search">
                                                                                        <input id="dynamic_form_nest_item_links_3_type" autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="dynamic_form_nest_item_links_3_type_list" aria-autocomplete="list" aria-controls="dynamic_form_nest_item_links_3_type_list" aria-activedescendant="dynamic_form_nest_item_links_3_type_list_0" readonly="" unselectable="on" value="" style="opacity: 0;">
                                                                                    </span>
                                                                                    <span class="ant-select-selection-item">
                                                                                        <div style="display: flex; align-items: center; font-family: GothamBook;">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon anticon" style="margin-right: 5px;">
                                                                                                <image width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                                                            </svg>
                                                                                            <span class="select-label">Snapchat</span>
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
                                                                            <input class="ant-input ant-input-lg link-input" name="3,url" placeholder="Nhập username" type="text" id="dynamic_form_nest_item_links_3_url" value="abcxyz">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-space-item">
                                                        <div>
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/up-icon.png" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets') }}/img/remove-icon.png" alt="icon">
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/down-icon.png" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                                    <span class="ant-select-selection-search">
                                                                                        <input id="dynamic_form_nest_item_links_4_type" autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="dynamic_form_nest_item_links_4_type_list" aria-autocomplete="list" aria-controls="dynamic_form_nest_item_links_4_type_list" aria-activedescendant="dynamic_form_nest_item_links_4_type_list_0" readonly="" unselectable="on" value="" style="opacity: 0;" aria-expanded="false">
                                                                                    </span>
                                                                                    <span class="ant-select-selection-item"><div class="default" style="font-family: GothamBook;">Chọn</div></span>
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
                                                                            <input class="ant-input ant-input-lg link-input" name="4,url" type="text" id="dynamic_form_nest_item_links_4_url" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-space-item">
                                                        <div>
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/up-icon.png" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets') }}/img/remove-icon.png" alt="icon">
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/down-icon.png" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                                    <span class="ant-select-selection-search">
                                                                                        <input id="dynamic_form_nest_item_links_5_type" autocomplete="off" type="search" class="ant-select-selection-search-input" role="combobox" aria-haspopup="listbox" aria-owns="dynamic_form_nest_item_links_5_type_list" aria-autocomplete="list" aria-controls="dynamic_form_nest_item_links_5_type_list" aria-activedescendant="dynamic_form_nest_item_links_5_type_list_0" readonly="" unselectable="on" value="" style="opacity: 0;">
                                                                                    </span>
                                                                                    <span class="ant-select-selection-item"><div class="default" style="font-family: GothamBook;">Chọn</div></span>
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
                                                                            <input class="ant-input ant-input-lg link-input" name="5,url" type="text" id="dynamic_form_nest_item_links_5_url" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-space-item">
                                                        <div>
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/up-icon.png" alt="icon"><img class="action-btn" src="{{ asset('frontend/assets') }}/img/remove-icon.png" alt="icon">
                                                            <img class="action-btn" src="{{ asset('frontend/assets') }}/img/down-icon.png" alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-control">
                                                    <div class="ant-form-item-control-input">
                                                        <div class="ant-form-item-control-input-content">
                                                            <button type="button" class="ant-btn ant-btn-dashed ant-btn-lg ant-btn-block">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="ant-row ant-form-item save-btn">
                                    <div class="ant-col ant-form-item-control">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <button type="submit" class="ant-btn ant-btn-primary ant-btn-lg"><span>Lưu</span></button>
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