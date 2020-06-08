<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: radial-gradient(circle at top right,#ffffff 0%,#ffffff 100%);
  
}
form {
	margin: auto;
    width: 50%;
	border: 3px solid #6c77fd;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
.logo {
	    margin-left: 234px;
}


/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
p{
	margin-left: 26%;
}
</style>
</head>
<body>

<form action="register.php" method="POST">
  <div class="container">
    <img src="logo.png" alt="logo" class="logo">
    <p id="msg">Please fill in this form to create an account.</p>


    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="reg_username" name="reg_username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="reg_password" name="reg_password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" id="reg_password2" name="reg_password2" required>
   

    <button type="submit" onClick = "validate()" class="registerbtn">Register</button>
 
  
 
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
 <div>
</form>

</body>
</html>
<script>
function validate(){
	if(document.getElementById('reg_password').value != document.getElementById('reg_password2').value && document.getElementById('reg_password').value != '' && document.getElementById('reg_password2').value != ''){
		alert('Passwords dont match'); return;
	}
}
</script>
<?php 
include('dbconn.php'); 
$username ='';
$password ='';
if(isset($_POST['reg_username'])){
	$username = $_POST['reg_username'];
}
if(isset($_POST['reg_password'])){
	$password = $_POST['reg_password'];
}

if(isset($_POST['reg_password2'])){
	$password2 = $_POST['reg_password2'];
}
if($username != '' && $password != '' && $password == $password2){
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
		$sql_check = "select * from login where name='$username'";  
        $result = mysqli_query($con, $sql_check);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          // echo "<pre>"; print_r($result);die;
        if($count >= 1){  
            echo "<h1><center>Username exists!</center></h1>";  die;
        } 
        $sql = "insert into login(name,password)  values('$username','$password')";  
        $result = mysqli_query($con, $sql);  
		?>
<script>window.location = 'login.php';</script>
<?php
}
