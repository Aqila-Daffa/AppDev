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
    <div class="col">
        <div class="row">
            <div class="card">
                <img src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Resep-Bubur-Ayam.jpg?fit=1536%2C1536&ssl=1" alt="" width="300px" height="200px">
            </div>
        </div>
        <div class="row">
            <div class="card">
                <h2>Bubur</h2>
                <p>deskripsi bubur</p>
                <p>price</p>
            </div>
            <div class="card">
                <p>notes</p>
                <form action="">
                    <textarea name="" id="" cols="40" rows="5"></textarea>
                   <p>quantity</p>
                   <input type="number" name="" id="">
                   <button type="submit">submit</button>
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