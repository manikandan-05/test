<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="—Pngtree—hexagonal abstract background with a_13478711.jpg" class="i">
  <style>
    .i{
      position: relative;
      max-width: 100%;
    }
    </style>
  <div class="login-box">
    <h2>Login</h2>
    <form name="loginForm" action="index2.php" method="post">
      <div class="user-box">
        <input type="text" name="email" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <div class="f">
        <br>
        <input type="submit" name="login" id="login" class="btn btn-primary btn-lg" value="Login">
      </div>
      <style>
      .f {
          position: relative;
          display: inline-block;
          padding: 10px 20px;
          color: #03e9f4;
          font-size: 16px;
          text-decoration: none;
          text-transform: uppercase;
          overflow: hidden;
          transition: .5s;
          margin-top: 40px;
          letter-spacing: 4px;
      }
       .f:hover{
          background-color: #03e9f4;
          color: #fff;
          border-radius: 5px;
          box-shadow: 0 0 5px #03e9f4,
                      0 0 25px #03e9f4,
                      0 0 50px #03e9f4,
                      0 0 100px #03e9f4;
      }
      </style>
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
        header('location:dashboard.php');
    } else {
        echo "<h1>Username or password is wrong</h1>";
    }
}

?>