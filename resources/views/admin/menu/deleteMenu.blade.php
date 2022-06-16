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
      <form method="post" action="/deletemenuitem" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-4 fw-normal">Delete Menu Item</h1>

        <select class="form-select form-select-sm mt-2" aria-label=".form-select-lg example" id="menu" name="menu">
            <option hidden>Select Menu Item</option>
            @foreach($menulist as $menus)
            <option value={{ $menus['id'] }}>{{ $menus['name'] }}</option>
            @endforeach
          </select>
          
      
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Delete</button>
      </form>
    </main>
    
</body>
</html>