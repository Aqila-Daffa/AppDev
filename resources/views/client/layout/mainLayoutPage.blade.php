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
    <link href="{{url('css/v1.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/v2.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('js/vjs1.js')}}" type="text/javascript"></script> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>

  </head>
  <body style="background: #1b5246;">

    <!-- Header -->
    <header id="Home">
      @yield('content')
    </header>
    <!-- End Header -->

    <script type="text/javascript">
      var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    
    <!-- First Section -->
    <section>    
    <!-- Carousel -->
    <div id="carouselResponsive" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselResponsive" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselResponsive" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselResponsive" data-bs-slide-to="2"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('images/welc1.png')}}" alt="" class="img-fluid w-100 d-none d-lg-block" width="100%">
        <img src="{{url('images/welc2.png')}}" alt="" class="img-fluid w-100 d-block d-lg-none" width="100%">
      </div>
      <div class="carousel-item">
        <img src="{{url('images/fnc1.png')}}" alt="" class="img-fluid w-100 d-none d-lg-block" width="100%">
        <img src="{{url('images/fnc2.png')}}" alt="" class="img-fluid w-100 d-block d-lg-none" width="100%">
      </div>
      <div class="carousel-item">
        <img src="{{url('images/pizza1.png')}}" alt="" class="img-fluid w-100 d-none d-lg-block" width="100%">
        <img src="{{url('images/pizza2.png')}}" alt="" class="img-fluid w-100 d-block d-lg-none" width="100%">
      </div>
    </div>
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselResponsive" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselResponsive" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!-- End Carousel -->
  </section>
  <!-- End First Section -->

  <!-- Second Section -->
  <section id="About" style="background: rgb(58, 40, 25);">
    <!-- About Us -->
    <div class="row">
    <div class="col-6 col-md-3 mx-auto mb-5" style="margin-top: 85px; margin-left: 180px; color:rgb(255, 255, 255)">
        <h1 class="text-center">About Us</h1>
    </div>
    </div>
    <div>
      <h5 class="p-5 text-white">On this particular website, our main goal is to achieve a new ordering experience on a cafe/restaurant. Ordering without calling any waitresses will be very much the start to get to our goal. The second goal is to maximize the restaurant orders so that it will satisfy the owner of the place. Our interfaces will also design specifically to increase the restaurant consumers' appetite. As in our group name "NASI" our purpose is to become like "nasi/rice". a good main consumption for everyone in the nation. We are trying our best to develop a system that will be useful for the people. We are currently located in Jakarta, Indonesia and consist of 5 student from software engineering faculty at university technology malaysia.</h5>
    </div> 
  <!-- End About Us -->
  </section>
  <!-- End Second Section -->

  <!-- Third Section -->
  <section id="Product">
    <!-- Products -->
    <div class="row">
    <div class="col-6 col-md-3 mx-auto mb-5" style="margin-top: 85px; margin-left: 180px; color:rgb(255, 255, 255)">
        <h1 class="text-center">Products</h1>
    </div>
    </div> 
    <!-- Product Cards -->
    <div class="container">
      <div class="row g-3 align-items-center">
        <div class="col-md">
          <div class="card mx-auto shadow-lg" style="width: 18rem;">
            <img class="card-img-top" src="{{url('images/Food.png')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h5 class="card-title">Food</h5>
              <p class="card-text">In this page, you can check all the list of our food menu.</p>
              <div class="d-flex justify-content-center">
              <a href="/menu?product=Food" class="btn btn-primary">Check Menu</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card mx-auto shadow-lg" style="width: 18rem;">
            <img class="card-img-top" src="{{url('images/Drink.png')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h5 class="card-title">Drink</h5>
              <p class="card-text">In this page, you can check all the list of our drink menu.</p>
              <div class="d-flex justify-content-center">
              <a href="/menu?product=Drink" class="btn btn-primary">Check Menu</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card mx-auto shadow-lg" style="width: 18rem;">
            <img class="card-img-top" src="{{url('images/Snack.png')}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h5 class="card-title">Snack</h5>
              <p class="card-text">In this page, you can check all the list of our snack menu.</p>
              <div class="d-flex justify-content-center">
              <a href="/menu?product=Snack" class="btn btn-primary">Check Menu</a>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <!-- End Product Cards -->
    <!-- End Products -->
    </section>
    <!-- End Third Section -->

    <!-- Footer -->
    <footer style="background-color: rgb(19, 18, 18);">
      <div class="main-footer text-center mt-5 p-3">
        <p style="color:rgb(255, 255, 255)"><strong>Copyright &copy; 2022 <a href="/" class="text-decoration-none">OSOS</a>.</strong> All rights reserved.
      </p>
    </footer>
    <!-- End Footer -->

  </body>
</html>
