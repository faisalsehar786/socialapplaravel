<html lang="en"><head>
        <meta charset="utf-8">
        <link rel="icon" href="/favicon.png">
        <link rel="preload" href="/fonts/SVN-Gotham-Regular.otf" as="font" crossorigin="">
        <link rel="preload" href="/fonts/SVN-Gotham-Light.otf" as="font" crossorigin="">
        <link rel="preload" href="/fonts/SVN-Gotham-Thin.otf" as="font" crossorigin="">
        <link rel="preload" href="/fonts/SVN-Gotham-Book.otf" as="font" crossorigin="">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <meta name="theme-color" content="#000000">
        <meta name="description" content="Web site created using create-react-app">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <link rel="apple-touch-icon" href="/logo192.png">
        <link rel="manifest" href="/manifest.json">
        <title>Tapply</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="{{ asset('frontend/assets') }}/css/output.css" rel="stylesheet">
        <link href="{{ asset('frontend/assets') }}/css/outputmain.css" rel="stylesheet">
    </head>
     @php

         $settings=App\Settings::first(); 

                         @endphp
    <body>
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root">
            <div class="App">
                <section class="ant-layout" >
                    <div class="public-profile-wrap" @if(isset($settings) && !empty($settings->backgroundcolor)) style="background:{{ $settings->backgroundcolor }} !important" @endif>
                        <main class="ant-layout-content profile-page ">
                            <h1 class="logo">

                               
                         @if (isset($settings) && !empty($settings->headerlogo))
                          <img src="{{ asset('frontend/assets') }}/img/{{ $settings->headerlogo }}" class="mt-5" alt="Logo">
                         @else
                          <img src="{{ asset('frontend/assets') }}/img/footer-logo.png" alt="Logo">
                         @endif

                            </h1>
                            <div class="site-card-border-less-wrapper" style="background: #FFFFFF;">
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
                                            <span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="{{ asset('frontend/assets') }}/img/call.png" alt="icon" style="width: 25px; margin-right: 10px;">Gọi điện</span>
                                        </a>
                                    </div>
                                    <div class="ant-space-item" style="border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px; width: 100%;">
                                        <a href="https://api.tapply.vn/v1/users/60545cad7d57a23e064d4dd2/vcard">
                                            <span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="{{ asset('frontend/assets') }}/img/phone-book.png" alt="icon" style="width: 25px; margin-right: 10px;">Lưu danh bạ</span>
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
                                                                <image width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                            </svg>
                                                        </div>
                                                        <div class="ant-list-item-meta-content">
                                                            <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Email</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="more-option"></div>
                                                </li>
                                            </a>
                                            <a href="https://fb.com/mrs.haianh" rel="noreferrer" target="_blank">
                                                <li href="https://fb.com/mrs.haianh" class="ant-list-item social-item">
                                                    <div class="ant-list-item-meta">
                                                        <div class="ant-list-item-meta-avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon-social">
                                                                <image width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                            </svg>
                                                        </div>
                                                        <div class="ant-list-item-meta-content">
                                                            <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Facebook</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="more-option"></div>
                                                </li>
                                            </a>
                                            <a href="https://zalo.me/0988747388" rel="noreferrer" target="_blank">
                                                <li href="0988747388" class="ant-list-item social-item">
                                                    <div class="ant-list-item-meta">
                                                        <div class="ant-list-item-meta-avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon-social">
                                                                <image x="1" width="77" height="80" xlink:href="data:img/png;base64,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"></image>
                                                            </svg>
                                                        </div>
                                                        <div class="ant-list-item-meta-content">
                                                            <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Zalo</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="more-option"></div>
                                                </li>
                                            </a>
                                            <a href="https://www.instagram.com/haianhmmo" rel="noreferrer" target="_blank">
                                                <li href="haianhmmo" class="ant-list-item social-item">
                                                    <div class="ant-list-item-meta">
                                                        <div class="ant-list-item-meta-avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon-social">
                                                                <image id="Layer_1_copy" data-name="Layer 1 copy" width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                            </svg>
                                                        </div>
                                                        <div class="ant-list-item-meta-content">
                                                            <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Instagram</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="more-option"></div>
                                                </li>
                                            </a>
                                            <a href="https://jennyz.info" rel="noreferrer" target="_blank">
                                                <li href="https://jennyz.info" class="ant-list-item social-item">
                                                    <div class="ant-list-item-meta">
                                                        <div class="ant-list-item-meta-avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon-social">
                                                                <image width="80" height="80" xlink:href="data:img/png;base64,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"></image>
                                                            </svg>
                                                        </div>
                                                        <div class="ant-list-item-meta-content">
                                                            <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Website</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="more-option"></div>
                                                </li>
                                            </a>
                                            <a href="https://nhantien.momo.vn/0988747388" rel="noreferrer" target="_blank">
                                                <li href="0988747388" class="ant-list-item social-item">
                                                    <div class="ant-list-item-meta">
                                                        <div class="ant-list-item-meta-avatar">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 80 80" class="icon-social">
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
                                                        </div>
                                                        <div class="ant-list-item-meta-content">
                                                            <h4 class="ant-list-item-meta-title"><span style="font-family: GothamLight; font-size: 16px;">Momo</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="more-option"></div>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <footer class="ant-layout-footer"  @if(isset($settings) && !empty($settings->backgroundcolor)) style="background:{{ $settings->backgroundcolor }} !important" @endif>


                        <div class="footer-logo">
                       
                         @if (isset($settings) && !empty($settings->footerlogo))
                          <img src="{{ asset('frontend/assets') }}/img/{{ $settings->footerlogo }}" alt="logo">
                         @else
                          <img src="{{ asset('frontend/assets') }}/img/footer-logo.png" alt="logo">
                         @endif
                         

                        </div>
                        <div class="contact"><span  @if(isset($settings) && !empty($settings->backgroundcolor)) style="background:{{ $settings->backgroundcolor }} !important" @endif>
                          @if (isset($settings) && !empty($settings->footrtext))
                         {{ $settings->footrtext }}
                        
                         @endif

                        </span></div>

                           @if (isset($settings) && $settings->social_link_show=='on')
                        <div class="social-wrap">
                            <a href="{{$settings->fblink}}"><img class="icon" src="{{ asset('frontend/assets') }}/img/fb-contact.png" alt="facebook"></a>
                            <a href="{{$settings->mslink}}"><img class="icon" src="{{ asset('frontend/assets') }}/img/message-contact.png" alt="facebook"></a>
                        </div>
                         @endif
                        <div style="font-family: GothamBook; font-size: 12px; margin-top: 20px;">
                           @if (isset($settings) && !empty($settings->copyright_text))
                         {{ $settings->copyright_text }}
                        
                         @endif
                        </div>
                    </footer>
                        </main>
                    </div>
                </section>
            </div>
        </div>
     
    

</body></html>