<?php
$username = $_POST['username'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];
$sex = $_POST['sex'];
$email = $_POST['email'];

if (empty($username)||empty($password)||empty($confpassword)||empty($sex)||empty($email)) {
	header('location:signup.php?message= Please provide all the data!!!');

}

else{

	if ($password!=$confpassword) {
		header('location:signup.php?message= Please confirm password!!!');
	} else {

		session_start();
		include_once('connection.php');

		$name = " SELECT * FROM users_1 WHERE username = '$username' ";

		$check = mysqli_query($connection, $name);

		$num = mysqli_num_rows($check);

		if($num == 1){
			header('location:signup.php?message= User with same username already exist!!!');
		}
		else{
			$insert= "INSERT INTO users_1(username, password, sex, email) VALUES ('$username' , '$password' , '$sex' , '$email') ";
			mysqli_query($connection, $insert);
			header('location:loginpage.php?message=Your ID is created. Login to continue.');

		}
	}
}
?>