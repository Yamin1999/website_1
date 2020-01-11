<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['submit'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT INTO users (username, email,password, trn_date)
VALUES ('$username','$email', '".md5($password)."','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login1.php'>Login</a></div>";
        }
    }else{
?>
<div class="login-box">
  <h1>Register</h1>
  <form action="registration.php" method="post" name="login1">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username" required>
  </div>

  <div class="textbox">
    <i class="fas fa-email"></i>
    <input type="text" placeholder="Email" name="email" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required>
  </div>

  <input name="submit" type="submit" class="btn" value="submit">
  </form>

</div>
<?php } ?>
</body>
</html>
