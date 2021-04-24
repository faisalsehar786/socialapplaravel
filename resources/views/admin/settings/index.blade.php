{{-- extend  --}}
@extends('admin-layout.app')
@extends('includes-admin.header')
@extends('includes-admin.footer')
@extends('includes-admin.sidebar')
{{-- page titles --}}
@section('title', 'Register')
@section('content') 
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    
  </div>
  <div class="card shadow mb-4">
  <div class="card-body">
  <form method="POST" action="{{ route('settings_update') }}" enctype='multipart/form-data'>
                @csrf
    <input type="hidden" name="headerlogoimagehidden" value="{{ $settings->headerlogo }}">
   <input type="hidden" name="footerlogoimagehidden" value="{{ $settings->footerlogo }}">
   <input type="hidden" name="optional_logoimagehidden" value="{{ $settings->optional_logo }}">

   <input type="hidden" name="settings_id" value="{{ $settings->id }}">
    
              
                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Header Logo</label>
                 <img src="{{ asset('frontend/assets/img/') }}/{{ $settings->headerlogo }}" alt="" class="img-thumbnail img-fluid" width="100" height="80">
                  <div class="col-md-6">
                    <input  type="file" class="form-control" name="headerlogo"  autofocus>

                    @if ($errors->has('headerlogo'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('headerlogo') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 

                  <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Footer Logo</label>
                   <img src="{{ asset('frontend/assets/img/') }}/{{ $settings->footerlogo }}" alt="" class="img-thumbnail img-fluid" width="100" height="80">
                  <div class="col-md-6">
                    <input  type="file" class="form-control" name="footerlogo"   autofocus>

                    @if ($errors->has('footerlogo'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('footerlogo') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 

                   <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Optional Logo</label>
                   <img src="{{ asset('frontend/assets/img/') }}/{{ $settings->optional_logo }}" alt="" class="img-thumbnail img-fluid" width="100" height="80">
                  <div class="col-md-6">
                    <input  type="file" class="form-control" name="optional_logo"   autofocus>

                    @if ($errors->has('optional_logo'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('optional_logo') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 

                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Backgorund Color</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control demo" name="backgroundcolor" value='{{ $settings->backgroundcolor }}' id="backgroundcolor"  autofocus>

                    @if ($errors->has('backgroundcolor'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('backgroundcolor') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 

                  <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right"> Login Register Button Color</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control demo" name="buttoncolor" value="{{ $settings->buttoncolor }}" id="buttoncolor"  autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 

                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Login / Register panel Top Border Color</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control demo" name="borderpanelcolor" id="borderpanelcolor"  value="{{ $settings->borderpanelcolor }}"  autofocus>

                    @if ($errors->has('borderpanelcolor'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('borderpanelcolor') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 


                 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Login / Register Section Color</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control demo" name="sectioncolor"  id="sectioncolor"  value="{{ $settings->sectioncolor }}"  autofocus>

                    @if ($errors->has('sectioncolor'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('sectioncolor') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 
         

           <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Footer Text</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control" name="footrtext"  value="{{ $settings->footrtext }}" required autofocus>

                    @if ($errors->has('footrtext'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('footrtext') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 


                  <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Copy right</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control" name="copyright_text"  value="{{ $settings->copyright_text }}" required autofocus>

                    @if ($errors->has('copyright_text'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('copyright_text') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 



                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Show Social link Footer</label>

                  <div class="col-md-6">
                    <select name="social_link_show" required="" class="form-control">
                    	<option value="on" @if($settings->social_link_show=='on') selected="" @endif>Show</option>
                        <option value="off" @if($settings->social_link_show=='off') selected="" @endif>Hide</option>
                    </select>
                    
                  </div>
                </div> 


                <div id="socialpanelShow" style="">
                	 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">FaceBook Link</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control" name="fblink"  value="{{ $settings->fblink }}" required autofocus>

                    @if ($errors->has('fblink'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('fblink') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 


                	 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Messanger Link</label>

                  <div class="col-md-6">
                    <input  type="text" class="form-control" name="mslink" value="{{ $settings->mslink }}" required autofocus>

                    @if ($errors->has('mslink'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="form-text text-muted text-danger">{{ $errors->first('mslink') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> 

                	 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Login Page meta</label>

                  <div class="col-md-6">
                   <textarea name="login_page_meta" rows="4" cols="4" class="form-control">{{ $settings->login_page_meta }}</textarea>

                   
                  </div>
                </div> 


                  	 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">After Login Page meta</label>

                  <div class="col-md-6">
                     <textarea name="after_login_page_meta" rows="4" cols="4" class="form-control">{{ $settings->after_login_page_meta }}</textarea>

                    
                  </div>
                </div> 

                  	 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Mange Link Meta</label>

                  <div class="col-md-6">
                    <textarea name="mangelinks_page_meta" rows="4" cols="4" class="form-control">{{ $settings->mangelinks_page_meta }}</textarea>
                  </div>
                </div> 

                	 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Customize Page Meta</label>

                  <div class="col-md-6">
                   <textarea name="customize_page_meta" rows="4" cols="4" class="form-control">{{ $settings->customize_page_meta }}</textarea>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Profile Page Meta</label>

                  <div class="col-md-6">
                    <textarea name="profile_page_meta" rows="4" cols="4" class="form-control">{{ $settings->profile_page_meta }}</textarea>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Activation Page Meta</label>

                  <div class="col-md-6">
                     <textarea name="activation_page_meta" rows="4" cols="4" class="form-control">{{ $settings->activation_page_meta }}</textarea>
                  </div>
                </div>





                </div>


     
    <button type="submit" class="btn-block btn btn-success">Save</button>


  </form>
  </div>
  </div>
  </div>
@endsection
 @section("footer")
 @parent

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/minicolors.css') }}">
<script src="{{ asset('frontend/assets/js/minicolors.min.js') }}"></script>
<script>
 $(document).ready( function() {

      $('.demo').each( function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time. Again,
        // they're only used for the purposes of this demo.
        //
        $(this).minicolors({
          control: $(this).attr('data-control') || 'hue',
          defaultValue: $(this).attr('data-defaultValue') || '',
          format: $(this).attr('data-format') || 'hex',
          keywords: $(this).attr('data-keywords') || '',
          inline: $(this).attr('data-inline') === 'true',
          letterCase: $(this).attr('data-letterCase') || 'lowercase',
          opacity: $(this).attr('data-opacity'),
          position: $(this).attr('data-position') || 'bottom',
          swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
          change: function(hex, opacity) {
            var log;
            try {
              log = hex ? hex : 'transparent';
              if( opacity ) log += ', ' + opacity;
              console.log(log);
            } catch(e) {}
          },
          theme: 'default'
        });

      });

    });

</script>
@endsection