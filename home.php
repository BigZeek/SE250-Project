<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>

    <p><?php
    session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "username" field was submitted in the form
    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        
        // Check if the username is not empty
        if (!empty($username)) {
            // Use the username for a greeting
            $greeting = "Hello, " . $username . "!";
            echo "<div class = 'message'>";
            echo "<span style = 'color:#00A19C;'>$greeting</span>";
            echo"</div>";
        } else {
            // Handle the case where the username is empty
            echo "<span style = 'color:#00A19C;'>Welcome Back!</span>";
        }
    } else {
        // Handle the case where the "username" field is not set
        echo "Username field is missing in the form.";
    }
} else {
    // Handle the case where the form was not submitted via POST
    echo "<div class = 'message'>";
    echo "<span style = 'color:#00A19C;'>Welcome Back!</span>";
    echo"</div>";
}
?>
</p>
    <div class="vertical-menu">
      <a href="home.php" class="active">Home</a>
      <a href="search.php">Course Search</a>
      <a href="view_schedule.php">View Schedule</a>
      <a href="modify.php">Add/Drop</a>
      <a href="logout.php">Logout</a>
    </div>
    
    <div class = "content-container">
        <div class = "main-content">
            <span style = "color:ghostwhite">Welcome to Online Registration!</span>
        </div>
    </div>
</body>
</html>