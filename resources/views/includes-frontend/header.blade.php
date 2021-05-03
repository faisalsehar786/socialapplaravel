@section('header')
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootrap4.min.css">
<script src="{{ asset('frontend/assets') }}/js/jqbs4.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/bs4.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets') }}/css/toaster.min.css">
<script src="{{ asset('frontend/assets') }}/js/toaster.min.js"></script>

{{-- ///////////////////////// --}}

<link href="{{ asset('frontend/assets') }}/css/mangeprofile.css" rel="stylesheet" />
<link href="{{ asset('frontend/assets') }}/css/mangeprofilemain.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterlogin.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/afterloginheader.css">
<link href="{{ asset('frontend/assets') }}/css/customize.css" rel="stylesheet" />
<link href="{{ asset('frontend/assets') }}/css/customizeheader.css" rel="stylesheet" />
<script type="text/javascript">
toastr.options = {
"closeButton": true,
"debug": false,
"newestOnTop": true,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "2000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}
</script>
@endsection