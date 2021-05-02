{{-- extend  --}}
@extends('admin-layout.app')
@extends('includes-admin.header')
@extends('includes-admin.footer')
@extends('includes-admin.sidebar')
{{-- page titles --}}
@section('title', 'Register')
@section('content') 
{{-- {!! Charts::assets() !!}  --}}
 <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        @php
                         echo App\User::count();
                        @endphp
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                         @php
                         echo App\User::where('activation','on')->count();
                        @endphp
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class=" fas fa-horse-head fa-2x text-gray-300"></i>
                    </div>
                  </div>
              
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                   
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Deactive Users</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                              @php
                         echo App\User::where('activation','off')->count();
                        @endphp
                          </div>
                        </div>
                     
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-list-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>

           
          </div>
  
         
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Graphs</h1>
    
  </div>
  <div class="card shadow mb-4">
  <div class="card-body">

    <div class="row">
<div class="col-sm-12">
<p class=" mb-0 text-danger">Users</p>
{!! $chart1->renderHtml() !!}
</div>
    </div>

       </div>
        </div>
        </div>
        <!-- /.container-fluid -->
@endsection
@section("footer")
@parent
<style type="text/css">
  .label{
        font-size: 94% !important;
  }
</style>

{!! $chart1->renderChartJsLibrary() !!}
 
{!! $chart1->renderJs() !!}
{{-- {!! $chart2->renderJs() !!}
{!! $chart3->renderJs() !!}
 
{!! $chart4->renderJs() !!}
{!! $chart5->renderJs() !!}
{!! $chart6->renderJs() !!}
{!! $chart7->renderJs() !!} --}}
{{--   @if($usersChart)
    {!! $usersChart->script() !!}
    @endif

@endsection --}}

<script>
 
</script>
@endsection