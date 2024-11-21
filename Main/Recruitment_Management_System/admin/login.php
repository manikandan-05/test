<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin | Recruitment Management System</title>
  <link rel="stylesheet" href="style.css">

  <style>
    /* General styling */

	  body {
            margin: 0;
            padding: 0;
            background: url("pic.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
        }
    

    /* Header styling */
    .header {
      width: 100%;
      background-color: #fff;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 13px 8px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
    }

    .header .logo {
      height: 50px;
    }

    /* Navigation links */
    .nav-links {
  display: flex;
  gap: 20px;
}

.nav-links a {
  color: #000; /* Black color */
  text-decoration: none;
  padding: 8px 12px;
  font-size: 14px; /* Set font size */
  text-transform: uppercase; /* Transform text to uppercase */
}

	.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background-color: #ffffff;
}

nav {
    display: block;
    unicode-bidi: isolate;
}

	.nav-item {
            margin-left: 20px;
        }


    .nav-links a:hover {
      background-color: #575757;
      border-radius: 5px;
    }
	.login-logo b {
    color: #fff;
    text-align: center;
    display: block;
    margin-bottom: 30px;
}


    /* Content area */
    .content {
      margin-top: 80px; /* Adjust for fixed header height */
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 80px);
    }

    /* Login Card */
    .card {
      background-color: black;
      opacity: 0.85;
      color: #fff;
      padding:  40px;
      border-radius: 8px;
      width: 300px; /* Make it more rectangular */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
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

    .card h2 {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #fff;
    }

    .form-control {
    width: 100%;
    padding: 10px;
    background-color: transparent;
    color: #fff;
    border: 1px solid #fff;
    box-sizing: border-box;
}

	.btn-primary {
    display: block;
    width: 50%;
    margin: 20px auto 0;
    background-color: #28a745;
    border: none;
    color: #fff;
    padding: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    font-size: 14px;
    border-radius: 5px;
}

    .btn-primary:hover {
      background-color: #367a37;
    }
  </style>
</head>

<body>
  <!-- Horizontal header -->
  <header class="header">
    <img src="logo-blue.png" class="logo" alt="Logo" />
    <nav class="nav-links">
      <a href="http://hrms.claidas.org/Main/Front/index.php">Home</a>
      <a href="http://hrms.claidas.org/Main/Front/index.php#About">About</a>
      <a href="http://hrms.claidas.org/Main/Front/index.php#OUR%20SERVICES">Services</a>
      <a href="http://hrms.claidas.org/Main/Front/index.php#Contact%20US">Contact Us</a>
      <a href="http://hrms.claidas.org/Main/Front/index2.php">Login</a>
    </nav>
  </header>

  <!-- Content section -->
  <div class="content">
    <div id="login">
      <div class="card">
        <h2>Recruitment Management System</h2>
        <form id="login-form">
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
    </div>
  </div>

  <!-- jQuery and JavaScript for handling login form -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#login-form').submit(function (e) {
        e.preventDefault();
        const $btn = $(this).find('button[type="submit"]');
        $btn.attr('disabled', true).text('Logging in...');

        $.ajax({
          url: 'ajax.php?action=login',
          method: 'POST',
          data: $(this).serialize(),
          error: function (err) {
            console.log(err);
            $btn.removeAttr('disabled').text('Login');
            $('#login-form').prepend('<div class="alert alert-danger">An error occurred. Please try again.</div>');
          },
          success: function (resp) {
            if (resp == 1) {
              window.location.href = 'index.php?page=home';
            } else if (resp == 2) {
              window.location.href = 'voting.php';
            } else {
              $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>');
              $btn.removeAttr('disabled').text('Login');
            }
          }
        });
      });
    });
  </script>
</body>
</html>
