<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
  </div>
  Hi,<?php echo   $_SESSION["u_name"] ;
  $customer_session_id =  $_SESSION['user_id'];?>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="user_dashboard.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>



<li class="nav-item">
  <a class="nav-link" href="user_purchase_history.php">
    <i class="fas fa-fw fa-table"></i>
    <span>Purchase History</a>
</li>


<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="user_profile.php">
    <i class="fas fa-fw fa-table"></i>
    <span>My Profile</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="user_logout.php">
  <i class="fas fa-fw fa-table"></i>
    <span>Logout</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>