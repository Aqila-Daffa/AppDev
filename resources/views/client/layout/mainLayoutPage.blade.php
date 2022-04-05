<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('css/v1.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('js/vjs1.js')}}" type="text/javascript"></script> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>

  </head>
  <body style="background-color: #c9cfd1;">

    <!-- Header -->
    <header>
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
    
    <!-- Section -->
    <section>
        
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('images/brgr.png')}}" alt="" class="d-block img-fluid" style="object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="{{url('images/fnc.png')}}" alt="" class="d-block img-fluid" style="object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="{{url('images/pizza.png')}}" alt="" class="d-block img-fluid" style="object-fit: cover;">
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!-- End Carousel -->

  <!-- Products -->
  <div class="border border-primary bg-info rounded-3 w-25 p-1 mx-auto mt-5 mb-4">
      <h2 class="text-center">Products</h2>
  </div>
  
  <!-- End Products -->

  <!-- About Us -->
  <div class="border border-primary bg-info rounded-3 w-25 p-1 mx-auto mt-5 mb-4">
    <h2 class="text-center">About Us</h2>
  </div>
  <!-- End About Us -->

  <!-- Blog -->
  <div class="border border-primary bg-info rounded-3 w-25 p-1 mx-auto mt-5 mb-4">
    <h2 class="text-center">Blog</h2>
  </div>
  <!-- End Blog -->

    </section>
    <!-- End Section -->

    <!-- Footer -->
    <footer>
    </footer>
    <!-- End Footer -->

  </body>
</html>
