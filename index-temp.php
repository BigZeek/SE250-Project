<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            /* Center the form container */
            .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Style the form elements */
        form {
            text-align: center;
            padding: 20px;
            border: 10px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            margin: 10px;
            width: 90%;
            padding: 10px;
        }
    </style>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Welcome to the Registration Portal!</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>