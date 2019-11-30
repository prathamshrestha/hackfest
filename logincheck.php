<?php

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)||empty($password)) {
	header('location:loginpage.php?message= Please fill all data!!!');
} else {

	session_start();
	require_once('connection.php');

	$name = " SELECT * FROM user_1 WHERE username = '$username' ";

	$value = " SELECT * FROM user_1 WHERE username = '$username' && password = '$password' ";

	$namecheck = mysqli_query($connection, $name);
	$valuecheck = mysqli_query($connection, $value);

	$namenum = mysqli_num_rows($namecheck);
	$valuenum = mysqli_num_rows($valuecheck);

	$row = mysqli_fetch_array($namecheck);



	if($namenum == 1){

		if ($valuenum == 1) {
			$_SESSION['id'] = $row['ID'];
			$_SESSION['logincheck'] = "loggged inn.";
			header('location:home.php');

			
		} else {
			header('location:loginpage.php?message= Your password is wrong!!!');		
		}	
	} else {
		header('location:loginpage.php?message= User not found!!!');
	}
}

?>