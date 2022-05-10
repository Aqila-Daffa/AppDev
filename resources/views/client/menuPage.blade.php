@extends('client.layout.menuLayout')
@section('title', 'OSOS | Menu')
@section('section')

<?php
session_start();
?>
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

  <!-- Products -->
  <div class="row">
    <div class="col-8 col-md-4 border border-primary bg-info rounded-3 p-1 mx-auto mb-5" style="margin-top: 85px;">
        <h2 class="text-center">{{ $prod }}</h2>
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
              <a href="#" class="btn btn-primary">Check Menu</a>
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
              <a href="#" class="btn btn-primary">Check Menu</a>
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
              <a href="#" class="btn btn-primary">Check Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Product Cards -->
    <!-- End Products -->
@endsection