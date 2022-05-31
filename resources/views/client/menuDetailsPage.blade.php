@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu')
@section('section')

 <!-- Products -->
 <div class="row">
    <div class="col-8 col-md-4 border border-primary bg-info rounded-3 p-1 mx-auto mb-5" style="margin-top: 85px;">
        <h2 class="text-center">FOOD</h2>
    </div>
    </div> 
    <!-- Product Cards -->

<!-- Body -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card p-3">
                @foreach($foodName as $foodNames)
                <img src="{{url( $foodNames['image'] )}}" alt="" style="max-height: 400px; max-width: 600px">
            </div>
        </div>
        <div class="col">
            <div class="card p-3">
                <h2>{{ $foodNames['name'] }}</h2>
                <p>{{ $foodNames['description'] }}</p>
                <p>RM.{{ $foodNames['price'] }}</p>
                @endforeach    
            </div>
            <div class="card p-3">
                <p>Add order notes</p>
                <form action="">
                    <textarea name="" id="" cols="40" rows="5"></textarea>
                   <p>Quantity</p>
                   <input type="number" name="" id="">
                   <br>
                   <button type="submit" class="mt-2 btn btn-primary w-100">submit</button>
                </form>
            </div>          
        </div>
    </div>
</div>
<!-- End Body -->

<!-- Footer -->
<footer style="background-color: rgb(19, 18, 18);">
    <div class="main-footer text-center mt-5 p-3">
      <p style="color:rgb(255, 255, 255)"><strong>Copyright &copy; 2022 <a href="/" class="text-decoration-none">OSOS</a>.</strong> All rights reserved.
    </p>
  </div>
  </footer>
  <!-- End Footer -->
@endsection