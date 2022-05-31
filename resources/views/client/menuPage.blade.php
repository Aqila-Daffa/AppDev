@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu')
@section('section')

  <!-- Products -->
  <div class="row">
    <div class="col-8 col-md-4 border border-primary bg-info rounded-3 p-1 mx-auto mb-5" style="margin-top: 85px;">
        <h2 class="text-center">{{ $prod }}</h2>
    </div>
    </div> 
    <!-- Product Cards -->
    <div class="container">
      <div class="row g-3 align-items-center">
        @foreach($menu as $menuItem)
        <div class="col-md">
          <div class="card mx-auto shadow-lg" style="width: 18rem;">
            <img class="card-img-top" src="{{url( $menuItem['image'] )}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h5 class="card-title">{{ $menuItem['name'] }}</h5>
              <p class="card-text">In this page, you can check all the list of our food menu.</p>
              <div class="d-flex justify-content-center">
              <a href="/menudetail?name={{ $menuItem['name'] }}" class="btn btn-primary">Check Menu</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- End Product Cards -->
    <!-- End Products -->

    <!-- Footer -->
  <footer style="background-color: rgb(19, 18, 18);">
    <div class="main-footer text-center mt-5 p-3">
      <p style="color:rgb(255, 255, 255)"><strong>Copyright &copy; 2022 <a href="/" class="text-decoration-none">OSOS</a>.</strong> All rights reserved.
    </p>
  </div>
  </footer>
  <!-- End Footer -->
@endsection