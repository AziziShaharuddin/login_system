<?php
    session_start();
    // include './modelClasses/userloginModel.classes.php';
    // include './dbClass/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        #container {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input {
            margin-bottom: 10px;
        }
        button {
            margin-bottom: 10px;
        }
        .admin > button {
            isplay: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            text-align:left;
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="user">
            <form action="userlogin.php" method="post">
                <h3>Login</h3>
                <p>Please fill in the details</p>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <button type="submit" name="submit">Clock In</button><br>
                <!-- to try to include alert successful -->
            </form>
        </div>
        <div class="admin">
            <form action="dashboard.php" method="post">
                <h3>Admin?</h3>
                <p>Please log in here</p>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <button type="submit" name="submit">View</button>
            </form>
        </div>
    </div>
    
</body>
</html>