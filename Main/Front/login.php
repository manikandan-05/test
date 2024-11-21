<?php
// Start session to store error messages
session_start();

// Database connection details
$servername = "localhost"; // Replace with your server name
$Username = "root"; // Replace with your database username
$Password = ""; // Replace with your database password
$dbname = "loginpage"; // Your database name

// Create connection
$conn = new mysqli($servername, $Username, $Password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data for login (replace with actual data from user input)
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['Username'];
    $pass = $_POST['Password'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM login WHERE Username = ? AND Password = ?");
    $stmt->bind_param("ss", $user, $pass); // "ss" means both parameters are strings

    // Execute query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any row was found
    if ($result->num_rows > 0) {
        // Successful login
        echo '<meta http-equiv="refresh" content="0.5;url=frontend8.html">';
        exit();
    } else {
        // Invalid login, set an error message and redirect to the login page
        $_SESSION['error'] = "Incorrect username or password.";
        header("Location: index2.php");
        exit();
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
