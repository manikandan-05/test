<?php
require_once ('process/dbh.php');

$sql = "SELECT employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token FROM employee, employee_leave WHERE employee.id = employee_leave.id ORDER BY employee_leave.token";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Leave</title>

    <!-- Vendor CSS -->
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">

    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* Header styling */
        #header {
            background-color: #1a4592;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 15rem;
            position: fixed;
            width: 100%;
            top: 0;
            left: 220px;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        #header .logo img {
            height: 50px;
            position: relative;
            right: 451px;
            top: 0px;
        }
        #header .user-profile {
            display: flex;
            align-items: center;
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
    position: fixed;
    top: 60px;
    left: 0;
    height: calc(100% - 60px);
    width: 200px;
    background-color: #f4f4f4;
    padding: 1rem;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    z-index: 100;
    color: black;
}

#sidebar ul {
    list-style-type: none;
    padding: 0;
}

#sidebar ul li {
    margin: 10px 0;
}

#sidebar ul li a {
    color: black;
    text-decoration: none;
    font-size: 1rem;
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

        h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #0A1172;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
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

        .btn2 {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            background-color: green;
            color: #fff;
            text-decoration: none;
            text-align: center;
            margin: 0rem auto;
        }

        .btn1 {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            background-color: red;
            color: #fff;
            text-decoration: none;
            text-align: center;
            margin: 0rem auto;
        }
        .btn2:hover {
            background-color: black;
        }

        .btn1:hover {
            background-color: black;
        }

        .btn-reset {
            float: right;
            margin-right: 1rem;
        }
        
    </style>
    </head>
<body>

<!-- Header -->
<header id="header">
    <div class="logo">
        <a href="aloginwel.php">
        <img src="process/images/claidas-logo-removebg-preview-20.png" alt="Company Logo">
    </a>
    </div>
    <div class="user-profile">
            <img src="img/Ramesh.jpg" alt="User Profile Picture" class="profile-pic">
            <div class="name">Ramesh P</div>
            <!-- <div class="dropdown-content">
                <a href="alogin.html">Logout</a>
            </div> -->
        </div>
</header>

<!-- Sidebar -->
<aside id="sidebar">
    <ul>
        <li><a href="aloginwel.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="addemp.php"><i class="fa fa-user-plus"></i> Add Employee</a></li>
        <li><a href="viewemp.php"><i class="fa fa-users"></i> View Employee</a></li>
        <li><a href="empleave.php"><i class="fa fa-calendar-check-o"></i> Employee Leave</a></li>
        <li><a href="alogin.html"><i class="fa fa-sign-out"></i> Log Out</a></li>
    </ul>
</aside>

<!-- Main Content -->
<div id="main-content">
    <h2>Employee Leave</h2>
    <table>
        <tr>
            <th>Emp. ID</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Reason</th>
            <th>Status</th>
            <th>Options</th>
        </tr>

        <?php
            while ($employee_leave = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$employee_leave['id']."</td>";
                echo "<td>".$employee_leave['firstName']." ".$employee_leave['lastName']."</td>";
                echo "<td>".$employee_leave['start']."</td>";
                echo "<td>".$employee_leave['end']."</td>";
                echo "<td>".$employee_leave['reason']."</td>";
                echo "<td>".$employee_leave['status']."</td>";
                echo "<td>
                    <a href='approve_leave.php?token=".$employee_leave['token']."' class='btn2'>Approve</a>
                    <a href='reject_leave.php?token=".$employee_leave['token']."' class='btn1' onClick=\"return confirm('Are you sure you want to reject this leave?')\">Reject</a>
                </td>";
                echo "</tr>";
            }
            ?>
    </table>
</div>

</body>
</html>
