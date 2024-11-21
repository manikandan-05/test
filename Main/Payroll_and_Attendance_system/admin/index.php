<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" type="images/png" href="favicon.png">

    <style>
        /* Adjusted styles for better alignment and sizing */
        body {
            margin: 0;
            padding: 0;
            background: url("pic.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 90%;
            max-width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .login-logo b {
            color: #fff;
            text-align: center;
            display: block;
            margin-bottom: 30px;
        }

        .login-box-msg {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            background-color: transparent;
            color: #fff;
            border: 1px solid #fff;
            box-sizing: border-box;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .form-control:focus {
            background-color: #fff;
            color: #000;
            border-color: #fff;
        }

        /* Adjustments to the sign-in button */
        .btn-primary {
            display: block;
            width: 50%; /* Smaller width */
            margin: 20px auto 0; /* Center it horizontally */
            background-color: #28a745; /* Green color */
            border: none;
            color: #fff;
            padding: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            font-size: 14px; /* Slightly smaller font */
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .callout.callout-danger {
            background-color: rgba(255, 0, 0, 0.7);
            color: white;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .glyphicon {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #bbb;
        }

        /* Styling the header */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #ffffff;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            vertical-align: middle;
            width: 180px;
            height: auto;
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-left: 20px;
        }

        .nav-link {
            text-transform: uppercase;
            color: #070707;
            text-decoration: none;
            font-size: 14px;
            padding: 5px 10px;
        }

        .nav-link:hover {
            color: #28a745;
        }

        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                text-align: center;
            }

            .nav-item {
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>

    <!-- Header section starts -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <img src="logo.png" class="logo" alt="Logo"/>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php#About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php#OUR%20SERVICES">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php#Contact%20US">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index2.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header section -->

    <div class="login-box">
        <div class="login-logo">
            <b>Payroll Management System</b>
        </div>

        <div class="login-box-body">

            <form action="login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Input Username" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Input Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <!-- Centered and smaller green sign-in button -->
                <button type="submit" class="btn btn-primary" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
            </form>
        </div>

        <!-- Error display block -->
        <?php
            if(isset($_SESSION['error'])){
                echo "
                    <div class='callout callout-danger'>
                        <p>".$_SESSION['error']."</p>
                    </div>
                ";
                unset($_SESSION['error']);
            }
        ?>
    </div>

    <!-- Scripts include -->
    <?php include 'includes/scripts.php' ?>
</body>
</html>
