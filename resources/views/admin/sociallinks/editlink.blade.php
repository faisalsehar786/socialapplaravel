{{-- extend  --}}
@extends('admin-layout.app')
@extends('includes-admin.header')
@extends('includes-admin.footer')
@extends('includes-admin.sidebar')
{{-- page titles --}}
@section('title', 'Edit Auction')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Edit Social Link</h1>
       <a href="{{ route('social_links') }}" class="btn-primary btn btn-sm shadow-lg border-0">Go Back</a>
  </div>
  <div class="card shadow mb-4">
    
    <div class="card-body">
 
    <form method="POST" action="{{ route('social_link_update') }}" enctype="multipart/form-data">
          @csrf
            
             <input type="hidden" name="idL" value="{{$sociallink->id}}">
             {{-- <input type="hidden" name="slug" class="slug" value="{{$sociallink->slug}}"> --}}
          {{--          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
              <input  type="text" class="form-control nameval" name="name" value="{{ $sociallink->name }}" required autofocus>

              @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                <strong class="form-text text-muted text-danger">{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
          </div> --}}

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Placeholder</label>

            <div class="col-md-6">
              <input  type="text" class="form-control" name="placeholder" value="{{ $sociallink->placeholder }}"  autofocus placeholder="e.g facebook">

              @if ($errors->has('placeholder'))
              <span class="invalid-feedback" role="alert">
                <strong class="form-text text-muted text-danger">{{ $errors->first('placeholder') }}</strong>
              </span>
              @endif
            </div>
          </div>
                 
             <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">icon Image</label>
            

            <input type="hidden" name="hidden_icon" value="{{$sociallink->icon}}">
            <div class="col-md-6">
              <input  type="file" class="form-control" name="icon" value="{{ old('icon') }}"  autofocus   accept="image/*">

             <img src="{{ asset('frontend/assets/img/icon/') }}/{{$sociallink->icon}}" class='rounded-circle mr-1' width='60' height='60'/>

              @if ($errors->has('icon'))
              <span class="invalid-feedback" role="alert">
                <strong class="form-text text-muted text-danger">{{ $errors->first('icon') }}</strong>
              </span>
              @endif
            </div>
          </div>

           <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">url type</label>

            <div class="col-md-6">
              <select name="url_type" class="form-control url_type">
                <option value="simple" @if($sociallink->url_type=='simple') selected="" @endif>Simple</option>
                <option value="custom"  @if($sociallink->url_type=='custom') selected="" @endif>Custom</option>
              </select>
            </div>
          </div>
    
     
        {{-- expr --}}
    
           <div class="form-group row comp_url">
            <label for="name" class="col-md-4 col-form-label text-md-right">url</label>

            <div class="col-md-6">
              <input  type="text" class="form-control" name="comp_url" value="{{ $sociallink->comp_url }}"  autofocus >

              @if ($errors->has('comp_url'))
              <span class="invalid-feedback" role="alert">
                <strong class="form-text text-muted text-danger">{{ $errors->first('comp_url') }}</strong>
              </span>
              @endif
            </div>
          </div>
       
           <div class="form-group row base_url">
            <label for="name" class="col-md-4 col-form-label text-md-right">base url</label>

            <div class="col-md-6">
              <input  type="text" class="form-control" name="base_url" value="{{ $sociallink->base_url }}"  autofocus >

              @if ($errors->has('base_url'))
              <span class="invalid-feedback" role="alert">
                <strong class="form-text text-muted text-danger">{{ $errors->first('base_url') }}</strong>
              </span>
              @endif
            </div>
          </div>

           <div class="form-group row sub_part_url">
            <label for="name" class="col-md-4 col-form-label text-md-right">sub part url</label>

            <div class="col-md-6">
              <input  type="text" class="form-control" name="sub_part_url" value="{{ $sociallink->sub_part_url }}"  autofocus >

              @if ($errors->has('sub_part_url'))
              <span class="invalid-feedback" role="alert">
                <strong class="form-text text-muted text-danger">{{ $errors->first('sub_part_url') }}</strong>
              </span>
              @endif
            </div>
          </div>

        


 
         
               
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                
                </div>
              </form>
</div>

</div>
</div>
<!-- /.container-fluid -->
@endsection
@section("footer")
@parent
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
 <script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
CKEDITOR.replace( 'content_auction', {
height: 300,
filebrowserUploadUrl: "upload.php"
});

jQuery(function(){
jQuery('#date_timepicker_start').datetimepicker({
  format:'Y-m-d H:i:s',

onShow:function( ct ){
this.setOptions({
maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
}) 
},
timepicker:true
});
jQuery('#date_timepicker_end').datetimepicker({
 format:'Y-m-d H:i:s',

onShow:function( ct ){
this.setOptions({
minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
})
},
timepicker:true
});
});

$(document).ready(function(){


function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
}

$('.nameval').change(function(){

let slug=convertToSlug($(this).val());
$('.slug').val(slug);
  
})
  
var valtye=$('.url_type').val();
if(valtye=='simple'){
$('.comp_url').show();
$('.sub_part_url,.base_url').hide();
}else{
  $('.comp_url').hide();
 $('.sub_part_url,.base_url').show(); 
}

 
$('.url_type').change(function(){

let urltype=$(this).val();

if(urltype=='simple'){
$('.comp_url').show();
$('.sub_part_url,.base_url').hide();
}else{
  $('.comp_url').hide();
 $('.sub_part_url,.base_url').show(); 
}

  
})
});
</script>

@endsection