@extends('auth.layout.authLayout')
@section('title', 'OSOS | Profile')
@section('authCont')

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-5 mx-auto">
             <div class="card border-0 shadow" style="border-radius: 10%; background:rgb(54, 133, 154); top: 70px; margin-top: 30px;">
                    <div class="d-flex justify-content-center mb-2">
                    <div class="profile_logo_bord">
                    <div class="d-flex justify-content-center">
                        <img src="{{url('images/profile.png')}}" class="profile_logo" alt="user login image">
                    </div>
                    </div>
                    </div>
              <div class="card-body p-4 bckr">
              <p class="card-title text-center mt-5 mb-3 fw-normal fs-2 text-white">Profile Page</p>
              @foreach ($user as $users)
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="username" value="{{$users->username}}" readonly>
                    <label for="usName"><img src="{{url('images/usname.svg')}}" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" placeholder="email" value="{{$users->email}}" readonly>
                    <label for="eml"><img src="{{url('images/mail.svg')}}" width="18px" height="22px" style="margin-right: 7px; margin-top:-3px;">Email address</label>
                </div>
                @endforeach
                <div class="d-grid mt-4 mb-3">
                    <a href="/updateprofilepage" class="btn btn-login text-uppercase fw-bold" style="background-color:rgb(48, 48, 130); color:rgb(112, 255, 255);">Update</a>
                </div>
                <div class="d-grid mt-2 mb-2">
                    <a href="/home" class="btn btn-login text-uppercase fw-bold" style="background-color:rgb(48, 48, 75); color:rgb(57, 255, 255);">Back</a>
                </div>
              </div>
              </div>
            </div>
        </div>
    </div> 
@endsection