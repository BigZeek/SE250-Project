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
    <a href="logout.php">Logout</a>
    </div>

    <div class = "content-container">
        <div class = "main-content">
            <h1 class="title">Course Search</h1>
            <p style='color: ghostwhite'>Enter course info to search, or leave blank to view entire catalog.</p>

        <form action="search_results.php" method="post">
            
        <label for="department">Department:</label>
        <input type="text" name="department" id="department" value='' placeholder="e.g. Software Engineering">
        
        <label for="coursecode">Course ID:</label>
        <input type="text" name="coursecode" id="coursecode" value='' placeholder="e.g. SE250">
        
        <label for="coursename">Course Name:</label>
        <input type="text" name="coursename" id="coursename" value='' placeholder="e.g. Introduction to Software Engineering">
        
        <label for="semester">Semester:</label>
        <select name="semester" id="semester">
            <option value=''></option>
            <option value="Spring23">Spring23</option>
            <option value="Fall23">Fall23</option>
            <option value="Summer24">Summer24</option>
            <option value="Fall24">Fall24</option>
            <option value="Spring24">Spring24</option>
        </select>
        
        <input type="submit" value="Search">
    </form>
        </div>
    </div>
</body>
</html>
