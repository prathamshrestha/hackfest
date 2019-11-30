<?php 

session_start();
session_destroy();
 ?>

<!DOCTYPE html>
<html>
<head>
    
      <title>Sign Up Form</title>
      <script src="jquery.js"></script>

  </head>
  <body>


    <form action="register.php" method="post">

     
      <h1>Sign Up</h1>
      <h3>All value are compulsory.</h3>
      <h3>Already has an account? <a href="loginpage.php">Log on</a></h3>

      <fieldset>
        
        <label for="username">Userame:</label>
        <input type="text" id="Username" name="username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" onkeyup="passcheck();">

         <label for="confpassword">Confirm Password:</label>
        <input type="password" id="confpassword" name="confpassword"  onkeyup="passcheck();">

        <h5 id="passcheck"></h5>

        <label>Select Your Sex:</label>
        <input type="radio" id="sex" value="Male" name="sex">Male
       <input type="radio" id="sex" value="Female" name="sex">Female
       <input type="radio" id="sex" value="others" name="sex">others

        <label for="mobileno">Email:</label>
        <input type="text" id="email" name="email">
      <h3>
        <?php 
          if (@$_GET['message']==true) {
            echo($_GET['message']);
          }
        

         ?>
      </h3>

      </fieldset>

          
      <button type="submit" style="cursor: pointer;">Sign Up</button>
    </form>

  </body>
</html>


<script type="text/javascript">

function passcheck(){
  
  if (($('#password').val()!='')&&($('#confpassword').val()!=='')) {

    if( $('#password').val()  == $('#confpassword').val() ){
      $('#passcheck').html("Ok! Matched!!!");
    }else{
      $('#passcheck').html("Password didn't matched!!!");
    }
  }
}

</script>


<style type="text/css">
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}



form {
  max-width: 300px;
  margin: auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 10px;
}

h1,h2,h3,h4,h5{
  text-align: center;
}

input[type="text"],
input[type="password"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height:25px;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 15px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 25px;
  border-radius: 30px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
}

fieldset {
  margin-bottom: 10px;
  border: none;
}



label {
  display: block;
  
}

label.light {
  font-weight: 300;
  display: inline;
}


@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

</style>