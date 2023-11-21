<!DOCTYPE html>
<html>
<head>
    <title>Course Search</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>

    <div class="vertical-menu">
    <a href="home.php" class="active">Home</a>
    <a href="search.php">Course Search</a>
    <a href="view_schedule.php">View Schedule</a>
    <a href="modify.php">Add/Drop</a>
    <a href="index.html">Logout</a>
    </div>

    <div class = "content-container">
        <div class = "main-content">
            <h1 class="title">Course Search</h1>
        <form action="search_results.php" method="post">
        <label for="department">Department:</label>
        <input type="text" name="department" id="department">
        
        <label for="coursecode">Course Code:</label>
        <input type="text" name="coursecode" id="coursecode">
        
        <label for="professor">Professor:</label>
        <input type="text" name="professor" id="professor">
        
        <label for="semester">Semester:</label>
        <select name="semester" id="semester">
            <option value="Spring">Spring</option>
            <option value="Fall">Fall</option>
            <option value="Summer">Summer</option>
        </select>
        
        <input type="submit" value="Search">
    </form>
        </div>
    </div>
</body>
</html>
