<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Attendance and Payroll System</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  	<!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* Header styling */
        #header {
            background-color: #1a4592;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.6rem 15rem;
            position: fixed;
            width: 100%;
            top: -22px;
            left: 220px;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        #header .logo img {
          height: 50px;
          position: relative;
          right: 361px;
          top: 9px;
        }
        #header .user-profile {
            display: flex;
            align-items: center;
            position: relative;
            top: 11px;
            right: 89px;
            font-size: 1.6rem;
        }
        #header .profile-pic {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        #header .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        #header .user-profile:hover .dropdown-content {
            display: block;
        }
        #header .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        #header .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Sidebar styling */
        /* Sidebar styling */
#sidebar {
    position: fixed; /* Fixed position to keep it in place */
    top: 60px; /* Adjust based on your header height */
    left: 0;
    height: calc(100% - 60px); /* Full height below the header */
    width: 200px; /* Adjust based on your design */
    background-color: #f4f4f4; /* Background color for the sidebar */
    padding:  1.5rem; /* Padding inside the sidebar */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Optional shadow for depth */
    overflow-y: auto; /* Enable vertical scrolling */
    z-index: 100; /* Ensure it's on top */
}
.sidebar-menu {
    max-height: calc(100% - 1rem); /* Adjust as needed */
}

#sidebar ul {
    list-style: none; /* Remove default list styles */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
}

#sidebar ul li {
    margin-bottom: 10px; /* Space between menu items */
}
#sidebar a {
    text-decoration: none; /* Remove underline from links */
    color: black; /* Text color */
    display: flex; /* Flexbox for icon and text */
    align-items: center; /* Center vertically */
}
#sidebar a i {
    margin-right: 10px; /* Space between icon and text */
}

#sidebar ul li a {
    color: black;
    text-decoration: none;
    font-size: 1.6rem;
    padding: 10px;
    display: flex;
    align-items: center; /* Align text and icon vertically */
    border-radius: 5px;
    transition: background-color 0.3s;
}

#sidebar ul li a i {
    margin-right: 10px; /* Space between icon and text */
    min-width: 20px; /* Ensure all icons take the same space */
    text-align: center;
}

#sidebar ul li a:hover {
    background-color: #333;
    color: white;
}

        /* Main content styling */
        #main-content {
            margin-left: 220px;
            padding: 2rem;
            padding-top: 80px;
            background-color: #d2d6de;
            min-height: 100vh;
        }
		.container{
			      width: 1000px;
            max-width: 100%;
            position: relative;
            left: -3px;
    	    	top: 6px;
		}

        h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #0A1172;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #d2d6de;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #1a4592;
            color: #fff;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            text-align: center;
            margin: 1rem auto;
        }
        .btn:hover {
            background-color:black;
            color:  #fff;
        }
        .content-wrapper{
          width: 1043px;
          max-width: 100%;
          position: relative;
          left: -10px;
    		  top: 60px;
          background-color:#d2d6de
        }

        .btn-reset {
            float: right;
            margin-right: 1rem;
        }
    </style>
  </head>
  <body>
  <header id="header">
        <div class="logo">
            <img src="logo-blue.png" alt="Company Logo">
        </div>
        <div class="user-profile">
        <img src="../images/Ramesh.jpg" alt="User Profile Picture" class="profile-pic">
            <div class="name">Ramesh P</div>
            <!-- <div class="dropdown-content">
                <a href="index.php">Logout</a>
            </div> -->
        </div>
    </header>

    <aside id="sidebar">
        <ul>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
        <li><a href="employee.php"><i class="fa fa-users"></i> Employee List</a></li>
        <li><a href="http://hrms.claidas.org/Main/Payroll_and_Attendance_system/index.php"><i class="fa fa-clock-o"></i>Time in/Out</a></li>
        <li><a href="cashadvance.php"><i class="fa fa-money"></i> Cash Advance</a></li>
        <li><a href="schedule.php"><i class="fa fa-calendar"></i> Schedules</a></li>
        <li><a href="deduction.php"><i class="fa fa-file-text"></i> Deductions</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Schedule</span></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
        </ul>
    </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Payment Parameters
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Payment Details</h3>
            </div>
            <div class="box-body">
              <form class="w3-container" action="Salary Details.php" method="post">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Field</th>
                      <th>Input</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Employee ID</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="empid" required></td>
                    </tr>
                    <tr>
                      <td><label>Employee Name</label></td>
                      <td><input class="w3-input w3-light-grey" type="text" name="name" required></td>
                    </tr>
                    <tr>
                      <td><label>Department ID</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="depid" required></td>
                    </tr>
                    <tr>
                      <td><label>Select Year</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="year" required></td>
                    </tr>
                    <tr>
                      <td><label>Select Month</label></td>
                      <td>
                        <select class="w3-input w3-light-grey" name="month" required>
                          <option value="january">January</option>
                          <option value="february">February</option>
                          <option value="march">March</option>
                          <option value="april">April</option>
                          <option value="may">May</option>
                          <option value="june">June</option>
                          <option value="july">July</option>
                          <option value="august">August</option>
                          <option value="september">September</option>
                          <option value="october">October</option>
                          <option value="november">November</option>
                          <option value="december">December</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Absence</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="absence" value="0"></td>
                    </tr>
                    <tr>
                      <td><label>Basic Pay</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="basicPay" required></td>
                    </tr>
                    <tr>
                      <td><label>Overtime</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="overtime" value="0"></td>
                    </tr>
                    <tr>
                      <td><label>Seasonal Bonus</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="sbonus" value="0"></td>
                    </tr>
                    <tr>
                      <td><label>Other Bonus</label></td>
                      <td><input class="w3-input w3-light-grey" type="number" name="obonus" value="0"></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-hover-blue"></td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/w3.js"></script>
<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
</body>
</html>
