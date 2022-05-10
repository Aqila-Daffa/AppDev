@extends('auth.layout.authLayout')
@section('title', 'OSOS | Sign In')
@section('authCont')

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-5 mx-auto">
             <div class="card border-0 shadow" style="border-radius: 10%; background:rgb(45, 153, 117); top: 75px;">
                    <div class="d-flex justify-content-center">
                    <div class="user_logo_bord">
                    <div class="d-flex justify-content-center">
                        <img src="{{url('images/user.png')}}" class="user_logo" alt="user login image">
                    </div>
                    </div>
                    </div>
              <div class="card-body p-4 bck">
              <h5 class="card-title text-center mb-4 my-5 fw-normal fs-4 text-white">Sign In</h5>
                <form action="login_auth.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="eml" placeholder="email">
                    <label for="eml"><img src="{{url('images/mail.svg')}}" width="18px" height="22px" style="margin-right: 7px; margin-top:-3px;">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="Pass" placeholder="Password">
                    <label for="Pass"><img src="{{url('images/lock.svg')}}" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Password</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label text-white" for="rememberPasswordCheck">
                    Remember password
                    </label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" onclick="valid_function()" type="submit">Sign
                    in</button>
                </div>
                <div class="my-4 text-center text-white">Don't have an account? <a href="signup" class="text-info">Sign Up</a></div>
                </form>
              </div>
              </div>
            </div>
        </div>
    </div>
@endsection