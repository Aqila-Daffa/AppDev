<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard | OSOS </title>
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
          <a href="/admin" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/adminmenu">
            <i class='bx bx-box'></i>
            <span class="links_name">Menu</span>
          </a>
        </li>
        <li>
          <a href="/admintrans">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Transaction list</span>
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
        <span class="dashboard">Dashboard</span>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Menu</div>
            <div class="indicator">              
              <span class="text">For admin to check and edit menu in the restaurant</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Transaction List</div>
            <div class="indicator">
              <span class="text">For admin to check and edit transaction </span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Payment List</div>
            <div class="indicator">
              <span class="text">For admin to check user payment status</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Switch to User/Cashier</div>
            <div class="indicator">
              <span class="text">For admin to switch the view as a user or cashier</span>
            </div>
          </div>
        </div>
      </div>

     

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
