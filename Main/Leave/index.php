<?php 
if(isset($_POST['login'])){
    $user = $_POST['email'];
    $password = md5($_POST['password']);

    include 'inc/config.php';
    $sql = "SELECT * FROM admin WHERE email = '$user' AND password = '$password'";
    $run = mysqli_query($con, $sql);
    $check = mysqli_num_rows($run);

    if($check == 1){
        session_start();
        $_SESSION['email'] = $user;
        echo "<script>window.open('dashboard.php','_self');</script>";
    } else {
        echo "<script>
        alert('Email or Password Invalid');
        window.open('index.php','_self');
        </script>";
    }
}
include('inc/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Leave System</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url("pic.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 90%;
            max-width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .container h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 25px;
        }

        .input-group-addon {
            background-color: transparent;
            color: #fff;
        }

        .form-control {
            background-color: transparent !important;
            color: #fff !important;
            border: 1px solid #fff !important;
            box-shadow: none !important;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .form-control:focus {
            background-color: #fff !important;
            color: #000 !important;
            border-color: #fff !important;
        }

        .btn-success {
            display: block;
            width: 150px;
            margin: 0 auto;
            background-color: #03e9f4;
            border: none;
            color: #fff;
            padding: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: none;
        }
    </style>
</head>
<body>
    <div class="container contact">
        <h2>Leave Management</h2>
        <form id="login-box" class="form-horizontal" role="form" method="POST" action="">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-success">
            </div>
        </form>
    </div>
	<?php include('inc/footer.php');?>
</body>
</html>
