<?php
session_start();
if(!empty($_SESSION['user'])){
	$user = $_SESSION['user'];
}else{
	$user = 'Guest';
}
if($_SESSION['user'] != 'admin'){
	header("Location: access.php");
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="https://www.eminem.com/">
            <img src="logo.png" alt="logo" class="logo" /> </a>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Contact : 9166489602</li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
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
              <a class="nav-link" href="dashboard.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Employees</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hours.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Hours</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="allowdeduct.php">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Allowance/Deduction</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
<?php 
	include('dbconn.php'); 
        $sql = "select * from variation";  
        $result = mysqli_query($con, $sql);  
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
			// echo "<pre>";print_r($rows);die;
?>		
  <div class="container my_container">
  <h2>Allowance/Deduction </h2>
  <p>Emp Allowance/Deduction each month</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Jan</th>
        <th>Feb</th>
        <th>Mar</th>
        <th>Apr</th>
        <th>May</th>
        <th>Jun</th>
        <th>Jul</th>
        <th>Aug</th>
        <th>Sep</th>
        <th>Oct</th>
        <th>Nov</th>
        <th>Dec</th>
      </tr>
    </thead>
    <tbody>
	  <?php foreach($rows as $row){ ?>
      <tr>
        <td><?php echo $row['emp_name']?></td>
        <td><?php echo $row['Jan']?></td>
        <td><?php echo $row['Feb']?></td>
        <td><?php echo $row['Mar']?></td>
        <td><?php echo $row['Apr']?></td>
        <td><?php echo $row['May']?></td>
        <td><?php echo $row['Jun']?></td>
        <td><?php echo $row['July']?></td>
        <td><?php echo $row['Aug']?></td>
        <td><?php echo $row['Sep']?></td>
        <td><?php echo $row['Oct']?></td>
        <td><?php echo $row['Nov']?></td>
        <td><?php echo $row['Dece']?></td>
      </tr>
	  <?php } ?>
    </tbody>
  </table><br><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#empform">Add/Update Values</button>
<!-- Modal EMP UPDATE -->
<div id="<?php echo $user ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
			</div>
			<div class="modal-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Rate</th>
							<th>Jan</th>
							<th>Feb</th>
							<th>Mar</th>
							<th>Apr</th>
							<th>May</th>
							<th>June</th>
							<th>July</th>
							<th>Aug</th>
							<th>Sep</th>
							<th>Oct</th>
							<th>Nov</th>
							<th>Dec</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $user ?></td>
							<td>Rate</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
							<td>Doe</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"></button>
		</div>
	</div>
</div>
  <!-- Modal END-->
<!-- Modal ADD EMP -->
<div id="empform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x	</button>
      
      </div>
      <div class="modal-body">
   
  <div class="form-group">
    <label for="email">Emp Name</label>
    <input type="text" class="form-control" id="empname" name="empname">
  </div>
  <div class="form-group">
    <label for="pwd">Amount</label>
    <input type="number" class="form-control" id="emphour" name="emphour">
  </div>
  <div class="form-group">
	<label for="pwd"><input type="radio"  id="allow" name="allded" value="allow" checked>
	Allowance</label><br>
	<label for="pwd"><input type="radio"  id="deduct" name="allded" value="deduct">
	Deduction</label>
  </div>
  <div class="form-group">
    <label for="month">Month</label><br>
    <select  id="month" name="month">
	<option value="Jan">Jan</option>
	<option value="Feb">Feb</option>
	<option value="Mar">Mar</option>
	<option value="Apr">Apr</option>
	<option value="May">May</option>
	<option value="Jun">Jun</option>
	<option value="Jul">Jul</option>
	<option value="Aug">Aug</option>
	<option value="Sep">Sep</option>
	<option value="Oct">Oct</option>
	<option value="Nov">Nov</option>
	<option value="Dece">Dec</option>
	</select>
  </div>
  <button type="submit" class="btn btn-info btn-lg" id="add_emp">Add</button>

  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <!-- Modal END-->
  
  <!-- Modal DELETE EMP-->
<div id="delform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
      
      </div>
      <div class="modal-body">
 
  <button type="submit" class="btn btn-info btn-lg" id="del_emp">Delete</button>

  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <!-- Modal END-->
  
  <!-- Modal Update RATE -->
<div id="uprate" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
      
      </div>
      <div class="modal-body">
  
  <div class="form-group">
    <label for="pwd">New Rate</label>
    <input type="text" class="form-control" id="emprateup" name="emprateup">
  </div>
  <button type="submit" class="btn btn-info btn-lg" id="update_rate">Update</button>

  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <!-- Modal END-->
</div>
</div>


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

<script>

//ADD EMPLOYEE
jQuery('#add_emp').on('click',function(){
	var empname = jQuery('#empname').val();
	var emprate = jQuery('#emphour').val();
	var month = jQuery('#month').val();
	var allded = $('input[name="allded"]:checked').val(); 
	if(empname == '' || emprate == ''){
		alert('Empty values');
		return;
	}
	jQuery.ajax({
            url: "insert.php",
            // data:'empname='+empname+'&emprate='+emprate,
            data:{empname:empname,emprate:emprate,month:month,allded:allded,action:'allow'},
            type: "POST",
            success:function(data){
                $('.modal-header').html('Success<button type="button" class="close" data-dismiss="modal">x</button>');
                $('.modal-header').css('color','yellowgreen');
				jQuery('#empname').val('');
				jQuery('#emprate').val('');
				// $('.close').click();
            },
            error:function (){}
        });
});
//DELETE EMPLOYEE
jQuery('#del_emp').on('click',function(){
	var empname = $(this).attr('empname');
	jQuery.ajax({
            url: "insert.php",
            // data:'empname='+empname+'&emprate='+emprate,
            data:{empnamedel:empname,action:'delete'},
            type: "POST",
            success:function(data){
                $('.modal-header').html('Success<button type="button" class="close" data-dismiss="modal">x</button>');
                $('.modal-header').css('color','yellowgreen');
				jQuery('#empnamedel').val('');
				// $('.close').click();
            },
            error:function (){}
        });
});
//UPDATE RATE
jQuery('#update_rate').on('click',function(){

	var empname = $(this).attr('empname');
	var emprate = jQuery('#emprateup').val();
	if(empname == '' || emprate == ''){
		alert('Empty values');
		return;
	}
	jQuery.ajax({
            url: "insert.php",
            // data:'empname='+empname+'&emprate='+emprate,
            data:{empnameup:'first',emprateup:emprate,action:'rate'},
            type: "POST",
            success:function(data){
                $('.modal-header').html('<span>Success</span><button type="button" class="close" data-dismiss="modal">x</button>');
                $('.modal-header').css('color','yellowgreen');
				jQuery('#empnameup').val('');
				jQuery('#emprateup').val('');
				// $('.close').click();
            },
            error:function (){}
        });
});
//Remove Success message
$('#empform').click(function(){
	$('.modal-header').empty();
	$('.modal-header').html('<button type="button" class="close" data-dismiss="modal">x</button>');
});
$('#delform').click(function(){
	$('.modal-header').empty();
	$('.modal-header').html('<button type="button" class="close" data-dismiss="modal">x</button>');
});
$('#uprate').click(function(){
	$('.modal-header').empty();
	$('.modal-header').html('<button type="button" class="close" data-dismiss="modal">x</button>');
});
</script>
