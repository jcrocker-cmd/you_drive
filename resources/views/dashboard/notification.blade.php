@extends('dashboard.layout.master')

@section('styles')
    @include('dashboard.assets.style')

    <div class="main-container d-flex">
  <div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4 text-white px-3">   You-Drive</h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="far fa-stream"></i></button>
    </div>
    
    
    <ul class ="list-unstyled px-2">
      <li class=""><a href="/dashboard" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i>   Dashboard</a></li>
      <li class=""><a href="/all-vehicles" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i>   Registered Vehicles</a></li>
      <li class=""><a href="/pages" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-car"></i>   Available Cars</a></li>
      <li class=""><a href="/rented" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-car-building"></i>   Rented Cars</a></li>

      <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
      <span><i class="far fa-comment"></i>  Messages</span>
      <span class="bg-danger rounded-pill text-white px-2 py-0 d-flex align-items-center message-notif">02</span>
      </a>
      </li>
      <li class=""><a href="/add" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-cars"></i>   Add Car</a></li>
      <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-users"></i>   Customers</a></li>
      <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="far fa-hand-holding-usd"></i>   Sales Report</a></li>
    </ul>

    <hr class="hr-1 mx-2">


    
    <ul class="list-unstyled px-2">

    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bars"></i>  Settings</a></li>
    <li class="active"><a href="/notification" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i>  Notification</a></li>
      
    </ul>

    <hr class="hr-1 mx-2">

    <ul class="list-unstyled px-2">

    <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-sign-out"></i>  Log Out</a></li>
      
    </ul>

  </div> 
  
  <div class="content">
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <div class="d-flex justify-content-between d-md-none d-block">
    <a class="navbar-brand fs-4" href="#">You-Drive</a>
    <button class="btn px-1 py-0 open-btn"><i class="far fa-stream"></i></button>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">
          <div class="dropdown">
          <img src="user.jpg" alt=""
            style="height: 35px; width: 35px;" 
            class="rounded-circle">

            <button class="btn btn-link dropdown-toggle account-link text-decoration-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              John Christian
            </button>
            
              <ul class="dropdown-menu dropdown-menu-lg-end account-dropdowns" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Account Settings</a></li>
                <li><a class="dropdown-item" href="#">Log-out</a></li>
              </ul>
            </div>
        </li>
      </ul>
    </div>


  </div>
  </nav>

  @section('content')
    @include('dashboard.components.notification-content')

  </div>
</div>

@section('scripts')
    @include('dashboard.assets.script')

@endsection