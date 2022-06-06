@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu')
@section('section')

<div class="row">
    <div class="col-8 col-md-4 border border-primary bg-info rounded-3 p-1 mx-auto mb-5" style="margin-top: 85px;">
        <h2 class="text-center">Purchased Item</h2>
    </div>
    </div> 
    <!-- Section -->
  <section style="margin-bottom: 85px;"">
   <div class="container">
    <div class="row align-items-center">
      <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col">Order Id</th>
              <th scope="col">Menu Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cartItem as $cart)
            <tr>
              <th scope="row">{{$cart['id']}}</th>
              <td>{{$cart['menuName']}}</td>
              <td>{{$cart['quantity']}}</td>
              <td>RM {{$cart['menuPrice']}}</td>
              <td>Paid</td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
   </div>
  </section>

    <!-- Footer -->
  <footer class="fixed-bottom mt-5" style="background-color: rgb(19, 18, 18);">
    <div class="main-footer text-center mt-3 p-3">
      <p style="color:rgb(255, 255, 255)"><strong>Copyright &copy; 2022 <a href="/" class="text-decoration-none">OSOS</a>.</strong> All rights reserved.
    </p>
  </div>
  </footer>
  <!-- End Footer -->
@endsection