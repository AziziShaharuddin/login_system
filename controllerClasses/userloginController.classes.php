<?php

//change something inside thedatabase

class UserLoginController extends Login {
    //properties (variables)
    private $email;
    private $password;

    //methods (function)
    public function __construct($email, $password) { 
       
        //grab the input and assign them into these properties here
        $this->email = $email;
        $this->password = $password; 
    }

    //any error handling such as to check if email/password type is correct or if user enter their details or not, need to create separate methods inside this class

    // if none of the error handler functions executed(meaning no error), then execute this function
    public function loginUser() {
        if($this->emptyInput() == false){
            // echo"<script>alert('Please fill in the details')";
            header('location: ../index.php?error=emptyinput');
            exit();
        }
        if($this->invalidEmail() == false){
            header('location: ../index.php?error=invalidemail');
            exit();
        }

        $this->setUser($this->email,$this->password); 
        // echo "You have successfully login!";
    }

    //checking if the input is not empty
    private function emptyInput() {
        $result;
        if( empty($this->email)  || empty($this->password)) {
            // empty($this->name) || empty($this->username)
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //checking if email exist or not
    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}