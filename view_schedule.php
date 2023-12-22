<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <title>View Schedule</title>
</head>
<body>
    <div class="vertical-menu">
        <a href="home.php" class="active">Home</a>
        <a href="search.php">Course Search</a>
        <a href="view_schedule.php">View Schedule</a>
        <a href="modify.php">Add/Drop</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class = "content-container">
        <div class = "main-content">
            <h1 class="title">View Schedule</h1>

        <?php
            // Start session to use global username variable
            session_start();
            $student_username = $_SESSION['username']; // Store username from login to variable
            
            // Database connection details
            $servername = "127.0.0.1:3307";
            $username = "root";
            $dbname = "se250";
            $password = "";

            // Create a database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query database for course schedule
            // Query uses login name to search database table
            $sql = "SELECT * FROM courseregistration
                JOIN course ON CourseID = ID
                WHERE StudentID = (
                    SELECT ID FROM student
                        WHERE Login = '$student_username')";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                    // Display table header
            echo "<div class='table-container'>";
            // Build table
            echo "<table border='1'>
                    <tr>
                <th style='color: white'>Course ID</th>
                <th style='color: white'>Name</th>
                <th style='color: white'>Department</th>
                <th style='color: white'>Semester</th>
            </tr>";
            
            // Fill table with data from SQL query
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['CourseID'] . "</td>";
                echo "<td>" . $row['ClassName'] . "</td>";
                echo "<td>" . $row['Department'] . "</td>";
                echo "<td>" . $row['Semester'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "<span style='color: ghostwhite'>No Schedule Found</span>";
        }
        $conn->close();
        ?>
        </div>
    </div>
</body>