<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css"
</head>
<body>
    <div class = "content-container">
        <div class = "main-content">
        <h1 class = "title">Search Results</h1>
    <?php
        session_start();
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve and sanitize search inputs
            $department = htmlspecialchars($_POST["department"]);
            $coursecode = htmlspecialchars($_POST["coursecode"]);
            $coursename = htmlspecialchars($_POST["coursename"]);
            $semester = htmlspecialchars($_POST["semester"]);

            // Build SQL query to search database
            $sql = "SELECT * FROM course WHERE 1=1";

            if (!empty($_POST['department'])) {
                $department = $_POST['department'];
                $sql .= " AND Department LIKE '%$department%'";
            }
            if (!empty($_POST['coursecode'])) {
                $coursecode = $_POST['coursecode'];
                $sql .= " AND ID = '$coursecode'";
            }
            if (!empty($_POST['coursename'])) {
                $coursename = $_POST['coursename'];
                $sql .= " AND ClassName LIKE '%$coursename%'";
            }
            if (!empty($_POST['semester'])) {
                $semester = $_POST['semester'];
                $sql .= " AND Semester = '$semester'";
            }
            
// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display table header
    echo "<div class='table-container'>";
    echo "<table border='1'>
            <tr>
                <th style='color: white'>Course ID</th>
                <th style='color: white'>Name</th>
                <th style='color: white'>Department</th>
                <th style='color: white'>Semester</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display table rows with results
        echo "<tr>
                <td style='color: white'>" . $row["ID"] . "</td>
                <td style='color: white'>" . $row["ClassName"] . "</td>
                <td style='color: white'>" . $row["Department"] . "</td>
                <td style='color: white'>" . $row["Semester"] . "</td>
            </tr>";
    }
    // Close the table div
    echo "</div>";
    // Close the table
    echo "</table>";
        } 
        
        else {
            echo "<span style = 'color:ghostwhite;'>No results found.</span>";
        }

        $conn->close();
    }
    ?>
        </div>
    </div>
<!-- Verical Menu -->
<div class="vertical-menu">
        <a href="home.php" class="active">Home</a>
        <a href="search.php">Course Search</a>
        <a href="view_schedule.php">View Schedule</a>
        <a href="modify.php">Add/Drop</a>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
