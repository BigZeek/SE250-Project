<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
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
            <h1 class = "title">Add/Drop</h1>
        <?php
            session_start();
            // Username from login saved for SQL query
            $student_username = $_SESSION['username'];
            
        
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
                    
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // Variables for SQL insert and delete statement
                $coursecode = htmlspecialchars($_POST["coursecode"]);
            }
            // Perform Add or Drop operation on database
            if(isset($_POST['Add'])){
                //Course added to student schedule
                $student_id = "SELECT ID FROM student
                    WHERE Login = '$student_username'";

                $id = $conn->query($student_id);
                $row = $id->fetch_assoc();

                // Convert $student_id to string type for SQL statement
                $id_string = (string)$row['ID'];                
            
                $sql = "INSERT INTO courseregistration
                    VALUES ($id_string, '$coursecode')";
               
                $result = $conn->query($sql);
            
                if($result == TRUE){
                echo "<span style= 'color:ghostwhite'>Course Added!</span>";
                echo "<br>";
                echo "<span style= 'color:ghostwhite'>Click View Schedule in the menu to view updated schedule.</span>";
                } else{
                echo "<span style='color:ghostwhite'>Add Failed!</span>";
                }
            
            } elseif(isset($_POST['Drop'])){
                // Course dropped from student schedule
                $student_id = "SELECT ID FROM student
                    WHERE Login = '$student_username'";

                $id = $conn->query($student_id);
                $row = $id->fetch_assoc();

                $id_string = (string)$row['ID'];
                
                $sql = "DELETE FROM courseregistration
                            WHERE CourseID = '$coursecode'
                            AND StudentID = $id_string";
            
                $result = $conn->query($sql);
                if($result == TRUE){
                    echo "<span style= 'color:ghostwhite'>Course Removed!</span>";
                    echo "<br>";
                    echo "<span style= 'color:ghostwhite'>
                        Click View Schedule in the menu to view updated schedule.</span>";
                } else{
                    echo "<span style='color:ghostwhite'>Remove Failed!</span>";
                    }
                }
                
        ?>
        </div>
    </div>
</body>
</html>