<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
	</head>
  <body>
  <?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_REQUEST['submit'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login1.php'>Login</a></div>";
 }
    }else{
?>
<div class="login-box">
  <h1>Login</h1>
  <form action="login1.php" method="post" >
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
  </div>

  <input name="submit" type="submit" class="btn" value="submit">
  </form>
  <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>

  </body>
</html>
