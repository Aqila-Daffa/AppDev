@extends('client.layout.mainLayoutPage')
@section('title', 'OSOS | Home')
@section('content')

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="font-family: 'Roboto', sans-serif;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="https://logos-world.net/wp-content/uploads/2020/04/Apple-Logo-1977-1998-700x394.png" alt="logo" width="80" height="40" class="d-inline-block mb-3">
        <div class="d-inline-block" style="font-size: 25px; margin-left:-15px; font-family: 'Georgia', sans-serif;">Web Name</div> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>             
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#About">About Us</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#Product">Product</a>
          </li>
          <li class="nav-item me-5 dropdown">
            <a class="nav-link" href="#">Purchased</a>
          </li>
          <li class="nav-item" style="margin-top: -3px; margin-right: -50px; margin-left: 30px;">
            <a class="nav-link" href="#"><img src="{{asset('images/basket.png')}}" width="25px" height="25px"></a>
          </li>
        </ul>
        <!-- User Profile -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown no-arrow">
                  <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                      <span class="d-block d-lg-inline mr-3 text-gray-800 medium" >
                          @if (session('user_email'))
                              {{ session('user_email') }}
                          @else
                              User Name
                          @endif
                      </span>
                      <div class="d-lg-none dropdown-divider"></div>
                      <img class="border rounded-circle img-profile avatar" src="{{asset('images/profile.png')}}" width="30px" height="30px"></a>
                      <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                        <a class="dropdown-item" href="{{url('user-profile')}}"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                        {{-- @if (auth()->user()->access_grant == 2)
                          <a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Switch to Management</a>
                        @endif
                        @if (auth()->user()->access_grant == 3)
                          <a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Switch to Admin</a>
                        @endif --}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                      </div>
                  </div>
              </li>
          </ul>
        
      </div>
    </div>
  </nav>

  <script type="text/javascript">
    var navlink = document.querySelectorAll("a");
    navlink.forEach(element => {
      element.addEventListener("click", function(){
        navlink.forEach(link => link.classList.remove("active"));
        this.classList.add("active");
      })
    })
  </script>

@endsection