<?php

class register{
    private $error = "";
    # Public by default anyway
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
        $secret = "81xoorRZV4lGKWFZH19w";
        $hashed_password = password_hash($password . $secret, PASSWORD_DEFAULT);
        $qualifications = $data['qualifications'];
        // We create:
        $userid = $this->create_userid();
        $profileURL = strtolower($username).".".strval($userid);

        $DB = new database();
        $query= "insert into users (userid,username,gender,email,password,profileURL,qualifications) values ('$userid','$username','$gender','$email','$hashed_password','$profileURL','$qualifications')";
        $DB->write($query);
    }

    private function create_userid(){
        $len = rand(4,19);
        $num = "";

        for ($i = 0 ; $i < $len ; $i++){
            $new_rand = rand(0,9);
            $num = $num.$new_rand;
        }

        return $num;
    }

}

