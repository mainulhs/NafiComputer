<?php include '../core/dbe.inc.php';?>
<?php
	if(isset($_POST['login']))
		{
			session_start();
			//variables 
			$users =$_POST['userName'];
			$password=$_POST['password'];
			$select = "select * from users where userName='$users' and userPassword='$password'";
			$row_num = login($select);
    
           if ( $row_num  > 0 ){
					header('location: dashboard.php');
					$_SESSION['userName']=$users;
           }
           else{
				header('location: index.php?err=1&msg=Failed');
           }	
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin |Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../public/login/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="../public/login/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Admin Login</h2>
			</div>
			<form role="form" method="POST" class="login-form" enctype="multipart/form-data">
			 <div class="form-group">
                    <?php
                        if(isset($_GET['msg'])){
                         ?>
                         <div class="form-error bg-danger">
                            Invalid Username or Password!
                         </div>
                    <?php 
                    }
                    ?>
              </div>
				<div class="form-group">
				    <label for="userName">Username</label>
				    <br>
				    <input type="text" id="userName" name = "userName" placeholder="Enter Username">
				</div>
				<div class="form-group">
				    <label for="password">Password</label>
				    <br>
				    <input type="password" id="password" name="password" placeholder="Enter Password">
				</div>
				<button type="submit" name="login" id = "login">Log In</button>
				<br/>
			</form>
		</div>
	 </div>    
	<script>
		$(document).ready(function () {
	    	$('#logo').addClass('animated fadeInDown');
	    	$("input:text:visible:first").focus();
		});
		$('#username').focus(function() {
			$('label[for="username"]').addClass('selected');
		});
		$('#username').blur(function() {
			$('label[for="username"]').removeClass('selected');
		});
		$('#password').focus(function() {
			$('label[for="password"]').addClass('selected');
		});
		$('#password').blur(function() {
			$('label[for="password"]').removeClass('selected');
		});
	</script>
 </body>
</html>