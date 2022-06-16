<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">E-Restaurant Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/adminlayout" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/adminmenu" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Menu</span>
          </a>
        </li>
        <li>
          <a href="/admintrans">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Transaction List</span>
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
          <a href="/adminuser">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">User List</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Switch to Cashier</span>
          </a>
        </li>
       
       
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Menu</span>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Menu List</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">ID</li>
              @foreach($menulist as $menus)
              <li>{{ $menus['id'] }}</li>
              @endforeach
            </ul>
            <ul class="details">
            <li class="topic">NAME</li>
            @foreach($menulist as $menus)
              <li>{{ $menus['name'] }}</li>
              @endforeach
          </ul>
          <ul class="details">
            <li class="topic">TYPE</li>
            @foreach($menulist as $menus)
              <li>{{ $menus['type'] }}</li>
              @endforeach
          </ul>
          <ul class="details">
            <li class="topic">PRICE</li>
            @foreach($menulist as $menus)
              <li>{{ $menus['price'] }}</li>
              @endforeach
          </ul>
          </div>
          
        </div>
        <div class="top-sales box">
          <div class="title">Options</div>
          <ul class="top-sales-details">
            <li>
            <a href="/addmenu">
              <img src="images/plus.png" alt="">
              <span class="product">Insert Menu</span>
            </a>
            
          </li>
          <li>
            <a href="/deletemenu">
              <img src="images/minus.png" alt="">
              <span class="product">Delete Menu </span>
            </a>
           
          </li>
          <li>
           
            
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
