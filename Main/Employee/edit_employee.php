<?php
require_once('process/dbh.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM employee WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $department = $_POST['dept'];

    $updateQuery = "UPDATE employee SET firstName='$firstName', lastName='$lastName', email='$email', designation='$designation', birthday='$birthday', gender='$gender', contact='$contact', address='$address', dept='$department' WHERE id='$id'";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Record updated successfully!";
        header("Location: viewemp.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>

<h2>Edit Employee Information</h2>

<form method="POST" action="edit_employee.php">
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

    First Name: <input type="text" name="firstName" value="<?php echo $employee['firstName']; ?>"><br>
    Last Name: <input type="text" name="lastName" value="<?php echo $employee['lastName']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $employee['email']; ?>"><br>
    Designation: <input type="text" name="designation" value="<?php echo $employee['designation']; ?>"><br>
    Birthday: <input type="date" name="birthday" value="<?php echo $employee['birthday']; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $employee['gender']; ?>"><br>
    Contact: <input type="text" name="contact" value="<?php echo $employee['contact']; ?>"><br>
    Address: <input type="text" name="address" value="<?php echo $employee['address']; ?>"><br>
    Department: <input type="text" name="department" value="<?php echo $employee['dept']; ?>"><br>

    <button type="submit">Update Employee</button>
</form>
<style>
    /* Reset some default styles */
body, h2, form {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

/* Form container */
form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: auto;
}

/* Input fields */
input[type="text"],
input[type="email"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Button */
button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

/* Responsive Design */
@media (max-width: 600px) {
    body {
        padding: 10px;
    }

    form {
        padding: 15px;
    }

    button {
        font-size: 14px;
    }
}
</style>

</body>
</html>
