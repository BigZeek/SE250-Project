<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add/Drop</title>
    <meta charset="UTF-8">
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
            <h1 class="title">Add/Drop</h1>
            <span style = "color:ghostwhite">Enter Course Code to Add or Drop</span>
            <form action="verify.php" method="post">

                <label for="coursecode">Course Code:</label>
                <input type="text" name="coursecode" id="coursecode" placeholder="e.g. SE250">

                <input type="submit" value="Add" name="Add">
                <input type="submit" value="Drop" name="Drop">
            </form>
        </div>
    </div>
    
</body>
</html>