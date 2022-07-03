<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Menu Item</title>
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
          <div class="alert alert-success alert-dismissible fade show my-2 text-center" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <form method="post" action="/deleteuseritem">
        @csrf
        <h1 class="h3 mb-4 fw-normal">Delete User</h1>

        <select class="form-select form-select-sm mt-2" aria-label=".form-select-lg example" id="user" name="user">
            <option hidden>Select User</option>
            @foreach($userlist as $users)
            <option value={{ $users['id'] }}>{{ $users['username'] }}</option>
            @endforeach
          </select>
          
      
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Delete</button>
      </form>
      <a class="w-100 btn btn-lg btn-info mt-3" href="adminuser">Cancel</a>
    </main>
    
</body>
</html>