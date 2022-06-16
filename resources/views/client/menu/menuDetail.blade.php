@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu Detail')
@section('section')
@foreach($foodName as $foodNames)
<div class="container mb-5" style="margin-top: 85px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ session('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card" style="margin-bottom: 50px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images">
                            <div class="text-center p-5 mt-5 ml-5"> <img id="main-image" src="{{url( $foodNames['image'] )}}" width="380px" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/menu?product={{$prod}}"class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i>&nbsp;<span class="ml-1">Back</span></a>
                            </div>
                            <form action="/addcart" method="post">
                                @csrf
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Menu Details</span>
                                <h5 class="text-uppercase" name="menuName" id="menuName">{{ $foodNames['name'] }}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price" name="menuprice" id="menuprice">RM{{ $foodNames['price'] }}</span>
                                </div>
                            </div>
                            <input type="hidden" name="userId" id="userId" value="{{ auth()->user()->id }}"> 
                            <input type="hidden" name="menuId" id="menuId" value="{{ $foodNames['id'] }}">
                            <input type="hidden" name="image" id="image" value="{{ $foodNames['image'] }}">
                            <input type="hidden" name="name" id="name" value="{{ $foodNames['name'] }}">
                            <input type="hidden" name="price" id="price" value="{{ $foodNames['price'] }}">                                               
                            <p class="about">{{ $foodNames['description'] }}</p>
                            <div class="sizes mt-3">
                                <h6 class="text-uppercase">Notes</h6>
                                <textarea name="notes" id="notes" cols="30" rows="4" maxlength="999" required></textarea>
                                <h6 class="text-uppercase">Quantity</h6>
                                <input type="number" name="quantity" id="quantity" value="1" min="1" max="999">
                            </div>
                            <div class="cart mt-4 align-items-center"> <button type="submit" class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> </div>
                        </form>
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