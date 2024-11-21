<?php
require_once('process/dbh.php');

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Update the database status to 'Rejected'
    $sql = "UPDATE employee_leave SET status='Rejected' WHERE token='$token'";

    if (mysqli_query($conn, $sql)) {
        // Fetch the employee details to display in the alert
        $employee_sql = "SELECT employee.firstName, employee.lastName FROM employee, employee_leave WHERE employee.id = employee_leave.id AND employee_leave.token='$token'";
        $result = mysqli_query($conn, $employee_sql);
        $employee = mysqli_fetch_assoc($result);
        $employee_name = $employee['firstName'] . ' ' . $employee['lastName'];

        echo "<script>alert('Leave Rejected for $employee_name'); window.location.href = 'empleave.php';</script>";
    } else {
        echo "<script>alert('Error rejecting leave'); window.location.href = 'empleave.php';</script>";
    }
}
?>
