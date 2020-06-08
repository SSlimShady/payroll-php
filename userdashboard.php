<?php
session_start();
if(!empty($_SESSION['user'])){
	$user = $_SESSION['user'];
}else{
	$user = 'Guest';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/images/favicon.png" />
	<style>
	.my_container{
		width:calc(100% - 270px);
	}
	.logo {
		width: 36% !important;
	}
	</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $user?></p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">N/A</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="dashboard.php">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">N/A</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/js/shared/off-canvas.js"></script>
    <script src="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="StarAdmin-Free-Bootstrap-Admin-Template-master/src/assets/js/shared/chart.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>