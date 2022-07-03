<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin User List | OSOS </title>
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      .btn:focus {
            outline: none;
        }
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">E-Restaurant Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/admin" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/adminmenu" >
            <i class='bx bx-box' ></i>
            <span class="links_name">Menu</span>
          </a>
        </li>
        <li>
          <a href="/adminpayment">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Payment List</span>
          </a>
        </li>

        <li>
          <a href="/">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Switch to User</span>
          </a>
        </li>
        <li>
          <a href="/adminuser" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">User List</span>
          </a>
        </li>
       
       
        <li class="log_out">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn">
              <i class="bx bx-log-out"></i>
              <span class="links_name" style="color:white">Log out</span>
            </button>
          </form>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">User</span>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">User List</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">ID</li>
              @foreach($users as $user)
              <li>{{ $user['id'] }}</li>
              @endforeach
            </ul>
            <ul class="details">
            <li class="topic">USERNAME</li>
            @foreach($users as $user)
              <li>{{ $user['username'] }}</li>
              @endforeach
          </ul>
          <ul class="details">
            <li class="topic">EMAIL</li>
            @foreach($users as $user)
              <li>{{ $user['email'] }}</li>
              @endforeach
          </ul>
          </div>
          
        </div>
        <div class="top-sales box">
          <div class="title">Options</div>
          <ul class="top-sales-details">
          <li>
            <a href="deleteuser">
              <img src="images/minus.png" alt="">
              <span class="product">Delete User</span>
            </a>
          </li>
          <li>
            <a href="chooseuser" class="btn btn-outline-success" role="button">
              Edit User
            </a>  
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
