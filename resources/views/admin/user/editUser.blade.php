<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <link href="{{asset('css/styl3.css')}}" rel="stylesheet">
</head>
<body class="text-center">
    
    <main class="form-signin">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form method="post" action="/editprofile">
        @csrf
        <h1 class="h3 mb-4 fw-normal">Edit User</h1>
        @foreach ($user as $users)
        <div class="form-floating mb-2">
            <input type="hidden" id="usId" name="usId" value="{{$users->id}}">
            <input type="text" class="form-control" placeholder="User Id" value="{{$users->id}}" readonly>
            <label for="usId">User Id</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" placeholder="Userame" value="{{$users->username}}" readonly>
            <label for="name">Userame</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" placeholder="Email" value="{{$users->email}}" readonly>
            <label for="Email">Email</label>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="isAdmin" name="isAdmin" value="{{$users->isAdmin}}" required>
            <option hidden>{{$users->isAdmin}}</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        @endforeach
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Submit</button>
      </form>
      <a class="w-100 btn btn-lg btn-info mt-3" href="adminuser">Cancel</a>
    </main>
    
</body>
</html>