<?php 

$connection= mysqli_connect('127.0.0.1','root','');

if(!$connection){
	echo "         ****not connection to host****<br>    ";
}

$database = mysqli_select_db($connection, 'leapfrog');

if(!$database){
	echo "  *****database not selected***** <br>   ";
}

 ?>