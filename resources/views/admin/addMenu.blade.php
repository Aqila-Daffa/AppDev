<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Menu Item</title>
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
      <form method="post" action="/addmenuitem" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-4 fw-normal">Add Menu Item</h1>
    
        <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Menu Name" value="{{ old('name') }}" required>
            <label for="mName">Menu Name</label>
            @error('name')
                    <div class="invalid-feedback mt-1">
                        {{$message}}
                    </div>
            @enderror
        </div>
        <select class="form-select form-select-sm mt-2" aria-label=".form-select-lg example" id="type" name="type" value="{{ old('type') }}" required>
            <option hidden>Type Menu</option>
            <option value="Food">Food</option>
            <option value="Drink">Drink</option>
            <option value="Snack">Snack</option>
          </select>
        <div class="form-floating">
          <input type="text" class="form-control mt-2  @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" value="{{ old('price') }}" required>
          <label for="price">Price RM</label>
          @error('price')
                    <div class="invalid-feedback mt-1">
                        {{$message}}
                    </div>
          @enderror
        </div>
        <div class="form-floating">
            <textarea class="form-control mt-2 @error('description') is-invalid @enderror" placeholder="Leave a description here" id="description" name="description" style="height: 120px" required></textarea>
            <label for="description">Description</label>
            @error('description')
                    <div class="invalid-feedback mt-1">
                        {{$message}}
                    </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label mt-2">Menu Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{ old('image') }}" required>
            @error('image')
                    <div class="invalid-feedback mt-1">
                        {{$message}}
                    </div>
            @enderror
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Submit</button>
      </form>
    </main>
    
</body>
</html>