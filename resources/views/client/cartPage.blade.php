@extends('client.layout.orderingLayout')
@section('title', 'OSOS | Menu')
@section('section')

<section class="h-100 h-custom" style="margin-top: 50px;">
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
                      <?php $amount++; ?>
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
                              src="{{$cart['menuImage']}}"
                              class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>{{$cart['menuName']}}</h5>
                            <p class="small mb-0">{{$cart['notes']}}</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">{{$cart['quantity']}}</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">RM {{$cart['menuPrice']}}</h5>
                          </div>
                          <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
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
                        <h5 class="mb-0">Card details</h5>
                        <h5>{{auth()->user()->username}}</h5>
                      </div>

                      <form action="/payment" method="post">
                        @csrf
                      <input type="hidden" name="userId" id="userId" value="{{ auth()->user()->id }}">
                      <p class="small mb-2">Card type</p>
                      <input type="radio" id="mastercard" name="card" value="mastercard">
                      <label for="mastercard" class="text-white"><i
                      class="fab fa-cc-mastercard fa-2x me-2"></i></label>

                      <input type="radio" id="visa" name="card" value="visa">
                      <label for="visa" class="text-white"><i
                      class="fab fa-cc-visa fa-2x me-2"></i></label>

                      <input type="radio" id="paypal" name="card" value="paypal">
                      <label for="paypal" class="text-white"><i
                      class="fab fa-cc-paypal fa-2x me-2"></i></label>
  
                        <div class="form-outline form-white mb-3 mt-4">
                          <input type="text" id="typeName" name="typeName" class="form-control form-control-lg" siez="17"
                            placeholder="Cardholder's Name" required/>
                          <label class="form-label" for="typeName">Cardholder's Name</label>
                        </div>

                        <div class="form-outline form-white mb-3">
                          <input type="number" id="typeTable" name="typeTable" class="form-control form-control-lg" min="1" max="999"
                            placeholder="Table Number" required/>
                          <label class="form-label" for="typeName">Table Number</label>
                        </div>

                        <div class="form-outline form-white mb-3">
                          <input type="text" id="typeText" name="typeNumber" class="form-control form-control-lg" siez="17"
                            placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" required/>
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>
  
                        <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="text" id="typeExp" name="typeExp" class="form-control form-control-lg"
                                placeholder="MM/YYYY" size="7" minlength="7" maxlength="7" required/>
                              <label class="form-label" for="typeExp">Expiration</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="password" id="typeCvv" name="typeCvv" class="form-control form-control-lg"
                                placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" required/>
                              <label class="form-label" for="typeCvv">Cvv</label>
                            </div>
                          </div>
                        </div>
  
                      <hr class="my-3">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Total Order</p>                 
                          <?php $torOrder = 0; ?>
                          @foreach($cartItem as $cart)
                          <?php $torOrder++; ?>
                          @endforeach
                        <p class="mb-2"><?php echo ($torOrder == 1) ? $torOrder." Item" : $torOrder." Items"?></p>
                        {{-- (Condition)?(thing's to do if condition true):(thing's to do if condition false) --}}
                      </div>
                      <input type="hidden" name="totOrder" id="totOrder" value="{{ $torOrder }}">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal Price</p>
                        <?php $subTotal = 0; ?>
                        @foreach($cartItem as $cart)
                        <?php 
                        $subTotal += $cart['menuPrice']; 
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
                          <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
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