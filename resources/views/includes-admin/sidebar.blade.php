@section('sidebar')


 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #181a1f !important;background-image:none;">
<div class="sidebar-brand-text mx-3 d-flex align-items-center justify-content-center my-2">
          
         <a href="/admin"> <img src="{{ asset('img/digicard.png') }}" class=" img-fluid  img-thumbnail" alt="img" width="150" height="150"></a>
        </div> 
      <!-- Sidebar - Brand -->
    

      <!-- Divider -->
     

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
       <li class="nav-item active">
        <a href="{{ route('settings_dashboard') }}" class="nav-link" >
          <i class="fas fa-cogs"></i>
          <span>Settings</span></a>
      </li>

       <li class="nav-item active">
        <a href="{{ route('user_mangement_homepanel') }}" class="nav-link" href="/admin">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>Users Mangement</span></a>
      </li>





      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
@endsection