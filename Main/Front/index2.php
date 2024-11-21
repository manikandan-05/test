<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .input-field {
            margin-bottom: 20px;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<script>
	function goToNewPage() {
		// Redirect to the new page
		window.location.href = "frontend8.html";
	}
</script>



<body>

    <?php
    // Display error message if it exists
    if (isset($_SESSION['error'])) {
        echo "<p class='error-message'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']); // Clear error after displaying
    }
    ?>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Login Form -->
                <form action="login.php" method="POST" class="sign-in-form"> <!-- Updated action and method -->
                    <div class="image-container">
                        <img src="favicon.png" alt="Signup Image" class="center-image">
                    </div>
                    <h6 class="title">Sign in</h6>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Username" placeholder="Username" required /> <!-- Added name attribute -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" required /> <!-- Added name attribute -->
                    </div>
                    <input type="submit" value="Sign in" class="btn solid" />
                    <!-- <p class="social-text">Our Social platforms</p>
                    <div class="social-media">
                        <a href="https://www.instagram.com/claidas_technologies/profilecard/?igsh=MXY4NWJybHM1MjlnNQ%3D%3D" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.claidas.com/" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/claidas-tech/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div> -->
                </form>

                <!-- Signup Form -->
                <form action="registration.php" method="POST" class="sign-up-form"> <!-- Added action for signup -->
                    <div class="image-container">
                        <img src="favicon.png" alt="Signup Image" class="center-image">
                    </div>
                    <h6 class="title">Sign up</h6>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Username" placeholder="Username" required /> <!-- Added name attribute -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" required /> <!-- Added name attribute -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" required /> <!-- Added name attribute -->
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <!-- <p class="social-text">Our Social platforms</p>
                    <div class="social-media">
                        <a href="https://www.instagram.com/claidas_technologies/profilecard/?igsh=MXY4NWJybHM1MjlnNQ%3D%3D" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.claidas.com/" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/claidas-tech/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div> -->
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>HRMS </h3>
                    <p>
                        An HRMS streamlines and automates HR tasks <br>  like employee records, payroll, and recruitment.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>HRMS </h3>
                    <p>
                        An HRMS streamlines and automates HR tasks <br>  like employee records, payroll, and recruitment.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>
 