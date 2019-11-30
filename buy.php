<title>change data</title>

<?php



	include('header.php');
	echo "<br><br><h2>This is change data.</h2>";
	include_once('connection.php');

	$id=$_GET['change'];
	

	$query = "SELECT * FROM arts WHERE ID='$id' ";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);

	

	echo '
		<h2>You want to buy:</h2>
		<h3>
			
		</h3>
		<a href="#">Proceed</a>
	';
}