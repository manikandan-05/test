<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $mobile_no = $_POST['mobile_no'];
  $password = $_POST['password'];

//   $otp = rand(1000, 9999);


  $sql = "SELECT * FROM users WHERE  email = '$email' AND mobile_no = '$mobile_no' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Successful login
    header("Location: index.php"); // Replace with your home page
    exit();
  } else {
    echo "Invalid username or password.";
  }
}

mysqli_close($conn);
?>