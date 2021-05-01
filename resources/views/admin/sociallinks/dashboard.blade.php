
{{-- extend  --}}
@extends('admin-layout.app')
@extends('includes-admin.header')
@extends('includes-admin.footer')
@extends('includes-admin.sidebar')
{{-- page titles --}}
@section('title', ' Roles Authority')
@section('content')  
 


 <!-- Begin Page Content -->
        <div class="container-fluid"> 

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Social Links</h1>
            
          </div>
   <div class="card shadow mb-4">
      <div>
      <div class="card-body">
  
        @include('admin.sociallinks.social_links')
 
   
    <div>
   </div>
   </div> 

</div>
        <!-- /.container-fluid -->
@endsection
@section("footer")
@parent
<!-- DataTables JavaScript -->

//<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

<link rel="stylesheet" href="{{ asset('cs/jstreebeautyfy.css') }}" rel="stylesheet"/> 
<script src="{{ asset('js/jstree.min.js') }}"></script>


 <script src="{{ asset('js/sweetalert.min.js') }}"></script>
<link href="{{ asset('css/toaster.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/toaster.min.js') }}"></script>
<style type="text/css">
  
  .sub_part_url,.base_url{
    display:none;
  }
</style> 
<script type="text/javascript">



           

$(document).ready(function() {
$(document).on('click', '.deleteAuction', function(){





sub_id = $(this).attr('del-id');
swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover this Record!",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
$.ajax({
url:"{{ route('social_links_del') }}", 
type:"POST",
dataType:"json",
data:{sub_id:sub_id,_token:"{{ csrf_token() }}"},
success:function(res)
{
if (res.status=='ok'){
$('#dataTableAuction').DataTable().destroy();
load_data();
toastr.options.closeButton = true;
toastr.success('Record Deleted SuccessFully...!','',{timeOut: 1000})

window.location.reload();
}else{
swal({
title: "Something Wrong",
text: "",
icon: "warning",
dangerMode: true,
timer: 3000
});
}
}
})
} else {
swal("Your Record is safe!");
}
})
});
// $('#dataTableAuction').DataTable({
// responsive: true
// });
// $('[data-toggle="tooltip"]').tooltip();
$('#date_timepicker_start').datetimepicker({
format:'Y-m-d H:i:s',
//mask:true,
onShow:function( ct ){
this.setOptions({
maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
})
},
timepicker:true
});
$('#date_timepicker_end').datetimepicker({
format:'Y-m-d H:i:s',
//mask:true,
onShow:function( ct ){
this.setOptions({
minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
})
},
timepicker:true
});
function load_data(from_date = '', to_date = '',status=''){

$('#dataTableAuction').DataTable({});
}
load_data();
$('#filter').click(function(){

var from_date = $('#date_timepicker_start').val();
var to_date = $('#date_timepicker_end').val();
var status=$('#status').val();


 

function isEmpty(val){
    return (val === undefined || val == null || val.length <= 0) ? true : false;
}



if(!isEmpty(from_date) &&  !isEmpty(to_date)  && !isEmpty(status))
{
$('#dataTableAuction').DataTable().destroy();
load_data(from_date, to_date,status);
}
else
{
  toastr.options.closeButton = true;
toastr.error('Please Fill All Fields Of Filter', '', {timeOut: 3000});
}
});
$('#refresh').click(function(){

  document.getElementById("myform").reset();
//  $('#date_timepicker_start').val('');
//  $('#date_timepicker_end').val('');
// $('#status').val('');
// $('#post_type').val(''); 

$('#dataTableAuction').DataTable().destroy();
load_data();
});


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






