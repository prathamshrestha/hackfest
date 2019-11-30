<?php 

session_start();
session_destroy();
 ?>



<!DOCTYPE html>
<html>
<head>
<title>login</title>
	<link href="loginpage.css" type="text/css" rel="stylesheet"/>
</head>
<body>


<div class="form">
	<img src="avatar.png" alt="" class="avatar">
	<h1>Login Here</h1>
		<h2>
			<?php
				if (@$_GET['message']==true) {
					echo($_GET['message']);
				}
			?>
		</h2>

	<form class="login" action="logincheck.php" method="post">
		Username
 		<input type="text" name="username" >
		Password
  		<input type="password" name="password"><br>


 		<button type="submit" >Submit</button><br>

		<a href="ch_password/forgetpassword.php">Forget Password ?</a><br>
		<a href="signup.php">Don't have an account.</a>

	</form>

</div>


</body>
</html>