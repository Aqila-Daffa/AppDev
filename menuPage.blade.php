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

    
<!--sorting menu start-->
<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card mt-5">
              <div class="card-header">
                  <h4>Sorting Menu in Alphabetical Order </h4>
              </div>
                <div class="body">
                   
                 <form action="" method="GET">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="input-group mb-3">
                          <select name="sort_alphabet" class="form-control">
                            <option value="">--Select Option--</option>
                            <option value="A-Z (Ascending)" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "a-z"){ echo"Selected";} ?>>A-Z</option>
                            <option value="Z-A (Descending)" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "z-a"){ echo"Selected";} ?>>Z-A</option>
                          </select> 
                          <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                            Sort
                          </button>  
                        </div>  
                      </div>
                    </div>
                  </form> 
                
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Created At</th> 
                      </tr>  
                    </thead>
                    <tbody>
                       <?php
                          /*$con = mysqli_connect("localhost","root","phptutorials");

                          $sort_option = "";
                          if(isset($_GET['sort_alphabet']))
                          {
                             if($_GET['sort_alphabet'] == "a-z")
                             {
                              $sort_option = "ASC";
                             } 
                             elseif($_GET['sort_alphabet'] == "z-a"){
                              $sort_option = "DESC";
                             }
                          }
                          $query = "SELECT * FROM a_products ORDER BY name $sort_option";
                          $query_run = mysqli_query($con,$query);

                          if(mysqli_num_rows($query_run)>0)
                          {
                              foreach($query_run as $row){
                                  ?>
                                    <tr>
                                      <td><?= $row['name'];?></td>
                                      <td><?= $row['price'];?></td>
                                      <td><?= $row['created_at'];?></td>
                                    </tr>
                                  <?php
                              }
                          }
                          else
                          {
                            ?>
                              <tr>
                                <td colspan="3">No record found</td>
                              </tr> 
                            <?php
                          }
                        */?>
                    </tbody>  
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
  <!--sorting menu end-->

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