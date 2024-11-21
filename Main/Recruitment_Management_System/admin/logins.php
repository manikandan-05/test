<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Recruitment Management System</title>


  <link rel="stylesheet" href="style.css">

</head>

<body>


  <header class="headerr_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <img src="logo-blue.png" class="logo" />
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#OUR SERVICES">Services</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="#Contact US">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">login</a>
            </li>
          </ul>
          <div class="quote_btn-container">
            <form class="form-inline">
              </button>
            </form>

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


  <main id="main" class="bg">

    <div id="login">
      <div class="card col-md-8">
        <style>
          .card {
            position: absolute;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0px;
            word-wrap: break-word;
            background-color: black;
            opacity: 0.8;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 4.25rem;
          }

          .col-md-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 29.666667%;
            padding: 24px;
            left: 493px;
          }
        </style>
        <div class="card-body">
          <h2 class="h2">Recruitment Management System</h2>
          <style>
            .h2 {
              color: #fff;
              text-align: center;
              margin-bottom: 30px;
            }
          </style>
          <style>
						.h2{
							color: #fff;
							text-align: center;
							margin-bottom: 30px;
						}
				  </style>
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
						<style>
							.btn-primary {
								color: #fff;
								background-color: #419641;
								border-color: #419641;
							}
						</style>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button.length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>