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
$Subscribed = $_POST['Subscribed'];


// Prepare and execute the SQL statement
$sql = "INSERT INTO subscribed_form_data (Subscribed) VALUES ('$Subscribed')";

if ($conn->query($sql) === TRUE) {
    
    header("Location: frontend4.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>