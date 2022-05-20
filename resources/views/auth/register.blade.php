@extends('auth.layout.authLayout')
@section('title', 'OSOS | Sign Up')
@section('authCont')

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-5 mx-auto">
             <div class="card border-0 shadow" style="border-radius: 10%; background:rgb(15, 66, 36); top: 70px;">
                    <div class="d-flex justify-content-center">
                    <div class="user_logo_bord">
                    <div class="d-flex justify-content-center">
                        <img src="{{url('images/user.png')}}" class="user_logo" alt="user login image">
                    </div>
                    </div>
                    </div>
              <div class="card-body p-4 bckr">
              <h5 class="card-title text-center mb-4 my-5 fw-normal fs-4 text-white">Sign Up</h5>
                <form action="/register" method="post">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="usName" placeholder="username" required value="{{ old('username') }}">
                    <label for="usName"><img src="{{url('images/usname.svg')}}" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="eml" placeholder="email" required value="{{ old('email') }}">
                    <label for="eml"><img src="{{url('images/mail.svg')}}" width="18px" height="22px" style="margin-right: 7px; margin-top:-3px;">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,255}" title="Password must contain at least one number and one uppercase and lowercase letter, and at least has 6 until 255 characters" required>
                    <label for="pass"><img src="{{url('images/lock.svg')}}" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('confirmationPassword') is-invalid @enderror" name="confirmationPassword" id="conPass" placeholder="ConfirmPassword" required>
                    <label for="conPass"><img src="{{url('images/lock.svg')}}" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Confirm Password</label>
                    @error('confirmationPassword')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="d-grid mt-4 mb-3">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" onclick="confirmation_function()" type="submit">Sign
                    Up</button>
                </div>
                <div class="text-center text-white">Already had an account? <a href="signin" class="text-info">Sign In</a></div>
                <div class="text-center text-white">Or go back to <a href="/" class="text-info">Home</a></div>
                </form>
              </div>
              </div>
            </div>
        </div>
    </div> 
@endsection