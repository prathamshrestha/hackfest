<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<div id="navbar" >
	<ul>
		<div class="dropdown">
        <li class="dropbtn" onclick="myFunction()">Menu   </li>
  <div class="dropdown-content" id="myDropdown">
    <a href="blood.html">griffiti</a>
    <a href="vehicle.html">paints</a>
    <a href="pickup.html">sclupture</a>
    <a href="food.html">crafting</a>
    
    
  </div>
  </div>
		<li><a href="index.html" target="_self">Home</a></li>
		<li><a href="not.html">Notification</a></li>
		<li><a href="#">Contact Us</a></li>
		
	</ul>

</div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>


</body>
</html>