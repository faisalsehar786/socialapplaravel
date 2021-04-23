
@if ($errors->any())
   
            @foreach ($errors->all() as $error)
              
                <script type="text/javascript">
                  toastr.error('{{ $error }}');
                </script>
            @endforeach
      
@endif

{{-- success message display --}}
@if(session('message'))
<script type="text/javascript">
                  toastr.success('{{ session('message') }}');
  </script>
@endif

{{-- error message display if company added --}}
@if(session('error'))
 <script type="text/javascript">
                  toastr.error('{{ session('error') }}');
  </script>
@endif
