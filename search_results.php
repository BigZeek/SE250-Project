<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize search inputs
        $department = htmlspecialchars($_POST["department"]);
        $coursecode = htmlspecialchars($_POST["coursecode"]);
        $professor = htmlspecialchars($_POST["professor"]);
        $semester = htmlspecialchars($_POST["semester"]);

        // Database connection details
        $servername = "your_servername";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database_name";

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Build and execute a SQL query based on the provided criteria
        $sql = "SELECT * FROM courses WHERE 
                (department LIKE '%$department%') AND
                (coursecode LIKE '%$coursecode%') AND
                (professor LIKE '%$professor%') AND
                (semester = '$semester')";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the results in a table
            echo "<table border='1'>";
            echo "<tr><th>Department</th><th>Course Code</th><th>Professor</th><th>Semester</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["department"] . "</td><td>" . $row["coursecode"] . "</td><td>" . $row["professor"] . "</td><td>" . $row["semester"] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No results found.";
        }

        $conn->close();
    }
    ?>

<div class="vertical-menu">
        <a href="home.php" class="active">Home</a>
        <a href="search.php">Course Search</a>
        <a href="view_schedule.php">View Schedule</a>
        <a href="modify.php">Add/Drop</a>
        <a href="index.html">Logout</a>
    </div>

    <div class = "content-container">
        <div class = "main-content">
            <span style = "color:ghostwhite">Search Results</span>
        </div>
    </div>
</body>
</html>
