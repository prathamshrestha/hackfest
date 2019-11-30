<?php 
  include('header.php');
?>

<h1>Now upload your image data.</h1>

<?php

if(@$_POST['uploaddata']){
$imguser = $_POST['imguser'];
$rate = $_POST['rate'];
$imgname = $_POST['imgname'];
$imgdet = $_POST['imgdetail'];

include_once('connection.php');
$insert= "INSERT INTO arts(imgname, rate, imgdetail, imguser) VALUES ('$imgname','$rate','$imgdet','$imguser') ";
			mysqli_query($connection, $insert);
			echo'<script>alert("Uploaded Sucessfully")</script>';

?>

<form method="post">
	Image Uploader: <input type="text" name="imguser" >

	Rate :<input type="text" name="rate">

	Image name :<input type="text" name="Location" id="location">

	Image detail  : <textarea type="text" name="imgdetail"></textarea><br>


	<input type="submit" value="Submit" name="uploaddata" >
</form>

<?php
include('footer.php');

?>