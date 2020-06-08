<?php
session_start();
?>
<html>
<style>
.register{
	padding-left: 46%;
    text-decoration: none;
    color: #02699a;
}

/*Background color*/
.body_class{
	
    background: radial-gradient(circle at top right,#ffffff 0%,#ffffff 100%);

}
/* Bordered form */
form {
  border: 3px solid #6c77fd;
  width: fit-content;
    margin: auto;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
<body class = "body_class">
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="logo.png" alt="logo" class="logo">
  </div>

  <div class="container">
    <label for="uname" style="color:white;"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw" style="color:white;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
      <a class="register" href="register.php"> Register?</a>
  </div>

  <!--<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>-->
</form>
</body>
</html>
<?php
include('dbconn.php'); 
$username ='';
$password ='';
if(isset($_POST['uname'])){
    $username = $_POST['uname'];  
}
if(isset($_POST['pass'])){
    $password = $_POST['pass'];  
}
if($username != '' && $password != ''){  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from login where name='$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          // echo "<pre>"; print_r($result);die;
        if($count == 1){  
			$_SESSION['user'] = $username;
			if($username == 'admin'){
            echo "<h1><center> Login successful </center></h1>";  
			?><script>window.location = 'dashboard.php';</script><?php
			}else{
				?><script>window.location = 'userdashboard.php';</script><?php
			}
        }  
        else{  
            echo "<h1><center>Login failed. Invalid username or password.</center></h1>";  
        }    
}
		
?>  