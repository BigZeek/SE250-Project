<?php
session_start();
// Establish database connection
$servername = "127.0.0.1:3307"; 
$username = "root"; 
$password = ""; 
$dbname = "se250"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Query the database for the user
    $sql = "SELECT * FROM student WHERE Login='$input_username' AND Pass='$input_password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Valid credentials
        $_SESSION['username'] = $input_username;
        // Redirect to home page
        header("Location: home.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }
}

$conn->close();
?>
