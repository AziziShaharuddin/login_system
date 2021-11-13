<?php

//to open up database connection
class Dbh {
    // no constructor as we don't need to create object based f this class
    //protected function because we want the the methods in this class can be accessed by the child class
    protected function connect(){
        //try to run the code and if there's an error, it will execute the error
        try {
            // $servername = "localhost";
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=login', $username,$password); 
            return $dbh;
        } 
        catch(PDOException $e) {
            //checking PDOException type error and assign the error message to $e
            print "Error!: ".$e->getMessage()."<br>";
            die();
        }
    }
}