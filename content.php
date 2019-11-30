<title>online gallerly</title>
	<link href="content.css" type="text/css" rel="stylesheet"/>

<?php
include('header.php');


for($i=1;$i<20;$i++){
?>

	<div id="main">
<?php		
		echo'<img class="userimg" id="image" src="upload/'.$i.'.jpg">';
		echo'<h3>image name<h3>';
		
		echo'image detail<br>';

?>
	</div>

<?php
}

include('footer.php');

?>