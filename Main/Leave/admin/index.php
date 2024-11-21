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
    <title> Leave System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" type="images/png" href="favicon.png">
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
			background-color: transparent;
			color: #fff;
			border: 1px solid #fff;
		}

		.form-control:focus {
			background-color: #fff;
			color: #000;
		}

		.btn-success {
			display: block;
			width: 150px; /* Fixed width for the button */
			margin: 0 auto; /* Center the button */
			background-color: #03e9f4;
			border: none;
			color: #fff;
			padding: 10px;
			text-transform: uppercase;
			letter-spacing: 1px;
			cursor: pointer;
			transition: none; /* Disable transition effect */
		}
    </style>
</head>
<!-- header section strats -->
<header class="headerr_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
        <img src="./img/logo-blue.png" class="logo" alt="Logo"/>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php#About"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php#OUR SERVICES">Services</a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index.php#Contact US">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://hrms.claidas.org/Main/Front/index2.php#login">login</a>
            </li>
          </ul>
          <div class="quote_btn-container">
            <form class="form-inline">
              <!-- <button class="btn   nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i> -->
              </button>
            </form>
  
              </span>
            </a>
          </div>
        </div>
      </nav>
    </div>
    <script>
      let lastScrollTop = 0;
      const header = document.querySelector('.header_section');
    
      window.addEventListener('scroll', function() {
        let scrollDown = window.pageYOffset || document.documentElement.scrollDown;
    
        if (scrollDown > lastscrollDown) {
          // Scrolling down
          header.style.down = '-100%'; // Adjust this value based on the height of your header
        } else {
          // Scrolling up
          header.style.down = '0';
        }
        lastScrollDown = scrollDown;
      });
    </script>
    </header>
    
    
  <!-- end header section -->
  <style>
	.custom_nav-container {
    & .navbar-nav {
        right: -450px;
        position: relative;
        top: 10px;
		}
	}

.custom_nav-container {
    padding:15px 15px;
    margin: 0px 0px;
    color: rgb(247, 244, 244);
    text-align: center;
    text-transform: uppercase;
}
	img {
    vertical-align: middle;
    width: 244px;
    height: 66px;
	top:-20px;
	position: relative;
}

.custom_nav-container {
    padding: 2px 0px;
    width: 105%;
    right: 2%;
}
.custom_nav-container {
    padding: 2px 0px;
    width: 105%;
    right: 2%;
}
.custom_nav-container {
    padding: 10px 0;
    background-color: #ffffff;
}
.custom_nav-container .navbar-nav .nav-item .nav-link {
    padding: 5px 14px;
    margin: 33px 10px;
    color: #070707;
    text-align: center;
    text-transform: uppercase;
}
.custom_nav-container {
                padding: 11px 0px;
                margin: 0px -9px;
                color: rgb(247, 244, 244);
                text-align: center;
                text-transform: uppercase;
            }

@media (min-width: 992px) {
    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
}
.collapse:not(.show) {
    display: none;
}
.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-align: center;
    align-items: center;
}

  </style>


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
