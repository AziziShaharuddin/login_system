<?php

//run queries inside the database
//inside this class we're going to create methods use to queries into database
class Login extends Dbh{
    //extend to Dbh class so we can use connection in Dbh class
    
    protected function setUser($email, $password) {
        // echo "You have successfully login!";
        $statement = $this->connect()->prepare('INSERT INTO users (user_email, user_password) VALUES (?, ?);');
        
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$statement->execute(array($email,$hashedpassword))){
            // The ! sign is to check if it fails, what will happen?
            $statement = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        $statement = null;
    }
}