@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Cart')
@section('section')

<section class="h-100 h-custom" style="margin-top: 70px;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ session('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="#!" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <?php $amount = 0; ?>
                      @foreach($cartItem as $cart)
                      <?php 
                      $amount++;
                      $cId = $cart->id;
                      ?>
                      @endforeach
                      <p class="mb-1">Shopping cart</p>
                      <p class="mb-0">You have {{$amount}} items in your cart</p>
                    </div>
                    <div>
                      <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                          class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                  </div>
                  @foreach($cartItem as $cart)
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="{{$cart->menu->image}}"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>{{$cart->menu->name}}</h5>
                            <p class="small mb-0">{{$cart['notes']}}</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">

                          {{-- Add Quantity --}}
                          <form action="editcart" method="post">
                            @csrf
                          <input type="hidden" name="menuId" id="menuId" value="{{ $cart['food_menu_id'] }}">
                          {{-- <div class="d-flex flex-row align-items-center">
                            <div style="width: 90px;">
                              <p class="small mb-0">Quantity</p>
                              <input type="number" name="quantity" id="quantity" class="fw-normal mb-0" value="{{$cart['quantity']}}" min="1" max="999">
                            </div>
                          </div> --}}
                          <div class="input-group input-group-sm mx-2" style="width: 100px;">
                          <input type="number" id="quantity" name="quantity" class="form-control input-number" value="{{$cart['quantity']}}" min="1" max="999"  size="3">
                          <span class="input-group-btn">
                              <button type="submit" class="quantity-right-plus btn btn-success btn-number">
                                <i class="fa-solid fa-pen-to-square"></i>
                              </button>
                          </span>    
                          </div>
                        </form>

                          {{-- calculate item price based on quantity ordered --}}
                          <?php 
                          $itmQtt = $cart['quantity'];
                          $itmPrc = $cart->menu->price;
                          $itemTotPrice = $itmPrc * $itmQtt;
                          ?>

                          <div class="mx-2">
                            <h5 class="mb-0">RM{{$itemTotPrice}}</h5>
                          </div>

                          {{-- Delete Cart --}}
                          <form action="deletecart" method="post">
                            @csrf
                            <input type="hidden" name="cartId" id="cartId" value="{{$cart['id']}}">
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
  
                </div>
                <div class="col-lg-5">
  
                  <div class="card bg-primary text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Payment details</h5>
                        <h5>{{auth()->user()->username}}</h5>
                      </div>

                      <form action="/checkout" method="get">
                        @csrf
                      <input type="hidden" name="userId" id="userId" value="{{ auth()->user()->id }}">
                                 
                      <div class="form-outline form-white mb-3">
                        <input type="number" id="tableNumb" name="tableNumb" class="form-control form-control-lg" min="1" max="999"
                          placeholder="Table Number" required/>
                        <label class="form-label" for="tableNumb">Table Number</label>
                      </div>

                      <hr class="my-3">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Total Order</p>                 
                          <?php $torOrder = 0; ?>
                          @foreach($cartItem as $cart)
                          <?php $torOrder += $cart['quantity']; ?>
                          @endforeach
                        <p class="mb-2"><?php echo ($torOrder == 0 || $torOrder == 1) ? $torOrder." Item" : $torOrder." Items"?></p>
                        {{-- (Condition)?(thing's to do if condition true):(thing's to do if condition false) --}}
                      </div>
                      <input type="hidden" name="totOrder" id="totOrder" value="{{ $torOrder }}">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal Price</p>
                        <?php $subTotal = 0; ?>
                        @foreach($cartItem as $cart)
                        <?php 
                        $subTotal += $cart->menu->price * $cart['quantity']; 
                        ?>
                        @endforeach
                        <p class="mb-2">RM {{$subTotal}}</p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Taxes</p>
                        <?php 
                        $tax = $subTotal * 0.1; 
                        ?>
                        <p class="mb-2">RM {{$tax}}</p>
                      </div>
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total Price</p>
                        <?php 
                        $total = $subTotal + $tax; 
                        ?>
                        <p class="mb-2">RM {{$total}}</p>
                      </div>
                      <input type="hidden" name="totPrice" id="totPrice" value="{{ $total }}">
  
                      <button type="submit" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span>Go to Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button>
                    </form>
  
                    </div>
                  </div>
  
                </div>
  
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Footer -->
  <footer style="background-color: rgb(19, 18, 18);">
    <div class="main-footer text-center mt-5 p-3">
      <p style="color:rgb(255, 255, 255)"><strong>Copyright &copy; 2022 <a href="/" class="text-decoration-none">OSOS</a>.</strong> All rights reserved.
    </p>
  </div>
  </footer>
  <!-- End Footer -->
@endsection