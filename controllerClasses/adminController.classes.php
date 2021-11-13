<?php

class DashboardController extends AttendanceLog {
    private $email;
    private $password;

    public function __construct($email, $password) { 
       
        $this->email = $email;
        $this->password = $password; 
    }

    public function Dashboard() {
        if($this->emptyInput() == false){
            // echo"<script>alert('Please fill in the details')";
            header('location: ../index.php?error=emptyinput');
            exit();
        }
        if($this->invalidEmail() == false){
            header('location: ../index.php?error=invalidemail');
            exit();
        }
        if($this->adminEmail() == false){
            header('location: ../index.php?error=usernotauthorized');
            exit();
        }        

        $this->attendanceDashboard(); 
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

    private function adminEmail() {
        $result;
        if( $this->email !== "superadmin@invoke.com"  || $this->password !== "SuperAdmin10") {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}