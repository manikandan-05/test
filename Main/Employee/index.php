<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img src="pic.jpg" class="i">
  <style>
    .i{
      position: relative;
      max-width: 100%;
    }
    </style><div class="login-box">
    <h2>Login</h2>
    <form name="loginForm" action="index.php" method="post">
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <div class="form-group">
        <br>
        <input type="submit" name="login" id="login" class="btn btn-primary" value="Login">
      </div>
    </form>
  </div>
</body>
</html>


<?php
include('config.php');

if (isset($_POST['login'])) {  // Use $_POST instead of $POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";  // Use prepared statements for security

    $result = mysqli_query($conn, $sql);  // Store the query result in a variable
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        header('location:alogin.html');
    } else {
        echo "<h1>Username or password is wrong</h1>";
    }
}

?>