<?php

include_once("classes/connect.php");
include_once("classes/utils.php");

class register{
    private $error = "";
    private $database;
    # Public by default anyway

    function __construct($database) {
        $this->database = $database;
    }

    public function validate($data){
        foreach ($data as $key => $value){
            if (empty($value)){
                $this->error = $this->error . $key . " is empty!<br>"; # . concat to the end of the string
            } 
        }
        
        if($data['password'] != $data['password2']){
            $this->error = $this->error . "password mismatch!";    
        }

        if ($this->error == ""){
            $this->create_user($data);
        }
        else{
            return $this->error;
        }

    }

    public function create_user($data){
        $username = $data['username'];
        $gender = $data['gender'];
        $email= $data['email'];
        $password = $data['password']; //insert into database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $qualifications = $data['qualifications'];
        // We create:
        $userid = Utils::guidv4();
        $profileURL = strtolower($username).".".strval($userid);

        $query= "insert into users (userid,username,gender,email,password,profileURL,qualifications) values ('$userid','$username','$gender','$email','$hashed_password','$profileURL','$qualifications')";
        $this->database->write($query);
    }
    
}

$register = new register($database);

?>