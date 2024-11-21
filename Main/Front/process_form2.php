<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_data";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$mail_id = $_POST['mail_id'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Prepare and execute the SQL statement
$sql = "INSERT INTO Connect_form_data (name, mail_id, subject, message) VALUES ('$name', '$mail_id', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>