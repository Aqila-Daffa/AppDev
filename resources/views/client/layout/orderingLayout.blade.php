<?php
// Start the session
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('css/styl1.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/styl2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/style4.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('js/vjs1.js')}}" type="text/javascript"></script> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- ICONS -->
  <link rel="icon" href="{{asset('projectad/assets/icon/favicon.ico')}}" />
  <script src="https://kit.fontawesome.com/f9c45ad44a.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>

  </head>
  <body style="background: #6f5115; overflow-x: hidden;">

    <!-- Header -->
    <header id="Home">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="font-family: 'Roboto', sans-serif;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="https://logos-world.net/wp-content/uploads/2020/04/Apple-Logo-1977-1998-700x394.png" alt="logo" width="80" height="40" class="d-inline-block mb-3">
            <div class="d-inline-block" style="font-size: 25px; margin-left:-15px; font-family: 'Georgia', sans-serif;">OSOS</div> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>             
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item me-2">
                <a class="nav-link" aria-current="page" href="\home">Home</a>
              </li>
              <li class="nav-item ml-5 dropdown">
                <a class="nav-link" href="/cart">Cart</a>
              </li>
              <li class="nav-item ml-5 dropdown">
                <a class="nav-link" href="/purchased">Purchased</a>
              </li>
            </ul>

            @auth
            <!-- User Profile -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow">
                      <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="d-block d-lg-inline mr-3 text-gray-800 medium" >
                          {{ auth()->user()->username }}
                        </span>
                        <div class="d-lg-none dropdown-divider"></div>
                        <img class="border rounded-circle img-profile avatar" src="{{asset('images/profile.png')}}" width="30px" height="30px"></a>
                        <ul class="dropdown-menu shadow dropdown-menu-dark dropdown-menu-lg-end">
                          <li class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</li>
                          {{-- <li class="dropdown-item" href="#"><i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Switch to Admin</li> --}}
                          <div class="dropdown-divider"></div>
                          <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout
                            </button>
                          </form>
                        </ul>
                    </div>
                </li>
            </ul>

            @else
            <a class="btn btn-info navbar-text me-2 btn-sm" href="signin" style="color: white;">
              Sign In
            </a>
            <a class="btn btn-primary navbar-text btn-sm" href="signup" style="color: white;">
              Sign Up
            </a>
            
            @endauth
          </div>
        </div>
      </nav>    
    </header>
    <!-- End Header -->

    <script type="text/javascript">
      var navlink = document.querySelectorAll("a");
      navlink.forEach(element => {
        element.addEventListener("click", function(){
          navlink.forEach(link => link.classList.remove("active"));
          this.classList.add("active");
        })
      })
    </script>

    <script type="text/javascript">
      var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 50) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    
    <section>
      @yield('section')
    </section>
    

  </body>
</html>
