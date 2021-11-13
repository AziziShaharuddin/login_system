<?php
//the file that receives the data wehn submitting the form

//isset is used to check if theres any value being passed in the variable
if(isset($_POST["submit"])) {
    //grab the data
    $email = $_POST["email"];
    $password = $_POST["password"];

    //instantiate SignupController class
    include './dbClass/db.php';
    include './modelClasses/userloginModel.classes.php';
    include './controllerClasses/userloginController.classes.php';
    
    $login = new UserLoginController($email, $password);
    // $name, $username, 

    //running error handlers and user signup
    $login->loginUser();

    //going back to front page
    header('location: ./index.php?error=none');
}