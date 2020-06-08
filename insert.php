<?php 
include('dbconn.php'); 
	if(isset($_POST['action'])){
		$action = $_POST['action'];
	}
	if($action == 'add'){
		if(isset($_POST['empname'])){
			$name = $_POST['empname'];
		}
		if(isset($_POST['emprate'])){
			$rate = $_POST['emprate'];
		}
		$name = mysqli_real_escape_string($con, $name);  
        $rate = mysqli_real_escape_string($con, $rate); 
		$sql = "insert into employee(emp_name,emp_rate)  values('$name','$rate')";  
        $result = mysqli_query($con, $sql);  
		//hours table entry
		$sql2 = "insert into hours(emp_name)  values('$name')";  
		$result2 = mysqli_query($con, $sql2);
		//allowance table entry
		$sql3 = "insert into variation(emp_name)  values('$name')";  
		$result3 = mysqli_query($con, $sql3);
	}else if($action == 'delete'){
		if(isset($_POST['empnamedel'])){
			$name = $_POST['empnamedel'];
		}
		$name = mysqli_real_escape_string($con, $name); 
		$sql = "delete from employee where emp_name = '$name'";  
        $result = mysqli_query($con, $sql);
		//Delete from hours
		$sql2 = "delete from hours where emp_name = '$name'";  
		$result2 = mysqli_query($con, $sql2);
		//Delete from allowance
		$sql3 = "delete from variation where emp_name = '$name'";  
		$result3 = mysqli_query($con, $sql3);
	}else if($action == 'rate'){
		if(isset($_POST['empnameup'])){
			$name = $_POST['empnameup'];
		}
		if(isset($_POST['emprateup'])){
			$rate = $_POST['emprateup'];
		}
		$name = mysqli_real_escape_string($con, $name);  
        $rate = mysqli_real_escape_string($con, $rate); 
		$sql = "update employee set emp_rate = '$rate' where emp_name = '$name'";  
        $result = mysqli_query($con, $sql);
	}else if($action == 'addhours'){
		if(isset($_POST['empname'])){
			$name = $_POST['empname'];
		}
		if(isset($_POST['emprate'])){
			$hour = $_POST['emprate'];
		}
		if(isset($_POST['month'])){
			$month = $_POST['month'];
		}
		$name = mysqli_real_escape_string($con, $name);  
		$hour = mysqli_real_escape_string($con, $hour); 
			$sql = "update hours set $month = '$hour' where emp_name = '$name'";  
			$result = mysqli_query($con, $sql);
	}else if($action == 'allow'){
		if(isset($_POST['empname'])){
			$name = $_POST['empname'];
		}
		if(isset($_POST['emprate'])){
			$amount = $_POST['emprate'];
		}
		if(isset($_POST['month'])){
			$month = $_POST['month'];
		}
		if(isset($_POST['allded'])){
			$allded = $_POST['allded'];
		}
		$name = mysqli_real_escape_string($con, $name);  
		$amount = mysqli_real_escape_string($con, $amount);
		if($allded == 'allow'){
			$sql = "update variation set $month = '$amount' where emp_name = '$name'";  
			$result = mysqli_query($con, $sql);
		}else{
			$amount = $amount * -1;
			$sql = "update variation set $month = '$amount' where emp_name = '$name'";  
			$result = mysqli_query($con, $sql);
		}		
			
	}
	
?>