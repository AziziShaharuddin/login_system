<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Log</title>
</head>
<body>
    <h1>This is dashboard</h1>
    <?php 
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            include './dbClass/db.php';
            include './modelClasses/adminModel.classes.php';
            include './controllerClasses/adminController.classes.php';

            $dashboard = new DashboardController($email, $password);

            $dashboard ->Dashboard();
        }
    ?>
</body>
</html>