<?php
require_once('process/dbh.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM employee WHERE id='$id'";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "Record deleted successfully!";
        header("Location: viewemp.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
