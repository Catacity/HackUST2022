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

            if ($password == $row['password']){
                
                # This is a global variable that is available across the whole website
                $_SESSION['BiblioHK_userid'] = $row['userid'];
                return;
            }
        }

        $this->error .= "Incorrect password or email!";
        return $this->error;
    }

}

