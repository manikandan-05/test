<?php
// Database connection details
$servername = "localhost"; // Replace with your server name
$Username = "root"; // Replace with your database username
$Password = ""; // Replace with your database password
$dbname = "loginpage"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $Username, $Password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get form data
    $user = $_POST['Username'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];

    // Check if the username or email already exists
   

        // Insert the new user into the database
        $sql = "INSERT INTO login (Username,Email,Password) VALUES ('$user','$email','$pass')";

        if (mysqli_query($conn, $sql)) {
            echo '<meta http-equiv="refresh" content="0.5;url=frontend9.html">';
            // header("Location: index.html");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }


// Close the connection
mysqli_close($conn);
?>
