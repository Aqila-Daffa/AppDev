@extends('client.layout.mainLayoutPage')
@section('title', 'OSOS')
@section('content')

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="font-family: 'Roboto', sans-serif;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://logos-world.net/wp-content/uploads/2020/04/Apple-Logo-1977-1998-700x394.png" alt="logo" width="80" height="40" class="d-inline-block mb-3">
        <div class="d-inline-block" style="font-size: 25px; margin-left:-15px; font-family: 'Georgia', sans-serif;">Web Name</div> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>             
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
        <a class="btn btn-info navbar-text me-2 btn-sm" href="#" style="color: white;">
          Sign In
        </a>
        <a class="btn btn-primary navbar-text btn-sm" href="#" style="color: white;">
          Sign Up
        </a>
      </div>
    </div>
  </nav>