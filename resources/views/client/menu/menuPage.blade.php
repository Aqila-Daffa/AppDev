@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu')
@section('section')

  <!-- Products -->
  <div class="row">
    <div class="col-8 col-md-4 border border-primary bg-info rounded-3 p-1 mx-auto mb-4" style="margin-top: 100px;">
        <h2 class="text-center">{{ $prod }}</h2>
    </div>
  </div>

  <form action="menu">
  <div class="row justify-content-center">
    <div class="col-10 col-md-6">
        <div class="mb-3">
            <div class="input-group">
                <input type="hidden" name="product" id="product" value="{{ $prod }}">
                <input type="text" id="search" name="search" class="form-control" placeholder="Search {{ $prod }}">
                <label for="search"></label>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-info"><i class="fa fa-search mr-1"></i> Search</button>
                </div>
            </div>
          </div>
      </div>
  </div>
</form>

    <!-- Product Cards -->
    <div class="container">
      <div class="row g-3 align-items-center mt-2">
        @foreach($menu as $menuItem)
        <div class="col-md">
          <div class="card mx-auto shadow-lg" style="width: 18rem;">
            <img class="card-img-top" src="{{url( $menuItem['image'] )}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h5 class="card-title">{{ $menuItem['name'] }}</h5>
              <p class="card-text">In this page, you can check all the list of our food menu.</p>
              <div class="d-flex justify-content-center">
              <a href="/menudetail?name={{ $menuItem['name'] }}&product={{$prod}}" class="btn btn-primary">Check Menu</a>
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