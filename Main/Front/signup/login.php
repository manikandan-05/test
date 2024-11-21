<?php
// Database connection details
$servername = "localhost"; // Replace with your server name
$Username = "root"; // Replace with your database username
$Password = ""; // Replace with your database password
$dbname = "loginpage"; // Your database name

// Create connection
$conn =  mysqli_connect($servername, $Username, $Password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sample data for login (replace with actual data from user input)
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['Username'];
    $pass = $_POST['Password'];

    // Prepare and bind the SQL statement to prevent SQL injection
    $sql = "SELECT * FROM login WHERE Username = '$user' AND Password = '$pass'";
    $result = mysqli_query($conn, $sql);

    // Check if any row was found
    if (mysqli_num_rows($result) > 0) {

        // Add the redirection logic
        echo '<meta http-equiv="refresh" content="0.5;url=frontend.html">';
    } else {
        echo "Invalid Username or Password. Please try again.";
    }
}

// Close the connection
mysqli_close($conn);
?>
