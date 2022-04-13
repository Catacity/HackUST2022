<?php

class login{
    private $error = "";

    public function validate($data){
        $email= addslashes($data['email']);
        $password = addslashes($data['password']);

        $DB = new database();
        $query = "select * from users where email = '$email'";
        $results = $DB -> write($query);
        #print_r($results);

        if ($results){
            # Putting 1st result returned from query in $row variable
            $row = mysqli_fetch_assoc($results);
            if (password_verify($password, $row['password'])){ //verification
                
                # This is a global variable that is available across the whole website
                $_SESSION['BiblioHK_userid'] = $row['userid'];
                $_SESSION['BiblioHK_pageuserid'] = $row['userid'];
                return;
            }
        }

        $this->error .= "Incorrect password or email!";
        return $this->error;
    }

    public function check_login($id){
        $query = "select * from users where userid = '$id' limit 1";

        $DB = new database();
        $result = $DB -> read($query);

        if ($result){
            return true;
        }
        return false;
    }

}

