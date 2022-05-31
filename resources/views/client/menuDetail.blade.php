@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu')
@section('section')
@foreach($foodName as $foodNames)
<div class="container mb-5" style="margin-top: 85px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images">
                            <div class="text-center p-5 mt-5 ml-5"> <img id="main-image" src="{{url( $foodNames['image'] )}}" width="380px" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/menu?product={{$prod}}"class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i>&nbsp;<span class="ml-1">Back</span> </a> <i class="fa fa-shopping-cart text-muted">&nbsp;&nbsp;&nbsp;<i class="fa fa-share-alt text-muted"></i> </i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Menu Details</span>
                                <h5 class="text-uppercase">{{ $foodNames['name'] }}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">RM{{ $foodNames['price'] }}</span>
                                </div>
                            </div>
                            <p class="about">{{ $foodNames['description'] }}</p>
                            <div class="sizes mt-3">
                                <h6 class="text-uppercase">Notes</h6>
                                <textarea name="" id="" cols="30" rows="4" maxlength="999"></textarea>
                                <h6 class="text-uppercase">Quantity</h6>
                                <input type="number" name="quantity" id="quantity" value="0" min="0" max="999">
                            </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach  
    <!-- Footer -->
  <footer class="fixed-bottom" style="background-color: rgb(19, 18, 18);">
    <div class="main-footer text-center mt-2 p-2">
      <p style="color:rgb(255, 255, 255)"><strong>Copyright &copy; 2022 <a href="/" class="text-decoration-none">OSOS</a>.</strong> All rights reserved.
    </p>
  </div>
  </footer>
  <!-- End Footer -->
@endsection