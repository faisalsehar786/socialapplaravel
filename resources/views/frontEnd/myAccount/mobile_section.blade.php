     
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
                    <img  class='profilecimg' src="{{ asset('assets/img/') }}/{{ Auth::user()->image }}">
                  </div>
                  <div class="name" style="width: 100%;
                    text-align: center;
                    color: #000;
                    background-size: 100% 100%;
                    background-repeat: no-repeat;
                    padding: 5px 0 10px;">
                    <h3><strong class="nameupdateC">{{ Auth::user()->name }}</strong></h3>
                    <p  class="mb-0 aboutupdateC">{{ Auth::user()->about }}</p>
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
                            <img class='profilecimg' src="{{ asset('assets/img/') }}/{{ Auth::user()->image }}">
                          </span>
                          <div class="circle-overlay"></div>
                        </div>
                        <h2 class="ant-typography name nameupdateC">{{ Auth::user()->name }}</h2>
                        <div class="ant-typography ant-typography-secondary description aboutupdateC">{{ Auth::user()->about }}</div>
                        <div class="ant-space ant-space-horizontal ant-space-align-center contact-tab">
                        {{--   <div class="ant-space-item" style="margin-right: 8px; display: none;">
                            <a href="tel:0988747388">
                              <span class="ant-typography ant-typography-primary" style="text-transform: uppercase;"><img src="http://127.0.0.1:8000/frontend/assets/img/call.png" alt="icon" style="width: 25px; margin-right: 10px;">Gọi điện</span>
                            </a>
                          </div> --}}
                          <div class="ant-space-item" style="border-bottom-left-radius: 30px;
                            border-bottom-right-radius: 30px; width: 100%;">
                            <a href="#">
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
                    </section>
                  </div>
                </main>
              </div>
            </div>
          </div>
        </div>